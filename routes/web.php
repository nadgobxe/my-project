<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

class Job {
    public static function all() {
        return [
            ['title' => 'Software Engineer', 'company' => 'Tech Corp', 'id' => 1],
            ['title' => 'Data Analyst', 'company' => 'Data Solutions', 'id' => 2],
            ['title' => 'Web Developer', 'company' => 'Web Innovations', 'id' => 3],
        ];
    }
}

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
