<!DOCTYPE html>
<html>
    <head>
        <?php
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
        <link rel="icon" href="./images/favicon.ico" type="image/x-icon" />

        <!-- css -->
        <link href="css/reset.css" type="text/css" rel="stylesheet" title="default" media="screen" />
        <link href="css/lytebox.css" type="text/css" rel="stylesheet" title="default" media="screen" />
        <link href="css/style.css" type="text/css" rel="stylesheet" title="default" media="screen and (min-width: 481px)" />
        <link href="css/screen.css" type="text/css" rel="stylesheet" title="default" media="screen and (min-width: 481px)" />


        <!-- typeface -->
        <script type="text/javascript" src="script/typeface.js"></script>
        <script src="akaDylan.typeface.js"></script>

        <!-- jQuery -->
        <script type="text/javascript" src="script/jquery.min.js" ></script>
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
        <![endif]-->
           

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

