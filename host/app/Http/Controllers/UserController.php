<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Image;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pro = new User;
       
       $dat= $pro::orderBy('name','desc')->paginate(10);
        // return $dat;
      //$dat= $pro::orderBy('product_name','desc')->get();
        return view('chapters.showuser')->with('dat',$dat);
       
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
        $user =User::find($id);
        return view('/chapters/edit')->with('user',$user); 
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
       
         $user= User::find($id);   
         $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->matricno=$request->input('matricno');
        $user->status=$request->input('status');
        $user->role=$request->input('role');
        $user->phone=$request->input('phone');
        $user->origin=$request->input('origin');
          // return $user;
        $user->save();
        return redirect('/showuser/')->with('success','Update successfully');
    }

    public function updateprofile(Request $request)
    {
        $user=Auth::user();
        // return $request;
        if ($request->hasFile('file')){
            $file=$request->file('file');
            $filename= time().'.'.$file->getClientOriginalExtension();
            Image::make($file)->resize(300, 300)->save(public_path('/upload/'.$filename));
            
            $user->user_image=$filename;
            // $user->save();
        }
            // $user=Auth::user();
            $user->name=$request->input('name');
            // $user->email=$request->input('email');
            $user->matricno=$request->input('matricno');
            // $user->chapter_address=$request->input('chapter_address');
            $user->phone=$request->input('phone');
            $user->origin=$request->input('origin');
            // $user->file=$filename;
            $user->save();
        return redirect('/home/')->with('success','Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
     {
    //      $pro =User::find($id);
    //      $pro->delete();
    //      return 'done';
    }
}


