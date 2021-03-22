<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LEEJUNGEUN's PORTFOLIO</title>
   <meta name="keywords" content="웹퍼블리셔,포트폴리오">
   <meta name="subject" content="신입 웹 퍼블리셔 이중은 포트폴리오">
   <meta name="description" content="신입 웹퍼블리셔 이중은의 포트폴리오입니다.">
   <meta name="author" content="eunallaco@gmail.com, 이중은">
   <!-- <meta name="robots" content="index,follow"> -->
   <meta name="copyright" content="copyrights 2021 LEEJUNGEUN.">


   <!-- favicon link -->
   <link rel="apple-touch-icon" href="./img/favicon.ico" />

   <link rel="icon" href="./img/favicon.ico" />

   <!-- reset css link -->
   <link rel="stylesheet" href="../portfolio/css/reset.css">

   <!-- full page plugin css link -->
   <link rel="stylesheet" href="../portfolio/plugin/jquery.fullpage.css">

   <!-- aos link -->
   <!-- <link rel="stylesheet" href="../portfolio/plugin/aos.css"> -->

  <!-- swiper slider link -->
   <link rel="stylesheet" href="../portfolio/plugin/swiper.min.css">
   
   <!-- animation css link -->
   <link rel="stylesheet" href="../portfolio/css/animation.css">

   <!-- media css link  -->
   <link rel="stylesheet" href="../portfolio/css/media.css">

   <!-- main style css link -->
   <link rel="stylesheet" href="../portfolio/css/style.css">

   <!-- Awesome Font cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">

   
</head>
<body>

   <div class="wrap">

      <!-- hidden navigation -->
      <?php include $_SERVER["DOCUMENT_ROOT"]. "/portfolio/include/hidden_nav.php";?>    

      <div class="contents-wrap">
         <div class="contents-front">
                   
            <!-- header -->
            <?php include $_SERVER["DOCUMENT_ROOT"]. "/portfolio/include/header.php";?>

            <div class="section-wrap" id="fullpage">
               <div class="center">                   

                  <section id="mainSec" class="section">                      
                     <div class="main-indicator">
                        <span><i class="fas fa-caret-down"> click!</i></span>
                     </div>
                     <div class="main-tit">
                        
                        <h1 class="main-first">이</h1>                        
                        <h1 class="main-second">中</h1>
                        <h1 class="main-third">은</h1>                                  
                        
                        <div class="hidden-tit">
                              <h1><span>心</span>을 잃지않는 웹퍼블리셔</h1>
                        </div>                       
                                        
                     </div>

                     <div class="main-con">
                        <i class="fas fa-quote-left"></i>
                        <h3>웹퍼블리셔에게 있어 중심은 웹표준과 웹접근성을 준수하는 것이라고 생각합니다. <br>
                        기본에 충실하고 중심을 잃지 않는 웹퍼블리셔가 되겠습니다.</h3>
                        <i class="fas fa-quote-right"></i>   
                     </div>                     
                    
                  </section> 
                  <!-- end of main section -->

                  <?php include $_SERVER["DOCUMENT_ROOT"]. "/portfolio/include/about.php";?>         
                  <!-- end of about section -->

                  <?php include $_SERVER["DOCUMENT_ROOT"]. "/portfolio/include/prtfol.php";?>         
                  <!-- end of portfolio section -->       
                  
                  <section id="contactSec" class="section">
                     <div class="contact-tit title">
                        <h2>Contact me</h2>

                     </div>
                     <div class="contact-con">
                        
                        <!-- <div class="contact-info">
                           <h3>phone<i class="fas fa-phone"></i></h3>
                           <p>010.6232.1986</p>
                           <ul>
                              <li><a href="https://instagram.com/writteun"><i class="fab fa-instagram"></i></a></li>                              
                              <li><a href="https://github.com/middleun" target=" _blank"><i class="fab fa-github"></i></a></li>
                           </ul>   

                        </div> -->
                        <ul>
                              <li><a href="https://instagram.com/writteun" target=" _blank"><i class="fab fa-instagram"></i></a></li>                              
                              <li><a href="https://github.com/middleun" target=" _blank"><i class="fab fa-github"></i></a></li>
                        </ul> 
                        <div class="contact-form">
                           <form action="https://script.google.com/macros/s/AKfycbyCUHCBGc5ytwuFgaxIUo7puequvIHZuesZvyGPuE4/dev" 
                           method="post" class="gform" data-email="leejungeun.p@gmail.com">
                              <p class="name-mail">
                                 <input type="text" name="name" placeholder="Your Name" />
                                 <input type="text" name="email" placeholder="Your Email" />
                              </p>
                              <p class="subject">
                                 <input type="text" name="msgTit" placeholder="Subject" />
                              </p>
                              <p class="message">
                                 <textarea name="msgTxt" placeholder="Your Message"></textarea>
                              </p>
                              <p>
                                 <button type="submit" class="send-btn">Send Message<i class="fas fa-envelope"></i></button>
                                 <!-- <a href="#" class="send-btn" onclick="msgSend" >Send Message<i class="fas fa-envelope"></i></a> -->
                                 
                              </p>
                           </form>
                           
                        </div>
                        <!-- end of contact form -->
                     </div>
                     <!-- end of contact contents -->
                     
                  </section>
            <!-- end of contact section -->

                  

               </div>
               <!-- end of center of section-wrap -->
            </div>
            <!--end of section-wrap  -->

            
            

         </div>
         <!-- end of front contents -->
      </div>
      <!-- end of main contents wrap -->
      
      

   
   </div>
   <!-- end of wrap -->
   
</body>

<!-- jQuery CDN link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- fullpage plugin jquery link -->
<script src="../portfolio/plugin/jquery.fullpage.js"></script>

<!-- aos link -->
<!-- <script src="../portfolio/plugin/aos.js"></script> -->

<!-- swiper slider link -->
<script src="../portfolio/plugin/swiper.min.js"></script>


<!-- main jquery link -->
<script src="../portfolio/js/custom.js"></script>


<script>
   // full page 
   $("#fullpage").fullpage({
      // navigation:true,
      // navigationPosition:'left',
      sectionSelector:'.section',
      autoScrolling:true,
	   // scrollHorizontally: true,
      fixedElement:"#header .top-bar",
      anchors:['firstSec','secondSec','thirdSec','fourthSec'],
      menu:"#hiddenNav",
      animateAnchor:true,
      // scrollBar:true,   
      responsiveHeight:537,
      // scrollOverflowReset:true,      
      css3:true, 
      // paddingBottom:50,     
      afterLoad:function(origin, destination, direction){
         console.log(destination.index);
         if(destination.index > 0){
            $("#header .top-bar").css({"position":"fixed"});
         }
      },
	
      
      
   });   

   
      let mainTit=$(".main-tit");
      // // let mainCon=$(".main-con");

      $(mainTit).click(function(){
         $(this).toggleClass("click");
         if($(this).hasClass("click")){
            $(".main-first, .main-third").fadeOut(1000, function(){
               $(".hidden-tit, .hidden-tit h1").addClass("show");
               setTimeout(() => {
                  $(".main-con").addClass("show");
               }, 2000);

            });           
            $(".main-indicator").hide();
               
            
         }else{
            $(".main-con").removeClass("show");
            $(".main-first, .main-third").fadeIn(1000, function(){
                  
            });
            
            $(".hidden-tit, .hidden-tit h1").removeClass("show");
            $(".main-indicator").show();
            
            

            
         }
      });
   
      

   // swiper slide
         var swiper = new Swiper('.swiper-container',{
            cssMode : true,
            navigation:{
               prevEl:'.prtfol-prev',
               nextEl:'.prtfol-next',

            },            
            loop:true,
            autoplay:{
               delay:4000,
            },
            // fixedElements:"#header",
            spacebetween:30,
            keyboard:{
               enabled:true,
            },
            mousewheel:{
               invert:false,
            },   
            verticalCentered:false,


         });

      


</script>

</html>