<h1 class="display-7">New Customer</h1>
<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
<?php echo form_open('customer/insert'); ?>
<div class="row">
    <div class="col">
        <label for="cust_name">Customer Name</label>
        <div class="input-group">        
            <input type="text" id="cust_name" name="cust_name" class="form-control" value="<?php echo set_value('cust_name'); ?>"/>
        </div>
    </div>
    <div class="col">
        <label for="user_name">User Name</label>
        <div class="input-group">
            <input type="text" id="user_name" name="user_name" class="form-control" value="<?php echo set_value('user_name'); ?>"/>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <label for="cust_mobile">Mobile No</label>
        <div class="input-group">        
            <input type="text" id="cust_mobile" name="cust_mobile" class="form-control" value="<?php echo set_value('cust_mobile'); ?>"/>
        </div>
    </div>
    <div class="col">
        <label for="cust_city">City</label>
        <div class="input-group">
            <input type="text" id="cust_city" name="cust_city" class="form-control" value="<?php echo set_value('cust_city'); ?>"/>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <label for="cust_address">Address</label>
        <div class="input-group">
            <textarea class="form-control" name="cust_add"><?php echo set_value('cust_add'); ?></textarea>
        </div>
    </div>
</div>
<div class="row">
    <div class="col"><br/></div>
</div>
<div class="row">
    <div class="col">        
        <input type="submit" class="btn btn-primary" value="Submit"/>
        <input type="reset" class="btn btn-secondary" value="Cancel"/>
    </div>
</div>
<?php echo form_close(); ?>