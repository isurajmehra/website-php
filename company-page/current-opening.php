<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
<title>Current Opening</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/png" href="../assets/img/fevicon/fevicon.png"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="../assets/css/web-development.css" rel="stylesheet" />
<link href="../assets/css/mobile-style.css" rel="stylesheet" >
<style type="text/css">
    
        .loader {
        border: 16px solid rgb(0,0,0); /* Light grey */
        border-top: 16px solid rgb(250,200,100); /* Blue */
        border-radius: 50%;
        width: 50px;
        height: 50px;
        margin-left: auto;
        margin-right: auto;
        animation: spin 2s linear infinite;
    }
    
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    .loading-container{
        position:fixed;
        top:0;
        left:0;
        width:100%;
        height:100%;
        padding:15%;
        background-color:#ffffff;
        text-align:center;
        z-index:25;
        display:none;
        
    }
    .modal-form{
        margin:15%;
    }
    .check-icon{
        height:200px;
        text-align:center;
        font-size:24px;
        padding:40px;
    }
    .check-icon p{
        margin-top:10px;
    }
    .right-icons{
        background-color:green;
        color:white;
        text-align:center;
        font-size:48px;
        border-radius:50%;
        padding:10px;
    }

    
    .faq-answer{
        display:none;
    }
    .faq-section{
        border:1px solid rgba(0,0,0,0.1);
        padding:30px 60px;
        cursor:pointer;
        position:relative;
    }
    .faq-question{
        position:relative;
    }
    .faq-question::after{
       content: "\f0d7";
    font-family: FontAwesome;
    font-size: 20px;
    color: #000;
    position: absolute;
    top: -7px;
    left: -48px;
    border: 1px solid #333;
    border-radius: 50%;
    padding: 3px 12px;
    z-index: 3;
    }
    .nav-tabs{
        border:none;
    }
    .nav-tabs>li{
        float:none;
    }
    .nav-tabs>li a{
        color:#000;
        font-family:clanpro;
        font-size:18px;
        padding-left:40px;
        border:none;
        margin-right:0px;
    }
    .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    color: #1fbba6;
    cursor:pointer;
    background-color:#fff;
    border:none;
    border-radius:0px;
}
.nav-tabs >li a:hover,.nav-tabs>li a:focus{
    color:#1fbba6;
    background-color:#fff;
    text-decoration:none;
    border:none;
    border-radius:0px;
    cursor:pointer;
}
/*.join-now-button{
    padding:10px 20px;
    border-radius:25px;
    color:#fff;
    background-color:#00BFAC;
    border:none;
    text-decoration:none;
    text-transform:uppercase;
    font-size:20px;
    font-family:clanpro;
}*/
/*.join-now-button:hover,.join-now-button:focus{
    background-color:#000;
    text-decoration:none;
    color:white;
}*/
.current-opening-header{
    border-bottom:1px solid #1fbba6;
}
.current-opening-header span{
    display:flex;
    min-height:50px;
    justify-content:center;
    align-items:center;
}
.opening-requirement{
    font-size:18px;
    color:#444;
    
}
.opening-requirement-value{
    font-size:21px;
    color:#000;
    font-family:clanpro;
    font-weight:bolder;
}
.opening-description{
    color:#444;
    font-family:clanpro;
}
.opening-icon p{
    color:#00BFAC;
    font-size:16px;
}
.opening-icon a{
    color:#00BFAC;
    font-size:16px;
}
.opening-icon a:hover,.opening-icon a:focus{
    color:#000;
    text-decoration:none;
}
.current-opening-header a:hover, .current-opening-header a:focus{
    text-decoration:none;.
}
.current-opening-header img{
    margin-bottom:5px;
}
.current-opening-header h5,.current-opening-header p{
    font-family:clanpro;
}
.opening-box{
      border: 1px solid #ddd;
    width: 100%;
    height: 100%;
    float: left;
    clear: both;
    padding: 20px 45px;
    margin-bottom:50px;
    position:relative;
    
}
.opening-box:hover{
    
    box-shadow: 0 0px 28px rgba(86, 86, 86, 0.12);
}
.opening-box:hover .apply-now{
    background-color: #333;
    color: #fff;
    text-decoration: none;
}
.opening-title{
    color:#00BFAC;
    font-family:clanpro-bold;
}
.apply-now{
    position:absolute;
    bottom:-27px;
    right:100px;

    z-index:2;
    background-color:#00BFAC;
    color:#fff;
    text-decoration:none;
    text-transform:uppercase;
    padding:10px 20px;
    font-family:clanpro-bold;
    width:248px;
    height:64px;
    display:flex;
    justify-content:center;
    align-items:center;
    
}
.submit-form-button{
        background-color:blue;
    color:#fff;
    text-decoration:none;
    text-transform:uppercase;
    padding:10px 20px;
    font-family:clanpro;
    border:none;
    
}
.apply-now:focus.submit-form-button.hover,.submit-form-button:focus{
    background-color:#000;
    color:#fff;
    text-decoration:none;
}
.subscribe-sec h3 {
    font-size: 16px;
    line-height: 16px;

    letter-spacing: 13px;

    
}
.subscribe-sec h3 span {
    display: block;
    font-size: 18px;

    line-height: 18px;
    letter-spacing: 0px;
    margin-top: 20px;
    color: #333;
}
.subscribe-sec input{
    border:none;
    box-shadow:0px 0px 0px #fff;
    border-radius:0px;
    border-bottom:1px solid #ccc;
    padding: 0px;
    
}
.subscribe-sec{
    border-top: 1px solid #1fbba6;
    padding: 40px 15px;
}
.perfect-container{
    height:auto;
    
}
.perfect-container > div{
    width:30%;
    position:absolute;
    top:0px;
    left:0px;
    height:100%;
    display:flex;
    align-items:center;
}

.form-group:hover .submit-button{
    background-color: #333;
    color: #fff;
    text-decoration: none;
}

    
    .faq-container .opening-box a:hover,.faq-container .opening-box a:active{
        background-color: #333;
    color: #fff;
    }
    .faq-container .opening-box a:focus{
        color: #fff;
    }

    #myModalContact .current-opening-apply-now{
       padding:30px 40px;
    }
    #myModalContact .current-opening-apply-now input[type='file']{
        display: none;
    }
     #myModalContact .current-opening-apply-now .upload-file input[type='text']{
       width: 82.3%;
       height: 30px;
         padding-left: 15px;
         margin-bottom: 4px;
    }
    #myModalContact .current-opening-apply-now .form-group .upload{
        padding:5px 17px;
        background-color: #1fbba6;
        cursor: pointer;
        color: #fff;
    }
    #myModalContact .current-opening-apply-now .form-group{
        margin-bottom: 15px;
    }
    
    #myModalContact .current-opening-apply-now .send-query-home{
        background-color:#1fbba6;
        color:#fff;
        padding:7px 24px;
        border:none;
        font-size: 17px;
        transition: all 0.2s linear;
        border-radius: 20px;
    }
    
    #myModalContact .current-opening-apply-now .send-query-home:hover{
         background-color:#333;
    }
    
    @media only screen and (max-width:900px)
    {
        .apply-now{
            position: static;
        }
    }
    
    
</style>
</head>
<body>
    
     	       <div class="scrolling-top-button">
       <img src="/assets/img/upload.png" alt="Arrow-top" />
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

    
    
    
    
    
    
<div class="row hero-banner half">
    <picture>
        <source  srcset="../assets/img/banner/webp/current-opening.webp" alt="webp">
        <source  srcset="../assets/img/banner/jp2/current-opening.jp2" alt="jp2">
        <img src="../assets/img/banner/current-opening.png" alt="jpg">
    </picture>
   <div class="hero-banner-text-container">
        <div class="hero-banner-title-box pd-30-30">
            <h3 class=" clanpro-bold fz-70 lh-80 color-white pd-0-55">Current Opening</h3>
            
        </div>
        <div class="hero-banner-description-box pd-60-30 hero-banner-description-line">
            <div>
            <p class=" clanpro fz-20 lh-36 color-white pd-30-0">
Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
    </div>
</div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- Modal -->
<div id="myModalContact" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
         <form name="form" method="post"  action="sendQueryFromHome.php" id="contact-form" enctype="multipart/form-data">
        <!-- Opening of query -->
        <div class="row query">
            <!-- Opening of underline title -->
            <div class="col-md-12 underline-section align-center clanpro-bold fz-25">
              <span>Apply Now</span>
           
             </div>
            <!-- closing of underline title -->
            <!-- opening of contact form -->
            <div class="col-md-12  current-opening-apply-now">
                 
                 <!-- opening of name -->
            <div class="col-md-12 form-group">
                <label for="name" class="clanpro">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" ng-model="name"  ng-required="true" ng-pattern="{{name_pattern}}" title="Enter you name">
                </div>
                 <!-- closing of name -->
                 <!--opening of email and phone -->
            <div class="col-md-12 form-group">
                <!-- Opening of email -->
                <label for="email" class="clanpro">
                    Email ID</label>
                <input type="email"  class="form-control" ng-model="email" name="email" id="email" ng-required="true" title="Enter your email">
                
                </div>
                <!-- Closing of email -->
                <!-- opening of country code -->
                <div class="col-md-12">
                
                <div class="col-md-2 form-group pd-0-0">
                    <label for="country_code" class="clanpro">ISD Code</label>
                 <input type="text" class="form-control" name="country_code" ng-model="country_code" ng-pattern="{{country_code_pattern}}" ng-minlength="1" ng-maxlength="4" id="country_code" title="Country Code" ng-required="true">
                  </div>
                <!-- Closing of country code -->
                <!-- Opening of telephone -->
                <div class="col-md-10 form-group pd-0-0">
                <label for="telephone" class="clanpro">
                    Telephone</label>
                <input type="text" class="form-control" id="telephone" ng-pattern="{{mobile_pattern}}" ng-model="mobile" name="mobile" ng-required="true" title="Mobile number must be greater than 6 digits">
                

                </div>
                <!-- closing of telephone -->
                </div>
                 <!-- closing of email and phone -->
                 <!-- opening of skype and hangeout -->
                <div class="col-md-12 form-group">
                <label for="skype_id" class="clanpro">Skype / Hangout ID</label>
                <input type="text" class="form-control" name="skype_id" id="skype_id">
                </div>
                 <!-- closing of skype and hangout -->
                 <!-- opening of message -->
            <div class="col-md-12 form-group">
                <label for="message" class="clanpro">Your Message for us</label>
                <textarea name="message" class="form-control" id="message" title="Your message" placeholder="Message"></textarea>
                </div>
                 <!-- closing of message -->
                 <!-- opening of attachement -->
            <div class="col-md-12 form -group">
                <label for="attachment" class="clanpro">Attachement (Optional)</label>
            </div>
                 <!-- closing of attachment -->
                
                 <!-- Opening of upload file -->
               <div class="col-md-12 form-group pd-0-0">
                <div class="upload-file col-md-12">
                    <input type="text" class="your-file" name="your-file" value="No File Selected"> 
                    <input type="file" name="file" id="file" accept="image/jpeg,image/jpg,image/png,application/pdf,.xlx,.doc/.docs">
                    <label for="file" class="upload">Upload</label>
             </div>
                </div>
                 <!-- closing of upload file -->
                  <div class="col-md-12 form-button">
             <button type="submit" name="submit" class="send-query-home clanpro"  ng-disabled="form.$invalid">Submit</button>
                </div>
                 <!-- closing of security check -->
            </div>
                <!-- closing of contact -form -->
            </div>
            <!-- closing of query -->
             <!-- opening of form submit button -->
             <!-- Closing of form submit button -->
              </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- closing of model -->
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<div class="row current-opening-header pd-30-60 flex">
    <div class="col-md-3 pd-0-0 current-opening-contact">
        <h3 class="lh-35 fz-30 clanpro-bold" style="color:#333;">Current Opening</h3>
        <p class="section-description fz-22 lh-35" style="color:#000;">Contact us directly</p>
        
    </div>
    <div class="col-md-6 flex current-opening-contact-us pd-0-0">
        <div class="col-md-3 align-center opening-icon pd-0-0" style="margin-left:70px;">
            <span class="">
             <img src="../assets/img/career/current-openings-phone-icon.png" alt="Email" />
             </span>
            <p>+91 9999876594</p>
        </div>
        <div class="col-md-3 pd-0-0 align-center opening-icon" style="flex:auto;margin-left:15px;">
            <span class="">
            <img src="../assets/img/career/current-openings-email-icon.png" alt="Email" />
            </span>
            <a href="mailto:innovate@acropolisinfotech.com" class="clanpro fz-18 ">innovate@acropolisinfotech.com</a>
        </div>
    </div>
    
    <div class="col-md-3 pd-0-0 align-center flex join-now pdr-15" style="align-items:center;justify-content:flex-end">
        
                    <li class="pd-8-10 border-blue border-radius-20 mg-0-15 estimate-product background-green flex" style="transition:all 0.3s linear;align-items:center"><a href="#" class="fz-14 color-black pd-0-10 join-now-button">Join Now</a></li>
    </div>
</div>
<!-- opening of faq-container -->
    
    
<div class="row faq-container">
    <div class="col-md-3 faq-button-container pd-0-0" style="background-color:#f5f5f5;">
        <h3 class="pd-0-40 desktop-version clanpro-bold fz-20 lh-70" style="color:#333;border-bottom:1px solid #ccc">By Role</h3>
        
        <div class="custom-select mobile-version">
                <div class="select-selected bg-green">All</div>
            <div class="select-items select-hide nav nav-tabs">
                <div><a  data-toggle="tab" href="#all" >All</a></div>
                <div><a  data-toggle="tab" href="#technology">Technology</a></div>  
                <div><a  data-toggle="tab" href="#mobile-application">Mobile Application</a></div>  
                <div><a  data-toggle="tab" href="#creative">Creative</a></div>  
                <div><a  data-toggle="tab" href="#business-development">Business Development</a></div>  
                <div><a  data-toggle="tab" href="#hr">HR</a></div>  
                <div><a  data-toggle="tab" href="#operation">Operation</a></div>  
                <div><a  data-toggle="tab" href="#fresh-talent">Fresh Talent</a></div>  
                <div><a  data-toggle="tab" href="#web">Web</a></div>  
                <div><a data-toggle="tab" href="#branding">Branding</a></div>  
                
                
            </div>
            
        
        </div>
        
        
    <ul class="nav nav-tabs pdb-30 desktop-version">
  <li class="active opening-button"><a data-toggle="tab" href="#all">All</a></li>
  <li class="opening-button"><a data-toggle="tab" href="#technology">Technology</a></li>
    <li class="opening-button"><a data-toggle="tab" href="#mobile-application">Mobile Application</a></li>
     <li class="opening-button"><a data-toggle="tab" href="#creative">Creative</a></li>
    <li class="opening-button"><a data-toggle="tab" href="#business-development">Business Development</a></li>
     <li class="opening-button"><a data-toggle="tab" href="#hr">HR</a></li>
    <li class="opening-button"><a data-toggle="tab" href="#operation">Operation</a></li>
     <li class="opening-button"><a data-toggle="tab" href="#fresh-talent">Fresh Talent</a></li>
    <li class="opening-button"><a data-toggle="tab" href="#web">Web</a></li>
        <li class="opening-button"><a data-toggle="tab" href="#branding">Branding</a></li>
</ul>
        
    </div>
    <div class="col-md-9 faq-content-container pd-0-30 pdr-0">

<div class="tab-content">
    <!-- opening of general faq -->
    
  <div id="all" class="tab-pane fade in active">
      <div class="opening-box">
          <h3 class="opening-title">All</h3>
          <div class="col-md-12 pd-10-0" style="border-bottom:2px solid #d3d3d3;">
          <div class="col-md-4 pd-0-0">
             <ul class="list list-inline pd-0-0 ">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
          </div>
          <div class="col-md-12 pd-30-0">
              <p class="opening-description clanpro fz-20">
                  Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne
              </p>
          </div>
          <a href="#" class="fz-20 apply-now" data-toggle="modal" data-target="#myModalContact">Apply Now</a>
      </div>
       <div class="opening-box">
          <h3 class="opening-title">Title</h3>
          <div class="col-md-12 pd-10-0" style="border-bottom:2px solid #d3d3d3;">
          <div class="col-md-4 pd-0-0">
             <ul class="list list-inline pd-0-0">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
          </div>
          <div class="col-md-12 pd-30-0">
              <p class="opening-description clanpro fz-20">
                  Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne
              </p>
          </div>
           <a href="#" class="fz-20 apply-now" data-toggle="modal" data-target="#myModalContact">Apply Now</a>
      </div>
            <div class="opening-box">
          <h3 class="opening-title">Title</h3>
          <div class="col-md-12 pd-10-0" style="border-bottom:2px solid #d3d3d3;">
          <div class="col-md-4 pd-0-0">
             <ul class="list list-inline pd-0-0">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
          </div>
          <div class="col-md-12 pd-30-0">
              <p class="opening-description clanpro fz-20">
                  Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne
              </p>
          </div>
          <a href="#" class="fz-20 apply-now" data-toggle="modal" data-target="#myModalContact">Apply Now</a>
      </div>
            <div class="opening-box">
          <h3 class="opening-title">Title</h3>
          <div class="col-md-12 pd-10-0" style="border-bottom:2px solid #d3d3d3;">
          <div class="col-md-4 pd-0-0">
             <ul class="list list-inline pd-0-0">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
          </div>
          <div class="col-md-12 pd-30-0">
              <p class="opening-description clanpro fz-20">
                  Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne
              </p>
          </div>
           <a href="#" class="fz-20 apply-now" data-toggle="modal" data-target="#myModalContact">Apply Now</a>
      </div>
            <div class="opening-box">
          <h3 class="opening-title">Title</h3>
          <div class="col-md-12 pd-10-0" style="border-bottom:2px solid #d3d3d3;">
          <div class="col-md-4 pd-0-0">
             <ul class="list list-inline pd-0-0">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
          </div>
          <div class="col-md-12 pd-30-0">
              <p class="opening-description clanpro fz-20">
                  Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne
              </p>
          </div>
           <a href="#" class="fz-20 apply-now" data-toggle="modal" data-target="#myModalContact">Apply Now</a>
      </div>
  </div>
    
    <div id="technology" class="tab-pane fade">
      <div class="opening-box">
          <h3 class="opening-title">Technology</h3>
          <div class="col-md-12 pd-10-0" style="border-bottom:2px solid #d3d3d3;">
          <div class="col-md-4 pd-0-0">
             <ul class="list list-inline pd-0-0 ">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
          </div>
          <div class="col-md-12 pd-30-0">
              <p class="opening-description clanpro fz-20">
                  Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne
              </p>
          </div>
         <a href="#" class="fz-20 apply-now" data-toggle="modal" data-target="#myModalContact">Apply Now</a>
      </div>
       <div class="opening-box">
          <h3 class="opening-title">Title</h3>
          <div class="col-md-12 pd-10-0" style="border-bottom:2px solid #d3d3d3;">
          <div class="col-md-4 pd-0-0">
             <ul class="list list-inline pd-0-0">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
          </div>
          <div class="col-md-12 pd-30-0">
              <p class="opening-description clanpro fz-20">
                  Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne
              </p>
          </div>
          <a href="#" class="fz-20 apply-now" data-toggle="modal" data-target="#myModalContact">Apply Now</a>
      </div>
  </div>
    
    <div id="mobile-application" class="tab-pane fade">
      <div class="opening-box">
          <h3 class="opening-title">Mobile Application</h3>
          <div class="col-md-12 pd-10-0" style="border-bottom:2px solid #d3d3d3;">
          <div class="col-md-4 pd-0-0">
             <ul class="list list-inline pd-0-0 ">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
          </div>
          <div class="col-md-12 pd-30-0">
              <p class="opening-description clanpro fz-20">
                  Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne
              </p>
          </div>
           <a href="#" class="fz-20 apply-now" data-toggle="modal" data-target="#myModalContact">Apply Now</a>
      </div>
       <div class="opening-box">
          <h3 class="opening-title">Title</h3>
          <div class="col-md-12 pd-10-0" style="border-bottom:2px solid #d3d3d3;">
          <div class="col-md-4 pd-0-0">
             <ul class="list list-inline pd-0-0">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
          </div>
          <div class="col-md-12 pd-30-0">
              <p class="opening-description clanpro fz-20">
                  Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne
              </p>
          </div>
           <a href="#" class="fz-20 apply-now" data-toggle="modal" data-target="#myModalContact">Apply Now</a>
      </div>
  </div>
    
    <div id="creative" class="tab-pane fade">
      <div class="opening-box">
          <h3 class="opening-title">Creative</h3>
          <div class="col-md-12 pd-10-0" style="border-bottom:2px solid #d3d3d3;">
          <div class="col-md-4 pd-0-0">
             <ul class="list list-inline pd-0-0 ">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
          </div>
          <div class="col-md-12 pd-30-0">
              <p class="opening-description clanpro fz-20">
                  Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne
              </p>
          </div>
          <a href="#" class="fz-20 apply-now" data-toggle="modal" data-target="#myModalContact">Apply Now</a>
      </div>
       <div class="opening-box">
          <h3 class="opening-title">Title</h3>
          <div class="col-md-12 pd-10-0" style="border-bottom:2px solid #d3d3d3;">
          <div class="col-md-4 pd-0-0">
             <ul class="list list-inline pd-0-0">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
          </div>
          <div class="col-md-12 pd-30-0">
              <p class="opening-description clanpro fz-20">
                  Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne
              </p>
          </div>
           <a href="#" class="fz-20 apply-now" data-toggle="modal" data-target="#myModalContact">Apply Now</a>
      </div>
  </div>
    
     <div id="business-development" class="tab-pane fade">
      <div class="opening-box">
          <h3 class="opening-title">Business Development</h3>
          <div class="col-md-12 pd-10-0" style="border-bottom:2px solid #d3d3d3;">
          <div class="col-md-4 pd-0-0">
             <ul class="list list-inline pd-0-0 ">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
          </div>
          <div class="col-md-12 pd-30-0">
              <p class="opening-description clanpro fz-20">
                  Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne
              </p>
          </div>
           <a href="#" class="fz-20 apply-now" data-toggle="modal" data-target="#myModalContact">Apply Now</a>
      </div>
       <div class="opening-box">
          <h3 class="opening-title">Title</h3>
          <div class="col-md-12 pd-10-0" style="border-bottom:2px solid #d3d3d3;">
          <div class="col-md-4 pd-0-0">
             <ul class="list list-inline pd-0-0">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
          </div>
          <div class="col-md-12 pd-30-0">
              <p class="opening-description clanpro fz-20">
                  Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne
              </p>
          </div>
           <a href="#" class="fz-20 apply-now" data-toggle="modal" data-target="#myModalContact">Apply Now</a>
      </div>
  </div>
    
    <div id="hr" class="tab-pane fade">
      <div class="opening-box">
          <h3 class="opening-title">HR</h3>
          <div class="col-md-12 pd-10-0" style="border-bottom:2px solid #d3d3d3;">
          <div class="col-md-4 pd-0-0">
             <ul class="list list-inline pd-0-0 ">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
          </div>
          <div class="col-md-12 pd-30-0">
              <p class="opening-description clanpro fz-20">
                  Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne
              </p>
          </div>
          <a href="#" class="fz-20 apply-now" data-toggle="modal" data-target="#myModalContact">Apply Now</a>
      </div>
       <div class="opening-box">
          <h3 class="opening-title">Title</h3>
          <div class="col-md-12 pd-10-0" style="border-bottom:2px solid #d3d3d3;">
          <div class="col-md-4 pd-0-0">
             <ul class="list list-inline pd-0-0">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
          </div>
          <div class="col-md-12 pd-30-0">
              <p class="opening-description clanpro fz-20">
                  Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne
              </p>
          </div>
          <a href="#" class="fz-20 apply-now" data-toggle="modal" data-target="#myModalContact">Apply Now</a>
      </div>
  </div>
    
    <div id="operation" class="tab-pane fade">
      <div class="opening-box">
          <h3 class="opening-title">Operation</h3>
          <div class="col-md-12 pd-10-0" style="border-bottom:2px solid #d3d3d3;">
          <div class="col-md-4 pd-0-0">
             <ul class="list list-inline pd-0-0 ">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
          </div>
          <div class="col-md-12 pd-30-0">
              <p class="opening-description clanpro fz-20">
                  Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne
              </p>
          </div>
          <a href="#" class="fz-20 apply-now">Apply Now</a>
      </div>
       <div class="opening-box">
          <h3 class="opening-title">Title</h3>
          <div class="col-md-12 pd-10-0" style="border-bottom:2px solid #d3d3d3;">
          <div class="col-md-4 pd-0-0">
             <ul class="list list-inline pd-0-0">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
          </div>
          <div class="col-md-12 pd-30-0">
              <p class="opening-description clanpro fz-20">
                  Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne
              </p>
          </div>
          <a href="#" class="fz-20 apply-now" data-toggle="modal" data-target="#myModalContact">Apply Now</a>
      </div>
  </div>
    
     <div id="fresh-talent" class="tab-pane fade">
      <div class="opening-box">
          <h3 class="opening-title">Fresh Talent</h3>
          <div class="col-md-12 pd-10-0" style="border-bottom:2px solid #d3d3d3;">
          <div class="col-md-4 pd-0-0">
             <ul class="list list-inline pd-0-0 ">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
          </div>
          <div class="col-md-12 pd-30-0">
              <p class="opening-description clanpro fz-20">
                  Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne
              </p>
          </div>
           <a href="#" class="fz-20 apply-now" data-toggle="modal" data-target="#myModalContact">Apply Now</a>
      </div>
       <div class="opening-box">
          <h3 class="opening-title">Title</h3>
          <div class="col-md-12 pd-10-0" style="border-bottom:2px solid #d3d3d3;">
          <div class="col-md-4 pd-0-0">
             <ul class="list list-inline pd-0-0">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
          </div>
          <div class="col-md-12 pd-30-0">
              <p class="opening-description clanpro fz-20">
                  Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne
              </p>
          </div>
           <a href="#" class="fz-20 apply-now" data-toggle="modal" data-target="#myModalContact">Apply Now</a>
      </div>
  </div>
    
     <div id="web" class="tab-pane fade">
      <div class="opening-box">
          <h3 class="opening-title">Web</h3>
          <div class="col-md-12 pd-10-0" style="border-bottom:2px solid #d3d3d3;">
          <div class="col-md-4 pd-0-0">
             <ul class="list list-inline pd-0-0 ">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
          </div>
          <div class="col-md-12 pd-30-0">
              <p class="opening-description clanpro fz-20">
                  Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne
              </p>
          </div>
           <a href="#" class="fz-20 apply-now" data-toggle="modal" data-target="#myModalContact">Apply Now</a>
      </div>
       <div class="opening-box">
          <h3 class="opening-title">Title</h3>
          <div class="col-md-12 pd-10-0" style="border-bottom:2px solid #d3d3d3;">
          <div class="col-md-4 pd-0-0">
             <ul class="list list-inline pd-0-0">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
          </div>
          <div class="col-md-12 pd-30-0">
              <p class="opening-description clanpro fz-20">
                  Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne
              </p>
          </div>
           <a href="#" class="fz-20 apply-now" data-toggle="modal" data-target="#myModalContact">Apply Now</a>
      </div>
  </div>
    
     <div id="branding" class="tab-pane fade">
      <div class="opening-box">
          <h3 class="opening-title">Branding</h3>
          <div class="col-md-12 pd-10-0" style="border-bottom:2px solid #d3d3d3;">
          <div class="col-md-4 pd-0-0">
             <ul class="list list-inline pd-0-0 ">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
          </div>
          <div class="col-md-12 pd-30-0">
              <p class="opening-description clanpro fz-20">
                  Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne
              </p>
          </div>
           <a href="#" class="fz-20 apply-now" data-toggle="modal" data-target="#myModalContact">Apply Now</a>
      </div>
       <div class="opening-box">
          <h3 class="opening-title">Title</h3>
          <div class="col-md-12 pd-10-0" style="border-bottom:2px solid #d3d3d3;">
          <div class="col-md-4 pd-0-0">
             <ul class="list list-inline pd-0-0">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
                    <div class="col-md-4 pd-0-0">
             <ul class="list list-inline">
                 <li class="opening-requirement">Exp:</li>
                 <li class="opening-requirement-value">5 Year</li>
             </ul>
          </div>
          </div>
          <div class="col-md-12 pd-30-0">
              <p class="opening-description clanpro fz-20">
                  Lorem ipsum dolor sit amet, ea ponderum scribentur qui. Sed impetus numquam honestatis in. Id nam illum elitr albucius, nihil legere alienum pro id, ne mea dictas eirmod evertitur. Mel referrentur ullamcorper ea, duo ponderum atomorum liberavisse no, offendit signiferumque sit ne
              </p>
          </div>
           <a href="#" class="fz-20 apply-now" data-toggle="modal" data-target="#myModalContact">Apply Now</a>
      </div>
  </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
      </div>
  <!-- closing of general faq -->
  
  
</div>

    
 </div>

<!-- opening of subscribe us section -->
<div class="row subscribe-sec">
    <div class="col-lg-4 col-sm-12 col-md-4">
        <h3 class="fz-16 clanpro-bold color-green mgb-20">
            SUBSCRIBE
            </h3>
            <p class="fz-18 clanpro">
        To Educate You, Inspire and Entertain You.
        </p>
        </div>
           <div class="col-lg-3 col-sm-4 col-md-3 form-group">
                    <label for="name">Your Name</label>
                <input type="text"  id="name" class="form-control name" name="name" placeholder="David C" required="required">
            </div>
            

                <div class="col-lg-3 col-sm-4 col-md-3 form-group">
                    <label for="email">Your Email</label>
                <input type="email" id="email" class="form-control email" name="email" placeholder="david@gmail.com" required="required">
            </div>
               

                    <div class="col-lg-2 col-sm-4 col-md-2 form-group">
                <button type="submit" name="subscrib-button" class="fz-18 submit-button" style="width:195px; height:54px; color: #fff; font-family: clanpro-bold; text-decoration: none;">Submit</button>
            </div>
                    
    </div>
    <div class="row perfect-container relative color-white">
        <img src="../assets/img/current-opening/current-opening.jpg" alt="Arrow-top"/>
        <div class="perfect-box">
            <h3 class="pd-0-15 clanpro-bold color-white fz-50">We may be perfect for each other!</h3>
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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/script/script.js">
</script>
<script type="text/javascript">
    $(document).ready(function()
    {
         $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
           $(".your-file").val(fileName);
           
        });
        
        $(".faq-container .select-selected").click(function(){
            $(this).toggleClass("select-arrow-active");
            $(".faq-container .select-items").toggleClass("select-hide");
            
        });
        
        $(".faq-container .select-items >div").click(function(){
            $(".faq-container .select-items").addClass("select-hide");
            $(".faq-container .select-selected").removeClass("select-arrow-active");
        });
       
        
         $(".select-items a").on("click",function(e){
            let text=$(this).text();
             $(".faq-container .select-selected").text(text);
             e.preventDefault();  
    });
        
         
    })
</script>


</body>
</html>