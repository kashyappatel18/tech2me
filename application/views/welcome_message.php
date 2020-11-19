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
    <div class="col-2">
        <div class="card widget-flat" style="padding:10px;">
            <div class="card-body">
                <p>Total Recovery</p>
                <h4 class="display-7">₹ <?php echo number_format($total_recovery->tot_recovery); ?></h4>
            </div>
        </div>
    </div>
</div>
<div class="row">
    &nbsp;
</div>
<div class="row">
    <div class="col-5">
        <div class="card widget-flat" style="padding:10px;">
            <div class="card-body">
                <div class="row">
                <p class="col text-muted">RECOVERY LIST</p>
                <div class="col text-right"><small>EXPORT TO:</small> <a href>PDF</a> | <a href>Excel</a></div>
                </div>
                <div class="row scrollbar scrollbar-primary">
                    <div class="col-12">
                <table class="table table-hover">
                    <tbody>
                    <?php foreach ($recovery_list as $recovery):?>
                    <tr>
                        <td></td>
                        <td><?php echo $recovery['user_name']; ?></td>
                        <td><?php echo $recovery['mobile_no']; ?></td>
                        <td>₹ <?php echo $recovery['dif']; ?></td>
                        <td><a href="<?php echo base_url();?>edit_invoice/<?php echo $recovery['inv_id'];?>">Pay</a></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-5">
        <div class="card widget-flat" style="padding:10px;">
            <div class="card-body">
                <div class="row">
                <p class="col text-muted">EXPIRY LIST</p>
                <div class="col text-right"><small>EXPORT TO:</small> <a href>PDF</a> | <a href>Excel</a></div>
                </div>
                <div class="row scrollbar scrollbar-primary">
                    <div class="col-12">
                <table class="table table-hover">
                    <tbody>
                    <?php foreach ($expiry_list as $expiry):?>
                    <tr>
                        <td></td>
                        <td><?php echo $expiry['user_name']; ?></td>
                        <td><?php echo $expiry['mobile_no']; ?></td>
                        <td><?php echo $expiry['exp_date']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
//print_r($total_recovery['tot_recovery']);
?>


