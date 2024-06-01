<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Program;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.index', [
            'programs' => Program::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.posts.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'body' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('posts-image');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Program::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $program = Program::findOrFail($id);
        return view(
            'dashboard.posts.show',
            compact('program')
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $program = Program::findOrFail($id);
        $categories = Category::all();
        return view('dashboard.posts.edit', compact('program', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'body' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        $program = Program::findOrFail($id);
        $program->title = $request->input('title');
        $program->description = $request->input('description');
        $program->body = $request->input('body');
        $program->price = $request->input('price');
        $program->category_id = $request->input('category_id');
        $program->image = $request->input('image');

        $program->save();

        return redirect('/dashboard/posts')->with('success', 'Program updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $program = Program::findOrFail($id);
        $program->delete();

        return redirect('/dashboard/posts')->with('success', 'Program deleted successfully');
    }
}
