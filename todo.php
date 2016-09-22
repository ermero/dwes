<?php 
require "modelo.php";

$noticias=getTodasNoticias();

include "vistas/lista.php";