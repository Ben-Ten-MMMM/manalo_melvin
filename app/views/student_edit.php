<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edit User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .page-title {
      color: #0d47a1;
      font-size: 2.4rem;
      font-weight: bold;
      margin: 0;
    }

    .form-container {
      background: #ffffff;
      border-radius: 16px;
      padding: 2rem;
      box-shadow: 0 10px 30px rgba(13, 71, 161, 0.15);
      max-width: 600px;
      margin: 2rem auto;
    }

    .form-label {
      color: #1565c0;
      font-weight: 600;
      margin-bottom: 8px;
    }

    .form-control {
      border: 2px solid #bbdefb;
      border-radius: 10px;
      padding: 12px 15px;
      font-size: 1rem;
      background-color: #f5f9ff;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      border-color: #1565c0;
      background-color: #ffffff;
      box-shadow: 0 0 0 0.2rem rgba(21, 101, 192, 0.25);
    }

    .btn-update {
      background: linear-gradient(135deg, #1976d2, #1565c0);
      color: white;
      border: none;
      border-radius: 10px;
      padding: 12px 30px;
      font-weight: 600;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(21, 101, 192, 0.3);
    }

    .btn-update:hover {
      background: linear-gradient(135deg, #0d47a1, #0b3d91);
      transform: translateY(-2px);
      box-shadow: 0 6px 14px rgba(13, 71, 161, 0.4);
    }

    .btn-cancel {
      background-color: transparent;
      color: #1565c0;
      border: 2px solid #1565c0;
      border-radius: 10px;
      padding: 12px 30px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-cancel:hover {
      background: linear-gradient(135deg, #1976d2, #1565c0);
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 6px 14px rgba(21, 101, 192, 0.3);
    }

    .logout-btn {
      background: linear-gradient(135deg, #e53935, #c62828);
      color: white;
      border-radius: 8px;
      padding: 8px 16px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .logout-btn:hover {
      background: linear-gradient(135deg, #b71c1c, #7f0000);
      transform: translateY(-1px);
      color: white;
    }

    .header-section {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
    }
  </style>
</head>
<body>
  <div class="container py-4">
    <div class="form-container">
      <div class="header-section">
        <h1 class="page-title">Edit User</h1>
        <a href="<?= site_url('auth/logout'); ?>" class="logout-btn">Logout</a>
      </div>

      <form method="post" action="">
        <div class="mb-4">
          <label for="first_name" class="form-label">First Name</label>
          <input type="text" class="form-control" id="first_name" name="first_name" value="<?= html_escape($student['first_name']); ?>" required />
        </div>
        <div class="mb-4">
          <label for="last_name" class="form-label">Last Name</label>
          <input type="text" class="form-control" id="last_name" name="last_name" value="<?= html_escape($student['last_name']); ?>" required />
        </div>
        <div class="mb-4">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="<?= html_escape($student['email']); ?>" required />
        </div>
        <div class="d-flex gap-3">
          <button type="submit" class="btn btn-update">Update User</button>
          <a href="<?= site_url('author'); ?>" class="btn btn-cancel">Cancel</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
