<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Flowfield-Painting with P5js</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/theme/css/normalize.css">
    <link rel="stylesheet" href="assets/theme/css/main.css">
    <script src="assets/theme/vendor/modernizr/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser.
    Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve
    your experience.</p>
<![endif]-->


<div class="container" style="position: absolute; background: rgba(255,255,255, 0.2); max-width: 600px">
    <div class="row">
        <div id="settings">
        <div class="col50">
            <div class="slider">
                <label>sliderXinc</label>
                <div id="sliderXinc"></div>
                <div id="sliderXincValue"></div>
            </div>
            <hr>
            <div class="slider">
                <label>sliderYinc</label>
                <div id="sliderYinc"></div>
                <div id="sliderYincValue"></div>
            </div>
            <hr>
            <div class="slider">
                <label>sliderZinc</label>
                <div id="sliderZinc"></div>
                <div id="sliderZincValue"></div>
            </div>
            <hr>
            <div class="framerate">
                <div class="clearfix">
                    <label class="pull-left">Framerate: </label>
                    <div id="framerate" class="pull-left"></div>
                </div>
                <div id="btn-save-canvas"></div>
                <div id="btn-clear"></div>
                <div id="btn-no-loop"></div>
                <div id="btn-loop"></div>
            </div>
        </div>
            <div class="col50">
                <div class="slider">
                    <label>sliderParticleQty</label>
                    <div id="sliderParticleQty"></div>
                    <div id="sliderParticleQtyValue"></div>
                </div>
                <hr>
                <div class="slider">
                    <label>sliderParticleSpeed</label>
                    <div id="sliderParticleSpeed"></div>
                    <div id="sliderParticleSpeedValue"></div>
                </div>
                <hr>
                <div class="slider">
                    <label>sliderFieldMagnitude</label>
                    <div id="sliderFieldMagnitude"></div>
                    <div id="sliderFieldMagnitudeValue"></div>
                </div>
                <hr>
                <div class="slider">
                    <label>sliderGridScale</label>
                    <div id="sliderGridScale"></div>
                    <div id="sliderGridScaleValue"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/theme/vendor/jquery/jquery-3.1.1.min.js"><\/script>')</script>
<script src="assets/theme/js/plugins.js"></script>
<script src="assets/theme/vendor/p5.js/lib/p5.min.js"></script>
<script src="assets/theme/vendor/p5.js/lib/addons/p5.dom.min.js"></script>
<script src="assets/theme/vendor/p5.js/lib/addons/p5.sound.min.js"></script>
<script src="assets/theme/js/flowfield-painting/particles.js"></script>
<script src="assets/theme/js/flowfield-painting/main.js"></script>
</body>
</html>