<?php
//include_once('top.php');
include_once('g5/common.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>
<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <title>::: 상하성당 :::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--검색최적화-->
    <meta name="robots" content="ALL" />
    <meta name="robots" content="index,follow" />
    <meta name="title" content="::: 상하성당 :::">
    <meta name="description" content="천주교 수원교구 상하성당 홈페이지입니다" />
    <meta name="keywords" content="상하성당,상하동성당,상하성모세성당,성모세성당,상하성모세,수원교구 상하성모세성당,수원교구 상하성당">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="::: 상하성당 :::" />
    <meta property="og:description" content="::: 상하성당 :::" />
    <meta property="og:url" content="https://sangha.casuwon.or.kr/" />
    <meta name="naver-site-verification" content="c5e1cf90449931ce7d5cbd84c6f984de43ad2980"/>
    <link rel="canonical" href="http://sangha.casuwon.or.kr/">
    <!--스타일시트-->
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/default.css"/>
    <link rel="stylesheet" href="css/content.css"/>
    <link rel="stylesheet" href="상하성모세/www/css/responsive.css"/>
    <link rel="stylesheet" href="css/jquery.bxslider.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script src="js/common.js"></script>
    <script>
        $(document).ready(function(){
            $('.slider').bxSlider({
                auto: 'true',
                useCSS: false,
                controls: false,
            });
        });
    </script>
</head>
<body>
<div class="wrapper">
    <div id="fade" class="black_overlay"></div>
    <div class="video_popup">
        <a class="close" href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';
                document.getElementById('fade').style.display='none'">닫기</a>
        <div id="light" class="white_content">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/QB1B-kJcmAA?rel=0" frameborder="0"  allowfullscreen style="width:100%; height: 100%;"></iframe>
        </div>
    </div>
    <div class="wrapper_inner">
        <header>
            <div class="gnb_wrap">
                <div class="gnb_inner">
                        <div class="util_menu">
                            <ul>
                            <?php if($is_member){ ?>
                                <li><a href="<?php echo G5_BBS_URL;?>/logout.php">로그아웃</a></li>
                                <li><a href="<?php echo G5_BBS_URL;?>/member_confirm.php?url=register_form.php&w=u">마이페이지</a></li>
                                <?php } else { ?>
                                <li><a href="<?php echo G5_BBS_URL;?>/login.php">로그인</a></li>
                                <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
                                <li><a href="http://sanghacasuwon.or.kr/g5/bbs/password_lost.php" onclick="window.open(this.href, '_blank', 'width=500px,height=300px,toolbars=no,scrollbars=no');
                                return false;" id="login_password_lost">ID/PW 찾기</a></li>
                                <?php } ?>

                                <li class="last"><a href="">그룹웨어</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <nav>
                    <div class="nav_inner">
                        <div class="logo">
                            <a href="index.html" title="상하성당"><img src="http://sanghacasuwon.or.kr/image/sangha_logo.png" alt="상하성당로고" /></a>
                        </div>
                    </div>
                        <div id="topMenu">
                            <h2>메인메뉴</h2>
                            <ul class="main_menu">
                            <li>
                                <a href="http://sanghacasuwon.or.kr/g5/bbs/board.php?bo_table=free" title="모세마당">상하마당</a>
                                <div class="submenu">
                                    <ul style='width:360px; margin-left:294px;'>
                                        <li><a href="http://sanghacasuwon.or.kr/g5/bbs/board.php?bo_table=free">자유게시판</a></li>
                                        <li><a href="http://sanghacasuwon.or.kr/g5/bbs/board.php?bo_table=reference">자료실</a></li>
                                        <li><a href="http://sanghacasuwon.or.kr/g5/bbs/board.php?bo_table=companion">교우업체소개</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="sub0401.html" title="신앙생활">신앙생활</a>
                                <div class="submenu">
                                    <ul style='width:605px;  margin-left: 50px;'>
                                        <li><a href="sub0401.html">미사 및 성사 안내</a></li>
                                        <li><a href="http://sanghacasuwon.or.kr/g5/bbs/board.php?bo_table=homily" class="on" title="신부님강론">신부님 강론</a></li>
                                        <li><a href="sub0403.html">예비신자교리안내</a></li>
                                        <li><a href="http://maria.catholic.or.kr/mi_pr/missa/missa.asp" target="_blank" title="매일미사">매일미사</a></li>
                                        <li><a href="http://maria.catholic.or.kr/mi_pr/prayer/prayer.asp?menu=prayer&pgubun=&ingId=" target="_blank" title="주요기도문">주요기도문</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="http://sanghacasuwon.or.kr/g5/bbs/board.php?bo_table=notice" title="모세소식">상하소식</a>
                                <div class="submenu">
                                    <ul style='width:530px; margin-left:100px;'>
                                        <li><a href="http://sanghacasuwon.or.kr/g5/bbs/board.php?bo_table=notice">공지사항</a></li>
                                        <li><a href="http://sanghacasuwon.or.kr/g5/bbs/board.php?bo_table=weekly">본당주보</a></li>
                                        <li><a href="http://sanghacasuwon.or.kr/g5/bbs/board.php?bo_table=gallery">갤러리</a></li>
                                     </ul>
                                </div>
                             </li>
                            <li>
                                <a href="sub0201.html" title="모세공동체">상하공동체</a>
                                <div class="submenu">
                                    <ul style='width:530px; margin-left:100px;'>
                                        <li><a href="sub0201.html" title="사목평의회">사목평의회</a></li>
                                        <li><a href="sub0202.html" title="제분과협의회">제분과위원회</a></li>
                                        <li><a href="sub0203.html" title="평단협위원회">평단협위원회</a></li>
                                        <li><a href="sub0204.html" title="청소년위원회">청소년위원회</a></li>
                                        <li><a href="sub0205.html" title="소공동체">소공동체</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="sub0101.html" title="">성당소개</a>
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
                <button class="nav_open_btn">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </button>
                <div class="m_menu">
                    <div class="m_nav_util">
                        <ul>
                            <li>
                                <a href="">로그인</a>
                            </li>
                            <li>
                                <a href="">회원가입</a>
                            </li>
                        </ul>
                    </div>
                    <div class="navi_container">
                        <ul class="depth1">
                            <li>
                                <a href="javascript:;">성당소개</a>
                                <ul class="depth2">
                                    <li>
                                        <a href="">본당소개</a>
                                    </li>
                                    <li>
                                        <a href="">주보성인</a>
                                    </li>
                                    <li>
                                        <a href="">신부님과 수녀님</a>
                                    </li>
                                    <li>
                                        <a href="">본당연혁</a>
                                    </li>
                                    <li>
                                        <a href="">사무실안내</a>
                                    </li>
                                    <li>
                                        <a href="">셔틀버스 운행안내</a>
                                    </li>
                                    <li>
                                        <a href="">오시는 길</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">상하공동체</a>
                                <ul class="depth2">
                                    <li>
                                        <a href="">사목평의회</a>
                                    </li>
                                    <li>
                                        <a href="">제분과위원회</a>
                                    </li>
                                    <li>
                                        <a href="">평단협위원회</a>
                                    </li>
                                    <li>
                                        <a href="">청소년위원회</a>
                                    </li>
                                    <li>
                                        <a href="">소공동체</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">상하소식</a>
                                <ul class="depth2">
                                    <li>
                                        <a href="">공지사항</a>
                                    </li>
                                    <li>
                                        <a href="">본당주보</a>
                                    </li>
                                    <li>
                                        <a href="">갤러리</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">신앙생활</a>
                                <ul class="depth2">
                                    <li>
                                        <a href="">공지사항</a>
                                    </li>
                                    <li>
                                        <a href="">본당주보</a>
                                    </li>
                                    <li>
                                        <a href="">갤러리</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
            <div class="content_wrap">
                <section id="visualArea">
                    <div id="visual-box">
                        <div class="slider">
                            <div><img src="image/visual_img01.jpg" alt="상하성모세 성모자상"/></div>
                            <div><img src="image/visual_img02.jpg" alt="상하성모세 성당전경"/></div>
                        </div>
                    </div>
                    <div class="quick_box">
                        <ul>
                            <li>
                                <a href="http://sanghacasuwon.or.kr/g5/bbs/board.php?bo_table=weekly">
                                    <div class="qbg01"></div>
                                    <p>주보</p>
                                </a>
                            </li>
                            <li>
                                <a href="sub0401.html">
                                    <div class="qbg02"></div>
                                    <p>미사/성사안내</p>
                                </a>
                            </li>
                            <li>
                                <a href="sub0403.html">
                                    <div class="qbg03"></div>
                                    <p>예비자 입교 안내</p>
                                </a>
                            </li>
                            <li>
                                <a href="http://sanghacasuwon.or.kr/g5/bbs/board.php?bo_table=homily">
                                    <div class="qbg04"></div>
                                    <p>신부님 강론</p>
                                </a>
                            </li>
                            <li>
                                <a href="sub0106.html">
                                    <div class="qbg05"></div>
                                    <p>셔틀버스 운행 안내</p>
                                </a>
                            </li>
                            <li>
                                <a href="sub0107.html">
                                    <div class="qbg06"></div>
                                    <p>오시는 길</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </section>
                <section id="laArea">
                    <div class="gallery">
                        <div class="pic_lt">
                            <?
                                 echo latest("pic_basic", "gallery", 3, 25);
                            ?>
                        </div>
                    </div>
                    <div class="notice">
                        <?
                            echo latest("Nimple_basic", "notice", 5, 34);
                        ?>
                    </div>
                </section>
                <section id="fambanArea">
                    <div class="ban_wrap">
                        <ul>
                            <li><a href="http://www.casuwon.or.kr/casuwon/" target="_blank"><img src="image/fam_suwon.jpg" alt="수원교구"></a></li>
                            <li><a href="http://v1.casuwon.or.kr/bbs/?pid=main" target="_blank"><img src="image/fam_suwon01.jpg" alt="제1대리구"></a></li>
                            <li><a href="http://www.cbck.or.kr/" target="_blank"><img src="image/banner05.jpg" alt="한국천주교주교회의"></a></li>
                            <li><a href="http://www.catholic.or.kr/" target="_blank"><img src="image/fam_good.jpg" alt="굿뉴스"></a></li>
                            <li><a href="http://web.pbc.co.kr/CMS/index.php" target="_blank"><img src="image/fam_cpbc.jpg" alt="평화방송"></a></li>
                            <li><a href="http://www.catholictimes.org" target="_blank"><img src="image/fam_news.jpg" alt="가톨릭신문"></a></li>
                            <li><a href="http://www.phfs.co.kr" target="_blank"><img src="image/fam_peace.jpg" alt="평화상조"></a></li>
                            <li><a href="http://www.pauline.or.kr/" target="_blank"><img src="image/fam_paul.jpg" alt="성바오로딸수도회"></a></li>
                            <li><a href="http://uus.pauline.or.kr/" target="_blank"><img src="image/fam_pauline.jpg" alt="성바오로딸수도회시청각통신성서교육원"></a></li>
                            <li><a href="https://www.mariasarang.net/" target="_blank"><img src="image/fam_love.jpg" alt="마리아사랑넷"></a></li>
                            <li><a href="http://cyberbible.casuwon.or.kr/" target="_blank"><img src="image/fam_school.jpg" alt="사이버성경학교"></a></li>
                            <li><a href="http://www.clak.or.kr/" target="_blank"><img src="image/fam_council.jpg" alt="한국천주교평신도사도직단체협의회"></a></li>
                            <li><a href="http://www.godislove.or.kr" target="_blank"><img src="image/fam_young.jpg" alt="가톨릭청년성서모임"></a></li>
                            <li><a href="http://www.catholicshop.or.kr/" target="_blank"><img src="image/fam_teen.jpg" alt="청소년국장터"></a></li>

                        </ul>
                    </div>
                </section>
            </div> <!--content wrap-->

        </div>
        <!--wrapper_inner-->
        <!--footer Start-->
        <?php
        include_once('footer.php');
        ?>
        <!--//footer End-->
        <!--layer popup Start-->


<div id="layer_popup">
    <h2>팝업레이어 알림</h2>
    <div id="hd_pops_1" class="hd_pops">
        <div class="hd_pops_con" style="width:544px;height:725px">
            <p><img src="http://sanghacasuwon.or.kr/g5/data/editor/2002/4a5d930e69095f1171e818c3af756cfa_1582461294_8261.png" title="4a5d930e69095f1171e818c3af756cfa_1582461294_8261.png" alt="4a5d930e69095f1171e818c3af756cfa_1582461294_8261.png"><br style="clear:both;">&nbsp;</p><p>&nbsp;</p>        </div>
        <div class="hd_pops_footer">
            <button id="closeBtn" class="hd_pops_reject hd_pops_1" style="display: block;"><strong>24</strong>시간 동안 다시 열람하지 않습니다.</button>
            <button class="hd_pops_close hd_pops_1">닫기</button>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        //동영상 팝업 닫기
        $(".video_popup .close").on("click", function(){
            $(".video_popup").remove()
        })

        var $menuBtn = $("#header .nav_open_btn");
        var menuState = false;
        var $gnbM = $(".all_menu");
        var $gnbMBg = $('.bg_overlay');

        $menuBtn.click(function  () {
            if ( menuState ) {
                menuClose();
                menuState = false;
                $(this).removeClass("active");
            }else {
                menuOpen();
                menuState = true;
                $(this).addClass("active");
            }
            return false;

        });

        /* 메뉴열기 */
        function menuOpen () {
            $gnbM.addClass("open");
            $gnbMBg.addClass("active");
        }
        /* 메뉴닫기 */
        function menuClose () {
            $gnbM.removeClass("open");
            $gnbMBg.removeClass("active");
        }
    });
</script>
    <script>
        $("#closeBtn").click(function () {
            setCookie("showCookies", "N", 1); //1일동안 유지되는 쿠키 생성
            $('#layer_popup').hide(); // 레이어 감춤
        });

        if (getCookie("showCookies") != "N") {
            $("#layer_popup").show(); // showCookies 라는 이름의 쿠키 값이 "N" 이 아니면 레이어 보여줌
        }

        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + "; " + expires + '; Path=/;';
        }

        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1);
                if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
            }
            return "";
        }

        function delete_cookie(name) {
            document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        }
    </script>
    </body>
</html>
