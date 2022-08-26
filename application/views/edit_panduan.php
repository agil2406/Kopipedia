

<section class="judul">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h3>Edit Panduan</h3>
        <hr>
      </div>
    </div>
  </div>
</section>

<!-- tabel pesanan -->
<section class="edit">
  <div class="container-fluid">
<?php foreach ($panduan as $ar) : ?>
  <?php echo form_open_multipart('admin/update_panduan'); ?>
    <div class="form-group">
      <label> Judul Panduan : </label>
      <input type="hidden" name="id_panduan" class="form-control" value="<?php echo $ar->id_panduan ?>">
      <input type="text" name="judul_panduan" class="form-control" value="<?php echo $ar->judul_panduan ?>">
    </div>
    <div class="form-group">
      <label> Isi Panduan : </label>
      <textarea name="isi_panduan" class="form-control" cols="30" rows="10"> <?php echo $ar->isi_panduan ?></textarea>
    </div>
    <div class="form-group">
      <label> Gambar Panduan : </label>
      <input type="text" name="gambar_panduan" class="form-control" value="<?php echo $ar->gambar_panduan ?>">
      <img class="mt-3" width="300" src="<?php echo base_url('assets/img/panduan/').$ar->gambar_panduan; ?>">
    </div>
  
  <button type="submit" class="btn btn-primary btn-sm" style="background-color: #ee6e42"> SIMPAN </button>
    
  </form>
<?php echo form_close(); ?>
<?php endforeach ; ?>
</div>
</section>

  </body>
</html>