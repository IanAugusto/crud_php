<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/crud_php/auth/auth.php';

if(Auth::estaAuntenticado()){
    Auth::logout();
} else {
    header('location: /crud_php/views/login.php');
}
