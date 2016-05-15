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
			    	<img src="/contents/images/backgroundteacher.jpg" alt="Unsplashed background img teacher">
			    </div>
			  </div>
			  <div class="container">
			  <h5 class="purple-text text-lighten-2"> <i class=" medium material-icons">class</i>Activities</h5>
			  <p class='center'>here you have the possibility to give to a student the activity named: </p>				
				<h2 class="center"><?php foreach($activities as $activity){echo $activity->title;}?></h2>
			  </div>
			  <div class="container">
				    <div class="section">
			<form class="col s12 "  <?php $id=$activity->id; print("action='/activities/add/?id=$id'");?> method="post">
			      <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">assignment_ind</i>
			          <input id="firstname" name="firstname" type="text" class="validate">
			          <label for="firstname">Student first name</label>
			        </div>    
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">account_circle</i>
			          <input id="lastname" name="lastname" type="text" class="validate">
			          <label for="lastname">Student last name</label>
			        </div>    
			      </div>
			        <div class="row center">
			        	<button class="btn waves-effect waves-blue green lighten-2" type="submit">ADD
    					<i class="material-icons right">attachment</i>
    					</button>
    				</div>
				</form>						
				    	      
				    </div>
				  </div>
				  <div class="container center">
				    <div class="section">

				 		 <a  href="/teacherDashboard" class="waves-effect waves-light btn light-blue lighten-2"><i class="material-icons left">bookmark</i> My DashBoard</a>
				 		</div>
				 	</div>


<?php include("views/pages/footer.php"); ?>

 <?php require_once('contents/script.php'); ?>
				
	</body>


	
</html>
