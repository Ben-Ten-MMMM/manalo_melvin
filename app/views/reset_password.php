<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
  background: linear-gradient(135deg, #0f3d91, #1e90ff);
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: 'Roboto', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  margin: 0;
  padding: 0;
  color: #fff;
}

/* Card Box */
.card-box {
  background: #ffffff;
  border-radius: 20px;
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
  padding: 2.5rem;
  width: 100%;
  max-width: 420px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.card-box:hover {
  transform: translateY(-3px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

/* Title */
.title {
  color: #0f3d91;
  font-family: 'Poppins', sans-serif;
  font-weight: 700;
  text-align: center;
  margin-bottom: 2rem;
  font-size: 2rem;
}

/* Form Controls */
.form-control {
  border: 2px solid #bcd3ff;
  border-radius: 12px;
  padding: 12px 15px;
  font-size: 1rem;
  background-color: #f1f6ff;
  color: #333;
  transition: all 0.3s ease;
}
.form-control:focus {
  border-color: #1e90ff;
  background-color: #ffffff;
  box-shadow: 0 0 0 0.2rem rgba(30, 144, 255, 0.25);
  outline: none;
}

/* Submit Button */
.btn-submit {
  background: linear-gradient(135deg, #1e90ff, #0077e6);
  border: none;
  border-radius: 12px;
  padding: 12px;
  width: 100%;
  color: #fff;
  font-weight: 600;
  font-size: 1rem;
  transition: all 0.3s ease;
  box-shadow: 0 4px 12px rgba(30, 144, 255, 0.3);
}
.btn-submit:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 14px rgba(30, 144, 255, 0.5);
}

/* Back Link */
.back-link {
  text-align: center;
  margin-top: 1.5rem;
}
.back-link a {
  color: #1e90ff;
  text-decoration: none;
  font-weight: 600;
  transition: color 0.3s ease;
}
.back-link a:hover {
  color: #0f3d91;
}


        .alert {
            border-radius: 12px;
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
            <div class="mb-4">
                <label class="form-label">New password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter new password" required>
            </div>
            <div class="mb-4">
                <label class="form-label">Confirm password</label>
                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm new password" required>
            </div>
            <button type="submit" class="btn btn-submit">Reset Password</button>
        </form>

        <div class="back-link">
            <a href="<?= site_url('auth/login'); ?>">Back to login</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
