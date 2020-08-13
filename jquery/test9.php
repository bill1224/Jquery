<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src='jquery-1.11.1.min.js'></script>
  </head>
  <body>
    <button id='fadeout'>fadeout</button>
    <button id='fadein'>fadein</button>
    <button id='fadeToggle'>fadeToggle</button>
    <button id='fadeto'>fadeto</button>
    <p id='text'>click the buttons above</p>
    <script>
      $('#fadeout').click(function() {$('#text').fadeOut('slow')})
      $('#fadein').click(function() {$('#text').fadeIn('slow')})
      $('#fadeToggle').click(function() {$('#text').fadeToggle('slow')})
      $('#fadeto').click(function() {$('#text').fadeTo('slow',0.5)})
    </script>
  </body>
</html>
