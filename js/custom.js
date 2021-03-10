

$(function(){

    // page tilt effect
    var tiltNav={
        $contents:$('.contentsWrap'),
        $contentsFront:$('.contentsFront'),
        $topBar:$('.topBar'),
        offset:1800,
        contentsHeight:$('.contentsFront').outerHeight(),
        open:function(){
            this.$contents.addClass('tilt');
            this.$topBar.off('click');
            $('.sectionWrap, .topBar').on('click',this.close.bind(this));
            this.topBarFix(true);
            console.log('opening');
        },
        close:function(){
            this.$contents.removeClass('tilt');
            $('.sectionWrap, .topBar',).off('click');
            this.$topBar.on('click', this.open.bind(this));
            this.topBarFix(false);
            console.log('closing');


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
            $('.home').on('click', this.close.bind(this));

            this.$contents.on('scroll',this.updateTransformOrigin.bind(this));
        },
        init:function(){
            this.bindEvents();
            this.updateTransformOrigin();
        }
            

    };
    tiltNav.init();


});