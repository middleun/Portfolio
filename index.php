<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
   <title>LEEJUNGEUN</title>


   <!-- reset css link -->
   <link rel="stylesheet" href="../portfolio/css/reset.css">

   <!-- light slider css link -->
   <link rel="stylesheet" href="../portfolio/plugin/lightslider.css">


   <!-- main style css link -->
   <link rel="stylesheet" href="../portfolio/css/style.css">

   <!-- media css link  -->
   <link rel="stylesheet" href="../portfolio/css/media.css">


   <!-- Awesome Font cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
   <div class="wrap">

         <!-- hidden navigation -->
         <?php include $_SERVER["DOCUMENT_ROOT"]. "/portfolio/include/hiddenNav.php";?>    
         
   
         <div class="contentsWrap">
            <div class="contentsFront">

               <!-- header -->
               <?php include $_SERVER["DOCUMENT_ROOT"]. "/portfolio/include/header.php";?>         
               

               <div class="sectionWrap">
                  <div class="center">                  
                     <section id="aboutSec" class="commonSec">
                        <div class="aboutTit">
                           <h1 class="topTit">이</h1>
                           <h1 class="midTit">中</h1>
                           <h1 class="botTit">은</h1>
                           <span>心을 잃지 않는 웹퍼블리셔</span>

                        </div>
                        <div class="aboutBox clear">
                           <div class="aboutVideo" >
                              <!-- <img src="#" alt=""> -->
                              <video autoplay loop muted>
                                 <source src="../portfolio/video/aboutVideo_1.mp4"type="video/webm">
                              </video>
                           </div>
                           <div class="aboutTxt">
                              <h1>What About <span>Me</span></h1>
                              <div class="aboutInfo">
                                 <p>사는가 이상, 위하여서 거친 가는 그와 철환하였는가? 미인을 위하여, 얼음과 동산에는 발휘하기 그들의 인류의 트고, 
                                    부패뿐이다. 구하기 구할 꽃이 듣기만 인생을 그들의 살 인간의 아니한 아름다우냐? 뼈 만물은 두손을 수 인간의 것이다. 
                                    설레는 불어 영원히 아니다. 위하여 얼마나 풀이 못하다 소담스러운 방황하였으며, 청춘 것이다. 
                                    불어 갑 때까지 피고 황금시대의 고행을 생명을 부패뿐이다. 것은 찬미를 위하여, 쓸쓸하랴? </p>

                              </div>

                           </div>
                        </div>
                     </section>
                     <!-- end of about Section -->

                     <?php include $_SERVER["DOCUMENT_ROOT"]. "/portfolio/include/skill.php";?>

                     <!-- end of Skill Section -->
                     <section id="prtfolSec" class="commonSec">
                     <div class="prtfolTit title">
                        <h3>Portfolio</h3>
                     </div>
                     <div class="prtfolBox" id="prtfolSlide">      
                                  
                        <div class="prtfolImg">
                           <!-- <img src="#" alt=""> -->
                        </div>
                        <div class="prtfolTxt">
                           <h2>Data Base Project</h2>
                           <p>사는가 이상, 위하여서 거친 가는 그와 철환하였는가? 미인을 위하여, 얼음과 동산에는 발휘하기 그들의 인류의 트고, 
                                    부패뿐이다. 구하기 구할 꽃이 듣기만 인생을 그들의 살 인간의 아니한 아름다우냐? 뼈 만물은 두손을 수 인간의 것이다. 
                                    설레는 불어 영원히 아니다. 위하여 얼마나 풀이 못하다 소담스러운 방황하였으며, 청춘 것이다. 
                                    불어 갑 때까지 피고 황금시대의 고행을 생명을 부패뿐이다.</p>
                           

                        </div>
                     </div>
                     <div class="prtfolBox" id="prtfolSlide">                        
                        <div class="prtfolImg">

                        </div>
                        <div class="prtfolTxt">

                        </div>
                     </div>
                     <div class="prtfolBox" id="prtfolSlide">                        
                        <div class="prtfolImg">

                        </div>
                        <div class="prtfolTxt">

                        </div>
                     </div>
                     <div class="prtfolBox" id="prtfolSlide">                        
                        <div class="prtfolImg">

                        </div>
                        <div class="prtfolTxt">

                        </div>
                     </div>



                     </section>   


                  

                  </div>
                  <!-- end of center of section wrap -->
               </div>
               <!--end of section wrap-->
         
                    

               
            </div>
            <!-- end of  front contetns -->
         </div>
         <!-- end of main contents wrap -->

      

      
   </div>
   <!-- end of wrap -->
   
</body>

<!-- jQuery CDN link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!-- lightslider jQuery link -->
<script src="../portfolio/plugin/lightslider.js"></script>

<!-- piechart link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>




<!-- piechart jquery link -->
<script src="../portfolio/js/piechart.js"></script>



<!-- main jquery link -->
<script src="../portfolio/js/custom.js"></script>


<script>
   $(function(){

      
      // About Section Name Title effect

      let midTit=$(".midTit");
      
      $(".topTit, .botTit, .aboutTit span").css("opacity","0");

      $(".midTit").click(function(){         
         $(this).toggleClass("click");
         if($(this).hasClass("click")){
            $(".midTit").addClass("active");
            $(".topTit, .botTit, .aboutTit span").css("opacity","1");
            $(".topTit, .botTit, .aboutTit span").css("transition","opacity 1.2s linear");
            

           
         }else{
            $(midtit).removeClass("active");
            // $(".topTit, .botTit").css("opacity","0");

         }

      });      

      $("#prtfolSlide").lightSlider({
                            
                            item:1,
                            slideMove:1,
                            auto:true,
                            loop:true,
                            speed:400,
                            controls:true,
                            pager:true,
                            responsive : [
                                {
                                    breakpoint:1024,
                                    settings: {
                                        item:4,
                                        slideMove:1,
                                        // slideMargin:6
                                      }
                                }
                            ]  
      });




   });   
  
     
   


      // // lightslider 
      // 
      

      
     
  
  
</script>

</html>