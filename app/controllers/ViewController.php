<?php 

namespace App\Controllers; 

use App\Controllers\Controller;
use App\User;

class ViewController extends Controller {
 
    public function index($data = []) {
    	$this->view('index', $data);
    }

    public function search($data = []) {
    	$post = $_POST;
    	echo $post;
    }

}