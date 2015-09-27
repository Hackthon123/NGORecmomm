<?php include("header.php"); ?>
    
   <div class="neighborhood-guides">
  <div class="container">
    <h2>Logiin | AOLF Members</h2>
    		<?php
if(isset($_GET['msg']))
{
echo $_GET['msg'];
}
?>
</h2>
<p align="center">&nbsp; </p>
<form id="form1" name="form1" method="post" action="verification.php">
<p align="center">:
<label for="user">Login Name :</label>
<input type="text" name="user" id="user" />
</p>
<p align="center">
<label for="pass">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password :</label>
<input type="password" name="pass" id="pass" />
</p>
<p align="center">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="submit" name="submit" id="submit" value="Submit" />
<input type="reset" name="reset" id="reset" value="Reset" />

</p>
</form>
	  </div>
	</div>
    
  <?php include("footer.php"); ?>