<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainer;

class TrainerController extends Controller
{
    public function index() {
        $trainers = Trainer::all();
        return view('trainers', compact('trainers'));
    }

    public function create() {
        return view('trainers');
    }

    public function store(Request $request) {
        Trainer::create($request->all());
        return redirect()->route('trainers.index');
    }
}