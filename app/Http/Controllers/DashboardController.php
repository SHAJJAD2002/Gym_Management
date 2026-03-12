<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Trainer;

class DashboardController extends Controller
{
    public function index()
    {
        $members_count = Member::count();
        $trainers_count = Trainer::count();
        return view('dashboard', compact('members_count', 'trainers_count'));
    }
}