<h1 class="display-7">New Plan</h1>
<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
<?php echo form_open('plan/insert'); ?>
<div class="row">
    <div class="col">
        <label for="plan_name">Plan Name</label>
        <div class="input-group">        
            <input type="text" id="plan_name" name="plan_name" class="form-control"/>
        </div>
    </div>
    <div class="col">
        <label for="plan_price">Price</label>
        <div class="input-group">
            <input type="text" id="plan_price" name="plan_price" class="form-control"/>
        </div>
    </div>
</div>

<div class="row">
    <div class="col"><br/></div>
</div>
<div class="row">
    <div class="col">        
            <input type="button" class="btn btn-primary" value="Submit"/>
            <input type="reset" class="btn btn-secondary" value="Cancel"/>
    </div>
</div>
<?php echo form_close(); ?>