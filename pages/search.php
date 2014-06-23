<html>
<head>
	<title></title>
  
    <script src="../js/jquery-2.0.2.js"></script>
    <script src="../bootstrap/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css" media="screen" />
</head>
<body>
<table id="NewTable" class="table table-striped table-hover">
	<thead><!-- thead -->
		<tr>
			<th>Name</th>
			<th>major</th>
          	<th>grad_yr</th>
            <th>room number</th>
          	<th>floor</th>
            <th>apprtment_name</th>
		</tr>
	</thead><!--end thead -->
	<tbody><!-- tbody -->
      <?php include '../php/display.php'; ?>
	</tbody><!--end tbody -->
</table><!-- end table -->  
  <script src="../bootstrap/bootstrap.min.js"></script>
</body>
</html>
