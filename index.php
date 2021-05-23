<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LEEJUNGEUN's PORTFOLIO</title>

   <!-- seo -->
   <meta name="keywords" content="웹퍼블리셔,포트폴리오">
   <meta name="title" content="신입 웹 퍼블리셔 이중은 포트폴리오">
   <meta name="subject" content="포트폴리오">
   <meta name="description" content="신입 웹퍼블리셔 이중은의 포트폴리오입니다.">
   <meta name="author" content="eunallaco@gmail.com, 이중은">
   <meta name="robots" content="index,follow">
   <meta name="copyright" content="copyrights 2021 LEEJUNGEUN.">

   <!-- open graph -->
   <meta property="og:type" content="website">
   <meta property="og:url" content="https://middleun.dothome.co.kr/portfolio">
   <meta property="og:title" content="LEEJUNGEUN's PORTFOLIO">
   <meta property="og:description" content="신입 웹퍼블리셔 이중은의 포트폴리오입니다.">
   <meta property="og:image" content="http://middleun.dothome.co.kr/portfolio/img/prtfol_og_img.png">
   <meta property="og:image:width" content="1200">
   <meta property="og:image:height" content="630">

   <!-- favicon link -->
   <link rel="apple-touch-icon" href="./img/favicon.ico" />
   <link rel="icon" href="./img/favicon.ico" />

   <!-- reset css link -->
   <link rel="stylesheet" href="../portfolio/css/reset.css">

   <!-- full page plugin css link -->
   <link rel="stylesheet" href="../portfolio/plugin/jquery.fullpage.css">

  <!-- swiper slider link -->
   <link rel="stylesheet" href="../portfolio/plugin/swiper.min.css">
   
   <!-- animation css link -->
   <link rel="stylesheet" href="../portfolio/css/animation.css">

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
                            <!-- end of main title of main section -->

                            <div class="main-con">
                                <i class="fas fa-quote-left"></i>
                                <h3>웹퍼블리셔에게 있어 중심은 웹표준과 웹접근성을 준수하는 것이라고 생각합니다. <br>
                                기본에 충실하고 중심을 잃지 않는 웹퍼블리셔가 되겠습니다.</h3>
                                <i class="fas fa-quote-right"></i>   
                            </div>          
                            <!--  end of main contents of main section-->
                            
                        </section> 
                        <!-- end of main section -->

                        <!-- about section -->
                        <?php include $_SERVER["DOCUMENT_ROOT"]. "/portfolio/include/about.php";?>         
                        
                        <!-- portfolio section -->
                        <?php include $_SERVER["DOCUMENT_ROOT"]. "/portfolio/include/prtfol.php";?>                       
                        
                        <section id="contactSec" class="section">
                            <div class="contact-tit title">
                                <h2>Contact me</h2>
                            </div>
                            <!-- end of contact title of contact section -->
                            <div class="contact-con">
                                <ul>
                                    <li><a href="https://instagram.com/writteun" target=" _blank"><i class="fab fa-instagram"></i></a></li>                              
                                    <li><a href="https://github.com/middleun" target=" _blank"><i class="fab fa-github"></i></a></li>
                                </ul> 
                                <div class="contact-form">
                                    <form action="https://script.google.com/macros/s/AKfycbzwD3NLPKLprXSOdImj2amYLobps_ItrlvjqPXZ1Vg0Yg_pU-M/exec" 
                                    method="post" class="gform" name="contact_form" >
                                        <p class="name-mail">
                                            <input type="text" name="name" placeholder="Your Name" />
                                            <input type="text" name="mail" placeholder="Your Email" />
                                        </p>
                                        <p class="subject">
                                            <input type="text" name="subject" placeholder="Subject" />
                                        </p>
                                        <p class="message">
                                            <textarea name="message" placeholder="Your Message"></textarea>
                                        </p>
                                        <p>
                                            <button type="submit" class="send-btn" onclick="msgSend()">Send Message<i class="fas fa-envelope"></i></button>                                  
                                            
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

    <!-- jQuery CDN link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- fullpage plugin jquery link -->
    <script src="../portfolio/plugin/jquery.fullpage.js"></script>

    <!-- swiper slider link -->
    <script src="../portfolio/plugin/swiper.min.js"></script>

    <!-- main jquery link -->
    <script src="../portfolio/js/custom.js"></script>

    <!-- form data jquery cdn -->
    <script data-cfasync="false" src="https://cdn.rawgit.com/dwyl/html-form-send-email-via-google-script-without-server/master/form-submission-handler.js"></script>


    <script>
    
    
        // full page 
        $("#fullpage").fullpage({
            sectionSelector:'.section',
            autoScrolling:true,
            // scrollHorizontally: true,
            fixedElement:"#header .top-bar",
            anchors:['firstSec','secondSec','thirdSec','fourthSec'],
            menu:"#hiddenNav",
            animateAnchor:true,    
            css3:true, 
            bigSectionsDestination: top,
            // paddingBottom:50,     
            afterLoad:function(origin, destination, direction){
                console.log(destination.index);
                if(destination.index > 0){
                    $("#header .top-bar").css({"position":"fixed"});
                }
            },
            
        });   

        // main title click event
        let mainTit=$(".main-tit");

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
            autoplay:false,
            // autoplay:{
            //    delay:6000,
            // },
            spacebetween:30,
            keyboard:{
            enabled:true,
            },
            mousewheel:{
            invert:false,
            },   
            verticalCentered:false,
        });



        // contact form send btn alert
        const sendBtn=document.querySelector(".send-btn");

        sendBtn.addEventListener('click',msgSend);
        function msgSend(e){
            e.preventDefault();
            if(!document.contact_form.name.value){
            alert('이름을 입력해주세요');
            document.contact_form.name.focus();
            return;
            }
            if(!document.contact_form.mail.value){
            alert('메일을 입력해주세요');
            document.contact_form.mail.focus();
            return;
            }
            if(!document.contact_form.subject.value){
            alert('제목을 입력해주세요');
            document.contact_form.subject.focus();
            return;
            }
            if(!document.contact_form.message.value){
            alert('내용을 입력해주세요');
            document.contact_form.message.focus();
            return;
            }

            document.contact_form.submit();
        };   

        // console.log(document.contact_form.name.);

        // loading page
        function loadingPage(){
            window.location.href="loading.php"
        }
        window.onload=loadingPage;
                


    </script>
    
   
</body>
</html>