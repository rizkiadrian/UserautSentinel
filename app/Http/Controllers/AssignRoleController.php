<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Sentinel;
use Validator;
use Input;
use App\Http\Requests;

class AssignRoleController extends Controller
{
    



    public function assignRole()
{
	$role = Sentinel::findRoleBySlug('admin');

	$user = Sentinel::getUser();

	$user->roles()->attach($role);
	$user->addPermission('admin.index');
	$user->save();

	return Redirect::back()
		->withSuccess('Role attached successfully.');

}

 public function addPermission()
{
	






	return Redirect::back()->withSuccess('Permission added successfully.');
}
		
		
}
