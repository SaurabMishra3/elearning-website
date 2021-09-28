<?php
	$page_title = "Learn with Saurabh";
	include_once('includes/header.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing:border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.container {
  padding: 64px;
}

.row:after {
  content: "";
  display: table;
  clear: both
}

.column-66 {
  float: left;
  width: 66.66666%;
  padding: 20px;
}

.column-33 {
  float: left;
  width: 33.33333%;
  padding: 20px;
}

.large-font {
  font-size: 48px;
}

.xlarge-font {
  font-size: 64px
}

.button {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  background-color: #04AA6D;
}

img {
  display: block;
  height: auto;
  max-width: 100%;
}

@media screen and (max-width: 1000px) {
  .column-66,
  .column-33 {
    width: 100%;
    text-align: center;
  }
  img {
    margin: auto;
  }
}
</style>
</head>
<body>

<div style="text-align:center">
  <h2>Welcome to Learn With Saurabh!</h2>
  <h3>We provide these courses for you.</h3>
</div>

<!-- The Web development section -->
<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b>Web development</b></h1>
      <h1 class="large-font" style="color:MediumSeaGreen;"><b>Why Web Development?</b></h1>
      <p><span style="font-size:36px">Learn like a pro.</span> Web development is the work involved in developing a Web site for the Internet (World Wide Web) or an intranet (a private network). ... Among Web professionals, "Web development" usually refers to the main non-design aspects of building Web sites: writing markup and coding..</p>
     <a href="webDevelopment.php" button class="button">Read More</button></a>
    </div>
    <div class="column-33">
        
        <img src="assets/img/web2.jpg" width="335" height="471">
    </div>
  </div>
</div>

<!-- App development section -->
<div class="container" style="background-color:#f1f1f1">
  <div class="row">
    <div class="column-33">
      <img src="assets/img/app.png" alt="App" width="335" height="471">
    </div>
    <div class="column-66">
      <h1 class="xlarge-font"><b>App Development</b></h1>
      <h1 class="large-font" style="color:red;"><b>Introduction to Kotlin!</b></h1>
      <p><span style="font-size:24px">A revolution in Android Development.</span> Mobile app development is the act or process by which a mobile app is developed for mobile devices, such as personal digital assistants, enterprise digital assistants or mobile phones. ... As part of the development process, mobile user interface (UI) design is also essential in the creation of mobile apps..</p>
     <a  href="appDevelopment.php" button class="button" style="background-color:red">Read More</button></a>
    </div>
  </div>
</div>

<!-- The C programming section -->
<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b>The Language</b></h1>
      <h1 class="large-font" style="color:MediumSeaGreen;"><b>Why C?</b></h1>
      <p><span style="font-size:36px">Learn C like a pro.</span> C is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, with a static type system. By design, C provides constructs that map efficiently to typical machine instructions..</p>
     <a href="cProgramming.php" button class="button">Learn More</button></a>
    </div>
    <div class="column-33">
        <img src="assets/img/c.jpg" width="335" height="471" >
    </div>
  </div>
</div>
<!--Python section-->


<div class="container" style="background-color:#f1f1f1">
  <div class="row">
    <div class="column-33">
      <img src="assets/img/py.jpg" alt="App" width="335" height="471">
    </div>
    <div class="column-66">
      <h1 class="xlarge-font"><b>The Language</b></h1>
      <h1 class="large-font" style="color:red;"><b>Why Python?</b></h1>
      <p><span style="font-size:24px">Learn Python like a pro.</span> Python is an interpreted high-level general-purpose programming language. Its design philosophy emphasizes code readability with its use of significant indentation. Its language constructs as well as its object-oriented approach aim to help programmers write clear, logical code for small and large-scale projects.</p>
     <a  href="python.php" button class="button" style="background-color:red">Read More</button></a>
    </div>
  </div>
</div>

</body>
</html>
<?php
include_once("includes/footer.php")
?>