<?php
    define('SITE_KEY', '6LeWN6sZAAAAAO64V6iRTBwaMHqicL2lG-uHXx4S');
    define('SECRET_KEY','');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>4080 eLoki Test</title>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles.css"></link>
    <script src="https://www.google.com/recaptcha/api.js?render=6LeWN6sZAAAAAO64V6iRTBwaMHqicL2lG-uHXx4S"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

</head>
<body>
    
    <header>
        <h1>4080 eLoki Test</h1>
        <h3>We are verifying your request</h3>
        <h3>One moment please...
    </header>
    <div class="container">
        <div class="flex-container">
  <form id="form" action="/four.php" method="post">
  <input type="hidden" name="token_field" id="token_field"/>
  <input id="button" type="button" value="Enter" onclick="submitForm();" />
  </form>
  </div>
    </div>

  
  <script>
      function submitForm(){
        grecaptcha.ready(function() { 
          grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'submit'}).then(function(token) {
            document.getElementById('token_field').value=token;
            document.getElementById("form").submit();
          });
        });
      }
  </script>

</body>

</html>