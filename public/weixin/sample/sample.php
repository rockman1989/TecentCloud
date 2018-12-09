<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wxacbe44532cfc6f59", "21770342142151e23834f5e336471384");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="http://res.wx.qq.com/open/libs/weui/0.4.3/weui.min.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css" rel="stylesheet">
	
	<script src="http://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
	
	<script src="http://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.9/css/weather-icons.min.css">
	<link rel="stylesheet" href="/static/css/style.css">
  <title></title>
</head>
<body>
  <a href="javascript:;" onclick="scanQRCode()" class="weui_btn weui_btn_primary">微信扫一扫</a>
  <div data-role="page" id="pageone">
  <div data-role="header">
  <h1>欢迎来到我的主页</h1>
  </div>

 <!--  
 <div data-role="content">
  <p>欢迎！</p>
  </div>
 --> 
 <div id="content">
 	<div class="wrapper">
	<p id="forget" class="hide">别忘了换衣服。 <strong><a href="">城市!</a></strong></p>
  <div class="align">
		<div class="app">
			<div id="main" class="green poor-Mozilla">
				
				<div id="central">
					<div id="top-menu-info">
						<p id="location">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<span id="cityName">Beijing</span>
						</p>
					</div>
					
					<div id="temp-div" class="weather-menu-show">
						<div id="icon-temp">
							<p>Cloudy</p>
							<i class="wi wi-cloudy" aria-hidden="true"></i>
						</div>
						<p id="current-temp-big">
							<span id="ctb">6</span>
							<span id="ctbicon">°C</span>
						</p>
					</div>
										
					<div id="weather-menu" class="show">
						
						<ul>
							<li id="atmli" class="aswshown">
								<p class="li_title">气候条件</p>
								<div id="humidity" class="col-1">
									<i class="wi wi-humidity" aria-hidden="true"></i>
									<span>湿度 <br> <span id="hd">84%</span></span>
								</div>
								<div id="pressure" class="col-2">
									<i class="wi wi-barometer" aria-hidden="true"></i>
									<span>气压 <br> <span id="pd">755.31 mmHg</span></span>
								</div>
								<div id="visibility" class="col-3">
									<i class="wi wi-day-fog" aria-hidden="true"></i>
									<span>能见度 <br>  <span id="vd">25.91 km</span></span>
								</div>
							</li>
							<li id="sunli" class="aswshown">
								<p class="li_title">日出/日落</p>
								<div id="sunrise" class="col-1">
									<i class="wi wi-sunrise" aria-hidden="true"></i>
									<span>日出 <br> <span id="srd">7:34</span></span>
								</div>
								<div id="totallight" class="col-2">
									<i class="wi wi-time-4" aria-hidden="true"></i>
									<span>日光照射<br> <span id="td">9:26</span></span>
								</div>
								<div id="sunset" class="col-3">
									<i class="wi wi-sunset" aria-hidden="true"></i>
									<span>日落 <br> <span id="ssd">16:00</span></span>
								</div>
							</li>
							<li id="windli" class="aswshown">
								<p class="li_title">风条件</p>
								<div id="chill" class="col-1">
									<i class="wi wi-thermometer-exterior" aria-hidden="true"></i>
									<span>寒冷 <br> <span id="cd">39°C</span></span>
								</div>
								<div id="direction" class="col-2">
									<i class="wi wi-direction-right" aria-hidden="true"></i>
									<span>方向 <br> <span id="dd">50°</span></span>
								</div>
								<div id="speed" class="col-3">
									<i class="wi wi-strong-wind" aria-hidden="true"></i>
									<span>风速 <br> <span id="sd">27.36 km/h</span></span>
								</div>
							</li>
							<li id="forecastli">
								<p class="li_title">9天的预测 </p>
								<span class="day_left">
									<i class="fa fa-chevron-left" aria-hidden="true"></i>
								</span>
								<span class="day_right">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</span>
									<div class="li_row" style="transform: translateX(0px);">
										
											<div class="col-1 day10item">
												<i class="wi wi-cloudy" aria-hidden="true"></i>
												<span>Mon<br>7°C | 2°C</span>
											</div>
											<div class="col-2 day10item">
												<i class="wi wi-showers" aria-hidden="true"></i>
												<span>Tue<br>8°C | 0°C</span>
											</div>
											<div class="col-3 day10item">
												<i class="wi wi-showers" aria-hidden="true"></i>
												<span>Wed<br>12°C | 8°C</span>
											</div>
									
											<div class="col-1 day10item">
												<i class="wi wi-thunderstorm" aria-hidden="true"></i>
												<span>Thu<br>12°C | 8°C</span>
											</div>
											<div class="col-2 day10item">
												<i class="wi wi-cloudy" aria-hidden="true"></i>
												<span>Fri<br>10°C | 5°C</span>
											</div>
											<div class="col-3 day10item">
												<i class="wi wi-showers" aria-hidden="true"></i>
												<span>Sat<br>11°C | 4°C</span>
											</div>

											<div class="col-1 day10item">
												<i class="wi wi-thunderstorm" aria-hidden="true"></i>
												<span>Sun<br>12°C | 9°C</span>
											</div>
											<div class="col-2 day10item">
												<i class="wi wi-strong-wind" aria-hidden="true"></i>
												<span>Mon<br>11°C | 6°C</span>
											</div>
											<div class="col-3 day10item">
												<i class="wi wi-showers" aria-hidden="true"></i>
												<span>Tue<br>8°C | 5°C</span>
											</div>
									</div>
																		
									<div id="dotmenu">
										<span class="currentday"></span>
										<span class=""></span>
										<span class=""></span>
									</div>
							</li>
						</ul>
					</div>
				</div>						
				
			</div>
		</div>
		
		
	</div>
</div>
</div>
  <div data-role="footer">
  <h1>底部文本</h1>
  </div>
</div>
  
</body>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  /*
   * 注意：
   * 1. 所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
   * 2. 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
   * 3. 常见问题及完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
   *
   * 开发中遇到问题详见文档“附录5-常见错误及解决办法”解决，如仍未能解决可通过以下渠道反馈：
   * 邮箱地址：weixin-open@qq.com
   * 邮件主题：【微信JS-SDK反馈】具体问题
   * 邮件内容说明：用简明的语言描述问题所在，并交代清楚遇到该问题的场景，可附上截屏图片，微信团队会尽快处理你的反馈。
   */
  wx.config({
    debug: true,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
      // 所有要调用的 API 都要加到这个列表中
      "getLocation"
    ]
  });
  wx.ready(function () {

    // 在这里调用 API
	  wx.getLocation({
		  type: 'wgs84', // 默认为wgs84的gps坐标，如果要返回直接给openLocation用的火星坐标，可传入'gcj02'
		  success: function (res) {
		  var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
		  var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。
		  var speed = res.speed; // 速度，以米/每秒计
		  var accuracy = res.accuracy; // 位置精度

		  $.ajax({
			  type: 'post',
			  url: 'http://192.144.177.47/index.php/weather/weather/weatherAPI',
			  data: {latitude: latitude, longitude: longitude},
			  dataType: 'json',
			  success: function (data) {
				  var weatherjson = eval("("+data[0]['weather']+")");
				  var city = data['city'];
				  var district = weatherjson['data']['city'];
				  //console.log(district);
				  var date = weatherjson['data']['forecast'][0]['date'];
				  var high = weatherjson['data']['forecast'][0]['high'];
				  var fengli = weatherjson['data']['forecast'][0]['fengli'];
				  var low = weatherjson['data']['forecast'][0]['low'];
				  var fengxiang = weatherjson['data']['forecast'][0]['fengxiang'];
				  var type = weatherjson['data']['forecast'][0]['type'];

				  $("#location").children("span").html(city); 
					$("#icon-temp").children("p").html(type);
					//alert(weatherjson['forecast']);
				  console.log(date);
			  },
			  error: function () {
			  	alert("程序异常");
			  }
		  });
		  }
		  });
  });
  function scanQRCode() {
      wx.ready(function () {
          wx.scanQRCode({
            needResult: 0, // 默认为0，扫描结果由微信处理，1则直接返回扫描结果，
            scanType: ["qrCode","barCode"], // 可以指定扫二维码还是一维码，默认二者都有
            success: function (res) {
                var result = res.resultStr; // 当needResult 为 1 时，扫码返回的结果
            }
          });
      });
  }
</script>
</html>
