<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src='jquery-1.11.1.min.js'></script>
  </head>
  <body>
    <h2>Click in and out of these fields</h2>
    <input id='first'><input id='second'><input><input>
    <script>
      $(document).ready(function() {
        $('#first').click(function() {
           $('#first').css({
             'background':"red",
             'color':"white",
             'border':"1px solid red"
           });
           alert(".first:focus");
        });
        $('#second').click(function() {
           $('#second').css({
             'background':"blue",
             'color':"white",
             'border':"1px solid red"
           });
           alert(".first:focus");
        });
      });
    </script>
  </body>
</html>
