<html>
<head>
<link rel="stylesheet"type="text/css"href="style.css">
</head>
<body>
<iframe name="frame" id="frame" style="display: none;"></iframe>

<center>

<form action="final.php" method="post" target="frame">
<br><br>
<h2>لوحة تحكم تحريك القاعدة</h2>

<br><br><br>

<div>
  <button  type="submit" value="up"  id="forward" name="forward" required>
  <span id="demo"></span> </button>
</div>

<br>

  
  <button type="submit"  value="Left"  id="Left" name="left" required>
  <span id="demo2"></span> </button> &nbsp; 



<button type="submit"  value="stop"  id="Stop" name="stop" required>
  <span id="demo3"></span> </button> &nbsp; 

 &nbsp;


<button type="submit"  value="right"  id="Right" name="right" required>
  <span id="demo4"></span> </button>


<br><br>
<button type="submit"  value="down"  id="backward" name="backward" required>
  <span id="demo5"></span> </button>

<br><br><br><br><br><br><br><br>
</form>
<table>
  <tr>
<form action="result.php" method="post" >
<button type="submit" value="Submit">  Save </button>
</form>
&nbsp;&nbsp;</tr>
<tr>
&nbsp;
<form name="formArm" method="post" action="final.php">
<button type="submit" value="Submit">  Run </button>
</form>
</tr>
</table>
</center>
</body>
<script src="Action.js"></script>
</html>