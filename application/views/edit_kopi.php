

<section class="judul">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h3>Edit Kopi</h3>
        <hr>
      </div>
    </div>
  </div>
</section>

<!-- tabel pesanan -->
<section class="edit">
  <div class="container-fluid">
<?php foreach ($kopi as $k) : ?>
  <?php echo form_open_multipart('admin/update_kopi'); ?>
    <div class="form-group">
      <label> Nama Kopi : </label>
      <input type="hidden" name="id_kopi" class="form-control" value="<?php echo $k->id_kopi ?>">
      <input type="text" name="nama_kopi" class="form-control" value="<?php echo $k->nama_kopi ?>">
    </div>
    <div class="form-group">
      <label> Berat Kopi : </label>
      <input type="text" name="berat_kopi" class="form-control" value="<?php echo $k->berat_kopi ?>">
    </div>
    <div class="form-group">
      <label> Variasi Kopi : </label>
      <input type="text" name="variasi_kopi" class="form-control" value="<?php echo $k->variasi_kopi ?>">
    </div>
    <div class="form-group">
      <label> Rekomendasi Seduh : </label>
      <input type="text" name="rekomendasi_seduh" class="form-control" value="<?php echo $k->rekomendasi_seduh ?>">
    </div>
    <div class="form-group">
      <label> Karakter Rasa : </label>
      <input type="text" name="karakter_rasa" class="form-control" value="<?php echo $k->karakter_rasa ?>">
    </div>
    <div class="form-group">
      <label> Tingkat Roasting : </label>
      <input type="text" name="tingkat_roasting" class="form-control" value="<?php echo $k->tingkat_roasting ?>">
    </div>
    <div class="form-group">
      <label> Stock Kopi : </label>
      <input type="text" name="stock_kopi" class="form-control" value="<?php echo $k->stock_kopi ?>">
    </div>
    <div class="form-group">
      <label> Harga Kopi : </label>
      <input type="text" name="harga_kopi" class="form-control" value="<?php echo $k->harga_kopi ?>">
    </div>
    <div class="form-group">
      <label> ID Brand : </label>
      <input type="text" name="id_brand" class="form-control" value="<?php echo $k->id_brand ?>">
    </div>
    <div class="form-group">
      <label> Gambar Kopi : </label>
      <input type="text" name="gambar_kopi" class="form-control" value="<?php echo $k->gambar_kopi ?>">
      <img class="mt-3" width="300" src="<?php echo base_url('assets/img/kopi/').$k->gambar_kopi; ?>">
    </div>
  
  <button type="submit" class="btn btn-primary btn-sm" style="background-color: #ee6e42"> SIMPAN </button>
    
  </form>
<?php echo form_close(); ?>
<?php endforeach ; ?>
</div>
</section>

  </body>
</html>