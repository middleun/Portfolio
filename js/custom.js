

$(function(){


    // page tilt effect when topNavBar click
    var tiltPage={
        $contents:$('.contents-wrap'),
        $contentsFront:$('.contents-front'),
        $topBar:$('.top-bar'),
        offset:1800,
        contentsHeight:$('.contents-front').outerHeight(),
        open:function(){
            this.$contents.addClass('tilt');
            this.$topBar.off('click');
            $('.top-bar').on('click',this.close.bind(this));
            // this.topBarFix(true);
            // console.log('opening');
        },
        close:function(){
            this.$contents.removeClass('tilt');
            $('.top-bar',).off('click');
            this.$topBar.on('click', this.open.bind(this));
            // this.topBarFix(false);
            // console.log('closing');


        },
        updateTransformOrigin:function(){
            scrollTop = this.$contents.scrollTop();
            equation = (scrollTop + this.offset) /this.contentsHeight*100;
            this.$contentsFront.css('transform-origin','center' + equation +'%');
        },

        // topBarFix:function(opening){
        //     if(opening){
        //         $(".topBar").css({
        //             // position:'absolute',
        //             top:this.$contents.scrollTop() + 30 + 'px'
        //         });
        //     }else{
        //         setTimeout(function(){
        //             $(".topBar").css({
        //                 // position:'fixed',
        //                 top:'30px'
        //             });
        //         }, 300);
        //     }
        // },

        bindEvents:function(){
            this.$topBar.on('click',this.open.bind(this));
            $('.hidden-top-bar').on('click', this.close.bind(this));
            $('.home, .about, .prtfol, .contact').on('click', this.close.bind(this));
            this.$contents.on('scroll',this.updateTransformOrigin.bind(this));

        },
        init:function(){
            this.bindEvents();
            this.updateTransformOrigin();
        }
            

    };
    tiltPage.init();

    // about section skill progress bar effect
    // $(".")
    for(let i=0; i<$(".skill-item").length; i++){
        let skillRate=$(".skill-item").eq(i).find(".skill-rate").val();
        $(".skill-item").eq(i).find(".skill-bar").animate({width:skillRate + "%"}, 1200);
    }    


    // portfolio img change when hover        
    $(".prtfol-img img").hover(function(){
        // $(this).attr('src',$(this).attr('src')).replace('.png','_hover.png');
        $(this).attr("src", $(this).attr("src").replace(".png", "_hover.png")); 
    }, function(){ 
        $(this).attr("src", $(this).attr("src").replace("_hover.png", ".png")); 
     

    });

    
// resize fixed height
    $(window).resize(function(){
		winWidth = $(window).outerWidth();
		winHeight = $(window).outerHeight();
		
		$(".section").height(winHeight - 100);
    });

    //  Move Scroll to each location when click menu
    // $('#hiddenNav ul li').click(function(event){
    //     event.preventDefault();           


    
    //     let navIdx=$(this).index();
    //     // console.log(navIdx);
    //     let navHref=$('#hiddenNav ul li').eq(navIdx).find("a").attr('href');
    //       //console.log(navHref);
    //     const offset=$(navHref).offset().top + 120;
    //     // console.log(offset);
    //     $('html,body').animate({scrollTop:offset}, 1000, 'linear');
    // });  



    // fixed header
    // --- full page는 scroll 인식 X
    // const headerOffTop = $("#header").offset().top;    
    // // const contactOffTop = $("#contactSec").offset().top;
    // // console.log(contactOffTop);
    // // const winHeight = $(window).height();
    // $(window).scroll(function(){
    //     let scroll = $(window).scrollTop();
    //     // console.log(contactOffTop, scroll);
    //     if(headerOffTop <= scroll){
    //        //  $("header").css({"position":"relative"});
    //         $("#header .top-bar").css({"position":"fixed", "right":"50px"});
    //     }
      

        
        

    // });

    // Contact section click event
    // if($("#contactSec").click(function(){
        
    //     $("#contactSec").toggleClass("active");
    // }));
     


    

});