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
			          <h5 class="header col s12 light white-text">Welcome on your personnal Dashboard.</h5>
			        </div>
	

			      </div>
			    </div>
			    <div class="parallax">
			    	<img src="/contents/images/backgroundteacher.jpg" alt="Unsplashed background img teacher">
			    </div>
			  </div>
			  <h5 class="green-text text-lighten-2"> <i class=" medium material-icons">business</i>School</h5>
			  <div class="container col s12 green lighten-5 z-depth-1">
				    <div class="row center">

					
				        	<?php foreach($schools as $school) { ?>
				          
				            
				            <h3 class="grey-text"><p><?php echo $school->name; ?></p></h3>
				            <h6><p><strong class="grey-text">Street: </strong><?php echo $school->street; ?></p></h6>
				            <p><strong class="grey-text">Town: </strong><?php echo $school->town; ?></p>
				            <p><strong class="grey-text">Postcode: </strong><?php echo $school->postcode; ?></p>
				            <p><strong class="grey-text">Continent: </strong><?php echo $school->continent; ?></p>
				            <p><strong class="grey-text">Phone Numbers: </strong><?php echo $school->phone_num; ?></p>
				            <p><strong class="grey-text">Mail: </strong><?php echo $school->mail; ?></p>
				            <p><strong class="grey-text">Director: </strong><?php echo $school->director; ?></p>
				 </div>
				  </div>
				  <div class="container section">
				  	<div class="row right">
				            <a <?php $id=$school->id; print("href='/schools/edit/?id=$id'");?>  class="waves-effect waves-light btn green lighten-2 btn"><i class="material-icons left">edit</i>edit</a>
				       		<a  href="/schoolboard" class="waves-effect waves-light btn light-blue lighten-2"><i class="material-icons left">bookmark</i> My DashBoard</a>
				         
				            <?php } ?>
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
