    <?php 
session_start();
if($_SESSION["semail"]==true){

  ?>
  <header id="header" id="home">
	  		<div class="header-top">
	  			
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.php"><img src="img/logo.png" height="40px" width="147px" alt="logo" title="logo" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			           <li><a href="uprofile.php"><?php echo $_SESSION["firstname"]; ?>  <?php echo $_SESSION["lastname"]; ?></a></li>
			          <li><a href="index1.php">Home</a></li>
			          <li><a href="about.php">About</a></li>
			          <li><a href="campus_notice.php">Campus Update</a></li>
			          <li><a href="previous_campus.php"> Previous Campus</a></li>
					  <li><a href="feedback.php">Feedback</a></li>
					   <li><a href="uprofile.php">Profile</a></li>
					  <li><a href="logout.php">Logout</a></li>

			       </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		</div>
		</header><!-- #header -->
		  <?php 
		}
         else
          header('location:login_form.php');
       ?>