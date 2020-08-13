<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src='jquery-1.11.1.min.js'></script>
  </head>
  <body>
    <h2>Press some Key</h2>
    <div class="result"></div>
    <script>
      $(document).keypress(function(event)
      {
        Key = String.fromCharCode(event.which)
        if (Key >= 'a' && Key <= 'z' ||
            Key >= 'A' && Key <= 'Z' ||
            Key >= '0' && Key <= '9')
        {
            var str = "you pressed: \n"+ Key;
            $('.result').html(str)
            //event.preventDefault()
        }
      })
    </script>
  </body>
</html>
