<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        return view('students.payment');
    }

}
