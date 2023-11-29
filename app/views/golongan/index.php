<div class="content">
  <div class="content-header">
    <div class="header-item">
      <h2>Golongan</h2>
    </div>
    <div class="header-item">
      <ul class="breadcrumb">
        <li><a href="<?= URL; ?>/dashboard">Home</a></li>
        <li>Golongan</li>
      </ul>
    </div>
  </div>

  <div class="container">
    <div class="card">
      <div class="card-header">
        <div class="header-title">
          <h4 class="card-title">Data Golongan</h4>
        </div>
      </div>
      <div class="card-body">
        <div class="button-place">
          <a href="<?= URL; ?>/golongan/input" class="btn btn-primary mb-4" title="Tambah">Tambah Golongan</a>
        </div>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col" align="left">Kode</th>
              <th scope="col" align="left">Nama</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
              <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $row['kode']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td align="center">
                  <a href="<?= URL; ?>/golongan/edit/<?php echo $row['id']; ?>" class="btn btn-success btn-href" title="Edit"><i class="fa fa-pencil"></i></a>
                  <a href="<?= URL; ?>/golongan/delete/<?php echo $row['id']; ?>" class="btn btn-danger btn-href" title="Hapus" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
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