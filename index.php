<!---Vui long khong xoa dong nay de ton trong tac gia.
Coder by Nguyen Trung Nhan
Email : trungnhan21.12@gmail.com
-->

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trực Tuyến Radio<?php  if(isset($_GET['tinh'])){ 
$oiu = $_GET['tinh'];
 if ($oiu == "dongthap") {
	 echo ' - Đồng Tháp';
	 }elseif ($oiu == "angiang") 
	 {echo ' - An Giang';}
	 elseif ($oiu == "baclieu") 
	 {echo ' - Bạc Liêu';}
	 elseif ($oiu == "bentre") 
	 {echo ' - Bến Tre';}
	 elseif ($oiu == "cantho") 
	 {echo ' - Cần Thơ';}
	 elseif ($oiu == "haugiang") 
	 {echo ' - Hậu Giang';}
	 elseif ($oiu == "kiengiang") 
	 {echo ' - Kiên Giang';}
	 elseif ($oiu == "soctrang") 
	 {echo ' - Sóc Trăng';}
	 elseif ($oiu == "tiengiang") 
	 {echo ' - Tiền Giang';}
	 elseif ($oiu == "travinh") 
	 {echo ' - Trà Vinh';}
	 elseif ($oiu == "vinhlong") 
	 {echo ' - Vĩnh Long';}
	 elseif ($oiu == "vov1") 
	 {echo ' - VOV';}
	 elseif ($oiu == "dongnai") 
	 {echo ' - Đồng Nai';}
	 elseif ($oiu == "lamdong") 
	 {echo ' - Lâm Đồng';}
	 elseif ($oiu == "binhphuoc") 
	 {echo ' - Bình Phước';}
	 elseif ($oiu == "tayninh") 
	 {echo ' - Tây Ninh';}
	 elseif ($oiu == "vungtau") 
	 {echo ' - Vũng Tàu';}
	 elseif ($oiu == "binhduong") 
	 {echo ' - Bình Dương';}
	 elseif ($oiu == "ninhthuan") 
	 {echo ' - Ninh Thuận';}
	 elseif ($oiu == "quangngai") 
	 {echo ' - Quảng Ngãi';}
	 elseif ($oiu == "quangninh") 
	 {echo ' - Quảng Ninh';}
	 elseif ($oiu == "kontum") 
	 {echo ' - Kon Tum';}
	 elseif ($oiu == "thanhhoa") 
	 {echo ' - Thanh Hoá';}
	 elseif ($oiu == "hagiang") 
	 {echo ' - Hà Giang';}
	 elseif ($oiu == "camau") 
	 {echo ' - Cà Mau';}
	 }?></title>
<meta name="keywords" content="radio,truc tuyen radio,radio dongthap" />
<meta name="description" content="Hệ thống quản lí Radio Online" />
<!--<link rel="icon" href="/favicon.ico" type="image/x-icon">-->
<link rel="stylesheet" href="/css/index.css">
<!--
<style>
body {
    background-image: url(/images/hinhnen.jpg);
	 background-size:     cover;                      /* <------ */
    background-repeat:   no-repeat;
    background-position: center center;              /* optional, center the image */
}
</style>-->
<script type="text/javascript">
var myImg= new Array(24)
  myImg[0]= "dongthap";
  myImg[1]= "angiang";
  myImg[2]= "baclieu";
  myImg[3]= "bentre";
  myImg[4]= "cantho";
  myImg[5]= "haugiang";
  myImg[6]= "kiengiang";
  myImg[7]= "soctrang";
  myImg[8]= "tiengiang";
  myImg[9]= "travinh";
  myImg[10]= "vinhlong";
  myImg[11]= "vov1";
  myImg[12]= "dongnai";
  myImg[13]= "lamdong";
  myImg[14]= "binhphuoc";
  myImg[15]= "tayninh";
  myImg[16]= "vungtau";
  myImg[17]= "binhduong";
  myImg[18]= "ninhthuan";
  myImg[19]= "quangngai";
  myImg[20]= "quangninh";
  myImg[21]= "kontum";
  myImg[22]= "thanhhoa";
  myImg[23]= "hagiang";
  myImg[24]= "camau";

// Tell browser where to find the image
myImgSrc = "/images/";
thumuct = "/t/";
// Tell browser the type of file
myImgEnd = ".png"

var i = 0;
var i2 = 6;
var i3 = 12;

// Create function to load image
function loadImg(){
  document.imgSrc.src = myImgSrc + myImg[i] + myImgEnd;
   
}

// Create link function to switch image backward
function prev(){
  if(i<1){
    var l = i
  } else {
    var l = i-=1;
  }
  document.imgSrc.src = myImgSrc + myImg[l] + myImgEnd;
  document.getElementById("urll").href = thumuct + myImg[l] + "_home.radio";
  
  if(i2<6){
    var l2 = i2
  } else {
    var l2 = i2-=1;
  }
  document.imgSrc2.src = myImgSrc + myImg[l2] + myImgEnd;
       document.getElementById("urll2").href = thumuct + myImg[l2] + "_home.radio";
	   
	    if(i3<12){
    var l3 = i3
  } else {
    var l3 = i3-=1;
  }
  document.imgSrc3.src = myImgSrc + myImg[l3] + myImgEnd;
       document.getElementById("urll3").href = thumuct + myImg[l3] + "_home.radio";
	   
	   
}

// Create link function to switch image forward
function next(){
  if(i>6){
    var l = i
  } else {
    var l = i+=1;
  }
  document.imgSrc.src = myImgSrc + myImg[l] + myImgEnd;
       document.getElementById("urll").href = thumuct + myImg[l] + "_home.radio";

 if(i2>12){
    var l2 = i2
  } else {
    var l2 = i2+=1;
  }
  document.imgSrc2.src = myImgSrc + myImg[l2] + myImgEnd;
       document.getElementById("urll2").href = thumuct + myImg[l2] + "_home.radio";
	   
	    if(i3>23){
    var l3 = i3
  } else {
    var l3 = i3+=1;
  }
  document.imgSrc3.src = myImgSrc + myImg[l3] + myImgEnd;
       document.getElementById("urll3").href = thumuct + myImg[l3] + "_home.radio";
	   
	    
}

// Load function after page loads
window.onload=loadImg;
// Menu moving downward
TweenMax.from("#menu", 1, {y:"-100%"})
// Staggered menu items
TweenMax.staggerFrom(".item",1,{opacity:0,x:-50,delay:1},.1)

/*//Shape Attempt using Skew
 var skewTimeline = new TimelineLite();
  skewTimeline.to("#menu", 0.65, {skewY:-30})
    .to("#menu", 0.3, {skewY:-10})*/
  	
//Shape Attempt using webkit-clip-path
///Polygon
var arr1 = [50,-150,170,-20,-70,150];
///Original
var arr2 = [50,-150,170,150,-70,150];

arr2.onUpdate = function() {
  TweenMax.set('#menu', {webkitClipPath:'polygon('+arr1[0]+'%'+arr1[1]+'%,'+arr1[2]+'%'+arr1[3]+'%,'+arr1[4]+'%'+arr1[5]+'%)'});
};

TweenLite.to(arr1,3, arr2);

</script>
</head>
<body style="background: #B9B7B8;">
<center><div class="container">

<header class="wert" id="wert">
  <div onclick="location.href = '/'" style="
  background-image: url(<?php echo "http://".$_SERVER['HTTP_HOST'];?>/images/templatemo_header.jpg); 
  height: 348px;
  width: 100%;
 	  background-repeat:   no-repeat;

  text-align:left;
  color: red;
  
  ">  
  <div id="site_title"> 
             
        
      <div align="left" onclick="location.href = '/'"><a href="/"><embed src="/flash/bn.swf" width="100%" height="340" wmode="transparent"></a> </div>
                  
             <!-- <li><a href="http://www.templatemo.com" target="_blank"> AMTHANHVIET.NET</a></li>
            </div> 
 <!--  <h0 onclick="location.href = '/'">Trực tuyến Radio</h0>-->
<!--<img src="/images/templatemo_header.jpg" width="100%" height="200px">-->
 <!-- <svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
     width="800px" height="100px" viewBox="0 0 800 100">
<style type="text/css">

<![CDATA[

    text {
        filter: url(#filter);
        fill: #C3510D;
        font-family: 'League Gothic', Tahamo;
        font-size: 100px;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
            }
]]>
</style>
    <defs>

        <filter id="filter">
            <feFlood flood-color="rgba(255, 255, 255, 0.22)" result="rgba(255, 255, 255, 0.22)" />
            <feFlood flood-color="red" result="flood1" />
            <feFlood flood-color="limegreen" result="flood2" />
            <feOffset in="SourceGraphic" dx="3" dy="0" result="off1a"/>
            <feOffset in="SourceGraphic" dx="2" dy="0" result="off1b"/>
            <feOffset in="SourceGraphic" dx="-3" dy="0" result="off2a"/>
            <feOffset in="SourceGraphic" dx="-2" dy="0" result="off2b"/>
            <feComposite in="flood1" in2="off1a" operator="in"  result="comp1" />
            <feComposite in="flood2" in2="off2a" operator="in" result="comp2" />

            <feMerge x="0" width="100%" result="merge1">
                <feMergeNode in = "rgba(255, 255, 255, 0.22)" />
                <feMergeNode in = "comp1" />
                <feMergeNode in = "off1b" />

                <animate 
                    attributeName="y" 
                    id = "y"
                    dur ="4s"
                    
                    values = '104px; 104px; 30px; 105px; 30px; 2px; 2px; 50px; 40px; 105px; 105px; 20px; 6ßpx; 40px; 104px; 40px; 70px; 10px; 30px; 104px; 102px'

                    keyTimes = '0; 0.362; 0.368; 0.421; 0.440; 0.477; 0.518; 0.564; 0.593; 0.613; 0.644; 0.693; 0.721; 0.736; 0.772; 0.818; 0.844; 0.894; 0.925; 0.939; 1'

                    repeatCount = "indefinite" />
 
                <animate attributeName="height" 
                    id = "h" 
                    dur ="4s"
                    
                    values = '10px; 0px; 10px; 30px; 50px; 0px; 10px; 0px; 0px; 0px; 10px; 50px; 40px; 0px; 0px; 0px; 40px; 30px; 10px; 0px; 50px'

                    keyTimes = '0; 0.362; 0.368; 0.421; 0.440; 0.477; 0.518; 0.564; 0.593; 0.613; 0.644; 0.693; 0.721; 0.736; 0.772; 0.818; 0.844; 0.894; 0.925; 0.939; 1'

                    repeatCount = "indefinite" />
            </feMerge>
            

            <feMerge x="0" width="100%" y="60px" height="65px" result="merge2">
                <feMergeNode in = "rgba(255, 255, 255, 0.22)" />
                <feMergeNode in = "comp2" />
                <feMergeNode in = "off2b" />

                <animate attributeName="y" 
                    id = "y"
                    dur ="4s"
                    values = '103px; 104px; 69px; 53px; 42px; 104px; 78px; 89px; 96px; 100px; 67px; 50px; 96px; 66px; 88px; 42px; 13px; 100px; 100px; 104px;' 

                    keyTimes = '0; 0.055; 0.100; 0.125; 0.159; 0.182; 0.202; 0.236; 0.268; 0.326; 0.357; 0.400; 0.408; 0.461; 0.493; 0.513; 0.548; 0.577; 0.613; 1'

                    repeatCount = "indefinite" />
 
                <animate attributeName="height" 
                    id = "h"
                    dur = "4s"
                    
                    values = '0px; 0px; 0px; 16px; 16px; 12px; 12px; 0px; 0px; 5px; 10px; 22px; 33px; 11px; 0px; 0px; 10px'

                    keyTimes = '0; 0.055; 0.100; 0.125; 0.159; 0.182; 0.202; 0.236; 0.268; 0.326; 0.357; 0.400; 0.408; 0.461; 0.493; 0.513;  1'
                     
                    repeatCount = "indefinite" />
            </feMerge>
            
            <feMerge>
                <feMergeNode in="SourceGraphic" />  

                <feMergeNode in="merge1" /> 
            <feMergeNode in="merge2" />

            </feMerge>
        </filter>

    </defs>

<g>
    <text x="0" y="100" onclick="location.href = '/'">AmThanhViet.Net</text>
</g>
</svg>-->
  </div>
</header>
 

<header id="imgg2">
 <!--  <a href="/" ><img src="http://tructuyenradio.com/images/dongthap.png"/></a>-->
  
<!-- Paste this code into the BODY section of your HTML document  -->

<div style="">
<a onClick="prev();"> <img src="/images/left.png" width="30px"/></a>
<a href="/t/dongthap_home.radio" id="urll"><img name="imgSrc" id="imgSrc" width="150px" height="100px" src="/images/dongthap.png"></a>
<a href="/t/angiang_home.radio" id="urll2"><img name="imgSrc2" id="imgSrc2" width="150px" height="100px" src="/images/angiang.png"></a>
<a href="/t/soctrang_home.radio" id="urll3"><img name="imgSrc3" id="imgSrc3" width="150px" height="100px" src="/images/soctrang.png"></a>
<a  onClick="next();"> <img src="/images/right.png" width="30px"/></a>
</div>
<!-- Controller « Trước-->

 
</header>
 
<nav id="topNav">
<div id="menu">
  <ul>

  <?php
    if(isset($_GET['tinh'])){
		$tinh = $_GET['tinh'];
		if ($tinh == "dongthap") {
			 echo ' <li><h1><a href="/t/dongthap_home.radio">Tỉnh Đồng Tháp</a></h1></li>';
			   echo ' <li><a href="/t/dongthap_1.radio" type="submit">Huyện Cao Lãnh</a></li>
    <li><a href="/t/dongthap_2.radio">Huyện Tháp Mười</a></li>
    <li><a href="/t/dongthap_3.radio">Huyện CL Dự phòng</a></li>
	 <li><a href="/t/dongthap_6.radio">Huyện Tân Hồng</a></li>
	  <li><a href="/t/dongthap_7.radio">Huyện Thanh Bình</a></li>
	   <li><a href="/t/dongthap_8.radio">Huyện Tam Nông</a></li>
	    <li><a href="/t/dongthap_9.radio">Huyện Châu Thành</a></li>
		 <li><a href="/t/dongthap_10.radio">Huyện Lấp Vò</a></li>
		  <li><a href="/t/dongthap_4.radio">Huyện Lai Vung</a></li>
		  <li><a href="/t/dongthap_5.radio">Thành phố Cao Lãnh</a></li></ul>
	';
		}elseif ($tinh == "angiang") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">Tỉnh An Giang</a></h1></li>';
			   echo ' <li><a href="/t/angiang_11.radio" type="submit">Huyện An Phú</a></li>
    <li><a href="/t/angiang_12.radio">Huyện Châu Phú</a></li>
    <li><a href="/t/angiang_13.radio">Huyện Châu Thành</a></li>
	 <li><a href="/t/angiang_14.radio">Huyện Chợ Mới</a></li>
	  <li><a href="/t/angiang_15.radio">Huyện Phú Tân</a></li>
	   <li><a href="/t/angiang_16.radio">Huyện Thoại Sơn</a></li>
	    <li><a href="/t/angiang_17.radio">Huyện Tịnh Biên</a></li>
		 <li><a href="/t/angiang_18.radio">Huyện Tri Tôn</a></li>
		  <li><a href="/t/dongthap_19.radio">Thị Xã Tân Châu</a></li>
		  <li><a href="/t/dongthap_20.radio">Thành phố Long Xuyên</a></li>
		    <li><a href="/t/dongthap_21.radio">Thành phố Châu Đốc</a></li></ul>
	';
		} elseif ($tinh == "soctrang") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">Sóc Trăng</a></h1></li>';
			   echo ' <li><a href="/t/soctrang_22.radio" type="submit">Huyện Châu Thành</a></li>
    <li><a href="/t/soctrang_23.radio">Huyện Cù Lao Dung</a></li>
    <li><a href="/t/soctrang_24.radio">Huyện Kế Sách</a></li>
	 <li><a href="/t/soctrang_25.radio">Huyện Long Phú</a></li>
	  <li><a href="/t/soctrang_26.radio">Huyện Mỹ Tú</a></li>
	   <li><a href="/t/soctrang_27.radio">Huyện Mỹ Xuyên</a></li>
	    <li><a href="/t/soctrang_28.radio">Huyện Thạnh Trị</a></li>
		 <li><a href="/t/soctrang_29.radio">Huyện Trần Đề</a></li>
		  <li><a href="/t/soctrang_30.radio">Thị Xã Ngã Năm</a></li>
		  <li><a href="/t/soctrang_31.radio">Thị Xã Vĩnh Châu</a></li>
		    <li><a href="/t/soctrang_32.radio">Thành phố Sóc Trăng</a></li></ul>
	';
		} elseif ($tinh == "lamdong") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">Tỉnh Lâm Đồng</a></h1></li>';
			   echo ' <li><a href="/t/lamdong_33.radio" type="submit">Huyện Bảo Lâm</a></li>
    <li><a href="/t/lamdong_34.radio">Huyện Cát Tiên</a></li>
    <li><a href="/t/lamdong_35.radio">Huyện Di Linh</a></li>
	 <li><a href="/t/lamdong_36.radio">Huyện Đạ Huoai</a></li>
	  <li><a href="/t/lamdong_37.radio">Huyện Đạ Tẻh</a></li>
	   <li><a href="/t/lamdong_38.radio">Huyện Đam Rông</a></li>
	    <li><a href="/t/lamdong_39.radio">Huyện Đơn Dương</a></li>
		 <li><a href="/t/lamdong_40.radio">Huyện Đức Trọng</a></li>
		  <li><a href="/t/lamdong_41.radio">Huyện Lạc Dương</a></li>
		  <li><a href="/t/lamdong_42.radio">Huyện Lâm Hà</a></li>
		    <li><a href="/t/lamdong_43.radio">Thành Phố Đà Lạt</a></li>
			<li><a href="/t/lamdong_44.radio">Thành Phố Bảo Lộc</a></li></ul>
	';
		} elseif ($tinh == "baclieu") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">Tỉnh Bạc Liêu</a></h1></li>';
			   echo ' <li><a href="/t/baclieu_45.radio" type="submit">Huyện Phước Long</a></li>
    <li><a href="/t/baclieu_46.radio">Huyện Hồng Dân</a></li>
    <li><a href="/t/baclieu_47.radio">Huyện Vĩnh Lợi</a></li>
	 <li><a href="/t/baclieu_48.radio">Huyện Đông Hải</a></li>
	  <li><a href="/t/baclieu_49.radio">Huyện Hoà Bình</a></li>
	   <li><a href="/t/baclieu_50.radio">Thị Xã Giá Rai</a></li>
			<li><a href="/t/baclieu_51.radio">Thành Phố Bạc Liêu</a></li></ul>
	';
		} elseif ($tinh == "tiengiang") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">Tỉnh Tiền Giang</a></h1></li>';
			   echo ' <li><a href="/t/tiengiang_52.radio" type="submit">Huyện Cái Bè</a></li>
    <li><a href="/t/tiengiang_53.radio">Huyện Cai Lậy</a></li>
    <li><a href="/t/tiengiang_54.radio">Huyện Châu Thành</a></li>
	 <li><a href="/t/tiengiang_55.radio">Huyện Chợ Gạo</a></li>
	  <li><a href="/t/tiengiang_56.radio">Huyện Gò Công Đông</a></li>
	  	  <li><a href="/t/tiengiang_57.radio">Huyện Gò Công Tây</a></li>
		  	  <li><a href="/t/tiengiang_58.radio">Huyện Tân Phước</a></li>
	  <li><a href="/t/tiengiang_59.radio">Huyện Tân Phú Đông</a></li>
	   <li><a href="/t/tiengiang_60.radio">Thị Xã Gò Công</a></li>
	   	   <li><a href="/t/tiengiang_61.radio">Thị Xã Cai Lậy</a></li>
			<li><a href="/t/tiengiang_62.radio">Thành Phố Mỹ Tho</a></li></ul>
	';
		}elseif ($tinh == "binhphuoc") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">Bình Phước</a></h1></li>';
			   echo ' <li><a href="/t/binhphuoc_63.radio" type="submit">Huyện Bù Đăng</a></li>
    <li><a href="/t/binhphuoc_64.radio">Huyện Bù Đốp</a></li>
    <li><a href="/t/binhphuoc_65.radio">Huyện Bù Gia Mập</a></li>
	 <li><a href="/t/binhphuoc_66.radio">Huyện Chơn Thành</a></li>
	  <li><a href="/t/binhphuoc_67.radio">Huyện Đồng Phú</a></li>
	  	  <li><a href="/t/binhphuoc_68.radio">Huyện Hớn Quản</a></li>
		  	  <li><a href="/t/binhphuoc_69.radio">Huyện Lộc Ninh</a></li>
	  <li><a href="/t/binhphuoc_70.radio">Huyện Tân Phú Riềng</a></li>
	   <li><a href="/t/binhphuoc_71.radio">Thị Xã Đồng Xoài</a></li>
	   	   <li><a href="/t/binhphuoc_72.radio">Thị Xã Bình Long</a></li>
			<li><a href="/t/binhphuoc_73.radio">Thị Xã Phước Long</a></li></ul>
	';
		} elseif ($tinh == "bentre") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">Bến Tre</a></h1></li>';
			   echo ' <li><a href="/t/bentre_74.radio" type="submit">Huyện Châu Thành</a></li>
    <li><a href="/t/bentre_75.radio">Huyện Bình Đại</a></li>
    <li><a href="/t/bentre_76.radio">Huyện Chợ Lách</a></li>
	 <li><a href="/t/bentre_77.radio">Huyện Ba Tri</a></li>
	  <li><a href="/t/bentre_78.radio">Huyện Giồng Trôm</a></li>
	  	  <li><a href="/t/bentre_79.radio">Huyện Mỏ Cày Bắc</a></li>
		  	  <li><a href="/t/bentre_80.radio">Huyện Mỏ Cày Nam</a></li>
	  <li><a href="/t/bentre_81.radio">Huyện Thạnh Phú</a></li>
			<li><a href="/t/bentre_82.radio">Thành Phố Bến Tre</a></li></ul>
	';
		}  elseif ($tinh == "travinh") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">Trà Vinh</a></h1></li>';
			   echo ' <li><a href="/t/travinh_83.radio" type="submit">Huyện Càng Long</a></li>
    <li><a href="/t/travinh_84.radio">Huyện Cầu Kè</a></li>
    <li><a href="/t/travinh_85.radio">Huyện Cầu Ngang</a></li>
	 <li><a href="/t/travinh_86.radio">Huyện Châu Thành</a></li>
	  <li><a href="/t/travinh_87.radio">Huyện Duyên Hải</a></li>
	  	  <li><a href="/t/travinh_88.radio">Huyện Tiểu Cần</a></li>
		  	  <li><a href="/t/travinh_89.radio">Huyện Trà Cú</a></li>
	  <li><a href="/t/travinh_90.radio">Thị Xã Duyên Hải</a></li>
			<li><a href="/t/travinh_91.radio">Thành Phố Trà Vinh</a></li></ul>
	';
		} elseif ($tinh == "tayninh") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">Tây Ninh</a></h1></li>';
			   echo ' <li><a href="/t/tayninh_92.radio" type="submit">Huyện Tân Biên</a></li>
    <li><a href="/t/tayninh_93.radio">Huyện Tân Châu</a></li>
    <li><a href="/t/tayninh_94.radio">Huyện Dương Minh Châu</a></li>
	 <li><a href="/t/tayninh_95.radio">Huyện Châu Thành</a></li>
	  <li><a href="/t/tayninh_96.radio">Huyện Hoà Thành</a></li>
	  	  <li><a href="/t/tayninh_97.radio">Huyện Bến Cầu</a></li>
		  	  <li><a href="/t/tayninh_98.radio">Huyện Gò Dầu</a></li>
	  <li><a href="/t/tayninh_99.radio">Huyện Trảng Bàng</a></li>
			<li><a href="/t/tayninh_100.radio">Thành Phố Tây Ninh</a></li></ul>
	';
		} elseif ($tinh == "cantho") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">Cần thơ</a></h1></li>';
			   echo ' <li><a href="/t/cantho_101.radio" type="submit">Huyện Cờ Đỏ</a></li>
    <li><a href="/t/cantho_102.radio">Huyện Phong Điền</a></li>
    <li><a href="/t/cantho_103.radio">Huyện Thới Lai</a></li>
	 <li><a href="/t/cantho_104.radio">Huyện Vĩnh Thạnh</a></li>
	  <li><a href="/t/cantho_105.radio">Quận Bình Thuỷ</a></li>
	  	  <li><a href="/t/cantho_106.radio">Quận Cái Răng</a></li>
		  	  <li><a href="/t/cantho_107.radio">Quận Ninh Kiều</a></li>
	  <li><a href="/t/cantho_108.radio">Quận Ô Môn</a></li>
			<li><a href="/t/cantho_109.radio">Quận Thốt Nốt</a></li></ul>
	';
		} elseif ($tinh == "vinhlong") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">Vĩnh Long</a></h1></li>';
			   echo ' <li><a href="/t/vinhlong_110.radio" type="submit">Huyện Bình Tân</a></li>
    <li><a href="/t/vinhlong_111.radio">Huyện Long Hồ</a></li>
    <li><a href="/t/vinhlong_112.radio">Huyện Mang Thít</a></li>
	 <li><a href="/t/vinhlong_113.radio">Huyện Tam Bình</a></li>
	  <li><a href="/t/vinhlong_114.radio">Huyện Trà Ôn</a></li>
	  	  <li><a href="/t/vinhlong_115.radio">Huyện Vũng Liêm</a></li>
		  	  <li><a href="/t/vinhlong_116.radio">Thị Xã Bình Mình</a></li>
	  <li><a href="/t/vinhlong_117.radio">Thành Phố Vĩnh Long</a></li></ul>
	';
		} elseif ($tinh == "vungtau") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">Vũng Tàu</a></h1></li>';
			   echo ' <li><a href="/t/vungtau_118.radio" type="submit">Huyện Xuyên Mộc</a></li>
    <li><a href="/t/vungtau_119.radio">Huyện Long Điền</a></li>
    <li><a href="/t/vungtau_120.radio">Huyện Côn Đảo</a></li>
	 <li><a href="/t/vungtau_121.radio">Huyện Tân Thành</a></li>
	  <li><a href="/t/vungtau_122.radio">Huyện Châu Đức</a></li>
	  	  <li><a href="/t/vungtau_123.radio">Huyện Đất Đỏ</a></li>
		  	  <li><a href="/t/vungtau_124.radio">Thị Xã Bà Rịa</a></li>
	  <li><a href="/t/vungtau_125.radio">Thành Phố Vũng Tàu</a></li></ul>
	';
		} elseif ($tinh == "haugiang") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">Hậu Giang</a></h1></li>';
			   echo ' <li><a href="/t/haugiang_126.radio" type="submit">Huyện Châu Thành</a></li>
    <li><a href="/t/haugiang_127.radio">Huyện Châu Thành A</a></li>
    <li><a href="/t/haugiang_128.radio">Huyện Long Mỹ</a></li>
	 <li><a href="/t/haugiang_129.radio">Huyện Phụng Hiệp</a></li>
	  <li><a href="/t/haugiang_130.radio">Huyện Vị Thuỷ</a></li>
	  	  <li><a href="/t/haugiang_131.radio">Thị Xã Long Mỹ</a></li>
		  	  <li><a href="/t/haugiang_132.radio">Thị Xã Ngã Bảy</a></li>
	  <li><a href="/t/haugiang_133.radio">Thành Phố Vị Thanh</a></li></ul>
	';
		} elseif ($tinh == "vov1") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">VOV</a></h1></li>';
			  			 echo ' <li><h1><a href="/t/vov_134.radio">VOV1</a></h1></li></ul>';

	
		} elseif ($tinh == "binhduong") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">Bình Dương</a></h1></li>';
			   echo ' <li><a href="/t/binhduong_135.radio" type="submit">Huyện Bàu Bàng</a></li>
    <li><a href="/t/binhduong_136.radio">Huyện Bắc Tân Uyên</a></li>
    <li><a href="/t/binhduong_137.radio">Huyện Dầu Tiếng</a></li>
	 <li><a href="/t/binhduong_138.radio">Huyện Phú Giáo</a></li>
	  <li><a href="/t/binhduong_139.radio">Thị Xã Thuận An</a></li>
	  	  <li><a href="/t/binhduong_140.radio">Thị Xã Dĩ An</a></li>
		  	  <li><a href="/t/binhduong_141.radio">Thị Xã Bến Cát</a></li>
			  		  	  <li><a href="/t/binhduong_142.radio">Thị Xã Tân Uyên</a></li>
	  <li><a href="/t/binhduong_143.radio">Thành Phố Thủ Dầu Một</a></li></ul>
	';
		}elseif ($tinh == "kiengiang") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">Kiên Giang</a></h1></li>';
			   echo ' <li><a href="/t/kiengiang_144.radio" type="submit">Huyện An Biên</a></li>
    <li><a href="/t/kiengiang_145.radio">Huyện An Minh</a></li>
    <li><a href="/t/kiengiang_146.radio">Huyện Châu Thành</a></li>
	 <li><a href="/t/kiengiang_147.radio">Huyện Giang Thành</a></li>
	  <li><a href="/t/kiengiang_148.radio">Huyện Giồng Riềng</a></li>
	  	  <li><a href="/t/kiengiang_149.radio">Huyện Gò Quao</a></li>
		  	  <li><a href="/t/kiengiang_150.radio">Huyện Hòn Đất</a></li>
		<li><a href="/t/kiengiang_151.radio">Huyện Kiên Hải</a></li>
	 <li><a href="/t/kiengiang_152.radio">Huyện Kiên Lương</a></li>
			<li><a href="/t/kiengiang_153.radio">Huyện Phú Quốc</a></li>
			 <li><a href="/t/kiengiang_154.radio">Huyện Tân Hiệp</a></li>
			 <li><a href="/t/kiengiang_155.radio">Huyện Vĩnh Thuận</a></li>
			 <li><a href="/t/kiengiang_156.radio">Huyện U Minh Thượng</a></li>
			 			 <li><a href="/t/kiengiang_157.radio">Thị Xã Hà Tiên</a></li>
	  <li><a href="/t/kiengiang_158.radio">Thành Phố Rạch Giá</a></li></ul>
	';
		} elseif ($tinh == "dongnai") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">Đồng Nai</a></h1></li>';
			   echo ' <li><a href="/t/dongnai_159.radio" type="submit">Huyện Cẩm Mĩ</a></li>
    <li><a href="/t/dongnai_160.radio">Huyện Định Quán</a></li>
    <li><a href="/t/dongnai_161.radio">Huyện Long Thành</a></li>
	 <li><a href="/t/dongnai_162.radio">Huyện Nhơn Trạch</a></li>
	  <li><a href="/t/dongnai_163.radio">Huyện Tân Phú</a></li>
	  	  <li><a href="/t/dongnai_164.radio">Huyện Thống Nhất</a></li>
		  	  <li><a href="/t/dongnai_165.radio">Huyện Trảng Bom</a></li>
			  		  	  <li><a href="/t/dongnai_166.radio">Huyện Vĩnh Cửu</a></li>
	  <li><a href="/t/dongnai_167.radio">Huyện Xuân Lộc</a></li>
	  <li><a href="/t/dongnai_168.radio">Thị Xã Long Khánh</a></li>
	  <li><a href="/t/dongnai_169.radio">Thành Phố Biên Hoà</a></li></ul>
	';
		} elseif ($tinh == "ninhthuan") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">Ninh Thuận</a></h1></li>';
			   echo ' <li><a href="/t/ninhthuan_170.radio" type="submit">Huyện Bác Ái</a></li>
    <li><a href="/t/ninhthuan_171.radio">Huyện Ninh Hải</a></li>
    <li><a href="/t/ninhthuan_172.radio">Huyện Ninh Phước</a></li>
	 <li><a href="/t/ninhthuan_173.radio">Huyện Ninh Sơn</a></li>
	  <li><a href="/t/ninhthuan_174.radio">Huyện Thuận Bắc</a></li>
	  	  <li><a href="/t/ninhthuan_175.radio">Huyện Thuận Nam</a></li>
	  <li><a href="/t/ninhthuan_176.radio">TP.Phan Rang - Tháp Chàm</a></li></ul>
	';
		}  elseif ($tinh == "quangngai") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">Quảng Ngãi</a></h1></li>';
			   echo ' <li><a href="/t/quangngai_177.radio" type="submit">Huyện Ba Tơ</a></li>
    <li><a href="/t/quangngai_178.radio">Huyện Bình Sơn</a></li>
    <li><a href="/t/quangngai_179.radio">Huyện Đức Phổ</a></li>
	 <li><a href="/t/quangngai_180.radio">Huyện Minh Long</a></li>
	  <li><a href="/t/quangngai_181.radio">Huyện Mộ Đức</a></li>
	  	  <li><a href="/t/quangngai_182.radio">Huyện Nghĩa Hành</a></li>
		    <li><a href="/t/quangngai_183.radio">Huyện Sơn Hà</a></li>
			  <li><a href="/t/quangngai_184.radio">Huyện Sơn Tây</a></li>
			    <li><a href="/t/quangngai_185.radio">Huyện Sơn Tịnh</a></li>
				  <li><a href="/t/quangngai_186.radio">Huyện Tây Trà</a></li>
				    <li><a href="/t/quangngai_187.radio">Huyện Tư Nghĩa</a></li>
					  <li><a href="/t/quangngai_188.radio">Huyện Trà Bồng</a></li>
					    <li><a href="/t/quangngai_189.radio">Huyện Lý Sơn</a></li>
	  <li><a href="/t/quangngai_190.radio">Thành Phố Quảng Ngãi</a></li></ul>
	';
		 }elseif ($tinh == "quangninh") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">Quảng Ninh</a></h1></li>';
			   echo ' <li><a href="/t/quangninh_191.radio" type="submit">Huyện Ba Chẽ</a></li>
    <li><a href="/t/quangninh_192.radio">Huyện Bình Liêu</a></li>
    <li><a href="/t/quangninh_193.radio">Huyện Cô Tô</a></li>
	 <li><a href="/t/quangninh_194.radio">Huyện Đầm Hà</a></li>
	  <li><a href="/t/quangninh_195.radio">Huyện Hải Hà</a></li>
	  	  <li><a href="/t/quangninh_196.radio">Huyện Hoàng Bồ</a></li>
		    <li><a href="/t/quangninh_197.radio">Huyện Tiên Yên</a></li>
			  <li><a href="/t/quangninh_198.radio">Huyện Vân Đồn</a></li>
			    <li><a href="/t/quangninh_199.radio">Thị Xã Quảng Yên</a></li>
				  <li><a href="/t/quangninh_200.radio">Thị Xã Đông Triều</a></li>
				    <li><a href="/t/quangninh_201.radio">Thành Phố Hạ Long</a></li>
					  <li><a href="/t/quangninh_202.radio">Thành Phố Móng Cái</a></li>
					    <li><a href="/t/quangninh_203.radio">Thành Phố Uông Bí</a></li>
	  <li><a href="/t/quangninh_204.radio">Thành Phố Cẩm Phả</a></li></ul>
	';
		} elseif ($tinh == "kontum") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">Kon Tum</a></h1></li>';
			   echo ' <li><a href="/t/kontum_205.radio" type="submit">Huyện Đăk Glei</a></li>
    <li><a href="/t/kontum_206.radio">Huyện Ngọc Hồi</a></li>
    <li><a href="/t/kontum_207.radio">Huyện Đăk Tô</a></li>
	 <li><a href="/t/kontum_208.radio">Huyện Sa Thầy</a></li>
	  <li><a href="/t/kontum_209.radio">Huyện Kon Plong</a></li>
	  	  <li><a href="/t/kontum_210.radio">Huyện Đăk Hà</a></li>
		    <li><a href="/t/kontum_211.radio">Huyện Kon Rộy</a></li>
			    <li><a href="/t/kontum_212.radio">Thị Xã KonTum</a></li></ul>
	';
		} elseif ($tinh == "thanhhoa") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">Thanh Hoá</a></h1></li>';
			   echo ' <li><a href="/t/thanhhoa_213.radio" type="submit">Huyện Quan Hoá</a></li>
    <li><a href="/t/thanhhoa_214.radio">Huyện Quan Sơn</a></li>
    <li><a href="/t/thanhhoa_215.radio">Huyện Mường Lát</a></li>
	 <li><a href="/t/thanhhoa_216.radio">Huyện Bá Thước</a></li>
	  <li><a href="/t/thanhhoa_217.radio">Huyện Thường Xuân</a></li>
	  	  <li><a href="/t/thanhhoa_218.radio">Huyện Như Xuân</a></li>
		    <li><a href="/t/thanhhoa_219.radio">Huyện Như Thanh</a></li>
			    <li><a href="/t/thanhhoa_220.radio">Huyện Lang Chánh</a></li>
				<li><a href="/t/thanhhoa_221.radio">Huyện Ngọc Lặc</a></li>
				<li><a href="/t/thanhhoa_222.radio">Huyện Thạch Thành</a></li>
				<li><a href="/t/thanhhoa_223.radio">Huyện Cẩm Thủy</a></li>
				<li><a href="/t/thanhhoa_224.radio">Huyện Thọ Xuân</a></li>
				<li><a href="/t/thanhhoa_225.radio">Huyện Vĩnh Lộc</a></li>
				<li><a href="/t/thanhhoa_226.radio">Huyện Thiệu Hoá</a></li>
				<li><a href="/t/thanhhoa_227.radio">Huyện Triệu Sơn</a></li>
				<li><a href="/t/thanhhoa_228.radio">Huyện Nông Cống</a></li>
				<li><a href="/t/thanhhoa_229.radio">Huyện Đông Sơn</a></li>
				<li><a href="/t/thanhhoa_230.radio">Huyện Hà Trung</a></li>
				<li><a href="/t/thanhhoa_231.radio">Huyện Hoằng Hoá</a></li>
				<li><a href="/t/thanhhoa_232.radio">Huyện Nga Sơn</a></li>
				<li><a href="/t/thanhhoa_233.radio">Huyện Hậu Lộc</a></li>
				<li><a href="/t/thanhhoa_234.radio">Huyện Quảng Xương</a></li>
				<li><a href="/t/thanhhoa_235.radio">Huyện Tĩnh Gia</a></li>
				<li><a href="/t/thanhhoa_236.radio">Huyện Yên Định</a></li>
				<li><a href="/t/thanhhoa_237.radio">Thị xã Bỉm Sơn</a></li>
				<li><a href="/t/thanhhoa_238.radio">Thị xã Sầm Sơn</a></li>
				<li><a href="/t/thanhhoa_239.radio">Thành Phố Thanh Hoá</a></li></ul>
	';
		} elseif ($tinh == "hagiang") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">Hà Giang</a></h1></li>';
			   echo ' <li><a href="/t/hagiang_240.radio" type="submit">Huyện Đồng Văn</a></li>
    <li><a href="/t/hagiang_241.radio">Huyện Mèo Vạc</a></li>
    <li><a href="/t/hagiang_242.radio">Huyện Yên Minh</a></li>
	 <li><a href="/t/hagiang_243.radio">Huyện Quản Bạ</a></li>
	  <li><a href="/t/hagiang_244.radio">Huyện Vị Xuyên</a></li>
	  	  <li><a href="/t/hagiang_245.radio">Huyện Bắc Mê</a></li>
		    <li><a href="/t/hagiang_246.radio">Huyện Hoàng Su Phì</a></li>
		<li><a href="/t/hagiang_247.radio">Huyện Xín Mần</a></li>
        <li><a href="/t/hagiang_248.radio">Huyện Bắc Quang</a></li>
		    <li><a href="/t/hagiang_249.radio">Huyện Quang Bình</a></li>
			    <li><a href="/t/hagiang_250.radio">Thành phố Hà Giang</a></li></ul>
	';
		} elseif ($tinh == "camau") {
			 echo ' <li><h1><a href="/t/'.$tinh.'_home.radio">Cà Mau</a></h1></li>';
			   echo ' <li><a href="/t/camau_251.radio" type="submit">Huyện Thới Bình</a></li>
    <li><a href="/t/camau_252.radio">Huyện U Minh</a></li>
    <li><a href="/t/camau_253.radio">Huyện Trần Văn Thời</a></li>
	 <li><a href="/t/camau_254.radio">Huyện Cái Nước</a></li>
	  <li><a href="/t/camau_255.radio">Huyện Đầm Dơi</a></li>
	  	  <li><a href="/t/camau_256.radio">Huyện Ngọc Hiển</a></li>
		    <li><a href="/t/camau_257.radio">Huyện Năm Căn</a></li>
			    <li><a href="/t/camau_258.radio">Huyện Phú Tân</a></li>
				  <li><a href="/t/camau_259.radio">Thành phố Cà Mau</a></li></ul>
	';
		} else {
				   echo ' <li><h1>Menu</h1></li>';
	   echo ' <li><a href="/">Trang chủ</a></li>
    <li><a href="/t/tructuyenradio_gioithieu.radio">Giới thiệu</a></li>
    <li><a href="/t/tructuyenradio_lienhe.radio">Liên hệ</a></li></ul><img src="http://i.imgur.com/8q4bUT3.png" width="100px" height="1178px"/> ';
		}
	 
  } else {
	  	   echo ' <li><h1>Menu</h1></li>';
	   echo ' <li><a href="/">Trang chủ</a></li>
 <li><a href="/t/tructuyenradio_gioithieu.radio">Giới thiệu</a></li>
    <li><a href="/t/tructuyenradio_lienhe.radio">Liên hệ</a></li></ul><img src="http://i.imgur.com/8q4bUT3.png" width="100px" height="1178px"/> ';
  }
  ?>
  

  </ul>

  </div>
</nav>
   

<article>
  <?php
 if(isset($_GET['rd'])){
		$rada = $_GET['rd'];
		
if ($rada > 0) {
			echo file_get_contents('http://'.$_SERVER['SERVER_NAME'].'/radio.php?id='.$rada);

} //elseif ($rada == "chat") {
			//echo file_get_contents('http://'.$_SERVER['SERVER_NAME'].'/messger.php');
		//	echo '<iframe src="/messger.php" scrolling="yes" frameborder="0" width="100%" height="100%"></iframe>';

//} 
elseif ($rada == "gioithieu") {
	$readview2 = "http://".$_SERVER['HTTP_HOST']."/data/viewwer/gioithieu.view";
	///$myfile = fopen($readview, "r") or die("Unable to open file!");
// echo fgets($myfile);
//fclose($myfile);
echo get_by_curl($readview2);
}
elseif ($rada == "lienhe") {
	$readview3 = "http://".$_SERVER['HTTP_HOST']."/data/viewwer/lienhe.view";
	
echo get_by_curl($readview3);
}
else {
			//echo file_get_contents('http://'.$_SERVER['SERVER_NAME'].'/radio.php');
			$readview4 = "http://".$_SERVER['HTTP_HOST']."/data/viewwer/home.view";
	///$myfile = fopen($readview, "r") or die("Unable to open file!");
// echo fgets($myfile);
//fclose($myfile);
echo get_by_curl($readview4);
 }
 } else {
			//echo file_get_contents('http://'.$_SERVER['SERVER_NAME'].'/radio.php');
		$readview = "http://".$_SERVER['HTTP_HOST']."/data/viewwer/home.view";
	//$myfile = fopen($readview, "r") or die("Unable to open file!");
 //echo fgets($myfile);
//fclose($myfile);
echo get_by_curl($readview);

 }
  ?>
  
<a style="display:scroll;position:fixed;bottom:5px;right:5px;" href="#" title="Back to Top"><img src="http://i.imgur.com/VQYaoXG.png"/></a>  
<a style="display:scroll;position:fixed;bottom:5px;left:5px;" href="/" title="Go To Home"><img src="/images/home.png" width="100px"/></a>  

 
</article>
<hr>

<footer> 
<header id="imgg">
<div align="right" style="color: white;">       Địa chỉ:    Số 69, Đường T4A – P.Tây Thạnh – Q.Tân Phú –  TP.HCM<p>
       Điện thoại :  08 3816 0245 - 0918 106 600                    -   Fax: 08 3816 0246<p>
       Tài khoản số:        015 486 730 001<p>
       Tại :                      Ngân hàng Đông Á - TP.HCM – Phòng giao dịch Lê Trọng Tấn<p>
       Mã số thuế :         0313 778 775
</div>
</header>
 
 </footer>
 
</div>

</center>

</body>
</html>

<?php
function get_by_curl($url){
        //echo "curl:url<pre>".$url."</pre><BR>";
    $options = array(
        CURLOPT_RETURNTRANSFER => true,     // return web page
        CURLOPT_HEADER         => false,    // don't return headers
        CURLOPT_ENCODING       => "",       // handle all encodings
        CURLOPT_USERAGENT      => "spider", // who am i
        CURLOPT_AUTOREFERER    => true,     // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 15,      // timeout on connect
        CURLOPT_TIMEOUT        => 15,      // timeout on response
        CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
		CURLOPT_SSL_VERIFYPEER => false,
 
    );
 
    $ch      = curl_init($url);
    curl_setopt_array( $ch, $options );
    $content = curl_exec( $ch );
    $err     = curl_errno( $ch );
    $errmsg  = curl_error( $ch );
    $header  = curl_getinfo( $ch,CURLINFO_EFFECTIVE_URL );
    curl_close( $ch );
 
    //$header['errno']   = $err;
   // $header['errmsg']  = $errmsg;
 
    //change errmsg here to errno
    if ($errmsg)
    {
        echo "";
    }
    return $content;
}

?>