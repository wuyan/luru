  <?php
   setcookie("manager",  time() - 3600);
   setcookie("authority",  time() - 3600);
   setcookie("id",  time() - 3600);
   echo "<script>window.location.href='index.php'</script>";
   ?>