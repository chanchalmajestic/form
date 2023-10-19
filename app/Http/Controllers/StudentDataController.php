<?php

namespace App\Http\Controllers;

use App\Models\StudentData;
use App\Http\Requests\StoreStudentDataRequest;
use App\Http\Requests\UpdateStudentDataRequest;

class StudentDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $student = StudentData :: orderBy('id','desc')->paginate(10);;
        return view('admin.StudentData', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentData $studentData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentData $studentData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentDataRequest $request, StudentData $studentData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentData $studentData)
    {
        //
    }
}
