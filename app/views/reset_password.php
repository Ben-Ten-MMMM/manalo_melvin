<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #E3F2FD 0%, #BBDEFB 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding: 2rem;
    }

    .card-box {
      background: white;
      border-radius: 16px;
      box-shadow: 0 15px 35px rgba(0,0,0,0.1);
      padding: 2rem;
      width: 100%;
      max-width: 420px;
    }

    .title {
      color: #1565C0;
      font-weight: 700;
      text-align: center;
      margin-bottom: 1.5rem;
      font-size: 1.8rem;
    }

    .form-label {
      color: #1565C0;
      font-weight: 600;
    }

    .form-control {
      border: 2px solid #BBDEFB;
      border-radius: 10px;
      padding: 12px;
      background-color: #F5FBFF;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      border-color: #1565C0;
      background-color: #fff;
      box-shadow: 0 0 0 0.2rem rgba(21, 101, 192, 0.25);
    }

    .btn-submit {
      background: linear-gradient(135deg, #1565C0, #0D47A1);
      border: none;
      border-radius: 10px;
      padding: 12px;
      width: 100%;
      color: #fff;
      font-weight: 600;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(21, 101, 192, 0.3);
    }

    .btn-submit:hover {
      background: linear-gradient(135deg, #0D47A1, #08306B);
      transform: translateY(-2px);
      box-shadow: 0 6px 14px rgba(13, 71, 161, 0.4);
    }

    .back-link {
      text-align: center;
      margin-top: 1rem;
    }

    .back-link a {
      color: #1565C0;
      text-decoration: none;
      font-weight: 600;
    }

    .back-link a:hover {
      text-decoration: underline;
    }

    .alert {
      border-radius: 10px;
    }
  </style>
</head>
<body>
  <div class="card-box">
    <h2 class="title">Reset Password</h2>

    <?php if (isset($_SESSION['error'])): ?>
      <div class="alert alert-danger" role="alert">
        <?= html_escape($_SESSION['error']); ?>
        <?php unset($_SESSION['error']); ?>
      </div>
    <?php endif; ?>

    <form action="<?= site_url('auth/reset-password/' . html_escape($token)); ?>" method="post">
      <div class="mb-3">
        <label class="form-label">New Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter new password" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Confirm Password</label>
        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm new password" required>
      </div>
      <button type="submit" class="btn btn-submit">Reset Password</button>
    </form>

    <div class="back-link">
      <a href="<?= site_url('auth/login'); ?>">Back to Login</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
