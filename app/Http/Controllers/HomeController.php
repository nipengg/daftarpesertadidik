<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [];
        $students = DB::select('
            SELECT * FROM students
        ');
        $data['students'] = $students;
        return view('home' , $data);
    }

    public function view($id)
    {
        $data = [];
        $students = DB::select('
            SELECT * FROM students WHERE id = ?
        ',[$id]);
        $data['students'] = $students;

        return view('view' , $data);
    }
}
