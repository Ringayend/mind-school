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
			          <h5 class="header light white-text">Edit a student profil !</h5>
			        </div>

			      </div>
			    </div>
			    <div class="parallax">
			    	<img src="/contents/images/backgroundteacher.jpg" alt="Unsplashed background img 1">
			    </div>
			  </div>

			  <div class="container col s5 amber lighten-5 z-depth-1">
			  	<div class="row">
			  	
			  	<h2 class="amber-text text-lighten-1 center"> <i class="medium material-icons prefix"> group </i> Student</h2>
			  	<p class='center'> here you have the possibility to edit the student profil named: </p>				
				<h2 class="center"><?php foreach($students as $student){echo $student->last_name."  "; echo $student->first_name;}?></h2>
				</div>
			      
		<form class="col s12"  <?php $id=$student->id; print("action='/students/edit/?id=$id'");?> method="post">

			      <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-1">today</i> 
			          	<input id="birthdate" name="birthdate" type="date" class="datepicker validate" value="DEFAULT">
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
			      <div class="row">
			        <div class="input-field col s6 offset-s3 " required>
			          	<input id="result_verl" name="result_verl" type="text" class="validate" placeholder="DEFAULT">
			          	<label for="result_verl">Verbale-Linguistic</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3 " required>
			          	<input id="result_lm" name="result_lm" type="text" class="validate" placeholder="DEFAULT">
			          	<label for="result_lm">Logical-Mathematical</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3 " required>
			          	<input id="result_vs" name="result_vs" type="text" class="validate" placeholder="DEFAULT">
			          	<label for="result_verl">Visual-Spatial</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3 " required>
			          	<input id="result_mr" name="result_mr" type="text" class="validate" placeholder="DEFAULT">
			          	<label for="result_mr">Musical-Rhythmic</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3 " required>
			          	<input id="result_bk" name="result_bk" type="text" class="validate" placeholder="DEFAULT">
			          	<label for="result_mr">Bodily-kinesthetic</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3 " required>
			          	<input id="result_intra" name="result_intra" type="text" class="validate" placeholder="DEFAULT">
			          	<label for="result_intra">Intrapersonnel</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3 " required>
			          	<input id="result_n" name="result_n" type="text" class="validate" placeholder="DEFAULT">
			          	<label for="result_n">Naturalistic</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3 " required>
			          	<input id="result_inter" name="result_inter" type="text" class="validate" placeholder="DEFAULT">
			          	<label for="result_inter">Interpersonal</label>
			        </div>
			      </div>
			      <div class="row">
			     	 <div class="input-field col s6 offset-s3">
					    <select name="strong_intelligence">
					      <option value="" disabled selected>Choose its category</option>
					      <option value="VERBAL-LINGUISTIC">VERBAL-LINGUISTIC</option>
					      <option value="LOGICAL-MATHEMATICAL">LOGICAL-MATHEMATICAL</option>
					      <option value="VISUAL-SPATIAL">VISUAL-SPATIAL</option>
					    </select>
					    <label>Strongest intelligence</label>
					  </div>
					</div>
			      <div class="row">
			     	 <div class="input-field col s6 offset-s3">
					    <select name="weak_intelligence">
					      <option value="" disabled selected>Choose its category</option>
					      <option value="VERBAL-LINGUISTIC">VERBAL-LINGUISTIC</option>
					      <option value="LOGICAL-MATHEMATICAL">LOGICAL-MATHEMATICAL</option>
					      <option value="VISUAL-SPATIAL">VISUAL-SPATIAL</option>
					    </select>
					    <label>Weak intelligence</label>
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
<form lass="col s12"  <?php $id=$student->id; print("action='/students/edit/?id=$id'");?> method="post">
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


	

       
