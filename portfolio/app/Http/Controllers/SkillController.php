<?php

namespace App\Http\Controllers;

use App\Http\Resources\SkillResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Skill;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

use function Termwind\render;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {$skills=SkillResource::collection(Skill::all());
        return Inertia::render('Skills/Index',compact('skills'));
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
            $image=$request->file('image')->store('skills','public');
            Skill::create([
                'name'=>$request->name,
                'image'=>$image
            ]);
            return Redirect::route('skills.index');
       }
       return Redirect::back()->with('massage','Skill created successfully');
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
    public function edit(Skill $skill)
    {
      return  Inertia::render('Skills/Edit',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $image=$skill->image;
        $request->validate([
            'name'=>['required','min:3']
        ]);
        if($request->hasFile('image')){
            Storage::delete('public/' . $skill->image);
            $image=$request->file('image')->store('skills','public');
        }
        $skill->update([
            'name'=>$request->name,
            'image'=>$image
        ]);
        return Redirect::route('skills.index')->with('massage','Skill updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)

    {

        Storage::delete('public/' . $skill->image);
        $skill->delete();
        return Redirect::back()->with('massage','Skill deleted successfully');
    }
}
