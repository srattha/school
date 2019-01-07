<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Model\Campaign;
use App\Http\Model\Media;
use App\Http\Model\MediaGroup;
use Request;

class HomeController extends Controller
{

  // public function __construct(){
  //   $this->MediaModel = new Media;
  // }

  public function lists(Request $request){
  	 $data = $request::all();
  
   return $arr = MediaGroup::where($data)->get();
   //  foreach ($arr as $key => $value) {
   //    $arr[$key]['count'] = Media::where('media_group_id',$value['id'])->count();
   //  }
   //  if($arr){
   //    return $this->RespondSuccessRequest(['result'=>$arr]);
   //  }
  }


  public function search(Request $request){
   
  }

 

  

  

}
