<h1 class="display-7">Customer List</h1>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User Name</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($posts as $post):?>
      <tr>
        <th scope="row"><?php echo $post['cust_id'];?></th>
        <td><?php echo $post['user_name'];?></td>
        <td><?php echo $post['name'];?></td>
        <td><?php echo $post['mobile_no'];?></td>
        <td><?php echo $post['address'];?></td>
        <td><?php echo $post['installation_addr'];?></td>
        <td><a href="<?php echo base_url();?>edit_customer/<?php echo $post['cust_id'];?>">Edit</a></td>
      </tr>
      <?php endforeach; ?>
    
  </tbody>
</table>
