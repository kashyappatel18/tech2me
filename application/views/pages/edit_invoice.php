<h1 class="display-7">Edit Invoice</h1>
<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
<?php echo form_open('invoice/update'); ?>
<input type="hidden" name="inv_id" value="<?php echo $invoice->inv_id;?>"/>
<div class="row">
    <div class="col">
        <label for="cust_name">Customer Name</label>
        <div class="form-group">        
            <select id="cust_name" name="cust_id" class="form-control" value="<?php echo set_value('cust_id'); ?>">
                <option value="">--- Select Customer ---</option>
                <?php foreach ($customers as $customer):
                    $select="";
                    if(set_value('cust_id')==$customer['cust_id'] || $invoice->cust_id==$customer['cust_id']){
                        $select="selected";
                    }
                    ?>
                <option value="<?php echo $customer['cust_id']; ?>" <?php echo $select; ?>><?php echo $customer['user_name'].' - - '.$customer['name']; ?></option>
                <?php endforeach;?>
            </select>
        </div>
    </div>
    <div class="col">
        <label for="inv_date">Invoice Date</label>
        <div class="form-group">
            <input class="form-control" type="date" name="inv_date" value="<?php echo set_value('inv_date',$invoice->inv_date);?>" />
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <label for="plan_id">Plan Name</label>
        <div class="form-group">        
            <select id="plan_id" name="plan_id" class="form-control">
                <option value="">--- Select Plan ---</option>
                <?php 
                    foreach($plans as $plan):
                        
                    $select="";
                    if(set_value('plan_id')==$plan['plan_id'] || $invoice->plan_id==$plan['plan_id']){
                    $select="selected";
                    }
                ?>
                <option value="<?php echo $plan['plan_id']; ?>" <?php echo $select; ?>><?php echo $plan['plan_name']; ?></option>
               
                <?php endforeach;?>
            </select>
        </div>
    </div>
    <div class="col">
        <label for="exp_date">Expiry Date</label>
        <div class="form-group">
            <input class="form-control" type="date" name="exp_date" value="<?php echo set_value('exp_date',$invoice->exp_date);?>" />
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <label for="price">Plan Price</label>
        <div class="form-group">        
            <input type="text" id="price" name="price" class="form-control" value="<?php echo set_value('price',$invoice->price); ?>"/>
        </div>
    </div>
    <div class="col">
        <label for="payment">Payment</label>
        <div class="form-group">
            <input type="text" id="payment" name="payment" class="form-control" value="<?php echo set_value('payment',$invoice->payment); ?>"/>
        </div>
    </div>
</div>
<div class="row">
    <div class="col"><br/></div>
</div>
<div class="row">
    <div class="form-group col">        
        <input type="submit" class="btn btn-primary" value="Submit"/>
        <input type="reset" class="btn btn-secondary" value="Cancel"/>
    </div>
</div>
<?php echo form_close(); ?>