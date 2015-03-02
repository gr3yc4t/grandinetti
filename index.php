<?php 
	require_once("lib.php");

	isset($_GET['id']) or die("Inserire ID");
	$mattonella = new Mattonella($_GET['id']); //al termine ho la classe mattonella con tutti i parametri letti dal db
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<script src="https://code.jquery.com/jquery-2.1.3.js"></script>
		<script src="js/snap.svg.js"></script>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div id="svgdiv"></div><!-- DIV dove lavorare con gli SVG -->
		<?php
			foreach($mattonella->getColors() as $col){
				$info = getColorInfo($col);
				$alias = $info->alias;
				$filename = $info->filename;
				$name = $info->name;
		?>
				<img data-alias="<?=htmlentities($alias)?>" data-name="<?=htmlentities($name)?>" class="selettori" src="trame/<?=$filename?>" />
		<?php
			}
		?>
		<script>
			$(function(){
				var svgdiv = $('#svgdiv');
				
				$.get('svg/<?=$mattonella->getSVGFilename()?>', function(svgDoc){
					var importedSVGRootElement = document.importNode(svgDoc.documentElement, true);	
					svgdiv.append(importedSVGRootElement);	//Aggiungo l'immagine al DIV

					var draw = Snap(svgdiv[0]);
					$('.poligono', svgdiv).each(function(){
						draw.select('#'+$(this).attr('id')).attr({
							fill : 'url(#bianco)'
						});
					});
					$('.poligono', svgdiv).click(function(){
						var $this = $(this);
						if($this.attr('class').indexOf('selected') > -1){
							$this.attr('class', 'poligono');
						}else{
							$this.attr('class', 'poligono selected');
						}
					});
					$('.selettori').click(function(){
						var selettore = $(this);
						var fill = 'url(#'+selettore.data('alias')+')';
						var selezione = $('.poligono.selected', svgdiv);
						if(selezione.length){
							selezione.each(function(){
								var $this = $(this).attr('class', 'poligono');
								draw.select('#'+$this.attr('id')).attr({
									fill : fill
								});
							});
						}else{
							alert('Devi selezionare qualcosa!');
						}
					});
				}, 'xml');
			});
		</script>
	</body>
</html>
