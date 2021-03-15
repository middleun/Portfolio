<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
   <title>LEEJUNGEUN</title>


   <!-- reset css link -->
   <link rel="stylesheet" href="../portfolio/css/reset.css">
 
   <!-- full page plugin css link -->
   <link rel="stylesheet" href="../portfolio/plugin/jquery.fullpage.css">

   <!-- swiper slider css cdn link-->
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

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
         
   
         <div class="contentsWrap">
            <div class="contentsFront">

               <!-- header -->
               <?php include $_SERVER["DOCUMENT_ROOT"]. "/portfolio/include/header.php";?>         
               

               <div class="sectionWrap" id="fullpage">
                  <div class="center"> 
                     <section id="mainSec" class="section" >
                        <div class="mainTit">
                           <h1 class="topTit">이</h1>
                           <h1 class="midTit">中心</h1>
                           <h1 class="midTit">中心</h1>
                           <h1 class="midTit">中心</h1>
                           <h1 class="botTit">은</h1>
                           <span>心을 잃지 않는 웹퍼블리셔</span>

                        </div>

                     </section> 
                      <!-- end of main section -->

                     <section id="aboutSec" class="section">
                       
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

                     <section id="prtfolSec" class="section" >
                        <div class="prtfolTit title">
                           <h3>Portfolio</h3>
                        </div>
                        <div class="prtfolCon swiper-container">
                           <div class="swiper-wrapper">
                          
                              <div class="prtfolBox swiper-slide">     
                           
                                 <div class="prtfolImg">
                                    <img src="../portfolio/img/prtfol_img_2.png" alt="Data Base portfolio img">
                                 </div>
                                 <div class="prtfolTxt">
                                    <h2><span>Data Base</span> Project</h2>
                                    <div class="prtfolTag">
                                       <span>#로그인 </span>
                                       <span>#회원가입 </span>
                                       <span>#Q&A </span>
                                       <span>#회원관리 </span>
                                       <span>#댓글관리 </span>
                                    </div>
                                    

                                    <p>제작기간 : </p>
                                    <div class="prtfolBtn">
                                       <a href="#">pdf다운로드</a>
                                       <a href="#">사이트 바로가기</a>
                                    </div>
                                    

                                 </div>
                                 
                                 
                              </div>
                              <!-- end of prtfolBox /swiper-slide  -->
                              <div class="prtfolBox swiper-slide">     
                           
                                 <div class="prtfolImg">
                                    <img src="../portfolio/img/prtfol_img_2.png" alt="Data Base portfolio img">

                                 </div>
                                 <div class="prtfolTxt">
                                    <h2>Renewal Project</h2>
                                    <p>사는가 이상, 위하여서 거친 가는 그와 철환하였는가? 미인을 위하여, 얼음과 동산에는 발휘하기 그들의 인류의 트고, 
                                             부패뿐이다. 구하기 구할 꽃이 듣기만 인생을 그들의 살 인간의 아니한 아름다우냐? 뼈 만물은 두손을 수 인간의 것이다. 
                                             설레는 불어 영원히 아니다. 위하여 얼마나 풀이 못하다 소담스러운 방황하였으며, 청춘 것이다. 
                                             불어 갑 때까지 피고 황금시대의 고행을 생명을 부패뿐이다.</p>
                                    

                                 </div>
                              </div>
                              <!-- end of prtfolBox /swiper-slide  -->
                              <div class="prtfolBox swiper-slide">     
                           
                                 <div class="prtfolImg">
                                    <img src="../portfolio/img/prtfol_img_2.png" alt="Data Base portfolio img">

                                 </div>
                                 <div class="prtfolTxt">
                                    <h2>API Project</h2>
                                    <p>사는가 이상, 위하여서 거친 가는 그와 철환하였는가? 미인을 위하여, 얼음과 동산에는 발휘하기 그들의 인류의 트고, 
                                             부패뿐이다. 구하기 구할 꽃이 듣기만 인생을 그들의 살 인간의 아니한 아름다우냐? 뼈 만물은 두손을 수 인간의 것이다. 
                                             설레는 불어 영원히 아니다. 위하여 얼마나 풀이 못하다 소담스러운 방황하였으며, 청춘 것이다. 
                                             불어 갑 때까지 피고 황금시대의 고행을 생명을 부패뿐이다.</p>
                                    

                                 </div>
                              </div>
                              <!-- end of prtfolBox /swiper-slide  -->
                              <div class="prtfolBox swiper-slide">     
                           
                                 <div class="prtfolImg">
                                    <img src="../portfolio/img/prtfol_img_2.png" alt="Data Base portfolio img">

                                 </div>
                                 <div class="prtfolTxt">
                                    <h2>기획 Project</h2>
                                    <p>사는가 이상, 위하여서 거친 가는 그와 철환하였는가? 미인을 위하여, 얼음과 동산에는 발휘하기 그들의 인류의 트고, 
                                             부패뿐이다. 구하기 구할 꽃이 듣기만 인생을 그들의 살 인간의 아니한 아름다우냐? 뼈 만물은 두손을 수 인간의 것이다. 
                                             설레는 불어 영원히 아니다. 위하여 얼마나 풀이 못하다 소담스러운 방황하였으며, 청춘 것이다. 
                                             불어 갑 때까지 피고 황금시대의 고행을 생명을 부패뿐이다.</p>
                                    

                                 </div>
                              </div>
                              <!-- end of prtfolBox /swiper-slide  -->
                              <div class="prtfolBox swiper-slide">     
                           
                                 <div class="prtfolImg">
                                    <img src="../portfolio/img/prtfol_img_1.png" alt="Data Base portfolio img">

                                 </div>
                                 <div class="prtfolTxt">
                                    <h2>MY Schedule</h2>
                                    <p>사는가 이상, 위하여서 거친 가는 그와 철환하였는가? 미인을 위하여, 얼음과 동산에는 발휘하기 그들의 인류의 트고, 
                                             부패뿐이다. 구하기 구할 꽃이 듣기만 인생을 그들의 살 인간의 아니한 아름다우냐? 뼈 만물은 두손을 수 인간의 것이다. 
                                             설레는 불어 영원히 아니다. 위하여 얼마나 풀이 못하다 소담스러운 방황하였으며, 청춘 것이다. 
                                             불어 갑 때까지 피고 황금시대의 고행을 생명을 부패뿐이다.</p>                                   

                                 </div>
                              </div>
                              <!-- end of prtfolBox /swiper-slide  -->
                              


                              
                           </div>
                           <!-- end of swiper wrapper -->                  


                           
                        

                        </div>
                        <!-- end of prtfol contents -->
                        <div class="prtfolArrow">
                           
                           <div class="prtfolPrev">
                              <i class="fas fa-caret-left"></i>

                           </div>
                           <div class="prtfolNext">
                              <i class="fas fa-caret-right"></i>
                           </div>
                        </div>
                        
                        


                     </section>   
                     <!-- end of portfolio section -->              


                  

                  </div>
                  <!-- end of center of section wrap -->
               </div>
               <!--end of section wrap-->

               <footer id="footer">
                  <div class="contactTit title">
                     <h3>Contact me</h3>                   

                  </div>
                  <div class="contactCon">
                     <ul>
                        <li><a href="#"><i class="fas fa-phone"></i></a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                        <li><a href="#"><i class="fab fa-github"></i></a></li>
                     </ul>
                  </div>
                  

               </footer>
         
                    

               
            </div>
            <!-- end of  front contetns -->
         </div>
         <!-- end of main contents wrap -->

      

      
   </div>
   <!-- end of wrap -->
   
</body>

<!-- jQuery CDN link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- piechart link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>

<!-- fullpage plugin jquery link -->
<script src="../portfolio/plugin/jquery.fullpage.js"></script>

<!-- piechart jquery link -->
<script src="../portfolio/js/piechart.js"></script>

<!-- swiper slider jquery cdn llink -->
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<!-- main jquery link -->
<script src="../portfolio/js/custom.js"></script>


<script>
   $(function(){

      
      // About Section Name Title effect

      let midTit=$(".midTit");
      
      $(".topTit, .botTit, .mainTit span").css("opacity","0");

      $(".midTit").click(function(){         
         $(this).toggleClass("click");
         if($(this).hasClass("click")){
            $(".midTit").addClass("active");
            $(".topTit, .botTit, .mainTit span").css("opacity","1");
            $(".topTit, .botTit, .mainTit span").css("transition","opacity 1.2s linear");
            

           
         }else{
            $(midtit).removeClass("active");
            // $(".topTit, .botTit").css("opacity","0");

         }

      });      

     

      // full page 
      $("#fullpage").fullpage({
         // navigation:true,
         // navigationPosition:'left',
         sectionSelector:'.section',
         // autoScrolling:true,
		   // scrollHorizontally: true,
         // fixedElement:".topBar",
         anchors:['firstSec','secondSec','thirdSec','fourthSec','fifthSec'],
         scrollBar:true,
         scrollOverflowReset: true,
      });

     

         // swiper slide 

         var swiper = new Swiper('.swiper-container',{
            cssMode : true,
            navigation:{
               nextEl:'.prtfolNext',
               prevEl:'.prtfolPrev',

            },            
            loop:true,
            autoplay:{
               delay:5000,
            },
            // spacebetween:30,
            keyboard:{
               enabled:true,
            },
            mousewheel:{
               invert:false,
            },   

         });



   });   
  
     
   


     

      
     
  
  
</script>

</html>