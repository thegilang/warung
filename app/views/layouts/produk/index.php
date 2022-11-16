<!---Content -->
<div class="section">
  <div class="container">
    <h1>Data Produk</h1>
    <div class="box">
    <?$num=0;?>
    <div class="box">
      <p><a href="<?=BASE_URL.'/produk/tambah/';?>">Tambahkan Data Produk</a></p>
      <br>
      <table border="1" cellspacing="0" class="table">
        <thead>
        <tr>
          <th width="60px">
            No
          </th>
          <th>
            Kategori 
          </th>
          <th>
            Nama Produk
          </th>
          <th>
           Harga  
          </th>
          <th>
            Deskripsi
          </th>
          <th>
            Gambar
          </th>
          <th>
            Status
          </th>
          <th width="150px">
            Aksi
          </th>
        </tr>
        </thead>
        <tbody>
          <?foreach($data['produk'] as $produk):?>
          <?$num++;?>
          <tr>
            <td>
              <?=$num;?>.
            </td>
            <td>
             <?=$produk['category_name'];?>
            </td>
            <td>
             <?=$produk['product_name'];?>
            </td>
            <td>
             <?=$produk['product_price'];?>
            </td>
            <td>
             <?=$produk['product_description'];?>
            </td>
            <td>
            <img src="<?=BASE_URL.'/storage/'.$produk['product_image'];?>" width="50px">
            </td>
            <td>
              <?=$produk['product_status'] == 0 ? 'Tidak Aktif' : 'Aktif';?>
            </td>
            <td>
              <a href="<?=BASE_URL.'/produk/edit/'.$produk['product_id'];?>">Edit</a> || <a href="<?=BASE_URL.'/produk/hapus/'.$produk['product_id'];?>">Hapus</a>
            </td>
          </tr>
          <?endforeach;?>
        </tbody>
      </table>
    </div>
  </div>
</div>