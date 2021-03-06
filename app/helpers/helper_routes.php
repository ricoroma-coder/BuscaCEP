<?php

use App\General\Route;
use App\General\Request;
 
function request()
{
    return new Request;
}
 
 
function resolve($request = null)
{
    if(is_null($request)) {
        $request = request();
    }
    return Route::resolve($request);        
}
 
 
function route($name, $params = null)
{
    return Route::translate($name, $params);
}
 
function redirect($pattern)
{
    return resolve($pattern);
}
 
function back()
{
    return header('Location: ' . $_SERVER['HTTP_REFERER']);
}

function asset($path) {
    $url = toAbsolute('../../public/'.$path,__FILE__);
    if (strpos($url, '/') !== 0)
        $url = $path;
    return $url;
}

function toAbsolute($relative_url, $path){
    $r = str_replace("\\","/",$relative_url);
    $r = dirname($path,substr_count($r,"../")+1)."/".$r;
    $r = str_replace("\\","/",$r);
    $r = str_replace("../","",$r);
    $r = str_replace($_SERVER["DOCUMENT_ROOT"],"",$r);
    return $r;
}

function toRoot($relative_url, $path){
    return $_SERVER['DOCUMENT_ROOT'].toAbsolute($relative_url, $path);
}

function routeIs($path) {
    $request = new Request();
    return $path == $request->base();
}
