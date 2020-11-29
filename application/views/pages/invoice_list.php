<h1 class="display-7">Invoice List</h1>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Invoice Date</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Plan</th>
      <th scope="col">Expiry Date</th>
      <th scope="col">Bill Amount</th>
      <th scope="col">Payment</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($posts as $post):?>
      <tr>
        <td scope="row"></td>
        <td><?php echo $post['inv_date'];?></td>
        <td><?php echo '<b>'.$post['user_name'].'</b><br>'.$post['name'];?></td>
        <td><?php echo $post['plan_name'];?></td>
        <td><?php echo $post['exp_date'];?></td>
        <td><?php echo $post['price'];?></td>
        <td><?php echo $post['payment'];?></td>
        <td><a href="<?php echo base_url();?>print_invoice/<?php echo $post['inv_id'];?>">Print</a> | <a href="<?php echo base_url();?>edit_invoice/<?php echo $post['inv_id'];?>">Edit</a></td>
      </tr>
      <?php endforeach; ?>
    
  </tbody>
</table>
