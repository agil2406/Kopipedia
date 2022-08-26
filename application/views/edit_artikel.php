

<section class="judul">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h3>Edit Artikel</h3>
        <hr>
      </div>
    </div>
  </div>
</section>

<!-- tabel pesanan -->
<section class="edit">
  <div class="container-fluid">
<?php foreach ($artikel as $ar) : ?>
  <?php echo form_open_multipart('admin/update_artikel'); ?>
    <div class="form-group">
      <label> Judul Artikel : </label>
      <input type="hidden" name="id_artikel" class="form-control" value="<?php echo $ar->id_artikel ?>">
      <input type="text" name="judul_artikel" class="form-control" value="<?php echo $ar->judul_artikel ?>">
    </div>
    <div class="form-group">
      <label> Isi Artikel : </label>
      <textarea name="isi_artikel" class="form-control" cols="30" rows="10"> <?php echo $ar->isi_artikel ?></textarea>
    </div>
    <div class="form-group">
      <label> Gambar Artikel : </label>
      <input type="text" name="gambar_artikel" class="form-control" value="<?php echo $ar->gambar_artikel ?>">
      <img class="mt-3" width="300" src="<?php echo base_url('assets/img/artikel/').$ar->gambar_artikel; ?>">
    </div>
  
  <button type="submit" class="btn btn-primary btn-sm" style="background-color: #ee6e42"> SIMPAN </button>
    
  </form>
<?php echo form_close(); ?>
<?php endforeach ; ?>
</div>
</section>

  </body>
</html>