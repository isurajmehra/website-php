<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
<title>Life At Acropolis</title>
<meta name="description" content="Discover the unlimited fun and happiness we enjoy every year on different events, festivals and trips. We celebrate excellence." />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/png" href="assets/img/fevicon/fevicon.png" media="none" onload="if(media!='all')media='all'" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="none" onload="if(media!='all')media='all'">
<link href="assets/css/web-development.css" rel="stylesheet" />
<link href="assets/css/mobile-style.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'" />
<style type="text/css">
    .nav-tabs{
        background-color:transparent;
        text-align:center;
        margin-bottom:35px;
    }
    .nav-tabs li{
        float:none;
        display:inline-block;
        width:110px;
        height:85px;
        border:none;
        background-color:transparent;
        position:relative;
        margin-right:30px;
    }
    .nav-tabs li a{
        display:flex;
        justify-content:center;
        align-items:center;
        width:100%;
        height:100%;
        font-size:21px;
        color:#333;
        text-decoration:none;
    }
      .nav-tabs li::after{
          content:"";
          width:99%;
          height:2%;
          position:absolute;
          bottom:0;
          left:0.5%;
          z-index:2;
          background-color:#333;
      }
      .nav-tabs li.active::after{
          background-color:#1fbba6;
      }
    .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover
    {  background-color:#1fbba6;
        color:#fff;
        text-decoration:none;
        border-top:1px solid #1fbba6;
        
    }
    .nav-tabs li:hover a
    {
        background-color:#1fbba6;
        color:#fff;
    }
    .nav-tabs li:hover::after{
        background-color:#1fbba6;
        
    }
    .nav-tabs li a{
        margin:0px 0px;
        border:none;
        border-radius:0px;
    }
    
    /* styling the event container   */
    .event-banner{
        width:100%;
        height:270px;
        object-fit:cover;
        max-width:100%;
        border-radius:5px;
    }
    .event-container{
        cursor:pointer;
        display:flex;
        flex-wrap:wrap;
        flex-direction:column;
        padding:0px 10px;
    }
    .default-event-image{
        position:absolute;
        padding:22% 0%;
        top:0;
        left:0;
        width:100%;
        height:100%;
        z-index:0;
        display:flex;
        justify-content:center;
        align-items:center;
        display:none;
        background-color:rgba(0,0,0,0.6);
        text-align:center;
    }
    .default-event-image > img{
        width:60px;
        height:auto;
        position:relative;
    }
        .default-event-image > img::after{
            content:"";
            clear:both;
        }
    .default-event-image h6{
        font-size:14px;
        color:rgba(255,255,255,0.5);
        font-family:clanpro;
        margin:10px 0px;
    }
    .event-container > div{
        flex:1;
        position:relative;
    }
    .event-banner-container{
        border:2px solid #d3d3d3;
        border-radius:5px;
    }
    .event-container .event-title{
        font-size:24px ;
        color:#000;
        margin:20px 0px;
    }
    .event-container:hover .event-title{
        color:#1fbba6;
    }
    .event-container:hover .default-event-image{
       display:block;
    }
    .event-container:hover .event-banner-container{
        border:2px solid transparent;
    }
    .event-slider-container{
        display:none;
    }
    /* Hide the slides by default */
.mySlides {
  display: none;
  text-align:center;
}
.mySlides.active{
    display:block;
}
.mySlides img{
    width:100%;
    max-width:80%;
    height:100vh;
    object-fit:cover;
}

/* Next & previous buttons */
.prev img, .next img{
    width:20px;
    
}
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color:#fff;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}
/* Position the "next button" to the right */
.next {
  right: 10px;
  border-radius: 3px 0 0 3px;
}
.prev{
    left:10px;
      border-radius: 3px 0 0 3px;
    
}
.modal-content{
    height:100vh;
    overflow:hidden;
}
.modal-backdrop,.modal-content{
    background-color:#000;
}
.modal { 
   background-color: #000 !important; 
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
  color:#fff;
  text-decoration:none;
}
.thumbnail-container{
   clear:both;
   position:absolute;
   bottom:0;
   left:0;
   min-width:200vw;
   width:auto;
   height:140px;
   padding:20px 0px;
   background-color:#0D0A0A;
   
   z-index:3;
}
.toggle-thumbnail{
    position:absolute;
    right:28px;
    bottom:140px;
    width:35px;
    text-align:center;
    padding:10px 0px;
    background-color:#0D0A0A;
    
    
    z-index:3;
    cursor:pointer;
    transition:all 0.5s linear;
    -webkit-transition:all 0.5s linear;
    -moz-transition:all 0.5s linear;
}
.toggle-thumbnail img{
    width:20px;
    opacity:0.5;
}
.place-bottom{
    bottom:60px;
}
.toggle-thumbnail:hover img{
    opacity:1;
}
.move-left{
    left:-10vw;
}
.thumbnail-container img{
    float:left;
    display:inline-block;
   width:20vw;
   height:80px;
   object-fit:cover;
   cursor:pointer;
   margin:0px 5px;
   border-radius:5px;
   border:1px solid #fff;
}
.thumbnail-container img.active,.thumbnail-container img:hover{
    border:1px solid red;
}
    .modal-dialog{
        width:100%;
        margin:0px 0px;
    }
    .modal-footer{
        border-top:none;
        position:relative;
        overflow:hidden;
        height:80px;
    }
    [data-dismiss='modal']{
        position:absolute;
        top:10px;
        right:0px;
        width:80px;
        height:50px;
        display:flex;
        justify-content:center;
        align-items:center;
        z-index:2;
        text-shadow:none !important;
        color:white;
        opacity:0.6;
    }
     [data-dismiss='modal']:hover{
         opacity:1;
         color:#fff;
     }
    .image-status{
        position:absolute;
        top:10px;
        left:0px;
        width:80px;
        height:50px;
        display:flex;
        justify-content:center;
        align-items:center;
        font-size:20px;
        color:rgba(255,255,255,0.5);
        z-index:3;
    }
    
</style>
</head>
<body>
    
    <!-- opening of event gallery modal -->

<!-- ModalGallery -->
<div id="myModalGallery" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body relative" style="padding-right:0px;">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <span class="image-status"></span>
       <!-- Next/previous controls -->
       <div class="modal-slider-container">
           
       </div>
    <a class="prev"><img src="assets/img/left-arrow.png" alt="Left Arrow" /></a>
    <a class="next"><img src="assets/img/right-arrow.png" alt="Right Arrow" /></a>
    <span class="toggle-thumbnail"> <img src="assets/img/tiles-view.png" title="Toggle Thumbnail" alt="Toggle Thumbnail" /></span>
              <div class="thumbnail-container">
              
          </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>

  </div>
</div>
<!-- closing of event gallery modal -->
        <!-- opening if scrolling-top-button -->
    <div class="scrolling-top-button">
       <img src="assets/img/upload.png" alt="Arrow-top" />
    </div>
    <!-- opening of footer-fixed-component which include chat and contact detail -->
         
    
    
    
    <!-- opening of side-chat widget -->
        <?php include 'template/side-widget.php'; ?>
    <!-- closing of live-chat -->
    
    
    
    
    
<!-- opening of container fluid -->
<div  class="container-fluid">
    
    
    
    
    
    
<!-- opening of top nav desktop-version -->
      <?php include 'template/header.php'; ?>
<!-- closing of top-nav  desktop-version-->


<!-- opening of top-nav mobile version -->
     <?php include 'template/header-mobile.php'; ?>
<!-- closing of top-nav mobile-version -->

    
    
    
    
    
    
    

<div class="row hero-banner half" style="background-image:url(assets/img/banner/web-development.jpg);">
    <div class="hero-banner-text-container">
        <div class="hero-banner-title-box pd-30-30">
            <h3 class=" clanpro-bold fz-70 lh-80 color-white pd-0-55">Events & Celebrations</h3>
            
        </div>
        <div class="hero-banner-description-box pd-60-30 hero-banner-description-line">
            <div>
            <p class=" clanpro fz-20 lh-36 color-white pd-30-0">
Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
    </div>

</div>
<!-- opening of year tab button container -->
<div class="row year-tab-button-container">
    <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#2019">2019</a></li>
  <li><a data-toggle="tab" href="#2018">2018</a></li>
</ul>
</div>
<!-- closing of year tab button container -->
<!-- openinjg of year tab content container -->
<div class="row year-tab-content-container">
    
<div class="tab-content col-md-12" style="margin-right:0px;margin-left:0px;">
    <!-- opening of year 2019 -->
  <div id="2019" class="tab-pane fade in active col-md-12 pd-0-0">
      <!-- opening of event container -->
  <div class="col-md-4 pd-0-0">
      <div class="col-md-12  event-container">
          <div class="event-banner-container">
             <img src="assets/img/banner/web-development.jpg" class="event-banner" alt="Web development" />
                <div class="default-event-image">
            <img src="assets/img/gallery.png" alt="default event" />
            <h6>Photo Gallery</h6>
             </div>
             </div>
             <div class="event-title-container">
      <h3 class="event-title align-center clanpro-bold fz-22">Event Title
      </h3>
      </div>
      <div class="event-slider-container">
          <img src="assets/img/banner/ai.jpg" alt="banner one" />
          <img src="assets/img/banner/ar.jpg" alt="banner two" />
          <img src="assets/img/banner/web-development.jpg" alt="banner three" />
                  <img src="assets/img/banner/big-data.jpg" alt="banner two" />
              <img src="assets/img/banner/blockchain.jpg" alt="banner one" />
          <img src="assets/img/banner/career.jpeg" alt="banner two" />
          <img src="assets/img/banner/business.jpg" alt="banner three" />
                  <img src="assets/img/banner/construction.jpg" alt="banner two" />
      </div>
      </div>
      
  </div>
  <div class="col-md-4 pd-0-0">
      <div class="col-md-12 event-container">
          <div class="event-banner-container">
             <img src="assets/img/banner/web-development.jpg" class="event-banner" alt="Web development" />
            <div class="default-event-image">
            <img src="assets/img/gallery.png" alt="default event" />
            <h6>Photo Gallery</h6>
             </div>
             </div>
             <div class="event-title-container">
      <h3 class="event-title align-center clanpro-bold fz-22">Event Title
      </h3>
      </div>
      <div class="event-slider-container">
          <img src="assets/img/banner/ai.jpg" alt="banner one" />
          <img src="assets/img/banner/ar.jpg" alt="banner two" />
          <img src="assets/img/banner/web-development.jpg" alt="banner three" />
                  <img src="assets/img/banner/ar.jpg" alt="banner two" />
              <img src="assets/img/banner/ai.jpg" alt="banner one" />
          <img src="assets/img/banner/ar.jpg" alt="banner two" />
          <img src="assets/img/banner/web-development.jpg" alt="banner three" />
                  <img src="assets/img/banner/ar.jpg" alt="banner two" />
      </div>
      </div>
      
  </div>
 <div class="col-md-4 pd-0-0">
      <div class="col-md-12 event-container">
          <div class="event-banner-container">
             <img src="assets/img/banner/web-development.jpg" class="event-banner" alt="Web development" />
              <div class="default-event-image">
            <img src="assets/img/gallery.png" alt="default event" />
            <h6>Photo Gallery</h6>
             </div>
             </div>
             <div class="event-title-container">
      <h3 class="event-title align-center clanpro-bold fz-22">Event Title
      </h3>
      </div>
      <div class="event-slider-container">
          <img src="assets/img/banner/ai.jpg" alt="banner one" />
          <img src="assets/img/banner/ar.jpg" alt="banner two" />
          <img src="assets/img/banner/web-development.jpg" alt="banner three" />
                  <img src="assets/img/banner/ar.jpg" alt="banner two" />
              <img src="assets/img/banner/ai.jpg" alt="banner one" />
          <img src="assets/img/banner/ar.jpg" alt="banner two" />
          <img src="assets/img/banner/web-development.jpg" alt="banner three" />
                  <img src="assets/img/banner/ar.jpg" alt="banner two" />
      </div>
      </div>
      
  </div>
  </div>
  <!-- closing of year 2019 -->
  <!-- opening of year 2018 -->
  <div id="2018" class="tab-pane fade col-md-12 pd-0-0">
   <div class="col-md-4 pd-0-0">
      <div class="col-md-12 event-container">
          <div class="event-banner-container">
             <img src="assets/img/banner/web-development.jpg" class="event-banner" alt="Web development" />
               <div class="default-event-image">
            <img src="assets/img/gallery.png" alt="default event" />
            <h6>Photo Gallery</h6>
             </div>
             </div>
             <div class="event-title-container">
      <h3 class="event-title align-center clanpro-bold fz-22">Event Title
      </h3>
      </div>
      <div class="event-slider-container">
          <img src="assets/img/banner/ai.jpg" alt="banner one" />
          <img src="assets/img/banner/ar.jpg" alt="banner two" />
          <img src="assets/img/banner/web-development.jpg" alt="banner three" />
                  <img src="assets/img/banner/ar.jpg" alt="banner two" />
              <img src="assets/img/banner/ai.jpg" alt="banner one" />
          <img src="assets/img/banner/ar.jpg" alt="banner two" />
          <img src="assets/img/banner/web-development.jpg" alt="banner three" />
                  <img src="assets/img/banner/ar.jpg" alt="banner two" />
      </div>
      </div>
      
  </div>
 <div class="col-md-4 pd-0-0">
      <div class="col-md-12 event-container">
          <div class="event-banner-container">
             <img src="assets/img/banner/web-development.jpg" class="event-banner" alt="Web development" />
              <div class="default-event-image">
            <img src="assets/img/gallery.png" alt="default event" />
            <h6>Photo Gallery</h6>
             </div>
             </div>
             <div class="event-title-container">
      <h3 class="event-title align-center clanpro-bold fz-22">Event Title
      </h3>
      </div>
      <div class="event-slider-container">
          <img src="assets/img/banner/ai.jpg" alt="banner one" />
          <img src="assets/img/banner/ar.jpg" alt="banner two" />
          <img src="assets/img/banner/web-development.jpg" alt="banner three" />
                  <img src="assets/img/banner/ar.jpg" alt="banner two" />
              <img src="assets/img/banner/ai.jpg" alt="banner one" />
          <img src="assets/img/banner/ar.jpg" alt="banner two" />
          <img src="assets/img/banner/web-development.jpg" alt="banner three" />
                  <img src="assets/img/banner/ar.jpg" alt="banner two" />
      </div>
      </div>
      
  </div>
  <div class="col-md-4 pd-0-0">
      <div class="col-md-12 event-container">
          <div class="event-banner-container">
             <img src="assets/img/banner/web-development.jpg" class="event-banner" alt="Web development" />
             <div class="default-event-image">
            <img src="assets/img/gallery.png" alt="default event" />
            <h6>Photo Gallery</h6>
             </div>
             <div class="event-slider-container">
          <img src="assets/img/banner/ai.jpg" alt="banner one" />
          <img src="assets/img/banner/ar.jpg" alt="banner two" />
          <img src="assets/img/banner/web-development.jpg" alt="banner three" />
                  <img src="assets/img/banner/ar.jpg" alt="banner two" />
              <img src="assets/img/banner/ai.jpg" alt="banner one" />
          <img src="assets/img/banner/ar.jpg" alt="banner two" />
          <img src="assets/img/banner/web-development.jpg" alt="banner three" />
                  <img src="assets/img/banner/ar.jpg" alt="banner two" />
      </div>
             </div>
             <div class="event-title-container">
      <h3 class="event-title align-center clanpro-bold fz-22">Event Title
      </h3>
      </div>
      </div>
      
  </div>
  </div>
  <!-- closing of year 2018 -->
</div>
    
</div>
<!-- closing of year tab content container -->
      
    
    
    


    <!-- opening of footer section -->
         <?php include 'template/footer.php'; ?>
    <!-- closing of footer section -->
    
    
    
    
    
    
    
</div>
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
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5983955.js"></script>
<script type="text/javascript" src="assets/script/script.js" defer async>
</script>
<script type="text/javascript" defer async>
$(document).ready(function()
{
    
    var image_number=1,total_image=8;
    function  show_image_status(){
         $(".image-status").text(image_number+" / "+total_image);
        
    }
    $(".event-container").on("click",function()
    {
                   $("#myModalGallery .modal-slider-container").html(" ");
                   $("#myModalGallery .thumbnail-container").html(" ");
        //get all the images in event-slider-container 
        let images=$(this).find(".event-slider-container > img");
        total_image=$(images).length;
       show_image_status();
       for(let i=0;i<images.length;i++)
       {
           console.log("images found");
           if(i == 0)
           {
           let src=$(images[i]).attr("src");
           $("#myModalGallery .modal-slider-container").append("<div class='mySlides active'><img src='"+src+"' alt='image' /></div>");
            $("#myModalGallery .thumbnail-container").append("<img class='active' src='"+src+"' alt='image' />");
           }
           else
           {
                    let src=$(images[i]).attr("src");
           $("#myModalGallery .modal-slider-container").append("<div class='mySlides'><img src='"+src+"' alt='image' /></div>");
           $("#myModalGallery .thumbnail-container").append("<img src='"+src+"' alt='image' />");
           }
       }
        $("#myModalGallery").modal('show');
    });
    
    
    
    function plusSlides()
    {
        $(".mySlides").removeClass("active");
    }
    $("body").on("click",".modal-content .next",function()
    {
        let index=$(".mySlides").index($(".modal-content").find(".mySlides.active"));
        image_number=index+1;
        total_image=$(".mySlides").length; //get the total number of images
        if( image_number < total_image)
        {
        image_number++ //increment the image thumbnail status
        }
        else
        {
            image_number =1;
        }
        show_image_status() //shows the image status
        let activeThumbnail=$(".thumbnail-container img").index($(".thumbnail-container img.active"));
        $(".thumbnail-container img").removeClass("active");
        $($(".thumbnail-container img").get(activeThumbnail+1)).addClass("active");
        $(".mySlides").removeClass("active");
          moveTowardsLeft();
          if(index < $(".mySlides").length -1)
          {
        $($(".mySlides").get(index+1)).addClass("active");
        console.log($(".mySlides").index($(".modal-content").find(".mySlides.active")));
          }
          else
          {
               $($(".mySlides").get(0)).addClass("active");
          }
          
    })
     $("body").on("click",".modal-content .prev",function()
    {
         console.log("Next");
          let index=$(".mySlides").index($(".modal-content").find(".mySlides.active"));
        image_number=index+1;
        
                total_image=$(".mySlides").length; //get the total number of images
                if( image_number > 1)
                {
                image_number-- //decrement the image thumbnail status
                }
                else
                {
                    image_number=total_image;
                }
        show_image_status(); //shows the image status
        $(".mySlides").removeClass("active");
                let activeThumbnail=$(".thumbnail-container img").index($(".thumbnail-container img.active"));
        $(".thumbnail-container img").removeClass("active");
        $($(".thumbnail-container img").get(activeThumbnail-1)).addClass("active");
          moveTowardsRight();
        if(index > 0)
        {
        $($(".mySlides").get(index-1)).addClass("active");
        console.log($(".mySlides").index($(".modal-content").find(".mySlides.active")));
        }
        else
        {
           let length=$(".mySlides").length;
              $($(".mySlides").get(length-1)).addClass("active");
        }
    })
    var moveTowardsLeft=function()
    {
        //translateValue+=20;
          $(".thumbnail-container").css("left",-translateValue+"vw");
                          $(".thumbnail-container img").last().after($(".thumbnail-container img").first());
    }
     var moveTowardsRight=function()
    {
        //translateValue-=20;
          $(".thumbnail-container").css("left",-translateValue+"vw");
            $(".thumbnail-container img").first().before($(".thumbnail-container img").last());
                
    }
    var translateValue=0,negativeTraslateValue=20;
    $("body").on("click",".thumbnail-container img",function()
    {
        //let first=$(".thumbnail-container img").first().clone();
       //moveTowardsLeft();


         //console.log($(".thumbnail-container img").last());

        //$(".thumbnail-container").css("transform","translateX(-"+translateValue+"vw)");
        //$(".thumbnail-container img").last().append(($("thumbnail-container img").first()));
        let index=$(".thumbnail-container img").index(this);
        image_number=index+1;
        total_image=$(".thumbnail-container img").length;
        show_image_status();
        console.log(index);
        $(".mySlides").removeClass("active");
        $($(".mySlides").get(index)).addClass("active");
        $(".thumbnail-container img").removeClass("active");
          $($(".thumbnail-container img").get(index)).addClass("active");
    })
    
    //toggle thumbnail container 
    
    $(".toggle-thumbnail").on("click",function()
    {
        $(this).toggleClass("place-bottom");
        $(".thumbnail-container").slideToggle(500);
    })
    
    
    //attach event on arrow keys
    
    $(document).keydown(function(e){
    if (e.which == 37) { 
       alert("left pressed");
       return false;
    }
    else if(e.which == 38)
    {
        $(".toggle-thumbnail").trigger("click");
        
    }
    else if(e.which == 39)
    {
        
    }
    else if(e.which == 40)
    {
         $(".toggle-thumbnail").trigger("click");
    }
});


//drag event on thumbnail container
var thumbnail_container=document.querySelector(".thumbnail-container");
thumbnail_container.ondragstart = function() {
  return false;
};


$(".thumbnail-container").on("mousedown",function(e)
{
    console.log("Mouse Down");
    $(".thumbnail-container").on("mousemove",function(e)
    {
        console.log("Mouse Move");
    })
});
$(".thumbnail-container").on("moouseup",function(e)
{
    console.log("Mouse Up");
})
})
   
</script>


</body>
</html>