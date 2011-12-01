<?
$title = "Guestbook";

include 'inc/head.php';
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
                            <li><a href="https://market.android.com/details?id=se.ettjavlabilspel"><img class="appmarket" src="./images/market_2.png" alt="market"/></a></li>
                            <li><a href="trailer.html" rel="lyteframe" title=''
                                   rev="width: 810px; height: 555px; scrolling: no; border: none;">
                                   <img id="trailer" src="./images/copy.png" alt="market"/></a></li>
                                   <li><a href="http://vimeo.com/32883019"><img id="vimeo" src="./images/vimeo.png"/></a></li>
                        </ul>
                    </div>




        <div id="facebook">
                <div class="fb-like" data-href="http://emilo.se/raceRetro"
                               data-send="true" data-layout="button_count" data-width="200"
                               data-show-faces="false" data-font="arial"></div>
        </div>
    </div>



    <div id="main">
        <div id="guestbook" class="gb">
<?php
//om formuläret för Kommentarer är ifyllt och inskickat skapas det i db

include 'inc/functions.php';




// om formuläret för kommentar är ifyllt skapas det i db
if (isset($_POST['comment'])) {
    $commentName = $_POST ['name'];
    $commentText = $_POST ['comment'];
    
//
    if ($commentName == "" || $commentText == "") {
        $commentString = "<p style='color: red; font-weight: bold;'>All fields are required<p>";
    } else {
        insertComment($commentName, $commentText);
        $commentString = "Thank you $commentName";
        echo '<br />';
    }
}

//$commentName =~ s/</&lt;/g;
//$commentText =~ s/</&lt;/g;
// visa info/felsträng om man gjort ett inlägg
echo $commentString;
// ansluter till db
connectDb();
// ta ut alla comments, sparar dem via resultet i en egen array
$query = mysql_query("SELECT * FROM comment ORDER BY date DESC LIMIT 0, 10") or die("error");
$commentRows = array();
while ($row = mysql_fetch_assoc($query)) {
    $commentRows[] = $row;
}
?>
            <!-- Tabell med formulär för att göra inlägg i gästboken -->
            <h2>ADD A GUESTBOOK ENTRY</h2>
            <form action="guestbook.php" method="POST">
                <table>
                    <tr>
                        <td>Name <br />
                            <input id="name" name="name" autofocus="autofucus" type="text"/></td>
                    </tr>
                    <tr>
                        <td valign="top">Comment <br />

                            <textarea id="cd" name="comment"></textarea></td>
                    </tr>
                    <tr>

<td><input id="submit" type="submit" name="Submit" value="Post comment" id="sk" /> <!-- <input type="reset" name="Submit2" value="" id="edit" />--></td>
                    </tr>
                </table>
            </form>



<!-- Tabell för att visa alla inlägg i gästboken -->
<div id="comment" class="gb">
<table>
<?php
/* gå igenom alla inlägg & placera alla i tabellen på ett bra sätt */
foreach ($commentRows as $index => $row) {
    /*if ($index % 2 == 0)*/
 
?>
                <tr>
                    <td>
                    <?php echo $row['username'] ?>
                    <br />
                    <?php echo nl2br($row['text']); ?>
                    
                    </td>
                    </tr>
                    <br />
                    <br />
                    
                    <tr>
                    <td colspan="2">
                    
                        <?php echo $row['date'] ?>

                        <hr>

                    <br /><br />
                    </td>
                </tr>
            </table>
<?php
                    }
               
?>
           </div>
        </div>
    </div>
</div>


            <?
                    include 'inc/foot.php';
            ?>
