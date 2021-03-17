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

   <!-- aos link -->
   <link rel="stylesheet" href="../portfolio/plugin/aos.css">


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
            <!-- header -->
            <?php include $_SERVER["DOCUMENT_ROOT"]. "/portfolio/include/header.php";?>         

            <div class="section-wrap">
               <div class="center"> 

                  <section id="mainSec" class="section">
                     <div class="main-tit">
                        <h1>中心</h1>                        
                     </div>
                     <div class="main-con">
                        <ul>
                           <li>[명사]사물의 한가운데</li>
                           <li><u>사물이나 행동에서 매우 중요하고 기본이 되는 부분</u></li>
                           <li>확고한 주관이나 줏대</li>
                        </ul>
                        
                     </div>
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

<!-- aos link -->
<script src="../portfolio/plugin/aos.js"></script>

<!-- swiper slider link -->
<script src="../portfolio/plugin/swiper.min.js"></script>


<!-- main jquery link -->
<script src="../portfolio/js/custom.js"></script>


<script>

   // aos
   AOS.init();

   // main title effect
   $(function(){
      let mainTit=$(".main-tit");
      let mainCon=$(".main-con");

      $(mainTit).click(function(){
         $(this).toggleClass("click");
         if($(this).hasClass("click")){
            $(mainTit).addClass("active");
            $(mainCon).css({"height":"200px"});
            $(mainCon).find("ul").css({"opacity":"1"});
            $(mainCon).find("li").css({"opacity":"1"});
         
         }else{
            $(mainTit).removeClass("active");
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
            spacebetween:30,
            keyboard:{
               enabled:true,
            },
            mousewheel:{
               invert:false,
            },   

         });


</script>

</html>