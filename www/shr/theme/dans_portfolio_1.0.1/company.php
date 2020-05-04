<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/company.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');


?>

<body>
<div id="map" style="width:100%;height:350px;"></div>

<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=1d9f6e9353bba656572aa3f6f3986d5c"></script>
<script>
var mapContainer = document.getElementById('map'), // 지도를 표시할 div
    mapOption = {
        center: new kakao.maps.LatLng(37.526834, 127.035726), // 지도의 중심좌표
        level: 4 // 지도의 확대 레벨
    };

var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

var imageSrc = 'https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/marker_red.png', // 마커이미지의 주소입니다
    imageSize = new kakao.maps.Size(64, 69), // 마커이미지의 크기입니다
    imageOption = {offset: new kakao.maps.Point(27, 69)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

// 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize, imageOption),
    markerPosition = new kakao.maps.LatLng(37.526834, 127.035726); // 마커가 표시될 위치입니다

// 마커를 생성합니다
var marker = new kakao.maps.Marker({
    position: markerPosition,
    image: markerImage // 마커이미지 설정
});

// 마커가 지도 위에 표시되도록 설정합니다
marker.setMap(map);
</script>
<div id="N_text">
  <h2>clara wedding</h2>
  <h3>Branch</h3>
  <p>트렌디한 스타일과 고급스러운 소재로 꾸준히 사랑받고 있는 클라라웨딩은
  현재 글로벌 프랜차이즈 마카오 지점과 서울 본점 이외 전국 10곳의 국내 프랜차이즈를 운영 중으로,
  대구, 부산, 수원, 안산, 인천, 전주, 창원, 춘천, 포항, 제주에서 만나보실 수 있습니다.
  클라라웨딩에서는 세심한 배려로 신부의 워너비인 동화 속 공주처럼 우아하고 로맨틱하게 만들어드리겠습니다.</p>

</div>


</body>


</html>


<?
include_once(G5_THEME_PATH.'/tail.php');
?>
