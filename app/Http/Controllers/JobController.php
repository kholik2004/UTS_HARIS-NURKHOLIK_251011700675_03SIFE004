<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JobController extends Controller
{
    public function index(Request $request): View
    {
        $jobs = Job::query()
            ->when($request->filled('q'), function ($query) use ($request) {
                $term = $request->string('q')->toString();
                $query->where('title', 'like', "%{$term}%");
            })
            ->when($request->filled('company'), function ($query) use ($request) {
                $query->where('company', 'like', '%'.$request->string('company')->toString().'%');
            })
            ->when($request->filled('location'), function ($query) use ($request) {
                $query->where('location', 'like', '%'.$request->string('location')->toString().'%');
            })
            ->latest('posted_date')
            ->paginate(6)
            ->withQueryString();

        return view('jobs.index', compact('jobs'));
    }

    public function show(Job $job): View
    {
        return view('jobs.show', compact('job'));
    }
}
