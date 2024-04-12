<?php
require_once 'header.php';
require_once 'sidebar.php';

$nilai1 = ["id" => 1, "NIM" => "01101", "uas" => 84, "uts" => 80, "tugas" => 78, "nialiAkhir" => 80.67];
$nilai2 = ["id" => 2, "NIM" => "01102", "uas" => 50, "uts" => 70, "tugas" => 68, "nilaiAkhir" => 62.67];
$nilai3 = ["id" => 3, "NIM" => "01103", "uas" => 86, "uts" => 60, "tugas" => 70, "nilaiAkhir" => 72.00];
$nilai4 = ["id" => 4, "NIM" => "01104", "uas" => 91, "uts" => 90, "tugas" => 82, "nilaiAkhir" => 87.67];
?>

<style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 0 auto;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        tr th {
            background-color : rgb(114, 199, 223);
        }
        h2 {
            text-align: center;
        }

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
              <h3 class="card-title">Praktikum01</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <h1>Tabel Nilai Mahasiswa</h1>
            <table>
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>UAS</th>
            <th>UTS</th>
            <th>Tugas</th>
            <th>Nilai Akhir</th>
        </tr>
    
        <tr>
        <?php
			foreach($nilai1 as $nilai01) {
				echo "<td>" .$nilai01. "</td>"; 
			}
		?>
        </tr>

        <tr>
        <?php
			foreach($nilai2 as $nilai02) {
				echo "<td>" .$nilai02. "</td>"; 
			}
		?>
        </tr>

        <tr>
        <?php
			foreach($nilai3 as $nilai03) {
				echo "<td>" .$nilai03. "</td>"; 
			}
		?>
        </tr>

        <tr>
        <?php
			foreach($nilai4 as $nilai04) {
				echo "<td>" .$nilai04. "</td>"; 
			}
		?>
        </tr>
       
    </table>
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