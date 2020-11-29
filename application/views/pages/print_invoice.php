<?php 
    $cust="";
    $pln="";
    foreach ($customers as $customer):
        if(set_value('cust_id')==$customer['cust_id'] || $invoice->cust_id==$customer['cust_id']){
            $cust=$customer;
        }
    endforeach;
?>
<?php 
    foreach($plans as $plan):
        if(set_value('plan_id')==$plan['plan_id'] || $invoice->plan_id==$plan['plan_id']){
            $pln=$plan;
        }
    endforeach;
?>
<div class="container">
<table>
    <tbody>
        <tr>
            <td><img src="<?php echo base_url(); ?>assets/images/logo.png" width="200px"></td>
            <td style="vertical-align: bottom;text-align: right;"><h1>Invoice</h1></td>
        </tr>
        <tr>
            <td>2nd Floor, Super Market, <br>Gandhi Chowk, <br>Dhrol - 361210</td>
            <td style="vertical-align: top;text-align: right;">
                <strong>Invoice No#</strong> <?php echo $invoice->inv_id;?><br>
                <strong>Invoice Date#</strong> <?php echo $invoice->inv_date;?>
            </td>
        </tr>
        <tr>
            <td><br><br></td>
        </tr>
        <tr>
            <td>
                <strong>Bill To#</strong><br>
                <?php echo $cust['name']; ?><br>
                <?php echo $cust['address']; ?><br>
                <?php echo $cust['mobile_no']; ?><br>
                <?php //print_r($cust);?>
            </td>
            <td style="vertical-align: bottom;text-align: right;">
                <strong>Expiry Date#</strong> <?php echo $invoice->exp_date;?>
            </td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <td colspan="2">
                <table class="border">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Item & Description</th>
                            <th>Quantity</th>
                            <th>Rate</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: center;vertical-align: middle;">1</td>
                            <td style="text-align: left;vertical-align: middle;">
                                <strong>Plan:</strong> <?php echo $pln['plan_name'];?><br>
                                <strong>Username:</strong>  <?php echo $cust['user_name']; ?>
                            </td>
                            <td style="text-align: center;vertical-align: middle;">1</td>
                            <td style="text-align: right;vertical-align: middle;"><?php echo $invoice->price;?></td>
                            <td style="text-align: right;vertical-align: middle;"><?php echo $invoice->price;?></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align: right;vertical-align: middle;">Total</td>
                            <td style="text-align: right;vertical-align: middle;"><?php echo $invoice->price;?></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right;vertical-align: bottom;"><br><br><br><br><br><br>Authorised Signatory</td>
        </tr>
    </tbody>
</table>
</div>