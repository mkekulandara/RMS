<?php
include('session.php');
include('navigationbar.php');
$message=''; // Variable To Store Error Message

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "css/bootstrap.min.css" rel = "stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <title>Your Home Page</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>TECNO IT RMS</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Image carousel" />

    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
</head>
<body>
<body style="background-color:#d7d7d7;margin:auto">
<?php echo $message ?>
<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
<br><br><br><br><br>
<div id="wowslider-container1">
    <div class="ws_images"><ul>
            <li><img src="data1/images/10262148_836134389748976_5254538161050934655_n.jpg" alt="10262148_836134389748976_5254538161050934655_n" title="10262148_836134389748976_5254538161050934655_n" id="wows1_0"/></li>
            <li><img src="data1/images/417519_391170124230585_922626227_n.jpg" alt="417519_391170124230585_922626227_n" title="417519_391170124230585_922626227_n" id="wows1_1"/></li>
            <li><img src="data1/images/10372584_920572317971849_5817341197213716883_n.jpg" alt="10372584_920572317971849_5817341197213716883_n" title="10372584_920572317971849_5817341197213716883_n" id="wows1_2"/></li>
            <li><a href="http://wowslider.com/vf"><img src="data1/images/facsc.jpg" alt="full screen slider" title="facsc" id="wows1_3"/></a></li>
            <li><img src="data1/images/1390626_10202325320565223_1905076994_n.jpg" alt="1390626_10202325320565223_1905076994_n" title="1390626_10202325320565223_1905076994_n" id="wows1_4"/></li>
        </ul></div>
    <span class="wsl"><a href="http://wowslider.com/vu">image carousel</a> by WOWSlider.com v6.9</span>
    <div class="ws_shadow"></div>
</div>
<h2 align="center">Wel Come to Resource Management System......!</h2>
<br>
<p class="lead" align="center">Now you can reserve lecture halls,change lecture dates,check time tables online.Goto Lecture halls in the menu bar to book Lecture halls.Goto labs in the menu bar to book labs.Goto time tables in the menu bar to check time tables.If you are a lecture hall admin, then you can log in to your account from login button on the menu bar and follow the instruction in that page.</p>
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
<script src = "js/jquery-2.1.4.min.js"></script>
<script src = "js/bootstrap.js"></script>
<script src="js/npm.js"></script>
<script src="js/notnull.js"></script>
</body>
</html>