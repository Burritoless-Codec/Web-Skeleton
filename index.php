<?php
      session_start();
      include_once('include/db.php');

?>
<!DOCTYPE html>
<html>
      <head>
            <title>Web Skeleton!</title>
            <link type="text/css" rel="stylesheet" href="css/main.css">
      </head>
      <body>
            <header>
                  <?php
                      include_once('include/header.php');
                  ?>
            </header>
                  <div class="wrapper">
                        <img class="wimg" src="images/welcome.png">
                        <p class="wimgc"><a href="https://www.youtube.com/channel/">Chicken Dude</a></p>
                  </div>
            <footer>
                  <?php
                      include_once('include/footer.php');
                  ?>
            </footer>
      </body>
</html>