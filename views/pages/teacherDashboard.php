<!DOCTYPE HTML>
<html>
	<head>
			
			<?php require_once('contents/style.php'); ?>
		     

	</head>

	<body>
			<?php include("navbar.php"); ?>


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
				    <div class="section">

				    	<!--   Big screen  -->
				      <div class="row hide-on-small-only">
				      	<div class="container col s12 ">
				      	<div class="section">
				         <div class=" col s5 red lighten-2 z-depth-5">
				            <h2 class="center black-text text-lighten-1"><i class=" medium material-icons">perm_identity</i></h2>
				            <h5 class="center">My Profil</h5>

				            <p class="light center"> Personal information.</p>
				            <div class="row center">
				            <a href="/teachers/show/?id=2" class="waves-effect waves-light btn light-blue lighten-2">Access</a>
				        	</div>
					  </div>

				        <div class="col s5  offset-s2 amber lighten-4 z-depth-5">
				          <div class="icon-block">
				            <h2 class="center black-text"><i class=" medium material-icons">group</i></h2>
				            <h5 class="center">My Students</h5>

				            <p class="light center">Get acces to list of Students to create, research, update or delete a student profil.</p>
				            <div class="row center">
				            <a href="/students/index" class="waves-effect waves-light btn light-blue lighten-2">Access</a>
				        	</div>
				          </div>
				          </div>
				        </div>
				    </div>

				    <div class="container col s12 ">
				    	<div class="section">
				    	<div class="card col s5 green lighten-4 z-depth-5">
				            <h2 class="center black-text"><i class=" medium material-icons">business</i></h2>
				            <h5 class="center">School</h5>

				            
					    <p class="light center">Get acces to the school information.</p>
				            <div class="row center">
				            <a href="/schools/MySchool" class="waves-effect waves-light btn light-blue lighten-2">Access</a>
				        	</div>
				          </div>
					  </div>

				        <div class="col s5 offset-s2 purple lighten-4 z-depth-5">
				          <div class="icon-block">
				            <h2 class="center black-text"><i class=" medium material-icons">class</i></h2>
				            <h5 class="center">Activities</h5>

				            <p class="light center">Get access all activities own by your school.</p>
				            <div class="row center">
				            <a  href="/activities/index" class="waves-effect waves-light btn light-blue lighten-2">Access</a>
				        	</div>
				          </div>
				      	</div>
				        </div>
				    </div>

				      </div>



				      <div class="hide-on-med-and-up">

				      	<div class="container col s12 ">
				      	<div class="section">
				        <div class="card col s5 red lighten-2 z-depth-5">
				            <h2 class="center grey-text text-lighten-1"><i class=" medium material-icons">perm_identity</i></h2>
				            <h5 class="center">My Profil</h5>

				            <p class="light center"> Personal information.</p>
					  </div>

				        <div class="col s5  offset-s2 amber lighten-4 z-depth-5">
				          <div class="icon-block">
				            <h2 class="center grey-text"><i class=" medium material-icons">group</i></h2>
				            <h5 class="center">My Students</h5>

				            <p class="light center">Get acces to list of Students to create, research, update or delete a student profil.</p>
				            <div class="row center">
				            <a href="presentation.php" class="waves-effect waves-light btn light-blue lighten-2">Access</a>
				        	</div>
				          </div>
				          </div>
				        </div>
				    </div>

				    <div class="container col s12 ">
				    	<div class="section">
				        <div class="card col s5 green lighten-4 z-depth-5">
				            <h2 class="center black-text"><i class=" medium material-icons">business</i></h2>
				            <h5 class="center">School</h5>

				            <p class="light center"> School information.</p>
					    <div class="card-content">
					      <span class="card-title activator grey-text text-darken-4">More information<i class="material-icons right">more_vert</i></span>
					    </div>
					    <div class="card-reveal">
					      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
					      <p>Here is some more information about this product that is only revealed once clicked on.</p>
					    </div>
					  </div>

				        <div class="col s5 offset-s2 purple lighten-4 z-depth-5">
				          <div class="icon-block">
				            <h2 class="center grey-text"><i class=" medium material-icons">class</i></h2>
				            <h5 class="center">Activities</h5>

				            <p class="light center">Get access all activities own by your school.</p>
				            <div class="row center">
				            <a  href="presentation.php" class="waves-effect waves-light btn light-blue lighten-2">Access</a>
				        	</div>
				          </div>
				      	</div>
				        </div>
				    </div>
				        
				      </div>
				      </div>

				    </div>

				    </div>
				</div>






<?php include("footer.php"); ?>

 <?php require_once('contents/script.php'); ?>
				
	</body>


	
</html>


