index.php<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="public/css/bootstrap.css">
</head>
<body>
<div class="container">
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"> yesika-examen </a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">mas</a></li>
					<li><a href="#">imagenes</a></li>
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">buscar</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">informacion</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
</div>
<div id="carousel-id" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carousel-id" data-slide-to="0" class=""></li>
		<li data-target="#carousel-id" data-slide-to="1" class=""></li>
		<li data-target="#carousel-id" data-slide-to="2" class=""></li>
		<li data-target="#carousel-id" data-slide-to="4" class="active"></li>
	</ol>
	<div class="carousel-inner">
		<div class="item">
			<img data-src="public/imagenes/1.jpg" alt="First slide" src="public/imagenes/1.jpg">
		</div>
		<div class="item">
			<img data-src="public/imagenes/2.jpg" width="1500"  alt ="1500"  alt="Second slide" src="public/imagenes/2.jpg">
		</div>
		<div class="item active">
			<img data-src="public/imagenes/3.jpg" width="1500" alt="Third slide" src="public/imagenes/3.jpg">
		</div>
		<div class="item active">
			<img data-src="public/imagenes/4.jpg"  width="1500" alt="Third slide" src="public/imagenes/4.jpg">
		</div>
		
		</div>
		
</div>
	<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
<video autobuffer autoloop loop controls>
	<source src="public/video/Chahu Main Yaa Naa   Aashiqui 2 (1080p HD Song)[1].mp4">
	
</video>
<video autobuffer autoloop loop controls>
	<source src="public/video/Lee Seung Gi(이승기) _ Return(되돌리다) MV[1].mp4">
	
</video>
<video autobuffer autoloop loop controls>
	<source src="public/video/빅스 (VIXX)   Error MV[1].mp4">
	
</video>
<audio autobuffer autoloop loop controls>
	<source src="public/musica/Pablo Alboran   Quién (Videoclip oficial).mp3">
	
</audio>
<audio autobuffer autoloop loop controls>
	<source src="public/musica/T ARA   Don't leave, 티아라   떠나지마, Music Core 20120707.mp3">
	
</audio>
<audio autobuffer autoloop loop controls>
	<source src="public/musica/하성   RUN [무림학교 OST Part1].mp3">
	
</audio>

	<script src="public/js/jquery-1.12.1.js"></script>
    <script src="public/js/bootstrap.js"></script>

</body>
</html>