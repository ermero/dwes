<?php


$pagina=$_GET['p']; //detalle o todo

if($pagina=='todo'){

include "todo.php";	

}else{

	include "detalle.php";
}





