<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

$workshops = [
    [
        'id' => 1,
        'title' => 'Mastering Tailwind CSS & Modern Blade Components',
        'category' => 'Frontend',
        'instructor' => 'Ali Abdelaziz',
        'date' => 'Aug 20, 2026',
        'time' => '10:00 AM - 2:00 PM',
        'level' => 'Intermediate',
        'price' => '$49',
        'description' => 'Learn how to build beautiful, responsive layout wrappers, hover-reactive cards, and modular component libraries.',
        'instructor_bio' => 'Ali is a Senior Frontend Architect who loves clean CSS and components.',
    ],
    [
        'id' => 2,
        'title' => 'Laravel 11 Fundamentals & MVC Architecture',
        'category' => 'Backend',
        'instructor' => 'Eng. Ahmed Taha',
        'date' => 'Aug 25, 2026',
        'time' => '1:00 PM - 5:00 PM',
        'level' => 'Beginner',
        'price' => '$59',
        'description' => 'Deep dive into the Laravel lifecycle, request routing, master layout templating, and passing dynamic array data to views.',
        'instructor_bio' => 'Ahmed is an active backend instructor and Laravel Core contributor.',
    ],
    [
        'id' => 3,
        'title' => 'Automating Deployments with GitHub Actions & Docker',
        'category' => 'DevOps',
        'instructor' => 'Sara Mansour',
        'date' => 'Sep 02, 2026',
        'time' => '9:00 AM - 1:00 PM',
        'level' => 'Advanced',
        'price' => '$79',
        'description' => 'Build automated testing pipelines and dockerise your PHP applications for zero-downtime hosting.',
        'instructor_bio' => 'Sara is a Lead DevOps Specialist who automates cloud infrastructure for startups.',
    ],
    [
        'id' => 4,
        'title' => 'Introduction to Large Language Models (LLMs) in PHP',
        'category' => 'AI',
        'instructor' => 'Dr. Kareem Ashraf',
        'date' => 'Sep 10, 2026',
        'time' => '2:00 PM - 6:00 PM',
        'level' => 'Advanced',
        'price' => '$99',
        'description' => 'Integrate AI text generation, vector embeddings, and cognitive reasoning services straight into your PHP backend.',
        'instructor_bio' => 'Dr. Kareem is an AI Researcher specializing in natural language parsing algorithms.',
    ],
    [
        'id' => 5,
        'title' => 'Advanced Database Optimisation & Indexing',
        'category' => 'Backend',
        'instructor' => 'Eng. Ahmed Taha',
        'date' => 'Sep 18, 2026',
        'time' => '1:00 PM - 4:00 PM',
        'level' => 'Advanced',
        'price' => '$69',
        'description' => 'Master transaction processing, indexes, query plans, and sub-queries to make your database lightning-fast.',
        'instructor_bio' => 'Ahmed is an active backend instructor and database performance tuning specialist.',
    ]
];
// Home Route
Route::get('/', function () use ($workshops) {
    $featuredWorkshops = array_slice($workshops, 0, 3);
    
    return view('home', [
        'workshops' => $featuredWorkshops
    ]);
});
// WORKSHOPS LIST
Route::get('/workshops', function () use ($workshops) {
    $category = request('category');
    if ($category) {
        $workshops = array_filter($workshops, function ($workshop) use ($category) {
            return strcasecmp($workshop['category'], $category) === 0;
        });
    }
    return view('workshops', [
        'workshops' => $workshops,
        'selectedCategory' => $category
    ]);
});
// WORKSHOP DETAIL
Route::get('/workshops/{id}', function ($id) use ($workshops) {
    $workshop = Arr::first($workshops, function ($value) use ($id) {
        return $value['id'] == $id;
    });
    if (!$workshop) {
        abort(404);
    }

    return view('workshop', [
        'workshop' => $workshop
    ]);
});
// ABOUT ROUTE
Route::get('/about', function () {
    $stats = [
        ['value' => '1,200+', 'label' => 'Total Students'],
        ['value' => '45+', 'label' => 'Workshops Held'],
        ['value' => '12', 'label' => 'Expert Instructors'],
    ];

    return view('about', [
        'stats' => $stats
    ]);
});
// CONTACT ROUTE
Route::get('/contact', function () {
    $contacts = [
        ['method' => 'Email Support', 'detail' => 'support@devpulse.com', 'availability' => '24/7 Response Time'],
        ['method' => 'Office Line', 'detail' => '+201114251498', 'availability' => 'Mon-Fri 9am - 5pm'],
        ['method' => 'HQ Address', 'detail' => '100 Technology Way, Cairo District', 'availability' => 'San Francisco, CA'],
    ];

    return view('contact', [
        'contacts' => $contacts
    ]);
});
