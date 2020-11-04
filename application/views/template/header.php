<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>tech2me<?php echo isset($title)?' | '.$title:""; ?></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	</head>
	<body>
		<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse mb-4">
			<div class="container">
      		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
      		</button>
      		<a class="navbar-brand" href="<?php echo base_url(); ?>"><h2>tech2me</h2></a>
      		<div class="collapse navbar-collapse" id="navbarCollapse">
        		<ul class="navbar-nav mr-auto">
          			<li class="nav-item dropdown">
            			<a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>billing" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Customer
                  </a>
                  <div class="dropdown-menu" aria-labelledby="nvarbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo base_url(); ?>new_customer">Add Customer</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>customer_list">Customer List</a>
                  </div>
          			</li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>billing" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Plan
                  </a>
                  <div class="dropdown-menu" aria-labelledby="nvarbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo base_url(); ?>new_plan">Add New Plan</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>pinvoice">Plan List</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>billing" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Invoice
                  </a>
                  <div class="dropdown-menu" aria-labelledby="nvarbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo base_url(); ?>inv_print">New Invoice</a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>gst_print">Invoice List</a>
                    <a class="dropdown-item" href="#">Payment</a>
                  </div>
                </li>
          	
                </ul>
        	
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <?php echo date('D M d, Y');?> 
                        </a>
                        
                    </li>
                </ul>
               
            </div>
      	</div>
    	</nav>
    	<div class="container ">