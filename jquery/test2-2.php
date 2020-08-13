<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src='jquery-1.11.1.min.js'></script>
  </head>
  <body>
    <button>Click me</button>
    <p id='result'>I am a paragraph</p>
    <script>
      $('button').click(function(){
        $('button').toggleClass('switch')
        $('#result').html('you clicked the button!')
      })
    </script>
  </body>
</html>
