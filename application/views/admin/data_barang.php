<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-2"><i class="fas fa-plus fa sm"></i>Tambah Barang</button>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="3">Aksi</th>
        </tr>
        <?php 
            $no=1;
            foreach($barang as $brg) : ?>

            <tr>
                <td><?= $no++?></td>
                <td><?= $brg->nama_brg?></td>
                <td><?= $brg->keterangan?></td>
                <td><?= $brg->kategori?></td>
                <td><?= $brg->harga?></td>
                <td><?= $brg->stok?></td>
                <td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
                <td><div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div></td>
                <td><div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div></td>
            </tr>

                <?php endforeach; ?>
        
    </table>
</div>