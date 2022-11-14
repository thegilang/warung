<!---Content -->
<div class="section">
  <div class="container">
    <h1>Edit Data Kategori</h1>
    <div class="box">
      <form action="<?=BASE_URL;?>/kategori/editkategori" method="POST">
        <input type="hidden" name="category_id" value="<?=$data['kategori']['category_id'];?>">
        <input type="text" name="nama" placeholder="Nama Kategori"  value="<?=$data['kategori']['category_name'];?>" class="input-control" autocomplete="off" required>
        <input type="submit" name="submit" value="Edit Kategori" class="btn">
      </form>
    </div>
  </div>
</div>