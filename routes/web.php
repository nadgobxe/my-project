<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;


Route::get('/', function () {
    return view('welcome', [
        'jobs' => Job::all(),
    ]);
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all(),
    ]);;
});

Route::get('/jobs/{id}', function ($id) {

     $job = Arr::first(Job::all(), function ($job) use ($id) {
        return $job['id'] == $id;
    });
    
    return view('job', ['job' => $job]);
});
