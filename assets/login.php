<?php
include ('header.php');
?>
<body class="seo_version">

    <!-- LOADER -->
	<!-- END LOADER -->

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logos/icon2.png" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right hidden-md hidden-sm hidden-xs">
                        <li><a class="btn-light btn-radius btn-brd top-btn" href="login.php"><i class="fa fa-angle-double-right"></i>Login</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right menu-top">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="persiapan.php">Persiapan</a></li>
                        <li><a href="tipsinspirasi.php">Tips & Inspirasi</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    

    <svg id="clouds" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>

    <div id="support" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                
                <p class="lead">Selamat datang di halaman login BrideSteps<br>
				silahkan pergunakan username dan password yang telah anda miliki</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="contact.php" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Sing In</button>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Sing Up</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
				<!-- <div class="col-md-6">
					<div class="map-box">
						<div id="custom-places" class="small-map"></div>
					</div>
				</div> -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <section class="section nopad cac text-center">
        <!-- <a href="#"><h3>Interesting our awesome web design services? Just drop an email to us and get quote for free!</h3></a> -->
    </section>

    <div id="support" class="section db">
        <div class="container">

        </div>
    </div>

    <svg id="clouds1" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>

<?php
include ('footer.php');?>