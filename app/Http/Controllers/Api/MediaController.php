<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Model\Campaign;
use App\Http\Model\Media;
use App\Http\Model\MediaGroup;
use Request;

class MediaController extends Controller
{
  var $MediaModel;
  var $mediaPath = "customer/upload/media/";

  public function __construct(){
    $this->MediaModel = new Media;
  }

  public function lists(Request $request){
    $data = $request::all();
    $arr =  Media::where($data)->orderBy('id','desc')->get();

    if($arr){
      return $this->Response(['result'=>$arr]);
    }
  }

}
