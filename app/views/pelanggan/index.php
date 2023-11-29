<div class="content">
  <div class="content-header">
    <div class="header-item">
      <h2>Pelanggan</h2>
    </div>
    <div class="header-item">
      <ul class="breadcrumb">
        <li><a href="<?= URL; ?>/dashboard">Home</a></li>
        <li>Pelanggan</li>
      </ul>
    </div>
  </div>

  <div class="container">
    <div class="card">
      <div class="card-header">
        <div class="header-title">
          <h4 class="card-title">Data Pelanggan</h4>
        </div>
      </div>
      <div class="card-body">
        <div class="button-place">
          <a href="<?= URL; ?>/pelanggan/input" class="btn btn-primary mb-4" title="Tambah">Tambah Pelanggan</a>
        </div>
        <table class="table table-hover table-responsive">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col" align="left">No. Pelanggan</th>
              <th scope="col" align="left">Golongan</th>
              <th scope="col" align="left">Nama</th>
              <th scope="col" align="left">Alamat</th>
              <th scope="col" align="left">No. KTP</th>
              <th scope="col" align="left">Seri</th>
              <th scope="col" align="left">Meteran</th>
              <th scope="col" align="left">Status</th>
              <th scope="col">Edit</th>
              <th scope="col">Hapus</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
              <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $row['no_pelanggan']; ?></td>
                <td><?= $row['nama_golongan']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['ktp']; ?></td>
                <td><?= $row['seri']; ?></td>
                <td><?= $row['meteran']; ?></td>
                <td><?= $row['status_aktif'] == 'Y' ? 'Aktif' : 'Tidak Aktif'; ?></td>
                <td>
                  <a href="<?= URL; ?>/pelanggan/edit/<?php echo $row['id_pelanggan']; ?>" class="btn btn-success btn-href" title="Edit"><i class="fa fa-pencil"></i></a>
                </td>
                <td>
                  <a href="<?= URL; ?>/pelanggan/delete/<?php echo $row['id_pelanggan']; ?>" class="btn btn-danger btn-href" title="Hapus" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
