<?php
require "modelo.php";

$noticiaUnica=getNoticiaById( $_GET["id"] );

include "vistas/show.php";