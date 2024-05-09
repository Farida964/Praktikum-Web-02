<style>
     table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }
</style>
                    <div class="card">
            
                        <div class="card-body">

                            <table class="table">
                                <thead>
                                <tr>
                                <th>ID</th>
                                        <th>Nama</th>
                                        <th>Gender</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Kategori</th>
                                        <th>Telpon</th>
                                        <th>Alamat</th>
                                        <th>Unit Kerja</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Panggil file
                                    require 'dbkoneksi.php';
                                    // Bikin Query SQL
                                    $query = $dbh->query("SELECT * FROM dokter");
                                    // Tampilkan data looping
                                    foreach ($query as $row) {
                                        echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['nama'] . "</td>";
                                        echo "<td>" . $row['gender'] . "</td>";
                                        echo "<td>" . $row['tmp_lahir'] . "</td>";
                                        echo "<td>" . $row['tgl_lahir'] . "</td>";
                                        echo "<td>" . $row['kategori'] . "</td>";
                                        echo "<td>" . $row['telpon'] . "</td>";
                                        echo "<td>" . $row['alamat'] . "</td>";
                                        echo "<td>" . $row['unit_kerja_id'] . "</td>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-footer-->
                    </div>
                  