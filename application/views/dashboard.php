<div class="container-fluid">

    
<?php echo base_url('assets/img/slider1.jpg') ?>
    <div class="row text-center">
        <?php foreach($barang as $brg) : ?>

            <div class="card ml-3" style="width: 14rem;">
                <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $brg->nama_brg ; ?></h5>
                    <small><?php echo $brg->keterangan ; ?></small><br>
                    <span class="badge bg-success mb-3">Rp. <?php echo $brg->harga ; ?></span>
                    <a href="#" class="btn btn-sm btn-primary">Tambah ke Keranjang</a>
                    <a href="#" class="btn btn-sm btn-success">Detail</a>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>