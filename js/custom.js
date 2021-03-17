

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
            $('.home, .about, .skill, .prtfol').on('click', this.close.bind(this));
            this.$contents.on('scroll',this.updateTransformOrigin.bind(this));

        },
        init:function(){
            this.bindEvents();
            this.updateTransformOrigin();
        }
            

    };
    tiltPage.init();

    // about section skill progress bar effect
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

    


    
    

});