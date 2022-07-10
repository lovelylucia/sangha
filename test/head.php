<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <title>상하성모세성당</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--검색최적화-->
    <meta name="robots" content="ALL" />
    <meta name="robots" content="index,follow" />
    <meta name="title" content="상하성모세성당">
    <meta name="description" content="상하성모세성당,상하성당,성모세성당,상하성모세,수원교구 상하성모세성당,수원교구 상하성당, 수원교구 모세성당" />
    <meta name="keywords" content="상하성모세성당,상하성당,성모세성당,상하성모세,수원교구 상하성모세성당,수원교구 상하성당">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="상하성모세성당" />
    <meta property="og:description" content="상하성모세성당,상하성당,성모세성당,상하성모세,수원교구 상하성모세성당,수원교구 상하성당, 수원교구 모세성당" />
    <meta property="og:url" content="https://sanghacasuwon.or.kr/" />
    <meta name="naver-site-verification" content="c5e1cf90449931ce7d5cbd84c6f984de43ad2980"/>
    <link rel="canonical" href="http://sanghacasuwon.or.kr/">
    <!--스타일시트-->
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/default.css"/>
    <link rel="stylesheet" href="css/jquery.bxslider.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script>
        $(document).ready(function(){
            $('.slider').bxSlider({
                auto: 'true',
                useCSS: 'false',
            });
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="wrapper_inner">
            <header>
                <div class="gnb_wrap">
                    <div class="gnb_inner">
                        <div class="no_la">
                            <span class="tit">공지사항</span>
                            <div class="wz_tail_latest">
                                <dl id="olinenotice" class="notice">
                                    <div class="notice_wrap">
                                        <ul>
                                            <li><a>[공지]교적 정리 안내</a></li>
                                            <!--<li><a href="">[공지]2019 초등부 예비 복사단 모집</a></li>
                                            <li><a href="">[공지]신부님 영명 축일</a></li>
                                            <li><a href="">[공지]초등부 주일학교 여름신앙학교 안내</a></li>
                                            <li><a href="">[공지]폐휴대폰 수거 및 재활용 캠페인</a></li></ul> -->
                                    </div>
                                </dl>
                            </div>
                            <script type="text/javascript">
                                <!--
                                function fn_article(containerID, autoStart){

                                    var $element = $('#'+containerID).find('.notice-ul');
                                    var autoPlay = autoStart;
                                    var auto = null;
                                    var speed = 2000;
                                    var timer = null;

                                    var move = $element.children().outerHeight();
                                    var first = false;
                                    var lastChild;

                                    lastChild = $element.children().eq(-1).clone(true);
                                    lastChild.prependTo($element);
                                    $element.children().eq(-1).remove();

                                    if($element.children().length==1){
                                        $element.css('top','0px');
                                    }else{
                                        $element.css('top','-'+move+'px');
                                    }

                                    if(autoPlay) {
                                        timer = setInterval(moveNextSlide, speed);
                                        auto = true;
                                    }

                                    $element.find('>li').bind({
                                        'mouseenter': function(){
                                            if(auto){
                                                clearInterval(timer);
                                            }
                                        },
                                        'mouseleave': function(){
                                            if(auto){
                                                timer = setInterval(moveNextSlide, speed);
                                            }
                                        }
                                    });

                                    function moveNextSlide(){
                                        $element.each(function(idx){

                                            var firstChild = $element.children().filter(':first-child').clone(true);
                                            firstChild.appendTo($element.eq(idx));
                                            $element.children().filter(':first-child').remove();
                                            $element.css('top','0px');
                                            $element.eq(idx).animate({'top':'-'+move+'px'},'normal');

                                        });
                                    }
                                }
                                fn_article("olinenotice", true);

                                //-->
                            </script>
                        </div>

                        <div class="util_menu">
                            <ul>
                                <li><a href="<?php echo G5_BBS_URL ?>login.php">로그인</a></li>
                                <li><a href="<?php echo G5_BBS_URL ?>register.php">회원가입</a></li>
                                <li><a href="">ID/PW 찾기</a></li>
                                <li class="last"><a href="">그룹웨어</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <nav>
                    <div class="nav_inner">
                        <div class="logo">
                            <a href="index.php" title="상하성모세성당"><img src="image/logo.png" alt="성모세성당로고" /></a>
                        </div>
                    </div>
                    <div id="topMenu">
                        <h2>메인메뉴</h2>
                        <ul class="main_menu">
                            <li>
                                <a href="" title="">모세마당</a>
                                <div class="submenu">
                                    <ul style='width:430px; margin-left:217px;'>
                                        <li><a href="sub0501.php">자유게시판</a></li>
                                        <li><a href="sub0502.php">단체게시판</a></li>
                                        <li><a href="sub0503.php">자료실</a></li>
                                        <li><a href="sub0504.php">교우업체소개</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="" title="">신앙생활</a>
                                <div class="submenu">
                                    <ul style='width:605px;  margin-left: 50px;'>
                                        <li><a href="sub0401.html">미사 및 성사 안내</a></li>
                                        <li><a href="sub0402.html">신부님 강론</a></li>
                                        <li><a href="sub0403.html">예비신자교리안내</a></li>
                                        <li><a href="sub0404.html">매일미사</a></li>
                                        <li><a href="sub0405.html">주요기도문</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="" title="">모세소식</a>
                                <div class="submenu">
                                    <ul style='width:530px; margin-left:100px;'>
                                        <li><a href="sub0301.php">공지사항</a></li>
                                        <li><a href="sub0302.php">본당주보</a></li>
                                        <li><a href="sub0303.php">갤러리</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="" title="">모세공동체</a>
                                <div class="submenu">
                                    <ul style='width:530px; margin-left:100px;'>
                                        <li><a href="sub0201.html">사목평의회</a></li>
                                        <li><a href="sub0202.html">제분과위원회</a></li>
                                        <li><a href="sub0203.html">평단협위원회</a></li>
                                        <li><a href="sub0204.html">청소년위원회</a></li>
                                        <li><a href="sub0205.html">소공동체</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="" title="">성당소개</a>
                                <div class="submenu">
                                    <ul style='width:720px; margin-left: -76px;'>
                                        <li><a href="sub0101.html">본당소개</a></li>
                                        <li><a href="sub0102.html">주보성인</a></li>
                                        <li><a href="sub0103.html">신부님과 수녀님</a></li>
                                        <li><a href="sub0104.html">본당연혁</a></li>
                                        <li><a href="sub0105.html">사무실안내</a></li>
                                        <li><a href="sub0106.html">셔틀버스운행안내</a></li>
                                        <li><a href="sub0107.html">오시는 길</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <div class="content_wrap">
                <div class="sub_visual">
                    <p class="assist_tit">Church of Sangha St.Moses</p>
                    <p class="sub_tit">본당소개</p>
                </div>
                <div class="subCont_wrap">
                    <div class="subCont_inner">
                        <div class="lnb">
                            <h3 class="lnb_tit">본당소개</h3>
                            <ul>
                                <li><a href="sub0101.html">본당소개</a></li>
                                <li><a href="sub0102.html">주보성인</a></li>
                                <li><a href="sub0103.html">신부님과 수녀님</a></li>
                                <li><a href="sub0104.html">본당연혁</a></li>
                                <li><a href="sub0105.html">사무실안내</a></li>
                                <li><a href="sub0106.html">셔틀버스운행안내</a></li>
                                <li><a href="sub0107.html">오시는 길</a></li>
                            </ul>
                        </div>
                        <div class="sub_contents">
                            <div class="cont_tit">
                                <h4>본당신부님</h4>
                                <ul class="page_pager">
                                    <li><a href="#self"><img src="image/home.gif" alt="home"></a>&gt;&nbsp;</li>
                                    <li><a href="#self">갤러리 &nbsp;</a>&gt;</li>
                                    <li><a href="#self" class="on">본당신부님</a></li><!-- on 활성화 -->
                                </ul>
                            </div>
                            <div class="cont_area">
