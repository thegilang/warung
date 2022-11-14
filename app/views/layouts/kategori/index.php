<!---Content -->
<div class="section">
  <div class="container">
    <h1>Data Kategori</h1>
    <?$num=0;?>
    <div class="box">
      <p><a href="<?=BASE_URL.'/kategori/tambah/';?>">Tambahkan Data Kategori</a></p>
      <table border="1" cellspacing="0" class="table">
        <thead>
        <tr>
          <th width="60px">
            No
          </th>
          <th>
            Kategori 
          </th>
          <th width="150px">
            Aksi
          </th>
        </tr>
        </thead>
        <tbody>
          <?foreach($data['getKategori'] as $kategori):?>
          <?$num++;?>
          <tr>
            <td>
              <?=$num;?>.
            </td>
            <td>
             <?=$kategori['category_name'];?>
            </td>
            <td>
              <a href="<?=BASE_URL.'/kategori/edit/'.$kategori['category_id'];?>">Edit</a> || <a href="<?=BASE_URL.'/kategori/hapus/'.$kategori['category_id'];?>">Hapus</a>
            </td>
          </tr>
          <?endforeach;?>
        </tbody>
      </table>
    </div>
  </div>
</div>