<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $teachers = Teacher::all();
        return view('teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('teacher.creat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Teacher::create($input);
        return redirect('teacher')->with('flash_message', 'Teacher created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $Teacher = Teacher::findOrFail($id);
        return view('teacher.show', compact('Teacher', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $teacher = Teacher::findOrFail($id);
        return view('teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $teacher = Teacher::find($id);
        $input = $request->all();
        $teacher->update($input);
        return redirect('teacher')->with('flash_message', 'Teacher updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        return redirect('teacher')->with('flash_message', 'Teacher deleted successfully!');
    }
}
