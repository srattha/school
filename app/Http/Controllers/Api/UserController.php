<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Model\User;
use Illuminate\Support\Facades\Hash;
use Request;

class UserController extends Controller
{

  public function __construct(){
    $this->Users = new User;

  }

  public function lists(Request $request){

    $data = $request::all();
    return $arr = User::paginate(15);
  }

  public function add(Request $request){
   $data = $request::all();
   $data['password'] = Hash::make($data['password']);
   $res =  $this->Users->insertGetId($data);
   if($res){
    return $this->Response(['result'=>$res]);
  }else{
    return $this->RespondError("insert data fails.");
  }
}

public function update(Request $request){
 $data = $request::all();
  $res =  $this->Users->_update($data);
 if($res){
  return $this->Response(['result'=>$res]);
}else{
  return $this->RespondError("insert data fails.");
}
}


public function delete(Request $request){
  $data = $request::all();
  $status =  $this->Users->_delete($data);
  if($status){
    return $this->Response();
  }else{
    return $this->RespondError("delete data fails.");
  }
}


}
