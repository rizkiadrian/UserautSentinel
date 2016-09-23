<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Articles;
use App\Http\Requests;
use Sentinel;
use Validator;
use Input;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       
         $data = Articles::all();
        $data = DB::table('articles')->paginate(10);

            return view('include.articleadmin', compact('data'),['articles' => $data]);


   }
        
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('include.CreateArticle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $user = Sentinel::getUser();
        $data = new Articles();
        $data->user_id = $user->id;
        $data->user_email = $user->email;
        $data->article = $request->article;
        $data->save();
        return redirect()->route('article.index');
        
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
        if ($user = Sentinel::check()){
        if ( Sentinel::hasAccess('admin.index')){
        $data = Articles::findOrFail($id);
        return view('include.editarticle', compact('data'));
    }
        else{
            return view('disp.indexlog');
        }
    
}
    else{
        return view('disp.indexlog');
    }
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
        if ($user = Sentinel::check()){
        if ( Sentinel::hasAccess('admin.index')){
        $data = Articles::findOrFail($id);
        $data->article = $request->article;
        $data->save();
        return redirect()->route('article.index');
    }
    else{
        return view('disp.indexlog');
    }
}
    else{
        return view('disp.indexlog');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Articles::findOrFail($id);
        $data->delete();
        return redirect()->route('article.index');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $data = Articles::where('article','LIKE','%'.$search.'%')->paginate(10);
        return view('include.articleadmin', compact('data'));
    }
}
