<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src='jquery-1.11.1.min.js'></script>
    <style media="screen">
      #ball{
        position :relative;
      }
      #box{
        width :640px;
        height:480px;
        background:green;
        border:1px solid #444;
      }
    </style>
  </head>
  <body>
    <div id='box'>
      <img id='ball' src='./ball.jpg'>
    </div>
    <script>
    bounce()
    function bounce()
    {
      $('#ball')
       .animate({left:'100px', top:'380px'}, 'slow', 'linear')
       .animate({left:'0px', top:'0px'}, 'slow', 'swing')
       .animate({left:'540px', top:'380px'}, 'slow', 'swing')
       .animate({left:'0px', top:'100px'}, 'slow', 'swing')
       .animate({left:'540px', top:'0px'}, 'slow', 'swing')
       .animate({left:'200px', top:'200px'}, 'slow', 'swing')
       .animate({left:'0px', top:'100px'}, 'slow', 'swing',bounce)
    }
    $('#ball').click(function() { $(this).finish()})
    </script>
  </body>
</html>
