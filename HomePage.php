<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.min.css" />
        <link rel="stylesheet" href="css/logo.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <style>
    </style>
</head>
<body>
<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>

		<div class="uk-position-center">
		<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>

		</div>
		   <?php
        if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
            include 'user.php';
            $user = new User();
            $conditions['where'] = array(
                'id' => $sessData['userID'],
            );
            $conditions['return_type'] = 'single';
            $userData = $user->getRows($conditions);
    ?>
    <div class="uk-offcanvas-content">
        <div class="uk-position-relative">

            <div class="uk-height-max-large" id="home" uk-height-viewport="offset-bottom: 10">

                <video autoplay loop muted playsinline uk-cover>
                    <source src="vid/intro2.mp4" type="video/mp4">
                </video>

            </div>

            <div class="uk-position-top ">
                <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky uk-margin; cls-inactive: uk-navbar-transparent uk-light; top: 200; uk-margin" style="padding: 20px; ">
                    <nav class="uk-navbar-container uk-navbar-transparent uk-animation-slide-top uk-margin" style="border-radius:30px;" uk-navbar>
                        <div class="uk-navbar-left">
                            <a class="uk-navbar-toggle" uk-navbar-toggle-icon href="#" uk-toggle="target: #offcanvas-reveal; animation: uk-animation-fade"></a>
                            <a class="uk-navbar-item uk-logo" href="#"><div class="block gear" style="background: darkgrey;">
</div></a>
                            <div id="offcanvas-reveal" uk-offcanvas="mode: reveal; overlay: true">
                                <div class="uk-offcanvas-bar uk-flex uk-flex-column"
                                     uk-navbar="dropbar: true; dropbar-mode: push">
                                    <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
                                        <li class="uk-active"><a href="#">Spares and Accessories</a></li>
                                        <li class="uk-parent">
                                            <a href="#"></a>
                                            <ul class="uk-nav-sub">
                                                <li><a href="SPARES AND ACCESORIES/BIKES AND CARS/cars.html">CARS</a></li>
                                                <li><a href="SPARES AND ACCESORIES/BIKES AND CARS/bikes.html">BIKES</a></li>
                                            </ul>
                                        </li>
                                        <li class="uk-nav-header ">Features</li>
                                        <ul class="uk-nav-sub">
                                        <li class="uk-text-large"><a href="LandingPage.html#services"><span class="uk-margin-small-right" uk-icon="icon: table" ></span> Information</a></li>
                                        <li class="uk-text-large"><a href="LandingPage.html#services"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> Comparison</a></li>
                                         </ul>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="uk-navbar-center">
                            <ul class="uk-nav uk-nav-default uk-navbar-nav" uk-scrollspy-nav="closest:li; cls:uk-active; scroll: true ; overflow:true;">
                                <li><a class="uk-button-text" href="#home">Home</a></li>
                                <li>
                                    <a class="uk-button-text" href="#DYB">Discover Your Choice</a>
                                </li>
                                <li><a class="uk-button-text" href="#comparison">Comparison</a></li>
								                                <li><a class="uk-button-text" href="index.php">Logout</a></li>



                            </ul>
							</div>
							 <div class="nav-overlay uk-navbar-right">

                            <a class="uk-navbar-toggle" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

                        </div>

                        <div class="nav-overlay uk-navbar-right uk-flex-1" hidden>



                            <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="uk-section" style="background-color: grey;">
            <br />
            <br />
            <div class="uk-animation-toggle" uk-scrollspy="cls:uk-animation-fade; delay:100;">
                <div class="uk-card uk-card-default uk-card-body uk-card-hover">
                    <ul class="uk-flex-center" uk-tab>
                        <li class="uk-active"><a href="#" id="DYB"><h2> DISCOVER YOUR CHOICE </h2></a></li>
                    </ul>
                </div>
            </div>
            <div class="uk-child-width-expand@s uk-text-center" uk-grid>
                <div href="#" class="uk-section">
                    <div class="uk-container uk-container-small uk-text-center">
                        <br />
                        <br />
                        <div class="uk-animation-toggle" uk-scrollspy="cls: uk-animation-slide-left;">
                            <div class="uk-card uk-card-default uk-card-body uk-card-hover">
                                <ul class="uk-flex-center" uk-tab>
                                    <li class="uk-active"><a href="#"><h3>BIKES</h3></a></li>
                                </ul>
                                <div class="uk-text-center">
                                    <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                      <a href="BikesHomePage.html">  <img class="uk-transition-scale-up uk-transition-opaque" src="image/h2r.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div href="#" class="uk-section">
                    <div class="uk-container uk-container-small uk-text-center">
                        <br />
                        <br />
                        <div class="uk-animation-toggle" uk-scrollspy="cls: uk-animation-slide-right;">
                            <div class="uk-card uk-card-default uk-card-body uk-card-hover">
                                <ul class="uk-flex-center" uk-tab>
                                    <li class="uk-active"><a href="#"><h3>CARS</h3></a></li>
                                </ul>
                                <div class="uk-text-center">
                                    <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                      <a href="CarsHomePage.html">  <img class="uk-transition-scale-up uk-transition-opaque" src="image/img8.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section">
            <div class="uk-animation-toggle">
                <div class="uk-card uk-card-default uk-card-body uk-card-hover">
                    <ul class="uk-flex-center" uk-tab>
                        <li class="uk-active"><a href="#" id="comparison"><h2> COMPARISON </h2></a></li>

                    </ul>
                    <p class="uk-text-center">Coming Soon....</p>
                </div>
            </div>
            </div>
        </div>
		    <?php }else{ ?>
			    <div class="uk-offcanvas-content">
        <div class="uk-position-relative">

            <div class="uk-height-max-large" id="home" uk-height-viewport="offset-bottom: 10">

                <video autoplay loop muted playsinline uk-cover>
                    <source src="vid/intro2.mp4" type="video/mp4">
                </video>

            </div>

            <div class="uk-position-top ">
                <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky uk-margin; cls-inactive: uk-navbar-transparent uk-light; top: 200; uk-margin" style="padding: 20px; ">
                    <nav class="uk-navbar-container uk-navbar-transparent uk-animation-slide-top uk-margin" style="border-radius:30px;" uk-navbar>
                        <div class="uk-navbar-left">
                            <a class="uk-navbar-toggle" uk-navbar-toggle-icon href="#" uk-toggle="target: #offcanvas-reveal; animation: uk-animation-fade"></a>
                            <a class="uk-navbar-item uk-logo" href="#"><div class="block gear" style="background: darkgrey;">
</div></a>
                            <div id="offcanvas-reveal" uk-offcanvas="mode: reveal; overlay: true">
                                <div class="uk-offcanvas-bar uk-flex uk-flex-column"
                                     uk-navbar="dropbar: true; dropbar-mode: push">
                                    <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
                                        <li class="uk-active"><a href="#">Spares and Accessories</a></li>
                                        <li class="uk-parent">
                                            <a href="#"></a>
                                            <ul class="uk-nav-sub">
                                                <li><a href="SPARES AND ACCESORIES/BIKES AND CARS/cars.html">CARS</a></li>
                                                <li><a href="SPARES AND ACCESORIES/BIKES AND CARS/bikes.html">BIKES</a></li>
                                            </ul>
                                        </li>
                                        <li class="uk-nav-header ">Features</li>
                                        <ul class="uk-nav-sub">
                                        <li class="uk-text-large"><a href="LandingPage.html#services"><span class="uk-margin-small-right" uk-icon="icon: table" ></span> Information</a></li>
                                        <li class="uk-text-large"><a href="LandingPage.html#services"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> Comparison</a></li>
                                         </ul>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="uk-navbar-center">
                            <ul class="uk-nav uk-nav-default uk-navbar-nav" uk-scrollspy-nav="closest:li; cls:uk-active; scroll: true ; overflow:true;">
                                <li><a class="uk-button-text" href="#home">Home</a></li>
                                <li>
                                    <a class="uk-button-text" href="#DYB">Discover Your Bikes</a>
                                </li>
                                <li><a class="uk-button-text" href="#comparison">Comparison</a></li>
								                                <li><a class="uk-button-text" href="index.php">Account</a></li>



                            </ul>
							</div>
							 <div class="nav-overlay uk-navbar-right">

                            <a class="uk-navbar-toggle" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

                        </div>

                        <div class="nav-overlay uk-navbar-right uk-flex-1" hidden>



                            <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="uk-section" style="background-color: grey;">
            <br />
            <br />
            <div class="uk-animation-toggle" uk-scrollspy="cls:uk-animation-fade; delay:100;">
                <div class="uk-card uk-card-default uk-card-body uk-card-hover">
                    <ul class="uk-flex-center" uk-tab>
                        <li class="uk-active"><a href="#" id="DYB"><h2> DISCOVER YOUR CHOICE </h2></a></li>
                    </ul>
                </div>
            </div>
            <div class="uk-child-width-expand@s uk-text-center" uk-grid>
                <div href="#" class="uk-section">
                    <div class="uk-container uk-container-small uk-text-center">
                        <br />
                        <br />
                        <div class="uk-animation-toggle" uk-scrollspy="cls: uk-animation-slide-left;">
                            <div class="uk-card uk-card-default uk-card-body uk-card-hover">
                                <ul class="uk-flex-center" uk-tab>
                                    <li class="uk-active"><a href="#"><h3>BIKES</h3></a></li>
                                </ul>
                                <div class="uk-text-center">
                                    <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                      <a href="BikesHomePage.html">  <img class="uk-transition-scale-up uk-transition-opaque" src="image/h2r.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div href="#" class="uk-section">
                    <div class="uk-container uk-container-small uk-text-center">
                        <br />
                        <br />
                        <div class="uk-animation-toggle" uk-scrollspy="cls: uk-animation-slide-right;">
                            <div class="uk-card uk-card-default uk-card-body uk-card-hover">
                                <ul class="uk-flex-center" uk-tab>
                                    <li class="uk-active"><a href="#"><h3>CARS</h3></a></li>
                                </ul>
                                <div class="uk-text-center">
                                    <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                      <a href="CarsHomePage.html">  <img class="uk-transition-scale-up uk-transition-opaque" src="image/img8.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section">
            <div class="uk-animation-toggle">
                <div class="uk-card uk-card-default uk-card-body uk-card-hover">
                    <ul class="uk-flex-center" uk-tab>
                        <li class="uk-active"><a href="#" id="comparison"><h2> COMPARISON </h2></a></li>

                    </ul>
                    <p class="uk-text-center">Coming Soon....</p>
                </div>
            </div>
            </div>
        </div>
</body>
</html>
