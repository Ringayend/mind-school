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
			          <h5 class="header light white-text">Edit a activity !</h5>
			        </div>

			      </div>
			    </div>
			    <div class="parallax">
			    	<img src="/contents/images/backgroundteacher.jpg" alt="Unsplashed background img 1">
			    </div>
			  </div>

			  <div class="container col s5  purple lighten-5 z-depth-1">
			  	<div class="row">
			  	
			  	<h2 class="purple-text text-lighten-3 center"><i class="medium material-icons prefix">play_for_work</i>  Activity</h2>
			  	<p class='center'>here you have the possibility to edit the activity named: </p>				
				<h2 class="center"><?php foreach($activities as $activity){echo $activity->title;}?></h2>
				</div>
			      
			<form class="col s12 "  <?php $id=$activity->id; print("action='/activities/edit/?id=$id'");?>  method="post">
			       <div class="row">
			     	 <div class="col s6 offset-s3">
					    <select name="intelligence">
					      <option value="DEFAULT" disabled selected>Change the intelligence</option>
					      <option value="VERBAL-LINGUISTIC">VERBAL-LINGUISTIC</option>
					      <option value="LOGICAL-MATHEMATICAL">LOGICAL-MATHEMATICAL</option>
					      <option value="VISUAL-SPATIAL">VISUAL-SPATIAL</option>
					    </select>
					    <label>Intelligence</label>
					  </div>
					</div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">description</i>
			          <input id="description" name="description" type="text" class="validate" placeholder="DEFAULT">
			          <label for="description">Description</label>
			        </div>    
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">info</i>
			          <input id="tools" name="tools" type="text" class="validate" placeholder="DEFAULT">
			          <label for="tools">Tools</label>
			        </div>    
			      </div>
			        <div class="row center">
			        	<button class="btn waves-effect waves-blue green lighten-2" type="submit">edit
    					<i class="material-icons right">done</i>
    					</button>
    				</div>
</form>
			</div>
			</div>
				<div class="container center">
				    <div class="section">

				 		 <a  href="/activities/index" class="waves-effect waves-light btn light-blue lighten-2"><i class="material-icons left">keyboard_return</i>back</a>
				 		</div>
		</div>
	</div>
	   		
 			<?php include("views/pages/footer.php"); ?>
 			<?php include("contents/script.php"); ?>
				
	</body>


	

       
