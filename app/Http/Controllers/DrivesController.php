<?php

namespace App\Http\Controllers;

class DrivesController extends Controller
{
    public $drives = [];

    public function __construct()
    {
        $this->drives = [
            1 => [
                'id' => 1,
                'company' => 'Infosys',
                'role' => 'Systems Engineer',
                'package_lpa' => 3.6,
                'min_cgpa' => 6.0,
                'last_date' => '2026-10-15',
            ],
            2 => [
                'id' => 2,
                'company' => 'TCS',
                'role' => 'Digital Developer',
                'package_lpa' => 7.0,
                'min_cgpa' => 7.0,
                'last_date' => '2026-10-20',
            ],
            3 => [
                'id' => 3,
                'company' => 'Zoho',
                'role' => 'Software Developer',
                'package_lpa' => 8.4,
                'min_cgpa' => 7.5,
                'last_date' => '2026-10-25',
            ],
            4 => [
                'id' => 4,
                'company' => 'Accenture',
                'role' => 'Associate Software Engineer',
                'package_lpa' => 4.5,
                'min_cgpa' => 6.5,
                'last_date' => '2026-11-01',
            ],
        ];
    }

    public function index()
    {
        return view('drives', ['drives' => $this->drives]);
    }

}
