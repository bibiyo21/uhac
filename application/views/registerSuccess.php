<div class="container">
	<?php if ($register):?>
		<div class="alert alert-success" role="alert">Registration Successful.</div>
	<?php endif;?>
	<!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">For Doctor</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">For Non Doctors</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="home">
    	<div class="container">
    		<h1>Registration For Doctors</h1>
    		<form class="form-horizontal" action="<?php echo base_url();?>index.php/home/register" method="POST">
    			<div class="form-group">
    		    	<label for="inputPassword3" class="col-sm-2 control-label">Username</label>
    		    	<div class="col-sm-10">
    		      		<input type="text" class="form-control" id="inputPassword3" name="username" placeholder="Username" >
    		    	</div>
    		  	</div>

    		  	<div class="form-group">
    		    	<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    		    	<div class="col-sm-10">
    		      		<input type="password" class="form-control" id="inputPassword3" name="password" placeholder="password" >
    		    	</div>
    		  	</div>

    		  	<div class="form-group">
    		    	<label for="inputPassword3" class="col-sm-2 control-label">First Name</label>
    		    	<div class="col-sm-10">
    		      		<input type="text" class="form-control" name="first_name" placeholder="First Name" required="">
    		    	</div>
    		  	</div>

    		  	<div class="form-group">
    		    	<label for="inputPassword3" class="col-sm-2 control-label">Last Name</label>
    		    	<div class="col-sm-10">
    		      		<input type="text" class="form-control" name="last_name" placeholder="Last Name" required="">
    		    	</div>
    		  	</div>

				<input type="hidden" value="1" name="user_type">
    		  	<input type="hidden" value="Dr." name="address">

    		  	<div class="form-group">
    			    <div class="col-sm-offset-2 col-sm-10">
    			      <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Register</button>
    			    </div>
    		  	</div>
    		  	
    		</form>
    	</div>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="profile">
    	<div class="container">
    		<h1>Registration for Non Doctors</h1>
    		<form class="form-horizontal" action="<?php echo base_url();?>index.php/home/register" method="POST">

    			<div class="form-group">
    		    	<label for="inputPassword3" class="col-sm-2 control-label">Username</label>
    		    	<div class="col-sm-10">
    		      		<input type="text" class="form-control" id="inputPassword3" name="username" placeholder="Username" >
    		    	</div>
    		  	</div>

    		  	<div class="form-group">
    		    	<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    		    	<div class="col-sm-10">
    		      		<input type="password" class="form-control" id="inputPassword3" name="password" placeholder="password" >
    		    	</div>
    		  	</div>

    		  	<div class="form-group">
    		    	<label for="inputPassword3" class="col-sm-2 control-label">Address</label>
    		    	<div class="col-sm-10">
    		      		<select class="form-control" name="address">
    		      			<option value="Mr." selected>Mr.</option>
    		      			<option value="Ms." selected>Ms.</option>
    		      			<option value="Mrs." selected>Mrs.</option>
    		      		</select>
    		    	</div>
    		  	</div>

    		  	<div class="form-group">
    		    	<label for="inputPassword3" class="col-sm-2 control-label">First Name</label>
    		    	<div class="col-sm-10">
    		      		<input type="text" class="form-control" name="first_name" placeholder="First Name" required="">
    		    	</div>
    		  	</div>

    		  	<div class="form-group">
    		    	<label for="inputPassword3" class="col-sm-2 control-label">Last Name</label>
    		    	<div class="col-sm-10">
    		      		<input type="text" class="form-control" name="last_name" placeholder="Last Name" required="">
    		    	</div>
    		  	</div>

				<input type="hidden" value="2" name="user_type">
    		  	<div class="form-group">
    			    <div class="col-sm-offset-2 col-sm-10">
    			      <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Register</button>
    			    </div>
    		  	</div>
    		  	
    		</form>
    	</div>
    </div>
  </div>
</div>