jQuery(function($){
    $.fn.topMenu = function(options) {
        var opts = $.extend(options);
        var topMenu = $(this);
        var topMenuList = topMenu.find('>ul>li');
        var submenu = topMenu.find('.submenu');
        var submenuList = submenu.find('>ul>li');

        function showMenu() {
            t = $(this).parent('li');
            if (!t.hasClass('active')) {
                topMenuList.removeClass('active');
                t.addClass('active');
                submenu.hide();
                //t.find('.submenu').show().css('top', 0).animate( { top: 50, opacity:1 }, 200 );
                //$("#titbox").css('padding-top','35');

                t.find('.submenu').show().css({ top: 65, opacity:0}).animate({ top: 65, opacity:1}, 400 );
            }
        }

        function hideMenu() {
            topMenuList.removeClass('active');
            submenu.hide();
            activeMenu();
        }

        function activeMenu() {
            if(opts.d1) {
                t = topMenuList.eq(opts.d1-1);
                //t.addClass('active');
                //t.find('>a.mibt').addClass('active');
                t.find('>a').addClass('active');
                //t.find('.submenu').show().css('top', 0).animate( { top: 50, opacity:1 }, 200 );


                t.find('.submenu').show().css({ top: 65, opacity:0}).animate( { top: 65, opacity:1}, 400 );
                if(opts.d2) {
                    t.find('.submenu>ul>li').eq(opts.d2-1).addClass('on');
                }
            }
        }


        return this.each(function() {
            activeMenu();
            topMenuList.find('>a').mouseover(showMenu).focus(showMenu);
            topMenu.mouseleave(hideMenu);
        });


    }

});

$('.nav_open_btn').click(function(){
    $('body').toggleClass('pc_nav_open');
    $('.nav_open_btn').toggleClass('open');
    $('.m_menu').toggleClass('open');
});

//신부님과 수녀님 탭 제이쿼리
$(function () {

    $(".tab_content").hide();
    $(".tab_content:first").show();

    $("ul.tabs li").click(function () {
        $("ul.tabs li").removeClass("active").css("color", "#333");
        //$(this).addClass("active").css({"color": "darkred","font-weight": "bolder"});
        $(this).addClass("active").css("color", "darkred");
        $(".tab_content").hide()
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).fadeIn()
    });
});

//모바일 하위 메뉴 나타나는 제이쿼리
$('.depth1 > li > a').click(function(){
    $(this).toggleClass('on');
    $(this).next().slideToggle().siblings('.depth2').slideUp(300);
});




