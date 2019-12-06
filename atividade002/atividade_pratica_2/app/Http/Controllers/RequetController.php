<?php

namespace App\Http\Controllers;

use App\Requet;
use App\User;
use App\Subject;
use Illuminate\Http\Request;

class RequetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requets = Requet::orderBy('date')->get();
        return view('requets.index', ['requets' => $requets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::orderBy('name')->get();
        $subjects = Subject::orderBy('name')->get();
        return view(
            'requets.create',
            ['users' => $users, 'subjects' => $subjects]
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
        $requet->save();
        // requet$requet::create($request->all());

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
        $users = User::orderBy('name')->get();
        $subjects= Subject::orderBy('name')->get();
        return view(
            'requets.edit',
            ['users' => $users,'subjects'=>$subjects, 'requet' => $requet]
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
        //Persiste no BD  

        $requet->save();
        session()->flash('mensagem', 'request atualizada com sucesso!');

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
        session()->flash('mensagem', 'request excluida com sucesso!');
        return redirect()->route('home');
    }
}
