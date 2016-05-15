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
			  <h5 class="amber-text text-lighten-2"> <i class=" medium material-icons">group</i>Students</h5>
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
				              <?php if($_COOKIE['category']=='school') { ?>
				              <th data-field="delete">Delete</th>
				             <?php } ?>
				          </tr>
				        </thead>
				        <tbody>
				        	<?php foreach($students as $student) { ?>
				          <tr>
				            <td><?php echo $student->id; ?></td>
				            <td><?php echo $student->last_name; ?></td>
				            <td><?php echo $student->first_name; ?></td>
				      		<td><a <?php $id=$student->id; print("href='/students/edit/?id=$id'");?> class="waves-effect waves-light btn green lighten-2 btn"><i class="material-icons left">edit</i>edit</a> </td>
				            <td><a <?php $id=$student->id; print("href='/students/show/?id=$id'");?>  class="waves-effect waves-light btn amber lighten-2 btn"><i class="material-icons left">visibility</i>show</a> </td>
				            <?php if($_COOKIE['category']=='school') { ?>
				            <td><a <?php $id=$student->id; $last_name=$student->last_name;print("href='/students/delete/?id=$id&last_name=$last_name'");?>  class="waves-effect waves-light btn red lighten-2 btn"><i class="material-icons left">delete</i>delete</a> </td>
				            <?php } ?>
				          </tr>
				          <?php } ?>
				        </tbody>
				      </table>
				            
						
				    	      
				    </div>
				  </div>
				  <div class="container center">
				    <div class="section">
				 		 <a  href="/teacherDashboard" class="waves-effect waves-light btn light-blue lighten-2"> My DashBoard</a>
				 		</div>
				 	</div>


<?php include("views/pages/footer.php"); ?>

 <?php require_once('contents/script.php'); ?>
				
	</body>


	
</html>