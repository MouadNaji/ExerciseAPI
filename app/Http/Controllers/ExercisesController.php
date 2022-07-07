<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercises;

class ExercisesController extends Controller
{
    Public function exercises(Request $request)
    {
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

    


}
