<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="author" content="Kevin Kranenburg">
	<link rel="stylesheet" type="text/css" href="style.css?ts=<?=time()?>" />
	<link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
</head>
<body>
<?php include 'header.php';?>

<h1 class="rally-heading" style=font-size:50px>Contact</h1>

<div class="tekst-kleur">
<form action="mailto:25953@ma-web.nl" method="post" enctype="text/plain">
<b class="white" style=font-size:20px>Naam:</b><br>
<input id="naam" type="text" name="naam"><br>
<b class="white" style=font-size:20px>E-mail:</b><br>
<input id="mail" type="email" name="mail"><br>
<b class="white" style=font-size:20px>Bericht:</b><br>
<input id="bericht" type="text" name="bericht" size="50"><br><br>
<input class="contact-button" type="submit" value="Stuur">
<input class="contact-button" type="reset" value="Reset">
</form>
</div>

<?php include 'footer2.php';?>
</body>
</html>