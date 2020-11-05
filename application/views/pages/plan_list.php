<h1 class="display-7">Plan List</h1>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Plan Name</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($posts as $post):?>
      <tr>
        <th scope="row"><?php echo $post['plan_id'];?></th>
        <td><?php echo $post['plan_name'];?></td>
        <td><?php echo $post['plan_price'];?></td>
        <td><a href="<?php echo base_url();?>edit_plan/<?php echo $post['plan_id'];?>">Edit</a></td>
      </tr>
      <?php endforeach; ?>
    
  </tbody>
</table>
