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
			    	<img src="/contents/images/background7.jpg" alt="Unsplashed background img teacher">
			    </div>
			  </div>
			  <div class="container">
			  <h5 class="amber-text text-lighten-2"> <i class=" medium material-icons">group</i>Teachers</h5>
			  <div class="row right">
			  	<a href="/schools/addTeacher" class="waves-effect waves-light btn light-blue lighten-2 btn"><i class="material-icons left">attachment</i>Student</a>
			  </div>
			</div>
			  <div class="container">
				    <div class="section">

					<table class="highlight">
				        <thead>
				          <tr>
				              <th data-field="id">id</th>
				              <th data-field="lastname">Last Name</th>
				              <th data-field="firs-name">First Name</th>
				              <th data-field="edit">Edit</th>
				              <th data-field="show">Show</th>
				              <th data-field="delete">Delete</th>
				          </tr>
				        </thead>
				        <tbody>
				        	<?php foreach($teachers as $teacher) { ?>
				          <tr>
				            <td><?php echo $teacher->id; ?></td>
				            <td><?php echo $teacher->last_name; ?></td>
				            <td><?php echo $teacher->first_name; ?></td>
				      		<td><a <?php $id=$teacher->id; print("href='/teachers/edit/?id=$id'");?> class="waves-effect waves-light btn green lighten-2 btn"><i class="material-icons left">edit</i>edit</a> </td>
				            <td><a <?php $id=$teacher->id; print("href='/teachers/show/?id=$id'");?> class="waves-effect waves-light btn amber lighten-2 btn"><i class="material-icons left">visibility</i>show</a> </td>
				            <td><a <?php $id=$teacher->id; print("href='/teacher/delete/?id=$id'");?> class="waves-effect waves-light btn red lighten-2 btn"><i class="material-icons left">delete</i>delete</a> </td>

				          </tr>
				          <?php } ?>
				        </tbody>
				      </table>
				            
						
				    	      
				    </div>
				  </div>
				  <div class="container center">
				    <div class="section">
				 		 <a  href="/schoolboard" class="waves-effect waves-light btn light-blue lighten-2"> My DashBoard</a>
				 		</div>
				 	</div>


<?php include("views/pages/footer.php"); ?>

 <?php require_once('contents/script.php'); ?>
				
	</body>


	
</html>