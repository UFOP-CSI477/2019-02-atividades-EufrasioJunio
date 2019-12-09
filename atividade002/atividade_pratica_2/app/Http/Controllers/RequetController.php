<?php

namespace App\Http\Controllers;

use App\Requet;
use App\User;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $requets = Requet::where('user_id','=',Auth::user()->id)->get();
        return view('requets.index', ['requets' => $requets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::orderBy('name')->get();
        return view(
            'requets.create',
            [ 'subjects' => $subjects]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requet = new Requet();
        $requet->fill($request->all());
        $requet->user_id = Auth::user()->id;
        $requet->save();
        // requet$requet::create($request->all());
        session()->flash('mensagem', 'request successfully created!');
        return redirect()->route('requets.show', $requet);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Requet  $requet
     * @return \Illuminate\Http\Response
     */
    public function show(Requet $requet)
    {
        return view('requets.show', ['requet' => Requet::findOrFail($requet->id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Requet  $requet
     * @return \Illuminate\Http\Response
     */
    public function edit(Requet $requet)
    {
        $subjects= Subject::orderBy('name')->get();
        return view(
            'requets.edit',
            ['subjects'=>$subjects, 'requet' => $requet]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Requet  $requet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requet $requet)
    {
        $requet->fill($request->all());
        $requet->user_id = Auth::user()->id;
        //Persiste no BD  

        $requet->save();
        session()->flash('mensagem', 'request updated successfully!');

        return redirect()->route('requets.show', $requet);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Requet  $requet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requet $requet)
    {
        $requet->delete();
        session()->flash('mensagem', 'request deleted successfully!');
        return redirect()->route('protocols');
    }
}
