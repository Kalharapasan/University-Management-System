<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Batches;
use App\Models\Courses;

class BatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $batches = Batches::all();
        return view('Batches.index', compact('batches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $courses = Courses::pluck('name', 'id');
        return view('Batches.creat', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Batches::create($input);
        return redirect('batch')->with('flash_message', 'Batch created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $batch = Batches::findOrFail($id);
        return view('Batches.show', compact('batch', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $batch = Batches::findOrFail($id);
        return view('Batches.edit', compact('batch'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $batch = Batches::find($id);
        $input = $request->all();
        $batch->update($input);
        return redirect('batch')->with('flash_message', 'Batch updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $batch = Batches::find($id);
        $batch->delete();
        return redirect('batch')->with('flash_message', 'Batch deleted successfully!');
    }
}
