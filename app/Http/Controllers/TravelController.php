<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel; 

class TravelController extends Controller
{
    public function index()
    {
        $travel = Travel::paginate(10);
        return view('travelmin.index', compact('travel'));
    }

    // Create
    public function create()
    {
        return view('travelmin.create');
    }

    public function store(Request $request)
    {
        Travel::create($request->all());
        return redirect('/travelmin')->with('success', 'Data berhasil ditambahkan');
    }

    // Update
    public function edit($id)
    {
        $travel = Travel::find($id);
        return view('travelmin.edit', compact('travel'));
    }

    public function update(Request $request, $id)
    {
        $travel = Travel::find($id);
        $travel->update($request->all());
        return redirect('/travelmin')->with('success', 'Data berhasil diupdate');
    }

    // Delete
    public function destroy($id)
    {
        Travel::destroy($id);
        return redirect('/travelmin')->with('success', 'Data berhasil dihapus');
    }

    // Detail
    public function show($id)
    {
        $travel = Travel::find($id);
        return view('travelmin.show', compact('travel'));
    }
}
