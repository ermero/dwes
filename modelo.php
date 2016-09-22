<?php

function conectarse(){

	$mysql=new mysqli("localhost","root","root","bbdd_pokemon");
	return $mysql;
}
function consultaSQL($mysql, $consulta){
	$resultado=$mysql->query($consulta);
	return $resultado;
}
function desconectarse($mysql){
	$mysql->close();
}
function getTodasNoticias(){
	$mysql=conectarse();
	$consulta= "SELECT * FROM noticia";
	$res=consultaSQL($mysql,$consulta);
	desconectarse($mysql);
	return $res->fetch_all(MYSQLI_ASSOC);
}
function getNoticiaById($id){

	$mysql=conectarse();
	$consulta= "SELECT * FROM noticia WHERE id_noticia=$id";
	$res=consultaSQL($mysql,$consulta);
	desconectarse($mysql);
	return $res->fetch_assoc();

}