<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

       $data = Form::where('user_id',$request->user()->id)->get();
       return response()->json($data);
    }
    public function getAll(Request $request)
    {

        $data = Form::all();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            try {
                $userId = $request->user()->id;
//                return response()->json(['data'=>$userId]);
                $bookingForm = new Form();
                $bookingForm->nameOfProperty = $request->nameOfProperty;
                $bookingForm->category = $request->category;
                $bookingForm->description = $request->description;
                $bookingForm->gmap = $request->gmap;
                $bookingForm->price = $request->price;

                if($request->file('image')) {
                    $image = $request->file('image');
                    $folder_path = public_path().DIRECTORY_SEPARATOR.'storage';
                    $file_name = $image->getClientOriginalName();
                    $image->move($folder_path, $file_name);
                    $bookingForm->image = $file_name;
                } else {
                    $bookingForm->image = '';
                }
                // return $bookingForm;
                $bookingForm->save();
                return response()->json([
                    'status' => 1,
                    'message' => 'Form added'
                ]);
            } catch (\Exception $e) {
                throw $e;
            }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
