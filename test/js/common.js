
var $pageSwitch = undefined;
function mainLoad(){
    if($("#page_switch").length > 0){

        if($pageSwitch == undefined){
            $pageSwitch = new Swiper('#page_switch.swiper-container', {
                direction: 'vertical',
                mousewheel: {
                    invert: true,
                    releaseOnEdges: true,
                    forceToAxis: true
                },
                speed:500,
            });

            $pageSwitch.on('slideChange', function (event) {
                if($pageSwitch != undefined){
                    if($pageSwitch.activeIndex == 0){
                        $('.logo').removeClass('scroll');
                        $('.menu').removeClass('scroll');
                    }else{
                        $('.logo').addClass('scroll');
                        $('.menu').addClass('scroll');
                    }
                }
            });


        }
    }
}
$(window).on('load',function(){
    mainLoad();
});
