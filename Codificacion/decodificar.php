<html>
	<head>
		<link href="Favicon.ico" type="image/x-icon" rel="shortcut icon" />
	 <!--[if lt IE 9]> 
	<script type="text/javascript"> 
	   document.createElement("nav"); 
	   document.createElement("header"); 
	   document.createElement("footer"); 
	   document.createElement("section"); 
	   document.createElement("article"); 
	   document.createElement("aside"); 
	   document.createElement("hgroup"); 
	</script> 
	<![endif]-->
		<title>Coordinaci&oacute;n General de Lenguas UNAM</title>
		<link rel="stylesheet" href="css/hugixR.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" href="print.css" media="print" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	 <script>
	  $(document).ready(function(){
		
		$('ul.tabs li').click(function(){
			var tab_id = $(this).attr('data-tab');

			$('ul.tabs li').removeClass('current');
			$('.tab-content').removeClass('current');

			$(this).addClass('current');
			$("#"+tab_id).addClass('current');
				})

			})
			
		
		
		
	 </script>
		 
	 <div id="loop"><img border="0" alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico, Coordinaci&oacute;n General de Lenguas" src="images/CGLh1a.png"  width="1200px" height="18%" align="center" border="0" usemap="#CGLh"/></a>
<table border=0 width="100%"><tr><td align="center">
<map name="CGLh"> 
<area alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico" shape="rect" coords="0,0,549,120" href="http://www.unam.mx">
<area alt="Coordinaci&oacute;n General de Lenguas" shape="rect" coords="550,0,1300,120" href="http://www.cgl.unam.mx">
</map>

 </table></div>
	</head>	
	<body>	
		<style>
			.container{
				width: 100%;
				margin: 0 auto;
			}
			ul.tabs{
				margin: 0px;
				padding: 0px;
				list-style: none;
			}
			ul.tabs li{
				background: #dbae18;
				color: #000;
				display: inline-block;
				padding: 10px 15px;
				cursor: pointer;
			}

			ul.tabs li.current{
				background: #3078ef;
				color: #fff;
			}

			.tab-content{
				display: none;
				background: #3078ef;
				padding: 15px;
			}

			.tab-content.current{
				display: inherit;
			}
			
		</style> 
<!--****************************Esta es la sección destinada a la barra del menú principal de todo el portal********************************************-->	
	<div id="menu">			
					<ul class="menu">
						</br><b style="color: #000066;">Decodificador ultra plus 2015</b>										
					</ul>
	</div>
	
	
<!--****************************Termino de la sección de la barra del menú principal de todo el portal********************************************-->	

<div id="wrapper"><!-- Aquí se envuelve todo el contenido de la página -->
	<section id="main"><!-- contenido principal y menus laterales -->				        		
		
		
		<br/>
		<div class="container">

	<ul class="tabs">
		<li class="tab-link current" data-tab="tab-1"><b>Resultados</b></li>
	</ul>
	<div id="tab-1" class="tab-content current">
	<?php
		echo"<br/><b>Valores enviados por POST sin ocultarse:</b><br/><br/>";
		$nombre0=$_POST[Nombre];
		echo "Nombre: $nombre0<br/>";
		$folio0=$_POST[Folio];
		echo "Folio: $folio0<br/>";
		$textobien=$folio0.$nombre0."secret_word";		
		mb_internal_encoding("UTF-8");
		mb_http_output( "UTF-8" );
		echo "Codificado es: <br/>";
		//echo md5("$textosecret_word")."<br/>";
		echo"<b>";
		echo md5("$textobien")."<br/>";
		echo"</b>";
		
		
		echo"<br/><b>Los valores enviados por hidden son:</b><br/><br/>";
		$nombre=$_POST[nombre];
		echo"El nombre es: $nombre<br/>";
		$folio=$_POST[folio];
		echo"El folio es: $folio<br/>";
		$clave=$_POST[clave];
		echo"La clave es: $clave<br/>";				
		mb_internal_encoding("UTF-8");
		mb_http_output( "UTF-8" );
		echo "Esta es la cadena en UTF-8 con PHP, hecha con los valores hidden:<br>";
		//Si uno los valores del hidden quedan como
		$hidden=$folio.$nombre."secret_word";
		echo"<b>";
		echo md5("$hidden")."<br>";
		echo"</b>";
		echo "Ruby:<br>06a818900bf397f6f0d1896de2f92ad0";

		echo"<br/><br/><b>Estos son valores en el c&oacute;digo</b><br/><br/>";
		
		mb_internal_encoding("iso-8859-1");
		mb_http_output( "iso-8859-1" );
		echo "<br>EN ISO-8859-1  con PHP<br>";
		echo md5("000001SANCHEZ*CRUZ*AARONsecret_word")."<br>"."<br>";

		mb_internal_encoding("UTF-8");
		mb_http_output( "UTF-8" );
		echo "Ahora si pongo una Ã‘ en UTF8  con PHP<br>";
		echo md5("000001SANCHEZ*CRUZ*AAROÃ‘secret_word")."<br>";
		echo "Ruby:<br>bb131ec070d86d9c3ca5af3db64690fc"."<br>";

		mb_internal_encoding("iso-8859-1");
		mb_http_output( "iso-8859-1" );
		echo "Ahora si pongo una Ã‘ <br>";
		echo "EN ISO-8859-1 con PHP<br>";
		echo md5("000001SANCHEZ*CRUZ*AAROÃ‘secret_word")."<br>";
		echo "Ruby:<br>628cb92183fe4782e2c2aa7b11794bf1";

		
		
	?>
	<font size="3">	
	<!--Función de php para mostrar la pregunta y registro correspondiente sin tanto rollo-->
	
		
	</div>	
</div><!-- container --><br/><br/>
		
		
		
		
	</section><!-- Este es el fin tanto de las barras laterales como de el contenido-->	
	<footer>
					<section id="footer-area">
						<section id="footer-outer-block">
								<aside class="footer-segment">
											<ul>									
												<p class="foot">Hecho en M&eacute;xico, <a href="http://www.unam.mx">Universidad Nacional Aut&oacute;noma de M&eacute;xico (UNAM)</a>, todos los derechos reservados 2009 - 2015. Esta p&aacute;gina puede ser reproducida con fines no lucrativos, siempre y cuando se cite la fuente completa y su direcci&oacute;n electr&oacute;nica, y no se mutile. De otra forma requiere permiso previo por escrito de la instituci&oacute;n.<a href="creditos.html">Cr&eacute;ditos</a></p>
												
											</ul>
								</aside><!-- primer columna del footer -->		
						</section><!-- Aqui se termina el footer editable -->
					</section><!-- Fin del espacio del footer -->
			</footer>
</div><!-- Fin de la "envoltura" -->
<!--Ingeniero Hugo Luna a.k.a. hugix4-->
</body>
</html>