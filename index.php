<?

//include_once 'inc/functions.php';
include 'inc/head.php';

$title = "ettjavlabilspel";
?>
<div id="content">
    <div id="header">
        <div id="logo">
            <a id="logo1" href="index.php"><img src="./images/logo_new.png" alt="templogo"></a>
        </div>

    <div id="nav">
        <ul>
            <li><a href="index.php"><img src="./images/home.png" alt="home"/></a></li>
            <li><a href="rules.php"><img src="./images/about.png" alt="about"/></a></li>
            <li><a href="contact.php"><img src="./images/contact.png" alt="contact"/></a></li>
            <li><a href="guestbook.php"><img src="./images/guestbook.png" alt="guestbook"/></a></li>
        </ul>
    </div>
    </div>
    <div class="clear"></div>
    <div id="bar">
             <div id="download">
                        <ul>
                            <li><a href="#"><img class="appmarket" src="./images/app_store.png" alt="appstore"/></a></li>
                            <li><a href="#"><img class="appmarket" src="./images/market_2.png" alt="market"/></a></li>
                            <li><a href="trailer.html" rel="lyteframe" title=''
                                   rev="width: 810px; height: 555px; scrolling: no; border: none;">
                                    <img id="trailer" src="./images/copy.png" alt="market"/></a></li>
                        </ul>
                    </div>
      
       


        <div id="facebook">
                <div class="fb-like" data-href="http://ettjavlabilspel.com"
                               data-send="true" data-layout="button_count" data-width="200"
                               data-show-faces="false" data-font="arial"></div>
        </div>
    </div>



    <div id="main">
           
        <table>
            <tr>
                <td>
                    <div class="square" id="topleft">
                        <h1>ARCADELIKE</h1>
                        <h1>RETROLIKE</h1>
                        <h1>CARGAME</h1>

                        <p>Go pro?! Available at appstore & market.</p>

                    </div>



                </td>
                <td>

                    <div class="square" id="topright">
                        <h3>ettjavlabilspel</h3>

                        <p>We thought it would be fun to make a game that go way back,
                            not like a billion years, but let's say 25 years. Not because of lack of skill? :)
                            We just really love them oldschool games, now we got an opportunity to develop
                            a such thing. Catch up with some screenshots and other good stuff <a href="rules.php">here</a></p>

                        <p style="font-size: 16px;">The easy choice. Android & IOS.</p>

                    </div></td>
            </tr>
        </table>

        
        
     <div id="widgets">
         <div id="follow">
             <h3>ettjavlabilspel on twitter.</h3>
        </div>

        <div id="middleleft">
                 
        <!-- twitterwidget div -->
                        
          </div>
        <div id="scores">
           <button id="button">TRYCK</button> 
            <ul id="list"></ul>

        <p>HIGHSCORES</p>


        </div>
     </div>
        <div class="clear"></div>
        <div class="footer">
            <ul>
    <!--<p>follow on twitter or join us facebook.</p>-->
                <li><a href="http://twitter.com/#!/ettjavlabilspel"><img class="twitter" src="./images/twitter_in.png" alt="twitter" /></a></li>
                <li><a href="http://www.facebook.com/pages/Ett-j%C3%A4vla-bilspel/210757385658796"><img class="twitter" src="./images/facebook_in.png" alt="twitter" /></a></li>
                <li><a href="http://www.youtube.com/watch?v=SytbW-7_u9E"><img class="twitter" src="./images/youtube_in.png" alt="twitter" /></a></li>
            </ul>
        </div>
        <p id="foot">ettjävlabilspel - 2011</p>

        <div id="fb-root"></div>
        <!--facebook like-->
        <script type="text/javascript">(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#appId=136390913126275&xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
 </div> <!-- end main -->
</div> <!-- end content -->

<?
include 'inc/foot.php';
?>
