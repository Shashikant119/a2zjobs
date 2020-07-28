<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       $data=DB::table('blog')->paginate(10);
       return view('admin.list_blog')
                            ->with('data',$data);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body'  => 'required',
        ]);
        $data = array(
            'title' =>$request->get('title'),
            'body' =>$request->get('body'),
             );
        DB::table('blog')->insert($data);
        return redirect('/Blog');
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
           $data=DB::table('blog')->get();
           $data_base=DB::table('blog')->where('id',$id)->first();
           return view('admin.update_blog')
                           ->with('data_base',$data_base)
                           ->with('data',$data);
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
         /*$request->validate([
            'title' => 'required',
            'body'  => 'required',
        ]);*/
        $data = array(
            'title' =>$request->get('title'),
            'body' =>$request->get('body')
             );
        DB::table('blog')->where('id',$id)->update($data);
        return redirect('/Blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('blog')->where('id',$id)->delete();
        return redirect('/Blog');
    }
}
