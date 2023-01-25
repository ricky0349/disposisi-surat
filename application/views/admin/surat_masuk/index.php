<main>
<div class="container-fluid">
<h1 class="mt-4"></h1>
<ol class="breadcrumb mb-4">
<li class="breadcrumb-item"><a href="<?php echo site_url('admin/surat_masuk') ?>">User</a></li>
<li class="breadcrumb-item active"><?php echo $title ?></li>
</ol>
<div class="card mb-4">
<div class="card-header">
<a href="<?php echo site_url('admin/surat_masuk/add') ?>"><i class="fas fa-plus"></i> Add New</a>
</div>
<?php if ($this->session->flashdata('success')): ?>
<div class="alert alert-success" role="alert">
<?php echo $this->session->flashdata('success'); ?>
</div>
<?php endif; ?>
<div class="card-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover"
id="tabelsurat" width="100%" cellspacing="0">
<thead>
<tr>
<th>No.</th>
<th>No Surat</th>
<th>Perihal</th>
<th>Keterangan</th>
<th>Taggal Surat</th>
<th>Surat</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
$no =1;
foreach ($surat as $suratdata) : ?> 
	<tr>
<td><?php echo $no++?></td>
<td> <?php echo  $suratdata->no_surat ?></td>
<td><?php echo $suratdata->perihal ?></td>
<td><?php echo $suratdata->keterangan ?></td>
<td><?php echo $suratdata->tgl_surat ?></td>
<td>
<img src="<?php echo base_url('Assets/assets/photo/
surat_masuk/'.$suratdata->image)?>" width ='64'/>
</td>
<td>


<?php echo anchor('admin/surat_masuk/getedit/'.$suratdata->id,'  <div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </div>') ?> 

<div onclick="return confirm ('Ingin mengapus data user ini ') ">
 <?php echo anchor('admin/surat_masuk/delete/'.$suratdata->id,'   <div class="btn btn-sm btn-danger mt-1" " >  <i class="fa fa-trash"></i> </div>  ') ?> </div>

</td>
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
