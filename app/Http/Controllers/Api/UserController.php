<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Model\User;

use Request;

class UserController extends Controller
{

  public function __construct(){
    $this->Users = new User;

  }

  public function lists(Request $request){
    $data = $request::all();
    $arr =  $this->Users->_all($data);
    if($arr){
      return $this->Response(['result'=>$arr]);
    }else{
      return $this->RespondError('No data available');
    }
  }

  public function add(Request $request){
  $data = $request::all();
  unset($data['image_file']);
  /*send email to amdin account */
  // $EmailController = new EmailController;
  // $EmailController->admin_email($data);

  $data['password'] = Hash::make($data['password']);
  $res =  $this->Users->_add($data);

  if($res){
    return $this->Response(['result'=>$res]);
  }else{
    return $this->RespondError("insert data fails.");
  }
}


}
