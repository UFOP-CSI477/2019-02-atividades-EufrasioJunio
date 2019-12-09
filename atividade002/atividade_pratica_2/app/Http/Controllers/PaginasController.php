<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class PaginasController extends Controller
{
public function index()
    {
        $subjects = Subject::orderBy('name')->get();
        return view ('lista', [ 'subjects' => $subjects]);
    }

}
