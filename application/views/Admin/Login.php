<?php include('header.php'); ?>
<div class="container" style="margin-top:20px;">
	<h1>Admin Form</h1>
    <?php echo form_open('Admin/login'); ?>
	
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

     <br>
	<?php echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'Submit']); ?>
	<?php echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']); ?>
	<?php echo anchor('Admin/register','Sign Up?','class="link-class"') ?>
</form>
</div>
<?php include('footer.php'); ?>