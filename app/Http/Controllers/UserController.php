<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function register()
    {
        return view('register');
    }

     public function user()
    {
        $users = User::all();
        return view('admin.user', compact('users'));
    }

    public function inputRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);
        return redirect('/user')->with('successs', 'berhasil membuat akun!');
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
    public function edit($id)
    {
         $users = User::where('id', '=', $id)->firstOrFail();
        return view('admin.edituser', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, $id)
    {
        
        $user = User::findOrFail($id);
    
        $user->update([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);
    
        return redirect('/user')->with('successEditUser', 'Berhasil Mengupdate User');
    }


    /**
     * Remove the specified resource from storage.
     */
      public function destroy($id)
    {
    User::where('id', '=', $id)->delete();
    return redirect()->back()->with('successDelete', 'Berhasil menghapus data user!');
}

}