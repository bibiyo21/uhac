<div class="container">
    <h1>Login</h1>
    <form class="form-horizontal" action="<?php echo base_url();?>index.php/home/login_process" method="POST">
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
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-heart"></i> Donate</button>
            </div>
        </div>
    </form>
</div>