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
                                        <th>Tanggal</th>
                                        <th>Berat</th>
                                        <th>Tinggi</th>
                                        <th>Tensi</th>
                                        <th>Keterangan</th>
                                        <th>Pasien_id</th>
                                        <th>Dokter_id</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Panggil file
                                    require 'dbkoneksi.php';
                                    // Bikin Query SQL
                                    $query = $dbh->query("SELECT * FROM periksa");
                                    // Tampilkan data looping
                                    foreach ($query as $row) {
                                        echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['tanggal'] . "</td>";
                                        echo "<td>" . $row['berat'] . "</td>";
                                        echo "<td>" . $row['tinggi'] . "</td>";
                                        echo "<td>" . $row['tensi'] . "</td>";
                                        echo "<td>" . $row['keterangan'] . "</td>";
                                        echo "<td>" . $row['pasien_id'] . "</td>";
                                        echo "<td>" . $row['dokter_id'] . "</td>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-footer-->
                    </div>
                  