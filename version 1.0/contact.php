<!DOCTYPE html>
<html>
<head>
<title>OXYGEN CONTACT | OXYGEN EVENTS |</title>
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
        content: '<div class="info-window-content"><h4><img src="img/logoMaps.png"/><br/>José Levy<br/><i style="color:#666;">// Events Manager //</i><br/>+34 627 65 61 61<br/><a href="mailto:events@oxygenevents.es">events@oxygenevents.es</a><br/>Paseo Marítimo, 271-275<br/>08860 Castelldefels (Barcelona)<br/>SPAIN</h4></div>',
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
	<li id="logo" class="logo"><a href="index.html" title=""><img src="img/logo.png" alt="" title="" width="80"/></a></li>
        <li class="subnav"><a href="events-incentives.html" title="">EVENTS & INCENTIVES</a>
        	<ul>
                <li><a href="oxygen-on-barcelona.html">BARCELONA</a></li>
                <li><a href="oxygen-on-water.html">OXYGEN ON WATER</a></li>
                <li><a href="oxygen-on-earth.html">OXYGEN ON EARTH</a></li>
                <li><a href="oxygen-on-fire.html">OXYGEN ON FIRE</a></li>
                <li><a href="oxygen-on-air.html">OXYGEN ON AIR</a></li>
	        </ul>
        </li>
        <li><a href="companies.html" title="">OXYGENED COMPANIES</a></li>
        <li><a href="contact.php" title="">OXYGEN CONTACT</a></li>
        <li class="idiomes" style="top:2px;"><a href="http://www.youtube.com/watch?v=ZF8lJ6V9KcA&feature=youtu.be" target="_blank" title=""><img src="img/youtube.png" width="30"/></a></li>
        <li class="idiomes"><a href="" title="">ENG</a></li>
        <li class="idiomes"><a href="contacto.php" title="">ESP</a></li>
</ul>
</nav>

<?php
		if(isset($_POST['boton'])){
			if($_POST['nom'] == ''){
				$error1 = '<span class="error">Insert your Full Name</span>';
			}else if($_POST['Nempresa'] == ''){
				$error2 = '<span class="error">Insert your Company</span>';
			}else if($_POST['tel'] == ''){
				$error3 = '<span class="error">Insert your Phone</span>';
			}else if($_POST['web'] == ''){
				$error4 = '<span class="error">Insert your Web</span>';
			}else if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email'])){
				$error5 = '<span class="error">Insert your E-mail</span>';
			}else if($_POST['pax'] == ''){
				$error6 = '<span class="error">Insert your PAX</span>';
			}else if($_POST['budget'] == ''){
				$error7 = '<span class="error">Insert your Budget</span>';
			}else if($_POST['assumpte'] == ''){
				$error8 = '<span class="error">Insert your Message</span>';
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
					$result = '<div class="result_ok">Sent Message</div>';	
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
					$result = '<div class="result_fail">Error Message</div>';
				}
			}
		}
	?>

<div id="registration">
	<h1>CONTACT</h1>
    <form id="RegisterUserForm" autocomplete="on" enctype="multipart/form-data"  method='POST' action=''>
    <fieldset>
    	<div class="left">
        <h4>&nbsp;FORM</h4>
            <p><label>Full Name</label><input type='text' class='text' name='nom' value='<?php echo $_POST['nom']; ?>'><?php echo $error1 ?></p>
            <p><label>COMPANY</label><input type='text' class='text' name='Nempresa' value='<?php echo $_POST['Nempresa']; ?>'><?php echo $error2 ?></p>
            <p><label>TEL</label><input type='text' class='text' name='tel' value='<?php echo $_POST['tel']; ?>'><?php echo $error3 ?></p>
            <p><label>WEB</label><input type='text' class='text' name='web' value='<?php echo $_POST['web']; ?>'><?php echo $error4 ?></p>
			<p><label>E-mail</label><input type='text' class='text' name='email' value='<?php echo $_POST['email']; ?>'><?php echo $error5 ?></p>
			<p><label>PAX</label><input type='text' class='text' name='pax' value='<?php echo $_POST['pax']; ?>'><?php echo $error6 ?></p>
            <p><label>BUDGET ESTIMATE</label><input type='text' class='text' name='budget' value='<?php echo $_POST['budget']; ?>'><?php echo $error7 ?></p>
			<p><label>WHAT IS YOUR IDEA</label><textarea class='text' name='assumpte'><?php echo $_POST['assumpte']; ?></textarea><?php echo $error8 ?></p>
			<p><input type='submit' value='Submit' class='submit' name='boton'></p>
			<?php echo $result; ?>
        </div>
        <div class="right">
        	<h4>&nbsp;INFO</h4>
        	<p>Contact us, we can adapt the event to your needs.</p>
            
            <p>José Levy will attend to you.</p>
            <p>He will be pleased to bring your special experience in Barcelona.</p>
            <p>We just need a proposal with your name, type of event and expected budget and we will answer you in 24 hours. We just work with a specialised staff and with our own modern technical equipment.</p>
            
            <p>Feel free to contact us:</p>
            
            <p>José Levy</p>
            
            <p>Events Manager</p>
            
            <p>+34 627 65 61 61</p> 
            
            <p>events@oxygenevents.es</p>
            
            <p>We are based in a natural environment, in a beautiful strip of sand larger than 4,5 km. </p>
            <p>It is 10 km from Barcelona’s airport and 18 km from Barcelona city. With a total length of 4,840 metres, and an average width of 90 metres and an total surface area of about 500.000 m2. </p>
            
            <p>We have our own facilities: a restaurant, a nautical sports centre and showers and toilets facilities in a total surface area of 3.500 m2. Besides, we are allowed to use a large stretch of beach in front of the club for all the activities, as an almost private beach. However, if you need something in particular, do not hesitate to ask us.</p>
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