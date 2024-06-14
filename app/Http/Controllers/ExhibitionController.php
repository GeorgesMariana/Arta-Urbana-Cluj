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
        return view('exhibitions.index', compact('exhibitions'));
    }

    public function create()
    {
        return view('exhibitions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        Exhibition::create($request->all());
        return redirect()->route('exhibitions.index');
    }

    public function show(Exhibition $exhibition)
    {
        return view('exhibitions.show', compact('exhibition'));
    }

    public function edit(Exhibition $exhibition)
    {
        return view('exhibitions.edit', compact('exhibition'));
    }

    public function update(Request $request, Exhibition $exhibition)
    {
        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        $exhibition->update($request->all());
        return redirect()->route('exhibitions.index');
    }

    public function destroy(Exhibition $exhibition)
    {
        $exhibition->delete();
        return redirect()->route('exhibitions.index');
    }
}
