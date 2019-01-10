<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
class Controller extends BaseController
{

	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


	public function Response($status = NULL, $message = NULL, $data = NULL){
		return $status = ["status"=>$status];
	}
	public function RespondError($message){
		return Response::json([
			'error' => true,
			'title' => 'Error',
			'message' => $message,
			'status' => "400 Bad Request"
		], 400);
	}


	function uploadFile($files=NULL,$path_file=NULL){
		if($files && $path_file){
			$file = array();
			$fileName_tmp = $files['name'];
			$tmp_name = $files['tmp_name'];
			@$type = end(explode('.',$fileName_tmp));
			$fileName = $this->generateSerialCode().".".$type;
			$path = $path_file.$fileName;

			if(move_uploaded_file($tmp_name,$path)){
				return $fileName;
			}
		}
	}


}
