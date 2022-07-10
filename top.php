<?php
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
    <link rel="stylesheet" href="css/responsive.css"/>
    <link rel="stylesheet" href="css/jquery.bxslider.css"/>
    <link rel="shortcut icon" href="favicon.ico" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
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
<body class="overflow">
<div class="wrapper">
    <div class="wrapper_inner">
        <div class="m_menu">
            <div class="m_menu_inner">
                <div class="m_nav_util">
                    <ul>
                        <li>
                            <a href="<?php echo G5_BBS_URL;?>/login.php">로그인</a>
                        </li>
                        <li>
                            <a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a>
                        </li>
                    </ul>
                </div>
                <div class="navi_container">
                    <ul class="depth1">
                        <li>
                            <a href="javascript:void(0)">성당소개</a>
                            <ul class="depth2">
                                <li>
                                    <a href="sub0101.html">본당소개</a>
                                </li>
                                <li>
                                    <a href="sub0102.html">주보성인</a>
                                </li>
                                <li>
                                    <a href="sub0103.html">신부님과 수녀님</a>
                                </li>
                                <li>
                                    <a href="sub0104.html">본당연혁</a>
                                </li>
                                <li>
                                    <a href="sub0105.html">사무실안내</a>
                                </li>
                                <li>
                                    <a href="sub0106.html">셔틀버스 운행안내</a>
                                </li>
                                <li>
                                    <a href="sub0107.html">오시는 길</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">상하공동체</a>
                            <ul class="depth2">
                                <li>
                                    <a href="sub0206.html">사목방침</a>
                                </li>
                                <li>
                                    <a href="sub0201.html">사목평의회</a>
                                </li>
                                <li>
                                    <a href="sub0202.html">제분과위원회</a>
                                </li>
                                <li>
                                    <a href="sub0203.html">평단협위원회</a>
                                </li>
                                <li>
                                    <a href="sub0204.html">청소년위원회</a>
                                </li>
                                <li>
                                    <a href="sub0205.html">소공동체</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">상하소식</a>
                            <ul class="depth2">
                                <li>
                                    <a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=notice">공지사항</a>
                                </li>
                                <li>
                                    <a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=weekly">본당주보</a>
                                </li>
                                <li>
                                    <a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=gallery">갤러리</a>
                                </li>
                                <li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=oblation">봉헌작품갤러리</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">신앙생활</a>
                            <ul class="depth2">
                              <li><a href="../../sub0401.html">미사 및 성사 안내</a></li>
                              <li><a href="../../sub0403.html">예비신자교리안내</a></li>
                              <!--<li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=homily" title="신부님강론">신부님 강론</a></li>
                              <li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=missa" target="_blank" title="매일미사">미사방송</a></li>
                              <li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=pleasure" target="_blank" title="매일미사">신앙의 기쁨</a></li>
                              <li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=dailybible" target="_blank" title="매일미사">내 하루의 성경</a></li>-->
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">상하마당</a>
                            <ul class="depth2">
                                <!--<li><a href="http://sanghacasuwon.or.kr/g5/bbs/board.php?bo_table=free">자유게시판</a></li>-->
                                <li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=reference">자료실</a></li>
                                <li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=companion">교우업체소개</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
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
                                <li><a href="http://sangha.casuwon.or.kr/g5/bbs/password_lost.php" onclick="window.open(this.href, '_blank', 'width=500px,height=300px,toolbars=no,scrollbars=no');
                                return false;" id="login_password_lost">ID/PW 찾기</a></li>
                            <?php } ?>

                            <!--<li class="last"><a href="">그룹웨어</a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
            <nav>
                <div class="nav_inner">
                    <div class="logo">
                        <a href="index.html" title="상하성당"><img src="http://sangha.casuwon.or.kr/image/sangha_logo.png" alt="상하성당로고" /></a>
                    </div>
                    <button class="nav_open_btn">
                        <span class="line line1"></span>
                        <span class="line line2"></span>
                        <span class="line line3"></span>
                    </button>
                </div>
                <div id="topMenu">
                    <h2>메인메뉴</h2>
                    <ul class="main_menu">
                        <li>
                            <a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=companion" title="모세마당">상하마당</a>
                            <div class="submenu">
                                <ul style='width:360px; margin-left:294px;'>
                                    <!--<li><a href="http://sanghacasuwon.or.kr/g5/bbs/board.php?bo_table=free">자유게시판</a></li>-->
                                    <li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=reference">자료실</a></li>
                                    <li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=companion">교우업체소개</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="sub0401.html" title="신앙생활">신앙생활</a>
                            <div class="submenu">
                                <ul style='width:700px;  margin-left: 80px;'>
                                  <li><a href="../../sub0401.html">미사 및 성사 안내</a></li>
                                  <li><a href="../../sub0403.html">예비신자교리안내</a></li>
                                  <!--<li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=homily" title="신부님강론">신부님 강론</a></li>
                                  <li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=missa" target="_blank" title="매일미사">미사방송</a></li>
                                  <li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=pleasure" target="_blank" title="매일미사">신앙의 기쁨</a></li>
                                  <li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=dailybible" target="_blank" title="매일미사">내 하루의 성경</a></li>-->
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=notice" title="모세소식">상하소식</a>
                            <div class="submenu">
                                <ul style='width:530px; margin-left:50px;'>
                                    <li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=notice">공지사항</a></li>
                                    <li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=weekly">본당주보</a></li>
                                    <li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=gallery">갤러리</a></li>
                                    <li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=oblation">봉헌작품갤러리</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="sub0206.html" title="상하공동체">상하공동체</a>
                            <div class="submenu">
                                <ul style='width:600px; margin-left:0;'>
                                    <li><a href="sub0206.html" title="사목방침">사목방침</a></li>
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
        </header>

