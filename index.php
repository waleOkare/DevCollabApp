<?php

$comment = null;
// when the form is submitted this code below will run
if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['preview-form-comment'])){
    $comment = $_POST['preview-form-comment'];

}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">

    <script src ="js/jquery.js"> </script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="codemirror/js/jquery.min.js.js"></script>
    <script type="text/javascript" src="codemirror/plugin/codemirror/lib/codemirror.js"></script>
    <script type="text/javascript" src ="codemirror/js/default.js"></script>

</head>

<body>

<header>
<nav class="navbar navbar-default navbar-static-top no-margin" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-ArrayTech-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"> <em style="font-family: cursive"> KareTech </em> </a>
        </div>


        <div class="collapse navbar-collapse" id="bs-ArrayTech-navbar-collapse-1">
            <ul class="nav navbar-nav nav-tabs lead">
                <li class="active "><a href="index.php">Home </a> </li>
                <li> <a href="features.html"> Features </a> </li>
                <li> <a href="contact.html"> Contact </a> </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle nav navbar-nav nav-tabs " data-toggle="dropdown"> KareTech Dev <b class=" caret "> </b> </a>
                    <ul class="dropdown-menu lead">
                        <li class="lead"> <a href="#"> Desktop Platform </a> </li>
                        <li class="lead"> <a href="#"> Mobile Platform </a>  </li>
                        <li class ="divider"> </li>
                        <li class="lead"><a href="#"> Download Link </a> </li>

                    </ul>
                </li>

            </ul>

        </div>
    </div>
</nav>
</header>



<div class="jumbotron">
    <div class="container">

        <h4 class="text-center lead"> KareTech, Optimized for Collaboration...... </h4>

    </div>
</div>


<div class="container">
<div class="row">

    <div class="col-md-8 col-md-8">
        <div class="panel panel-default">
            <form id="preview-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
<label>
        <textarea class="codemirror-textarea" name="preview-form-comment" id="preview-form-comment" rows="20" cols="120">
        <?php echo $comment; ?>
        </textarea>
                </label>
                 <br>
                <input type="submit" name = "preview-form-submit" id="preview-form-submit" value="Submit">

               </form>

                <label>
               <textarea rows="20" cols="120">
               <?php echo $comment; ?>
                </textarea>
                </label>
    </div>
</div>


    <div class="col-md-4 col-md-4">
        <div class="panel panel-default">

            <!-- This codes below are for the GOOGLE hangout, file Upload and messenging box -->
            <div class="panel-heading">
     <h3>  Start Hangout  </h3>
                </div>
            <script src="https://apis.google.com/js/platform.js" async defer></script>
            <div class="g-hangout" data-render="createhangout"
                 data-initial_apps="[{ app_id : '123456789012', start_data : 'dQw4w9WgXcQ', 'app_type' : 'ROOM_APP' }]">
            </div>
            <div class="panel-heading">

          <h3> Upload Your Files Here </h3>
                </div>
            <form enctype="multipart/form-data" action="upload.php" method="post">

                <input name="file" type="file" id="file" size="80">
                <br>
                <br>
                <input type="submit" id="u_button" value="Upload your File">
            </form>
<hr>

                <div class="panel panel-default">
                    <div class="panel-heading">
                <h3> Chat Box  </h3>
                        </div>
                    <!-- Begin ParaChat Basic v9 Code -->
                    <iframe src='http://chat.parachat.com/chat/login.html?room=karetech&width=200&height=200&bg=00ff99&fg=000000&lang=en_uk' style="border-style:ridge;border-width:4px;border-color:#00ff99 #00ff99;" framespacing='0' frameborder='0' scrolling='no' width='350' height='250'>
                        <p>You do not have iframes enabled. <a href="http://www.parachat.com/iframe.html">More Info</a></p></iframe><a href="http://www.parachat.com"><img src="http://www.parachat.com/images/basic.png" border="0"></a>
                    <!-- End ParaChat Basic v9 Code -->
                    <hr>



                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3> Geo-Location </h3>
                        </div>

<?php

                        require_once('geoplugin.class.php');
                        $geoplugin = new geoPlugin();
                        // If we wanted to change the base currency, we would uncomment the following line
                        // $geoplugin->currency = 'EUR';

                        $geoplugin->locate();

                        echo "Geolocation results for {$geoplugin->ip}: <br />\n".
                        "City: {$geoplugin->city} <br />\n".
                        "Region: {$geoplugin->region} <br />\n".
                        "Area Code: {$geoplugin->areaCode} <br />\n".
                        "DMA Code: {$geoplugin->dmaCode} <br />\n".
                        "Country Name: {$geoplugin->countryName} <br />\n".
                        "Country Code: {$geoplugin->countryCode} <br />\n".
                        "Longitude: {$geoplugin->longitude} <br />\n".
                        "Latitude: {$geoplugin->latitude} <br />\n".
                        "Currency Code: {$geoplugin->currencyCode} <br />\n".
                        "Currency Symbol: {$geoplugin->currencySymbol} <br />\n".
                        "Exchange Rate: {$geoplugin->currencyConverter} <br />\n";

                        if ( $geoplugin->currency != $geoplugin->currencyCode ) {
                        //our visitor is not using the same currency as the base currency
                        echo "<p>At todays rate, US$100 will cost you " . $geoplugin->convert(100) ." </p>\n";
                        }

                        /* find places nearby */
                        $nearby = $geoplugin->nearby();
                        if ( isset($nearby[0]['geoplugin_place']) ) {
                        echo "<pre><p>Some places you may wish to visit near " . $geoplugin->city . ": </p>\n";
	foreach ( $nearby as $key => $array ) {

		echo ($key + 1) .":<br />";
		echo "\t Place: " . $array['geoplugin_place'] . "<br />";
		echo "\t Country Code: " . $array['geoplugin_countryCode'] . "<br />";
		echo "\t Region: " . $array['geoplugin_region'] . "<br />";
		echo "\t County: " . $array['geoplugin_county'] . "<br />";
		echo "\t Latitude: " . $array['geoplugin_latitude'] . "<br />";
		echo "\t Longitude: " . $array['geoplugin_longitude'] . "<br />";
		echo "\t Distance (miles): " . $array['geoplugin_distanceMiles'] . "<br />";
		echo "\t Distance (km): " . $array['geoplugin_distanceKilometers'] . "<br />";

	}
	echo "</pre>\n";
                        }
                        ?>







    </div>
</div>






</div>
    </div>
    </div>

</div>







<footer class="site-footer">

<div class="container">
     <div class="row">

             <span style="font-family: cursive" class="moveright"> KareTech Collaborative App(c) </span>

         <a href="http://www.geoplugin.com/geolocation/" target="_new">IP Geolocation</a> by <a href="http://www.geoplugin.com/" target="_new">geoPlugin</a>

</div>
    <div class="bottom-footer">
        <div class="col-md-5"> Designed by Wale Patrick 2016(c)</div>
        <div class="col-md-7">
            <ul class="footer-nav lead">
                <li><a href="#"> Home </a> </li>
                <li><a href="#"> Features </a> </li>
                <li><a href="#"> Contact </a> </li>
            </ul>
        </div>
</div>

</div>



</footer>


</body>
</html>