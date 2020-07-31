<?php 

namespace App;

use App\General\Validate;
 
class Endereco extends Validate {

	protected $table = 'enderecos';
	protected $fillable = ['cep','logradouro','unidade','bairro','localidade','uf','latitude','longitude','ibge','gia'];

    public static function hasAttrValues($attr,$value) {

    	try {
    		$query = Endereco::where($attr, 'like', '%'.$value.'%')->get();
    		return $query;
    	}
    	catch(Exception $e) {
    		return $e->getMessage();
    	}

    }
}