

$(function(){

    // page tilt effect when topNavBar click
    var tiltPage={
        $contents:$('.contentsWrap'),
        $contentsFront:$('.contentsFront'),
        $topBar:$('.topBar'),
        offset:1800,
        contentsHeight:$('.contentsFront').outerHeight(),
        open:function(){
            this.$contents.addClass('tilt');
            this.$topBar.off('click');
            $('.topBar').on('click',this.close.bind(this));
            this.topBarFix(true);
            // console.log('opening');
        },
        close:function(){
            this.$contents.removeClass('tilt');
            $('.topBar',).off('click');
            this.$topBar.on('click', this.open.bind(this));
            this.topBarFix(false);
            // console.log('closing');


        },
        updateTransformOrigin:function(){
            scrollTop = this.$contents.scrollTop();
            equation = (scrollTop + this.offset) /this.contentsHeight*100;
            this.$contentsFront.css('transform-origin','center' + equation +'%');
        },

        topBarFix:function(opening){
            if(opening){
                $(".topBar").css({
                    // position:'absolute',
                    top:this.$contents.scrollTop() + 30 + 'px'
                });
            }else{
                setTimeout(function(){
                    $(".topBar").css({
                        // position:'fixed',
                        top:'30px'
                    });
                }, 300);
            }
        },

        bindEvents:function(){
            this.$topBar.on('click',this.open.bind(this));
            $('.hiddenTopBar').on('click', this.close.bind(this));
            $('.home, .about, .skill, .prtfol, .contact').on('click', this.close.bind(this));
            this.$contents.on('scroll',this.updateTransformOrigin.bind(this));

        },
        init:function(){
            this.bindEvents();
            this.updateTransformOrigin();
        }
            

    };
    tiltPage.init();



    
     // Fixed Header

    const offTop = $("#header").offset().top;    
    // console.log(offTop);
    $(window).scroll(function(){
        let scroll = $(window).scrollTop();
        // console.log(scroll)
;        if(offTop <= scroll){
           //  $("header").css({"position":"relative"});
            $("#header .topBar").css({"position":"fixed", "right":"50px"});
            
            
        }
        // else{
        //     // $("#header").css({"background":"#f8dfb8"});
        //     $("#header .topBar").css({"position":"relative","background":"none"});
        // }
    });        


    // Footer click event
    $('#footer').click(function(){
        
        $("#footer").toggleClass("active");
        
        

    })

    
    

});