<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainer;

class TrainerController extends Controller
{
    public function index()
    {
        $trainers = Trainer::all();
        return view('trainers', compact('trainers'));
    }

    public function create()
    {
        return view('create_trainer');
    }

    public function store(Request $request)
    {
        Trainer::create($request->all());
        return redirect('/trainers');
    }

    public function edit($id)
    {
        $trainer = Trainer::find($id);
        return view('edit_trainer', compact('trainer'));
    }

    public function update(Request $request, $id)
    {
        $trainer = Trainer::find($id);
        $trainer->update($request->all());
        return redirect('/trainers');
    }

    public function destroy($id)
    {
        $trainer = Trainer::find($id);
        $trainer->delete();
        return redirect('/trainers');
    }
}