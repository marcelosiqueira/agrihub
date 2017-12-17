
<?php
$name0   = '8 - Bumba Meu Boi';
// $percent0 = 50;
$percent0 = 70;

$name2   = '2 - DevAgro Unic';
// $percent2 = 20;
$percent2 = 30;

$name3   = '3 - DevBovino';
// $percent3 = 50;
$percent3 = 40;

$name4   = '6 - El Touro';
// $percent4 = 15;
$percent4 = 70;

$name5   = '5 - Fundão';
// $percent5 = 45;
$percent5 = 70;

$name6   = '4 - Medir Boi';
// $percent6 = 20;
$percent6 = 40;

$name7   = '7 - SemiCaipira';
// $percent7 = 40;
$percent7 = 45;

$name9   = '1 - AgriTec';
// $percent9 = 15;
$percent9 = 40;

?>
<html>
  <head>
    <title>Hackathometro</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf8">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <style>
        html,
        body {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        * {
            font-family: 'Roboto', sans-serif !important;

        }

        .timer {
            position: absolute;
            top: 0;
            left: 0;
        }

        .wrapper,
        .teams {
            width: 100vw;
            height: 100vh;
            padding: 0;
            margin: 0;
        }
        .teams-center {
            width: 700px;
            margin: auto;
        }

        .wrapper {
            background: #333;
        }

        .team {
            box-sizing: border-box;
            position: relative;
            height: 100vh;
            width: calc(100vw / 15);
            float: left;
        }

        .team-bar {
            width: 40%;
            height: 100%;
            margin: 0 auto;
            position: relative;
        }

        .team-bar-internal {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;

            transition: all 0.5s;
        }

        .vertical-text {
            position: absolute;
            bottom: calc(100vw / 15);
            transform: rotate(-90deg);
            transform-origin: left top 0;
            color: #fff;
            text-transform: uppercase;
            font-family: Helvetica, Arial;
            font-size: 1em;
            width: 100vw;
            line-height: 40px;
            text-shadow: -1px 0 #000, 0 1px #000, 1px 0 #000, 0 -1px #000;
        }

        .team-logo {
            position: absolute;
            bottom: 0;
            left: 0;
            background: #555;
            background-size: cover;
            width: 100%;
            height: calc(100vw / 15);
        }

        .logo {
            width: 200px;
            height: auto;
            position: absolute;
            right: 30px;
            top: 20px;
            z-index: 10;
        }

        .links {
            text-align: center;
            color: white;
            color: sans-serif;
            top: 50%;
            position: absolute;
            width: 100%;
            margin-top: -100px;
            z-index: 0999999;
            opacity: 0.75;

        }

        .links > div {
            font-size: 2em;
        }

    </style>
<script src="file://www.tickcounter.com/loader.js" async=""></script></head>

<body>

    <div class="wrapper">
        <!-- <img src="logo.png" class="logo"> -->

        <div class="links" style:"display:none;">
            <div class="linha-1">&nbsp;</div>
            <div class="linha-2">&nbsp;</div>
            <div class="linha-3">https://choosealicense.com/</div>
        </div>


        <div class="timer">
            <div class="tc_div_14273" style="width:100vw;height:200px; margin: 20px auto;"><a title="ENTREGA" href="file://www.tickcounter.com/widget/countdown/1512304200000/america-sao_paulo/hms/33339CA74F4F4F439CA74/400/C0C0C00/ENTREGA_DO_C%C3%93DIGO">ENTREGA DO CÓDIGO E PDF</a><a title="Countdown" href="https://www.tickcounter.com/">Countdown</a></div>
        </div>
        <div class="teams">
          <div class="teams-center">
            <!-- Team #9 -->
            <div class="team ">
                <div class="team-bar ">
                    <div id="team-9" class="team-bar-internal" style="background-color: rgb(255, 87, 34); height: <?= $percent9;?>%;">
                        <div class="vertical-text"><?= $name9;?></div>
                    </div>
                </div>

                <div class="team-logo" id="team-logo-9" style="background: url(&quot;https://firebasestorage.googleapis.com/v0/b/hackatometro-admin.appspot.com/o/cyclops_2.png?alt=media&amp;token=37eee116-199d-473f-b642-35d04101cb8f&quot;) center center / cover rgb(51, 51, 51);"></div>
            </div>
            <!-- Team #2 -->
            <div class="team ">
                <div class="team-bar ">
                    <div id="team-2" class="team-bar-internal" style="background-color: rgb(244, 67, 54); height: <?= $percent2;?>%;">
                        <div class="vertical-text"><?= $name2;?></div>
                    </div>
                </div>

                <div class="team-logo" id="team-logo-2" style="background: url(&quot;https://firebasestorage.googleapis.com/v0/b/hackatometro-admin.appspot.com/o/dare_devil_2.png?alt=media&amp;token=334083a2-cdec-4e6d-9339-f37a560d3e7f&quot;) center center / cover rgb(51, 51, 51);"></div>
            </div>
            <!-- Team #3 -->
            <div class="team ">
                <div class="team-bar ">
                    <div id="team-3" class="team-bar-internal" style="background-color: rgb(76, 175, 80); height: <?= $percent3;?>%;">
                        <div class="vertical-text"><?= $name3;?></div>
                    </div>
                </div>

                <div class="team-logo" id="team-logo-3" style="background: url(&quot;https://firebasestorage.googleapis.com/v0/b/hackatometro-admin.appspot.com/o/GhostRider_2.png?alt=media&amp;token=fd0f311d-bbff-4b4b-95a3-44b0c36260de&quot;) center center / cover rgb(51, 51, 51);"></div>
            </div>
            <!-- Team #6 -->
            <div class="team ">
                <div class="team-bar ">
                    <div id="team-6" class="team-bar-internal" style="background-color: rgb(240, 98, 146); height: <?= $percent6;?>%;">
                        <div class="vertical-text"><?= $name6;?></div>
                    </div>
                </div>

                <div class="team-logo" id="team-logo-6" style="background: url(&quot;https://firebasestorage.googleapis.com/v0/b/hackatometro-admin.appspot.com/o/emma_frost_2.png?alt=media&amp;token=8beffadb-8c67-4072-aa5e-01d494eb2a53&quot;) center center / cover rgb(51, 51, 51);"></div>
            </div>
            <!-- Team #5 -->
            <div class="team ">
                <div class="team-bar ">
                    <div id="team-5" class="team-bar-internal" style="background-color: rgb(101, 31, 255); height: <?= $percent5;?>%;">
                        <div class="vertical-text"><?= $name5;?></div>
                    </div>
                </div>

                <div class="team-logo" id="team-logo-5" style="background: url(&quot;https://firebasestorage.googleapis.com/v0/b/hackatometro-admin.appspot.com/o/spider-man_2.png?alt=media&amp;token=18b62d71-3e0c-4308-acea-8e4b429e5a63&quot;) center center / cover rgb(51, 51, 51);"></div>
            </div>
            <!-- Team #4 -->
            <div class="team ">
                <div class="team-bar ">
                    <div id="team-4" class="team-bar-internal" style="background-color: rgb(119, 119, 119); height: <?= $percent4;?>%;">
                        <div class="vertical-text"><?= $name4;?></div>
                    </div>
                </div>

                <div class="team-logo" id="team-logo-4" style="background: url(&quot;https://firebasestorage.googleapis.com/v0/b/hackatometro-admin.appspot.com/o/black_panther_1.png?alt=media&amp;token=00c72edc-c1b8-4317-9863-d63fb8cfbcf8&quot;) center center / cover rgb(51, 51, 51);"></div>
            </div>
            <!-- Team #7 -->
            <div class="team ">
                <div class="team-bar ">
                    <div id="team-8" class="team-bar-internal" style="background-color: rgb(121, 85, 72); height: <?= $percent7;?>%;">
                        <div class="vertical-text"><?= $name7;?></div>
                    </div>
                </div>

                <div class="team-logo" id="team-logo-8" style="background: url(&quot;https://firebasestorage.googleapis.com/v0/b/hackatometro-admin.appspot.com/o/colossus_2.png?alt=media&amp;token=8494ce9a-f50f-471c-803d-2fc7de87a78b&quot;) center center / cover rgb(51, 51, 51);"></div>
            </div>
            <!-- Team #0 -->
            <div class="team">
                <div class="team-bar">
                    <div id="team-0" class="team-bar-internal" style="background-color: rgb(41, 121, 255); height: <?= $percent0;?>%;">
                        <div class="vertical-text"><?= $name0;?></div>
                    </div>
                </div>
                <div class="team-logo" id="team-logo-0" style="background: url(&quot;https://firebasestorage.googleapis.com/v0/b/hackatometro-admin.appspot.com/o/iron_man_2.png?alt=media&amp;token=8746b54b-032c-496e-a873-6eb659255d2c&quot;) center center / cover rgb(51, 51, 51);"></div>
            </div>

          </div>

        </div>
    </div>


    <script type="text/javascript">
        (function() {
            var s = document.createElement('script');
            s.src = "//www.tickcounter.com/loader.js";
            s.async = 'async';
            s.onload = function() {
                tc_widget_loader('tc_div_14273', 'Countdown', 650, ["1513540800000", "america-sao_paulo", "hms", "33333339CA74F4F4F439CA74", "400", "C0C0C00", "ENTREGA DO CÓDIGO"]);
            };
            s.onreadystatechange = s.onload;
            var head = document.getElementsByTagName('head')[0];
            head.appendChild(s);
        }());
    </script>
</body>
</html>
