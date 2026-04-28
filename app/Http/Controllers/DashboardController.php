<?php

namespace App\Http\Controllers;

use App\Models\Member;

class DashboardController extends Controller
{
    public function index()
    {
        $totalMembers = Member::count();

        $activeMembers = Member::where('end_date', '>=', now())->count();

        $expiredMembers = Member::where('end_date', '<', now())->count();

        return view('dashboard', compact(
            'totalMembers',
            'activeMembers',
            'expiredMembers'
        ));
    }
}