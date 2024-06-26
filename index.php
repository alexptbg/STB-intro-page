<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>STB IPTV #0</title>
    <!--favicon-->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32.png" />
    <link rel="icon" type="image/png" sizes="48x48" href="assets/favicon/favicon-48.png" />
    <link rel="icon" type="image/png" sizes="64x64" href="assets/favicon/favicon-64.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96.png" />
    <link rel="icon" type="image/png" sizes="128x128" href="assets/favicon/favicon-128.png" />
    <link rel="icon" type="image/png" sizes="144x144" href="assets/favicon/favicon-144.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/favicon-192.png" />
    <link rel="icon" type="image/png" sizes="256x256" href="assets/favicon/favicon-256.png" />
    <link rel="icon" type="image/png" sizes="384x384" href="assets/favicon/favicon-384.png" />
    <link rel="icon" type="image/png" sizes="512x512" href="assets/favicon/favicon-512.png" />
    <link rel="apple-touch-icon" type="image/png" sizes="57x57" href="assets/favicon/apple-touch-icon-57.png" />
    <link rel="apple-touch-icon" type="image/png" sizes="60x60" href="assets/favicon/apple-touch-icon-60.png" />
    <link rel="apple-touch-icon" type="image/png" sizes="72x72" href="assets/favicon/apple-touch-icon-72.png" />
    <link rel="apple-touch-icon" type="image/png" sizes="76x76" href="assets/favicon/apple-touch-icon-76.png" />
    <link rel="apple-touch-icon" type="image/png" sizes="114x114" href="assets/favicon/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" type="image/png" sizes="120x120" href="assets/favicon/apple-touch-icon-120.png" />
    <link rel="apple-touch-icon" type="image/png" sizes="152x152" href="assets/favicon/apple-touch-icon-152.png" />
    <link rel="apple-touch-icon" type="image/png" sizes="167x167" href="assets/favicon/apple-touch-icon-167.png" />
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="assets/favicon/apple-touch-icon-180.png" />
    <link rel="mask-icon" type="image/png" href="assets/favicon/safari-pinned-tab.svg" color="#ffffff" />
    <meta name="msapplication-TileColor" content="#66ffff" />
    <meta name="msapplication-TileImage" content="assets/favicon/ms-tile-144.png" />
    <meta name="date.created" content="2022-04-01" />
    <link rel="stylesheet" type="text/css" href="assets/css/reset.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css?v=1.94" />
    <script type="text/javascript" src="assets/js//prefixfree.min.js"></script>
    <!-- #00DD00 -->
  </head>
  <body>
    <!-- partial:index.partial.html -->
    <div class="overlay"></div>
    <div class="scanline"></div>
    <div class="wrapper">
      <div class="content clearfix">

        <header class="site clearfix">
          <div class="col one">
            <img src="assets/img/logo-mono.png" alt="stb logo" width="740" height="729" id="logo-v" />
          </div>
          <div class="col two">
            <h4><strong>S</strong>et-<strong>T</strong>op-<strong>B</strong>ox <strong>I</strong>PTV <strong>S</strong>ystems<br />STB IPTV NETWORK TESTER</h4>
            <p>-----------------------</p>
            <p>STB v 1.9.4</p>
            <p>&copy; <script type="text/javascript">
                document.write(new Date().getFullYear());
              </script> Alex Soares</p>
            <p id="clock"></p>
            <p><?php echo $_SERVER['REMOTE_ADDR']; ?></p>
            <p>-- MAIN SERVER --</p>
          </div>
        </header>

        <nav class="site clear">
          <ul>
            <li><a class="none" href="javascript:void(0)">SERVER #1</a></li>
            <li><a class="sone" href="javascript:void(0)">SERVER #2</a></li>
            <li><a class="sone" href="javascript:void(0)">SERVER #3</a></li>
            <li><a class="sone" href="javascript:void(0)">SERVER #4</a></li>
          </ul>
        </nav>

        <div class="row">
          <div class="one-half column">
            <div class="left">
            <p>WELCOME TO STB IPTV NETWORK TESTER</p>
            <p class="clear"><br /></p>
            <p>Initializing systems...</p>
            <p>System Administrator Integrated Message System - Online</p>
            <p>System Administrator (SYSADM) - Online</p>
            <p class="clear"><br /></p>
            <p>Analyzing...</p>
            <p>Checking servers status...</p>
            <p>if ($servers === 'online') { check->latency(); }</p>
            <div class="terminal"></div>
            <a class="button refresh" alt="refresh" href="">Refresh</a>
            </div>
          </div>
          <div class="one-half column right" id="console"></div>
        </div>

      </div>
    </div>
    <!-- partial -->
    <script type="text/javascript" src='assets/js/jquery.min.js'></script>
    <script type="text/javascript" src='assets/js/jquery.autosize-min.js'></script>
    <script type="text/javascript" src='assets/js/moment.js'></script>
    <script type="text/javascript" src='assets/js/moment-timezone-with-data.min.js'></script>
    <script type="text/javascript" src="assets/js/script.js?v=1.93"></script>
    <script type="text/javascript">
      $(function() {
        //time
        startTime();
        function startTime() {
          $('#clock').html(moment().tz("Europe/Sofia").format('YYYY-MM-DD HH:mm:ss'));
        }
        setInterval(startTime,1000);
      });
      const servers = ["https://eesystems.net/stb/", "https://stb2.ka-ex.net/", "https://stb3.ka-ex.net/", "https://stb4.ka-ex.net/"];
      //servers.forEach(element => console.log(element));
      var s = 0;
      servers.forEach((server, s) => {
        let start = Date.now();
        s++;
        //console.log(server);
        let img = new Image();
        img.src = server + "assets/images/ping.png";
        img.onload = function() {
          //console.log(s + "Online");
          $('span#s' + s).text('Online');
          $("ul li:nth-child(" + s + ")").removeClass();
          $("ul li:nth-child(" + s + ") a").removeClass();
          $("ul li:nth-child(" + s + ")").addClass('on');
          $("ul li:nth-child(" + s + ") a").addClass('on');
          $("ul li:nth-child(" + s + ") a").attr("href", server);
          let timeTaken = Date.now() - start;
          $(".terminal").append('<p class="on">Server #' + s + ' is Online. Response: '+timeTaken+' ms</p>');
          //console.log("Total time taken : " + timeTaken + " milliseconds");
        }
        img.onerror = function() {
          //console.log(s + "Offline");
          $("ul li:nth-child(" + s + ") a").removeClass();
          $("ul li:nth-child(" + s + ")").removeClass();
          $("ul li:nth-child(" + s + ") a").removeClass();
          $("ul li:nth-child(" + s + ")").addClass('off');
          $("ul li:nth-child(" + s + ") a").addClass('off');
          $("ul li:nth-child(" + s + ") a").attr("href", "javascript:void(0)");
          let timeTaken = Date.now() - start;
          $(".terminal").append('<p class="off">Server #' + s + ' is Offline.</p>');
          //console.log("Total time taken : " + timeTaken + " milliseconds");
        }
        $('body').on("contextmenu", function() {
          return false;
        });
      });
    </script>
  </body>

</html>
