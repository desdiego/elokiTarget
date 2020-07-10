<!DOCTYPE html>
<html lang="en">
<head>
    <title>4080 eLoki Test</title>
    <?php 
    define('SITE_KEY', '6LeWN6sZAAAAAO64V6iRTBwaMHqicL2lG-uHXx4S');
    define('SECRET_KEY','');
    
    if($_POST){
        function getResponse($SecretKey){
            $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");
            $Return = json_decode($Response);
            return $Return;
        }
       $Return = getResponse($_POST['token_field']);
        if($Return->success == true && $Return->score > 0.5){
            echo '<script>console.log("Hurray")</script>';
        }else{
            echo '<script>console.log("Oh NO")</script>';
            header('Location: /verify.php');
        }
    }else{
        header('Location: /i1.php');
    }
    
?>

   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171069833-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-171069833-1');
  

</script>
<link href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./styles.css"></link>
</head>

<body>
    <div id="nav-bar">
        <div class="top-bar">
          <a href="https://analytics.google.com/analytics/web/?authuser=2"><span>Analytics</span></a>
            <a href="./index.php"><span>Home</span></a>
            <span class="active">One</span>
            <a href="./i2.php"><span>Two</span></a>
            <a href="./i3.php"><span>Three</span></a>
            <a href="./i4.php"><span>Four</span></a>
            <a href="./i5.php"><span>Five</span></a>
        </div>
    </div>

    <header class="small">
        <h2>Test Page One</h2>
        <h3>Malwareless Web Analytics Pollution reCaptcha Prevention</h3>
    </header>
    <div class="container">
        <div class="flex-container">
                    <h1>reCaptcha v3</h1>
                    
        </div>
    </div>
</body>

</html>