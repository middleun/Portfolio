<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
   <title>LEEJUNGEUN</title>


   <!-- reset css link -->
   <link rel="stylesheet" href="../portfolio/css/reset.css">

   <!-- main style css link -->
   <link rel="stylesheet" href="../portfolio/css/style.css">

   <!-- media css link  -->
   <link rel="stylesheet" href="../portfolio/css/media.css">


   <!-- Awesome Font cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
   <div class="wrap">
      <div class="center">

         <!-- hidden navigation -->
         <?php include $_SERVER["DOCUMENT_ROOT"]. "/portfolio/include/hiddenNav.php";?> 
   
         <div class="contentsWrap">
            <div class="contentsFront">


              <!-- header -->
              <?php include $_SERVER["DOCUMENT_ROOT"]. "/portfolio/include/header.php";?>

               <div class="sectionWrap">    
                  <div class="center">                             
                  
                     <section id="skillSec" class="commonSec">
                        <div class="skillTit">
                           <h3>My Skill</h3>
                        </div>
                        <div class="skillGrid">
                           <div class="item">
                              <div class="skillGraph">
                                 <div class="graphContainer">
                                    <div class="graphCircle easyPieChart" data-percent="50">
                                       <p>50%</p>                                
                                    </div>

                                 </div>
                                 <p class="skillTxt">HTML5</p>
                              </div>
                           </div>
                           <!-- end of skill item -->
                           <div class="item">
                              <div class="skillGraph">
                                 <div class="graphContainer">
                                    <div class="graphCircle easyPieChart" data-percent="50">
                                       <p>50%</p>                                
                                    </div>

                                 </div>
                                 <p class="skillTxt">CSS3</p>
                              </div>
                           </div>
                           <!-- end of skill item -->

                           <div class="item">
                              <div class="skillGraph">
                                 <div class="graphContainer">
                                    <div class="graphCircle easyPieChart" data-percent="50">
                                       <p>50%</p>                                
                                    </div>

                                 </div>
                                 <p class="skillTxt">jQuery</p>
                              </div>
                           </div>
                           <!-- end of skill item -->

                           <div class="item">
                              <div class="skillGraph">
                                 <div class="graphContainer">
                                    <div class="graphCircle easyPieChart" data-percent="50">
                                       <p>50%</p>                                
                                    </div>

                                 </div>
                                 <p class="skillTxt">PHP</p>
                              </div>
                           </div>
                           <!-- end of skill item -->

                           <div class="item">
                              <div class="skillGraph">
                                 <div class="graphContainer">
                                    <div class="graphCircle easyPieChart" data-percent="50">
                                       <p>50%</p>                                
                                    </div>

                                 </div>
                                 <p class="skillTxt">Adobe Photoshop</p>
                              </div>
                           </div>
                           <!-- end of skill item -->

                           <div class="item">
                              <div class="skillGraph">
                                 <div class="graphContainer">
                                    <div class="graphCircle easyPieChart" data-percent="50">
                                       <p>50%</p>                                
                                    </div>

                                 </div>
                                 <p class="skillTxt">Adobe Illustrator</p>
                              </div>
                           </div>
                           <!-- end of skill item -->


                        </div>
                        <!-- end of skill grid -->
                        
                        
                     </section>
                     <!-- end of Skill Section -->

                
                  </div>
                  <!-- end of center of section wrap -->

               </div>
               <!--end of section wrap-->
         
               
            </div>
            <!-- end of  front contetns -->
         </div>
         <!-- end of main contents wrap -->

      </div>
      <!-- end of center -->

      

      
   </div>
   <!-- end of wrap -->
   
</body>

<!-- jQuery CDN link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- piechart link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>

<!-- main jquery link -->
<script src="../portfolio/js/custom.js"></script>

<!-- piechart jquery link -->
<script src="../portfolio/js/piechart.js"></script>

</html>