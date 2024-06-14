<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exhibition;
use Illuminate\Http\Request;

class ExhibitionController extends Controller
{
    public function index()
    {
        $exhibitions = Exhibition::all();
        return view('admin.exhibitions.index', compact('exhibitions'));
    }

    public function create()
    {
        return view('admin.exhibitions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        Exhibition::create($request->all());

        return redirect()->route('admin.exhibitions.index')->with('success', 'Exhibition created successfully.');
    }

    public function show(Exhibition $exhibition)
    {
        return view('admin.exhibitions.show', compact('exhibition'));
    }

    public function edit(Exhibition $exhibition)
    {
        return view('admin.exhibitions.edit', compact('exhibition'));
    }

    public function update(Request $request, Exhibition $exhibition)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $exhibition->update($request->all());

        return redirect()->route('admin.exhibitions.index')->with('success', 'Exhibition updated successfully.');
    }

    public function destroy(Exhibition $exhibition)
    {
        $exhibition->delete();

        return redirect()->route('admin.exhibitions.index')->with('success', 'Exhibition deleted successfully.');
    }
}
