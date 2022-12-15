<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $users)
    {
        $users = $users->paginate(10);
        return view('users.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return view ('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole('user');

        session()->flash('success', 'Data Berhasil Ditambahkan');

        return redirect()->route('users.index');
    }

    public function show($id)
    {
        //
    }

    // public function edit($id)
    // {
    //     $user = User::find($id);

    //     return view('users.edit',[
    //         'user' => $user,
    //     ]);
    // }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //     ]);

    //     $user = User::find($id);

    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = Hash::make($request->password);

    //     $user->assignRole('user');
    //     $user->save();

    //     session()->flash('info', 'Data Berhasil Diperbarui');

    //     return redirect()->route('users.index');
    // }

    public function destroy($id)
    {
        $user = User::find($id);


        $user->delete();

        session()->flash('danger', 'Data Berhasil Dihapus');

        return redirect()->route('users.index');
    }
}
