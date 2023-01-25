<main>
<div class="container-fluid">
<h1 class="mt-4"></h1>
<ol class="breadcrumb mb-4">
<li class="breadcrumb-item"><a href="<?php echo site_url('admin/user') ?>">user</a></li>
<li class="breadcrumb-item active"><?php echo $title ?></li>
</ol>
<div class="card mb-4">
<div class="card-header">
<a href="<?php echo site_url('admin/user/add') ?>"><i cla
ss="fas fa-plus"></i> Add New</a>
</div>
<?php if ($this->session->flashdata('success')): ?>
<div class="alert alert-success" role="alert">
<?php echo $this->session->flashdata('success'); ?>
</div>
<?php endif; ?>
<div class="card-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover"
id="tabelkelas" width="100%" cellspacing="0">
<thead>
<tr>
<th>No.</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Role</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
$no =1;
foreach ($user as $user) :?>  <tr>
<td><?php echo $no++ ?></td>
<td><?php echo $user->username ?></td>
<td><?php echo $user->email ?></td>
<td><?php echo $user->phone ?></td>
<td><?php echo $user->role ?></td>
<td>
		

<?php echo anchor('admin/User/getedit/'.$user->id,'  <div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </div>') ?> 

<div onclick="return confirm ('Ingin mengapus data user ini ') ">
 <?php echo anchor('admin/User/delete/'.$user->id,'   <div class="btn btn-sm btn-danger mt-1" " >  <i class="fa fa-trash"></i> </div>  ') ?> </div>

</td >

</tr>
  <?php  endforeach; ?>  
</tbody>
</table>
</div>
</div>
</div>
<div style="height: 100vh"></div>
</div>
</main>
