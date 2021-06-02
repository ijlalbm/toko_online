<div class="container-fluid">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url('assets/img/slider1.jpg') ?>" class="d-block w-100" alt="Slider1">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/img/slider2.jpg') ?>" class="d-block w-100" alt="Slider2">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <div class="row text-center mt-4">
        <?php foreach($pakaian_wanita as $brg) : ?>

            <div class="card ml-3 mt-3" style="width: 14rem;">
                <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $brg->nama_brg ; ?></h5>
                    <small><?php echo $brg->keterangan ; ?></small><br>
                    <span class="badge bg-success mb-3">Rp. <?php echo number_format($brg->harga, 0,',','.') ; ?></span>
                    <?= anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>')?>
                    <?= anchor('dashboard/detail/'.$brg->id_brg,'<div class="btn btn-sm btn-success">Detail</div>')?>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>