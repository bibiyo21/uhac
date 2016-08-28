


         <section id="feature">

<br/>
<br/>
<br/>
            <div class="row">
            <table class="table table-striped">
              <thead><tr>
                <th>nickname</th>
                <th>disease name</th>
                <th>disease description</th>
                <th>remarks</th>
                <th>total donors</th>
                <th>total volunteers</th>
                <th>Actions</th>
              </tr></thead>
              <tbody><?php if(isset($patients) && is_array($patients) && count($patients) > 0):?>
                <?php foreach($patients as $patient):?>
                  <tr>
                    <td><?php echo '<h3>'.$patient->nickname.'</h3>';?></td>
                    <td><?php echo '<h3>'.$patient->complication_name.'</h3>';?></td>
                    <td><?php echo $patient->complicatin_desc;?></td>
                    <td><?php echo $patient->user_remarks;?></td>
                    <td><a class="preview" href="" rel="prettyPhoto">
            <img  class="img-circle" src="<?php echo base_url('asset/icon/heart.png')?>" alt="" />
            2 Donors
            </a></td>
                    <td><a class="preview" href="" rel="prettyPhoto">
            <img  class="img-circle" src="<?php echo base_url('asset/icon/heart.png')?>" alt="" />
            1 Doctor Donor
            </a></td>
                    <td><a href="#" data-toggle="modal" data-target="#donate_modal"> <input type="button" class="btn btn-primary" value="Donate"></input></a>
|
<a href="#" data-toggle="modal" data-target="#volunteer_modal">
<input type="button" class="btn btn-danger"  value="Volunteer"></input> </a></td>
                  </tr>
                <?php endforeach; ?>
                <?php endif;?></tbody>
              
            </table>
<br/>





     
          </div>
    </div>
  </div>

        </div><!--/.container-->
    </section><!--/#feature-->
    <div class="modal fade" tabindex="-1" role="dialog" id="donate_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Donation</h4>
          </div>
          <div class="modal-body">
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
