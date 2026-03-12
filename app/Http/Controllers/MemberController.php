<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index() {
        $members = Member::all();
        return view('members', compact('members'));
    }

    public function create() {
        return view('members');
    }

    public function store(Request $request) {
        Member::create($request->all());
        return redirect()->route('members.index');
    }
}