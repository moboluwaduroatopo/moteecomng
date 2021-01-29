<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Chapters;
use App\Chats;
class RoutingController extends Controller
{
    public function index(){
    	$data = array(
    		'title'=> 'my pages index',
    		'name' => ['john','jane','Yusuf','Taju']
    	);
       //   $pro = new Add_Product;
        
       // $dat= $pro::orderBy('product_name','desc')->get();
       //  //return $dat;
       // return view('pages.index')->with('dat',$dat);
    // $add_product=DB::table('add_product')->select('product_name')->get();
    // return view('pages.index', compact('add_product'));
    	//return view('pages.index')->with($data);
    }
    //  public function show($id)
    // {
    //     $pro = Add_Product::where('id', $id)->firstOrFail();
    //     $interested = Add_Product::where('id', '!=', $id)->get()->random(4);
    //     return view('pages/show')->with(['pro' => $pro, 'interested' => $interested]);
    // }
  
    public function nuesagallery(){
        return view('chapters/nuesagallery');
    }
    public function idcard(){
        return view('pages/getidcard');
    }
    public function comingsoon(){
        return view('pages/comingsoon');
    }
    public function about(){
    	return view('pages/about');
    }
    public function contact(){
    	return view('pages/contact');
    }
     public function chat(){
        $chat=Chats::orderBy('id')->join('users','chats.user_id','=','users.id')->select('chats.*','users.name', 'users.email', 'users.user_image')->where('chats.status','=','Y')->get();
         // return $chat;
        return view('pages/chat')->with('chat',$chat);
    }
     public function nchapters(){
        $chap=Chapters::all();
        // return $chat;
        return view('chapters/nuesachapter')->with('chap',$chap);
        // 
    }
    public function mission(){
    	return view('pages/mission');
    }
    public function login(){
    	return view('pages/login');
    }
    public function recommend(){
        return view('pages/recommend');
    }
    public function adminregister(){
        return view('admin/adminregister');
    }
public function dashboard(){
        return view('admin/dashboard');
    }
    public function addproduct (){
        return view('product/addproduct ');
    }
   public function forumsetting (){
     $chat=Chats::where('id','=',1)->first();
 // return $chat;
        return view('pages/forumsetting')->with('chat',$chat);
    } 

    }
