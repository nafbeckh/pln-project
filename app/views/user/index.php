<div class="content">
  <div class="content-header">
    <div class="header-item">
      <h2>User</h2>
    </div>
    <div class="header-item">
      <ul class="breadcrumb">
        <li><a href="<?= URL; ?>/dashboard">Home</a></li>
        <li>User</li>
      </ul>
    </div>
  </div>

  <div class="container">
    <div class="card">
      <div class="card-header">
        <div class="header-title">
          <h4 class="card-title">Data User</h4>
        </div>
      </div>
      <div class="card-body">
        <div class="button-place">
          <a href="<?= URL; ?>/user/input" class="btn btn-primary mb-4" title="Tambah">Tambah User</a>
        </div>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col" align="left">Email</th>
              <th scope="col" align="left">Nama</th>
              <th scope="col" align="left">Alamat</th>
              <th scope="col" align="left">No. Hp</th>
              <th scope="col" align="left">Kode Pos</th>
              <th scope="col" align="left">Status</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
              <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $row['email']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['no_hp']; ?></td>
                <td><?= $row['kode_pos']; ?></td>
                <td><?= $row['status_aktif'] == 'Y' ? 'Aktif' : 'Tidak Aktif'; ?></td>
                <td align="center">
                  <a href="<?= URL; ?>/user/edit/<?php echo $row['id']; ?>" class="btn btn-success btn-href" title="Edit"><i class="fa fa-pencil"></i></a>
                  <a href="<?= URL; ?>/user/delete/<?php echo $row['id']; ?>" class="btn btn-danger btn-href" title="Hapus" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<form method="post" id="formDelete" hidden>
  <input type="text" name="id" id="id">
</form>