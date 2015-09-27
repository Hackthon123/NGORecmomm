
<?php include("header.php"); ?>
    
   <div class="neighborhood-guides">
  <div class="container">
    <h2>Logiin | AOLF Members</h2>

<?php
session_start();
$_SESSION=array();
setcookie(session_name(),"",time()-3600);
session_destroy();
header("Location: login.php?id=You are successfully logged out");
?>

  <?php include("footer.php"); ?>