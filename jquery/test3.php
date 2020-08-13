<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src='jquery-1.11.1.min.js'></script>
  </head>
  <body>
    <h2>Click in and out of these fields</h2>
    <input id='first'><input><input><input>
    <script>
      $('#first').focus()
      $('input').focus(function() {$(this).css('background', '#ff0')})
      $('input').blur(function() {$(this).css('background', '#aaa')})
    </script>
  </body>
</html>
