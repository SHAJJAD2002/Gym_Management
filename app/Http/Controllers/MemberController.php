<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{

    public function index()
    {
        $members = Member::all();
        return view('members', compact('members'));
    }

    public function create()
    {
        return view('create_member');
    }

    public function store(Request $request)
    {
        Member::create($request->all());
        return redirect()->route('members.index');
    }

    public function edit($id)
    {
        $member = Member::find($id);
        return view('edit_member', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $member = Member::find($id);
        $member->update($request->all());
        return redirect()->route('members.index');
    }

    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect()->route('members.index');
    }

}