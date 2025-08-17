<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Courses;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $courses = Courses::all();
        return view('Courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('Courses.creat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Courses::create($input);
        return redirect('course')->with('flash_message', 'Course created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $course = Courses::findOrFail($id);
        return view('Courses.show', compact('course', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $course = Courses::findOrFail($id);
        return view('Courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $course = Courses::find($id);
        $input = $request->all();
        $course->update($input);
        return redirect('course')->with('flash_message', 'Course updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $course = Courses::find($id);
        $course->delete();
        return redirect('course')->with('flash_message', 'Course deleted successfully!');
    }
}
