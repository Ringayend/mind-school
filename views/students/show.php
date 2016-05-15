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
			  <h5 class="amber-text text-lighten-2"> <i class=" medium material-icons">group</i>Student</h5>
			  <div class="container col s12 amber lighten-5 z-depth-1">
				    <div class="row center">

					
				        	<?php foreach($students as $student) { ?>
				          
				            
				            <h3 class="grey-text"><p><?php echo $student->last_name ."  "; echo $student->first_name; ?></p></h3>
				            <h4> Profil: </h4>
				            <p>Mail:<?php echo $student->mail; ?></p>
				            <p>Birthdate:<?php echo $student->birthdate; ?></p>
				            <p>Phone Numbers:<?php echo $student->phone_num; ?></p>
				            <h4> Intelligences: </h4>
				            <p>Verbal-Linguistic:<?php echo $student->result_verl; ?></p>
				            <p>Logical-MAthematical:<?php echo $student->result_lm; ?></p>	
				            <p>Visual-Spatial:<?php echo $student->result_vs; ?></p>
				            <p>Musical-Rhythmic:<?php echo $student->result_mr; ?></p>
				            <p>Bodily_Kinesthetic:<?php echo $student->result_bk; ?></p>
				            <p>Intrapersonal:<?php echo $student->result_intra; ?></p>	
				            <p>Naturalistic:<?php echo $student->result_n; ?></p>
				            <p>Interpersonal:<?php echo $student->result_inter; ?></p>
				            <p>Strongest:<?php echo $student->strong_intelligence; ?></p>	
				            <p>Weakest:<?php echo $student->weak_intelligence; ?></p>	

				                       
				 </div>
				  </div>
				  <div class="container section">
				  	<div class="row right">
				  		<a  href="/teacherDashboard" class="waves-effect waves-light btn light-blue lighten-2"><i class="material-icons left">bookmark</i>My DashBoard</a>

				            <a <?php $id=$student->id; print("href='/students/edit/?id=$id'");?> class="waves-effect waves-light btn green lighten-2 btn"><i class="material-icons left">edit</i>edit</a>
				            
				          </div>
					</div>
				 <?php } ?>


<?php include("views/pages/footer.php"); ?>

 <?php require_once('contents/script.php'); ?>
				
	</body>


	
</html>
