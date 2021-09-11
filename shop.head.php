<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 
include_once(THEMA_PATH.'/assets/thema.php');
include_once(G5_LIB_PATH.'/apms.account.lib.php');

?>

<style>
    #title_banner{ 
        background : url(../../theme/basic/img/celly_bg.png) fixed;
        background-size: cover;
        color: white;
    }    
    .gnb_btn_deco { display:inline-block; width:60px; text-align:center; margin-top: -5px; border-radius: 40px;}
    .gnb_btn_deco:hover {     transition: all 350ms cubic-bezier(0.86, 1, 0.07, 1); opacity: 0.9;}

    #d_gnb li > a {
    font-size: 15px;
    }
</style>

<!--
                    <form name="tsearch2" method="get" action="/shop/search_in.php" role="form" class="form">

                        <li class="top_ser" style="margin-left:250px;">
                            <input type="text" name="stx2" value="<?php echo $stx2;?>" placeholder="셀러검색">
                        </li>
                        <li class="top_ser2" style="margin-left:430px;">
                            <input type="image" src="<?php echo THEMA_URL; ?>/assets/img/top_ser_ico.png" alt="검색">

                        </li>
                    </form>

                    /shop/list.php?ca_id=c9 //공동구매


                    <?php if($member['as_marketer'] == "1") { ?>
                    <a href="<?php echo G5_BBS_URL ?>/profile.php?mb_id=<?php echo $member['mb_id'];?>">
                        <?php } else { ?>
                        <a href="<?php echo $at_href['menu'];?>" onclick="sidebar_open('sidebar-user');">
                            <?php } ?>
                            <b><?php echo $member['mb_nick'];?></b>
                        </a>
                    </a>


                    <li><a href="<?php echo $at_href['logout'];?>">로그아웃</a></li>
                    <li><a href="<?php echo $at_href['login'];?>">로그인</a></li>
                    <li><a href="<?php echo $at_href['reg'];?>">회원가입</a></li>
                    <li><a href="/bbs/member_confirm.php?url=register_form.php">정보수정</a></li>
                    <li><a href="/shop/cart.php">장바구니</a></li>
                    <li><a href="/shop/orderinquiry.php">주문조회</a></li>
                    <li><a href="/bbs/faq.php">FAQ</a></li>


                    <li class="">
                        <a href="javascript:;" onclick="sidebar_open('sidebar-response');" class="sh-side-options-item sh-side-options-item-trigger-demos sh-accent-color" style="padding:0px">
                            <img src="<?php echo THEMA_URL; ?>/assets/img/top_time_ico.png" alt="알림">
                            <b class="top_dot" <?php echo ($member['response'] || $member['memo']) ? 'style="font-size:10px"' : ' style="display:none;"';?>><span><?php echo $member['response'] + $member['memo'];?></span></b>
                        </a>
                    </li>

                            <?php if($member['cart'] || $member['today']) { ?>
                            <b class="top_dot" style="font-size:10px"><span><?php echo number_format($member['cart']);//echo number_format($member['cart'] + $member['today']);?></span></b>
                            <?php } ?>
-->

<!-- 상단 { -->
<div class="top_wrap font-13">
    <div class="div_1400 top_div">

        <div class="top_div_l">
            <!--<ul><a href="<?php echo G5_URL ?>">메인</a></ul>-->
            <!--ul><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice">공지사항</a></ul>-->
            <!--<ul><a href="<?php echo G5_BBS_URL ?>/faq.php">FAQ</a></ul>-->
            
            
            <!--메인에 인플루언서 메뉴 추가-->
            <? $request_uri = $_SERVER['REQUEST_URI'];?>
            <? if($request_uri=="/influencer.php"){?>
            <ul class="index_seller_menu">
                <li class="on"><a href="javascript:influ('in');" >인플루언서 <span>▼</span></a></li>
                <li><a href="javascript:influ('item');">아이템</a></li>
            </ul>
            <?}else if($request_uri=="/"){?>
            <ul class="index_seller_menu">
                <li><a href="javascript:influ('in');">인플루언서</a></li>
                <li class="on"><a href="javascript:influ('item');">아이템 <span>▼</span></a></li>
            </ul>
            <?}?>
            <!--<div class="cb"></div>-->
            <style>
                .index_seller_menu li{display: block;background: #e6e6e6;float: left;position: relative;top:-7px;height: 37px;text-align: center;width:125px;padding-top: 7px;}
                
                
                .index_seller_menu li a{color:#868686;display: block;width: 100%;}
                .index_seller_menu li a span{font-size:10px;position: relative;top:-1px;padding-left: 5px;}
                .index_seller_menu li.on{background: #8599d8}
                .index_seller_menu li.on a{color:#fff;}
            </style>
            <script>
                function getCookie(name) {
                  let matches = document.cookie.match(new RegExp(
                    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
                  ));
                  return matches ? decodeURIComponent(matches[1]) : undefined;
                }
                
                var url_pname = document.location.pathname; 
                //if(getCookie("influenser") == undefined){
                //    document.cookie="influenser = no";    
                //}
                //if(url_pname == "/"){
                    //쿠키확인해서 페이지 이동
                //    if(getCookie("influenser") == "yes"){
                //        location.href="/influencer.php";
                //    }else{
                //        console.log(1);
                //    }
                //}
                function influ(val){
                    if(val=="in"){
                        //document.cookie="influenser = yes";
                        location.href="/influencer.php";
                    }else if(val=="item"){
                        //document.cookie="influenser = no";     
                        location.href="/";
                    }
                }
            </script>
            <!--메인에 인플루언서 메뉴 추가-->
        </div>
        
        
        
        

        <div class="top_div_r">
            <?php if ($is_member) {  ?>
            <ul class="top_profile">
                <li class="top_profile_img"><a href="<?php echo $at_href['myphoto'];?>" class="win_memo" title="사진등록"><?php echo get_member_profile_img($member['mb_id']); ?></a></li>
                <li>
                    <span class="font-b"><?php echo $member['mb_nick'] ?></span>님 
                    
                    <?php if($is_admin) { ?>
                    <span class="font-b main_color">(관리자)</span>
                    <?php } else { ?>
                        <?php if($member['partner']) { ?>
                            <?php if($member['as_marketer'] == "1") { ?>
                                <span class="font-b main_color">(셀러)</span>
                            <?php } else if($member['as_partner'] == "1") { ?>
                                <span class="font-b main_color">(공급사)</span>
                            <?php } else { ?>
                                <span class="font-b main_color">(파트너)</span>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                </li>
                <li class="top_point font-b letter-05">
                    <a href="<?php echo G5_BBS_URL ?>/point.php" class="main_color d_sLightBox iframe"><?php echo number_format($member['mb_point']); ?>P</a>
                </li>
                <?
                    if($member['as_marketer']){
                    $account1 = array();
                    $account1 = apms_balance_sheet($member['mb_id'], 1);
                ?>
                <li class="top_point font-b letter-05 sub_color">
                    <a href="<?php echo G5_SHOP_URL ?>/partner/?ap=mpaylist" style="color:#ff6699">
                    셀러수익 <?php echo number_format($account1['possible'] );?>원
                    </a>
                </li>
                <?php } ?>
                
                <?
                    if($member['as_partner']){
                    $account2 = array();
                    $account2 = apms_balance_sheet($member['mb_id']);
                ?>
                <li class="top_point font-b letter-05">
                    <a href="<?php echo G5_SHOP_URL ?>/partner/?ap=paylist" style="color:#ff6699">
                    공급사수익 <?php echo number_format($account2['possible']);?>원
                    </a>
                </li>
                <?php } ?>
                
                
                <div class="cb"></div>
            </ul>
            <?php } else { ?>
            <ul class="top_profile">
                <li class="top_profile_img"><a href="#"><img src="<?php echo G5_URL ?>/2021/image/avatar.svg"></a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인 후 이용해주세요.</a></li>
                <div class="cb"></div>
            </ul>
            <?php } ?>
            

            
            <?php if($member['as_partner'] || $member['as_marketer']){ ?>
            
            <dd class="top_gap"></dd>
            <ul class="mt-20 m_ul_f">
                <a href="/bbs/profile.php?mb_id=<?php echo $member['mb_id'];?>" class="m_color" title="마이샵">
                    <span class="material-icons">storefront</span>
                </a>
            </ul>
            <ul class="mt-20 m_ul">
                <a href="<?php echo $at_href['myshop'];?>" class="m_color" title="셀러존">
                    <span class="material-icons">store_mall_directory</span>
                </a>
            </ul>

            <?php }?>
            
            <?php if ($is_member) {  ?>
            <?php
                $m_count = $member['as_memo'];
            ?>
            <ul class="top_msg" style="margin-left:18px;">
                <a href="<?php echo $at_href['menu'];?>" class="gnb_bar_btn sh-side-options-item-trigger-demos" onclick="sidebar_open('sidebar-response'); return false;" title="받은알림">
                <li class="top_msg_bell">
                    <span class="material-icons top_msg_bell_img">mail_outline</span>  
                    <?php if($m_count > 0) { ?>
                    <span class="top_msg_count font-roboto-900 font-11"><?php echo $m_count ?></span>
                    <?php } ?>
                </li>
                </a>
            </ul>
            <?php } ?>
            


            <dd class="top_gap"></dd>
            <ul class="mt-20">
                <a href="<?php echo G5_BBS_URL ?>/introduce.php">
                    <!--<img src="/data/log/icon_guide2.png"/>-->
                    <!--<span style="color:#693db0;">이용가이드</span>-->
                    <span class="material-icons" style="color:#693db0; font-size:22px;">class</span>
                    <span style="color:#693db0; vertical-align: 6.5px;">이용가이드</span>
                </a>
            </ul>
            <ul class="mt-20"><a href="<?php echo G5_BBS_URL ?>/faq.php">FAQ</a></ul>
            <ul class="mt-20"><a href="<?php echo G5_BBS_URL ?>/qalist.php">1:1문의</a></ul>
            <ul class="mt-20"><a href="<?php echo G5_SHOP_URL; ?>/cart.php">장바구니</a></ul>
            <ul class="mt-20"><a href="<?php echo G5_SHOP_URL; ?>/orderinquiry.php">주문조회</a></ul>
            <?php if ($is_member) {  ?>
            <ul class="mt-20"><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></ul>
            <ul class="mt-20"><a href="<?php echo G5_BBS_URL ?>/logout.php" class="font-b">로그아웃</a></ul>
            <?php } else { ?>
            <ul class="mt-20"><a href="<?php echo G5_BBS_URL ?>/login.php" class="font-b">로그인</a></ul>
            <!--<ul class="mt-20"><a href="<?php echo G5_BBS_URL ?>/register.php" class="font-b">회원가입</a></ul>-->
            <?php } ?>
            
            
            <div class="cb"></div>
        </div>
        <div class="cb"></div>

    </div>
</div>
<!-- } -->



<!-- GNB { -->
<div class="gnb_wrap" id="gnb">
    <div class="div_1400 gnb_div">
        <ul class="gnb_ci"><a href="<?php echo G5_URL?>"><img src="<?php echo G5_URL?>/2021/image/ci_pc.png"></a></ul>
        <ul class="gnb_dd">

            <div class="d_gnb_wrap">
                <ul id="d_gnb" style="margin-left:37px;">


                            <?php
                            $menu_sql = "select * from g5_menu where me_use='1' order by me_order desc";
                            $menu_result = sql_query($menu_sql);
                        
                            for($i=0;$row_menu=sql_fetch_array($menu_result);$i++){
                            ?>

                    <li>


                    <?php if($row_menu['me_name'] == "ADULT") { ?>
                        <a href="<?php echo $row_menu['me_link']; ?>" target="_<?php echo $row_menu['me_target']; ?>" class="font-b" style="color:red;"><?php echo $row_menu['me_name'] ?></a>
                    <?php } else if($row_menu['me_name'] == "시크릿") { ?>
                        <a href="<?php echo $row_menu['me_link']; ?>" target="_<?php echo $row_menu['me_target']; ?>" class="font-b gnb_btn_deco" id="secret" style="color: white; padding: 6px 10px; background:linear-gradient(45deg, #858ad8 0, #8599d8 100%);"><?php echo $row_menu['me_name'] ?></a>
                        <span id="secret_msg" style="display:none; position: absolute; margin-top: -60px; left:-38px; z-index: 999; background-color: white; width: 140px; text-align:center; color: #8B00FF" >인플루언서 전용 복지물</span>
                    <?php } else if($row_menu['me_name'] == "체험") { ?>
                        <a href="<?php echo $row_menu['me_link']; ?>" target="_<?php echo $row_menu['me_target']; ?>" class="font-b gnb_btn_deco" style="color: white; padding: 6px 10px; background:linear-gradient(45deg, #4098b3 0, #62c5d6 100%); margin-left:-8px;"><?php echo $row_menu['me_name'] ?></a>
                    <?php } else { ?>
                        <a href="<?php echo $row_menu['me_link']; ?>" target="_<?php echo $row_menu['me_target']; ?>" class="font-b"><?php echo $row_menu['me_name'] ?></a>
                    <?php } ?>

                                <!--
                                <?php
                                $k = 0;
                                foreach( (array) $row['sub'] as $row2 ){
                                    if( empty($row2) ) continue;
                                    if($k == 0)
                                        echo '<div><dl>'.PHP_EOL;
                                ?>
                                        <dd><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="font-m"><?php echo $row2['me_name'] ?></a></dd>
                                <?php
                                $k++;
                                }

                                if($k > 0)
                                    echo '</dl></div>'.PHP_EOL;
                                ?>
                                -->

                    </li>
                    <?php

                            }

                            if ($i == 0) {  ?>
                    <a href="#" class="font-m">등록된 메뉴가 없습니다.</a>
                    <?php } ?>

                </ul>
            </div>


        </ul>

        <ul class="gnb_bar">
            <button type="button" href="<?php echo $at_href['menu'];?>" onclick="sidebar_open('sidebar-user'); return false;" class="gnb_bar_btn sh-side-options-item-trigger-demos">
                <span class="material-icons">notes</span>
            </button>
        </ul>

        <ul class="gnb_sch">
            <form name="frmsearch1" onsubmit="return search_submit(this);">
                <li><input type="text" class="gnb_sch_inp" name="q" value="<?php echo stripslashes(get_text(get_search_string($q))); ?>" required placeholder="검색어 입력"></li>
                <li><button type="submit" class="gnb_sch_btn font-r" style="border-radius:0px;" value="상품검색" onclick="javascript:form.action='<?php echo G5_SHOP_URL; ?>/search.php';">상품검색</button></li>
                <li><button type="submit" class="gnb_sch_btn2 font-r" style="border-radius:0px;" value="셀러검색" onclick="javascript:form.action='<?php echo G5_SHOP_URL; ?>/search_in.php';">셀러검색</button></li>
                <div class="cb"></div>
            </form>
            <script>
                function search_submit(f) {
                    if (f.q.value.length < 2) {
                        alert("검색어는 두글자 이상 입력해주세요.");
                        f.q.select();
                        f.q.focus();
                        return false;
                    }
                    return true;
                }
            </script>
        </ul>



        <div class="cb"></div>

    </div>

<!-- 인플루언서 아이템 모바일-->
<div class="influ_gnb_m clearfix">
    <? if($request_uri=="/influencer.php"){?>
            <ul class="index_seller_menu">
                <li class="on"><a href="javascript:influ('in');" >인플루언서 <span>▼</span></a></li>
                <li><a href="javascript:influ('item');">아이템</a></li>
            </ul>
            <?}else if($request_uri=="/"){?>
            <ul class="index_seller_menu">
                <li><a href="javascript:influ('in');">인플루언서</a></li>
                <li class="on"><a href="javascript:influ('item');">아이템 <span>▼</span></a></li>
            </ul>
            <?}?>
</div>
<style>
    .influ_gnb_m{display: none;margin-top:20px;padding-left: 20px;}
    @media(max-width:1200px){
        .influ_gnb_m{display: block;}
    }
    .swiper-button-prev::after, .swiper-button-next::after {
        content:'' !important;
        
    }
</style>
<script>
    $(function(){
        $(window).scroll(function(){
            if($(window).width()<1200){
                if($(window).scrollTop()>0 ){
                    $(".influ_gnb_m").hide();
                }else{
                    $(".influ_gnb_m").show();
                }
            }
        });
        $(window).resize(function(){
            if($(window).width()>1200){
               $(".influ_gnb_m").hide();
            }else{
                $(".influ_gnb_m").show();
            }
        });
    });
</script>
<!-- 인플루언서 아이템 모바일-->

    <div id="sub_cat" class="mobiles">

        <div class="swiper-container swiper-container_cat">
            <div class="swiper-wrapper">


                <?php
                        $menu_sql = "select * from g5_menu where me_use='1' order by me_order desc";
                        $menu_result = sql_query($menu_sql);
                        
                        for($i=0;$row_menu=sql_fetch_array($menu_result);$i++){
                        ?>
                        <?php if($row_menu['me_name'] == "ADULT") { ?>
                            <div class="swiper-slide swiper-slide_cat" style="padding-right:10px" onclick="location.href='<?php echo $row_menu['me_link']; ?>';">
                                <div class="font-b letter-05 font-14" style="color: red;"><?php echo $row_menu['me_name'] ?></div>
                            </div>
                        <?php } else if($row_menu['me_name'] == "시크릿") { ?>
                            <div class="swiper-slide swiper-slide_cat" style="padding-right:10px" onclick="location.href='<?php echo $row_menu['me_link']; ?>';">
                                <div class="font-b letter-05 font-14 gnb_btn_deco" style="color: white; padding: 6px 10px; background:linear-gradient(45deg, #60269e 0, #8965e0 100%);"><?php echo $row_menu['me_name'] ?></div>
                            </div>
                        <?php } else if($row_menu['me_name'] == "체험") { ?>
                            <div class="swiper-slide swiper-slide_cat" style="padding-right:10px; margin-left:-12px;" onclick="location.href='<?php echo $row_menu['me_link']; ?>';">
                                <div class="font-b letter-05 font-14 gnb_btn_deco" style="color: white; padding: 6px 10px; background:linear-gradient(45deg, #4098b3 0, #62c5d6 100%);"><?php echo $row_menu['me_name'] ?></div>
                            </div>
                        <?php } else { ?>
                            <div class="swiper-slide swiper-slide_cat" style="padding-right:10px" onclick="location.href='<?php echo $row_menu['me_link']; ?>';">
                                <div class="font-b letter-05 font-14"><?php echo $row_menu['me_name'] ?></div>
                            </div>
                        <?php } ?>

                <?php
                    $i++;
                    }
                ?>

            </div>

            <button class="swiper-button-next swiper-button-next_cat material-icons" style="content:none; color:black;">keyboard_arrow_right</button>
            <button class="swiper-button-prev swiper-button-prev_cat material-icons" style="content:none; color:black;">keyboard_arrow_left</button>

        </div>

        <script>
            var swiper = new Swiper('.swiper-container_cat', {

                slidesPerView: 'auto', //가로갯수
                centeredSlides: false, //중앙정렬
                spaceBetween: 0, //간격
                touchRatio: 1, //드래그 가능여부
                navigation: {
                    nextEl: '.swiper-button-next_cat',
                    prevEl: '.swiper-button-prev_cat',
                }

                //autoplay: 2500,                             //롤링속도
                //autoplayDisableOnInteraction: true,         //드래그 후 롤링중단
                //loop: true,                                 //반복
            });
        </script>

    </div>

</div>


<script>
    let secret = document.getElementById('secret')
    const secret_msg = document.getElementById('secret_msg')
    secret.addEventListener('mouseover', () => {secret_msg.style.display = 'block'})
    secret.addEventListener('mouseout', () => {secret_msg.style.display = 'none'})

    $('#gnb').d_fixedMenu({
        key: 'c37080',
        top: 0,
        responseObj: null
    });

    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('#gnb').outerHeight();

    $(window).scroll(function(event) {
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 10);

    function hasScrolled() {
        var st = $(this).scrollTop();
        if (Math.abs(lastScrollTop - st) <= delta)
            return;
        if (st > lastScrollTop && st > navbarHeight) {
            $('.gnb_wrap').addClass('gnb_up');
            $('.gnb_ci').addClass('gnb_ci_up');
            $('.gnb_sch').addClass('gnb_sch_up');
            $('.gnb_bar').addClass('gnb_bar_up');
            $('#d_gnb').addClass('d_gnb_up');
            $('#d_gnb li div').addClass('d_gnb_div_up');
            $('#d_gnb li > a').addClass('d_gnb_li_up');
        } else {
            if (st + $(window).height() < $(document).height()) {
                $('.gnb_wrap').removeClass('gnb_up');
                $('.gnb_ci').removeClass('gnb_ci_up');
                $('.gnb_sch').removeClass('gnb_sch_up');
                $('#d_gnb').removeClass('d_gnb_up');
                $('.gnb_bar').removeClass('gnb_bar_up');
                $('#d_gnb li div').removeClass('d_gnb_div_up');
                $('#d_gnb li > a').removeClass('d_gnb_li_up');
            }
        }

        lastScrollTop = st;
    }
</script>

<!-- } -->

<?php if(!defined('_INDEX_')) { ?>
        <?php if($g5['title'] == "시크릿") { ?>
            <div class="sub_tits" id="title_banner">
                <ul class="div_1400 sub_tits_ul font-18 letter-05 text-center" >
                    <span style="font-weight: bold;"><?php echo $g5['title'] ?></span>
                    <div>
                        <p style="margin-top:8px; font-family: 'NotoSansKR Regular'; font-size: 13px">인플루언서 전용 복지몰</p>
                    </div>
                </ul>
            </div>
        <?php } else { ?>
        
            <?php
            $menu_sql = "select * from g5_menu where me_use='1' order by me_order desc";
            $menu_result = sql_query($menu_sql);
            ?>
            <?php
            for($i=0;$row_menu=sql_fetch_array($menu_result);$i++) {
                if($g5['title'] == $row_menu['me_name']) { 
                    $isexist = true;
            ?>
                    <div class="sub_tits">
                        <ul class="div_1400 sub_tits_ul font-bb font-18 letter-05 text-center" ><?php echo $g5['title'] ?></ul>
                    </div>
                <?php } ?>
            <?php } ?>
        <?php } ?>
        <?php if($isexist) { ?>
            <div class="div_1400 sub_wrap" >
        <?php } else { ?> 
            <div class="div_1400 sub_wrap" style="margin-top:0px;">
        <?php } ?>         
        <?php } ?>