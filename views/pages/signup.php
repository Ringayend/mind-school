<!DOCTYPE HTML>
<html>
	<head>
			<?php require_once('contents/style.php'); ?>
			
	</head>

	<body>
			<?php include("navbar.php"); ?>


			   <div class="parallax-container">
			    <div class="section no-pad-bot">
			      <div class="container">
			        
			        <div class="row ">
			        	<h1 id="banner1" class="header center light-blue-text text-lighten-2">Mind School</h1>
			          <h5 class="header col s6 offset-s6 light white-text hide-on-up">A modern website to change the way of education in school</h5>
			        </div>

			      </div>
			    </div>
			    <div class="parallax">
			    	<img src="contents/images/background6.jpg" alt="Unsplashed background img 1">
			    </div>
			  </div>

			  <div class="container">
			  	
			  	<h2 class="grey-text">Sing up <i class="medium material-icons prefix">mode_edit</i> </h2>
			  	<p>Welcome, here you have the possibility to sign up to Mind School. </p>
			</div>
			</form>

			<div class="container">
			  <div class="row">


<form class="col s12"  action="/members/save" method="post">
	
	<div class="row">
			        <div class="input-field col s6">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">account_circle</i>
			          	<input id="first_name" name="firstname" type="text" class="validate" required>
			          	<label for="first_name">First Name</label>
			        </div>
			        <div class="input-field col s6">
			          <input id="last_name" name="lastname" type="text" class="validate" required>
			          <label for="last_name">Last Name</label>
			        </div>
			      </div>

			      <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">today</i> 
			          	<input id="birthdate" name="birthdate" type="date" class="datepicker validate" placeholder="Bithday: 2016/05/16">
			        </div>    
			      </div>
			      <div class="row">
			     	 <div class="input-field col s6 offset-s3">
					    <select name="category">
					      <option value="" disabled selected>Choose your category</option>
					      <option value="teacher">Teacher</option>
					      <option value="student">Student</option>
					    </select>
					    <label>Category</label>
					  </div>
					</div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">mail</i>
			          <input id="email" name="mail" type="email" class="validate" required>
			          <label for="email">Email</label>
			        </div>    
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">call</i>
			          <input id="phone" name="phone" type="tel" class="validate">
			          <label for="phone">Phone numbers</label>
			        </div>    
			      </div>
			     <div class="row">
			     	 <div class="input-field col s6 offset-s3">
					    <select name="school" required>
					      <option value="" disabled selected>Choose your school</option>
					      <option value="Polytech">Polytech</option>
					      <option value="UM 2">UM 2</option>
					      <option value="Others">Others</option>
					    </select>
					    <label>School</label>
					  </div>
					</div>
					<div class="row">
			     	 <div class="input-field col s6 offset-s3">
					    <select id ="continent" name="continent" required>
					      <option value="" disabled selected>Choose your contient</option>
					      <option value="EUROPE">Europe</option>
					      <option value="NORTH-AMERICA">North America</option>
					      <option value="SOUTH-AMERICA">South America</option>
					      <option value="ASIA">Asia</option>
					      <option value="AFRICA">Africa</option>
					      <option value="OCEANIA">Oceania</option>
					    </select>
					    <label for="continent">Continent</label>
					</div>
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3 " required>
			          	<input id="password" name="password" type="password" class="validate">
			          	<label for="password">Password</label>
			        </div>
			      </div>
			        <div class="row center">

					  <button type='submit' class="btn waves-effect waves-blue light-blue lighten-2 ">Submit
    					<i class="material-icons right">send</i>
    					</button>
  				</div>
    
			</div>
</form>
		</div>
	</div>
	   
 			<?php include("footer.php"); ?>
 			<?php require_once('contents/script.php'); ?>
				
	</body>


	

       

</html>
