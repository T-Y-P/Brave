</div>
<div class="p-5 text-center ">
	<h6><?php $this->options->title() ?></h6>
	<h6 class="lover-card-title"><?php $this->options->footersay() ?></h6>
	<p class="h6"> Powered by <a href="http://typecho.org" target="_blank">Typecho</a> ※ Theme is <a href="https://blog.zwying.com" target="_blank">Brave</a></p>
</div>
<!--鼠标点击特效-->
<script type="text/javascript">
jQuery(function () {
        $("html").click(function(e) {
            var a_idx = Math.floor((Math.random() * 30));
            var a = new Array(
                "希望全世界停电 我可以偷偷跑去亲你", "我会爱你很久很久","我在贩卖日落 你像神明一样将阳光撒向我","陪伴本身就是这个世界上最了不起的安慰方式", "嘿，我是一朵云ლ(⁰⊖⁰ლ)", "❤"
                   ,"陪你把岁月熬成清酒 陪你把孤夜熬成温柔","❤","月光下邂逅的是爱情和你","祝眉目舒展 顺问冬按","只想拥你入怀","这个世界乱糟糟的 而你干干净净","日月星辰之外 你是第四种难得","我会在每个有意义的时刻 远隔山海与你共存","山脚下遇见的你 我们山顶见","想试试在你迎面跑来一把抱住你的感觉","在生命里的旅程里 遇见你真好","如果不曾遇见 岂知生命如何","❤"
                   ,"想和你一起走过下雪后的天","在我贫瘠的土地上你是最后的玫瑰","今晚月色很美呢","r=a(1-sinθ)","天青色等烟雨 而我在等你","你是我这一生等了半世未拆的礼物","你养我 我养你 两人爱情甜蜜蜜","❤","你不用多好，我喜欢就好","愿有岁月可回首 且以深情共白头"
                 );
            var color1 = Math.floor((Math.random() * 255))
            var color2 = Math.floor((Math.random() * 255));
            var color3 = Math.floor((Math.random() * 255));

            var $i = $("<span />").text(a[a_idx]);
            // a_idx = (a_idx + 1) % a.length;
            var x = e.pageX,
                y = e.pageY;
            $i.css({
                "z-index": 9999999999999 ,
                "top": y - 20,
                "left": x,
                "position": "absolute",
                "font-family":"mmm",
                "fontSize":Math.floor((Math.random() * 5)+10),
                "font-weight": "bold",
                "color": "rgb("+color1+","+color2+","+color3+")",
                "-webkit-user-select":"none",
                "-moz-user-select":"none",
                "-ms-user-select":"none",
                "user-select":"none",
            });
            $("body").append($i);
            $i.animate({
                    "top": y - 200,
                    "opacity": 0
                },
                3000,
                function() {
                    $i.remove();
                });
        });
    });
</script>
<!--雪花特效-->
<!--<script src="https://cdn.jsdelivr.net/gh/pyrrole-ach/IMG/snowy.js"></script>-->
<script src="https://lf6-cdn-tos.bytecdntp.com/cdn/expire-1-M/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
<script src="https://lf26-cdn-tos.bytecdntp.com/cdn/expire-1-M/nprogress/0.2.0/nprogress.min.js"></script>
<script>
	window.showSiteRuntime = function() {
		site_runtime = $("#site_runtime");
		if (!site_runtime) {
			return;
		}
		window.setTimeout("showSiteRuntime()", 1000);
		start = new Date("<?php $this->options->lovetime(); ?>");
		now = new Date();
		T = (now.getTime() - start.getTime());
		i = 24 * 60 * 60 * 1000;
		d = T / i;
		D = Math.floor(d);
		h = (d - D) * 24;
		H = Math.floor(h);
		m = (h - H) * 60;
		M = Math.floor(m);
		s = (m - M) * 60
		S = Math.floor(s);
		site_runtime.html("第 <span class=\"bigfontNum\">" + D + "</span> 天 <span class=\"bigfontNum\">" + H + "</span> 小时 <span class=\"bigfontNum\">" + M + "</span> 分钟 <span class=\"bigfontNum\">" + S + "</span> 秒");
	};
	showSiteRuntime();
	$(document).pjax('a', '#Pjax', {
		fragment: '#Pjax',
		timeout: 6000
	});
	$(document).on('pjax:send', function() {
		NProgress.start();
	});
	$(document).on('pjax:complete', function() {
		<?php if ($this->options->pjaxContent) : $this->options->pjax回调(); ?><?php endif; ?>
		NProgress.done();
	});
</script>
<script>
	window.showMeetRuntime = function() {
		meet_runtime = $("#meet_runtime");
		if (!meet_runtime) {
			return;
		}
		window.setTimeout("showMeetRuntime()", 1000);
		start = new Date("<?php $this->options->meetingtime(); ?>");
		now = new Date();
		T = (now.getTime() - start.getTime());
		i = 24 * 60 * 60 * 1000;
		d = T / i;
		D = Math.floor(d);
		h = (d - D) * 24;
		H = Math.floor(h);
		m = (h - H) * 60;
		M = Math.floor(m);
		s = (m - M) * 60
		S = Math.floor(s);
		meet_runtime.html("第 <span class=\"bigfontNum\">" + D + "</span> 天 <span class=\"bigfontNum\">" + H + "</span> 小时 <span class=\"bigfontNum\">" + M + "</span> 分钟 <span class=\"bigfontNum\">" + S + "</span> 秒");
	};
	showMeetRuntime();
</script>
<script>
	window.showEndRuntime = function() {
		<?php $this->options->anniversary() ?> = $("#<?php $this->options->anniversary() ?>");
		if (!<?php $this->options->anniversary() ?>) {
			return;
		}
		window.setTimeout("showEndRuntime()", 1000);
		end = new Date("<?php $this->options->endingtime(); ?>");
		now = new Date();
		T = (end.getTime() - now.getTime());
		i = 24 * 60 * 60 * 1000;
		d = T / i;
		D = Math.floor(d);
		h = (d - D) * 24;
		H = Math.floor(h);
		m = (h - H) * 60;
		M = Math.floor(m);
		s = (m - M) * 60
		S = Math.floor(s);
		<?php $this->options->anniversary() ?>.html("<span class=\"bigfontNum\">" + D + "</span> 天 <span class=\"bigfontNum\">" + H + "</span> 小时 <span class=\"bigfontNum\">" + M + "</span> 分钟 <span class=\"bigfontNum\">" + S + "</span> 秒");
	};
	showEndRuntime();
</script>
<script src="<?php $this->options->themeUrl('/base/main.js'); ?>"></script>
<?php $this->footer(); ?>
<?php if ($this->options->底部自定义) : $this->options->底部自定义(); ?><?php endif; ?>
 <style type="text/css">
  .snow-container{position:fixed;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:100001;}
  </style>
  <div class="snow-container"></div>
<!--下雪特效，雪花会被鼠标吹走-->
<canvas id="Snow"></canvas>
<script>
    if(true){
        (function() {
            var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame ||
            function(callback) {
                window.setTimeout(callback, 1000 / 60);
            };
            window.requestAnimationFrame = requestAnimationFrame;
        })();
        
        (function() {
            var flakes = [],
                canvas = document.getElementById("Snow"),
                ctx = canvas.getContext("2d"),
                flakeCount = 200,
                mX = -100,
                mY = -100;
            
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            
            function snow() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
            
                for (var i = 0; i < flakeCount; i++) {
                    var flake = flakes[i],
                        x = mX,
                        y = mY,
                        minDist = 150,
                        x2 = flake.x,
                        y2 = flake.y;
            
                    var dist = Math.sqrt((x2 - x) * (x2 - x) + (y2 - y) * (y2 - y)),
                        dx = x2 - x,
                        dy = y2 - y;
            
                    if (dist < minDist) {
                        var force = minDist / (dist * dist),
                            xcomp = (x - x2) / dist,
                            ycomp = (y - y2) / dist,
                            deltaV = force / 2;
            
                        flake.velX -= deltaV * xcomp;
                        flake.velY -= deltaV * ycomp;
            
                    } else {
                        flake.velX *= .98;
                        if (flake.velY <= flake.speed) {
                            flake.velY = flake.speed
                        }
                        flake.velX += Math.cos(flake.step += .05) * flake.stepSize;
                    }
            
                    ctx.fillStyle = "rgba(255,255,255," + flake.opacity + ")";
                    flake.y += flake.velY;
                    flake.x += flake.velX;
                        
                    if (flake.y >= canvas.height || flake.y <= 0) {
                        reset(flake);
                    }
            
                    if (flake.x >= canvas.width || flake.x <= 0) {
                        reset(flake);
                    }
            
                    ctx.beginPath();
                    ctx.arc(flake.x, flake.y, flake.size, 0, Math.PI * 2);
                    ctx.fill();
                }
                requestAnimationFrame(snow);
            };
            
            function reset(flake) {
                flake.x = Math.floor(Math.random() * canvas.width);
                flake.y = 0;
                flake.size = (Math.random() * 3) + 2;
                flake.speed = (Math.random() * 1) + 0.5;
                flake.velY = flake.speed;
                flake.velX = 0;
                flake.opacity = (Math.random() * 0.5) + 0.3;
            }
            
            function init() {
                for (var i = 0; i < flakeCount; i++) {
                    var x = Math.floor(Math.random() * canvas.width),
                        y = Math.floor(Math.random() * canvas.height),
                        size = (Math.random() * 3) + 2,
                        speed = (Math.random() * 1) + 0.5,
                        opacity = (Math.random() * 0.5) + 0.3;
            
                    flakes.push({
                        speed: speed,
                        velY: speed,
                        velX: 0,
                        x: x,
                        y: y,
                        size: size,
                        stepSize: (Math.random()) / 30 * 1,
                        step: 0,
                        angle: 180,
                        opacity: opacity
                    });
                }
            
                snow();
            };
            
            document.addEventListener("mousemove", function(e) {
                mX = e.clientX,
                mY = e.clientY
            });
            window.addEventListener("resize", function() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
            });
            init();
        })();
    }
</script>
<style>
    #Snow{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 99999;
        background: rgba(125,137,95,0.1);
        pointer-events: none;
    }
</style>
 <!--require APlayer -->
<link rel="stylesheet" href="/usr/themes/Brave/assets/css/APlayer.min.css">
<script src="/usr/themes/Brave/assets/js/APlayer.min.js"></script>
 <!--require MetingJS -->
<script src="/usr/themes/Brave/assets/js/Meting.min.js"></script>
<meting-js
	server="netease"
	type="playlist"
	id="<?php $this->options->neteaseid() ?>"
	fixed="true"
	autoplay="false"
	loop="all"
	>
</meting-js>
<!--评论框粒子特效-->
<script type="text/javascript" src="/usr/themes/Brave/assets/js/comment.js"></script>
<!--灯笼-->
<!--<div class="deng-box2">-->
<!--  <div class="deng">-->
<!--    <div class="xian"></div>-->
<!--    <div class="deng-a">-->
<!--      <div class="deng-b">-->
<!--        <div class="deng-t">年</div>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="shui shui-a">-->
<!--      <div class="shui-c"></div>-->
<!--      <div class="shui-b"></div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<!--<div class="deng-box3">-->
<!--  <div class="deng">-->
<!--    <div class="xian"></div>-->
<!--    <div class="deng-a">-->
<!--      <div class="deng-b">-->
<!--        <div class="deng-t">新</div>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="shui shui-a">-->
<!--      <div class="shui-c"></div>-->
<!--      <div class="shui-b"></div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<!--<div class="deng-box1">-->
<!--  <div class="deng">-->
<!--    <div class="xian"></div>-->
<!--    <div class="deng-a">-->
<!--      <div class="deng-b">-->
<!--        <div class="deng-t">乐</div>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="shui shui-a">-->
<!--      <div class="shui-c"></div>-->
<!--      <div class="shui-b"></div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<!--<div class="deng-box">-->
<!--  <div class="deng">-->
<!--    <div class="xian"></div>-->
<!--    <div class="deng-a">-->
<!--      <div class="deng-b">-->
<!--        <div class="deng-t">快</div>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="shui shui-a">-->
<!--      <div class="shui-c"></div>-->
<!--      <div class="shui-b"></div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<!--<style type="text/css">.deng-box {-->
<!--  position: fixed;-->
<!--  top: -40px;-->
<!--  right: -20px;-->
<!--  z-index: 9999;-->
<!--  pointer-events: none-->
<!--}-->

<!--.deng-box1 {-->
<!--  position: fixed;-->
<!--  top: -30px;-->
<!--  right: 10px;-->
<!--  z-index: 9999;-->
<!--  pointer-events: none-->
<!--}-->

<!--.deng-box2 {-->
<!--  position: fixed;-->
<!--  top: -40px;-->
<!--  left: -20px;-->
<!--  z-index: 9999;-->
<!--  pointer-events: none-->
<!--}-->

<!--.deng-box3 {-->
<!--  position: fixed;-->
<!--  top: -30px;-->
<!--  left: 10px;-->
<!--  z-index: 9999;-->
<!--  pointer-events: none-->
<!--}-->

<!--.deng-box1 .deng, .deng-box3 .deng {-->
<!--  position: relative;-->
<!--  width: 120px;-->
<!--  height: 90px;-->
<!--  margin: 50px;-->
<!--  background: #d8000f;-->
<!--  background: rgba(216, 0, 15, .8);-->
<!--  border-radius: 50% 50%;-->
<!--  -webkit-transform-origin: 50% -100px;-->
<!--  -webkit-animation: swing 5s infinite ease-in-out;-->
<!--  box-shadow: -5px 5px 30px 4px #fc903d-->
<!--}-->

<!--.deng {-->
<!--  position: relative;-->
<!--  width: 120px;-->
<!--  height: 90px;-->
<!--  margin: 50px;-->
<!--  background: #d8000f;-->
<!--  background: rgba(216, 0, 15, .8);-->
<!--  border-radius: 50% 50%;-->
<!--  -webkit-transform-origin: 50% -100px;-->
<!--  -webkit-animation: swing 3s infinite ease-in-out;-->
<!--  box-shadow: -5px 5px 50px 4px #fa6c00-->
<!--}-->

<!--.deng-a {-->
<!--  width: 100px;-->
<!--  height: 90px;-->
<!--  background: #d8000f;-->
<!--  background: rgba(216, 0, 15, .1);-->
<!--  margin: 12px 8px 8px 8px;-->
<!--  border-radius: 50% 50%;-->
<!--  border: 2px solid #dc8f03-->
<!--}-->

<!--.deng-b {-->
<!--  width: 45px;-->
<!--  height: 90px;-->
<!--  background: #d8000f;-->
<!--  background: rgba(216, 0, 15, .1);-->
<!--  margin: -4px 8px 8px 26px;-->
<!--  border-radius: 50% 50%;-->
<!--  border: 2px solid #dc8f03-->
<!--}-->

<!--.xian {-->
<!--  position: absolute;-->
<!--  top: -20px;-->
<!--  left: 60px;-->
<!--  width: 2px;-->
<!--  height: 20px;-->
<!--  background: #dc8f03-->
<!--}-->

<!--.shui-a {-->
<!--  position: relative;-->
<!--  width: 5px;-->
<!--  height: 20px;-->
<!--  margin: -5px 0 0 59px;-->
<!--  -webkit-animation: swing 4s infinite ease-in-out;-->
<!--  -webkit-transform-origin: 50% -45px;-->
<!--  background: orange;-->
<!--  border-radius: 0 0 5px 5px-->
<!--}-->

<!--.shui-b {-->
<!--  position: absolute;-->
<!--  top: 14px;-->
<!--  left: -2px;-->
<!--  width: 10px;-->
<!--  height: 10px;-->
<!--  background: #dc8f03;-->
<!--  border-radius: 50%-->
<!--}-->

<!--.shui-c {-->
<!--  position: absolute;-->
<!--  top: 18px;-->
<!--  left: -2px;-->
<!--  width: 10px;-->
<!--  height: 35px;-->
<!--  background: orange;-->
<!--  border-radius: 0 0 0 5px-->
<!--}-->

<!--.deng:before {-->
<!--  position: absolute;-->
<!--  top: -7px;-->
<!--  left: 29px;-->
<!--  height: 12px;-->
<!--  width: 60px;-->
<!--  content: " ";-->
<!--  display: block;-->
<!--  z-index: 999;-->
<!--  border-radius: 5px 5px 0 0;-->
<!--  border: solid 1px #dc8f03;-->
<!--  background: orange;-->
<!--  background: linear-gradient(to right, #dc8f03, orange, #dc8f03, orange, #dc8f03)-->
<!--}-->

<!--.deng:after {-->
<!--  position: absolute;-->
<!--  bottom: -7px;-->
<!--  left: 10px;-->
<!--  height: 12px;-->
<!--  width: 60px;-->
<!--  content: " ";-->
<!--  display: block;-->
<!--  margin-left: 20px;-->
<!--  border-radius: 0 0 5px 5px;-->
<!--  border: solid 1px #dc8f03;-->
<!--  background: orange;-->
<!--  background: linear-gradient(to right, #dc8f03, orange, #dc8f03, orange, #dc8f03)-->
<!--}-->

<!--.deng-t {-->
<!--  font-family: 华文行楷, Arial, Lucida Grande, Tahoma, sans-serif;-->
<!--  font-size: 3.2rem;-->
<!--  color: #dc8f03;-->
<!--  font-weight: 700;-->
<!--  line-height: 85px;-->
<!--  text-align: center-->
<!--}-->

<!--.night .deng-box, .night .deng-box1, .night .deng-t {-->
<!--  background: 0 0 !important-->
<!--}-->

<!--@-moz-keyframes swing {-->
<!--  0% {-->
<!--    -moz-transform: rotate(-10deg)-->
<!--  }-->
<!--  50% {-->
<!--    -moz-transform: rotate(10deg)-->
<!--  }-->
<!--  100% {-->
<!--    -moz-transform: rotate(-10deg)-->
<!--  }-->
<!--}-->

<!--@-webkit-keyframes swing {-->
<!--  0% {-->
<!--    -webkit-transform: rotate(-10deg)-->
<!--  }-->
<!--  50% {-->
<!--    -webkit-transform: rotate(10deg)-->
<!--  }-->
<!--  100% {-->
<!--    -webkit-transform: rotate(-10deg)-->
<!--  }-->
<!--}</style> -->
</body>

</html>
