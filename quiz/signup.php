<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="padding-top:50px;margin-left:5%;">

  <div class="container">
  <form method="post" >
    <div class="form-group">
      <label>Name:</label>
      <input type="text" name="name" class="form-control">
    </div>
  <div class="form-group">
    <label>Email address:</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label >Number:</label>
    <input type="text" name="number" class="form-control">
  </div>
  <div class="form-group">
    <label >Password:</label>
    <input type="text" name="pass" class="form-control">
  </div>
  <center><button type="submit" class="btn btn-success" name="signup">Sign Up</button><center>
  </form>
  </div>

  <?php
    if(isset($_POST['signup']))
    {
      $name=$_POST['name'];$email=$_POST['email'];$number=$_POST['number'];$password=$_POST['pass'];
      $con=mysqli_connect("localhost","root","");
      mysqli_select_db($con,"quiz");
      $query="INSERT INTO userprofile(`email`, `number`, `password`, `name`,`marks`) VALUES ('$email',$number,'$password','$name',0)";
      $rs=mysqli_query($con,$query);
      if($rs=="true")
      {
        header("Location: index.php");
      }
      else {
        echo "Error";
        //echo "<div class="alert alert-danger">Please fill the form correctly</div>";
      }
    }
    ?>

</body>
</html>
