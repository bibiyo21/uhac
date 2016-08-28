




         <section id="feature">

<br/>
<a href="#" data-toggle="modal" data-target="#donate_modal"> <input type="button" class="btn btn-primary" value="Add a Patient"></input></a>
<br/>
<?php if ($add):?>
		<div class="alert alert-success" role="alert">Registration Successful.</div>
	<?php endif;?>	
<br/>


            <div class="row">
  <?php
    if(isset($patients) && is_array($patients) && count($patients) > 0)
    {
      foreach($patients as $patient)
      {
    
  ?>
    <div class="col-md-4 wow fadeInDown">
           <div class="clients-comments text-center">
            <a class="preview" href="<?php echo base_url('asset/pics/7.jpg')?>" rel="prettyPhoto">
            <img  class="img-circle" src="<?php echo base_url('asset/pics/7.jpg')?>" width="30%" alt="" />
            </a>
                
            <?php echo '<h3>'.$patient->nickname.'</h3>';?>
                <?php echo '<h3>'.$patient->complication_name.'</h3>';?>
                <?php echo $patient->complicatin_desc;?>
                <?php echo $patient->user_remarks;?>

                <br/>
            <a class="preview" href="" rel="prettyPhoto">
            <img  class="img-circle" src="<?php echo base_url('asset/icon/heart.png')?>" alt="" />
            2 Donors
            </a>
<br/>            <a class="preview" href="" rel="prettyPhoto">
            <img  class="img-circle" src="<?php echo base_url('asset/icon/heart.png')?>" alt="" />
            1 Doctor Donor
            </a>
<br/>
            <a class="preview" href="" rel="prettyPhoto">
            <img  class="img-circle" src="<?php echo base_url('asset/icon/table_money.png')?>" alt="" />
            20, 000 Amount Needed
            </a>
<br/>            <a class="preview" href="" rel="prettyPhoto">
            <img  class="img-circle" src="<?php echo base_url('asset/icon/save_money.png')?>" alt="" />
            10, 000 Amount Donated
            </a>
<br/>




     
          </div>
    </div>


 	
  <?php
      }
    }
  
  ?>
  </div>

        </div><!--/.container-->
    </section><!--/#feature-->
    <div class="modal fade" tabindex="-1" role="dialog" id="donate_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
<div class="">
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


          </div>
          <div class="modal-footer">
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="volunteer_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
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
          <div class="modal-footer">
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

	
