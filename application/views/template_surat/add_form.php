<main>
<div class="container-fluid">
<h1 class="mt-4"></h1>
<ol class="breadcrumb mb-4">
<li class="breadcrumb-item"><a href="<?php echo site_url('surat_ajuan') ?>">Surat</a></li>
<li class="breadcrumb-item active"><?php echo $title ?></li>
</ol>
<div class="card mb-4">
<div class="card-body">
<form action="<?php echo site_url('Templatesurat/surat_ajuan') ?>" method="post" enctype="multipart/form-data" >
<div class="mb-3">
<label >NAMA PENGIRIM <code>*</code></label>
<input class="form-control" type="text" name="nama" placeholder="NAMA PENGIRIM" required />
</div>
<div class="mb-3">
<label >PERIHAL SURAT <code>*</code></label>
<input class="form-control" type="text" name="perihal" placeholder="PERIHAL SURAT" required />
</div>

<div class="col"></div>
</div>
<div class="mb-3">
<label >TUJUAN SURAT <code>*</code></label>
<input class="form-control" type="text" name="tujuan_surat"placeholder="TUJUAN " required />
</div>

<div class="mb-3">
<label for="username">TANGGAL KIRIM <code>*</code></label>
<textarea class="form-control" placeholder="TANGGAL KIRIM" name="tgl_kirim" id="floatingTextarea2" style="height: 100px"></textarea>
</div>

<div class="mb-3">
<label for="username">KETERANGAN <code>*</code></label>
<textarea class="form-control" placeholder="KETERANGAN" name="keterangan" id="floatingTextarea2" style="height: 100px"></textarea>
</div>
<button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save Data</button>
</form>
</div>
</div>
<div style="height: 100vh"></div>
</div>
</main>