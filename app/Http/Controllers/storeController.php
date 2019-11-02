<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

class storeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'name'=>'required',
            'email'=>'required',
            'file'=>'required|file|mimes:jpg,jpeg,png,doc,pdf,svg,gif|max:2048'
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
$store = new Store;
$store->name = $request->input('name');
$store->email = $request->input('email');
$store->file = $fileNameToStore;
 
 $store->save();
        

        return redirect('/main');
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
        //
    }
}
