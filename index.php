<html>
<head>
	<title>Help Me Campus</title>
	<script src="js/jquery-2.0.2.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/signin.css" media="screen" />
</head>
<body>
	<div class="container">
     
       <?php  		
		  session_start();
          if(isset($_SESSION['username']))
            {
            	include 'php/html_modulized/user_nav.php'; 	
            } 
          else
          	include 'php/html_modulized/nav.php';  
      ?>

    <div class="mainContainer">
       <!-- Main jumbotron for a primary marketing message or call to action -->
       <div class="jumbotron">
        <h1>HelpMeCampus!</h1>
        <p>Need help in your homework?  Join HelpMeCampus right now!
          <br>Find a student that specializes in that major nearby!
           Or just find someone to hang out with you!
        </p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>


      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Need Help?</h2>
          <p>Join now and get acess to our database of students nearby in your appartment/Dorm. Search by the subject in the homework you need help with.  </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Bored?</h2>
          <p>Find someone with your same major nearby and hang out! Might meet your new bestfriend that shares all your same interests! </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <hr>
    </div>
      <footer>
        <p>&copy; Company 2014</p>
      </footer>
	
        <script src="bootstrap/bootstrap.min.js"></script>
        <script src="js/navigation.js"></script>
</body>
</html>

   

