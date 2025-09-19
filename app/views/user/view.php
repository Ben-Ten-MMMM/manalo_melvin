<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User View</title>
  <style>
   body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      margin: 0;
      padding: 20px;
      color: #fff;
    }

    h1 {
      text-align: center;
      margin-bottom: 25px;
      font-size: 28px;
      font-weight: 600;
      color: #00e6e6;
      text-shadow: 0 0 8px rgba(0,255,255,0.8);
    }

    a.create-btn {
      display: inline-block;
      margin-bottom: 20px;
      padding: 12px 18px;
      background: linear-gradient(135deg, #00e6e6, #00b3b3);
      color: #fff;
      text-decoration: none;
      border-radius: 10px;
      font-weight: bold;
      font-size: 15px;
      transition: all 0.3s ease;
      box-shadow: 0 0 12px rgba(0,255,255,0.5);
    }

    a.create-btn:hover {
      box-shadow: 0 0 20px #00ffff, 0 0 35px #00e6e6;
      transform: scale(1.05);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 0 20px rgba(0, 255, 255, 0.15);
    }

    th, td {
      padding: 14px 16px;
      text-align: center;
      font-size: 15px;
      color: #e0f7ff;
    }

    th {
      background: rgba(0, 230, 230, 0.2);
      color: #00ffff;
      text-transform: uppercase;
      font-weight: 600;
      letter-spacing: 1px;
      text-shadow: 0 0 6px rgba(0,255,255,0.7);
    }

    tr:nth-child(even) {
      background: rgba(255, 255, 255, 0.05);
    }

    tr:hover {
      background: rgba(0, 255, 255, 0.08);
      transition: 0.3s ease;
    }

    td a {
      text-decoration: none;
      margin: 0 6px;
      padding: 8px 12px;
      border-radius: 6px;
      font-size: 14px;
      transition: 0.3s;
      font-weight: bold;
    }

    td a:first-child {
      background: #2196F3;
      color: white;
      box-shadow: 0 0 10px rgba(33,150,243,0.5);
    }

    td a:first-child:hover {
      background: #0b7dda;
      box-shadow: 0 0 20px rgba(33,150,243,0.9);
    }

    td a:last-child {
      background: #f44336;
      color: white;
      box-shadow: 0 0 10px rgba(244,67,54,0.5);
    }

    td a:last-child:hover {
      background: #d32f2f;
      box-shadow: 0 0 20px rgba(244,67,54,0.9);
    }
  </style>
</head>
<body>
  <h1> Welcome to PCreate View</h1>

  <div style="width: 85%; margin: 0 auto 25px auto; text-align: right;">
    <a href="<?= site_url('user/create'); ?>" class="create-btn">Create New</a>
  </div>

  <table>
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Email</th>
      <th>Action</th>
    </tr>

    <?php foreach ($users as $user): ?>
      <tr>
        <td><?= $user['id']; ?></td>
        <td><?= $user['username']; ?></td>
        <td><?= $user['email']; ?></td>
        <td>
          <a href="<?= site_url('user/update/'.$user['id']); ?>" class="action-btn edit-btn">Edit</a>
          <a href="<?= site_url('user/delete/'.$user['id']); ?>" class="action-btn delete-btn"
             onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>
