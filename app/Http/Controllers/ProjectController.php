<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('product');
    }
}