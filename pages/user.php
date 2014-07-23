<html>
<head>
  <title></title>
    <script src="../js/jquery-2.0.2.js"></script>
    <script src="../bootstrap/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css" media="screen" />
  <?php 
		
		session_start();
		include '../php/entities/User.php';
		include '../php/check_login.php';
		if(isset($_SESSION['user']))
        {
			$objUser = json_decode($_SESSION['user'], true);
        }
		
    ?>
</head>
<body>

<div class="container">
  <!-- NAV -->
  <?php include '../php/html_modulized/user_nav.php'; ?>
<!-- NAV -->
  <hr>
<div class="container">
	<div class="row">
  		<div class="col-sm-10"><h1><?php echo $objUser['username']; ?></h1></div>
    	<div class="col-sm-2"></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              
          <ul class="list-group">
            <li class="list-group-item text-muted">Profile</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Joined</strong></span> <?php echo $objUser['joined']; ?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Last seen</strong></span> Yesterday</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Real name</strong></span> <?php echo $objUser['name']; ?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Major</strong></span> <?php echo $objUser['major']; ?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Appartment/Dorm</strong></span> <?php echo $objUser['app_name']; ?></li>          
          </ul> 
               
          <div class="panel panel-default">
            <div class="panel-heading">School <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><?php echo $objUser['school']; ?></div>
          </div>        
        </div><!--/col-3-->
    	<div class="col-sm-9">
          
          <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
            <li><a href="#settings" data-toggle="tab">Settings</a></li>
          </ul>
              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
              <div class="table-responsive">
                <?php include'search.php'; ?>
                <hr>
                <div class="row">
                  <div class="col-md-4 col-md-offset-4 text-center">
                  	<ul class="pagination" id="myPager"></ul>
                  </div>
                </div>
              </div><!--/table-resp-->
              
              <hr>
             </div><!--/tab-pane-->
             <div class="tab-pane" id="settings">
					<?php include '../php/html_modulized/settings_form.php'; ?>               	
                  <hr>
                 
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
    <script> 
        $('#myTab a').click(function (e) {
    	 e.preventDefault();
    	 $(this).tab('show');
    });
    </script>
  <script src="../bootstrap/bootstrap.min.js"></script>
</body>
</html>