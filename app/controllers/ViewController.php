<?php 

namespace App\Controllers; 

use App\Controllers\Controller;
use App\User;

class ViewController extends Controller {
 
    public function index($data = []) {
    	$this->view('index', $data);
    }

    public function endereco($data = []) {
    	$this->view('endereco', $data);
    }

    public function buscarCep() {
    	$post = $_POST;
    	echo $post;
    }

    public function buscarEndereco() {
    	$post = $_POST;
    	echo $post;
    }

}