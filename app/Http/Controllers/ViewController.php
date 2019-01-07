<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Model\users_type;
use App\Http\Model\MediaGroup;
use App\Http\Model\Media;
use Illuminate\Support\Facades\Auth;
class ViewController extends Controller
{

    public function __construct()
    {
       // $this->middleware('auth');
    }
     public function home()
    {
       return view('home.home');
    }
    public function history(){
      return view('history.history');
    }
    public function staff(){
      return view('staff.staff');
    }

    public function media_group()
  {
    return view('media.media_group');
  }

  public function media()
  {
    $media_group_id = $_GET['media_group_id'];
    $media_group = MediaGroup::where('id',$media_group_id)->first();
    if($media_group){
      return view('media.media',array("media_group"=>$media_group));
    }else{
      return ["error"=>true, "message"=>"404 NOT FOUND"];
    }
  }
  
}
