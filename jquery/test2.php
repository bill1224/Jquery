<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src='jquery-1.11.1.min.js'></script>
  </head>
  <body>
    <button id='clickme'>Click me</button>
    <p id='result'>I am a paragraph</p>
    <script>
      $('#clickme').click(function(){
        $('#result').html('you clicked the button!')
        $('#result').css('color','blue')
        $('#result').css('font-size','3em')
      })
    </script>
  </body>
</html>
