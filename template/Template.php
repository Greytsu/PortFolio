<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>

<nav class="navbar navbar-expand-lg sticky-top container border-left border-right border-bottom" style="background-color: #15202B;">
	<a class="navbar-brand brand" href="?page=home">Accueil</a>
    <div class="navbar-nav">
      <a class="nav-item nav-link onglet" href="?page=formation">Formations</a>
      <a class="nav-item nav-link onglet" href="?page=VeilleInfo">Veille informatique</a>
    </div>
</nav>


<body>
	<div class='container border-left border-right border-bottom rounded-bottom'>

			<?php echo $content; ?>
	</div>
</body>


<footer>
	

</footer>

</html>