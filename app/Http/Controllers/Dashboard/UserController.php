<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Account::orderBy('account_id', 'desc')->paginate(11);
        return view('dashboard.user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function setAsAdmin(string $id)
    {
        $user = Account::find($id);

        $user->update(['role' => 'ADMIN']);

        return redirect()->route('users.index')->with('status', 'success')->with('message', 'Data kelas berhasil diubah.');
    }

    public function setAsMember(string $id)
    {
        $user = Account::find($id);

        $user->update(['role' => 'MEMBER']);

        return redirect()->route('users.index')->with('status', 'success')->with('message', 'Data kelas berhasil diubah.');
    }
}
