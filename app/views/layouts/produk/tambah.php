<!---Content -->
<div class="section">
  <div class="container">
    <h1>Tambah Data Produk</h1>
    <div class="box">
      <form action="<?=BASE_URL;?>/produk/tambahproduk" method="POST" enctype="multipart/form-data">
        <select  name="kategori" class="input-control" required>
          <option value="">__Pilih__</option>
          <?foreach($data['data_kategori'] as $kategori):?>
            <option value="<?=$kategori['category_id'];?>"><?=$kategori['category_name'];?></option>
          <?endforeach;?>
        </select>
        <input type="text" name="nama" placeholder="Nama Produk" class="input-control" autocomplete="off" required>
        <input type="number" name="harga" placeholder="Harga Produk" class="input-control" autocomplete="off" required>
        <textarea name="deskripsi" placeholder="Deskripsi" class="input-control" autocomplete="off" required></textarea>
        <input type="file" name="gambar" accept="image/*" class="input-control"  required>
        <select  name="status" class="input-control" required>
          <option value="">__Pilih__</option>
          <option value="1">Aktif</option>
          <option value="0">Tidak Aktif</option>
        </select>
        <input type="submit" name="submit" value="Tambah Produk" class="btn">
      </form>
    </div>
  </div>
</div>