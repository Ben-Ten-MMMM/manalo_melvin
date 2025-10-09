<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #E3F2FD 0%, #BBDEFB 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding: 2rem 0;
    }

    .register-card {
      background: #ffffff;
      border-radius: 16px;
      border: 1px solid #d6e9f5;
      box-shadow: 0 16px 36px rgba(21, 101, 192, 0.15);
      padding: 2rem;
      width: 100%;
      max-width: 470px;
    }

    .register-title {
      color: #1565C0;
      font-weight: 800;
      font-size: 2rem;
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .form-group {
      margin-bottom: 1.5rem;
      position: relative;
    }

    .form-control, .form-select {
      border: 2px solid #BBDEFB;
      border-radius: 10px;
      padding: 12px 15px;
      font-size: 1rem;
      background-color: #F5FBFF;
      transition: all 0.25s ease;
    }

    .form-control:focus, .form-select:focus {
      border-color: #1565C0;
      background-color: #ffffff;
      box-shadow: 0 0 0 0.2rem rgba(21, 101, 192, 0.25);
    }

    .btn-register {
      background: linear-gradient(135deg, #1565C0, #0D47A1);
      border: none;
      border-radius: 10px;
      padding: 12px;
      font-size: 1.1rem;
      font-weight: 600;
      color: white;
      width: 100%;
      transition: all 0.25s ease;
      box-shadow: 0 6px 16px rgba(21, 101, 192, 0.35);
    }

    .btn-register:hover {
      background: linear-gradient(135deg, #0D47A1, #08306B);
      transform: translateY(-2px);
      box-shadow: 0 8px 22px rgba(13, 71, 161, 0.45);
    }

    .login-link {
      text-align: center;
      margin-top: 1.5rem;
      color: #6c757d;
    }

    .login-link a {
      color: #1565C0;
      text-decoration: none;
      font-weight: 600;
    }

    .login-link a:hover {
      color: #0D47A1;
      text-decoration: underline;
    }

    .alert {
      border-radius: 10px;
      margin-bottom: 1rem;
      border: 1px solid #d6e9f5;
    }
  </style>
</head>
<body>
  <div class="register-card">
    <h2 class="register-title">Register</h2>

    <?php if (isset($_SESSION['error'])): ?>
      <div class="alert alert-danger" role="alert">
        <?= html_escape($_SESSION['error']); ?>
        <?php unset($_SESSION['error']); ?>
      </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['success'])): ?>
      <div class="alert alert-success" role="alert">
        <?= html_escape($_SESSION['success']); ?>
        <?php unset($_SESSION['success']); ?>
      </div>
    <?php endif; ?>

    <form action="<?= site_url('auth/register'); ?>" method="post">
      <div class="form-group">
        <label class="form-label">Role</label>
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
          <select class="form-select" name="role" required>
            <option value="" selected disabled>Select</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
          </select>
        <?php else: ?>
          <select class="form-select" name="role" required>
            <option value="" selected disabled>Select</option>
            <option value="user">User</option>
          </select>
        <?php endif; ?>
      </div>

      <div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="Username" required>
      </div>

      <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
      </div>

      <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
      </div>

      <div class="form-group">
        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
      </div>

      <button type="submit" class="btn btn-register">Register</button>
    </form>

    <div class="login-link">
      Already have an account? <a href="<?= site_url('auth/login'); ?>">Login</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
