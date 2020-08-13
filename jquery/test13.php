<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src='jquery-1.11.1.min.js'></script>
  </head>
  <body>
    <div class="info"></div>
    <script>
    pets = {
      cobi : 'dog',
      hobbang : 'dog',
      현우 : 'pig',
      승수 : 'cat',
      진수 : 'horse'
    }

    dogs = []

    $.each(pets, function(name, type){
      if(type == 'dog') dogs.push(name)
    })
    $('.info').html('The dog names are: ' +dogs.join('  &  '))
    </script>
  </body>
</html>
