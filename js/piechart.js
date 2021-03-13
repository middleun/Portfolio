$(function() {  
    
      let pieSize=120;
      let winWidth=$(window).width();
      // 브라우저 resize할 때도 변수 읽어줘야
      let clear;
  
      if(winWidth>400){
        pieSize=120;
      }else{
        pieSize=50;
      }
  
      // console.log(pieSize);
         
  
      $('.graphCircle').easyPieChart({
        scaleColor: false,
        lineWidth: 15,
        lineCap: 'round',
        barColor: '#253812',
        trackColor: '#25381252' ,
        size: pieSize,
        animate: 1200
      });
  
      $(window).resize(function(){
        let winWidth=$(window).width();
  
        if(winWidth>400){
          pieSize=120;
        }else{
          pieSize=50;
        }
        
        // clearTimeout(clear);
  
        // timeout - 브라우저 과부하때문에
        clear=setTimeout(function(){
          $('.graphCircle').removeData('easyPieChart').find('canvas').remove();
          $('.graphCircle').easyPieChart({
            scaleColor: false,
            lineWidth: 20,
            lineCap: 'round',
            barColor: '#253812',
            trackColor: '#25381252' ,
            size: pieSize,
            animate: 1
          });
          
        }, 150);
  
      });
  
   
  });