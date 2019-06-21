
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="author" content="Kevin Kranenburg">
	<link rel="stylesheet" type="text/css" href="style.css?ts=<?=time()?>" />
  <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>

<div class="header">
  <a href="index.php" class="logo"><i class="fa fa-home"></i></a>

  <div class="header-right">
  <span class="menu-open" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
  </div>
</div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="foto.php">Foto's</a>
  <a href="video.php">Video's</a>
  <a href="music.php">Muziek</a>
  <a href="contact.php">Contact</a>
  <a href="search.php">Zoek</a>
</div>

</body>

<script type="text/javascript" src="menu.js"></script>
</html>
