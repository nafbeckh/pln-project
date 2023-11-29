<div class="content">
  <div class="content-header">
    <div class="header-item">
      <h2>Pelanggan</h2>
    </div>
    <div class="header-item">
      <ul class="breadcrumb">
        <li><a href="<?= URL; ?>/dashboard">Home</a></li>
        <li><a href="<?= URL; ?>/pelanggan">Pelanggan</a></li>
        <li>Tambah</li>
      </ul>
    </div>
  </div>

  <div class="content">
    <div class="container">
      <div class="card">
        <div class="card-header">
          <div class="header-title">
            <h4 class="card-title">Form Pelanggan</h4>
          </div>
        </div>
        <div class="card-body">
          <form action="<?= URL; ?>/pelanggan/save" method="post">
            <div class="form-row">
              <div class="form-col">
                <div class="form-group">
                  <label for="id_gol">Golongan:</label>
                  <select class="form-control" name="id_gol" id="id_gol" required>
                    <option value="">-- Pilih --</option>
                    <?php foreach ($data['golongan'] as $row ): ?>
                      <option value="<?= $row['id']; ?>"><?= $row['nama']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="form-col">
                <div class="form-group">
                  <label for="no_pelanggan">No. Pelanggan:</label>
                  <input class="form-control" type="text" name="no_pelanggan" id="no_pelanggan" placeholder="No. Pelanggan" required />
                </div>
              </div>

              <div class="form-col">
                <div class="form-group">
                  <label for="nama">Nama:</label>
                  <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama" required />
                </div>
              </div>

              <div class="form-col">
                <div class="form-group">
                  <label for="alamat">Alamat:</label>
                  <textarea class="form-control" type="text" name="alamat" id="alamat" placeholder="Alamat" required></textarea>
                </div>
              </div>

              <div class="form-col">
                <div class="form-group">
                  <label for="ktp">No. KTP:</label>
                  <input class="form-control" type="text" name="ktp" id="ktp" placeholder="No. KTP" required />
                </div>
              </div>

              <div class="form-col">
                <div class="form-group">
                  <label for="seri">No. Seri:</label>
                  <input class="form-control" type="text" name="seri" id="seri" placeholder="No. Seri" required />
                </div>
              </div>

              <div class="form-col">
                <div class="form-group">
                  <label for="meteran">Meteran:</label>
                  <input class="form-control" type="text" name="meteran" id="meteran" placeholder="Meteran" required />
                </div>
              </div>

              <div class="form-col">
                <div class="form-group">
                  <label for="id_user">User:</label>
                  <select class="form-control" name="id_user" id="id_user" required>
                    <option value="">-- Pilih --</option>
                    <?php foreach ($data['user'] as $row ): ?>
                      <option value="<?= $row['id']; ?>"><?= $row['nama']; ?></option>
                    <?php endforeach; ?>
                  </select>
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
