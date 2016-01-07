<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Simon!</title>
    <link rel="stylesheet" href="/css/simon.css">
    <link rel="stylesheet" href="/css/simon_animations.css">
</head>
<body>
    <div id="game">
        <div class="color-btn" id="green"></div>
        <div class="color-btn" id="red"></div>
        <div class="color-btn" id="yellow"></div>
        <div class="color-btn" id="blue"></div>
        <div id="middle-btn"><span id="middle-btn-text">Start!</span></div>
    </div>
    <div id="options-area">
        <h2>Musical Notes</h2>
        <label for="change-blue-note">
            Blue: <select class="change-note" id="change-blue-note"></select>
        </label>
        <label for="change-yellow-note">
            Yellow: <select class="change-note" id="change-yellow-note"></select>
        </label>
        <label for="change-red-note">
            Red: <select class="change-note" id="change-red-note"></select>
        </label>
        <label for="change-green-note">
            Green: <select class="change-note" id="change-green-note"></select>
        </label>
        <button id="original-simon-btn">Original Simon</button>
        <button id="latest-simon-btn">Latest Simon</button>
        <button id="amin-btn">A minor</button>
        <button id="edim-btn">E Diminished</button>
        <button id="fifths-btn">Fifths</button>
        <button id="little-lamb-btn">Little Lamb</button>
        <button id="smoke-on-the-water-btn">Smoke on the Water</button>

    </div>
    <div id="loading-bar"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/js/simon.js"></script>
</body>
</html>
