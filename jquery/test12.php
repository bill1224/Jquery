<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src='jquery-1.11.1.min.js'></script>
  </head>
  <body>
    <p>
      <button id='getdoc'>get document width</button>
      <button id='getwin'>get window width</button>
      <button id='getdiv'>get div width</button>
      <button id='setdiv'>set div width to 150 pixels</button>
    </p>
    <div id='result' style='width:300px; height:50px; background:#def;'></div>
    <script>
    $('#getdoc').click(function(){
      $('#result').html('Document width: ' + $('#result').width())
    })
    $('#getwin').click(function(){
      $('#result').width($(window).width())
      $('#result').html('Document width: ' + $(window).width())
    })
    $('#getdiv').click(function(){
      $('#result').html('div width: ' + $('#result').width())
    })
    $('#setdiv').click(function(){
      $('#result').width(150)
      $('#result').html('div width: ' + $('#result').width())
    })
    </script>
  </body>
</html>
