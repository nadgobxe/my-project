<?php

namespace App\Models;

class Job {
    public static function all() {
        return [
            ['title' => 'Software Engineer', 'company' => 'Tech Corp', 'id' => 1],
            ['title' => 'Data Analyst', 'company' => 'Data Solutions', 'id' => 2],
            ['title' => 'Web Developer', 'company' => 'Web Innovations', 'id' => 3],
        ];
    }
}