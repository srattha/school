<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Model\MediaGroup;
use App\Http\Model\Media;
use Request;

class MediaGroupController extends Controller
{
  var $MediaGroupModel;
  var $mediaPath = "customer/upload/media/";
  public function __construct(){
    $this->MediaGroupModel = new MediaGroup;
  }

  public function lists(Request $request){
   
    $data = $request::all();
    $arr = MediaGroup::where($data)->get();
    foreach ($arr as $key => $value) {
      $arr[$key]['count'] = Media::where('media_group_id',$value['id'])->count();
    }
 
    if($arr){
      return $this->Response(['result'=>$arr]);
    }
  }
}
