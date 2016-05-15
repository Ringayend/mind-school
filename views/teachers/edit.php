<!DOCTYPE HTML>
<html>
	<head>
			<?php include("contents/style.php"); ?>
	</head>

	<body>
			<?php include("views/pages/navbar.php"); ?>


			   <div class="parallax-container">
			    <div class="section no-pad-bot">
			      <div class="container" id="banner">
			        
			        <div class="row left ">
			        	<h1 class="header center light-blue-text text-lighten-2">Mind School</h1>
			          <h5 class="header light white-text">Edit a teacher profil !</h5>
			        </div>

			      </div>
			    </div>
			    <div class="parallax">
			    	<img src="/contents/images/background7.jpg" alt="Unsplashed background img 1">
			    </div>
			  </div>

			  <div class="container col s5 purple lighten-5 z-depth-1">
			  	<div class="row">
			  	
			  	<h2 class="amber-text text-lighten-1 center"> <i class="medium material-icons prefix"> group </i> Teacher</h2>
			  	<p class='center'> here you have the possibility to edit the teacher profil named: </p>				
				<h2 class="center"><?php foreach($teachers as $teacher){echo $teacher->last_name."  "; echo $teacher->first_name;}?></h2>
				</div>
			      
		<form class="col s12"  <?php $id=$teacher->id; print("action='/teachers/edit/?id=$id'");?> method="post">

			      <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-1">today</i> 
			          	<input id="birthdate" name="birthdate" type="date" class="datepicker" placeholder="DEFAULT">
			        </div>  
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-1">mail</i>
			          <input id="email" name="mail" type="email" class="validate" placeholder="DEFAULT" required>
			        </div>  
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-1">call</i>
			          <input id="phone" name="phone" type="tel" class="validate" placeholder="DEFAULT">
			          <label for="phone">Phone numbers</label>
			        </div>    
			      </div>
			      
			        <div class="row center">

					  <button type='submit' class="btn waves-effect waves-blue green lighten-2 ">edit
    					<i class="material-icons right">done</i>
    					</button>
  				</div>
    
			</div>
</form>
<div class="container col s5  red lighten-2 z-depth-1">
<form lass="col s12"  <?php $id=$teacher->id; print("action='/teachers/edit/?id=$id'");?> method="post">
				<div class="row">
			        <div class="input-field col s6 offset-s3 " required>
			          	<input id="password" name="password" type="password" class="validate" placeholder="DEFAULT">
			          	<label class ="black-text" for="password">Password</label>
			        </div>
			      </div>
			    <div class="row center">
					  <button type='submit' class="btn waves-effect waves-blue red ">Changed
    					<i class="material-icons right">https</i>
    					</button>
  				</div>

</form> 
</div>
			</div>
		</div>
	</div>
	   
 			<?php include("views/pages/footer.php"); ?>
 			<?php include("contents/script.php"); ?>
				
	</body>


	

       
