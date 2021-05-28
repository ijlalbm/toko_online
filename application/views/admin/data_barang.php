<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-2" data-target="#data_barang" data-toggle="modal"><i class="fas fa-plus fa sm"></i>Tambah Barang</button>
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

<!-- Modal -->
<div class="modal fade" id="data_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate aspernatur iste omnis obcaecati! Enim non, deserunt ipsa beatae a velit labore quia, asperiores suscipit maxime, ea optio officiis dignissimos amet!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>