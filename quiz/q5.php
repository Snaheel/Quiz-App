<?php session_start();
if(isset($_SESSION['login'])=="true")
{
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
<body style="padding-top:2%;padding-left:10%;">
  <?php
  $con=mysqli_connect("localhost","root","");
  mysqli_select_db($con,"quiz");?>
  <div class="container"><?php
      $query="Select question,choice1,choice2,choice3,answer from quiz where quizid=5";
      $rs=mysqli_query($con,$query);
      $row=mysqli_fetch_array($rs);
      $ans=$row['answer'];
      echo "<h1 style='height:200px;'>".$row['question']."</h1>";?>
      <form method="post">
        <div class="radio">
          <label><input type="radio" name="optradio" value="<?php echo $row['choice1']; ?>"><?php echo $row['choice1']."<br>"; ?></label><br>
          <label><input type="radio" name="optradio" value="<?php echo $row['answer']; ?>"><?php echo $row['answer']."<br>"; ?></label><br>
          <label><input type="radio" name="optradio" value="<?php echo $row['choice2']; ?>"><?php echo $row['choice2']."<br>"; ?></label><br>
          <label><input type="radio" name="optradio" value="<?php echo $row['choice3']; ?>"><?php echo $row['choice3']."<br>"; ?></label><br>
        </div>
        <div>
          <input type="submit" name="submit" value="Submit" class="btn btn-success">
        </div>
      </form>
    </div>
  </body>
</html>
<?php
if(isset($_POST['submit']))
{
  $val=$_POST['optradio'];
  $val=trim($val);
  $ans=trim($ans);
  $_SESSION['q5']=$val;$_SESSION['a5']=$ans;
  //echo $_SESSION['marks'];
  //echo "ans=".$ans."<br>";
  //echo "val=".$val;
  if($val==$ans){
    $_SESSION['marks']++;
  }
  //echo $_SESSION['marks'];
 header("location: result.php");
}
}
else {
  header("location: index.php");
}
 ?>
