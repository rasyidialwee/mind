<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('subjects/index', [
            'subjects' => Subject::orderBy('updated_at', 'desc')->paginate(10)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subjects/form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubjectRequest $request)
    {
        // dd($request->all());
        $subject = new Subject();
        $subject->name = $request->name;
        $subject->description = $request->description;
        $subject->score = $request->score;
        $subject->status = $request->status;
        $subject->save();

        return to_route('subjects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        return view('subjects/form',[
            'subject' => $subject,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        // dd($request->all(), $subject);
        $subject->name = $request->name;
        $subject->description = $request->description;
        $subject->score = $request->score;
        $subject->status = $request->status;
        $subject->save();

        return to_route('subjects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        // dd($subject);
        $subject->delete();
        return to_route('subjects.index');
    }
}
