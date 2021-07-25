<html>
<head><title>Your Favorite</title></head>
<body>
    <?php
       if(isset($_POST['username'])){
          echo "Thanks for your selection " .$_POST['username'] ."!";
       } else {
          echo "Please input your name. Thank you!";
       }

       if(isset($_POST['color']) && isset($_POST['dish'])){
          echo "<br>You really enjoy ".$_POST['dish']. " <br> - especially with a nice " . $_POST['color'] . " wine";
       } else {
          echo "<br> Not hungry? It's okay. Have a nice day."; 
       }
    ?>
</body>
</html>