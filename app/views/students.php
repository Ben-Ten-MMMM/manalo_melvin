<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Welcome to Profile View</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<style>
  body {
  background: linear-gradient(135deg, #0f3d91, #1e90ff);
  background-attachment: fixed;
  font-family: 'Roboto', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: #fff;
  margin: 0;
  padding: 0;
}

/* Page Title */
.page-title {
  color: #ffffff;
  font-family: 'Poppins', sans-serif;
  font-size: 2.5rem;
  font-weight: bold;
  text-align: center;
  margin-bottom: 2rem;
  text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.3);
}

/* Buttons (shared) */
.create-btn, .search-btn, .edit-btn, .logout-btn {
  font-family: 'Poppins', sans-serif;
  font-weight: 600;
  transition: 0.3s ease;
  border: none;
  border-radius: 8px;
  padding: 10px 18px;
  cursor: pointer;
}

/* Create Button */
.create-btn {
  background-color: #1e90ff;
  color: white;
}
.create-btn:hover {
  background-color: #0077e6;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
}

/* Search Button */
.search-btn {
  background-color: #0f62fe;
  color: white;
}
.search-btn:hover {
  background-color: #0841b8;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
}

/* Edit Button */
.edit-btn {
  background-color: #1e90ff;
  color: white;
  border-radius: 20px;
  padding: 6px 16px;
}
.edit-btn:hover {
  background-color: #0077e6;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
}

/* Delete Button */
.delete-btn {
  background-color: #dc3545;
  color: white;
  border-radius: 20px;
  padding: 6px 16px;
}
.delete-btn:hover {
  background-color: #c82333;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
}

/* Logout Button */
.logout-btn {
  background-color: #dc3545;
  color: white;
  border-radius: 8px;
  padding: 8px 16px;
  text-decoration: none;
}
.logout-btn:hover {
  background-color: #c82333;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
}

/* Search Container */
.search-container {
  background: white;
  color: #333;
  border-radius: 12px;
  padding: 15px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
  margin-bottom: 20px;
}

/* Table Styles */
.profile-table {
  overflow: hidden;
  border-radius: 16px;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
  margin-top: 20px;
  background: white;
  color: #333;
}

.table-header {
  background-color: #0f3d91;
  color: white;
  text-transform: uppercase;
  font-weight: bold;
}
.table-header th {
  padding: 14px;
  border: none;
}

.table-body tr:nth-child(odd) {
  background-color: #f0f8ff;
}
.table-body tr:nth-child(even) {
  background-color: #ffffff;
}
.table-body tr:hover {
  background-color: #d0e7ff !important;
  cursor: pointer;
  transition: background-color 0.2s ease;
}

.table-body td {
  padding: 14px;
  border: none;
  color: #333;
}


</style>
</head>
<body>
<div class="container py-4">
  <h1 class="page-title">Welcome to Profile View</h1>

  <div class="search-container">
    <div class="row align-items-center">
      <div class="col-md-8">
        <form action="<?= site_url('author'); ?>" method="get" class="d-flex">
          <?php $q = isset($_GET['q']) ? $_GET['q'] : ''; ?>
          <input class="form-control me-2" name="q" type="text" placeholder="Search..." value="<?= html_escape($q); ?>" style="border-radius: 8px;">
          <button type="submit" class="btn search-btn">Search</button>
        </form>
      </div>
      <div class="col-md-2 text-center">
        <?php if (isset($_SESSION['role']) && in_array($_SESSION['role'], ['user', 'admin'])): ?>
          <a href="<?= site_url('student/create'); ?>" class="btn create-btn">&#43; Create New User</a>
        <?php endif; ?>
      </div>
      <div class="col-md-2 text-end">
        <a href="<?= site_url('auth/logout'); ?>" class="logout-btn">Logout</a>
      </div>
    </div>
  </div>

  <div class="profile-table">
    <table class="table mb-0">
      <thead class="table-header">
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="table-body">
        <?php foreach (html_escape($all) as $index => $author): ?>
          <tr>
            <td><?= $index + 1; ?></td>
            <td><?= $author['first_name'] . ' ' . $author['last_name']; ?></td>
            <td><?= $author['email']; ?></td>
            <td>
              <?php if ($_SESSION['role'] === 'admin'): ?>
                <a href="<?= site_url('student/edit/'.$author['id']); ?>" class="btn edit-btn">Edit</a>
                <a href="<?= site_url('student/delete/'.$author['id']); ?>" class="btn delete-btn" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
              <?php else: ?>
                <span class="text-muted">No actions</span>
              <?php endif; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <div class="text-center mt-3">
    <?= $page; ?>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
