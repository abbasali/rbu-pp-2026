<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDriveRequest;
use App\Models\Drive;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class DrivesController extends Controller
{
    public $drives = [];

    public function index()
    {
        $drives = Drive::all();

        return view('drives.index', ['drives' => $drives]);
    }

    public function create(): View
    {
        return view('drives.create');
    }

    public function store(StoreDriveRequest $request): RedirectResponse
    {
        $drive = Drive::create($request->validated());

        return redirect('/drives/'.$drive->id)->with('status', 'Drive created successfully.');
    }

    public function show(int $id): View
    {
        $drive = Drive::where('id', $id)->first();

        return view('drives.show', ['drive' => $drive]);
    }
}
