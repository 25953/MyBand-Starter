
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

<h1 class="rally-heading" style=font-size:50px>Gallerij</h1>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Trigger the Modal -->
<img class="myImg" src="images/gallerij/64d3b2a051_61950810_2290651747677801_7441625547261607936_o.jpg" alt="" width="330" height="200">
<img class="myImg" src="images/gallerij/1510591_10153027288210993_1697202407586581062_n.jpg" alt="" width="330" height="200">
<img class="myImg" src="images/gallerij/b8f35e3a6b406d3485e1db5b4d73c6de6dcdef67.jpg" alt="" width="330" height="200">
<img class="myImg" src="images/gallerij/e7340b455a424967961abb344a1c8ee4a1b6ee8d.jpg" alt="" width="330" height="200">
<img class="myImg" src="images/gallerij/gumball-3000-supercar-rally_100427840_h.jpg" alt="" width="330" height="200">
<img class="myImg" src="images/gallerij/gumball-3000-2018-autos-29.jpg" alt="" width="330" height="200">
<img class="myImg" src="images/gallerij/maxresdefault.jpg" alt="" width="330" height="200">
<img class="myImg" src="images/gallerij/modball-pic-011.jpg" alt="" width="330" height="200">
<img class="myImg" src="images/gallerij/Modball-Rally-home-1.jpg" alt="" width="330" height="200">
<img class="myImg" src="images/gallerij/Modball-rally-19.jpg" alt="" width="330" height="200">
<img class="myImg" src="images/gallerij/Bugatti-Gold-Rush.jpg" alt="" width="330" height="200">
<img class="myImg" src="images/gallerij/goldrush-rally-reception-11.jpg" alt="" width="330" height="200">
<img class="myImg" src="images/gallerij/oskarbakke-16mp-DSC2682-Red.jpg" alt="" width="330" height="200">
<img class="myImg" src="images/gallerij/gumball-3000-logistiek-e1533799984196.jpg" alt="" width="330" height="200">
<img class="myImg" src="images/gallerij/shutterstock_414486853-800x534.jpg" alt="" width="330" height="200">
<img class="myImg" src="images/gallerij/190607_ar_21-gumball_01-1080x675.jpg" alt="" width="330" height="200">

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = $('.myImg');
var modalImg = $("#img01");
var captionText = document.getElementById("caption");
$('.myImg').click(function(){
    modal.style.display = "block";
    var newSrc = this.src;
    modalImg.attr('src', newSrc);
    captionText.innerHTML = this.alt;
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>

<?php include 'footer.php';?>
</body>
</html>
