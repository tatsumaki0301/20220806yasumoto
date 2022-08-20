<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Requests\AuthorRequest;

class MendantestController extends Controller

{
    public function index()
    {
        $authors = Author::all();
        return view('index', ['authors' => $authors]);
    }


    public function post(AuthorRequest $request)
    {
        return view('thanks');
    }

}
