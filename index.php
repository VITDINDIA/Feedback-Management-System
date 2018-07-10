<?php
$con=mysqli_connect("localhost","root","","feedback");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Feedback Mgt. System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#myModal1" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/1.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Feedback Management System</h3>
          <p>For Students</p>
        </div>      
      </div>

      <div class="item">
        <img src="img/2.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Feedback Management System</h3>
          <p>For Students</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container">    
  <h3 style="text-align: center;">How We Do</h3><br>
  <div class="row">
    <div class="col-sm-3">
       <span class="glyphicon glyphicon-log-in" style="font-size:200px;"></span>
      <p >Students Login</p>
    </div>
    <div class="col-sm-3">
    <span class="glyphicon glyphicon-folder-close" style="font-size:200px;"></span>
      <p >Feedback Form</p>    
    </div>
    <div class="col-sm-3"> 
       <span class="glyphicon glyphicon-folder-open" style="font-size:200px;"></span>
      <p >Select Subject</p>    
    </div>
    <div class="col-sm-3"> 
       <span class="glyphicon glyphicon-stats" style="font-size:200px;"></span>
      <p >Input Rating</p>    
    </div>
  </div>
  
</div><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        <p>
		<form method="POST">
	<div class="form-group">
		<label for="uid">UID:</label>
		<input type="text" class="form-control" id="uid" name="uid">
	</div>
	<div class="form-group">
		<label for="pwd">Password:</label>
		<input type="password" class="form-control" id="pwd" name="pwd">
	</div>
	<button type="submit" name="login" class="btn btn-default">Submit</button>
	</form>
    <?php
    if(isset($_POST['login']))
    {
    $uid=$_POST['uid'];$pwd=$_POST['pwd'];
    $res=mysqli_query($con,"SELECT * FROM `login` WHERE `uid`='$uid' and `upass`='$pwd'");
    $cnt=mysqli_num_rows($res);
    if($cnt == 1)
         {
     echo"<script> location.href='home.php';</script>";   
         }
     else
     {
     echo"<script>alert('Invalid UID/Password'); location.href='index.php';</script>";     
     }    
    }
    
    ?>
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" name="regsubmit" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>