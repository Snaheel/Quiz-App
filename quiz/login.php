<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php session_start(); ?>
<?php
  if(isset($_POST['login']))
  {
    $email=$_POST['email'];
    $password=$_POST['pass'];
    //echo $email."<br>";
    //echo $password;
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"quiz");
    $query="Select *from userprofile where email='$email' and password='$password'";
    $rs=mysqli_query($con,$query);

    if($row=mysqli_fetch_array($rs))
    {
      //echo $row['name'];echo $row['marks'];
      $_SESSION['login'] = "true";
      $_SESSION['name'] = $row['name'];
      $_SESSION['marks'] = $row['marks'];
			header("Location: quiz.php");
    }
    else {?>
      <div class="container " >
        <div class="row">
          <div class="col-md-6 col-centered">
      <div class="alert alert-danger ">
  <strong>Error!</strong> Wrong Username or password
</div></div></div></div>
<?php
    }
  }
?>
</body>
</html>
