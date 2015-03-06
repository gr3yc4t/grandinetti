

<!DOCTYPE html>
<html lang="it-IT">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="p:domain_verify" content="0faed277acf14aaaf4c06747bb547f0c"/>
<title>Grandinetti | Produzione di pavimenti in graniglia, pastina di cemento,
mosaici, cementine per interni e per esterni dal 1902.</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="http://212.210.36.131/grandinetti/css/style.css" /> 
<link rel="alternate" type="application/rss+xml" title="Grandinetti &raquo; Feed" href="http://www.grandinetti.it/feed/" />
<link rel="alternate" type="application/rss+xml" title="Grandinetti &raquo; Feed dei commenti" href="http://www.grandinetti.it/comments/feed/" />
<link rel='stylesheet' id='jrsm-css-css'  href='http://www.grandinetti.it/wp-content/plugins/jquery-responsive-select-menu/jrsm.css?ver=4.1.1' type='text/css' media='all' />
        <!--<style id='jrsm-css-inline-css' type='text/css'>        // per adesso lasciatelo commentato ce sto a pensa io (montalto)

		  @media (max-width: 1023px) {
			
			.jquery #menu-left ul {
				display: none !important;
			}

			.jquery-responsive-select-menu {
				display: inline-block;
		    	max-width: 100%;
			}

		} 
        -->
</style>
<link rel='stylesheet' id='contact-form-7-css'  href='http://www.grandinetti.it/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.0.3' type='text/css' media='all' />
<link rel='stylesheet' id='esl-slideshow-css'  href='http://www.grandinetti.it/wp-content/plugins/easing-slider/css/slideshow.min.css?ver=2.1.4.3' type='text/css' media='all' />
<link rel='stylesheet' id='jquery.fancybox-css'  href='http://www.grandinetti.it/wp-content/plugins/fancy-box/jquery.fancybox.css?ver=1.2.6' type='text/css' media='all' />
<link rel='stylesheet' id='sidebar-login-css'  href='http://www.grandinetti.it/wp-content/plugins/sidebar-login/assets/css/sidebar-login.css?ver=2.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='UserAccessManagerAdmin-css'  href='http://www.grandinetti.it/wp-content/plugins/user-access-manager/css/uamAdmin.css?ver=1.0' type='text/css' media='screen' />
<link rel='stylesheet' id='UserAccessManagerLoginForm-css'  href='http://www.grandinetti.it/wp-content/plugins/user-access-manager/css/uamLoginForm.css?ver=1.0' type='text/css' media='screen' />
</head>

<body class="home blog">
<div id="wrapper" class="hfeed">

	<div id="header">
		<div id="logo">
			<a href="http://www.grandinetti.it/"><img src="http://www.grandinetti.it/wp-content/themes/grandinetti/images/grandinetti.gif" alt="Grandinetti" /></a>
		</div>    
		<div id="language">
            <div id="italian">
            	IT 
            </div>  
           <!-- non servono altre lingue quindi lasciatelo commentato -->
           <!--  <div id="english">													 
            	<a href="http://www.grandinetti.it/en">EN</a>
            </div>  
            <div id="russian">
            	<a href="http://www.grandinetti.it/ru">RU</a>
            </div> --> 
		</div> <!-- chiusura div language--> 
		<div id="navigation-top">		<!--Aggiunto elemento menu per l'editor -->
			<div class="menu-main-container"><ul id="menu-main" class="menu">
<li id="menu-item-478" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-478"><a href="http://212.210.36.131/grandinetti/index.php">Editor</a></li> <!-- Da riconfigurare con l'indirizzo della pagina dell'editor -->
<li id="menu-item-477" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-477"><a href="http://www.grandinetti.it/">Home</a></li>
<li id="menu-item-15" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15"><a href="http://www.grandinetti.it/azienda/">Azienda</a></li>
<li id="menu-item-14" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14"><a href="http://www.grandinetti.it/servizi/">Servizi</a></li>
<li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13"><a href="http://www.grandinetti.it/cataloghi/">Cataloghi</a></li>
<li id="menu-item-78" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-78"><a href="http://www.grandinetti.it/blog">Blog</a></li>
<li id="menu-item-12" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12"><a href="http://www.grandinetti.it/contatti/">Contatti</a></li>
</ul></div>		</div>  
	</div>
    
	<div id="site-description">
		<h1>Produzione di pavimenti in graniglia, pastina di cemento, mosaici, cementine per interni e per esterni dal 1902. </h1>
	</div>
	<div id="main">
	<div id="content" role="main">

	 	<div id="post-5" class="post-5 page type-page status-publish hentry">
            <h1 class="entry-title">Editor</h1>					
     	</div>
     	</div>
     	</div>
		<!-- <div id="content" > non più necessario se impostiamo float:left e float:right per l'svgdiv e per img.selettore --> 
	   	<!-- <br>	-->
    
    <?php 
	require_once("lib.php");

	isset($_GET['id']) or die("Inserire ID");
	
	$mattonella = new Mattonella($_GET['id']);   //al termine ho la classe mattonella con tutti i parametri letti dal db
	
	dbg($mattonella->getName());
?>

		<script src="https://code.jquery.com/jquery-2.1.3.js"></script> <!-- Librerie jQuery -->
		<meta charset="UTF-8" />
		<script src="snap.svg.js"></script>	<!-- Libreria Snap.svg.js -->
		
		<style>

			.contenuto{ 

				float:left;
				background-color: #CF7C7C; 
				border-style: solid;
				border-width: 2px;	
				border-color: #a00;
				width:709px;
				height:709px;
				margin-top:12px;
			}

			
			.mostra_poligono{
			   stroke: #a00;
			 }
			
			
			.selected{

				    opacity: 0.4;
					filter: alpha(opacity=40); /* For IE8 and earlier */
			}
			.selettori{

				float:right;
				border-style: solid;
				border-width: 2px;	
				border-color: #a00;
				height: 30px;
				width: 30px;
				margin-top: 12px;
				margin-left: 12px;
			}
			
			.mostra_sezioni{
				float:right;
				border-style: solid;
				height: 30px;
				width: auto;
				margin: 12px 12px 12px 12px;
				background-color : #a00;
				color : white;
				font-weight : bold;
			}
		</style>
		
	
		
		<div id="svgdiv" class="contenuto" ></div>		<!-- DIV dove lavorare con gli SVG
														ho aggiunto uno sfondo sotto la mattonella e  i bordi-->
			<?php
				foreach($mattonella->getColors() as $col){
					$info = getColorInfo($col);

					$alias = $info->alias;
					$filename = $info->filename;
					$name = $info->name;
			?>		
					
					<img data-alias="<?=htmlentities($alias)?>" data-name="<?=htmlentities($name)?>" class="selettori"  src="trame/<?=$filename?>" />
					
			<?php
				}
			?>
	
				<p id="cmd_mostra_sez" class="mostra_sezioni">Mostra Sezioni</p>
			
			
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
					
					//TODO da migliorare
					$('#cmd_mostra_sez').click(function () {
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
					});
					
					
			}, 'xml');
		});
		</script>








		
        <div class='easingsliderlite-shadow' style='display: none; max-width: 910px; '></div>		 </div><!-- #slider -->		
	   <!-- </div>  -->
	   
	    <div id="footer">
		  <div id="colophon">
			<div id="site-info">
				<div id="grandinetti">
                    2015  &#169; Grandinetti s.r.l. &#8212; P. Iva 00712900430 C.C.I.A.A. MC N.94831 Iscriz. Reg. Trib. Camerino N.712 Cap. Soc. &#8364; 78.000,00 i.v. 
                </div>    
				<div id="numeroquattro">
					<p>Design</p><a href="http://www.numeroquattro.com" title="numeroquattro" target="_blank"><img src="http://www.grandinetti.it/wp-content/themes/grandinetti/images/numeroquattro.gif" alt="numeroquattro" /></a>
                </div>    
			</div><!-- #site-info -->
		</div><!-- #colophon -->
	</div><!-- #footer -->
</div><!-- #wrapper --></div><!-- #wrapper -->

</body>
</html>
