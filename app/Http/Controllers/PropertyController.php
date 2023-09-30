<?php

namespace App\Http\Controllers;

use App\Models\property;
use Illuminate\Http\Request;
use App\Models\Form;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = auth()->user()->id;
        $data = Form::where('user_id','=',$id)->get();
        return $data;
        //
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
    public function show(property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(property $property)
    {
        //
    }
}
