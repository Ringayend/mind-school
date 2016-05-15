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
			  </div>
			  <div class="container">
				    <div class="section">

			<form class="col s12 "  action="/schools/deleteActivity" method="post">
			       <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">description</i>
			          <input id="title" name="title" type="text" class="validate">
			          <label for="title">Activity's title</label>
			        </div>    
			      </div>
			      </div>
			        <div class="row center">
			        	<button class="btn waves-effect waves-blue red lighten-2" type="submit">Delete
    					<i class="material-icons right">delete</i>
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
