<!---Content -->
<div class="section">
  <div class="container">
    <h1>Data Produk</h1>
    <div class="box">
    <?$num=0;?>
    <div class="box">
      <p><a href="<?=BASE_URL.'/kategori/tambah/';?>">Tambahkan Data Produk</a></p>
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
             <?=$produk['product_price'];?>
            </td>
            <td>
             <?=$produk['product_description'];?>
            </td>
            <td>
             <img src="<?=$produk['product_image'];?>">
            </td>
            <td>
             <?=$produk['product_status'];?>
            </td>
            <td>
             <?=$produk['product_name'];?>
            </td>
            <td>
              <a href="<?=BASE_URL.'/kategori/edit/'.$produk['category_id'];?>">Edit</a> || <a href="<?=BASE_URL.'/kategori/hapus/'.$produk['category_id'];?>">Hapus</a>
            </td>
          </tr>
          <?endforeach;?>
        </tbody>
      </table>
    </div>
  </div>
</div>