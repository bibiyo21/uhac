


         <section id="feature">

<br/>
<br/>
<br/>
<?php if(!empty($error_message)): ?>
		<div class="alert alert-danger" role="alert">Account does not exists.</div>
	<?php else: ?>
		<div class="alert alert-success" role="alert">Transaction Successful.</div>
	<?php endif; ?>
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


<input type="button" class="btn btn-danger" style="float:right;" value="Volunteer"></input> 
<a href="#" data-toggle="modal" data-target="#loginModal_stud"><i class="glyphicon glyphicon-user" type="button"></i>  <input type="button" class="btn btn-primary" style="float:right;" value="Donate"></input></a>


     
          </div>
    </div>


  <?php
      }
    }
  
  ?>
  </div>

        </div><!--/.container-->
    </section><!--/#feature-->
    <div class="modal fade" tabindex="-1" role="dialog" id="loginModal_stud">
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

	
