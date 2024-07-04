<div class="container-fluid">
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#tambahDataModal">
            Tambah Data Barang
          </button>
          <!-- Data Tabel -->
          <hr />
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Barang</th>
                      <th>Tipe</th>
                      <th>Kuantitas</th>
                      <th>Harga</th>
                      <th>Tanggal Masuk</th>
                      <th>Tanggal Keluar</th>
                      <th>Entry by</th>
                      <th>Exit by</th>
                      <th>Total harga barang keluar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <!-- <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </tfoot> -->
                  <tbody>
                    <?php 
                    if ($result->num_rows > 0):?>
                    <?php while($row = $result->fetch_assoc()):?>
                      <tr>
                        <td><?php echo $row['nama_barang'];?></td>
                        <td><?php echo $row['tipe'];?></td>
                        <td><?php echo $row['quantity'];?></td>
                        <td><?php echo  $row['harga'];?></td>
                        <td><?php echo $row['tanggal_masuk'];?></td>
                        <td><?php echo $row['tanggal_keluar'];?></td>
                        <td><?php echo $row['entry_by'];?></td>
                        <td><?php echo $row['exit_by'];?></td>
                        <td><?php echo $row['total_cost'];?></td>
                        <td>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateDataModal<?php echo $row['inventory_id']; ?>">Edit</button>
                          <form method="post" style="display:inline">
                            <input type="hidden" name="inventory_id" value="<?php echo $row['inventory_id']; ?>">
                            <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                          </form>
                        </td>
                      </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>