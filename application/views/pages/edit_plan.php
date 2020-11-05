<h1 class="display-7">Edit Plan</h1>
<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
<?php echo form_open('plan/update'); ?>
<input type="hidden" name="plan_id" value="<?php echo $plan->plan_id;?>"/>
<div class="row">
    <div class="col">
        <label for="plan_name">Customer Name</label>
        <div class="input-group">        
            <input type="text" id="plan_name" name="plan_name" class="form-control" value="<?php echo set_value('plan_name',$plan->plan_name); ?>"/>
        </div>
    </div>
    <div class="col">
        <label for="plan_price">Price</label>
        <div class="input-group">
            <input type="text" id="plan_price" name="plan_price" class="form-control" value="<?php echo set_value('plan_price',$plan->plan_price); ?>"/>
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