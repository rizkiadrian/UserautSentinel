<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Validator;
use Input;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       if ( !Sentinel::hasAccess('admin.index')){

            return redirect('/home');

        }
        else{
             $user = User::all();
              $user = DB::table('users')->paginate(10);
            return view('include.admincontrol', compact('user'),['users' => $user]);

        }

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.index');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $user = User::where('username','LIKE','%'.$search.'%')->paginate(10);
        return view('include.admincontrol', compact('user'));
    }
}
