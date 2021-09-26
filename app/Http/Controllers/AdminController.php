<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\TypesOfCourse;
use Illuminate\Http\Request;

class AdminController extends Controller
{
<<<<<<< Updated upstream
    public function index(){
        return view('admin.index');
    }
}
=======
    public function index()
    {
        return view('admin.index')->with('categories', TypesOfCourse::all());
    }

    public function studentView()
    {
        return view('admin.student.index');
    }

    public function coursesView()
    {
        return view('admin.courses.index')->with('courses', Course::all());
    }
    
    public function storeCourse(Request $request){

        $request->validate([
            'courses_name' => 'required',
            'category' => 'required'
        ]);

        if ($request) {
            Course::create([
                'course_name' => $request->courses_name,
                'course_type_id' => $request->category
            ]);

            return redirect()->route('Admin.courses');
        }
        
    }

    public function categoryView()
    {
        return view('admin.category.index')->with('categories', TypesOfCourse::all());
    }

    public function createCourse()
    {
        return view('admin.courses.create')->with('categories', TypesOfCourse::all());
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'category_desc' => 'required' 
        ]);
        
        if ($request) {
            TypesOfCourse::create([
               'course_type' => $request->category_name,
               'desc' => $request->category_desc 
            ]);
            
            return redirect()->route('Admin.category');
        }
        // dd($request);
    }

    public function createCategory()
    {
        return view('admin.category.create');
    }
}
>>>>>>> Stashed changes
