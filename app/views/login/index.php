<div class="login-container">
  <div class="card" id="card-login">
    <div class="card-header">
      <div class="header-title">
        <h2 class="card-title">Login Form</h2>
      </div>
    </div>
    <div class="card-body">
      <form action="<?=URL; ?>/login/proses" method="post">
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
              <input class="form-control" type="password" name="password" id="password" placeholder="Password" required />
            </div>
          </div>
        </div>

        <div class="button-login-place">
          <button type="submit" class="btn btn-primary" id="btn-login" name="login" title="Login">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php if((isset($_SESSION['login']) && $_SESSION['login'] == false)): ?>
<script>alert('Email atau Password salah');</script>
<?php endif ?>
