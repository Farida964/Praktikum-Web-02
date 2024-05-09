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
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Kelurahan ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Panggil file
                                    require 'dbkoneksi.php';
                                    // Bikin Query SQL
                                    $query = $dbh->query("SELECT * FROM pasien");
                                    // Tampilkan data looping
                                    foreach ($query as $row) {
                                        echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['kode'] . "</td>";
                                        echo "<td>" . $row['nama'] . "</td>";
                                        echo "<td>" . $row['tmp_lahir'] . "</td>";
                                        echo "<td>" . $row['tgl_lahir'] . "</td>";
                                        echo "<td>" . $row['gender'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['alamat'] . "</td>";
                                        echo "<td>" . $row['kelurahan_id'] . "</td>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-footer-->
                    </div>
                  