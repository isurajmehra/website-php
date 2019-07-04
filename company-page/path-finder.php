
<!doctype html>
<html ng-app="path-finder">
<head>
<meta property="og:title" content="Enterprise Customer Software Development Company | Mobile App | Web App | IT Services">
<meta property="og:description" content="Enterprise Customer Software Development Company | Mobile App | Web App | IT Services">
<meta property="og:image" content="https://www.acropolisinfotech.com/assets/img/acropolis-facebook.png">
<meta property="og:image:alt" content="Acropolis Infotech">
<meta property="og:url" content="https://www.acropolisinfotech.com/">
<meta property="og:type" content="website" />
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
<title>Path Finders</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/png" href="../assets/img/fevicon/fevicon.png" media="none" onload="if(media!='all')media='all'"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="none" onload="if(media!='all')media='all'">
<link href="../assets/css/web-development.css" rel="stylesheet" />
<link href="../assets/css/mobile-style.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'" />
    <style type="text/css">
        .path-finder-block,.director-block{
            display:none;
        }
        .member-list.active,.path-finder-block.active,.director-block.active{
            display:block;
        }
        .block-button{
            background-color:transparent;
            border:none;
            color:#444;
            font-family:clanpro;
            font-size:16px;
            
        }
        .block-button.active,.block-button:hover{
            color:#1FBBA6;
        }
        .member-list .path-finder-button{
            background-color: transparent;
            color: #666;
            border: none;
            box-shadow:0px 0px #fff;
            position: relative;
            font-family: clanpro;
            
        }
        .path-finder-button:nth-child(1)
        {
            margin-right:15px;
        }
         .path-finder-button:nth-child(2)
        {
            margin-left:15px;
        }
        
        .path-finder-button.active,.path-finder-button:hover{
            color:#1FBBA6;
        }
        .path-finder-button.active::after,.path-finder-button:hover::after{
            width:38px;
        }
        .member-description-container,.member-list{
            z-index: 5;
        }
        .path-finder-button{
            background-color: transparent;
            border: none;
            box-shadow:0px 0px #fff;
            color:#000;
            font-family: clanpro-bold;
            position: relative;
            padding:15px 0px;
        }
        .path-finder-button:after{
            content: "";
            position: absolute;
            bottom:0;
            left:0;
            width:0px;
            transition:all 0.2s linear;
            -webkit-transition:all 0.2s linear;
            -moz-transition:all 0.2s linear;
            height:2px;
            background-color:#1FBBA6;
            
        }
        .founder-button-list .path-finder-button.founders::before{
          content: "";
    position: absolute;
    top: 38%;
    right: -14px;
    height: 12px;
    width: 2px;
    background-color: gray;
    z-index: 3;
        }

       .path-finder-block .member-button, .director-block .member-button{
            color:#1FBBA6;
            background-color:transparent;
            font-family:clanpro;
            border:1px solid #1FBBA6;
            font-size:16px;
            margin-bottom:10px;
            display:flex;
            flex-basis:120px;
            width:120px;
            flex-wrap:wrap;
            height:35px;
            justify-content:center;
            align-items:center;
        }
        .member-list .member-button{
            background-color:transparent !important;
            border:none !important;
            color:#444 !important;
        }
        .member-button:hover,.member-button.active{
        background-color:#1FBBA6;
        color:#fff;
        text-decoration:none;
        }
        .member-social-list{
            margin:20px 0px;
            padding-left:0px;
            margin-left:0px;
        }
        .member-social-list li:nth-child(1){
            padding-left:0px;
        }
        .member-social-list i.fa{
            color:#444;
            background-color:transparent;
            width:40px;
            height:40px;
            display:flex;
            justify-content:center;
            align-items:center;
            padding:0px 0px;
            border:1px solid #444;
        }
        .member-social-list a:hover{
            text-decoration:none;
        }
         .member-social-list i.fa:hover{
             background-color:#1FBBA6;
             color:#fff;
             border:1px solid #1fbba6;
         }
        .name-icon{
            width:20px;
            height:20px;
            margin-right:5px;
        }
        .name-icon img{
            width:auto;
            max-width:100%;
            opacity:0;
            transition:all 0.4s linear;
            -webkit-transition:all 0.4s linear;
            -moz-transition:all 0.4s linear;
        }
        .container .member-full-description{
            display:none;
        }
        .member-body .member-full-description{
                       font-size:18px;
            line-height:30px;
            font-family:clanpro;
            color:#000;
            height:550px;
            overflow-y:scroll;
            
        }
        .member-full-detail-container{
            position:absolute;
            top:50px;
            left:8%;
            width:40%;
            height:100%;
            z-index:6;
            background-color:transparent;
            display:none;
        }
        .back-button{
            cursor:pointer;
        }
        .member-body .member-name{
            font-size:40px;
            margin-bottom:20px;
        }
        .member-body .member-designation{
            font-size:28px;
            margin-bottom:20px;
        }
        .member-body .member-full-description{
            padding-right:30px;
        }
        /* width */
p::-webkit-scrollbar{
  width: 5px;
}

/* Track */
p::-webkit-scrollbar-track{
  background:#A4A4A4; 
}
 
/* Handle */
p::-webkit-scrollbar-thumb{
  background: #888; 
}

/* Handle on hover */
p::-webkit-scrollbar-thumb:hover{
  background: #000; 
}
    </style>
</head>
<body>
     	      <div class="scrolling-top-button">
       <img src="../assets/img/upload.png" alt="Arrow-top" />
    </div>
   
    <!-- opening of footer-fixed-component which include chat and contact detail -->
  
    
    
      <!-- opening of side-chat widget -->
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

    
    
    
    
    
        <div class="row path-finder-container pd-60-100 relative">
            <div class="member-full-detail-container">
                <div class="member-header mgb-60"><span class="back-button clanpro fz-20"><i class="fa fa-angle-left" style="margin-right:4px;"></i> Back</span>
                </div>
                <div class="member-body">
                    
                </div>
                
            </div>
            <div class="member-image">
                <img src="../assets/img/path-finder/founder.png" alt="Founder" />
            </div>
            <div class="container">
                <!-- opening of member button container -->
                
            <div class="col-md-12 member-button-container">
            <ul class="list list-inline founder-button-list">
                <li class="list-inline-item"><button type="button" class="path-finder-button founders active">Founders</button></li>
                 <li class="list-inline-item"><button type="button" class="path-finder-button board-of-directors">Board Of Directors</button></li>
                </ul>
            <ul class="list path-finder-list member-list active">
                <li><span class="name-icon"><img src="../assets/img/path-finder/name-icon.png" alt="Name Icon" style="opacity:1;" /></span><button type="button" class="block-button active">Founder</button></li>
                   <li><span class="name-icon"><img src="../assets/img/path-finder/name-icon.png" alt="Name Icon" /></span><button type="button" class="block-button">Founder</button></li>
                   <li><span class="name-icon"><img src="../assets/img/path-finder/name-icon.png" alt="Name Icon" /></span><button type="button" class="block-button">Founder</button></li>
                </ul>
                 <ul class="list director-list member-list">
                <li><span class="name-icon"><img src="../assets/img/path-finder/name-icon.png" alt="Name Icon"  style="opacity:1;" /></span><button type="button" class="block-button active">Director</button></li>
                   <li><span class="name-icon"><img src="../assets/img/path-finder/name-icon.png" alt="Name Icon" /></span><button type="button" class="block-button">Director</button></li>
                   <li><span class="name-icon"><img src="../assets/img/path-finder/name-icon.png" alt="Name Icon" /></span><button type="button" class="block-button">Director</button></li>
                </ul>
            </div>
            
            <!-- closing of member button container -->
            
            <!-- opening of first path finder block -->
            <div class="col-md-12 path-finder-block pd-60-0">
                
            <h3 class="member-name clanpro-bold color-green">Path Finder Block One</h3>
            <h5 class="member-designation mg-10-0">Designation</h5>
                <p class="member-description  clanpro color-gray">Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.</p>
                <p class="member-full-description">
                    Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.
                    
                </p>
                <a href="#" class="member-button explore-more-button mg-20-0">Read More</a>
                <ul class="list list-inline member-social-list">
                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            
            <!-- closing of first path finder block -->
            <!-- opening of second path finder block -->
            <div class="col-md-12 path-finder-block active pd-60-0">
                
            <h3 class="member-name clanpro-bold color-green">Path Finder Block Two </h3>
            <h5 class="member-designation mg-10-0">Designation</h5>
                <p class="member-description  clanpro color-gray">Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.</p>
                  <p class="member-full-description">
                    Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.
                    
                </p>
                <a href="#" class="member-button explore-more-button mg-20-0">Read More</a>
                <ul class="list list-inline member-social-list">
                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            <!-- closing of second path finder block -->
            <!-- opening of third path finder block -->
            <div class="col-md-12 path-finder-block pd-60-0">
                
            <h3 class="member-name clanpro-bold color-green">Path Finder Block Three</h3>
            <h5 class="member-designation mg-10-0">Designation</h5>
                <p class="member-description  clanpro color-gray">Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.</p>
                  <p class="member-full-description">
                    Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.
                    
                </p>
                <a href="#" class="member-button explore-more-button mg-20-0">Read More</a>
               <ul class="list list-inline member-social-list">
                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            <!-- closing of third path finder block -->
            <!-- opening of first director block -->
            
              <div class="col-md-12 director-block pd-60-0">
                
            <h3 class="member-name clanpro-bold color-green">Director Block One</h3>
            <h5 class="member-designation mg-10-0">Designation</h5>
                <p class="member-description  clanpro color-gray">Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.</p>
                  <p class="member-full-description">
                    Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.
                    
                </p>
                <a href="#" class="member-button explore-more-button mg-20-0">Read More</a>
              <ul class="list list-inline member-social-list">
                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            <!-- closing of first director block -->
             <!-- opening of second director block -->
            
              <div class="col-md-12 director-block pd-60-0">
                
            <h3 class="member-name clanpro-bold color-green">Director block two</h3>
            <h5 class="member-designation mg-10-0">Designation</h5>
                <p class="member-description  clanpro color-gray">Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.</p>
                  <p class="member-full-description">
                    Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.
                    
                </p>
                <a href="#" class="member-button explore-more-button mg-20-0">Read More</a>
             <ul class="list list-inline member-social-list">
                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            <!-- closing of second director block -->
             <!-- opening of third director block -->
            
              <div class="col-md-12 director-block  pd-60-0">
                
            <h3 class="member-name clanpro-bold color-green">Director Block Three</h3>
            <h5 class="member-designation mg-10-0">Designation</h5>
                <p class="member-description  clanpro color-gray">Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.</p>
                  <p class="member-full-description">
                    Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne.
                    
                </p>
                <a href="#" class="member-button explore-more-button mg-20-0">Read More</a>
                <ul class="list list-inline member-social-list">
                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            <!-- closing of third director block -->
            

        </div>
        </div>


    
    
    
    
    <!-- opening of start project section -->
        <?php include '../template/footer-project.php'; ?>
    <!-- closing of start project section -->



    <!-- opening of footer section -->
         <?php include '../template/footer.php'; ?>
    <!-- closing of footer section -->
    
   
    
    
    
    
    </div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5bb5ad91b033e9743d0235ca/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<script type="text/javascript" src="../assets/script/script.js" defer async></script>
    <script type="text/javascript">
    $(document).ready(function()
    {
        var member_image=["founder.png","director.png"];
        //click event on path finder button show that they show their rellavent result
        $(".path-finder-button").on("click",function()
        {
            console.log("path finder button");
            let index=$(".path-finder-button").index(this);
            $(".path-finder-button").removeClass("active");
            $(this).addClass("active");
           $(".member-list").removeClass("active");
           $($(".member-list").get(index)).addClass("active");
           $(".member-image img").attr("src","../assets/img/path-finder/"+member_image[index]);
           if(index === 1)
           {
               $($(".director-list li").get(0)).addClass("active");
               $(".path-finder-block").removeClass("active");
               $($(".director-block").get(0)).addClass("active");
           }
           if(index === 0)
           {
               $($(".path-finder-list li").get(0)).addClass("active");
               $(".director-block").removeClass("active");
                $($(".path-finder-block").get(0)).addClass("active");
           }
           
        })
        
        $(".path-finder-list .block-button").on("click",function()
        {
            let active=$($(".path-finder-button").get(0)).hasClass("active");
            if(active)
            {
            let index=$(".path-finder-list .block-button").index(this);
            $(".path-finder-list .block-button").removeClass("active");
            $(this).addClass("active");
            $(".path-finder-block").removeClass("active");
            $($(".path-finder-block").get(index)).addClass("active");
            $(".path-finder-list .name-icon img").css("opacity","0");
            $($(this).parent().find(".name-icon img")).css("opacity","1");
            }
            else
            {
                   $(".path-finder-block").removeClass("active");
            }
        });
        
        $(".director-list .block-button").on("click",function()
        {
            let active=$($(".path-finder-button").get(1)).hasClass("active");
            if(active)
            {
            console.log("Hello");
            let index=$(".director-list .block-button").index(this);
            $(".director-list .block-button").removeClass("active");
            $(this).addClass("active");
            $(".director-block").removeClass("active");
            $($(".director-block").get(index)).addClass("active");
            $(".director-list .name-icon img").css("opacity","0");
            $($(this).parent().find(".name-icon img")).css("opacity","1");
            }
        });
        
        //script to show member full detail 
        $(".member-button").on("click",function(e)
        {
            e.preventDefault();
            $(".container").hide();
            let member_name=$($(this).parent().find(".member-name")).clone();
             let member_post=$($(this).parent().find(".member-designation")).clone();
              let member_description=$($(this).parent().find(".member-full-description")).clone();
               let member_social_link=$($(this).parent().find(".member-social-list")).clone();
            $(".member-full-detail-container .member-body").append(member_name);
            $(".member-full-detail-container .member-body").append(member_post);
            $(".member-full-detail-container .member-body").append(member_description);
            $(".member-full-detail-container .member-body").append(member_social_link);
            $(".member-full-detail-container").show();
        });
        $(".back-button").on("click",function()
        {
            $(".member-full-detail-container .member-body").html("");
            $(".member-full-detail-container").hide();
            $(".container").show();
        })
    })
    </script>

</body>
</html>