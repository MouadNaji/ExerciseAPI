<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercises;

class ExercisesController extends Controller
{
    Public function exercises(Request $request)
    {

        if(request('search')!="" || request('type')!=""){
        $search = request('search');
        $data = Exercises::where('selected', false)->limit(20)->where('title', 'like', '%'.$search.'%');
        
        if(request("type")=="hard"){
            return $data->where('type','hard')->get();
        }
        if(request("type")=="easy"){
            return $data->where('type','easy')->get();
        }
        if(request("type")=="Intermediate"){
            return $data->where('type','Intermediate')->get();
        }
         return $data->get();
    }


        return Exercises::where('selected', false)->limit(20)->get();
      
    }



    Public function selected(Request $request)
    {
        return Exercises::where('selected', true)->limit(20)->get();
      
    }

    Public function select(Request $request)
    {
        try {
            $exercise = Exercises::find($request->id);
            $exercise->selected = 1;
            $exercise->save();
            return "succes";
          } catch (Exception $e) {
            return $e;
          }
    }


    Public function deselect(Request $request)
    {
        try {
            $exercise = Exercises::find($request->id);
            $exercise->selected = 0;
            $exercise->save();
            return "succes";
          } catch (Exception $e) {
            return $e;
          }
    }

    Public function search(Request $request)
    {
       $search = request('search');

       return Exercises::where('title', 'like', '%'.$search.'%')->get();
    }

    


}
