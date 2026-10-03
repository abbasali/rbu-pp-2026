<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/drives', function () {
    $drives = [
        [
            'id' => 1,
            'company' => 'Infosys',
            'role' => 'Systems Engineer',
            'package_lpa' => 3.6,
            'min_cgpa' => 6.0,
            'last_date' => '2026-10-15',
        ],
        [
            'id' => 2,
            'company' => 'TCS',
            'role' => 'Digital Developer',
            'package_lpa' => 7.0,
            'min_cgpa' => 7.0,
            'last_date' => '2026-10-20',
        ],
        [
            'id' => 3,
            'company' => 'Zoho',
            'role' => 'Software Developer',
            'package_lpa' => 8.4,
            'min_cgpa' => 7.5,
            'last_date' => '2026-10-25',
        ],
        [
            'id' => 4,
            'company' => 'Accenture',
            'role' => 'Associate Software Engineer',
            'package_lpa' => 4.5,
            'min_cgpa' => 6.5,
            'last_date' => '2026-11-01',
        ],
    ];

    return view('drives', ['drives' => $drives]);
});

Route::get('/about', function () {
    return view('about');
});
