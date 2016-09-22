<?php
$titulo = "Noticia: " . $noticiaUnica["subtitulo"];
ob_start();
?>
<div>
	<h2><?php echo $noticiaUnica["subtitulo"];?></h2>
	<p><?php echo $noticiaUnica["descripcion"];?></p>
</div>
<?php
$contenido = ob_get_clean();
require "plantilla.php";
