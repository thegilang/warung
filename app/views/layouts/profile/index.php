<!---Content -->
<div class="section">
  <div class="container">
    <h1>Profile</h1>
    <div class="box">
      <form action="<?=BASE_URL;?>/profile/update" method="POST">
        <input type="hidden" name="id" value="<?=$data['data_admin']['admin_id'];?>">
        <input type="text" name="nama" placeholder="Nama Lengkap" value="<?=$data['data_admin']['admin_name'];?>" class="input-control" required>
        <input type="text" name="user" placeholder="Username" value="<?=$data['data_admin']['username'];?>" class="input-control" required>
        <input type="text" name="hp" placeholder="No Hp " value="<?=$data['data_admin']['admin_telp'];?>" class="input-control" required>
        <input type="email" name="email" placeholder="Email" value="<?=$data['data_admin']['admin_email'];?>" class="input-control" required>
        <input type="text" name="alamat" placeholder="Alamat " value="<?=$data['data_admin']['admin_address'];?>" class="input-control" required>
        <input type="submit" name="submit" value="Ubah Profile" class="btn">
      </form>
    </div>
    <h1>Ubah Password</h1>
    <div class="box">
      <form action="<?=BASE_URL;?>/profile/changepass" method="POST">
        <input type="hidden" name="id" value="<?=$data['data_admin']['admin_id'];?>">
        <input type="password" name="pass1" placeholder="Password Baru" class="input-control" required>
        <input type="password" name="pass2" placeholder="Konfirmasi Password Baru"  class="input-control" required>
        <input type="submit" name="submit" value="Ubah Password" class="btn">
      </form>
    </div>
  </div>
</div>