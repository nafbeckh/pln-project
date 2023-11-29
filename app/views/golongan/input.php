<div class="content">
  <div class="content-header">
    <div class="header-item">
      <h2>Golongan</h2>
    </div>
    <div class="header-item">
      <ul class="breadcrumb">
        <li><a href="<?= URL; ?>/dashboard">Home</a></li>
        <li><a href="<?= URL; ?>/golongan">Golongan</a></li>
        <li>Tambah</li>
      </ul>
    </div>
  </div>

  <div class="content">
    <div class="container">
      <div class="card">
        <div class="card-header">
          <div class="header-title">
            <h4 class="card-title">Form Golongan</h4>
          </div>
        </div>
        <div class="card-body">
          <form action="<?= URL; ?>/golongan/save" method="post">
            <div class="form-row">
              <div class="form-col">
                <div class="form-group">
                  <label for="kode">Kode:</label>
                  <input class="form-control" type="text" name="kode" id="kode" placeholder="Kode Golongan" required />
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="form-col">
                <div class="form-group">
                  <label for="nama">Nama:</label>
                  <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Golongan" required />
                </div>
              </div>
            </div>
            <div class="button-place">
              <button type="reset" class="btn btn-default" title="Reset">Reset</button>
              <button type="submit" class="btn btn-success" name="create" title="Simpan">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
