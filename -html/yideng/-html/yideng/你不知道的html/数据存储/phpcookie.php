
 <html>
 <body>
   <?php
      setcookie('user','Alex', time()+3600)
    ?>

   <?php
   // Print a cookie
   echo $_COOKIE["user"];

   // A way to view all cookies
   // print_r($_COOKIE);
   ?>
 </body>
 </html>
