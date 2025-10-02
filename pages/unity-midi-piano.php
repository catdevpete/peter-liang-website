<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Unity MIDI Piano">
		<meta name="author" content="Peter Liang">

		<title>Peter Liang - Unity MIDI Piano</title>
		<link rel="icon" type="image/png" href="../img/catdevpete-icon.png">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="../css/theme.css" type="text/css">
		<link rel="stylesheet" href="../css/footer.css" type="text/css">
		<link rel="stylesheet" href="../css/carousel.css" type="text/css">
		<link rel="stylesheet" href="../css/jquery.scrollbar.css">
		
		<!-- Custom Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat" rel="stylesheet" type='text/css'>
		<link href="https://pro.fontawesome.com/releases/v5.14.0/css/all.css" rel="stylesheet" type="text/css">

		<!-- Plugin CSS -->
		<link rel="stylesheet" href="../css/ckin.min.css">
		<link rel="stylesheet" href="../css/animate.min.css" type="text/css">
	</head>

	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" >

		<div id="modal-1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="screenshot_1" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body"><img src="../img/unity-midi-piano/screenshot_1.png" class="img-responsive"></div>
				</div>
			</div>
		</div>
		
		<div id="modal-2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="screenshot_2" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body"><img src="../img/unity-midi-piano/screenshot_2.png" class="img-responsive"></div>
				</div>
			</div>
		</div>
		
		<div id="modal-3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="screenshot_3" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body"><img src="../img/unity-midi-piano/screenshot_3.png" class="img-responsive"></div>
				</div>
			</div>
		</div>
		
		<div id="modal-4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="screenshot_4" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body"><img src="../img/unity-midi-piano/screenshot_4.png" class="img-responsive"></div>
				</div>
			</div>
		</div>
		
		<!-- Page Content -->
		<div class="container">

			<div id="top">
				<!-- <img src="img/catdevpete-icon.png" alt="catdevpete"> -->
				<div id="header-box"><a href="../index.html"><b>PETER LIANG</b></a></div>
			</div>

			<!-- Portfolio Item Heading -->
			<div class="row" style="padding-top: 2em">
				<div class="col-lg-12">
					<h1 class="page-header">Unity MIDI Piano</h1>
				</div>
			</div>
			<!-- /.row -->

			<!-- Portfolio Item Row -->
			<div class="row">

				<div class="col-md-8">
					<div id='carousel-custom' class='carousel slide img-responsive' data-ride='carousel'>
						<div class='carousel-outer'>
							<!-- Wrapper for slides -->
							<div class='carousel-inner'>
								<div class='item active' data-slide-number='0'>
                                    <img src='../img/unity-midi-piano/screenshot_1.png' alt='' />
									<iframe id="youtube_player1" class="yt_player_iframe" src="https://www.youtube.com/embed/5pC22XbFnnA?enablejsapi=1&version=3&playerapiid=ytplayer"  allowfullscreen="true" allowscriptaccess="always" frameborder="0"></iframe>
								</div>
								<div class='item' data-slide-number='1'>
                                    <img src='../img/unity-midi-piano/screenshot_1.png' alt=''></img>
									<iframe id="youtube_player2" class="yt_player_iframe" src="https://www.youtube.com/embed/v4oUT3spydI?enablejsapi=1&version=3&playerapiid=ytplayer"  allowfullscreen="true" allowscriptaccess="always" frameborder="0"></iframe>
								</div>
								<div class='item' data-slide-number='2'>
									<a href="#modal-2" data-toggle="modal" data-target="#modal-1"><img src='../img/unity-midi-piano/screenshot_1.png' alt='' /></a>
								</div>
								<div class='item' data-slide-number='3'>
									<a href="#modal-3" data-toggle="modal" data-target="#modal-2"><img src='../img/unity-midi-piano/screenshot_2.png' alt='' /></a>
								</div>
								<div class='item' data-slide-number='4'>
									<a href="#modal-4" data-toggle="modal" data-target="#modal-3"><img src='../img/unity-midi-piano/screenshot_3.png' alt='' /></a>
								</div>
								<div class='item' data-slide-number='5'>
									<a href="#modal-5" data-toggle="modal" data-target="#modal-4"><img src='../img/unity-midi-piano/screenshot_4.png' alt='' /></a>
								</div>
							</div>
								
							<!-- Controls -->
							<a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
								<span class='glyphicon glyphicon-chevron-left'></span>
							</a>
							<a class='right carousel-control' href='#carousel-custom' data-slide='next'>
								<span class='glyphicon glyphicon-chevron-right'></span>
							</a>
						</div>
						
						<div id='slider-thumbs' class='carousel-container scrollbar-inner'>
							<ul>
							<li id="carousel-selector-0" class='active'><img src='../img/unity-midi-piano/video_thumbnail_1.png' alt='' /></li>
							<li id="carousel-selector-1"><img src='../img/unity-midi-piano/video_thumbnail_2.png' alt='' /></li>
							<li id="carousel-selector-2"><img src='../img/unity-midi-piano/screenshot_thumbnail_1.png' alt='' /></li>
							<li id="carousel-selector-3"><img src='../img/unity-midi-piano/screenshot_thumbnail_2.png' alt='' /></li>
							<li id="carousel-selector-4"><img src='../img/unity-midi-piano/screenshot_thumbnail_3.png' alt='' /></li>
							<li id="carousel-selector-5"><img src='../img/unity-midi-piano/screenshot_thumbnail_4.png' alt='' /></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<h3>Project Description</h3>
					<p>Unity MIDI Piano is a MIDI-based project developed on the Unity engine.</p>
					<p>The project was first worked on in 2016, and had leap motion & VR integration as well.</p>
					<p>The MIDI aspect was reworked in 2019, and published for free on GitHub.</p>
					<h3>Project Details</h3>
					<ul>
						<li>Made in Unity</li>
						<li>Uses NAudio library to read MIDI files</li>
						<li>Developed in 2016, published in 2019</li>
					</ul>
					<h3>Product Links</h3>
					<h4 style="text-indent: 0.5em"><a href="https://github.com/catdevpete/Unity-MIDI-Piano"><i class="fab fa-github fa-inverse"></i> GitHub Repo</a></h4>
					<h4 style="text-indent: 0.5em"><a href="https://github.com/catdevpete/Unity-MIDI-Piano/releases/tag/v1.0"><i class="fab fa-chrome fa-inverse"></i> Preview Build</a></h4>
					<h4 style="text-indent: 0.5em"><a href="https://www.youtube.com/watch?v=5pC22XbFnnA"><i class="fab fa-youtube fa-inverse"></i> YouTube Trailer</a></h4>
				</div>

			</div>
			<!-- /.row -->

			<!-- Related Projects Row -->
			<div class="row">

				<div class="col-lg-12">
					<h3 class="page-header">Related Projects</h3>
				</div>

				<div class="col-sm-3 col-xs-6">
					<div class="portfolio-item">
						<a href="../pages/vantari.html">
							<img src="../img/vantari/thumbnail.png" alt="Vantari VR">
							<div class="borderline"><div class="darken"><div class="portfolio-text"><p>Vantari VR</p></div></div></div>
						</a>
					</div>
				</div>

				<div class="col-sm-3 col-xs-6">
					<div class="portfolio-item">
						<a href="../pages/dr-egg.html">
							<img src="../img/dr-egg-adventure-lab/thumbnail.png" alt="Dr. Egg Adventure Laboratory">
							<div class="borderline"><div class="darken"><div class="portfolio-text"><p>Dr. Egg Adventure Laboratory</p></div></div></div>
						</a>
					</div>
				</div>

				<div class="col-sm-3 col-xs-6">
					<div class="portfolio-item">
						<a href="../pages/o-koi.html">
							<img src="../img/o-koi/thumbnail.png" alt="Everything is going to be O-Koi">
							<div class="borderline"><div class="darken"><div class="portfolio-text"><p>Everything is going to be O-Koi</p></div></div></div>
						</a>
					</div>
				</div>

				<div class="col-sm-3 col-xs-6">
					<div class="portfolio-item">
						<a href="../pages/super-pixel-smash.html">
							<img src="../img/super-pixel-smash/thumbnail.png" alt="Super Pixel Smash">
							<div class="borderline"><div class="darken"><div class="portfolio-text"><p>Super Pixel Smash</p></div></div></div>
						</a>
					</div>
				</div>

			</div>
			<!-- /.row -->

			<hr>

		</div>
		<!-- /.container -->
		
		<!-- Footer -->
		<div class="footer container col-sm-12">
			<div class="row">
				<div class="col-xs-12 col-sm-8">
					<ul class="list-inline">
						<li>
							<a href="https://www.linkedin.com/in/catdevpete/">
								<span class="fa-stack fa-lg">
									<i class="fab fa-linkedin fa-stack-1x fa-inverse"></i>
								</span>
							</a>
						</li>
						<li>
							<a href="https://github.com/catdevpete">
								<span class="fa-stack fa-lg">
									<i class="fab fa-github-alt fa-stack-1x fa-inverse"></i>
								</span>
							</a>
						</li>
						<li>
							<a href="https://www.youtube.com/channel/UCBRdVXiPVVhabqQCL9CwS6g">
								<span class="fa-stack fa-lg">
									<i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
								</span>
							</a>
						</li>
					</ul>
				</div>
		
				<div class="col-xs-12 col-sm-4 copyright">
					<p>&copy; Peter Liang 2021-2025</p>
					<p><a href="mailto:contact@peter-liang.com">contact@peter-liang.com</a></p>
				</div>
			</div>
		</div>

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<!-- Plugin JavaScript -->
		<script src="../js/ckin.min.js"></script>
		<script src="../js/jquery.easing.min.js"></script>
		<script src="../js/jquery.fittext.js"></script>
		<script src="../js/wow.min.js"></script>

		<!-- Custom Theme JavaScript -->
		<script src="../js/carousel.js"></script>
		<script src="../js/jquery.scrollbar.js"></script>
	</body>
</html>
