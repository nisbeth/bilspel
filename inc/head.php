<!DOCTYPE html>
<html>
    <head>
        <?php
        
        // redirect user to the mobile version "http://mobile.ettjavlabilspel.com"
        
        $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
        $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
        $palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
        $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
        $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

        if ($iphone || $android || $palmpre || $ipod || $berry == true)
        {
        echo "<script>window.location='http://mobile.ettjavlabilspel.com'</script>";
        }
        ?>
        
        <!--[if IE]>
        <link rel="stylesheet" type="text/css" href="css/all-ie-only.css" />
        <![endif]-->
        
        
        <!--[if !IE]><!-->
        <!-- title -->
        <title><? echo $title; ?></title>

        <!-- meta -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- favicon -->
        <link rel="icon" href="./images/favicon_2.ico" type="image/x-icon" />

        <!-- css -->
        <link href="css/reset.css" type="text/css" rel="stylesheet" title="default" media="screen" />
        <link href="css/tooltips.css" type="text/css" rel="stylesheet"/>
        <link href="css/lytebox.css" type="text/css" rel="stylesheet" title="default" media="screen" />
        <link href="css/style.css" type="text/css" rel="stylesheet" title="default" media="screen and (min-width: 481px)" />
        <link href="css/screen.css" type="text/css" rel="stylesheet" title="default" media="screen and (min-width: 481px)" />

        <!-- jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
        <script type="text/javascript" src="script/tooltips.js"></script>
        <script src="script/jquery.tmpl.js" type="text/javascript"></script>

        <!-- script twitter widget -->
        <script src="script/main.js" type="text/javascript"></script>
        <script src="script/gui.js" type="text/javascript"></script>
        <script src="script/data.js" type="text/javascript"></script>
        <script src="script/templates.js" type="text/javascript"></script>
        <script src="script/init.js" type="text/javascript"></script> 

        <!-- javascripts -->
        <script type="text/javascript" src="script/lytebox.js"></script>
        <script type="text/javascript" src="script/script.js"></script>
        
        <script type="text/javascript" src="script/tooltips.js"></script>
        <script type="text/javascript" src="highscorescript.js"></script>
        <![endif]-->
         
        <!-- tooltip function, i liked it to be in the inc/head. -->
        <script>
		$(function() {
			$("#scores a[title]").tooltips();
		});
	</script>
</head>

<body>
    

        <!--[if IE]>
        <div class="ie">
        <p>Oops.</p>
        <p>ettjavlabilspel.com will soon be available in Internet Explorer.</p>
        
        <p>We suggest that you download a more useful browser for a better experience of the web.</p>
       
        <a href="http://www.mozilla.org/sv-SE/firefox/new/"><img class="ie_log" src="./images/firefox.png" alt="firefox"/></a>
       
        <a href="http://www.apple.com/se/safari/download/"><img class="ie_log" src="./images/safari.png" alt="safari"/></a>
        
        <a href="http://www.google.com/chrome?hl=sv"><img class="ie_log" src="./images/chrome.png" alt="chrome"/></a>
        
        </div>
        <![endif]-->

         <!--[if !IE]><!-->

         <!-- main div wrapper -->
         <div id="wrapper">
           
             <!-- hidden animate, not done though, since its icluded in every page, its in the 'inc/head'.
             <div id="social" style="border: 1px solid black;">
                 <ul>
                     <li><img id="twBtn" src="./images/connect.png" alt="tweet" /></li>
                 </ul>
                 
             <p style="margin-top: 50px;"onclick="open_tw()"> <img class="tw" src="./images/twitter.png" alt="tweet"/></p>
             <p onclick="open_fb()"> <img class="tw" src="./images/fb_.png" alt="fb"/></p>
                 
             </div> -->
