<?php

namespace App\Http\Controllers;
use App\Http\Requests\UsersRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Sentinel;
use Validator;
use Input;
use App\User;
use App\Http\Requests;

class UsersController extends Controller
{
	public function index()
    {
        return view('disp.index', compact('user'));
    }

    public function indexlog()
    {
        return view('disp.indexlog');
    }
     public function create()

  {

    return view('user.create');

  }

   public function show()

  {

    

  }


  public function store(UsersRequest $request )

  {
  	$data = new User();
  	$data = $request->all();
  	$validator = Validator::make(Input::only('username', 'email', 'password','password_confirmation'), $data);
     $user = Sentinel::registerAndActivate($data);
      // Session::flash('notice', 'Signup Success');
     $role = Sentinel::findRoleBySlug('normal');
     $user->roles()->attach($role);
     $user->save();
  return Redirect::back()
    ->withSuccess('Role attached successfully.');
      // return redirect()->route('sets.assignRole');
  }

  public function destroy($id)
{
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.index');

}
}
