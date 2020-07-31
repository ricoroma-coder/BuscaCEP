<?php 

namespace App;

use App\General\Validate;
 
class Endereco extends Validate {

	protected $table = 'enderecos';
	protected $fillable = ['cep','logradouro','unidade','bairro','localidade','uf','latitude','longitude','ibge','gia'];

    
}