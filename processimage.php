
<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Gaussian Blur - Image Processing Algorithm - Demo</title>
   <link href='/favicon.ico' rel='icon' type='image/x-icon'/>
<body>
<style>
   html, body {
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
   }

   #notice {
      display: block;
      position: absolute;
      bottom: 0;
      height: 45px;
      width: 100%;
      background: #74cfae;
      border-top: 5px solid #4F8371;
      padding: 0;
      margin: 0;
      color: #000;
      font-family: monospace;
   }

   .frame {
      margin: 20px;
      overflow: auto;
   }

   #notice p {
      margin: 10px;
   }
</style>

<div class="frame">
   <div id="canvas">
   </div>

   <div>
      <button id="blur" disabled>Blur</button>
      <button id="reset" disabled>Reset</button>
   </div>
</div>
<script>
   (function() {
      var init = function() {
         canvas.width = this.width/2;//hung
         canvas.height = this.height/2;//hung
         ctx = canvas.getContext('2d');

         ctx.drawImage(this, 0, 0, canvas.width, canvas.height);

         btnReset.removeAttribute('disabled');
         btnBlur.removeAttribute('disabled');

         btnReset.addEventListener('click', reset);
         btnBlur.addEventListener('click', function() {
            btnBlur.setAttribute('disabled', true);
            btnBlur.textContent = '...';
            setTimeout(blur, 0);
         });
      };

      var reset = function() {
         ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
      };

      var blur = function() {
         /** {ImageData} */
         var data = ctx.getImageData(0, 0, canvas.width, canvas.height);
         var px = data.data;
         var tmpPx = new Uint8ClampedArray(px.length);

         tmpPx.set(px);

         for (var i = 0, len = px.length; i < len; i++) {
            if (i % 4 === 3) {
				//px[i]=px[i-3]-30;//hung
               continue;
            }

            px[i] = (tmpPx[i]
               + (tmpPx[i - 4] || tmpPx[i])
               + (tmpPx[i + 4] || tmpPx[i])
               + (tmpPx[i - 4 * data.width] || tmpPx[i])
               + (tmpPx[i + 4 * data.width] || tmpPx[i])
               + (tmpPx[i + 4 * data.width + 4] || tmpPx[i])
               + (tmpPx[i + 4 * data.width - 4] || tmpPx[i])
               + (tmpPx[i - 4 * data.width + 4] || tmpPx[i])
               + (tmpPx[i - 4 * data.width - 4] || tmpPx[i])
               ) / 9;
         }

         ctx.putImageData(data, 0, 0);
         delete tmpPx;
         btnBlur.removeAttribute('disabled');
         btnBlur.textContent = 'Blur';
      };

      var canvas = document.createElement('canvas');
      var ctx = null;
      var btnReset = document.getElementById('reset');
      var btnBlur = document.getElementById('blur');
      var img = new Image();
      img.onload = init;
      img.src = 'img/CuteBabyGirl.jpg';

      document.getElementById('canvas').appendChild(canvas);
   }());
</script>
<canvas id="myCanvas" width="300" height="200"
style="border:1px solid #d3d3d3;">
Your browser does not support the canvas element.
</canvas>

<script>
var canvas = document.getElementById("myCanvas");
var ctx=canvas.getContext("2d");
ctx.font="30px Comic Sans MS";
ctx.fillStyle = "red";
ctx.textAlign = "center";
ctx.fillText("Hello World", canvas.width/2, canvas.height/2);
</script>

<!--
<script>
   (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
         (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
         m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
   })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

   ga('create', 'UA-36191661-1', 'easylearntutorial.com');
   ga('send', 'pageview');

</script>
-->
</body>
</html>