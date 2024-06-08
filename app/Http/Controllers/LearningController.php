<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LearningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $boughtPrograms = Auth::user()->boughtPrograms;
        return view('learning.index', ['programs' => $boughtPrograms]);
    }

    public function buyProgram($id, Request $request)
    {
        $user = Auth::user();
        $program = Program::find($id);
        if (!$user->boughtPrograms->contains($program)) {
            $user->boughtPrograms()->attach($program);
        }

        // $boughtPrograms = $request->session()->get('bought_programs', []);
        // if (!in_array($id, $boughtPrograms)) {
        //     $boughtPrograms[] = $id;
        // }

        // $request->session()->put('bought_programs', $boughtPrograms);

        return redirect('/learning');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $program = Program::findOrFail($id);
        return view('learning.posts.show', compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
