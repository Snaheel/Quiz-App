<!DOCTYPE html>
<html lang="en">
<head>
  <title>java quiz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="jumbotron" style="margin-top:25px;">
    <h1 class="text-center">Welcome to Political Quiz Simulator</h1>
  </div>
  <center>
    <form class="form-horizontal" action="login.php" method="post">
    <div class="form-group">

      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
      </div>
    </div>
    <div class="form-group">

      <div class="col-sm-10">
        <input type="password" name="pass" class="form-control" id="pwd"  placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-3 col-xs-6">
        <button type="submit" class="btn btn-primary" name="login">Login</button>
      </div>
      <div class="col-sm-3 col-xs-6">
        <a href="signup.php" class="btn btn-primary">Sign Up</a>
      </div>
    </div>
  </form>
</center>
</div>
</body>
</html>
