<?php 

namespace App\Controllers; 

use App\Controllers\Controller;
use App\Endereco;

class ViewController extends Controller {
 
    public function index($data = []) {
    	$this->view('index', $data);
    }

    public function endereco($data = []) {
    	$this->view('endereco', $data);
    }

    public function buscarCep($cep) {
        $erro = '';
        if ($cep !== null && $cep != '') {
            $address = file_get_contents("https://viacep.com.br/ws/".$cep."/xml/");
            if (!isset(simplexml_load_string($address)->erro)) {
                $obj = new Endereco();
                $obj->cep = $cep;
                foreach (simplexml_load_string($address) as $key => $value) {
                    $aux = (array)$value;
                    if ($key != 'cep') {
                        $aux = (array)$value;
                        if (isset($aux[0]) && !empty($aux[0]))
                            $obj->$key = $aux[0];
                        else
                            $obj->$key = '';
                    }
                }
                if ($obj->save())
                    echo json_encode($obj);
                else {
                    $erro .= 'Não foi possível salvar o endereço';
                    echo json_encode($erro);
                }
            }
            else {
                echo json_encode('Não foi possível encontrar o CEP');
            }
            
        }
        
    }

    public function buscarEndereco() {
    	$post = $_POST;
    	echo $post;
    }

}