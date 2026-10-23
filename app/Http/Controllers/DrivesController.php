<?php

namespace App\Http\Controllers;

use App\Models\Drive;
use Illuminate\Contracts\View\View;

class DrivesController extends Controller
{
    public $drives = [];

    public function index()
    {
        $drives = Drive::all();

        return view('drives.index', ['drives' => $drives]);
    }

    public function show(int $id): View
    {
        $drive = Drive::where('id', $id)->first();

        return view('drives.show', ['drive' => $drive]);
    }
}
