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
<body>
  <div class="container">
    <h1><?= $_SESSION['name'] ?> your score is <?= $_SESSION['marks'] ?></h1>
    <h3>Q1</h3>
    <h4>Selected:<?= $_SESSION['ques1'] ?></h4>
    <h4>Answer:<?= $_SESSION['a1'] ?></h4>
    <p>Explaination:The capital of India is <code>Delhi</code></p>
    <h3>Q2</h3>
    <h4>Selected:<?= $_SESSION['q2'] ?></h4>
    <h4>Answer:<?= $_SESSION['a2'] ?></h4>
    <p>Explaination:The capital of Spain is <code>Madrid</code></p>
    <h3>Q3</h3>
    <h4>Selected:<?= $_SESSION['q3'] ?></h4>
    <h4>Answer:<?= $_SESSION['a3'] ?></h4>
    <p>Explaination:The Power to decide an election petition is vested on the <code>High Courts</code></p>
    <h3>Q4</h3>
    <h4>Selected:<?= $_SESSION['q4'] ?></h4>
    <h4>Answer:<?= $_SESSION['a4'] ?></h4>
    <p>the 1st non Test playing country to beat India in an International match is <code>Srilanka</code></p>
    <h3>Q5</h3>
    <h4>Selected:<?= $_SESSION['q5'] ?></h4>
    <h4>Answer:<?= $_SESSION['a5'] ?></h4>
    <p>Carl Lewis won <code>4</code> gold medals</p>
  </div>
</body>
</html>
<?php
session_unset();
}
else {
  header("location: index.php");
}
?>
