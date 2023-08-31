<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Skill;
use Inertia\Inertia;

use function Termwind\render;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Skills/Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Skills/Create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request
     *
     */


    public function store(Request $request)
    {
       $request->validate(
        ['image'=>['required','image'],
        'name'=>['required','min:3']]
       );
       if($request->hasFile('image')){
            $image=$request->file('image')->store('skills');
            Skill::create([
                'name'=>$request->name,
                'image'=>$image
            ]);
       }
       return Redirect::back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
