<div class="row">
    <div class="col"><h4 class="display-7">Dashboard</h4></div>
</div>
<div class="row">
    <div class="col-2">
        <div class="card widget-flat" style="padding:10px;">
            <div class="card-body">
                <p>Customers</p>
                <h4 class="display-7"><?php echo $num_of_cust; ?></h4>
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card widget-flat" style="padding:10px;">
            <div class="card-body">
                <p>Free Users</p>
                <h4 class="display-7"><?php echo $free_users; ?></h4>
            </div>
        </div>
    </div>
</div>
<div class="row">
    &nbsp;
</div>
<div class="row">
    <div class="col-6">
        <div class="card widget-flat" style="padding:10px;">
            <div class="card-body">
                <p>Recovery List</p>
                <table class="table table-hover">
                    <tbody>
                    <?php foreach ($recovery_list as $recovery):?>
                    <tr>
                        <td></td>
                        <td><?php echo $recovery['user_name']; ?></td>
                        <td><?php echo $recovery['mobile_no']; ?></td>
                        <td><?php echo $recovery['dif']; ?></td>
                        <td><a href="<?php echo base_url();?>edit_invoice/<?php echo $recovery['inv_id'];?>">Pay</a></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
//print_r($recovery_list);
?>


