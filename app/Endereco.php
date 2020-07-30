<?php 

namespace App;

use App\General\Auth;
 
class Endereco extends Validate {

	protected $table = 'enderecos';
	protected $fillable = ['cep','logradouro','numero','bairro','cidade','uf'];
	protected $dates = ['created_at'];
    
}