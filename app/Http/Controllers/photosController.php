<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\User;
use DB;
use Carbon\Carbon;

class photosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        $now = Carbon::now();
        // $nw->created_at->format('d.m.Y');
        $photos_this_month = Photo::orderBy('total','DESC')->where( DB::raw('MONTH(created_at)'), '=', date('n') )->get();
        $allphotos = Photo::orderBy('created_at','DESC')->get();
        $photos = Photo::orderBy('total','DESC')->get();
        return view('main',compact('allphotos','photos', 'photos_this_month','now','users'));
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
         $this->validate($request,[
            // 'name'=>'required',
            // 'email'=>'required',
            'file'=>'required|file|mimes:jpg,jpeg,png,doc,pdf,svg,gif|max:10000'
            
        ]);

        //handle upload
        if($request->hasFile('file')){
            //get filename with extension
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('file')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('file')->storeAs('public/file',$fileNameToStore);



        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        //create application
$store = new Photo;
$store->file = $fileNameToStore;
$store->save();
        

return redirect()->back();
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
        $p= Photo::find($id);
        $p->increment('upvotes');
        $p->increment('total');
        
        //return DB::table('photos')->where('id','=',$id)->get();
        return redirect()->back();
    }

    public function upvote(Request $request, $id)
    {
       $up= Photo::find($id)->first();
       //$up->increment('upvotes','1');
       $up->upvotes+=1;
       $up->save();

       
    
    }

    public function downvote(Request $request, $id)
    {
        $p = Photo::find($id);
        $p->increment('downvotes');
        $p->decrement('total');
        return redirect()->back();
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
