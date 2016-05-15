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
			  <h5 class="amber-text text-lighten-2"> <i class=" medium material-icons">group</i>Teacher</h5>
			  <div class="container col  light-blue lighten-4 s12 z-depth-1">
				    <div class="row center">

					
				        	<?php foreach($teachers as $teacher) { ?>
				          
				            
				            <h3 class="grey-text"><p><?php echo $teacher->last_name ."  "; echo $teacher->first_name; ?></p></h3>
				            <h4> Profil: </h4>
				            <p>Mail:<?php echo $teacher->mail; ?></p>
				            <p>Birthdate:<?php echo $teacher->birthdate; ?></p>
				            <p>Phone Numbers:<?php echo $teacher->phone_num; ?></p>	

				            <?php } ?>            
				 </div>
				  </div>
				  <div class="container section">
				  	<div class="row right">
				  		<a  href="/teacherDashboard" class="waves-effect waves-light btn light-blue lighten-2"><i class="material-icons left">bookmark</i>My DashBoard</a>

				            <a <?php $id=$teacher->id; print("href='/teachers/edit/?id=$id'");?> class="waves-effect waves-light btn green lighten-2 btn"><i class="material-icons left">edit</i>edit</a>
				            
				          </div>
					</div>


<?php include("views/pages/footer.php"); ?>

 <?php require_once('contents/script.php'); ?>
				
	</body>


	
</html>
