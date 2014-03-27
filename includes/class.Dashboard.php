<?php
class Dashboard {
	function __construct(){
		if(isset($_REQUEST['action'])){
			$action=$_REQUEST['action'];
			$this->$action();
		} else{
			$this->draw();
		}
	}
	function head(){
		$headerText='';
		$headerText.='<script src="js/'.strtolower(__CLASS__).'.js"></script>';
		$headerText.='<link href="css/includes/'.strtolower(__CLASS__).'.css" type="text/css" rel="stylesheet">';
		return $headerText;
	}

	function draw(){
		drawHeader($this->head());
		?>
		<!-- wrapper -->
		<div class="page-wrap">
			<div id="slidingMenu">
				<h1>Aptitude</h1>
				<span id="studentName"><?php echo $_SESSION['userFirstname'].' '.$_SESSION['userLastname']; ?></span>
				<hr style="margin:0px; border-top: 1px solid #F26522;">
				<a href="#services">Timeline</a>
				<a href="#services">Account Settings</a>
				<span>Classes</span>
				<hr style="margin:0px; border-top: 1px solid #F26522;">
				<a href="class">Test Class</a>
				<a href="#">+ Create new class</a>
			</div>

			<header>
				<div id="header">
					<!--Button to expand slideout-->
					<section id="buttonSideMenu">
					</section>
					<article>
						<span class="phoneHide" id="aptitude">Aptitude</span>
					</article>
				</div>
			</header>
			<section id="headerSpacer"></section>
			<section class="container loader"></section>
			<section class="container body" style="padding-left:150px;">
				<div id="dashboard_body">
					<?php
					$this->drawTimeline();
					?>
				</div>
				<section class="row-fluid">
					<section class="col-md-6 col-md-offset-3">
						<img src="img/global/watermark.png">
					</section>
				</section>
			</section>

		</div>
		<!-- wrapper : end -->
		<footer class="site-footer col-md-12">
			<section>
				<img src = "img/global/icon.ico" />
				<span>Powered by Aptitude LLC.</span>
			</section>
			<section id="feedback">
				<a href="feedback.php"><span>Have feedback?</span></a>
			</section>
		</footer>
		<?php

		drawFooter($this->foot());
	}
	function foot(){
	}

	function drawTimeline(){
		echo 'timeline here';
	}
}
$dashboard= new Dashboard();

