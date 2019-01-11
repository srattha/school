<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Model\News;
use Illuminate\Support\Facades\Hash;
use Request;

class NewsController extends Controller
{

  public function __construct(){
    $this->Newss = new News;

  }

  public function lists(Request $request){

    $data = $request::all();
    return $arr = News::paginate(15);
  }

  public function add(Request $request){
   $data = $request::all();
   $res =  $this->Newss->insertGetId($data);
   if($res){
    return $this->Response(['result'=>$res]);
  }else{
    return $this->RespondError("insert data fails.");
  }
}

public function update(Request $request){
 $data = $request::all();
  $res =  $this->Newss->_update($data);
 if($res){
  return $this->Response(['result'=>$res]);
}else{
  return $this->RespondError("insert data fails.");
}
}


public function delete(Request $request){
  $data = $request::all();
  $status =  $this->Newss->_delete($data);
  if($status){
    return $this->Response();
  }else{
    return $this->RespondError("delete data fails.");
  }
}


}
