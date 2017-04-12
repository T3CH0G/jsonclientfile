<!doctype html>
<html lang="en">
<head>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"> </script>
  <script>
  $(function(){
    $.getJSON("http://local.test.com/json.php?method=getAllUsers&jsoncallback=?",
      function(data){
        for(aUser in data){
          var user = data[aUser];
          $( ".test" ).append(user.first_name+" "+user.last_name+"<br>");
        }
      })
  })


  </script>
</head>
<body>
<div class="test">
</div>
</body>
</html>