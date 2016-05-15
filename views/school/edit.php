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
			          <h5 class="header light white-text">Edit your school informations</h5>
			        </div>

			      </div>
			    </div>
			    <div class="parallax">
			    	<img src="/contents/images/background7.jpg" alt="Unsplashed background img 1">
			    </div>
			  </div>

			  <div class="container col s5  green lighten-5 z-depth-1">
			  	<div class="row">
			  	
			  	<h2 class="green-text text-lighten-3 center"><i class="medium material-icons prefix">business</i>  School</h2>
			  	<p class='center'>here you have the possibility to edit your school profil named: </p>				
				<h2 class="center"><?php foreach($schools as $school){echo $school ->name;}?></h2>
				</div>
			      
			<form class="col s12 "  <?php $id=$school->id; print("action='/schools/edit/?id=$id'");?>  method="post">
			      <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">mail</i>
			          <input id="mail" name="mail" type="email" class="validate" placeholder="DEFAULT">
			          <label for="mail">Email</label>
			        </div>    
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">location_on</i>
			          <input id="street" name="street" type="text" class="validate" placeholder="DEFAULT">
			          <label for="street">Street</label>
			        </div>    
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">my_location</i>
			          <input id="town" name="town" type="text" class="validate" placeholder="DEFAULT">
			          <label for="town">Town</label>
			        </div>
			        </div>    
			       <div class="row">
			     	 <div class="input-field col s6 offset-s3">
					    <select id ="continent" name="continent">
					      <option value="DEFAULT" disabled selected>Choose your contient</option>
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
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">markunread_mailbox</i>
			          <input id="postcode" name="postcode" type="text" class="validate" placeholder="DEFAULT">
			          <label for="postcode">Postcode</label>
			        </div>    
			      </div>
					<div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">call</i>
			          <input id="phone" name="phone" type="tel" class="validate" placeholder="DEFAULT">
			          <label for="phone">Phone numbers</label>
			        </div>    
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">supervisor_account</i>
			          <input id="director" name="director" type="text" class="validate" placeholder="DEFAULT">
			          <label for="director">Director's name</label>
			        </div>    
			      </div>
			        <div class="row center">
			        	<button class="btn waves-effect waves-blue green lighten-2" type="submit">
			        		Edit<i class="material-icons right">done</i>
    					</button>
    				</div>
    
				</div>
</form>
<div class="container col s5  red lighten-2 z-depth-1">

<form lass="col s12"  <?php $id=$school->id; print("action='/schools/edit/?id=$id'");?>  method="post">
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
	<div class="container center">
		<a  href="/schoolboard" class="waves-effect waves-light btn light-blue lighten-2"><i class="material-icons left">bookmark</i>My DashBoard</a>
	</div>
			</div>
		</div>
	</div>
	   		
 			<?php include("views/pages/footer.php"); ?>
 			<?php include("contents/script.php"); ?>
				
	</body>


	

       
