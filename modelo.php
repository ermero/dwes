<?php

function conectarse(){

	$mysql=new mysqli("localhost","root","root","bbdd_pokemon");
	return $mysql;
}
function consultaSQL($mysql, $consulta){
	$resultado=$mysql->query($consulta);
}