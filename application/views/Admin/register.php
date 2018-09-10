<?php include('header.php'); ?>
<div class="container" style="margin-top:20px;">
  <h1>Register Form</h1>
    <?php echo form_open('Admin/sendemail'); ?>
  
  <div class="row">
    <div class="col-lg-6">
            <div class="form-group">
    <label for="Username">Username:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Your Username','name'=>'uname','value'=>set_value('uname')]); ?>
           </div>
        </div>
        <div class="col-lg-6"  style="margin-top: 40px;">
          <?php echo form_error('uname'); ?>
        </div>
    </div>

    <div class="row">
    <div class="col-lg-6">
           <div class="form-group">
    <label for="pwd">Password:</label>
    <?php echo form_password(['class'=>'form-control','placeholder'=>'Enter Your Password','type'=>'Password','name'=>'pass','value'=>set_value('pass')]); ?>
              </div>
        </div>
        <div class="col-lg-6" style="margin-top: 40px;">
          <?php echo form_error('pass'); ?>
        </div>
    </div>

    <div class="row">
    <div class="col-lg-6">
            <div class="form-group">
    <label for="Firstname">First name:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Your First Name','name'=>'fname','value'=>set_value('fname')]); ?>
           </div>
        </div>
        <div class="col-lg-6"  style="margin-top: 40px;">
          <?php echo form_error('fname'); ?>
        </div>
    </div>

    <div class="row">
    <div class="col-lg-6">
            <div class="form-group">
    <label for="Lastname">Last name:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Your Last Name','name'=>'lname','value'=>set_value('lname')]); ?>
           </div>
        </div>
        <div class="col-lg-6"  style="margin-top: 40px;">
          <?php echo form_error('lname'); ?>
        </div>
    </div>

    <div class="row">
    <div class="col-lg-6">
            <div class="form-group">
    <label for="Email">Email:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Your Email','name'=>'email','value'=>set_value('email')]); ?>
           </div>
        </div>
        <div class="col-lg-6"  style="margin-top: 40px;">
          <?php echo form_error('email'); ?>
        </div>
    </div>

     <br>
  <?php echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'Submit']); ?>
  <?php echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']); ?>
</form>
</div>
<?php include('footer.php'); ?>