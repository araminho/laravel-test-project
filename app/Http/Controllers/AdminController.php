<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perPage  = Input::get('perPage', 10);
        $users = User::paginate($perPage);

        return view('admin.users', [
            "users" => $users->appends(Input::except('page')),
            "perPage" => $perPage
        ]);
    }

    public function editUser(User $user)
    {
        return view('admin.edit-user', compact('user'));
    }

    public function storeUser(Request $request, $id)
    {
        $this->validate(request(), [
            'name' => 'required|string|max:255|AlphaNum',
            'last_name' => 'required|string|max:255|AlphaNum',
            'is_active' => 'required|boolean',
            'description' => 'string|nullable',
        ]);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->last_name = $request->get('last_name');
        $user->description = $request->get('description');
        $user->is_active = $request->get('is_active');
        $user->save();
        return redirect('/admin');
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/admin');
    }
}