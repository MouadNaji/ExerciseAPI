<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercises;

class ExercisesController extends Controller
{
    Public function index(Request $request)
    {
        return Exercises::all();
    }
}
