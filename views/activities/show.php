<!DOCTYPE HTML>
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
			  <h5 class="purple-text text-lighten-2"> <i class=" medium material-icons">class</i>Activities</h5>
			  <div class="container col s12 purple lighten-5 z-depth-1">
				    <div class="row center">

					
				        	<?php foreach($activities as $activity) { ?>
				          
				            
				            <h3 class="grey-text"><p><?php echo $activity->title; ?></p></h3>
				            <h6><p>Intelligence:<?php echo $activity->intelligence; ?></p></h6>
				            <p>Description:<?php echo $activity->description; ?></p>
				            <p>Tools:<?php echo $activity->tools; ?></p>
				 </div>
				  </div>
				  <div class="container section">
				  	<div class="row right">
				            <a <?php $id=$activity->id; print("href='/activities/edit/?id=$id'");?> class="waves-effect waves-light btn green lighten-2 btn"><i class="material-icons left">edit</i>edit</a>
				         	<a  href="/teacherDashboard" class="waves-effect waves-light btn light-blue lighten-2"> My DashBoard</a>
				            <?php } ?>
				          </div>
					</div>
				    	     


<?php include("views/pages/footer.php"); ?>

 <?php require_once('contents/script.php'); ?>
				
	</body>


	
</html>
