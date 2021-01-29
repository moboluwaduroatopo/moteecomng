<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Chapters;
use App\User;
use App\Chats;
use Auth;
use Image;
use App\Recommends;

class ChaptersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chaps=Chapters::orderBy('id','desc')->paginate(6);;
         return view('chapters.allchapters')->with('chaps',$chaps);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chapters.addchapters');
    }
    public function success()
    {
        return view('chapters.success');
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
            'chapter_name'=>'required',
            'chapter_abbreviation'=>'required',
            'chapter_abbreviation'=>'required',
            'president_name'=>'required',
            'president_email'=>'required',
            'president_phone'=>'required',
            
            ]);
            $chap=Chapters::where('chapter_name','=',$request->chapter_name)->first();
            if ($chap===null){
                $chapter=Chapters::create($request->all());
                return redirect('success')->with('id',$chapter->id);
            }
            else{
                return redirect('chapters')->with('success','Data already exit');
            }
            // $chapter=Chapters::create($request->all());
            // return redirect('/chapters/')->with('success',$chapter);
    }
 public function forumsetting(Request $request)
    {
       
        $id=$request->id;
        $status= $request->status;
        // return $status;
        $update = DB::table('Chats')->where('id','=',$id)
        ->update([
            'status'=> $status,
        ]);
        if($update){
             return redirect('forumsetting')->with('success','Updated');
        } else {
             return redirect('forumsetting')->with('success','Failed');
          
        }
    }

 public function storechat(Request $request)
    {
        $user=Auth::user();
// return $request;
 $chat=Chats::where('chats.status','=','open')->count();
   if($chat==1){
    if ($user==null){
            return redirect('chat')->with('success','Pls login before continue this chat');
        }else{
             if ($request->hasFile('file')){
            $path=$request->file('file')->store('upload');
            // return $path;
             $request->merge(['chat_image' => $path]);
         }
            // $request->chat_image=$path;
          // return $request;
            $id=Auth::user()->id; 
            // $request->merge(['user_id' => $id]);
            $request->merge(['user_id' => $id]);
            $users= Chats::create($request->all());
            return redirect('chat');
        }
    }else{
        return redirect('chat')->with('success','Sorry, NUESA FORUM is closed for now');
    }       
        
           
    }
    public function showrecommend(Request $request)
    {
      
           Recommends::create($request->all());
             return redirect('recommendation')->with('success','Successfully Saved');
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
