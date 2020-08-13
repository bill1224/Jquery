<!-- 마우스를 올리면 사진이 바뀌도록 -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src='jquery-1.11.1.min.js'></script>
  </head>
  <body>
    <h2 id='test'>Pass the mouse over me</h2>
    <script>
      $('#test').mouseenter(function() {$(this).html('hey,stop~!!')})
      $('#test').mouseleave(function() {$(this).html('where did you go?!!')})

      //비슷한 기능
      // $('#test').hover(function() {$(this).html('hey,stop~!!')},
      //                 function() {$(this).html('where did you go?!!')})
      //
      // $('#test').mouseover(function() {$(this).html('hey,stop~!!')})
      // $('#test').mouseout(function() {$(this).html('where did you go?!!')})
    </script>
  </body>
</html>
