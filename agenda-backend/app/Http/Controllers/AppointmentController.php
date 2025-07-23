<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Routing\Controller;


class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Logic to retrieve and return a list of appointments
        return response()->json(Appointment::orderBy('date')->orderBy('time')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'name' => 'required|string|max:255',
        ]);
        Appointment::create($request->all());
        // Logic to create a new appointment
        return response()->json(['message' => 'Appointment created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'date' => 'sometimes|required|date',
            'time' => 'sometimes|required',
            'name' => 'required|string|max:255',
        ]);
        $appointment = Appointment::findOrFail($id);
        $appointment->update($request->all());
        // Logic to update an existing appointment
        return response()->json(['message' => 'Appointment updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();
        // Logic to delete an appointment
        return response()->json(['message' => 'Appointment deleted successfully']);
    }
}
