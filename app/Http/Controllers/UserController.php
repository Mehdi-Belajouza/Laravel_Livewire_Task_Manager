<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

/* -------------- Admin -------------------- */
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('livewire.users.index', compact('users'));
    }
    /* storing query to database */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        /* redirect to main page */
        return redirect()->route('users.index');
    }
    /*____________ CRUD_________________ */

    /* creating user */
    public function create()
    {
        return view('livewire.users.create');
    }
    /* editing user */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('livewire.users.edit', compact('user'));
    }
    /* updating user */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,'.$user->id,
            'password' => 'required|min:8',
        ]);

        User::updateUser($user, $request->all());

        return redirect()->route('users.index');
    }

    /* deleting user */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
    /*____________________________ */

    /* display the user profile to the user */
    public function showProfile()
    {
        $user = Auth::user();
        return view('livewire.users.profile', ['user' => $user]);
    }
    public function showDashboard($id)
    {
        $user = User::find($id);
        return view('livewire.users.dashboard', ['user' => $user]);
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search_term');
        $users = User::where(function($query) use ($searchTerm) {
                     $query->where('name', 'LIKE', '%'.$searchTerm.'%')
                           ->orWhere('email', 'LIKE', '%'.$searchTerm.'%');
                 })
                 ->get();

        return view('livewire.users.index', compact('users'));
    }

}
