<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src='jquery-1.11.1.min.js'></script>
  </head>
  <body>
    <button id='slideup'>slideup</button>
    <button id='slidedown'>slidedown</button>
    <button id='slideToggle'>slideToggle</button>
    <div id='para' style='background:#def'>
      <h2>아무거나 적습니다</h2>
      <img src="ball.jpg" width="100%">
    </div>
    <script>
    $('#slideup').click(function() {$('#para').slideUp('slow')})
    $('#slidedown').click(function() {$('#para').slideDown('slow')})
    $('#slideToggle').click(function() {$('#para').slideToggle('slow')})
    </script>
  </body>
</html>
