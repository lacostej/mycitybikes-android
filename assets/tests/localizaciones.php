

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//ES" http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd>
	
<script>
/* function detectaTecla(evt)
{
	if(document.getElementById('revertbox11').style.display!='')		
	{		
		if(document.all)
		{
			if(event.keyCode==13)				
				restaurar();
		
		}else{
			if(evt.keyCode==13)
				restaurar();
			
		}
		
	}
}*/
	
</script>

<html xmlns="http://www.w3.org/1999/xhtml" lang=es  xml:lang=es >
		<head>
			<title> BIZI </title>
			<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
			
			<link rel="stylesheet" type="text/css" href="/general/estilos/estilos.css.php">
			<link rel="stylesheet" type="text/css" href="/general/estilos/estilos_interior.css.php">			
			<script type='text/javascript' src='/general/scripts/validacion.js.php'></script>
	
			<script language="javaScript" src="/general/scripts/jscripts.php"> </script>				
			






 








































						<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
										<script type="text/javascript">
					_uacct = "UA-4240880-2";
					urchinTracker();
				</script>
					</head>
		
					
	
		<body onload="hora()" -onKeyPress="javascript:teclas(event)">

			<div id="contenedor2" style="width:100%;">
			
																
									
				
				<div id="cabecera">
<div id="fechafinal2">
										<div class="fecha">jueves 18 de junio de 2009<span id="div_hora">&nbsp;</span></div>
			</div>	



<div id="back-data2">

<div id="home-date">




<div style="margin-top:10px;">








 














































<script language="JavaScript">

function comprobarcampos()
	{
		var errorlog='';
		var nombre_usuario=trim(document.getElementById('p_txtLogin').value);
		var passw_usuario=trim(document.getElementById('p_txtPass').value);
		document.getElementById('p_txtLogin').value=nombre_usuario.replace(/'/g,"");
		document.getElementById('p_txtPass').value=passw_usuario.replace(/'/g,"");
		if(nombre_usuario==''){errorlog='literal errorlogin \r';}
		if(passw_usuario==''){errorlog=errorlog +'literal errorpass \r';}	
	
		if(errorlog!='')
		{
			var matriz=new Array();
			matriz[0]="Error en la validación de usuario.";	
			msgAlerta("Errores:",matriz);
			
		}
		else
		{	
			document.getElementById('frmlogin').action="/usuarios/login/validar_usuario.php";
			document.getElementById('frmlogin').submit();
		}		
	}
function comprobarvalue()
	{
		var nombre_usuario=trim(document.getElementById('p_txtLogin').value);
		var passw_usuario=trim(document.getElementById('p_txtPass').value);
		document.getElementById('p_txtLogin').value=nombre_usuario.replace(/'/g,"");
		document.getElementById('p_txtPass').value=passw_usuario.replace(/'/g,"");
	}
function tecla(e)
	{
		if(e.keyCode==13)
		{
			comprobarcampos();
		}
	}

</script>

<div id="login2" style="margin-bottom:10px; margin-top:-5px;">

		<div style="margin-left:15px;">
		<form name="frmlogin" id="frmlogin" method="post" action="">
			<div id="inner_login">
			
								
				
				<!-- Version3  -->
				
				
				<table width="160" border="0">
				  <tr>
				    <td class="literal_login3">Usuario:				    <td><input onKeyPress="tecla(event)" type="text" id="p_txtLogin" size="15" name="p_txtLogin" maxlength="25" onblur="comprobarvalue();"/></td>
				  </tr>
				  <tr>
				    <td class="literal_login3">Contraseña:				    <td><input onKeyPress="tecla(event)" type="password" id="p_txtPass" size="15" name="p_txtPass" maxlength="25" onblur="comprobarvalue();"/></td>
				  </tr>
				  <tr>
				    <td colspan="2"><input style="cursor:pointer;border:1px solid white;background:#fff;" type="button" value="Entrar" onclick="Javascript:comprobarcampos();" /></td>
				  </tr>
				</table>
													</div>	
		</form>
		</div>


</div>



	
	
</div>

	


</div>



</div>

<div style="width:210px; float:left;">

	&nbsp;

</div>


<div id="menu" style="position:relative; float:right;">

	<!--

						
				 	
				
								
									
																															
										<a class="opc_menu" href="http://www.bizizaragoza.com/localizaciones/localizaciones.php?TU5fTE9DQUxJWkFDSU9ORVM%3D&MQ%3D%3D">
													<div id="opc_menu_1" onmouseover="className='opc_menu_on_1'" onmouseout="className='opc_menu_off_1'">		
								<span class="text_menu_sel2 opc_menu">Mapa de estaciones</span>
							</div>
											</a>					
											
		
				
				 	
				
								
									
													
																																																	
																						<a class="opc_menu" href="http://www.bizizaragoza.com/modulos/modulos.php?TU5fSU5GT1JNQUNJT04%3D&Mw%3D%3D&Ng%3D%3D">
																	<div id="opc_menu_2" onmouseover="className='opc_menu_on_2'" onmouseout="className='opc_menu_off_2'">		
																	<span class="text_menu opc_menu">Información del servicio</span>

									</div>
							</a>							
												
									
											
		
				
				 	
				
								
									
													
																																																	
																						<a class="opc_menu" href="http://www.bizizaragoza.com/modulos/modulos.php?TU5fVVNVQVJJT1M%3D&Mg%3D%3D&MTE%3D">
																	<div id="opc_menu_3" onmouseover="className='opc_menu_on_3'" onmouseout="className='opc_menu_off_3'">		
																	<span class="text_menu opc_menu">Zona de usuarios</span>

									</div>
							</a>							
												
									
											
		
				
				 	
				
								
									
																															
										<a class="opc_menu" href="http://www.bizizaragoza.com/contacto/contacto.php?TU5fQ09OVEFDVE8%3D&NA%3D%3D">
													<div id="opc_menu_4" onmouseover="className='opc_menu_on_4'" onmouseout="className='opc_menu_off_4'">		
								<span class="text_menu_sel2 opc_menu">Contacto</span>
							</div>
											</a>					
											
		
				
				 	
				
								
									
																															
										<a class="opc_menu" href="http://www.bizizaragoza.com/noticias/noticias.php?TU5fTk9USUNJQVM%3D&NQ%3D%3D">
													<div id="opc_menu_5" onmouseover="className='opc_menu_on_5'" onmouseout="className='opc_menu_off_5'">		
								<span class="text_menu_sel2 opc_menu">Noticias</span>
							</div>
											</a>					
											
		
				
-->





		



		
		
						
		
																							
							
					
		
	
		
		



		
		
						
		
				
																												<!-- Modificacion para que en el breadbunch aparezca el menu actual (el del hijo) -->
										
																			
																				
														
		
	
		
		



		
		
						
		
				
																												<!-- Modificacion para que en el breadbunch aparezca el menu actual (el del hijo) -->
										
																			
																				
														
		
	
		
		



		
		
						
		
																							
							
					
		
	
		
		



		
		
						
		
																							
							
					
		
	
		
	

<!-- Guardamos los 5 Nombres y direcciones del menu en sendos arrays -->



<!-- Cuidado! El orden en el que hay que poner los campos no es el mismo en el que estaen en la base de datos -->

	
<div id="menu-superior" style="cursor:default;">
	<div class="opc-menu" style="cursor:default;">
					<div class="img-opc-01">
					<a href="http://www.bizizaragoza.com/modulos/modulos.php?TU5fSU5GT1JNQUNJT05fREVGSU5JQ0lPTg%3D%3D&Mw%3D%3D&Ng%3D%3D">Información del servicio</a>
		</div>
		<div class="menu-opc-txt"><a href="http://www.bizizaragoza.com/modulos/modulos.php?TU5fSU5GT1JNQUNJT05fREVGSU5JQ0lPTg%3D%3D&Mw%3D%3D&Ng%3D%3D">Información del servicio</a></div>
	</div>
	<div class="opc-menu" style="cursor:default;">
					<div class="img-opc-02">
					<a href="http://www.bizizaragoza.com/localizaciones/localizaciones.php?TU5fTE9DQUxJWkFDSU9ORVM%3D&MQ%3D%3D">Mapa de estaciones</a>
		</div>
		<div class="menu-opc-txt"><a href="http://www.bizizaragoza.com/localizaciones/localizaciones.php?TU5fTE9DQUxJWkFDSU9ORVM%3D&MQ%3D%3D">Mapa de estaciones</a></div>
	</div>
	<div class="opc-menu" style="cursor:default;">
					<div class="img-opc-03">
					<a href="http://www.bizizaragoza.com/modulos/modulos.php?TU5fVVNVQVJJT1NfSU5GTw%3D%3D&Mg%3D%3D&MTE%3D">Zona de usuarios</a>
		</div>
	<div class="menu-opc-txt"><a href="http://www.bizizaragoza.com/modulos/modulos.php?TU5fVVNVQVJJT1NfSU5GTw%3D%3D&Mg%3D%3D&MTE%3D">Zona de usuarios</a></div>
	</div>
	<div class="opc-menu" style="cursor:default;">
					<div class="img-opc-04">
					<a href="http://www.bizizaragoza.com/contacto/contacto.php?TU5fQ09OVEFDVE8%3D&NA%3D%3D">Contacto</a>
		</div>
	<div class="menu-opc-txt"><a href="http://www.bizizaragoza.com/contacto/contacto.php?TU5fQ09OVEFDVE8%3D&NA%3D%3D">Contacto</a></div>
	</div>
	<div class="opc-menu" style="cursor:default;">
					<div class="img-opc-05">
					<a href="http://www.bizizaragoza.com/noticias/noticias.php?TU5fTk9USUNJQVM%3D&NQ%3D%3D">Noticias</a>
		</div>
	<div class="menu-opc-txt"><a href="http://www.bizizaragoza.com/noticias/noticias.php?TU5fTk9USUNJQVM%3D&NQ%3D%3D">Noticias</a></div>
	</div>                
</div>


<!--

<div id="menu-superior">
	<div class="opc-menu">
    	<div class="img-opc-01"><a href="http://www-dev.bizizaragoza.com/modulos/modulos.php?TU5fSU5GT1JNQUNJT04%3D&Mw%3D%3D&Ng%3D%3D">Información del Servicio</a></div>
        <div class="menu-opc-txt">Información del Servicio</div>
    </div>
	<div class="opc-menu">
    	<div class="img-opc-02"><a href="http://www-dev.bizizaragoza.com/localizaciones/localizaciones.php?TU5fTE9DQUxJWkFDSU9ORVM%3D&MQ%3D%3Dhttp://www-dev.bizizaragoza.com/localizaciones/localizaciones.php?TU5fTE9DQUxJWkFDSU9ORVM%3D&MQ%3D%3D">Mapa del Servicio</a></div>
        <div class="menu-opc-txt">Mapa del Servicio</div>
    </div>
	<div class="opc-menu">
    	<div class="img-opc-03"><a href="http://www-dev.bizizaragoza.com/modulos/modulos.php?TU5fVVNVQVJJT1M%3D&Mg%3D%3D&MTE%3D">Zona de Usuarios</a></div>
        <div class="menu-opc-txt">Zona de Usuarios</div>
    </div>
	<div class="opc-menu">
    	<div class="img-opc-04"><a href="http://www-dev.bizizaragoza.com/contacto/contacto.php?TU5fQ09OVEFDVE8%3D&NA%3D%3D">Contacto</a></div>
        <div class="menu-opc-txt">Contacto</div>
    </div>
	<div class="opc-menu">
    	<div class="img-opc-05"><a href="http://www-dev.bizizaragoza.com/noticias/noticias.php?TU5fTk9USUNJQVM%3D&NQ%3D%3D">Noticias</a></div>
        <div class="menu-opc-txt">Noticias</div>
    </div>                
</div>

-->



<!--	


						
				 	
				
								
									
																															
										<a class="opc_menu" href="http://www.bizizaragoza.com/localizaciones/localizaciones.php?TU5fTE9DQUxJWkFDSU9ORVM%3D&MQ%3D%3D">
													<div id="option_1" onmouseover="className='option1_hover'" onmouseout="className='option1_normal'">		
								<span class="text_menu_sel2 opc_menu">Mapa de estaciones</span>
							</div>
											</a>					
											
		
				
				 	
				
								
									
														
																																																	
																						<a class="opc_menu" href="http://www.bizizaragoza.com/modulos/modulos.php?TU5fSU5GT1JNQUNJT04%3D&Mw%3D%3D&Ng%3D%3D">
																	<div id="option_2" onmouseover="className='option2_hover'" onmouseout="className='option2_normal'">		
																	<span class="text_menu opc_menu">Información del servicio</span>

									</div>
							</a>							
												
									
											
		
				
				 	
				
								
									
														
																																																	
																						<a class="opc_menu" href="http://www.bizizaragoza.com/modulos/modulos.php?TU5fVVNVQVJJT1M%3D&Mg%3D%3D&MTE%3D">
																	<div id="option_3" onmouseover="className='option3_hover'" onmouseout="className='option3_normal'">		
																	<span class="text_menu opc_menu">Zona de usuarios</span>

									</div>
							</a>							
												
									
											
		
				
				 	
				
								
									
																															
										<a class="opc_menu" href="http://www.bizizaragoza.com/contacto/contacto.php?TU5fQ09OVEFDVE8%3D&NA%3D%3D">
													<div id="option_4" onmouseover="className='option4_hover'" onmouseout="className='option4_normal'">		
								<span class="text_menu_sel2 opc_menu">Contacto</span>
							</div>
											</a>					
											
		
				
				 	
				
								
									
																															
										<a class="opc_menu" href="http://www.bizizaragoza.com/noticias/noticias.php?TU5fTk9USUNJQVM%3D&NQ%3D%3D">
													<div id="option_5" onmouseover="className='option5_hover'" onmouseout="className='option5_normal'">		
								<span class="text_menu_sel2 opc_menu">Noticias</span>
							</div>
											</a>					
											
		
			
	
-->
<div id="navegacion" style="position:absolute; right:10px;top:5px;">
	<div id="navegacion_acciones">
	<table border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td><a href="http://www.bizizaragoza.com/home/home.php?&&ZXM%3D.php"><img src="/pfw_files/tpl/icon_home.gif" alt="Inicio" title="Inicio"></a></td>
		<td><a href="/general/estructura/mapaweb/mapaweb.php?TU5fTkFWRUdBQ0lPTg%3D%3D"><img src="/pfw_files/tpl/icon_webmap.gif" alt="Mapa Web" title="Mapa Web"></a></td>
		<td><a href="javascript:agregar_a_favoritos()"><img src="/pfw_files/tpl/icon_favorites.gif" alt="Añadir a Favoritos" title="Añadir a Favoritos"></a></td>
	</tr>
</table>	

	</div>
	<div style="clear:both;"></div>
</div> 

</div>




														

<div id="link-logo"> <a href="http://www.bizizaragoza.com/home/home.php?TU5fTE9DQUxJWkFDSU9ORVM%3D&&ZXM%3D"><img src="/pfw_files/tpl/transp.gif" width="220" height="130"/> </a> </div> 
<div style="font-weight:bold;font-size:12px;cursor:pointer;text-transform:uppercase;position:absolute;top:5%;right:720px;">
	<!-- Para el cambio de idioma -->



			
								<a class="idioma" href="/localizaciones/localizaciones.php?TU5fTE9DQUxJWkFDSU9ORVM%3D&&ZW4%3D">						
							
			<span class="idioma_no_seleccionado">English</a></span>
		
	

</div>
</div>
				
												

				<div id="parte_central">
					<div id="menu_lateral">
						







<div id="menu_lateral_interior" >
			





	

</div>
<div id="div_menu_lateral_interior">

	<img src="/pfw_files/tpl/back.jpg"/>
</div>				
					</div>
					
							
					<div id="contenido3">
						<!-- <div id="red_ribbon_right"></div> -->
						
						<div id="contenido_real">
												
														<div id="ruta"> 
 




 





 
  





<!--
Printamos la ruta
-->
<div id="ru_txt">
<span class="text-ruta"><span class="text-ruta-home"><a href="/home/home.php?TU5fTE9DQUxJWkFDSU9ORVM%3D&&ZXM%3D">Home</a></span>   / <a href=""> <a href="#"> <span class="text-ruta-active">Mapa de estaciones</span> </a> </a> </span>
</div></div>
							
							<div id="content_title" style="margin-top:20px;">
								
 
	
			
					
						
																<div id="titulo_seccion">
				
								
				<!--
					<span id="titulo_parte1"> Mapa de</span>
					<span id="titulo_parte2">estaciones</span> 
				-->
				
				<div class="underline-red"> <span id="chg-titulo_parte1">  Mapa de estaciones </span> </div> 
				
	</div>
			
		
							</div>
							
							
							<!-- <div id="content_banner" style="margin-top:20px;">
		<img src="/pfw_files/tpl/banners/Banner_R_03.jpg"/>	</div> -->
							
							<div id="content_txt">	<html lang=es  xml:lang=es >
	
	<head>
	    <script type='text/javascript' src='/localizaciones/egeoxml.js.php'></script>
				<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
							<script src="http://maps.google.es/maps?file=api&amp;v=2.x&hl=es&amp;key=ABQIAAAAGuKNp8kPUSNNEkM1kP4ssxQY1_lPChX5eakDdxTTXP_q_xsG2RTulMhtHuSTOsoscX5elEU53WT_IQ" type="text/javascript" charset="utf-8"></script>
			<script type="text/javascript">
				_uacct = "UA-4240880-2";
				urchinTracker();
			</script>
			</head>
		
		            
		
		    	    
	    	    
	    	
	    			    		
		    		
	<script>
	    function muestraOcultaDiv(id){
	        var d = document.getElementById(id);
	        if(d.style.visibility == 'hidden'){
	            d.style.visibility = 'visible';
	            document.getElementById('mas').style.display = 'none';
	            document.getElementById('menos').style.display = 'inline';
	        }
	        else{
	            d.style.visibility = 'hidden';
	            document.getElementById('mas').style.display = 'inline';
	            document.getElementById('menos').style.display = 'none';
	        }
	        document.getElementById('estadoAvanzado').value = d.style.visibility;
	    }
	</script>
	
	<script type="text/javascript">
	
	    function muestra_ada(id)
	    {
	        document.getElementById('p_pfwid_ada').value=id;        
	        document.forms['f_search'].submit();
	    }
	    
	    
	   var map = null;
	   var icon=null;
	   var mapaCargado=false;
	
	
	   /*document.captureEvents(Event.MOUSEMOVE);
	   document.onmousemove = displayLocation;
	   var nav4 = window.Event ? true : false;
	   var x;
	   var y;    
	   function displayLocation(e) {
	     var str = "";
	     if (nav4) { // Navigator 4.0x         
	           x=e.pageX;
	         y=e.pageY;
	     } else { // Internet Explorer 4.0x
	            x=(event.clientX + document.body.scrollLeft);
	         y=(event.clientY + document.body.scrollTop);
	     }      
	   }*/
	   function ocultar()
	   {
	       document.getElementById('capa1').style.display='none';
	   }
	    
	
	    function load()
	    {
		 map = new GMap2(document.getElementById('map'));
		 map.addControl(new GMapTypeControl());
	       map.addControl(new GLargeMapControl());    
	       map.addControl(new GOverviewMapControl());
	     	 map.setCenter(new GLatLng(41.658357, -0.879936), 13); 
	        
	        //icon = new GIcon(); 
	        //icon.image = "";
	        //icon.iconSize = new GSize(17, 17); 
	        //icon.iconAnchor = new GPoint(6, 20); 
	        //icon.infoWindowAnchor = new GPoint(5, 1);
	
	
	        	        	        	
	      	    
	    	         
	    	
	                  
	        	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	              	          	                	            	            	            	            	            	                	                	                	                	            	            	            	                //icon.image = "";
	                	            	
	                	                                
	            	        
	            	                	    	        	        	        
	        
	        
	        
	        	        	                    
	        exml = new EGeoXml("exml", map);
	        exml.parseString('<?xml version="1.0" encoding="UTF-8"?><kml xmlns="http://earth.google.es/kml/2.0"><Document><name>KML Example file</name><description>Google Earth markers</description><Style id="icono"><IconStyle><Icon><href>http://www.bizizaragoza.com/pfw_files/tpl/icono_mark_black_bg.png</href></Icon></IconStyle></Style><Style id="icono_blue"><IconStyle><Icon><href>http://www.bizizaragoza.com/pfw_files/tpl/icono_mark_2_blue.png</href></Icon></IconStyle></Style><Style id="icono_green"><IconStyle><Icon><href>http://www.bizizaragoza.com/pfw_files/tpl/icono_mark_2.png</href></Icon></IconStyle></Style><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">EXPO. TORRE DEL AGUA</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">16<br />8<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.904667,41.670464,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">EXPO. PABLO RUIZ PICASSO (Pta. Norte)</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">7<br />14<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.897986,41.672356,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">CLARA CAMPOAMOR, ESQ. AVDA. DE RANILLAS</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">22<br />2<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.893514,41.667017,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">AVDA. RANILLAS. PUENTE DE LA ALMOZARA</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">21<br />0<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.888647,41.662183,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">Pº DE LA RIBERA. PUENTE SANTIAGO</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">0<br />21<br /></div></div>]]></description><styleUrl>#icono</styleUrl><Point><coordinates>-0.881100,41.660311,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">Pº DE LA RIBERA. PUENTE DEL PILAR</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">19<br />2<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.869969,41.656556,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">Pº ECHEGARAY. PASARELA DEL HUERVA</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">12<br />9<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.866356,41.652764,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">Pº ECHEGARAY. PUENTE DEL PILAR</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">4<br />17<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.870714,41.654153,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">Pº ECHEGARAY. PUENTE DE PIEDRA</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">0<br />30<br /></div></div>]]></description><styleUrl>#icono</styleUrl><Point><coordinates>-0.875708,41.656000,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">Pº ECHEGARAY. PUENTE SANTIAGO</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">0<br />21<br /></div></div>]]></description><styleUrl>#icono</styleUrl><Point><coordinates>-0.881386,41.657900,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">Pº ECHEGARAY. PUENTE DE LA ALMOZARA</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">8<br />12<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.891683,41.659314,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">PASARELA DEL VOLUNTARIADO. ALMOZARA</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">21<br />0<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.896167,41.663519,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">EXPO. PABELLÓN PUENTE (Puerta Sur)</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">12<br />12<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.907089,41.661713,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">ESTACIÓN INTERMODAL DE DELICIAS (Salidas)</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">2<br />28<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.908719,41.658256,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">ESTACIÓN INTERMODAL DE DELICIAS (Llegadas).</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">19<br />11<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.914292,41.659367,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">EL PORTILLO ESTACIÓN CERCANÍAS.</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">4<br />17<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.895703,41.651307,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">PLAZA DE ESPAÑA</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">0<br />21<br /></div></div>]]></description><styleUrl>#icono</styleUrl><Point><coordinates>-0.880647,41.651889,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">Pº CONSTITUCIÓN. PLAZA ARAGÓN</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">0<br />30<br /></div></div>]]></description><styleUrl>#icono</styleUrl><Point><coordinates>-0.884250,41.647736,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">ASALTO-EDIFICIO TROVADOR</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">0<br />9<br /></div></div>]]></description><styleUrl>#icono</styleUrl><Point><coordinates>-0.869839,41.650822,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">ASALTO-MIGUEL SERVET</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">5<br />16<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.875617,41.648947,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">TENIENTE CORONEL VALENZUELA - PLAZA SALAMERO</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">0<br />21<br /></div></div>]]></description><styleUrl>#icono</styleUrl><Point><coordinates>-0.882767,41.653089,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">CESAR AUGUSTO-SAN PABLO</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">1<br />20<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.884125,41.655194,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">PLAZA LOS SITIOS</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">18<br />3<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.879964,41.648389,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">PLAZA SAN PEDRO NOLASCO</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">0<br />21<br /></div></div>]]></description><styleUrl>#icono</styleUrl><Point><coordinates>-0.8771,41.652586,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">EMBARCADERO VADORREY</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">1<br />20<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.858058,41.652817,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">PAMPLONA - PUERTA DEL CARMEN</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">0<br />21<br /></div></div>]]></description><styleUrl>#icono</styleUrl><Point><coordinates>-0.887122,41.649364,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">Mª AGUSTÍN - COLEGIO JOAQUIN COSTA</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">0<br />21<br /></div></div>]]></description><styleUrl>#icono</styleUrl><Point><coordinates>-0.891453,41.651894,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">PLAZA PORTILLO - PLAZA DE TOROS</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">0<br />21<br /></div></div>]]></description><styleUrl>#icono</styleUrl><Point><coordinates>-0.892086,41.655108,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">Av MADRID - ALJAFERIA</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">4<br />17<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.896614,41.655681,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">AVDA. PABLO GARGALLO - AVDA. PUERTA SANCHO</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">17<br />4<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.901408,41.661219,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">AVDA. PABLO GARGALLO - C/ I. MENAYA</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">15<br />6<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.895772,41.659908,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">C/ RAMÓN Y CAJAL</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">1<br />20<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.886503,41.65175,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">PLAZA MAGDALENA</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">3<br />17<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.873278,41.652117,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">Pº ECHEGARAY Y CABALLERO - C/ SALVADOR MINGUIJÓN</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">20<br />1<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.860592,41.651308,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">Cº DE LAS TORRES - C/ SILVESTRE PÉREZ</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">18<br />3<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.866867,41.648447,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">Cº DE LAS TORRES - C/ ROGER DE TUR</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">7<br />14<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.872269,41.647044,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">Cº DE LAS TORRES - AVDA.CESÁREO ALIERTA</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">1<br />20<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.877589,41.645286,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">AVDA. CESÁREO ALIERTA - C/ F. BURRIEL</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">0<br />21<br /></div></div>]]></description><styleUrl>#icono</styleUrl><Point><coordinates>-0.875236,41.642342,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">PLAZA SCHWEITZER</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">1<br />20<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.88235,41.642383,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">TENOR FLETA CON C/ UNCASTILLO</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">17<br />4<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.881072,41.639786,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">AV.GOYA -Pº SAGASTA</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">3<br />18<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.887961,41.642956,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">Cº DE LAS TORRES - Pº SAGASTA</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">5<br />16<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.886489,41.640019,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">GRAN VÍA- FACULTAD ECONÓMICAS</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">0<br />21<br /></div></div>]]></description><styleUrl>#icono</styleUrl><Point><coordinates>-0.887681,41.646481,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">AVDA. GOYA - C/BALTASAR GRACIÁN</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">2<br />19<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.892669,41.644489,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">PLAZA SAN FRANCISCO</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">1<br />19<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.894883,41.641436,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">PLAZA M. ARREGUI</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">2<br />19<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.890431,41.647839,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">AVDA. GOYA - AVDA. A. CLAVÉ</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">0<br />21<br /></div></div>]]></description><styleUrl>#icono</styleUrl><Point><coordinates>-0.893725,41.648047,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">AVDA. VALENCIA - AVDA. SAN JUAN BOSCO</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">2<br />19<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.900369,41.644614,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">PLAZA ROMA</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">1<br />20<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.898647,41.649797,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">AVDA. DQSA. VILLAHERMOSA - C/ FRANCO Y LÓPEZ</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">1<br />20<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.902233,41.648061,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">AVDA. MADRID - AVDA. NAVARRA</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">8<br />12<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.900894,41.654756,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">AVDA. MADRID - Pº CALANDA</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">3<br />18<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.904572,41.653572,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">C/ MARQUÉS DE LA CADENA - C/ VELILLA DE EBRO</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">20<br />1<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.861786,41.658842,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">C/ BALBINO ORENSANZ</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">20<br />1<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.858964,41.655497,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">Pº DE LA RIBERA - C/ SOBRARBE</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">9<br />12<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.874214,41.658822,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">AVDA.CATALUÑA - AVDA. VALLE DE ZURIZA</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">21<br />0<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.869653,41.660361,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">PLAZA MOZART</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">19<br />1<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.865542,41.661683,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">C/ CAMINOS DEL NORTE - C/ F. OLIVAN BAYLE</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">16<br />4<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.871203,41.662975,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">C/ SIXTO CELORRIO - C/PEÑA OROEL</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">15<br />6<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.875483,41.663811,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">AVDA. MARQUÉS DE LA CADENA - AVDA. SAN JUAN DE LA PEÑA</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">7<br />14<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.871678,41.666725,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">AVDA. VALLE DE BROTO - PARQUE TÍO JORGE</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">15<br />6<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.876347,41.666336,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">AVDA. VALLE DE BROTO - AVDA. PIRINEOS</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">0<br />21<br /></div></div>]]></description><styleUrl>#icono</styleUrl><Point><coordinates>-0.881214,41.666111,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">AVDA. G. GÓMEZ DE AVELLANEDA - INTERCAMBIADOR</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">16<br />5<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.886822,41.666417,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">C/ PABLO NERUDA - C/ GABRIEL CELAYA</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">21<br />0<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.886053,41.670306,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">AVDA. G. GÓMEZ DE AVELLANEDA - C/ CLARA CAMPOAMOR</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">13<br />8<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.890094,41.668672,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">AVDA. MARÍA ZAMBRANO- C/ JULIO Gª CONDOY</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">8<br />13<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.889225,41.674806,13</coordinates></Point></Placemark><Placemark><description><![CDATA[<div style="margin:10px"><div style="font:bold 11px verdana;color:#cf152c;margin-bottom:10px">AVDA. PABLO RUIZ PICASSO - C/ GARCÍA MÁRQUEZ</i></div><div style="text-align:right;float:left;font:bold 11px verdana">Bicicletas<br />Aparcamientos</div><div style="margin-left:5px;float:left;font:bold 11px verdana;color:green">12<br />9<br /></div></div>]]></description><styleUrl>#icono_green</styleUrl><Point><coordinates>-0.893325,41.672878,13</coordinates></Point></Placemark></Document></kml>');
		  map.setCenter(new GLatLng(41.658357, -0.879936), 13); 
	        	    }
	 
	 </script>
	
	<body -onload="hora();">
	
	    	    <div id="estaciones">
	        <p> En el siguiente plano se pueden visualizar las estaciones de bicicletas actualmente en funcionamiento así como ver, en tiempo real, las disponibilidades de bicicletas en cada una de ellas. </p>
	    </div>
	    <div id="buscador" style="height:90px;">
	        <form name="f_search" method="POST" action="#">
	            <input type="hidden" id="p_pfwid_ada" name="p_pfwid_ada" value="">
	            <input type="hidden" name="sinPie" value="si">
	            <input type="hidden" name="estadoAvanzado" id="estadoAvanzado" value="hidden">
	            
	            <table border="0" style="font-size: 10px;">
	                <tr>
	                    <td class="span" width="61"><p>Distrito:</p></td>
	                    <td width="135">
	                        <select id="p_distri" name="p_distri" onchange="javascript:document.getElementById('p_distri').value=this.value" align="left">
	                            <option value="">Seleccione un distrito</option>
	                            	                            	                            	                                <option value="" SELECTED></option>
	                            	                                <option value="Todos los Distritos" >Todos los Distritos</option>
	                            	                            	                        </select>
	                    </td>
	                    <td width="116" align="right"><p>Código postal:</p></td>
	                    <td width="135"><input id="p_codpos" name="p_codpos" type="text" value="" maxlength="5"></td>
	                    <td>
	                        	                            <div id="mas" style="display:inline;"><a href="#" onclick="javascript:return muestraOcultaDiv('busqueda');"> <span style="font-size:12px; font-weight:bold;"> [+] </span> </a></div>
	                            <div id="menos" style="display:none;"><a href="#" onclick="javascript:return muestraOcultaDiv('busqueda');"> <span style="font-size:12px; font-weight:bold;"> [-]</span> </a></div>
	                        	                    </td>
	                </tr>
	                	                    <tr id="busqueda" style="width: 600px; padding-left: 42px; visibility: hidden;">
	                	                    <td class="span"><p>Dirección:</p></td>
	                    <td><input type="text" name="p_calle" size="15" value=""></td>
	                    <td class="span">
					<p>
					  Estaciones vacías:	      	              <input type="checkbox" name="p_vacias" >
					</p>
	                    </td>
				  <td class="span">
					<p>
					  Estaciones llenas:		                    <input type="checkbox" name="p_llenas" >
					</p>
	                    </td>
	                </tr>
	                <tr>
	                    <td colspan="6"><input type="button" value="Buscar" onClick="javascript:validar_localizacion('f_search','p_codpos')" ></td>
	                </tr>
	            </table>
	        <form>
		     
	    </div>
	
	    <div id="map_container1">
	          <div id="map"></div> 
	
	    </div>
	
	    <div style="clear:both;"></div> 
	  
	    <div style="padding: 4px; text-align: center; border-style: solid; border-width: 1px; border-color: #C0C0C0;">
	        <img align="absmiddle" src="/pfw_files/tpl/icono_mark_2.png" align="center"/>&nbsp;Estaciones con mas de una bici	        &nbsp;<img align="absmiddle" src="/pfw_files/tpl/icono_mark_black_bg.png" align="center"/>&nbsp;Estaciones sin bicis	        &nbsp;<img align="absmiddle" src="/pfw_files/tpl/icono_mark_blue_bg.gif" align="center"/>&nbsp;Estaciones cercanas	    </div>
	
	
	
	    	
	    <div id="cgh-resultados_map" style="margin-top:15px;">        
	    	<div class="underline-grey"> <strong> <span> RESULTADOS </strong> </div>
		  
	    	    	    
	    <br>Total estaciones activas:  <b>67</b><br>
	    	        	        	        	        <div style="width: 650px;">
	        	            	            	            	            	            <div style="width: 650px;">
	            <form name="f_search" method="POST" action="#">
	            <input type="hidden" name="sinPie" value="si">
			<input type="hidden" id="p_distri_2" name="p_distri_2" value="" />            
		            	            	            <div style="float:left; width: 140px; margin-left:5px; background-color: #FFFFFF;padding: 5px;"><a href="#" onclick="javascript: document.getElementById('p_distri_2').value='Todos los Distritos'; document.forms['f_search'].submit()">Todos los distritos</a><br>	            	            
	            </form>
	            </div>
	        	        </div>
	    	        
	    	        <div style="float: right; padding: 5px;"><a href="javascript:muestra_ada('0')">Mostrar todas</a><br /></div>
	    </div>
	    <script language="JavaScript">
		    window.onunload=function(){GUnload();};
			window.onload=function(){hora();load();};
			
	    </script>
	</div>
	
	</body>
	</html>
  <div style="clear:both;"></div>  </div>
							
							
															
				
																									
						
						
							
							<!--
							<div style="clear:both;"></div>
							-->
																	
						</div>
							
							
						<div style="clear:both;"></div>
					</div>
					
					
					<div id="pie3"> 
							<div>

<table width="100%" border="0" align="center">
  <tr>
    <td align="center">
		<span id="bizi-foot-text" -style="padding-left: 236px;"> Copyright &copy; 2008 Bizi · Todos los derechos reservados  [ 
			<a href="javascript:abrir_ventana('/avisolegal/aviso_legal.php')"; >Aviso Legal</a> ]
		</span>
    </td>
    <td>
	   <div id="icon-cc2" style="float:right; margin-right:15px;"> &nbsp; </div>
    </td>
  </tr>
</table>
</div>

<table border="0" cellspacing="0" cellpadding="0" height="20" width="95%">
  <tr>
    <td width="1%"> <img src="/pfw_files/tpl/img-foot01.gif"/> </td>
    <td width="100%" background="/pfw_files/tpl/img-foot02.gif" style="background-repeat:repeat-x;"/></td>
    <td width="1%"> <img src="/pfw_files/tpl/img-foot03.gif"/> </td>
  </tr>
</table>

<br>					</div>
							
					
					<div style="height:10px;"></div>

					
					<div style="clear:both;"></div>
					<!-- <div class="content_bottom"><img src="/pfw_files/tpl/content_bottom.gif"/></div> -->
				</div>
	
						
			</div>		
			<div id="tapaTodo">&nbsp;</div>
			<div id="revertbox11" class="box1">				
				<div id="tituloAlerta" style="color:#cf142b;font:bold 18px verdana;margin-top:0px;margin-left:20px;margin-right0px;margin-bottom:10px"></div> 
				<div id="textoAlerta" style="margin-top:10px;margin-left:10px;margin-right0px;margin-bottom:10px"></div> 
				<div><input id="botonTapatodo" type="button" onClick="javascript:restaurar()" style="align:center;margin:10px;border:solid 1px silver;font:bold 11px verdana" value="Aceptar"></div>								
			</div>
			
			<div style="clear:both;"></div>			
		</body> 
		
	</html>	
	
		
