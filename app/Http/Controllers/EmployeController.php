<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class EmployeController extends Controller
{
    public function index()
    {
        $employes = Employe::latest()->get();

        return view('employes.index', ['employes' => $employes]);
    }
}
