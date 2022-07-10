<?php
include_once('top.php');
include_once('g5/common.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
?>

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
                            echo latest("Nimple_basic", "notice", 5, 25);
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

        </div><!--wrapper_inner-->
        <footer>
            <div class="ft_menu">
                <div class="ft_inner">
                    <ul>
                        <li><a href="person_data.php" target="_blank">개인정보 취급방침</a></li>
                        <li class="line">|</li>
                        <li><a href="terms.php" target="_blank">이용약관</a></li>
                    </ul>
                </div>
            </div>
            <div class="ft_info">
                <div class="ft_inner">
                    <h2><a href="index.php" title="상하성모세성당"><img src="image/logo_gray.png" alt="상하성모세성당"/></a></h2>
                    <div class="cnt">
                        <p>천주교 수원교구 상하성모세성당(기흥지구)</p>
                        <address>(우) 16996 경기 용인시 기흥구 중부대로 807-14   전화 031-275-9194    팩스 031-275-9195</address>
                        <p class="copyright">Copyright ⓒ 2019 Sangha St.Moses Catholic church. All rights reserved</p>
                    </div>
                </div>
            </div>
        </footer>
     </div> <!--wrapper-->
<script>
    function set_cookie(name,value,expirehours,domain){
        var today = new Date();
        today.setTime(today.getTime() + (60*60*1000*expirehours));
        document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + today.toGMTString() + ";";
        if (domain) {
            document.cookie += "domain=" + domain + ";";
        }
    }
</script>
</body>
</html>
