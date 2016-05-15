
<html>
	<head>
			<?php require_once('contents/style.php'); ?>
	</head>

	<body>
			<?php include("views/pages/navbar.php"); ?>
			


			   <div class="parallax-container">
			    <div class="section no-pad-bot">
			      <div class="container" id="banner">
			        
			        <div class="row ">
			        	<h1 class="header center light-blue-text text-lighten-2">Mind School</h1>
			          <h5 class="header col s6 offset-s6 light white-text hide-on-up">This page concern only School.</h5>
			        </div>

			      </div>
			    </div>
			    <div class="parallax">
			    	<img src="/contents/images/background1.jpg" alt="Unsplashed background img 1">
			    </div>
			  </div>

			  <div class="container">
			  	<div class="row center">
			  	
			  	<h2 class="grey-text"><i class="medium material-icons prefix">business</i>  Sign up School</h2>
			  	<p>here you have the possibility to register a school. </p>
				</div>
			</div>

			<div class="container">
			  <div class="row">

<form class="col s12"  action="/schools/create" method="post">
	
				<div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">label_outline</i>
			          	<input id="name" name="name" type="text" class="validate">
			          	<label for="name">School's Name</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">mail</i>
			          <input id="mail" name="mail" type="email" class="validate">
			          <label for="mail">Email</label>
			        </div>    
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">vpn_key</i>
			          <input id="password" name="password" type="password" class="validate">
			          <label for="password">Password</label>
			        </div>    
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">location_on</i>
			          <input id="street" name="street" type="text" class="validate">
			          <label for="street">Street</label>
			        </div>    
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">my_location</i>
			          <input id="town" name="town" type="text" class="validate">
			          <label for="town">Town</label>
			        </div>
			        </div>    
			       <div class="row">
			     	 <div class="input-field col s6 offset-s3">
					    <select id ="continent" name="continent">
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
			        <div class="input-field col s6 offset-s3">
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">markunread_mailbox</i>
			          <input id="postcode" name="postcode" type="text" class="validate">
			          <label for="postcode">Postcode</label>
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
			        	<i class="tiny material-icons prefix light-blue-text text-lighten-2">supervisor_account</i>
			          <input id="director" name="director" type="text" class="validate">
			          <label for="director">Director's name</label>
			        </div>    
			      </div>
			        <div class="row center">
			        	<button class="btn waves-effect waves-blue light-blue lighten-2" type="submit">
			        		Save<i class="material-icons right">done</i>
    					</button>
    					

  				</div>
    
			</div>
</form>
		</div>
	</div>
	   		
 			<?php include("views/pages/footer.php"); ?>
 			<?php require_once('contents/script.php'); ?>
				
	</body>


	

       

</html>