<?php 
session_start(); 
//var_dump($_SESSION['source']);
if($_SESSION['USER'] && ($_SESSION['target']!= null)){
	 header('location: views/'.$_SESSION['target'].'.php');
}
?>
<!doctype html>
<html>
	<head>
		<title>Login with Facebook</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     	<!--Import materialize.css-->
      	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     	<!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      	<style type="text/css" media="screen">
      		.background-img{
      			background-image: url('img/background.jpg');
      			background-size: cover;
      			background-attachment: fixed;
      			background-repeat: no-repeat;
      			background-position: center center;
      		}
      		.Food_Talk {
			  font-size: 16px;
			  color: rgb(212, 215, 222) !important;
			  line-height: 2;
			  text-align: center;
			  position: absolute;
			  bottom: 0;
			  left: 50%;
			  transform: translate(-50%, 0);
			  z-index: 12;
			}
			.Rounded_Rectangle_1 {
			  border-style: solid;
			  border-width: 1px;
			  border-color: rgb(51, 51, 51);
			  border-radius: 15px;
			  background-color: #f1f1f1;
			  position: absolute;
			  left: 50%;
			  transform: translate(-50%, -50%);
			  top: 50%;
			  width: 757px;
			  height: 462px;
			  z-index: 5;
			}
			.logo{
				margin-top: 17px;
				margin-bottom: 6px;
				width: 80px;
				height: auto;
			}
			.top-text{
			  font-size: 22px;
			  color: rgb(20, 29, 45);
			  line-height: 1.6;
			  text-align: center;
			  z-index: 10;
			}
			.bottomtext{
				font-size: 18px;
				color: rgb(98, 98, 98);
				font-weight: 300;
			  	line-height: 2;
			  	margin: 25px 0;
			  	text-align: center;
			  	z-index: 11;
			}
			.Can_t_log_in {
			  font-size: 16.667px;
			  color: rgb(64, 132, 252);
			  line-height: 4.5;
			  z-index: 9;
			  margin-right: 20%;			  
			}
			.login{
				margin: 9px;
			}
			.Download_App {
			  font-size: 16.667px;
			  color: rgb(64, 132, 252);
			  line-height: 4.5;
			  z-index: 8;
			  margin-left: 20%;
			  
			}
			.Can_t_log_in1 {
			  font-size: 16.667px;
			  color: rgb(64, 132, 252);
			  line-height: 2.5;
			  z-index: 9;
			  margin: 4px 0;
			}
			.login1{
				margin: 10px 0;
				width: 250px;
				height: auto;
			}
			.Download_App1 {
			  font-size: 16.667px;
			  color: rgb(64, 132, 252);
			  line-height: 2.5;
			  z-index: 8;
			  margin: 4px 0;
			}
			#backg{
				background-color: #f1f1f1 !important;
			}
			@media only screen and (max-width : 600px) {
			  .background-img{
      			background-color: #f1f1f1 !important;
      			background-image:none !important;;
      		}
      		.top-text{
			  font-size: 21px;
			}
			.bottomtext{
				font-size: 16px;
			} }
      	</style>
	</head>

	<body class="background-img">
		<div class="container">
			<div class="row hide-on-small-only">
				<div class="col s12 m12 l12">
					<div class="Rounded_Rectangle_1">
						<div class="center-align col s12 m12 l12">
							<img src="img/logo.png" alt="" class="logo">
							<h4 class="top-text">
								Hi, <br>
								You are one step away from being part of <br>
								India's best food experiences.
							</h4>
							<a href="fbconfig.php" title=""><img src="img/login.png" alt="" class="login"></a>
							<h5 class="bottomtext">
								Your Information is safe with us, <strong>Maa Kasam!</strong>
							</h5>
							<div class="col s12 m6 l6">
								<a href="" title="" class="Download_App ">Download App</a>
							</div>
							<div class="col s12 m6 l6">
								<a href="" title="" class="Can_t_log_in">Can't log in?</a>
							</div>	
						</div>
					</div>
				</div>
				<div class="Food_Talk center-align">
					Food Talk 2016
				</div>
			</div>
			<div class="row hide-on-med-and-up" id="backg">
				<div class="col s12 m12 l12 center-align" >
					<img src="img/logo.png" alt="" class="logo">
					<h4 class="top-text">
						Hi, <br>
						You are one step away from being part of
						India's best food experiences.
					</h4>
					<a href="fbconfig.php" title=""><img src="img/login.png" alt="" class="login1"></a>
					<h5 class="bottomtext">
						Your Information is safe with us, <strong>Maa Kasam!</strong>
					</h5>
					<!-- <div class="col s12 m6 l6">
						<a href="" title="" class="Download_App1 ">Download App</a>
					</div>
					<div class="col s12 m6 l6">
						<a href="" title="" class="Can_t_log_in1">Can't log in?</a>
					</div> -->
				</div>
				<div class="Food_Talk center-align">
					Food Talk 2016
				</div>
			</div>
		</div>
	</body>

</html>