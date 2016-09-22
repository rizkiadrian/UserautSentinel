<?php

namespace App\Http\Controllers;
use Sentinel;
use Validator;
use Input;
use Flash;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

use App\Http\Requests;

class LoginController extends Controller
{
	public function index()
    {
        return view('disp.index', compact('data'));
    }



  public function store(LoginRequest $request )
  {
  	
  	if ($auth = Sentinel::authenticate($request->all()))
	{
		return redirect()->route('users.indexlog');
	}

	// return Redirect::back()
		// ->withInput()
    
		return redirect()->route('users.create');

  }  

  public function destroy($id)

  {


  }	

  public function logout()

  {

        $user = Sentinel::getUser();
        Sentinel::logout($user, true);
        return redirect('/home');

  } 

  public function tampil()

  {
      $user = Sentinel::getUser();
      $data = $user->email;
        

  } 

}
