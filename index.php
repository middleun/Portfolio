<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LEEJUNGEUN's PORTFOLIO</title>

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
   

   <!-- main style css link -->
   <link rel="stylesheet" href="../portfolio/css/style.css">

   <!-- media css link  -->
   <link rel="stylesheet" href="../portfolio/css/media.css">

   <!-- Awesome Font cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">

   
</head>
<body>

   <div class="wrap">

      <!-- hidden navigation -->
      <?php include $_SERVER["DOCUMENT_ROOT"]. "/portfolio/include/hidden_nav.php";?>    

      <div class="contents-wrap">
         <div class="contents-front">
                   

            <div class="section-wrap" id="fullpage">
               <div class="center"> 
                  <!-- header -->
                  <?php include $_SERVER["DOCUMENT_ROOT"]. "/portfolio/include/header.php";?>

                  <section id="mainSec" class="section">                      

                     <div class="main-tit">
                        <h1 class="main-hide">이</h1>                        
                        <h1 class="main-show">中</h1>
                        <h1 class="main-hide">은</h1>   
                        <h1 class="hidden-tit"><span>心</span>을 잃지않는 웹퍼블리셔</h1>
                                             
                     </div>
                     <h3>웹퍼블리셔에게 있어 중심은 웹표준과 웹접근성을 준수하는 것이라고 생각합니다. <br>  
                        기본에 충실하고 중심을 잃지 않는 웹퍼블리셔가 되겠습니다.</h3>

                     <!-- <div class="main-con">
                        <ul>
                           <li>[명사]사물의 한가운데</li>
                           <li><u>사물이나 행동에서 매우 중요하고 기본이 되는 부분</u></li>
                           <li>확고한 주관이나 줏대</li>
                        </ul>
                        
                     </div> -->
                  </section> 
                  <!-- end of main section -->

                  <?php include $_SERVER["DOCUMENT_ROOT"]. "/portfolio/include/about.php";?>         
                  <!-- end of about section -->

                  <?php include $_SERVER["DOCUMENT_ROOT"]. "/portfolio/include/prtfol.php";?>         
                  <!-- end of portfolio section -->                 
                  

               </div>
               <!-- end of center of section-wrap -->
            </div>
            <!--end of section-wrap  -->

            <section id="contactSec">
               <div class="contact-tit title">
                  <h2>Contact me<i class="fas fa-smile"></i></h2>

               </div>
               <div class="contact-con">
                  <ul>
                     <li><a href="#"><i class="fas fa-phone"></i></a></li>
                     <li><a href="mailto:eunallaco@gmaill.com"><i class="fas fa-envelope"></i></a></li>
                     <li><a href="https://github.com/middleun" target=" _blank"><i class="fab fa-github"></i></a></li>
                  </ul>
               </div>
            </section>
            <!-- end of contact section -->

            

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
      // fixedElement:"#header .top-bar",
      anchors:['firstSec','secondSec','thirdSec'],
      animateAnchor:true,
      // scrollBar:true,   
      responsiveHeight:537,
      // scrollOverflowReset:true,      
      css3:true,      
      // afterLoad:function(origin, destination, direction){
      //    // console.log(destination.index);
      //    if(destination.index > 0){
      //       $("#header .top-bar").css({"position":"fixed"});
      //    }
      // },
	
      
      
   });

   

   // main title effect
   $(function(){
      let mainTit=$(".main-tit");
      // // let mainCon=$(".main-con");

      $(mainTit).click(function(){
         $(this).toggleClass("click");
         if($(this).hasClass("click")){
            $(mainTit).find(".main-hide").addClass("hide");
            $(mainTit).find(".main-show").addClass("active");
            $(mainTit).find(".hidden-tit").addClass("show");
            // $("#mainSec h3").addClass("show");
            

            // $(mainCon).css({"height":"200px"});
            // $(mainCon).find("ul").css({"opacity":"1"});
            // $(mainCon).find("li").css({"opacity":"1"});
         
         }else{
            // $(mainTit).find(".main-show").removeClass("active");
         }
      });
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