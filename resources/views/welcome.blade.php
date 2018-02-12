<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Referral</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- <link rel="stylesheet" type="text/css" href="/css/test.css"> -->
        <link href="css/reset.css" rel="stylesheet" type="text/css">
          <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
          <link href="css/style.css" rel="stylesheet" type="text/css">
          <link href="css/animate.css" rel="stylesheet" type="text/css">
          <link href="css/responsive.css" rel="stylesheet" type="text/css">
          <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
          <link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>



            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                /*color: white;*/
                z-index: 100;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <!-- <img src="{{url('/images/bg-1.png')}}" alt="Image"/> -->
        <div class="">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
        </div>

        <div class="landing-section-wrap">
  <div id="particles-js"></div>
    <div class="count-particles">
      <div class="head-logo">
        <img src="images/logo.png" alt="logo"> </div>
    </div>
    <div class="landing-footer">
      <div class="welcome-page">
          @if (Route::has('login'))
          @if (Auth::check())
            <div class="welcomt-bttn">
                <div class="welcomt-bttn welcome-abttn"> <a class="green animated hiding" data-delay="300" data-animation="bounceInLeft" href="javascript:void(0);">Read our whitepaper</a> <a class="light-green animated hiding" data-delay="900" data-animation="bounceInLeft" href="{{ url('/form') }}">Register for our whitelist</a><a class="blue animated hiding" data-delay="1500" data-animation="bounceInLeft"href="javascript:void(0);">Join our Telegram</a></div>
            </div>
            <h1 class="animated hiding">To gain access to our limited presale, please register for our whitelist</h1>
          @else
            <div class="welcomt-bttn">
              <a class=" animated hiding" data-animation="bounceInLeft" href="javascript:void(0);" data-toggle="modal" data-target="#myModal1">JOIN A REVOLUTION</a>
            </div>
            <h1 class="animated hiding"  data-animation="zoomInLeft">WELCOME TO BITHEMOTH</h1>
            <h1 class="animated hiding welcome-text">THE GREATEST BLOCKCHAIN PLATFORM IN THE WORLD</h1>
          @endif
        @endif

      </div>
    </div>

  </div>

  <!--Modal popup video-->
  <div class="video-popup-wrap">
    <div class="modal fade" id="myModal1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal">×</button> -->
          </div>
          <div class="modal-body">
            <!-- <video width="100%" height="100%" controls>
              <source src="https://www.youtube.com/watch?v=SqiuJbPEXL8">
            </video> -->
            <iframe width="100%" height="600px"
src="https://www.youtube.com/embed/SqiuJbPEXL8">
</iframe>
          </div>
        </div>

      </div>
    </div>
  </div>
    <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/main.js"></script>
  <script src="js/bootstrap.js" type="text/javascript"></script>
  <script src="js/particles.js"></script>
  <script src="js/app1.js"></script>
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
