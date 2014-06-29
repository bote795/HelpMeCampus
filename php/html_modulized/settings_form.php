<html>
  <?php
  ini_set('display_errors', 1);
include './../php/connect.php';
include './../php/settings_load.php';

  $pieces = explode(" , ", $row['name']);
  ?>
  <body>
    <form class="form" method="post" action="./../php/settings_update.php"  id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="firstname" id="first_name" placeholder="first name" value="<?php echo $pieces[0]; ?>" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="lastname" id="last_name" placeholder="last name" value="<?php echo $pieces[1]; ?>" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="Email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="Email" placeholder="you@email.com" value="<?php echo $row['email']; ?>" title="enter your Email if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="Major"><h4>Major</h4></label>
                              <input type="text" class="form-control" name="major" id="major" placeholder="enter major" value="<?php echo $row['major']; ?>" title="enter your major if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="School"><h4>School</h4></label>
                              <input type="text" class="form-control" name="school" id="school" placeholder="enter school" value="<?php echo $row['school']; ?>" title="enter your school.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="grad_yr"><h4>Graduation Year</h4></label>
                              <input type="text" class="form-control" name="grad_yr" placeholder="graduation year" value="<?php echo $row['grad_yr']; ?>" title="enter a graduation year">
                          </div>
                      </div>
           				<div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="app_name"><h4>Appartment Name/Dorm Name</h4></label>
                              <input type="text" class="form-control" name="app_name" id="app_name" value="<?php echo $row['appartment_name']; ?>" placeholder="enter Appartment Name/Dorm Name" title="enter yourAppartment Name/Dorm Name.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="floor"><h4>Floor</h4></label>
                              <input type="text" class="form-control" name="floor" placeholder="floor number" value="<?php echo $row['floor']; ?>" title="enter a floor number">
                          </div>
                      </div>
           			 <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="room_num"><h4>Room Number</h4></label>
                              <input type="text" class="form-control" name="room_num" placeholder="Room number" value="<?php echo $row['room_num']; ?>" title="enter a Room number">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify Password</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon"></i> Save</button>
                               	<button class="btn btn-lg"  type="reset" ><i class="glyphicon"></i> Reset</button>
                            </div>
                      </div>
              	</form>
  </body>
</html>