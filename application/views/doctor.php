


         <section id="feature">

<br/>
<br/>
<br/>
            <div class="row">
   <div class="row">
  <?php
    if(isset($doctors) && is_array($doctors) && count($doctors) > 0)
    {
      foreach($doctors as $doctor)
      {
    
  ?>
    <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                         <a class="preview" href="<?php echo base_url('asset/pics/7.jpg')?>" rel="prettyPhoto">
            <img  class="img-circle" src="<?php echo base_url('asset/pics/7.jpg')?>" width="30%" alt="" />
                  </a>
                
            <?php echo '<h3>'.$doctor->first_name.' '.$doctor->last_name.'</h3>';?>
                        <?php echo '<h3>Doctor in ....</h3><br/>';?>
                        <?php echo 'Address: '. $doctor->address.'<br/>';?>
                        <?php echo 'Hospital Address: '.$doctor->hospital;?>

         <br/>
           <a class="preview" href="" rel="prettyPhoto">
            <img  class="img-circle" src="<?php echo base_url('asset/icon/heart.png')?>" alt="" />
            2 Person you Volunteered As Doctor
            </a>               
         <br/>
           <a class="preview" href="" rel="prettyPhoto">
            <img  class="img-circle" src="<?php echo base_url('asset/icon/heart.png')?>" alt="" />
            2 Person you Donated
            </a>               
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

	
