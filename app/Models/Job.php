<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'title', 'company', 'image', 'location', 'salary', 'type',
        'requirements', 'posted_date', 'description',
    ];

    protected function casts(): array
    {
        return ['posted_date' => 'date'];
    }
}
