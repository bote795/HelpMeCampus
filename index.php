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
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>


      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
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

   

