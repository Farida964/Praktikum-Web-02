<?php
require_once 'header.php';
require_once 'sidebar.php';

if (isset($_POST['submit'])) {
  $nim = $_POST ['nim'];
  $nama = $_POST ['nama'];
  $jk = $_POST ['jenisKelamin'];
  $prodi = $_POST ['prodi'];
  $skill = $_POST ['keahlian'];
  $domisili = $_POST ['domisili'];
  $email = $_POST ['email'];

}



// $submit = $_POST['submit'];
// if(!empty($submit)) {
  
// }


?>

<style>
     
    </style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tugas Praktikum</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Praktikum03</h3>
              <br>
<form action="praktikum03.php" method="POST">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="nim" name="nim" placeholder="NIM" type="text" class="form-control" required="required"> 
        <div class="input-group-append">
          <div class="input-group-text">
            <i class="fa fa-adn"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="nama" name="nama" placeholder="Nama" type="text" required="required" class="form-control"> 
        <div class="input-group-append">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenisKelamin" id="jenisKelamin_0" type="radio" class="custom-control-input" value="Perempuan" required="required"> 
        <label for="jenisKelamin_0" class="custom-control-label">Perempuan</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenisKelamin" id="jenisKelamin_1" type="radio" class="custom-control-input" value="Laki-Laki" required="required"> 
        <label for="jenisKelamin_1" class="custom-control-label">Laki-Laki</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="prodi" name="prodi" class="custom-select" required="required">
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Bisnis Digital">Bisnis Digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Keahlian</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="keahlian" id="keahlian_0" type="checkbox" class="custom-control-input" value="HTML"> 
        <label for="keahlian_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="keahlian" id="keahlian_1" type="checkbox" class="custom-control-input" value="CSS"> 
        <label for="keahlian_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="keahlian" id="keahlian_2" type="checkbox" class="custom-control-input" value="Javascript"> 
        <label for="keahlian_2" class="custom-control-label">Jvascript</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="keahlian" id="keahlian_3" type="checkbox" class="custom-control-input" value="Python"> 
        <label for="keahlian_3" class="custom-control-label">Python</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="keahlian" id="keahlian_4" type="checkbox" class="custom-control-input" value="RWD Bootsrap"> 
        <label for="keahlian_4" class="custom-control-label">RWD Bootsrap</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="keahlian" id="keahlian_5" type="checkbox"class="custom-control-input" value="Lainnya"> 
        <label for="keahlian_5" class="custom-control-label">Lainnya</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="domisili" class="col-4 col-form-label">Domisili</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="domisili" name="domisili" placeholder="Domisili" type="text" class="form-control" required="required"> 
        <div class="input-group-append">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="email" name="email" placeholder="Email" type="text" class="form-control" required="required"> 
        <div class="input-group-append">
          <div class="input-group-text">
            <i class="fa fa-envelope"></i>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<hr>
<?php
 if (isset ($_POST["nama"])) {
echo "<p>NIM : " . $_POST["nim"] . "</p>";
echo "<p>Nama : " . $_POST["nama"] . "</p>";
echo "<p>Jenis Kelamin : " . $_POST["jenisKelamin"] . "</p>";
echo "<p>Program Studi : " . $_POST["prodi"] . "</p>";
echo "<p>Keahlian : " . $_POST["keahlian"] . "</p>";
echo "<p>Domisili : " . $_POST["domisili"] . "</p>";
}
?>

         
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Footer
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>