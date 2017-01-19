<!DOCTYPE html>
<html>
<head>
<title>OXYGEN CONTACTER | OXYGEN EVENTS |</title>
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
	<li id="logo" class="logo"><a href="philosophie.html" title=""><img src="img/logo.png" alt="" title="" width="80"/></a></li>
    	<li><a href="philosophie.html" title="">NOTRE PHILOSOPHIE</a></li>
        <li class="subnav"><a href="" title="">ÉVÈNEMENTS & INCENTIVES</a>
        	<ul>
                <li><a href="evenements-incentives.html">OBJECTIFS</a></li>
                <li><a href="barcelone.html">BARCELONE</a></li>
                <li><a href="oxygen-dans-eau.html">OXYGEN DANS L’EAU</a></li>
                <li><a href="oxygen-dans-la-terre.html">OXYGEN DANS LA TERRE</a></li>
                <li><a href="oxygen-dans-le-feu.html">OXYGEN DANS LE FEU</a></li>
                <li><a href="oxygen-dans-air.html">OXYGEN DANS L’AIR</a></li>
	        </ul>
        </li>
        <li><a href="clients.html" title="">CLIENTS</a></li>
        <li><a href="contacter.php" title="">OXYGEN CONTACT</a></li>
        
        <li class="idiomes"><a href="contact.php" title=""><span class="EN"></span>ENG</a></li>
        <li class="idiomes"><a href="contacto.php" title=""><span class="ES"></span>ESP</a></li>
        <li class="idiomes"><a href="" title=""><span class="FR"></span>FRA</a></li>
</ul>
</nav>

<div id="registration">
	
        <div class="right">
        	<h4>INFOS</h4>
        	
            <p>Si vous avez besoin de contacter OXYGEN EVENTS, il vous suffit de nous écrire et nous nous adapterons à vos besoins.</p>
<p>José Levy, notre responsable des évènements, vous assistera directement. Faites-nous parvenir une proposition avec votre nom, le type d’événement que vous souhaitez réaliser et le budget dont vous disposez pour sa réalisation et nous vous donnerons une réponse sous 24H. Nous travaillons uniquement avec un personnel spécialisé et compétent et nous disposons de notre propre matériel moderne et technique.</p>
            
            <p>Contact:</p>
            
            <p>José Levy</p>
            
            <p>Events Manager</p>
            
            <p>+34 627 65 61 61</p>
            
            <p><a href="mailto:events@oxygenevents.es">events@oxygenevents.es</a></p>
            
            <p>Notre siège se situe dans un environnement naturel, sur une magnifique bande de sable de plus de 4,5 km. Nous nous trouvons à 10km de l’aéroport de Barcelone et à 18 km du centre de la ville. Presque 5 kms de plage pour une largeur de 90 mètres et une superficie totale d’environ 500 000 mètres carrés.</p>
            
            <p>Nous disposons de toutes les commodités nécessaires pour votre confort : un restaurant au bord de la plage, tout le matériel nécessaire pour une large gamme de sports nautiques, des douches et toilettes dans une superficie de 3 500 m2. De plus, nous avons la possibilité d’utiliser une grande extension de plage en face du Club Nautique de Castelldefels pour toutes les activités en tant que plage semi-privée. Cependant, si vous avez besoin de quoi que ce soit d’autre, n’hésitez pas à nous en faire part.</p>
            <p style="text-align:center"><img src="img/BPCB.png" /></p>
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

<div class="social">
	<a class="face" href="http://www.facebook.com/despedidasoxygenevents/timeline" target="facebook"></a>
    <a class="twitter" href="http://twitter.com/OxygenEventsBS" target="twitter"></a>
    <a class="plus" href="http://plus.google.com/u/0/b/102772411148550373922/" target="linkedin"></a>
    <a class="link" href="http://www.linkedin.com/company/oxygen-events-bs" target="plus"></a>
    <a class="you" href="http://www.youtube.com/user/oxygeneventsbcn" target="youtube"></a>
</div>    

 
</body>
</html>