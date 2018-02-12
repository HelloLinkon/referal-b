<!DOCTYPE html>
<html>

<head>
	<title>Bithemoth</title>
	<meta charset="UTF-8">
	<meta name="description" content="Free Web tutorials">
	<meta name="keywords" content="Bithemoth">
	<meta name="author" content="Bithemoth">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="image/title-icon.png" rel="icon">
	<link href="css/reset.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/responsive.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css">
	  <style>

  .intro {
			 display: none;
		}
		.count-particles{bottom:0;}
		@media only screen and (min-width: 300px) and (max-width: 767px) {
		.count-particles{position: inherit;}
		.landing-section-wrap{position: inherit;}
		.form-hide-overlay{display:none !important;}
		.input-form-group{margin-bottom:0 !important;}
		.button{display:none !important;}
		#particles-js{display:none;}
		textarea{height:100px;}
		}
  </style>
</head>
<body>


	<div class="landing-section-wrap" style="background:#e0e0e0">
		<div class="form-div">

			<div class="form-header">

				<div class="form-logo">
					<a href="{{ url('/') }}">
            <img src="images/logo.png" alt="logo">
         </a>
				</div>


			</div>
			<div id="#" class="count-particles">
			<div class="form-box1">
				<div>
					<h1>Bithemoth Whitelist :</h1>
					<div id="edit">
						<p>We enable you to migrate your business to blockchain.</p>
						<p>We respect your privacy.</p>
						<p>Your information wil not be sold or shared.</p>
						<a class="button" id="btn" style="padding:15px 25px;">Enter Details</a>
					</div>

					<div class="clear"></div>
				</div>
				<div class="form-content">
					<div class="form-left-pannel">
					<nav class="" id="myScrollspy">
					<ul class="nav nav-pills nav-stacked" style="position:inherit">
							<li class="active">
								<a href="#01">01. Email
									<span class="arrow"></span>
								</a>
							</li>
							<li>
								<a class="" href="#02">02. Token Sale<span class="arrow"></span></a>

							</li>
							<li>
								<a class="" href="#03">03. Country<span class="arrow"></span></a>

							</li>
							<li>
								<a class="" href="#04">04. Application<span class="arrow"></span></a>

							</li>
						</ul>

    				</nav>

						<div class="clear"></div>
				</div>
				<div class="form-right-pannel"  data-spy="scroll" data-target="#myScrollspy" data-offset="20">


						<div class="input-form-group input-active single-scroll" id="01" >
							<label>01. Your Email ID :</label>
							<input type="text" placeholder="Enter Email ID">
							<div style="display:none;" class="form-hide-overlay"></div>
						</div>
						<div class="input-form-group input-active single-scroll"  id="02">
							<label>02. Please indicate the amount with which you want to participate in the token sale (in USD) </label>
							<div class="list-box">
				        <div class="form-group">
				         <input type="radio" class="checkbox" id="one" name="mjau">
				         <label class="label" for="one">USD 100-1000</label>
				        </div>
				        <div class="form-group">
				         <input type="radio" class="checkbox" id="two" name="mjau">
				         <label class="label" for="two">USD 1,000-5,000</label>
				        </div>
				        <div class="form-group">
				         <input type="radio" class="checkbox" id="three" name="mjau">
				         <label class="label" for="three">USD 5,000-10,000</label>
				        </div>
				        <div class="form-group">
				         <input type="radio" class="checkbox" id="four" name="mjau">
				         <label class="label" for="four">USD 10,000-50,000</label>
				        </div>
				        <div class="form-group">
				         <input type="radio" class="checkbox" id="five" name="mjau">
				         <label class="label" for="five">USD 50,000-100,000</label>
				        </div>
				        <div class="form-group">
				         <input type="radio" class="checkbox" id="six" name="mjau">
				         <label class="label" for="six">USD 10,000-50,000</label>
				        </div>
						<div class="clear"></div>
				       </div>
							<div class="form-hide-overlay"></div>
						</div>
						<div class="input-form-group input-active single-scroll" id="03">
							<label>03. Your Country of Residence</label>
							<input type="text" placeholder="Enter Your Country of Residence">
							<div class="form-hide-overlay"></div>
						</div>
						<div class="input-form-group input-active single-scroll" id="04">
							<label>04. Why you want to be apart of our ICO?</label>
							<textarea style="line-height:20px;" placeholder="Please tell us a little more about yourself.  Can you contribute to the growth of our community? (Are you an investor, developer, marketer, etc.)"></textarea>
							<div class="form-hide-overlay"></div>
						</div>
						<div class="input-form-group" style="margin-bottom:300px;">
							<input type="submit" value="submit" class="submit">
						</div>

	  </div>
		<div id="formOverlay" class="form-hide-overlay f4"></div>
	  <div class="clear"></div>
					</div>
					<div class="">
					</div>
					<div class="clear"></div>
				</div>
				<div id="particles-js"></div>
			</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function () {
			$("#btn").click(function () {
				$("#edit").addClass("intro");
				$("#formOverlay").css("display" , "none");

			});

		 $(function() {
          $.scrollify({
            section : ".single-scroll",
          });
        });
		$('#myScrollspy').on('activate.bs.scrollspy', function () {
   var activeSection = $(this).find("li.active a").attr("href");

	 if(activeSection === "#01")
   {
       $('#01 .form-hide-overlay').css("display" , "none");
	  $('#02 .form-hide-overlay').css("display" , "block");
	  $('#03 .form-hide-overlay').css("display" , "block");
	  $('#04 .form-hide-overlay').css("display" , "block");
   }
   if(activeSection === "#02")
   {
       $('#01 .form-hide-overlay').css("display" , "block");
	  $('#02 .form-hide-overlay').css("display" , "none");
	  $('#03 .form-hide-overlay').css("display" , "block");
	  $('#04 .form-hide-overlay').css("display" , "block");
   }
   if(activeSection === "#03")
   {
       $('#01 .form-hide-overlay').css("display" , "block");
	  $('#02 .form-hide-overlay').css("display" , "block");
	  $('#03 .form-hide-overlay').css("display" , "none");
	  $('#04 .form-hide-overlay').css("display" , "block");
   }
   if(activeSection === "#04")
   {
       $('#01 .form-hide-overlay').css("display" , "block");
	  $('#02 .form-hide-overlay').css("display" , "block");
	  $('#03 .form-hide-overlay').css("display" , "block");
	  $('#04 .form-hide-overlay').css("display" , "none");
   }
});







		});
	</script>
	<script src="js/particles.js"></script>
<script src="js/app.js"></script>
<script>
  var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function () {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
</script>


</body>

</html>
