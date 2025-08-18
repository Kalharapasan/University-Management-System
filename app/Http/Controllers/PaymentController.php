<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use App\Models\Payment;
use App\Models\Enrollment;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $payments = Payment::all();
        return view('Payment.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $enrollments = Enrollment::pluck('enroll_on', 'id');
        return view('Payment.creat', compact('enrollments'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Payment::create($input);
        return redirect('payment')->with('flash_message', 'Payment created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $payment = Payment::findOrFail($id);
        return view('Payment.show', compact('payment', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $payment = Payment::findOrFail($id);
        $enrollments = Enrollment::pluck('enroll_on', 'id'); // id => name array
        return view('Payment.edit', compact('payment', 'enrollments'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $payment = Payment::findOrFail($id);
        $input = $request->all();
        $payment->update($input);
        return redirect('payment')->with('flash_message', 'Payment updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();
        return redirect('payment')->with('flash_message', 'Payment deleted successfully!');
    }
}
