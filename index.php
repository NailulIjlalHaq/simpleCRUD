<?php include 'header.php';?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Siswa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Selamat Datang</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Jumlah Siswa: </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-info mb-4" data-toggle="modal" data-target="#myModal">
                          Tambah Siswa Baru
                        </button>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Siswa
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas Siswa</th>
                                            <th>Alamat</th>
                                            <th>No Telepon</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $get = mysqli_query($conn, "SELECT * FROM data_siswa");
                                        $i = 1;

                                        while ($p=mysqli_fetch_array($get)) {
                                        $ns = $p['namasiswa'];
                                        $ks = $p['kelassiswa'];
                                        $a = $p['alamat'];
                                        $t = $p['telepon'];
                                        $ids = $p['idsiswa'];
                                        ?>

                                        <tr>
                                        	<td><?= $i++ ?></td>
                                            <td><?= $ns ?></td>
                                            <td><?= $ks ?></td>
                                            <td><?= $a ?></td>
                                            <td><?= $t ?></td>
                                            <td>
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $ids ?>">
                                                    Edit
                                                </button>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $ids ?>">
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>

                                        <!-- The Modal Edit -->
                                          <div class="modal fade" id="edit<?= $ids ?>">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                              
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Ubah <?= $ns ?></h4>
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <form method="post">
                                                
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <input type="text" name="namasiswa" class="form-control mt-2" placeholder="Nama Siswa" value="<?= $ns ?>">
                                                    <input type="text" name="kelassiswa" class="form-control mt-2" placeholder="Kelas Siswa" value="<?= $ks ?>">
                                                    <input type="text" name="alamat" class="form-control mt-2" placeholder="Alamat" value="<?= $a ?>">
                                                    <input type="num" name="telepon" class="form-control mt-2" placeholder="No Telepon" value="<?= $t ?>">
                                                    <input type="hidden" name="idsiswa" value="<?= $ids ?>">
                                                </div>
                                                
                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                  <button type="submit" class="btn btn-success" name="editsiswa">Submit</button>
                                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>

                                                </form>

                                              </div>
                                            </div>
                                          </div>

                                          <!-- The Modal Delete -->
                                          <div class="modal fade" id="delete<?= $ids ?>">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                              
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Hapus <?= $ns ?></h4>
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <form method="post">
                                                
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    Apakah Anda Yakin Ingin Menghapus Siswa Ini?
                                                    <input type="hidden" name="idsiswa" value="<?= $ids ?>">
                                                </div>
                                                
                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                  <button type="submit" class="btn btn-success" name="hapussiswa">Submit</button>
                                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>

                                                </form>

                                              </div>
                                            </div>
                                          </div>

                                         <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include 'footer.php';?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>

<!-- ___________________________________________________________________________________________________________________________________________________________________________________ -->

    <!-- MODAL TAMBAH PESANAN BARU -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tambah Siswa Baru</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <form method="post">

      <!-- Modal body -->
        <div class="modal-body">
            <input type="text" name="namasiswa" class="form-control mt-2" placeholder="Nama Siswa" required>
            <input type="text" name="kelassiswa" class="form-control mt-2" placeholder="Kelas Siswa" required>
            <input type="text" name="alamat" class="form-control mt-2" placeholder="Alamat" required>
            <input type="num" name="telepon" class="form-control mt-2" placeholder="No Telepon" required>
        </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="tambahsiswa">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

      </form>

    </div>
  </div>
</div>

<!-- ___________________________________________________________________________________________________________________________________________________________________________________ -->

</html>
