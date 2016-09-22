<?php
$titulo = 'Todas las noticias de pokemon';
ob_start();
foreach ($noticias as $key => $noticia) {
	?>
	<div>
		<h2><?php echo $noticia["subtitulo"];?></h2><br/>
		<p><?php echo $noticia["descripcion"];?></p><br/>
	</div>
	<?php
}
$contenido = ob_get_clean();
require "plantilla.php";
