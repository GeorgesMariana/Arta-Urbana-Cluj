<?php

namespace App\Http\Controllers;

use App\Models\Fair;
use Illuminate\Http\Request;

class FairController extends Controller
{
    public function index()
    {
        $fairs = Fair::all();
        return view('fairs.index', compact('fairs'));
    }

    public function show(Fair $fair)
    {
        return view('fairs.show', compact('fair'));
    }

    public function create()
    {
        return view('fairs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'location' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        Fair::create($request->all());
        return redirect()->route('fairs.index');
    }

    public function edit(Fair $fair)
    {
        return view('fairs.edit', compact('fair'));
    }

    public function update(Request $request, Fair $fair)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'location' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        $fair->update($request->all());
        return redirect()->route('fairs.index');
    }

    public function destroy(Fair $fair)
    {
        $fair->delete();
        return redirect()->route('fairs.index');
    }
}
