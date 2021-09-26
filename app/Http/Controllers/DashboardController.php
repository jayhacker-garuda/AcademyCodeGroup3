<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        return view("auth.dashboard");

    }

    public function viewCourses()
    {
        
        return view("auth.courseView")->with('courses', Course::all());
        
    }
}