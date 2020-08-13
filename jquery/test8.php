<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src='jquery-1.11.1.min.js'></script>
  </head>
  <body>
    <button id='hide'>Hide</button>
    <button id='show'>show</button>
    <p id='text'>click the hide and show buttons</p>
    <script>
      $('#hide').click(function() {$('#text').hide('fast', 'linear')})
      $('#show').click(function() {$('#text').show('fast', 'linear')})
    </script>
  </body>
</html>
