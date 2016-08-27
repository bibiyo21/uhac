<div class="container">
	<h1>Donation</h1>
	<form class="form-horizontal" action="<?php echo base_url();?>index.php/home/home2" method="POST">
	  	<div class="form-group">
	    	<label for="inputPassword3" class="col-sm-2 control-label">Account Number</label>
	    	<div class="col-sm-10">
	      		<input type="text" class="form-control" name="source_account" placeholder="Account Number" required="">
	    	</div>
	  	</div>
	  	<div class="form-group">
	    	<label for="inputPassword3" class="col-sm-2 control-label">Currency Code</label>
	    	<div class="col-sm-10">
	      		<select class="form-control" name="source_currency">
	      			<option value="php" selected>PHP</option>
	      			<!-- <option value="usd">USD</option>
	      			<option value="aud">AUD</option>
	      			<option value="eur">EUR</option> -->
	      		</select>
	    	</div>
	  	</div>
	  	<div class="form-group">
	    	<label for="inputPassword3" class="col-sm-2 control-label">Amount</label>
	    	<div class="col-sm-10">
	      		<input type="number" class="form-control" id="inputPassword3" name="amount" min="1.00" placeholder="Amount to Donate" required="required">
	    	</div>
	  	</div>
	  	<div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-heart"></i> Donate</button>
		    </div>
	  	</div>
	</form>
</div>