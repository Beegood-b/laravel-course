<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Diretor',
                'salary' => '$50 000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$10 000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$40 000'
            ],
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Diretor',
            'salary' => '$50 000'
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$10 000'
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '$40 000'
        ],
    ];

    $job = Illuminate\Support\Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
