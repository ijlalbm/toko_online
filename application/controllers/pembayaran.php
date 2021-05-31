<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                    $grand_total = 0;
                    if($keranjang = $this->cart->contents()){
                        foreach ($keranjang as $item) {
                            $grand_total = $grand_total + $item['subtotal'];
                        };
                        echo "<h4> Total Belanja Anda: Rp. ".number_format($grand_total,0,',','.');
                    }
                ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>

            <form action="<?php echo base_url()?> dashboard/proses_pesanan" method="post">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat Lengkap</label>
                        <input type="text" name="alamat" placeholder="Alamat Anda" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="text" name="no_tlp" placeholder="Nomor Telepon Anda" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control">Jasa Pengiriman</label>
                        <select name=""> JNE </select>
                        <select name=""> TIKI </select>
                        <select name=""> POS INDONESIA </select>
                        <select name=""> GOJEK </select>
                    </div>
                    <div class="form-group">
                        <label class="form-control">Pilih Bank</label>
                        <select name=""> BCA - xxxxx </select>
                        <select name=""> BNI - xxxx </select>
                        <select name=""> BRI - xxxxx </select>
                        <select name=""> Mandiri - xxxx </select>
                    </div>

                    <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
            </form>
        </div>
    </div>
</div>