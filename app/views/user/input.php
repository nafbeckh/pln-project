<div class="content">
  <div class="content-header">
    <div class="header-item">
      <h2>User</h2>
    </div>
    <div class="header-item">
      <ul class="breadcrumb">
        <li><a href="<?= URL; ?>/dashboard">Home</a></li>
        <li><a href="<?= URL; ?>/user">User</a></li>
        <li>Tambah</li>
      </ul>
    </div>
  </div>

  <div class="content">
    <div class="container">
      <div class="card">
        <div class="card-header">
          <div class="header-title">
            <h4 class="card-title">Form User</h4>
          </div>
        </div>
        <div class="card-body">
          <form action="<?= URL; ?>/user/save" method="post">
            <div class="form-row">
              <div class="form-col">
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input class="form-control" type="email" name="email" id="email" placeholder="Email" required />
                </div>
              </div>

              <div class="form-col">
                <div class="form-group">
                  <label for="password">Password:</label>
                  <input class="form-control" type="password" name="password" id="password" placeholder="Password" />
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
                  <label for="no_hp">No. HP:</label>
                  <input class="form-control" type="text" name="no_hp" id="no_hp" placeholder="No. HP" required />
                </div>
              </div>

              <div class="form-col">
                <div class="form-group">
                  <label for="kode_pos">Kode Pos:</label>
                  <input class="form-control" type="text" name="kode_pos" id="kode_pos" placeholder="Kode Pos" required />
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