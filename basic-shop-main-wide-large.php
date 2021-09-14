<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 위젯 대표아이디 설정
$wid = 'SMBWL';

// 게시판 제목 폰트 설정fed23e
$font = 'font-18 en';

// 게시판 제목 하단라인컬러 설정 - red, blue, green, orangered, black, orange, yellow, navy, violet, deepblue, crimson..
$line = 'navy';

$market = 0;
$id = get_session("ss_mb_id");
$sql = " select as_marketer, mb_id from {$g5['member_table']} where mb_id = '{$id}' ";
$row = sql_fetch($sql);
$market = $row['as_marketer'];
$istrue = 0;

if($row['as_marketer'] == 1) {
    $istrue = 1;
}

?>

<style>

    body {
        font-size:17px;
        font-family: 'NotoSansKR',sans-serif;
    }
    
	.widget-index { overflow:hidden; }
	.widget-index .div-title-underbar { margin-bottom:15px; }
	.widget-index .div-title-underbar span { padding-bottom:4px; }
	.widget-index .div-title-underbar span b { font-weight:500; }
	.widget-index h2.div-title-underbar { font-size:22px; text-align:center; margin-bottom:15px; /* 위젯 타이틀 */ }
	.widget-index h2 .div-title-underbar-bold { font-weight:bold; padding-bottom:4px; border-bottom-width:4px; margin-bottom:-3px; }
	.widget-index .widget-box { margin-bottom:40px; }
	.widget-index .widget-img img { display:block; max-width:100%; /* 배너 이미지 */ }
    .pc_banner{display: block;margin-top:-22px;}
    .m_banner{display:none;margin-top:0px; padding-top: 8px;}
    .maintt{position: relative;}
     .brand_more_wrap{text-align: right;position: relative;top:-30px;margin-bottom: 50px;}
    .brand_more_wrap a{margin-right: 20px;padding: 10px 20px;border:1px solid #60269E;width:145px;display: inline-block;text-align: center;}
    .brand_more_wrap a.brand{color:#60269E}
    .brand_more_wrap a.product{color:#fff;background-color: #60269E;}
    .product_more_wrap{text-align: center;margin-bottom: 35px;}
    .product_more_wrap a{background-color: #60269E;color:#fff;padding: 10px 20px;border:1px solid #60269E;}
    .popup-cont { position: absolute; margin-left: 40rem; }
    .popup {
        margin-top:-35px;
        margin-left:95px;
    }
    

    .seller_wrap {
        margin-top:20px;
        margin-bottom:20px;
        padding-bottom:0px;
    }

    @media all and (max-width:1080px) {
        .seller_wrap {
        margin-top:0px;
        margin-bottom:20px;
        padding-bottom:0px;
        }
    }



	@media all and (max-width:767px) {
		.responsive .widget-index .widget-box { margin-bottom:30px; }
        .maintt img,.maintt2 img{width:95%;height:auto;}
        .pc_banner{display: none;}
        .m_banner{display:block;}
        .brand_more_wrap{text-align: center;top:0px;right:-13px;}
        .row {margin-left:0 !important;margin-right:0 !important;}
        .popup-cont { margin-left: 1rem; }
        .popup { margin-left:0px;}
        .seller_wrap {
        margin-top:0px;
        margin-bottom:0px;
        padding-bottom:6px;
        }
	}

    @media all and (max-width:526px) {
        .popup-cont { margin-left: 1rem; }
	}
    
    .popup-close {

        float: right;
    }
</style>


<style>
    .show-pc{display: block;}
    .show-m{display: none;}
    #secret-list{ margin-left:8px; }
    @media all and (max-width:767px) {
        .show-pc{display: none;}
        #secret-list{ margin-left:8px; margin-top:-10px;}
        #secret-list2{ margin-top:-10px;}
    .show-m{display: block;}
    }
</style>


<!--php if(!$_COOKIE["mb_id"]) {  ?> -->
<!--php if(($market == 1) && !($_COOKIE["mb_id"])) {-->
    <?php if(($market == 1) && !($_COOKIE["mb_id"])) {  ?>
        <div class="popup-cont">
            <div class="popup" data-popup="example" style="position:relative; z-index:100; ">
                <div class="popup-inner">
                    <div class="popup-contents" style="border:1px solid #a09f9f;"> 
                        <div>
                            <!--<a id='tagId'><img src="" id="sample"/></a>-->
                            <!--<a href="https://www.cellypick.com/shop/item.php?it_id=1612334026"><img src="/data/banner/image2.png" id="sample"/></a>-->
                            <a href="https://www.cellypick.com/shop/item.php?it_id=1626239504"><img src="/data/banner/banners2.png" id="sample"/></a>
                        </div>
                        <div style="display: inline-block; width:100%; background-color: white">
                            <input id="ck3" type="checkbox" value="1" style="vertical-align: -9%; margin-left: 8px;" />
                            <span>오늘 하루 이 창을 열지 않음</span>
                            
                            <a class="popup-close" data-popup-close="example" href="#" style="width:22px; height:25px; text-align:center; font-weight:bold;">X</a> <!-- 팝업 닫기 버튼입니다 -->
                        </div>
                    
                    </div>
                    
                </div>
            </div>
        </div>
    <?php } else if(($market == 0) && !($_COOKIE["mb_id2"])) { ?>
        <div class="popup-cont">
            <div class="popup" data-popup="example" style="position:relative; z-index:100; ">
                <div class="popup-inner">
                    <div class="popup-contents" style="border:1px solid #a09f9f;"> 
                        <div>
                            <!--<a id='tagId'><img src="" id="sample"/></a>-->
                            <!--<a href="https://www.cellypick.com/shop/item.php?it_id=1612334026"><img src="/data/banner/image2.png" id="sample"/></a>-->
                            <img src="/data/banner/consumer_banner3.png"/>
                        </div>
                        <div style="display: inline-block; width:100%; background-color: white">
                            <input id="ck4" type="checkbox" value="1" style="vertical-align: -9%; margin-left: 8px;" />
                            <span>오늘 하루 이 창을 열지 않음</span>
                            
                            <a class="popup-close" data-popup-close="example" href="#" style="width:22px; height:25px; text-align:center; font-weight:bold;">X</a> <!-- 팝업 닫기 버튼입니다 -->
                        </div>
                    
                    </div>
                    
                </div>
            </div>
        </div>
    <?php } ?>
  
   
 
    











        <!-- 신규 { -->
        <!--
        <div class="new_prd_wrap">
            <div class="div_1400 new_prd_div">
                
                <ul class="new_prd_tit">
                    <li class="font-20 font-b letter-1 new_prd_tit_li01">New Products</li>
                    <li class="font-14 font-r letter-05 color-999 new_prd_tit_li02">셀리픽 신규 상품</li>
                    <li class="new_prd_tit_li03">
                        <a href="<?php echo G5_SHOP_URL ?>/listtype.php?type=3" class="color-000">
                            <span class="material-icons">add</span>
                        </a>
                    </li>
                    <div class="cb"></div>
                </ul>
                
                <ul class="mt-30">
                    
                   <?php //echo apms_widget('new-main3', $wid.'-newmain3'); ?>
                    
                </ul>
                
            </div>
        </div>
        -->

        
        <!-- } -->

        <!-- 리셀러 { -->
        <div class="seller_wrap">
            <div>
                <ul>
                    <!-- a href="<?php echo $at_href['myshop'];?>" -->
					<!--<a href="http://cellystory.co.kr/bbs/register.php">
                        <img src="<?php echo G5_URL ?>/2021/image/seller_bn1.png" class="pcs">
                        <img src="<?php echo G5_URL ?>/2021/image/seller_bn1_mo.png" class="mobiles" style="border-radius:10px;">
                    </a>
                    -->
                        <!-- 
                        <div onclick="location.href='/shop/list.php?ca_id=e9'" id="secret-list2">
                            <img src="<?php echo G5_URL ?>/2021/image/secret_all_2.png" class="pcs">
                            <img src="<?php echo G5_URL ?>/2021/image/secret_all_mobile.png" class="mobiles" style="border-radius:10px;">
                        </div>
                        -->
                    <div class="background-grad" >
                        <a href="https://cellystory.co.kr/bbs/register.php">
                            <div class="padding-to">
                            <img src="/data/front_banner/influencer_first.png" class="margin-33">
                            <img src="/data/front_banner/influencer_second.png" class="margin-80">
                            <img src="/data/front_banner/influencer_button.png" class="margin-200">
                            </div>
                        </a>
                    </div>
                </ul>
                
            </div>
        </div>
        <style>
            .background-grad {
                background: linear-gradient(45deg, #858ad8 0, #8599d8 100%);
                height: 100px; 
                text-align: center;
                
            }

            .padding-to {
                padding-top:25px;
            }

            .margin-33 {
                margin-right:33px;
            }

            .margin-80 {
                margin-right:80px;
            }

            .margin-200 {
                margin-right:200px;
            }

            @media all and (max-width:1228px) {
                .background-grad {
                background: linear-gradient(45deg, #858ad8 0, #8599d8 100%);
                height: auto; 
                text-align: left;
                border-radius:10px;
                }
                .padding-to {
                    padding-top:25px;
                    padding-bottom:25px;
                    
                }

                .margin-33 {
                    margin-left: 8%;
                    display:block;
                }

                .margin-80 {
                    margin-left: 8%;
                    margin-top:2%;
                    display:block;
                }

                .margin-200 {
                    margin-left: 8%;
                    margin-top:2%;
                    display:block;
                }
            }

            @media all and (max-width:1080px) {
                .background-grad {
                background: linear-gradient(45deg, #858ad8 0, #8599d8 100%);
                height: auto; 
                text-align: left;
                border-radius:10px;
                }
                .padding-to {
                    padding-top:25px;
                    padding-bottom:25px;
                }

                .margin-33 {
                    margin-left: 8%;
                }

                .margin-80 {
                    margin-left: 8%;
                    margin-top:2%;
                }

                .margin-200 {
                    margin-left: 8%;
                    margin-top:2%;
                }
            }
            
            @media all and (max-width:767px) { 
                .background-grad {
                background: linear-gradient(45deg, #858ad8 0, #8599d8 100%);
                height: auto; 
                text-align: left;
                border-radius:10px;
                }
                .padding-to {
                    padding-top:25px;
                    padding-bottom:16px;
                }

                .margin-33 {
                    margin-right:39%;
                    width:50%;
                }

                .margin-80 {
                    /*margin-right:33%;*/
                    margin-top:2%;
                    width:75%;
                }

                .margin-200 {
                    margin-top:3%;
                    width:34%;
                    margin-left:8%;
                }
            }

            @media all and (max-width:526px) {
                .background-grad {
                background: linear-gradient(45deg, #858ad8 0, #8599d8 100%);
                height: auto; 
                text-align: left;
                border-radius:10px;
                }
                .padding-to {
                    padding-top:25px;
                    padding-bottom:16px;
                }
                .margin-33 {
                    margin-left:7%;
                    width:50%;
                }
                .margin-80 {
                    margin-left:7%;
                    margin-top:20px;
                    width:75%;
                }
                .margin-200 {
                    margin-top:21px;
                    width:34%;
                    margin-left:7%;
                }
	        }

            
        </style>


        <!-- 인플루언서 초이스 { -->
        <div class="ch_prd_div" style="background-color: #f6f6fc;">
            
            <div class="best_prd_wrap">
                <div class="div_1400 best_prd_div">

                    <ul class="best_prd_tit">
                        <li class="font-20 font-b letter-1 new_prd_tit_li01" style="color:white; background-color:#555555;padding:3px 6px;text-transform: uppercase; font-size:15px;margin-top:2px;">Influencer's Pick</li>
                        <li class="font-14 font-r letter-05 color-999 new_prd_tit_li02" style="margin-left:10px;padding-top:3px;color:#505454;">인플루언서 추천상품</li>
                        <li class="best_prd_tit_li03">
                            <a href="<?php echo G5_SHOP_URL ?>/listtype.php?type=2" class="color-000">
                                <span class="material-icons">add</span>
                            </a>
                        </li>
                        <div class="cb"></div>
                    </ul>

                    <ul class="mt-30">

                        <?php echo apms_widget('new-main4', $wid.'-newmain4'); ?>

                    </ul>

                </div>
            </div>
            
        </div>
        <!-- } -->

        <!-- top10 { -->
        <div class="new_prd_wrap">
            <div class="div_1400 new_prd_div">
                
                <ul class="new_prd_tit">
                    <li class="font-20 font-b letter-1 new_prd_tit_li01" style="color:white; background-color:#555555;padding:3px 6px;text-transform: uppercase; font-size:15px;margin-top:2px;">Top Seller</li>
                    <li class="font-14 font-r letter-05 color-999 new_prd_tit_li02" style="margin-left:10px;padding-top:3px;color:#505454;">셀리픽 판매량 BEST 10</li>
                    <!--
                    <li class="new_prd_tit_li03">
                        <a href="<?php echo G5_SHOP_URL ?>/list.php?ca_id=10" class="color-000">
                            <span class="material-icons">add</span>
                        </a>
                    </li>
                    -->
                    <div class="cb"></div>
                </ul>
                
                <ul class="mt-30">
                    
                   <?php echo apms_widget('new-main5', $wid.'-newmain5'); ?>
                    
                </ul>
                
            </div>
        </div>
        <!-- } -->
        
        
       <!-- Top Earnings { -->
        <div class="new_prd_wrap">
            <div class="div_1400 new_prd_div">
                
                <ul class="new_prd_tit">
                    <li class="font-20 font-b letter-1 new_prd_tit_li01" style="color:white; background-color:#555555;padding:3px 6px;text-transform: uppercase; font-size:15px;margin-top:2px;">Top Earnings</li>
                    <li class="font-14 font-r letter-05 color-999 new_prd_tit_li02" style="margin-left:10px;padding-top:3px;color:#505454;">셀러 판매 수익률 TOP 10</li>
                    
                    <div class="cb"></div>
                </ul>
                
                <ul class="mt-30">
                    
                   <?php echo apms_widget('new-main6', $wid.'-newmain6 '); ?>
                    
                </ul>
                
            </div>
        </div>
        <!-- } -->
        
        <!-- Top Pick{ -->
        <div class="new_prd_wrap">
            <div class="div_1400 new_prd_div">
                
                <ul class="new_prd_tit">
                    <li class="font-20 font-b letter-1 new_prd_tit_li01" style="color:white; background-color:#555555;padding:3px 6px;text-transform: uppercase; font-size:15px;margin-top:2px;">Top Pick</li>
                    <li class="font-14 font-r letter-05 color-999 new_prd_tit_li02" style="margin-left:10px;padding-top:3px;">셀러들의 Pick BEST 10</li>
                    
                    <div class="cb"></div>
                </ul>
                
                <ul class="mt-30">
                    
                   <?php echo apms_widget('new-main7', $wid.'-newmain7 '); ?>
                    
                </ul>
                
            </div>
        </div>
        <!-- } -->
        

        
            <div class="div_1400 main_banner_div">
                <?php echo apms_widget('new-main-banner1', $wid.'-bn1');?>
            </div>

    

           
<script>
    window.onload=function(){
    ($(function() { 
    //jQuery(document).ready(function ($) {
	   
        $('[data-popup-open]').on('click', function(e) { 
		    var targeted_popup_class = jQuery(this).attr('data-popup-open'); 
		    $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350); 
		
		    e.preventDefault(); 
        }); 
	    $('[data-popup-close]').on('click', function(e) { 
		    var targeted_popup_class = jQuery(this).attr('data-popup-close'); 
		    $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350); 
		    e.preventDefault(); 
        }); 

        /*
        function randomNumber(min, max) { 
            return Math.floor(Math.random() * (max - min) + min);
        } 
        */
        
        //alert(randomNumber(1,5));
        //randomimage = "/data/banner/banners" + randomNumber(1,5) +".png";
        //document.getElementById('sample').src=randomImage;
        
        /*
        imgArray[0] = "/data/banner/banners1.png";
        imgArray[1] = "/data/banner/banners2.png";
        imgArray[2] = "/data/banner/banners3.png";
        imgArray[3] = "/data/banner/banners4.png";
        imgArray[4] = "/data/banner/banners5.png";

        function showImage() {
            var imgNum = randomNumber(1,5);
            var objImg = document.getElementById("introImg");
            objImg.src = imgArray[imgNum];
        }
        */

        //alert('123123');
        //if($('#ck3').is(':checked')){
        //    alert("hello");
        //}
        //if($("input:checkbox[name=ck3]").is(":checked") == true) {
        //    alert('hello');
        //}
        
        $("#ck3").change(function(){
            if($("#ck3").is(":checked")){
                //alert("체크박스 체크했음!");
                var date = new Date();
                date.setTime(date.getTime() + 24 * 60 * 60 * 1000);
                document.cookie = 'mb_id' + '=' + 123 + ';expires=' +date.toUTCString() + ';path=/'
                //set_session('ss_mb_id', $mb['mb_id']);
            } else {
                //alert("체크박스 체크 해제!");
            }
        });

        $("#ck4").change(function(){
            if($("#ck4").is(":checked")){
                //alert("체크박스 체크했음!");
                var date = new Date();
                date.setTime(date.getTime() + 24 * 60 * 60 * 1000);
                document.cookie = 'mb_id2' + '=' + 123 + ';expires=' +date.toUTCString() + ';path=/'
                //set_session('ss_mb_id', $mb['mb_id']);
            } else {
                //alert("체크박스 체크 해제!");
            }
        });
        
        // alert(randomNumber(1,5));
        
        /*
        var random_number = randomNumber(1,6);

        var randomImage = "/data/banner/banners" + random_number +".png";
        if(!(randomImage == null)) {
            document.getElementById('sample').src = randomImage;
        }
        var imgArray = new Array();

        imgArray[0] = "https://www.cellypick.com/shop/item.php?it_id=1627009092";
        imgArray[1] = "https://www.cellypick.com/shop/item.php?it_id=1626239504";
        imgArray[2] = "https://www.cellypick.com/shop/item.php?it_id=1626048741";
        imgArray[3] = "https://www.cellypick.com/shop/item.php?it_id=1604567473";
        imgArray[4] = "https://www.cellypick.com/shop/item.php?it_id=1604566973";

        $("#tagId").attr("href",imgArray[random_number -1]);
        */
        
    })


    )};
    
    function randomNumber(min, max) { 
        return Math.floor(Math.random() * (max - min) + min);
    } 
    

</script>
