<?php

	if(!isset($_GET['id']))
		die("Errore, inserire ID");
	
	require_once('lib.php');
	
	$mattonella = new Mattonella($_GET['id']);
	
	$svg_data = file_get_contents('svg/' . $mattonella->getSVGFilename());
	
	
	//Print header
	?>
<?xml version="1.0" encoding="UTF-8"?>
<svg id="mattonella"  viewBox="0 0 709 709" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">	
	<?php	
	

	$colors = $mattonella->getColors();
	
	foreach($colors as $color_id){
		$res = getColorInfo($color_id);
		?>
<defs>
	<pattern id="<?=$res->alias?>" patternUnits="userSpaceOnUse" width="709" height="709">
		<image xlink:href="trame/<?=$res->filename?>" x="0" y="0" width="709" height="709" />
	</pattern>
</defs>
		<?php	
		
	}
	
	echo $svg_data;
	
	//Print Footer
	?>
</svg>
	<?php
	
?>