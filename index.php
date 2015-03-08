
<html lang="it-IT">
<head>
	<title>Configuratore super-figo</title>
	<meta charset="UTF-8" />
	<script src="https://code.jquery.com/jquery-2.1.3.js"></script> <!-- Librerie jQuery -->
	<meta charset="UTF-8" />
	<script src="snap.svg.js"></script>	<!-- Libreria Snap.svg.js -->
	<link rel="stylesheet" type="text/css" media="all" href="css/style.css" /> 
	
	<!--[if IE]>
	<link rel="stylesheet" href="css/ie_style.css">
	<![endif]-->
	<!-- Because we love IE -->
		<style>
			@media all and (-ms-high-contrast:none)
			 {
			 .foo { color: green } /* IE10 */
			 *::-ms-backdrop, .contenuto { 
			 width:50vw; 
			height:48.88vw; } /* IE11 */
			 }
		 </style>
 </head>
 <body>
 
 <?php 
	require_once("lib.php");
	isset($_GET['id']) or die("Inserire ID");
	
	$mattonella = new Mattonella($_GET['id']);   //al termine ho la classe mattonella con tutti i parametri letti dal db
	dbg($mattonella->getName());
?>
		<div id="contenitoreflex"> 
	<div id="content">
		<div class="inner">
			<h3>
				Questa è una prova, devo scrivere parecchio per controllare il fluid layout
				Questa è una prova, devo scrivere parecchio per controllare il fluid layout
				Questa è una prova, devo scrivere parecchio per controllare il fluid layout
				Questa è una prova, devo scrivere parecchio per controllare il fluid layout
				Questa è una prova, devo scrivere parecchio per controllare il fluid layout
				Questa è una prova, devo scrivere parecchio per controllare il fluid layout
				Questa è una prova, devo scrivere parecchio per controllare il fluid layout
			</h3>
		</div>
	</div>
	
	
		
		
		
		<div id="svgdiv" class="contenuto" ></div>		<!-- DIV dove lavorare con gli SVG
														ho aggiunto uno sfondo sotto la mattonella e  i bordi-->
			
		<script>
			$(function(){
				var svgdiv = $('#svgdiv');
				var show_line = false;
				
				$.get('base.php?id=<?=htmlentities($_GET['id'])?>', function(svgDoc){
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
					
					/* mostra bordi */
					$( window ).ready( bordatura );
					$('#cmd_mostra_sez').click( bordatura );
					$('.selettori').click(function(){
						var pol = $('.poligono', svgdiv);
						var classe = '';
						if(show_line){
						classe = 'poligono mostra_poligono';
						pol.each(function (){
								var $this = $(this).attr('class', 'poligono');
								$this.attr('class', classe);
						});	
						}					
					});
					
					function bordatura () {
						var pol = $('.poligono', svgdiv);
						var classe = '';
						if(show_line){
							show_line = false;
							classe = 'poligono';
						}else{
							show_line = true;
							classe = 'poligono mostra_poligono';							
						}
						pol.each(function (){
								var $this = $(this).attr('class', 'poligono');
								$this.attr('class', classe);
						});
					};
					
					
			}, 'xml');
		});
		</script>
		
		<div id="sidebar">
			<div class="inner">
				<div id="tavolozza">
					<p id="cmd_mostra_sez" class="mostra_sezioni">Mostra/Nascondi Sezioni</p>
					<?php
						foreach($mattonella->getColors() as $col){
							$info = getColorInfo($col);

							$alias = $info->alias;
							$filename = $info->filename;
							$name = $info->name;
					?>								
							<span><img data-alias="<?=htmlentities($alias)?>" data-name="<?=htmlentities($name)?>" class="selettori" src="trame/<?=$filename?>" /></span>
					<?php
						}
					?>
				</div>
			</div>
		</div>
		
		</div> <!-- div flex-->
</body>
</html>


