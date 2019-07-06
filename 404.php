<!doctype html>
<html>
<head>
<title>Enterprise Customer Software Development Company | Mobile App | Web App | IT Services</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/png" href="assets/img/fevicon/fevicon.png" media="none" onload="if(media!='all')media='all'" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/web-development.css">
<link rel="stylesheet" href="assets/css/mobile-style.css" media="none" onload="if(media!='all')media='all'" />
    <style type="text/css">
        .banner-title{
            color: transparent;
            font-size: 10vw;
         background:url(assets/img/banner/pattern.jpg);
            background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
            background-repeat: no-repeat;
    -webkit-background-size: cover;
            background-size: cover;
  background-position: 50% 50%;
        }
        .service-button{
            display: inline-block;
            margin-top: 10px;
            border-radius: 35px;
        }
    </style>
</head>
<body>
    <!-- opening of footer-fixed-component which include chat and contact detail -->
<?php include '../template/side-widget.php'; ?>
    <!-- closing of live-chat -->
<!-- opening of container fluid -->
<div  class="container-fluid">
<!-- opening of top nav desktop-version -->
<?php include '../template/header.php'; ?>
<!-- closing of top-nav  desktop-version-->
<!-- opening of top-nav mobile version -->
<?php include '../template/header-mobile.php'; ?>
<!-- closing of top-nav mobile-version -->
<!-- opening of hero-banner -->

<div class="row hero-banner align-center pd-0-0">
     <div id="particles-js" style="position: absolute;left:0;width: 100%;">
        </div>
  <div class="col-md-10 col-md-offset-1 pd-170-0 col-xs-12 col-sm-12">
    <h1 class="banner-title fz-42 clanpro-bold">Oops</h1>
    <p class="hero-banner-paragraph pd-10-0 fz-24 clanpro">The page you are looking for can't be found.</p>
      <a href="#" class="go-back service-button">GO BACK</a>
      <a href="https://www.acropolisinfotech.com" class="service-button">HOME</a>
  </div>
</div>
<!-- closing of hero-banner -->
</div>
<!-- closing of container fluid -->




    
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function()
    {
        function loadScript( url, callback ) {
  var script = document.createElement( "script" )
  script.type = "text/javascript";
  if(script.readyState) {  // only required for IE <9
    script.onreadystatechange = function() {
      if ( script.readyState === "loaded" || script.readyState === "complete" ) {
        script.onreadystatechange = null;
        callback();
      }
    };
  } else {  //Others
    script.onload = function() {
      callback();
    };
  }

  script.src = url;
  document.getElementsByTagName( "head" )[0].appendChild( script );
}


// call the function...
loadScript("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", function() {
  console.log("Bootstrap Js Ready");
$('[data-toggle="close-dropdown"]').tooltip(); 
});
    })
</script>

<!-- Latest compiled JavaScript -->
<script src="assets/particles.js-master/particles.js" type="text/javascript">
    </script>
      <script type="text/javascript">
    particlesJS.load("particles-js","particles.json",function()
                     {
    console.log("Particles is loaded");
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function()
                      {
        $(".go-back").on("click",function()
                        {
        window.history.back();
        })
    })
    </script>


<script type="text/javascript" src="assets/script/script.js" defer async>
</script>
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5983955.js"></script>
</body>
</html>