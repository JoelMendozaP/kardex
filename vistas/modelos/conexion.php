<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=18.191.44.9;dbname=kardex",
			            "root",
			            "12345678");

		$link->exec("set names utf8");

		return $link;

	}

}