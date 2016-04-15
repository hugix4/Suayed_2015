<?php
header("Content-Type: text/html;charset=utf-8");
require('fxPreguntas.php');
require('secure_T.php');
require_once('cnxh.php');
$_SESSION["a1"]="1";
//require_once('cnxD.php');
$funciones=new fxpreguntas();
//$conexionD=new conexionD();
//$conexionD->conectar();
$conexion=new conexion();
$conexion->conectar();
$tituloEx='Ejercicio Diagnóstico TOEFL';
$Npreguntas=10;
$responderD='N';
$nombreBD='bdtoefl15';
$bdPreguntas='ptoefl15';
$ultimaEt=7;
$numPreguntas=65;



?>
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
			
		$(document).ready(function()
		{		
			$("#boton").click(function ()
			{ //($i=(1+$Nactual);$i<=($Npreguntas+$Nactual);$i++)
			
			var neutro="";
			var radio;
			var txt="";
			var i;
			var j;
			var sel=0;
			var nombre=document.getElementsByName("Et")[0].value;
			var v2=0;
			
			if(nombre==7)
			{
			var v2=5;
			//alert("Nombre es: "+nombre+" y v2 es: "+v2);			
			}
			
			var v1=(nombre*10)-9;
			for(var i=v1;i<=(v1+9-v2);i++){
			   neutro="p"+i;
			   //alert("neutro tiene un valor en "+i+" de "+neutro);       
			   radio=document.getElementsByName(""+neutro); 
			   for(j=0;j<radio.length;j++){
				//alert("Hola "+j);
				if(radio[j].checked){     
				 sel++;
				}
			   }
			}
			if(sel==0){
			 alert("No has respondido nada");
			 return false;
			}
			if(sel>0 && sel<(10-v2)){
			 alert("Te faltan preguntas por responder");
			 return false;
			}
			if(sel==10-v2){
			 //alert("Bien, finalizaste la etapa");
			 $("#examen").submit();
			}
			
			});
		});
					
		function todas($valor){
			var allElems = document.getElementsByTagName('input');
			for (i = 0; i < allElems.length; i++) {
				if (allElems[i].type == 'radio' && allElems[i].value != $valor) {
					allElems[i].checked = true;
				}
			}
		}	
		
	 </script>
		 
	<div id="loop"><img border="0" alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico, Coordinaci&oacute;n General de Lenguas" src="images/CGLh1a.png"  width="1200px" height="18%" align="center" border="0" usemap="#CGLh"/></a>
		<table border=0 width="100%"><tr><td align="center">
			<map name="CGLh"> 
				<area alt="Universidad Nacional Autónoma de México" shape="rect" coords="0,0,549,120" href="http://www.unam.mx">
				<area alt="Coordinaci&oacute;n General de Lenguas" shape="rect" coords="550,0,1300,120" href="http://www.cgl.unam.mx">
			</map>
		 </table>
	</div>
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
			
			#nv{
				visibility: hidden;
			}
		</style> 
<!--****************************Esta es la secci&oacute;n destinada a la barra del men&uacute; principal de todo el portal********************************************-->	
	<div id="menu">			
					<ul class="menu">
						<br/><b style="color: #000066;"><?php echo $tituloEx;?></b>										
					</ul>
	</div>
<!--****************************Termino de la secci&oacute;n de la barra del men&uacute; principal de todo el portal********************************************-->	

<div id="wrapper"><!-- Aqu&iacute; se envuelve todo el contenido de la p&aacute;gina -->
	<section id="main"><!-- contenido principal y menus laterales -->				        		
		<br/>
		<div class="container">
			<ul class="tabs">
				<li class="tab-link current" data-tab="tab-1"><b>Preguntas</b></li>
				
			</ul>
			<div id="tab-1" class="tab-content current">				
			<!--Funci&oacute;n de php para mostrar la pregunta y registro correspondiente sin tanto rollo-->
			<?php
				/*Esta funci&oacute;n obtiene como arreglo las respuestas seleccionadas de los radiobutton*/
				function getRespuestas($Npreguntas,$Nactual){
					$reI=array();
					for($i=1+$Nactual;$i<=$Npreguntas+$Nactual;$i++){						
						$reI[$i]=$_POST['p'.$i];				
					}
					return $reI;
				}
				
				/*Funci&oacute;n que obtiene un arreglo de 1 y 0 las respuestas bien o mal*/
				function rCorrecta($respuestas,$correctas,$Npreguntas,$Nactual){		
					$rCor=array();
					for($i=1+$Nactual;$i<=$Npreguntas+$Nactual;$i++){
						if($respuestas[$i]==$correctas[$i]){
							$rCor[$i]=1;			
							//echo "La respuesta correcta es: $ansArr[$h]";
						}
						else{
							$rCor[$i]=0;			
						}		
					}
					return $rCor;			
				}
			
				function preguntaDe4($num,$Pregunta,$OpA,$OpB,$OpC,$OpD, $rBien,$etapa){		
					$ansArr=array($OpA,$OpB,$OpC,$OpD);
					 echo"<div id='nv'>
						ansArr0: $ansArr[0], ansArr1: $ansArr[1], ansArr2: $ansArr[2], ansArr3: $ansArr[3] 
					 </div>";
					shuffle($ansArr);
					
					echo "<br/><br/><br/><b><font color='#08088A'>".$num.". </font><font id='pg".$num."' color='#08088A'>".str_replace("B:","<br/>&nbsp;&nbsp;&nbsp;&nbsp;B:",$Pregunta)."</font></b>
					<br/><br/><input type='radio' name='p".$num."' value='".$ansArr[0]."'><font color='#08088A'>A. </font>".$ansArr[0]."</input>
					<br/><br/><input type='radio' name='p".$num."' value='".$ansArr[1]."'><font color='#08088A'>B. </font>".$ansArr[1]."</input>
					<br/><br/><input type='radio' name='p".$num."' value='".$ansArr[2]."'><font color='#08088A'>C. </font>".$ansArr[2]."</input>
					<br/><br/><input type='radio' name='p".$num."' value='".$ansArr[3]."'><font color='#08088A'>D. </font>".$ansArr[3]."</input>		
					<input type='hidden' name='R".$num."' value='".$rBien."'>
					<input type='hidden' name='Et' value='$etapa'>			
					</br></br>";
					
				}
				
				/*Funci&oacute;n que obtiene los arreglos binarios como una sola cadena*/
				function cadenaBin($Npreguntas,$rBinarias,$Nactual){
					$cadBin='';
					for($i=1+$Nactual;$i<=$Npreguntas+$Nactual;$i++){
						$cadBin.=$rBinarias[$i];
					}
					return $cadBin;
				}
				
				
				echo "
				<style type='text/css'>
							
					div.tabla_centro{
					text-align: justify;
					}

					div.tabla_centro table {
					margin: 0 auto;
					text-align: center;
					}

					.mail{
						background-image: url('images/fe4i1.png');
						text-align:justify;
						padding: 14px;
						color: white;
						font-family:'Courier New';
						font-size:16px;
					}
					.forum{
					background-image: url('images/fe5i1.png');
					text-align:justify;
					padding: 14px;
					color: white;
					font-family:'Courier New';
					font-size:16px;
					}
					.game{
					background:black; 
					text-align:justify;
					padding: 14px;
					color: white;
					font-family:'Courier New';
					font-size:16px;
					}
				</style>";	
				
				echo "<div class='tabla_centro'><br/>";			
						
					$Cuenta=$_SESSION[Cuenta];
					//echo "Cuenta=$Cuenta<br/>";
					$Nombre=$_SESSION[Nombre];
					//echo "Nombre=$Nombre<br/>";
					$Termino=$funciones->consultaUnica("select Termino from $nombreBD where Cuenta=$_SESSION[Cuenta]");
					//echo "Termino=$Termino<br/>";
					$dePost='';
				
						
					if($Termino=='S')
					{
						//$Cal=$funciones->consultaUnica("select Calificacion from $nombreBD where Cuenta=$_SESSION[Cuenta]");			
						//$arrayBin=$funciones->obtenerArrayBinario($ultimaEt,$_SESSION[Cuenta],$nombreBD);
						//echo"El array bin, también se emplea para colocación<br/>";
						//print_r($arrayBin);
						//echo"<br/>";
						//$calNum=$funciones->obtenerCalNum($numPreguntas,$arrayBin);
						//echo "La cal num: ".$calNum;
						//echo"<br/>";
						//$colocacion=$funciones->colocacionIni($arrayBin);
						//$cal=serialize($calNum);
						//$col1=serialize($colocacion);						
						echo"<br/>
						<br/>
						Examen terminado.<br/><br/> Tu examen de inglés ha finalizado satisfactoriamente
						<br/>
						";
						//echo "<br/><br/><u><a target='_blank' href='calificaS.php?c=$_SESSION[Cuenta]&cal=$cal&rs=$col1' style='color:black'>Comprobante en pdf</a></u>";
						echo "<br/><br/>			
						<u>
							<a href='salirI.php' style='color:yellow'>
								Cerrar Sesi&oacute;n
							</a>
						</u>";
					}
					
					/*$etapaP1=array();			
					$etapaP2=array();
					$etapaP3=array();
					$etapaP4=array();
					$etapaP5=array();
					echo"A continuaci�n se probar� el etP2";
						$Prueba1=$_POST[etP2];
						echo $Prueba1;
					echo"<br/>";		
					//$et1=unserialize($_SESSION[et1]);
					//print_r($et1);
					$etP01=$_SESSION[etP1];
					$etP02=$_SESSION[etP2];
					$etP03=$_SESSION[etP3];
					$etP04=$_SESSION[etP4];
					//echo "El resultado de Session es: $etP01 <br/>";
					$exP1=unserialize($etP01);
					$exP2=unserialize($etP02);
					$exP3=unserialize($etP03);
					$exP4=unserialize($etP04);
					//echo "Deserializandolo queda como: <br/>";
					//print_r($exP1);
					//echo"<br/>";
					//echo"Probando que no este vacio etP1: ".$_POST[etP1];
					//echo"Probando a deserializarlo etP1: ".unserialize($_POST[etP1]);	*/
					
					/*echo"Imprimiendo exP1<br/>";
					print_r($exP1);
					echo"<br/>";
					echo"Imprimiendo exP2<br/>";
					print_r($exP2);
					echo"<br/>";
					echo"Imprimiendo exP3<br/>";
					print_r($exP3);
					echo"<br/>";*/
					if(empty($_POST['Et']))
					{//$_POST[Et]==null){
						//echo"El valor de post es nulo, por tanto se ocupará; el valor de la BD<br/>";
						
						$Bin1=$funciones->consultaUnica("select Bin1 from $nombreBD where Cuenta=$_SESSION[Cuenta]");
						if($Bin1=='-'){				
							$etapa=0;
							//echo "<br/>El valor de etapa es: $etapa, dentro del if del Bin1<br/>";
						}
						else{ 
							$Bin2=$funciones->consultaUnica("select Bin2 from $nombreBD where Cuenta=$_SESSION[Cuenta]");
							if($Bin2=='-'){
							$etapa=1;
							//echo "<br/>El valor de etapa es: $etapa, dentro del if del Bin2<br/>";
							}
							else{
								$Bin3=$funciones->consultaUnica("select Bin3 from $nombreBD where Cuenta=$_SESSION[Cuenta]");
								if($Bin3=='-'){
									$etapa=2;
									//echo "<br/>El valor de etapa es: $etapa, dentro del if del Bin3<br/>";
								}
								else{
									$Bin4=$funciones->consultaUnica("select Bin4 from $nombreBD where Cuenta=$_SESSION[Cuenta]");
									if($Bin4=='-'){
										$etapa=3;
										//echo "<br/>El valor de etapa es: $etapa, dentro del if del Bin3<br/>";
									}
									else{
										$Bin5=$funciones->consultaUnica("select Bin5 from $nombreBD where Cuenta=$_SESSION[Cuenta]");
										if($Bin5=='-'){
											$etapa=4;
											//echo "<br/>El valor de etapa es: $etapa, dentro del if del Bin3<br/>";
										}
										else{
											$Bin6=$funciones->consultaUnica("select Bin6 from $nombreBD where Cuenta=$_SESSION[Cuenta]");
											if($Bin6=='-'){
												$etapa=5;
												//echo "<br/>El valor de etapa es: $etapa, dentro del if del Bin3<br/>";
											}
											else{
												$etapa=$ultimaEt+1;
											}
										}
									}
								}
							}
						}
						
						//$etapa=$funciones->consultaUnica("select Etapa from $nombreBD where Cuenta=$_SESSION[Cuenta]");
						$dePost='N';
						//echo"Sin post Etapa: ".$etapa;
						//echo"<br/>";
						if($etapa==$ultimaEt+1 && $Termino=='N')
						{	
							//echo"Adentro del if<br/>";
							$arrayBin=$funciones->obtenerArrayBinario($ultimaEt,$_SESSION[Cuenta],$nombreBD);
							//echo"El array bin, también se emplea para colocación<br/>";
							//print_r($arrayBin);
							//echo"<br/>";
							$aciertos=$funciones->obtenerAciertos($numPreguntas,$arrayBin);
							$calificacion=(($aciertos-5)*100)/$numPreguntas;
							$calificacion=round($calificacion,2);
							//echo "<br/>Tuvo los siguientes aciertos: ".$aciertos;
							//echo"<br/>";
							$calNum=$funciones->obtenerCalNum($numPreguntas,$arrayBin);
							//echo "<br/>La cal num: ".$calNum;
							//echo"<br/>";
							$colocacion=$funciones->colocacionIni($arrayBin);
							//echo "$colocacion <br/>";
							//$Seccion=$funciones->Seccion($arrayBin);							
							//echo "Seccion: $Seccion <br/>";
							//echo"Update $nombreBD Set Calificacion='$calNum',Resultado='$colocacion', Termino='S' where Cuenta='$_SESSION[Cuenta]'";
							if($Cuenta==4321 || $Cuenta==9876 || $Cuenta==4444)
							{
								$sql="Update $nombreBD Set Calificacion='$calificacion', Bin1='-',Bin2='-',Bin3='-',Bin4='-',Bin5='-',Bin6='-',Bin7='-',Resultado='$colocacion', Termino='N',Etapa='0' where Cuenta='$_SESSION[Cuenta]'";							
								echo $sql;
								$sql=$conexion->consulta($sql);	
								echo"</br>Tuviste $aciertos aciertos</br>";
								echo"</br>Tuviste $calificacion de calificación</br>";
								echo"<br/><br/>Examen terminado. Tu examen de inglés ha finalizado satisfactoriamente<br/><br/>";
								echo "<br/><br/><u><a href='salirI.php' style='color:black'>Salir</a></u>";
								
								//echo "<br/><br/><u><a target='_blank' href='calificaS.php?c=$_SESSION[Cuenta]&cal=$calNum&rs=$colocacion' style='color:black'>Calificacion en pdf</a></u>";
							}
							else
							{
								
									$sql="Update $nombreBD Set Calificacion='$calificacion', Resultado='$colocacion',  Termino='S' where Cuenta='$_SESSION[Cuenta]'";
									//echo "<br/>$sql<br/>";		
									//$sqlD=$conexionD->consulta($sql);
									//$cal=serialize($calNum);
									//$col1=serialize($colocacion);
									$sql=$conexion->consulta($sql);				
									echo"<br/><br/>Examen terminado. Tu examen de inglés ha finalizado satisfactoriamente<br/><br/>";
									echo "<br/><br/><u><a href='salirI.php' style='color:black'>Salir</a></u>";									
									//echo "<br/><br/><u><a target='_blank' href='calificaS.php?c=$_SESSION[Cuenta]&cal=$cal&rs=$col1' style='color:black'>Comprobante en pdf</a></u>";
									
							}
						}
						
					}
					
					else
					{
						$etapa=$_POST['Et'];
						//echo"De post Etapa: ".$etapa."<br/>";
						//echo "Ocuparemos el valor de post<br/>";
						
						$dePost='S';
						$Nactual=($etapa*10)-10;
						//echo "Nactual tiene valor de: $Nactual<br/>";
						
						//if($etapa==5){echo"Si estamos en 5";}
						//echo "Lo que se pasa es: $Npreguntas y $Nactual";
						$respuestas=getRespuestas($Npreguntas,$Nactual);//Aqui se obtienen las respuestas tal cual en un arreglo que empieza en 1 no en 0 y termina en 115 en vez de 114			
						//echo "Respuestas tal cual=";
						//print_r($respuestas);
						//echo"<br/><br/>";
						$correctas=$funciones->getCorrectas($Npreguntas,$Nactual);
						//echo "Correctas tal cual=";
						//print_r($correctas);
						//echo"<br/><br/>";
						$rBinarias=rCorrecta($respuestas,$correctas,$Npreguntas,$Nactual);//Aqui se obtiene el arreglo binario '1010101' que da la suma para la calificacion final
						//echo "Respuestas binarias: ";
						//print_r($rBinarias);
						//echo"<br/><br/>";
						
						$respuestas2='';
						for($i=(1+$Nactual);$i<=($Npreguntas+$Nactual);$i++){				
							$respuestas2.='@'.$respuestas[$i];
						}			
						//echo"Respuestas a separar: $respuestas2";
						//echo"<br/>";
						$cadBin=cadenaBin(10,$rBinarias,$Nactual);  //Esta funci&oacute;n genera el arreglo binario como cadena de texto
						//echo "<br/>Cadena binaria es: $cadBin<br/>";
						//echo "<br/>Contenido de session: $_SESSION[Refrescar]<br/>";			
						//echo "<br/>Termino: $Termino<br/>";
						
						if ($etapa==0 && $dePost=='S')
						{
							$etapaDB=$etapa+1;				
							$sql="Update $nombreBD Set Bin$etapa='$cadBin', Rc$etapa='$respuestas2', Etapa='$etapaDB',Inicio=Now() where Cuenta='$_SESSION[Cuenta]'";	
							//$sqlD=$conexionD->consulta($sql);
							$sql=$conexion->consulta($sql);				
						}
						
						if ($etapa>=1 && $etapa<$ultimaEt && $dePost=='S')
						{		
							$etapaDB=$etapa+1;
							//echo"Update $nombreBD Set Bin$etapa='$cadBin', Rc$etapa='$respuestas2', Etapa='$etapaDB' where Cuenta='$_SESSION[Cuenta]'";
							if($etapa==1)
							{
								$sql="Update $nombreBD Set Bin$etapa='$cadBin', Rc$etapa='$respuestas2', Etapa='$etapaDB', Inicio=Now() where Cuenta='$_SESSION[Cuenta]'";	
							}
							else
							{
								$sql="Update $nombreBD Set Bin$etapa='$cadBin', Rc$etapa='$respuestas2', Etapa='$etapaDB' where Cuenta='$_SESSION[Cuenta]'";	
							}				
							//$sqlD=$conexionD->consulta($sql);
							$sql=$conexion->consulta($sql);
						}
						
						else if($etapa==$ultimaEt && $dePost=='S')
						{	
							//echo"Update $nombreBD Set Bin5='$cadBin',  Rc5='$respuestas2', Etapa='6' where Cuenta='$_SESSION[Cuenta]'";
							$sql="Update $nombreBD Set Bin$ultimaEt='$cadBin',  Rc6='$respuestas2', Etapa=$ultimaEt+1 where Cuenta='$_SESSION[Cuenta]'";		
							//$sqlD=$conexionD->consulta($sql);
							$sql=$conexion->consulta($sql);				
							echo "<br/><br/><u><a href='reT.php' style='color:black'>Terminar examen</a></u>";
						}
						
					}	
					
					if($etapa>=0 && $etapa<=$ultimaEt-1)
					{					
						echo "<form align='justify' id='examen' action='reT.php' method='POST' style='width:700px;margin-left:230px;'>";						
						for($i=($etapa*10)+1;$i<=($etapa*10)+10;$i++)
						{						
							
							$Num=$i;
							//echo"<br/>El valor de Num es: $Num<br/>";
							$sqlQ = "select Pregunta, A, B, C, D, Respuesta from $bdPreguntas where Numero='$Num'";						
							//echo $sqlQ;
							$sqlQ=$conexion->consulta($sqlQ);
							while($rowQ=mysql_fetch_array($sqlQ))
							{
								$Pregunta=$rowQ["Pregunta"];
								$OpA=$rowQ["A"];
								$OpB=$rowQ["B"];
								$OpC=$rowQ["C"];
								$OpD=$rowQ["D"];
								$rBien=$rowQ["Respuesta"];
								
							}
							if($i==1)
							{
								echo"<b>SECTION  I. STRUCTURE AND WRITTEN EXPRESSION</b><br/><br/> 
								This section is designed to measure  your ability to recognize  language that is appropriate for standard written English. There are two types of questions in this section, with special directions for each type. <br/> <br/>
								<b>PART A) Structure Questions.</b>  These are incomplete sentences. Beneath each sentence you will see four words or phrases marked (A), (B), (C), and (D). Choose the one word or phrase that best completes the sentence. <br/><br/>";
							}
							if($i==16)
							{
								echo"<br/><br/><b>SECTION I. PART B. Written Expression</b><br/><br/> 
								<b>Directions:</b> In questions <b>16-30,</b> each sentence has four words or phrases in CAPITAL LETTERS. They are marked <b>A, B, C</b> and <b>D</b>. Choose the one word or phrase in CAPITAL LETTERS that must be changed in order for the sentence to be correct.";
								//Find the answer of the question and select the one that corresponds to the letter of the answer you have chosen.  ";
							}
							if($i==31)
							{
								echo"<b>SECTION II. LISTENING COMPREHENSION</b><br/><br/> 
								<b>Directions:</b> In this section you will hear four conversations. After each conversation, you will hear several questions. The conversations and questions will not be repeated.  After you hear a question, read the four possible answers and choose the best. You are not allowed to take notes. <br/><br/>
								<b>Conversation 1. (Track 6) </b><br/><br/>";
								echo"<audio controls><source src='/audio/T6.mp3' type='audio/mpeg'>Tu navegador no soporta este elemento.</audio><br/>";
							}
							if($i==35)
							{
								echo"<br/><br/><b>Conversation 2. (Track 7) </b><br/><br/>";
								echo"<audio controls><source src='/audio/T7.mp3' type='audio/mpeg'>Tu navegador no soporta este elemento.</audio><br/>";
							}
							if($i==38 || $i==41)
							{
								echo"<br/><br/><b>Conversation 3. (Track 9) </b><br/><br/>";
								echo"<audio controls><source src='/audio/T9.mp3' type='audio/mpeg'>Tu navegador no soporta este elemento.</audio><br/>";
							}
							if($i==43)
							{
								echo"<br/><br/><b>Conversation 4. (Track 10) </b><br/><br/>";
								echo"<audio controls><source src='/audio/T10.mp3' type='audio/mpeg'>Tu navegador no soporta este elemento.</audio><br/>";
							}
							if($i==47)
							{
								echo"<br/><br/><br/><b>SECTION III.  READING COMPREHENSION </b><br/><br/> 
								This section is designed to measure  your ability to read and understand short passages similar in topic and style to those that students are likely to encounter in North American universities and colleges.<br/>
								<b>Directions:</b>In this section you will read several passages. Each one is followed by a number of questions about it. You are to choose the <b>one</b> best answer, (A), (B), (C) or (D) to each question. <br/>							
								Answer all  questions about the information in a passage, on the basis of what is <b>stated</b> or <b>implied</b> in that passage.<br/><br/>";
							}
							if($i==47 || $i==51){
							echo" <br/><br/><table border='1'style='width:100%; text-align: left;'><td>The largest diamond ever found is the Cullinan Diamond. This diamond weighed 3,106 carats in its uncut state when it was discovered in South Africa  on January 25, 1905. <br/>
								The Cullinan Diamond was cut into 9 major stones and 96 smaller ones. The largest of the cut stones, and still the largest cut diamond in the world, is the pear-shaped Cullinan I at 530 carats. This diamond, which is also known as the Greater Star of Africa, is more than 2 inches (5.4 cm) long and 1.75 inches (4.4 cm) wide. It became part of the British crown jewels in 1907.</td></table><br/><br/>";
							}
							if($i==56 || $i==61)
							{								
								echo"  <br/><br/><br/><table border='1'style='width:100%; text-align: left;'><td>Coca-Cola was invented in 1886 by Atlanta pharmacist John S. Pemberton. The name for the product was actually proposed by Pemberton’s assistant, Frank Robinson. The name was taken from the two most unusual ingredients in the drink, the South American coca leaf and the African cola nut.  <br/>
								The recipe for today’s Coca-Cola is very well guarded. Many of the ingredients are known; in addition to coca leaves and cola nut, they include lemon, orange, lime, cinnamon, nutmeg, vanilla, caramel and sugar. The proportions of the ingredients and the identity of Coke’s secret ingredients are known by only a few of the Coca-Cola Company’s senior and corporate officers.</td></table><br/><br/>";
							}
							if($i>=1 && $i<=$numPreguntas){	
								//echo"i: $i,Preg: $Pregunta,A: $OpA,B: $OpB,C: $OpC,D: $OpD";
								preguntaDe4($i,$Pregunta, $OpA, $OpB, $OpC, $OpD,$rBien,($etapa+1));
							}							
						}	
						echo "<input type='hidden' name='Cuenta' value='$_SESSION[Cuenta]'>";
						echo "<input type='hidden' name='Grado' value='$Grado'>";
						$prueba=$_SESSION['Refrescar']='S';
						/*$exP1=serialize($etapaP1);
						$exP2=serialize($etapaP2);
						$exP3=serialize($etapaP3);
						$exP4=serialize($etapaP4);
						$exP5=serialize($etapaP5);//Son el número de etapas en las que se dividen los niveles
						echo "<input type='hidden' name='Refrescar' value='$prueba'><br/>";
						echo "<input type='hidden' name='etP1' value='$exP1'><br/>";
						echo "<input type='hidden' name='etP2' value='$exP2'><br/>";
						echo "<input type='hidden' name='etP3' value='$exP3'><br/>";
						echo "<input type='hidden' name='etP4' value='$exP4'><br/>";
						echo "<input type='hidden' name='etP5' value='$exP5'><br/>";*/
						if($etapa==$ultimaEt){
							echo "<br/><br/><input type='submit' id='boton' value='Finalizar' style='margin-left:150;'>";
						}else{
						echo "<br/><br/><input type='submit' id='boton' value='Continuar' style='margin-left:150;'>";
						}
						if($responderD=='S')
						{
						echo "<br/><br/><input type='button' onclick=todas(1) value='Responder todo D' style='margin-left:150;'>";
						}
						//echo "<br/><br/><input type='button' onclick=todas(0) value='Responder Mal' style='margin-left:150;'>";
						echo "</font>";
						echo "</form>";
					}
					
					
				?>
					
				</div><!--class tabla centro-->	
			</div><!-- container -- tab current><br/><br/>-->
		</div>	
		
		
		
	</section><!-- Este es el fin tanto de las barras laterales como de el contenido, div main-->	
	<footer>
		<section id="footer-area">
			<section id="footer-outer-block">
					<aside class="footer-segment">
								<ul>									
									<p class="foot">Hecho en M&eacute;xico, <a href="http://www.unam.mx">Universidad Nacional Aut&oacute;noma de M&eacute;xico (UNAM)</a>, todos los derechos reservados 2009 - 2015. Esta p&aacute;gina puede ser reproducida con fines no lucrativos, siempre y cuando se cite la fuente completa y su direcci&oacute;n electr&oacute;nica, y no se mutile. De otra forma requiere permiso previo por escrito de la instituci&oacute;n.<a href="creditos.html">Cr&eacute;ditos</a>
									</p>									
								</ul>
					</aside><!-- primer columna del footer -->		
			</section><!-- Aqui se termina el footer editable -->
		</section><!-- Fin del espacio del footer -->
	</footer>
</div><!-- Fin de la "envoltura" -->
<!--Ingeniero Hugo Luna a.k.a. hugix4-->
	</body>
</html>