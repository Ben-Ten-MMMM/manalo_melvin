<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #E8F5E9 0%, #D7EFD7 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Roboto', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 2rem 0;
        }

        .register-card {
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid #d6e9d6;
            box-shadow: 0 16px 36px rgba(45, 90, 45, 0.15);
            padding: 2.5rem;
            width: 100%;
            max-width: 470px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .register-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(45, 90, 45, 0.25);
        }

        .register-title {
            color: #245224;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 2rem;
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-control, .form-select {
            border: 2px solid #E1F0E1;
            border-radius: 12px;
            padding: 12px 15px;
            font-size: 1rem;
            background-color: #F7FBF7;
            transition: all 0.25s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: #2E7D32;
            box-shadow: 0 0 0 0.2rem rgba(46, 125, 50, 0.25);
            background-color: #ffffff;
        }

        .btn-register {
            background: linear-gradient(135deg, #4F46E5, #9333EA);
            border: none;
            border-radius: 12px;
            padding: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            color: #fff;
            width: 100%;
            transition: all 0.3s ease;
            box-shadow: 0 6px 16px rgba(79, 70, 229, 0.35);
        }

        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 22px rgba(79, 70, 229, 0.45);
            color: #ffffff;
        }

        .login-link {
            text-align: center;
            margin-top: 1.5rem;
            color: #6c757d;
        }

        .login-link a {
            color: #2E7D32;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .login-link a:hover {
            color: #145214;
            text-decoration: underline;
        }

        .alert {
            border-radius: 12px;
            margin-bottom: 1rem;
            border: 1px solid #d6e9d6;
        }
    </style>
</head>
<body>
    <div class="register-card">
        <h2 class="register-title">Register</h2>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger"><?= html_escape($_SESSION['error']); unset($_SESSION['error']); ?></div>
        <?php endif; ?>

        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success"><?= html_escape($_SESSION['success']); unset($_SESSION['success']); ?></div>
        <?php endif; ?>

        <form action="<?= site_url('auth/register'); ?>" method="post">
            <div class="form-group">
                <label class="form-label">Role</label>
                <select class="form-select" name="role" required>
                    <option value="" selected disabled>Select role</option>
                    <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    <?php else: ?>
                        <option value="user">User</option>
                    <?php endif; ?>
                </select>
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
