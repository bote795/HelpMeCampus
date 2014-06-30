<html>
  	<script src="../js/multifilter.min.js"></script>
  	<script src="../js/main_table_filter.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/filters.css" media="screen" />
<body>

<div class='filters'>
    <div class='filter-container'>
      <input autocomplete='off' class='filter hide' name='name' placeholder='name' data-col='Name'/>
    </div>
    <div class='filter-container'>
      <input autocomplete='off' class='filter hide' name='major' placeholder='major' data-col='major'/>
    </div>
    <div class='filter-container'>
      <input autocomplete='off' class='filter hide' name='grad_yr' placeholder='grad_yr' data-col='grad_yr'/>
    </div>
    <div class='filter-container'>
      <input autocomplete='off' class='filter hide' name='room number' placeholder='room number' data-col='room number'/>
    </div>
  	  <div class='filter-container'>
      <input autocomplete='off' class='filter hide' name='floor' placeholder='floor' data-col='floor'/>
    </div>
    <div class='clearfix'></div>
  </div>

<table id="NewTable" class="table table-striped table-hover">
	<thead><!-- thead -->
		<tr>
          <th>Name<span class="glyphicon glyphicon-filter edit_name"></span></th>
			<th>major<span class="glyphicon glyphicon-filter edit_major"></span></th>
          	<th>grad_yr<span class="glyphicon glyphicon-filter edit_grad"></span></th>
            <th>room number<span class="glyphicon glyphicon-filter edit_room"></span></th>
          	<th>floor<span class="glyphicon glyphicon-filter edit_floor"></span></th>
		</tr>
	</thead><!--end thead -->
	<tbody><!-- tbody -->
      <?php include '../php/display.php'; ?>
	</tbody><!--end tbody -->
</table><!-- end table -->  
</body>
</html>
