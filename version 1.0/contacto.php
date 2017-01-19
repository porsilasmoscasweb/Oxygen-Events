<!DOCTYPE html>
<html>
<head>
<title>OXYGEN CONTACTO | OXYGEN EVENTS |</title>
<meta name="viewport"
content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta charset="UTF-8">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/nav.css">
<link rel="stylesheet" href="css/contact.css">
<link rel="shortcut icon" href="css/favicon.ico">

<style type="text/css">
</style>

<script language="Javascript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>

<script src='js/contact.js'></script>

<script type="text/javascript">

/*Global*/
var map;

function initialize() {

    /*    Basic Setup    */

    var latLng = new google.maps.LatLng(41.26564,1.963921);

    var myOptions = {
        panControl: false,
        zoomControl: false,
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        overviewMapControl: false,
        draggable: true,
        disableDoubleClickZoom: true,     //disable zooming
        scrollwheel: false,
        zoom: 18,
        center: latLng,
        mapTypeId: google.maps.MapTypeId.ROADMAP //   ROADMAP; SATELLITE; HYBRID; TERRAIN;
    };

    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

    /*    MARKER    */

    /*
    //for custom image
    var image = 'yourflag.png';
    icon: image 

    //for animation marker drop
    animation: google.maps.Animation.DROP

    */
    var markerlatlng = new google.maps.LatLng(41.26564,1.963921);

    var marker = new google.maps.Marker({
        position: markerlatlng,
        title:"OXYGEN EVENTS"
    });

    marker.setMap(map);

    /*    INFO Bubble    */

    myInfoWindowOptions = {
        content: '<div class="info-window-content"><h4><img src="img/logoMaps.png"/><br/>José Levy<br/><i style="color:#666;">// Events Manager //</i><br/>+34 627 65 61 61<br/><a href="mailto:events@oxygenevents.es">events@oxygenevents.es</a><br/>Paseo Marítimo, 271-275<br/>08860 Castelldefels (Barcelona)<br/>ESPAÑA</h4></div>',
        maxWidth: 400
    };

    infoWindow = new google.maps.InfoWindow(myInfoWindowOptions);

    google.maps.event.addListener(marker, 'click', function() {
        infoWindow.open(map,marker);
    });

    google.maps.event.addListener(marker, 'dragstart', function(){
        infoWindow.close();
    });

    infoWindow.open(map,marker);


}//end initialize


/*onLoad*/

$(function(){
    initialize();

    $("#zo").click(function(event){
        event.preventDefault(); 
        map.setZoom( map.getZoom()-1 );
        //map.setCenter(new google.maps.LatLng(41.26564,1.963921));
    });

    $("#zi").click(function(event){
        event.preventDefault(); 
        map.setZoom( map.getZoom()+1 );
    });

    $("#gt").click(function(event){
        event.preventDefault(); 
        var lt1 = new google.maps.LatLng(41.26564,1.963921);
        //map.setZoom( 16 );
        map.panTo(lt2);
    });

});

</script>

<script type="text/javascript" src="js/jquery.fullscreen-min.js"></script>

</head>
<body>
 
<div class="fullscreenPage">
<button onclick="$(document).fullScreen(true)" class="on"></button>
<button onclick="$(document).fullScreen(false)" class="off"></button>
</div>

<nav> 
<ul id="menu" class="nav">
	<li id="logo" class="logo"><a href="filosofia.html" title=""><img src="img/logo.png" alt="" title="" width="80"/></a></li>
        <li class="subnav"><a href="eventos-incentivos.html" title="">EVENTOS E INCENTIVOS</a>
        	<ul>
                <li><a href="barcelona.html">BARCELONA</a></li>
                <li><a href="oxygen-en-agua.html">OXYGEN EN AGUA</a></li>
                <li><a href="oxygen-en-tierra.html">OXYGEN EN TIERRA</a></li>
                <li><a href="oxygen-en-fuego.html">OXYGEN EN FUEGO</a></li>
                <li><a href="oxygen-en-aire.html">OXYGEN EN AIRE</a></li>
	        </ul>
        </li>
        <li><a href="clientes.html" title="">CLIENTES</a></li>
        <li><a href="contacto.php" title="">OXYGEN CONTACTO</a></li>
        <li class="idiomes" style="top:2px;"><a href="http://www.youtube.com/watch?v=ZF8lJ6V9KcA&feature=youtu.be" target="_blank" title=""><img src="img/youtube.png" width="30"/></a></li>
        <li class="idiomes"><a href="contact.php" title="">ENG</a></li>
        <li class="idiomes"><a href="" title="">ESP</a></li>
</ul>
</nav>

<?php
		if(isset($_POST['boton'])){
			if($_POST['nom'] == ''){
				$error1 = '<span class="error">Ingrese su Nombre</span>';
			}else if($_POST['Nempresa'] == ''){
				$error2 = '<span class="error">Ingrese su Empresa</span>';
			}else if($_POST['tel'] == ''){
				$error3 = '<span class="error">Ingrese su Teléfono</span>';
			}else if($_POST['web'] == ''){
				$error4 = '<span class="error">Ingrese su web Web</span>';
			}else if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email'])){
				$error5 = '<span class="error">Ingrese su E-mail</span>';
			}else if($_POST['pax'] == ''){
				$error6 = '<span class="error">Ingrese su PAX</span>';
			}else if($_POST['budget'] == ''){
				$error7 = '<span class="error">Ingrese su presupuesto</span>';
			}else if($_POST['assumpte'] == ''){
				$error8 = '<span class="error">Ingrese su mensaje</span>';
			}else{			
				$assumpte = "NAME: " . $_POST['nom'] . "\n";
				$assumpte .= "COMPANY: " . $_POST['Nempresa'] . "\n";
				$assumpte .= "TEL: " . $_POST['tel'] . "\n";
				$assumpte .= "WEB: " . $_POST['web'] . "\n";
				$assumpte .= "E-MAIL: " . $_POST['email'] . "\n";
				$assumpte .= "PAX: " . $_POST['pax'] . "\n";
				$assumpte .= "BUDGET ESTIMATE: " . $_POST['budget'] . "\n";
				$assumpte .= "WHAT IS YOUR IDEA: " . $_POST['assumpte'] . "\n\n"; //Cuerpo del mensaje
				
				$dest = "events@oxygenevents.es"; //events@oxygenevents.es //Email de destino
				$nom = $_POST['nom'];
				$pax = $_POST['pax']; //Asunto
				
				//Cabeceras del correo
				$headers = "From: $nom $email\r\n"; //Quien envia?
				$headers .= "X-Mailer: PHP5\n";
				$headers .= 'MIME-Version: 1.0' . "\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
				
				if(mail($dest,$pax,$assumpte,$headers)){
					$result = '<div class="result_ok">Mensaje Enviado</div>';	
					// si el envio fue exitoso reseteamos lo que el usuario escribio:
					$_POST['nom'] = '';
					$_POST['Nempresa'] = '';
					$_POST['tel'] = '';
					$_POST['web'] = '';
					$_POST['email'] = '';
					$_POST['pax'] = '';
					$_POST['budget'] = '';
					$_POST['assumpte'] = '';
				}else{
					$result = '<div class="result_fail">Error de Mensaje</div>';
				}
			}
		}
	?>

<div id="registration">
	<h1>CONTACTO</h1>
    <form id="RegisterUserForm" autocomplete="on" enctype="multipart/form-data"  method='POST' action=''>
    <fieldset>
    	<div class="left">
        <h4>&nbsp;FORM</h4>
            <p><label>NOMBRE y APELLIDO</label><input type='text' class='text' name='nom' value='<?php echo $_POST['nom']; ?>'><?php echo $error1 ?></p>
            <p><label>EMPRESA</label><input type='text' class='text' name='Nempresa' value='<?php echo $_POST['Nempresa']; ?>'><?php echo $error2 ?></p>
            <p><label>TELÉFONO</label><input type='text' class='text' name='tel' value='<?php echo $_POST['tel']; ?>'><?php echo $error3 ?></p>
            <p><label>WEB</label><input type='text' class='text' name='web' value='<?php echo $_POST['web']; ?>'><?php echo $error4 ?></p>
			<p><label>E-mail</label><input type='text' class='text' name='email' value='<?php echo $_POST['email']; ?>'><?php echo $error5 ?></p>
			<p><label>PAX</label><input type='text' class='text' name='pax' value='<?php echo $_POST['pax']; ?>'><?php echo $error6 ?></p>
            <p><label>PRESUPUESTO</label><input type='text' class='text' name='budget' value='<?php echo $_POST['budget']; ?>'><?php echo $error7 ?></p>
			<p><label>QUÉ TIENES EN MENTE</label><textarea class='text' name='assumpte'><?php echo $_POST['assumpte']; ?></textarea><?php echo $error8 ?></p>
			<p><input type='submit' value='Enviar' class='submit' name='boton'></p>
			<?php echo $result; ?>
        </div>
        <div class="right">
        	<h4>&nbsp;INFO</h4>
        	
            <p>Nuestro responsable de eventos José Levy te atenderá directamente.</p>
            <p>Haznos llegar una propuesta con tu nombre, el tipo de evento y presupuesto previsto y te daremos una respuesta en 24 horas. Nosotros sólo trabajamos con personal especializado y con nuestro propio y moderno equipo técnico.</p>
            
            <p>Contacto:</p>
            
            <p>José Levy</p>
            
            <p>Events Manager</p>
            
            <p>+34 627 65 61 61</p>
            
            <p>events@oxygenevents.es</p>
            
            <p>Nuestra sede se encuentra en un entorno natural, en una hermosa franja de arena de más de 4,5 km. Está a 10 km del aeropuerto de Barcelona ya 18 km de la ciudad de Barcelona. Con una longitud total de 4.840 metros y una anchura media de 90 metros, contando con una superficie total de +/- 500.000 m2.</p>
            
            <p>Contamos con instalaciones propias con todas las comodidades que puedas  necesitar, así como un restaurante a pie de playa, un centro de deportes náuticos, duchas y servicios en una superficie total de 3.500 m2. Además, podemos utilizar una gran extensión de playa en frente del Club Nàutic Castelldefels para todas las actividades, a modo de playa semi privada. Sin embargo, si necesitas organizar un evento en otro lugar o cualquier cosa adicional, no dudes en consultarnos.</p>
            <p><img src="img/BPCB.png" /></p>
        </div>
    </fieldset>
    </form>
<div class="clear" style="width:100%; height:60px;"></div>    
</div>
<div id="holder">
    <a href="#" id="zi"><img src="img/zoomIN.png"/></a>
    <hr/>
    <a href="#" id="zo"><img src="img/zoomOUT.png"/></a>
    <!--<a href="#" id="gt">GoTo</a>-->
</div>	

<!--Google Maps APIv3 Background-->
<div id="canvas_holder">
    <div id="map_canvas"></div>
</div><!-- End Google Maps Background -->

 
</body>
</html>