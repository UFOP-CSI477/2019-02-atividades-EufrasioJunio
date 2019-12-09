<?php

namespace App\Http\Controllers;

use App\Requet;
use App\Subject;
use Illuminate\Http\Request;
use Mockery\Matcher\Subset;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->type == 1) {
            return view('subjects.create');
        } else {
            return redirect()->route('protocols');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->type == 1) {
            $subject = new Subject;
            $subject->fill($request->all());
            $subject->save();
            // Subject::create($request->all());
            session()->flash('mensagem', 'subject successfully created!');
            return redirect()->route('subjects.show', $subject);
        } else {
            return redirect()->route('protocols');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        return view('subjects.show', ['subject' => Subject::findOrFail($subject->id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        if (Auth::user()->type == 1) {
            return view('subjects.edit', ['subject' => $subject]);
        } else {
            return redirect()->route('protocols');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        if (Auth::user()->type == 1) {
            $subject->fill($request->all());
            //Persiste no BD  

            $subject->save();
            session()->flash('mensagem', 'subject updated successfully!');
        }
        return redirect()->route('subjects.show', $subject);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        if (Auth::user()->type == 1) {
            $p = Requet::where('subject_id', '=', $subject->id)->get();
            // dd($p);
            if ($p->isEmpty()) {
                $subject->delete();
                session()->flash('mensagem', 'subject deleted successfully!');
            } else {
                session()->flash('mensagem', 'subject linked to request and cannot be deleted!');
                return redirect()->route('protocols');
            }
        }
        return redirect()->route('protocols');
    }
}
