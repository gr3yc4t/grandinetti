<!DOCTYPE html>

<?php 
	require_once("lib.php");

	$num = getMattonellaElements($_GET['id']);
	$color =  getMattonellaColors($_GET['id']);

	echo "<p>Numero Elementi : " . $num . "</p>";

	var_dump($color);

?>

<!DOCTYPE html>

<html>
	<head>
		<script src="https://code.jquery.com/jquery-2.1.3.js"></script> <!-- Librerie jQuery -->
		<meta charset="UTF-8" />
		<script src="snap.svg.js"></script>	<!-- Libreria Snap.svg.js -->
	</head>
	<body>

		<table>
			<tr>
				<div id="svgdiv"></div>		<!-- DIV dove lavorare con gli SVG -->
			</tr>
			<tr>
				<?php

					foreach($color as $val){
						$info = getColorInfo($val);

						$alias = $info['alias']; $filename = $info['filename']; $name = $info['name'];
				
						echo '<img id="cmd_' . $alias . '" border=1 src="' . $filename . '" width="20" height="20" >';
					}
				?>
			</tr>
		</table>


		<script>
			$(function(){
				var svgdiv = $('#svgdiv');

				var parts[<?=$num;?>];

			});

		</script>



	</body>
</html>