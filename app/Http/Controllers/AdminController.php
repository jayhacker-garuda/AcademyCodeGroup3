<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function studentView()
    {
        return view('admin.student.index');
    }

    public function coursesView()
    {
        return view('admin.courses.index');
    }

    public function categoryView()
    {
        return view('admin.category.index');
    }

    public function createCourse()
    {
        return view('admin.courses.create');
    }

    public function createCategory()
    {
        return view('admin.category.create');
    }
}
