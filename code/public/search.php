<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="author" content="Kevin Kranenburg">
	<link rel="stylesheet" type="text/css" href="style.css?ts=<?=time()?>" />
	<link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">

<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    xmlhttp=new XMLHttpRequest();
  } else { 
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>

</head>
<body>
<?php include 'header.php';?>

<h1 class="rally-heading" style=font-size:50px>Zoeken</h1>

<form id="zoek">
<b class="white" style=font-size:20px>Zoek hier naar informatie over verschillende automerken.</b><br><br>
<input id="zoek2" type="text" size="30" onkeyup="showResult(this.value)">
<div id="livesearch"></div>
</form>

<?php include 'footer2.php';?>
</body>
</html>