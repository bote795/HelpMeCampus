<html>
  <?php $root="/HelpMeCampus"; ?>
  <script src="<?php echo $root; ?>/js/jquery.validate.js"></script>
  <script src="<?php echo $root; ?>/js/sign_in_validate.js"></script>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">HelpMeCampus</a>
        </div>
        <div class="navbar-collapse collapse">
          <form id="signin" class="navbar-form navbar-right" role="form"  method="post" action="php/authenticate.php"> <!--form --->
            <div class="form-group">
              <input type="text" placeholder="username" name="username" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" name="password" class="form-control">
            </div>
            <button type="submit"  name="submit"  class="btn btn-success">Sign in</button>
            <a href="./pages/register.html">Sign Up</a>
          </form><!--close form --->
        </div><!--/.navbar-collapse -->
      </div>
    </div>

  </body>
</html>