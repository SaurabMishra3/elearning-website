<?php
  require_once("includes/header.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<h1>Subjects we Provide!</h1>
<h3>Learn more with us!</h3>

<div class="row">
  <div class="column">
    <div class="card">
      <a href="webDevelopment.php"><h3>Web Development</h3></a>
      <p>Learn Web Development</p>
      
    </div>
  </div>

  <div class="column">
    <div class="card">
      <a href="appDevelopment.php"><h3>App Development</h3></a>
      <p>Learn App Development</p>
      
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <a href="cProgramming.php"><h3>C Programming</h3></a>
      <p>Learn C programming</p>
     
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <a href="python.php"><h3>Python</h3></a>
      <p>Learn Python Programming</p>
      
    </div>
  </div>
</div>

</body>
</html>
<?php
  require_once("includes/footer.php");
?>