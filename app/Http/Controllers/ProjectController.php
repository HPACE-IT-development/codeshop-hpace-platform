<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        if ($request->has('filter')) {
            $filter = $request->filter;
            $query = Project::query();

            if (isset($filter['category'])) {
                $query->whereIn('category_id', $filter['category']);
            }
            if (isset($filter['price']['min']) or isset($filter['price']['max'])) {
                $query->whereIn('price', [$filter['price']['min'], $filter['price']['max']]);
            }

            $products = $query->paginate(10);
        } else {
            $products = Project::paginate(2);
        }

        return view('catalog', [
            'products' => $products,
            'categories' => Category::all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('single-product');
    }
}
