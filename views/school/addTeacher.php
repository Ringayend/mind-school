<DOCTYPE HTML>
<html>
	<head>
			
			<?php require_once('contents/style.php'); ?>
	</head>

	<body>
			<?php include("views/pages/navbar.php"); ?>


			   <div id="index-banner" class="parallax-container align-wrapper">
			    <div class="section no-pad">
			      <div class="container" id="banner">
			        <h1 class="header left light-blue-text text-lighten-2">Mind School</h1>
			        <div class="row ">
			          <h5 class="header col s12 light white-text">Welcome on your personnal Dashboard !</h5>
			        </div>
	

			      </div>
			    </div>
			    <div class="parallax">
			    	<img src="contents/images/backgroundteacher.jpg" alt="Unsplashed background img teacher">
			    </div>
			  </div>
			  <div class="container">
			  <h5 class="purple-text text-lighten-2"> <i class=" medium material-icons">group_add</i>Add teacher for student</h5>
			  </div>
			  <div class="container">
				    <div class="section">

			<form class="col s12 "  action="/App/?controller=schools&action=addTeacher" method="post">
			       <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">description</i>
			          <input id="t_lastname" name="t_lastname" type="text" class="validate">
			          <label for="t_lastname">Teacher's last name</label>
			        </div>    
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">assignment_ind</i>
			          <input id="t_firstname" name="t_firstname" type="text" class="validate">
			          <label for="t_firstname">Teacher's first name</label>
			        </div>    
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">account_circle</i>
			          <input id="s_lastname" name="s_lastname" type="text" class="validate">
			          <label for="s_lastname">Student's last name</label>
			        </div>    
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">assignment_ind</i>
			          <input id="s_firstname" name="s_firstname" type="text" class="validate">
			          <label for="s_firstname">Student's first name</label>
			        </div>    
			      </div>
			       <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">description</i>
			          <input id="grade" name="grade" type="text" class="validate">
			          <label for="grade">Grade years</label>
			        </div>    
			      </div>
			        <div class="row center">
			        	<button class="btn waves-effect waves-blue light-blue lighten-2" type="submit">ADD
    					<i class="material-icons right">done</i>
    					</button>
    				</div>
				</form>						
				    	      
				    </div>
				  </div>
				  <div class="container center">
				    <div class="section">

				 		 <a  href="/App/?controller=pages&action=teacherDashboard" class="waves-effect waves-light btn light-blue lighten-2"><i class="material-icons left">bookmark</i> My DashBoard</a>
				 		</div>
				 	</div>


<?php include("views/pages/footer.php"); ?>

 <?php require_once('contents/script.php'); ?>
				
	</body>


	
</html>
