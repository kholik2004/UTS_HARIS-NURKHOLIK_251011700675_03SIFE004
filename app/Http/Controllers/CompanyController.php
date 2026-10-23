<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CompanyController extends Controller
{
    public function index(Request $request): View
    {
        $companies = Job::query()
            ->select('company')
            ->selectRaw('COUNT(*) as job_count')
            ->when($request->filled('q'), function ($query) use ($request) {
                $query->where('company', 'like', '%'.$request->string('q')->toString().'%');
            })
            ->groupBy('company')
            ->orderBy('company')
            ->paginate(9)
            ->withQueryString();

        return view('companies.index', compact('companies'));
    }
}
