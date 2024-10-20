<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Enrollment;
use App\Models\Student;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enrollments = Enrollment::all();
        return view('enrollments.index')->with('enrollments',$enrollments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $batches = Batch::pluck('name','id');
        $students = Student::pluck('name','id');
        return view('enrollments.create', compact('batches', 'students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Enrollment::create($input);
        return redirect('enrollments')->with('flash_message','Enrollemnt added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enrollement = Enrollment::find($id);
        return view('enrollments.show')->with('enrollement',$enrollement);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enrollments = Enrollment::find($id);
        return view('enrollments.edit')->with('enrollments',$enrollments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $enrollement = Enrollment::find($id);
        $input = $request->all();
        $enrollement->update($input);
        return redirect('enrollments')->with('flash_message','Enrollment updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Enrollment::destroy($id);
        return redirect('enrollments')->with('flash_message','Enrollment Deleted!');
    }
}
