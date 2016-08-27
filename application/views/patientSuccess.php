<div class="container">
	<?php if ($add):?>
		<div class="alert alert-success" role="alert">Registration Successful.</div>
	<?php endif;?>
	<h1>Add a patient</h1>
	<form class="form-horizontal" action="<?php echo base_url();?>index.php/home/add_patient" method="POST">
		<div class="form-group">
	    	<label for="inputPassword3" class="col-sm-2 control-label">Nickname</label>
	    	<div class="col-sm-10">
	      		<input type="text" class="form-control" id="inputPassword3" name="nickname" placeholder="nickname" >
	    	</div>
	  	</div>

	  	<div class="form-group">
	    	<label for="inputPassword3" class="col-sm-2 control-label">Disease Descrption</label>
	    	<div class="col-sm-10">
	      		<input type="text" class="form-control" id="inputPassword3" name="complication_name" placeholder="Disease Descrption" >
	    	</div>
	  	</div>

	  	<div class="form-group">
	    	<label for="inputPassword3" class="col-sm-2 control-label">Disease Detailed Description</label>
	    	<div class="col-sm-10">
	    		<textarea class="form-control" name="complicatin_desc" required></textarea>
	  
	    	</div>
	  	</div>

	  	<div class="form-group">
	    	<label for="inputPassword3" class="col-sm-2 control-label">Uploader Remarks</label>
	    	<div class="col-sm-10">
	      		<textarea class="form-control" name="user_remarks" ></textarea>
	    	</div>
	  	</div>

	  	<div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Register</button>
		    </div>
	  	</div>
	  	
	</form>
</div>