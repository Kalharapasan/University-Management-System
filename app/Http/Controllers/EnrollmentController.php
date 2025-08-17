<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Enrollment;

class EnrollmentController extends Controller
{

    public function index(): View
    {
        $enrollments = Enrollment::all();
        return view('Enrollment.index', compact('enrollments'));
    }


    public function create(): View
    {
        return view('Enrollment.creat');
    }


    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Enrollment::create($input);
        return redirect('enrollment')->with('flash_message', 'Enrollment created successfully!');
    }


    public function show(string $id): View
    {
        $enrollment = Enrollment::findOrFail($id);
        return view('Enrollment.show', compact('enrollment', 'id'));
    }


    public function edit(string $id): View
    {
        $enrollment = Enrollment::findOrFail($id);
        return view('enrollment.edit', compact('enrollment'));
    }

   
    public function update(Request $request, string $id): RedirectResponse
    {
        $enrollment = Enrollment::find($id);
        $input = $request->all();
        $enrollment->update($input);
        return redirect('enrollment')->with('flash_message', 'Enrollment updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $enrollment = Enrollment::find($id);
        $enrollment->delete();
        return redirect('enrollment')->with('flash_message', 'Enrollment deleted successfully!');
    }
}
