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
			  <div class="container">
			  <h5 class="purple-text text-lighten-2"> <i class=" medium material-icons">class</i>Activities</h5>
			  <a href="/activities/create" class="waves-effect waves-light btn purple lighten-2 btn"><i class="material-icons left">add</i>create</a> 
			  <div class="row right">
			  	<?php if($_COOKIE['category']== 'school') { ?>
				   <a href='/schools/deleteActivity' class="waves-effect waves-light btn red lighten-2 btn"><i class="material-icons left">delete</i>delete</a>    
				<?php } ?>
			  </div>
			  </div>
			  
			  <div class="container">
				    <div class="section">

					<table class="highlight">
				        <thead>
				          <tr>
				              <th data-field="id">id</th>
				              <th data-field="title">Title</th>
				              <th data-field="intelligence">intelligence</th>
				              <th data-field="edit">Edit</th>
				              <th data-field="show">Show</th>
				              <th data-field="action">Action</th>
				          </tr>
				        </thead>
				        <tbody>
				        	<?php foreach($activities as $activity) { ?>

				          <tr>
				            <td><?php $id = $activity->id; echo $id; ?></td>
				            <td><?php echo $activity->title; ?></td>
				            <td><?php echo $activity->intelligence; ?></td>
				            <td><a <?php $id=$activity->id; print("href='/activities/edit/?id=$id'");?> class="waves-effect waves-light btn green lighten-2 btn"><i class="material-icons left">edit</i>edit</a> </td>
				            <td><a <?php $id=$activity->id; print("href='/activities/show/?id=$id'");?> class="waves-effect waves-light btn amber lighten-2 btn"><i class="material-icons left">visibility</i>show</a> </td>
				            <?php if($_COOKIE['category']== 'school') { ?>
				            	<td><a <?php $id=$activity->id; print("href='/schools/addActivity/?id=$id'");?> class="waves-effect waves-light btn light-blue lighten-2 btn"><i class="material-icons left">move_to_inbox</i>Get</a> </td>
				            <?php } ?>
				            <?php if($_COOKIE['category']== 'teacher') { ?>
				            	<td><a <?php $id=$activity->id; print("href='/activities/add/?id=$id'");?> class="waves-effect waves-light btn light-blue lighten-2 btn"><i class="material-icons left">attachment</i>Give</a> </td>
				            <?php } ?>
				          </tr>
				          <?php } ?>
				        </tbody>
				      </table>
				            
						
				    	      
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
