<meta charset="UTF-8">
<title>::: 상하성당 :::</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!--검색최적화-->
<meta name="robots" content="ALL" />
<meta name="robots" content="index,follow" />
<meta name="title" content="상하성당">
<meta name="description" content="상하성당 홈페이지" />
<meta name="keywords" content="상하성당,상하성모세성당,상하동성당,성모세성당,상하성모세,수원교구 상하성당,수원교구 상하동성당">
<meta property="og:type" content="website" />
<meta property="og:title" content="::: 상하성당 :::" />
<meta property="og:description" content="::: 상하성당 :::" />
<meta property="og:url" content="https://sangha.casuwon.or.kr/" />
<meta name="naver-site-verification" content="c5e1cf90449931ce7d5cbd84c6f984de43ad2980"/>
<link rel="canonical" href="http://sangha.casuwon.or.kr/">
<!--스타일시트-->
<link rel="stylesheet" href="../../css/style.css"/>
<link rel="stylesheet" href="../../css/default.css"/>
<link rel="stylesheet" href="../../css/content.css"/>
<link rel="stylesheet" href="../../css/responsive.css"/>
<link rel="stylesheet" href="../../css/jquery.bxslider.css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="../../js/jquery.bxslider.js"></script>
<script src="../../js/common.js"></script>
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
                      <div class="util_menu">
                          <ul>
                              <?php if($is_member){ ?>
                              <li><a href="<?php echo G5_BBS_URL;?>/logout.php">로그아웃</a></li>
                              <?php } else { ?>
                              <li><a href="<?php echo G5_BBS_URL;?>/login.php">로그인</a></li>
                              <?php } ?>
                              <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
                              <li><a href="<?php echo G5_BBS_URL ?>/password_lost.php">ID/PW 찾기</a></li>

                          </ul>
                      </div>
                    </div>
                </div>
                <nav>
                    <div class="nav_inner">
                        <div class="logo">
                            <a href="../../index.html" title="상하성당"><img src="../../image/sangha_logo.png" alt="성모세성당로고" /></a>
                        </div>
                    </div>
                    <div id="topMenu">
                        <h2>메인메뉴</h2>
                        <ul class="main_menu">
                            <li>
                                <a href="http://sanghacasuwon.or.kr/g5/bbs/board.php?bo_table=free" title="">상하마당</a>
                                <div class="submenu">
                                    <ul style='width:430px; margin-left:260px;'>
                                        <!--<li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=free">자유게시판</a></li>-->
                                        <li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=reference">자료실</a></li>
                                        <li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=companion">교우업체소개</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="../../sub0401.html" title="">신앙생활</a>
                                <div class="submenu">
                                    <ul style='width:605px;  margin-left: 100px;'>
                                        <li><a href="../../sub0401.html">미사 및 성사 안내</a></li>
                                        <li><a href="../../sub0403.html">예비신자교리안내</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="http://sanghacasuwon.or.kr/g5/bbs/board.php?bo_table=notice" title="">상하소식</a>
                                <div class="submenu">
                                    <ul style='width:530px; margin-left:100px;'>
                                        <li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=notice">공지사항</a></li>
                                        <li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=weekly">본당주보</a></li>
                                        <li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=gallery">갤러리</a></li>
                                        <li><a href="http://sangha.casuwon.or.kr/g5/bbs/board.php?bo_table=oblation">봉헌작품갤러리</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="../../sub0201.html" title="">상하공동체</a>
                                <div class="submenu">
                                    <ul style='width:530px; margin-left:60px;'>
                                        <li><a href="../../sub0201.html">사목평의회</a></li>
                                        <li><a href="../../sub0202.html">제분과위원회</a></li>
                                        <li><a href="../../sub0203.html">평단협위원회</a></li>
                                        <li><a href="../../sub0204.html">청소년위원회</a></li>
                                        <li><a href="../../sub0205.html">소공동체</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="../../sub0101.html" title="">성당소개</a>
                                <div class="submenu">
                                    <ul style='width:720px; margin-left: -76px;'>
                                        <li><a href="../../sub0101.html">본당소개</a></li>
                                        <li><a href="../../sub0102.html">주보성인</a></li>
                                        <li><a href="../../sub0103.html">신부님과 수녀님</a></li>
                                        <li><a href="../../sub0104.html">본당연혁</a></li>
                                        <li><a href="../../sub0105.html">사무실안내</a></li>
                                        <li><a href="../../sub0106.html">셔틀버스운행안내</a></li>
                                        <li><a href="../../sub0107.html">오시는 길</a></li>
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
                    <p class="sub_tit">상하성당 홈페이지 방문을 환영합니다</p>
                </div>
                <div class="member_join">
