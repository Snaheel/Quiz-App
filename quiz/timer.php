<?php session_start();
$_SESSION['count']=60;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Java Quiz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <?php $c=$_SESSION['count']; ?>
    <div>Time Left =<span id="timer"><?php echo "".$c; ?></span></div>
    <input type="text" onfocus="javascript:timer();">
    <script type="text/javascript">
    function timer() {
      var count = document.getElementById('timer');
      console.log(""+count);
      var x = setInterval(function() {
        count--;
        if (count == 0) {
          document.write("BYe-Bye");
          clearInterval(x);
        }
        else
          document.getElementById("timer").innerHTML = count;
      }, 1000);
    }
</script>
</body>
</html>
