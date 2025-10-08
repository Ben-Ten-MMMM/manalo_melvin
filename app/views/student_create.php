<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Create New User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <style>
    body {
  background: linear-gradient(135deg, #0f3d91, #1e90ff);
  font-family: 'Roboto', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  margin: 0;
  padding: 0;
  color: #fff;
}

/* Page Title */
.page-title {
  color: #ffffff;
  font-family: 'Poppins', sans-serif;
  font-size: 2.4rem;
  font-weight: bold;
  margin: 0;
  text-align: center;
  text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.25);
}

/* Form Container */
.form-container {
  background: #ffffff;
  border-radius: 16px;
  padding: 2rem;
  box-shadow: 0 10px 30px rgba(15, 61, 145, 0.2);
  max-width: 600px;
  margin: 2rem auto;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.form-container:hover {
  transform: translateY(-3px);
  box-shadow: 0 15px 35px rgba(15, 61, 145, 0.3);
}

/* Labels */
.form-label {
  color: #0f3d91;
  font-weight: 600;
  margin-bottom: 8px;
}

/* Input Fields */
.form-control {
  border: 2px solid #bcd3ff;
  border-radius: 10px;
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

/* Create Button */
.btn-create {
  background: linear-gradient(135deg, #1e90ff, #0077e6);
  color: white;
  border: none;
  border-radius: 10px;
  padding: 12px 30px;
  font-weight: 600;
  transition: all 0.3s ease;
  box-shadow: 0 4px 12px rgba(30, 144, 255, 0.3);
}
.btn-create:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 14px rgba(30, 144, 255, 0.5);
}

/* Cancel Button */
.btn-cancel {
  background-color: transparent;
  color: #1e90ff;
  border: 2px solid #1e90ff;
  border-radius: 10px;
  padding: 12px 30px;
  font-weight: 600;
  transition: all 0.3s ease;
}
.btn-cancel:hover {
  background-color: #1e90ff;
  color: white;
  transform: translateY(-2px);
  box-shadow: 0 6px 14px rgba(30, 144, 255, 0.3);
}

/* Logout Button */
.logout-btn {
  background-color: #dc3545;
  color: white;
  border-radius: 8px;
  padding: 8px 16px;
  text-decoration: none;
  font-weight: 600;
  transition: all 0.3s ease;
}
.logout-btn:hover {
  background-color: #c82333;
  transform: translateY(-1px);
  box-shadow: 0 4px 12px rgba(199, 28, 28, 0.4);
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
        <h1 class="page-title">Create New User</h1>
        <a href="<?= site_url('auth/logout'); ?>" class="logout-btn">Logout</a>
      </div>

      <form method="post" action="">
        <div class="mb-4">
          <label for="first_name" class="form-label">First Name</label>
          <input type="text" class="form-control" id="first_name" name="first_name" required />
        </div>
        <div class="mb-4">
          <label for="last_name" class="form-label">Last Name</label>
          <input type="text" class="form-control" id="last_name" name="last_name" required />
        </div>
        <div class="mb-4">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required />
        </div>
        <div class="d-flex gap-3">
          <button type="submit" class="btn btn-create">Create User</button>
          <a href="<?= site_url('author'); ?>" class="btn btn-cancel">Cancel</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
