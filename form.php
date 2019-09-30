
<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 

  $status = '';

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $nama = $_POST['nama'];
      $pd = $_POST['pd'];
      $jenkel = $_POST['jenkel'];
      $religion = $_POST['religion'];
      $height = $_POST['height'];
      $weight = $_POST['weight'];
      $national = $_POST['national'];
      $status = $_POST['status'];
      $location = $_POST['location'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $sdlock = $_POST['sdlock'];
      $sdwtu = $_POST['sdwtu'];
      $splock = $_POST['splock'];
      $spwtu = $_POST['spwtu'];
      $salock = $_POST['salock'];
      $sawtu = $_POST['sawtu'];
      $unlock = $_POST['unlock'];
      $unwtu = $_POST['unwtu'];

       $query = "INSERT INTO bidata (nama,pd,jenkel,religion,height,weight,national,status,location,phone,email,sdlock,sdwtu,splock,spwtu,salock,sawtu,unlock,unwtu) VALUES('$nama','$pd','$jenkel','$religion','$height','$weight','$national','$status','$location','$phone','$email','$sdlock','$sdwtu','$splock','$spwtu','$salock',
       '$sawtu','$unlock','$unwtu')"; 

       //eksekusi query
      $result = mysqli_query(connection(),$query);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
  }

?>

  <!DOCTYPE html>
<html 
<head>
	<title>data diri</title>
</head>
 <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Pemrograman Web</a>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" style="margin-top:100px;">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "index.php"; ?>">Data Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo "form.php"; ?>">Tambah Data</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          
          <?php 
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Mahasiswa berhasil disimpan</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Mahasiswa gagal disimpan</div>';
              }
           ?>

          <h2 style="margin: 30px 0 30px 0;">Form Mahasiswa</h2>
          <form action="form.php" method="POST">
            
            <div class="form-group">
              <label>nama</label>
              <input type="text" class="form-control" placeholder="nama" name="nama" required="required">
            </div>
            <div class="form-group">
              <label>TTL</label>
              <input type="text" class="form-control" placeholder="pd" name="pd" required="required">
            </div>
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <input type="text" class="form-control" placeholder="jenkel" name="jenkel" required="required">
              </select>
            </div>
            <div class="form-group">
              <label>Agama</label>
              <input type="text" class="form-control" placeholder="religion" name="religion" required="required">
            </div>
            <div class="form-group">
              <label>Tinggi</label>
              <input type="text" class="form-control" placeholder="height" name="height" required="required">
            </div>
            <div class="form-group">
              <label>Massa Tubuh</label>
              <input type="text" class="form-control" placeholder="weight" name="weight" required="required">
            </div>
            <div class="form-group">
              <label>Kenegaraan</label>
              <input type="text" class="form-control" placeholder="national" name="national" required="required">
            </div>
            <div class="form-group">
              <label>Status</label>
              <input type="text" class="form-control" placeholder="status" name="status" required="required">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control" placeholder="location" name="location" required="required">
            </div>
            <div class="form-group">
              <label>No Telepon</label>
              <input type="text" class="form-control" placeholder="phone" name="phone" required="required">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="email" name="email" required="required">
            </div>
            <div class="form-group">
              <label>Agama</label>
              <input type="text" class="form-control" placeholder="religion" name="religion" required="required">
            </div>
	<tr>
		<td>RIWAYAT SEKOLAH</td>
	</tr>
	<tr>
		<td>SEKOLAH DASAR</td>
	</tr>
			<div class="form-group">
              <label>Nama Sekolah</label>
              <input type="text" class="form-control" placeholder="sdlock" name="sdlock" required="required">
            </div>
            <div class="form-group">
              <label>Tahun masuk - keluar</label>
              <input type="text" class="form-control" placeholder="sdwtu" name="sdwtu" required="required">
            </div>
	<tr>
		<td>SEKOLAH MENENGAH PERTAMA</td>
	</tr>
			<div class="form-group">
              <label>Nama Sekolah</label>
              <input type="text" class="form-control" placeholder="splock" name="splock" required="required">
            </div>
            <div class="form-group">
              <label>Tahun masuk - keluar</label>
              <input type="text" class="form-control" placeholder="spwtu" name="spwtu" required="required">
            </div>
	<tr>
		<td>SEKOLAH MENENGAH ATAS</td>
	</tr>
			<div class="form-group">
              <label>Nama Sekolah</label>
              <input type="text" class="form-control" placeholder="salock" name="salock" required="required">
            </div>
            <div class="form-group">
              <label>Tahun masuk - keluar</label>
              <input type="text" class="form-control" placeholder="sawtu" name="sawtu" required="required">
            </div>
	<tr>
		<td>UNIVERSITY</td>
	</tr>
			<div class="form-group">
              <label>Nama Sekolah</label>
              <input type="text" class="form-control" placeholder="unlock" name="unlock" required="required">
            </div>
            <div class="form-group">
              <label>Tahun masuk - keluar</label>
              <input type="text" class="form-control" placeholder="unwtu" name="unwtu" required="required">
            </div>	<tr>

	<tr>
	<td></td>
		<td>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</tr>
</table>
	</form>
</body>
</html>
