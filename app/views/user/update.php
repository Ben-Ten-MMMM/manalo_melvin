<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User/Update</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #74ebd5, #ACB6E5);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      max-width: 400px;
      width: 100%;
      background: #fff;
      padding: 40px 35px;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    h1 {
      text-align: center;
      margin-bottom: 25px;
      font-size: 24px;
      font-weight: 600;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 500;
      color: #444;
      font-size: 14px;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 18px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 14px;
      outline: none;
      transition: 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="email"]:focus {
      border-color: #0984e3;
      box-shadow: 0 0 6px rgba(9, 132, 227, 0.4);
    }

    input[type="submit"] {
      width: 100%;
      padding: 12px;
      background: linear-gradient(135deg, #0984e3, #74b9ff);
      border: none;
      color: #fff;
      font-size: 15px;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    input[type="submit"]:hover {
      background: linear-gradient(135deg, #74b9ff, #0984e3);
      transform: translateY(-2px);
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1>Update User</h1>
    <form method="post" action="<?= site_url('user/update/'.$user['id']) ?>">
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" 
             value="<?= html_escape($user['username']) ?>" required>

      <label for="email">Email:</label>
      <input type="email" name="email" id="email" 
             value="<?= html_escape($user['email']) ?>" required>

      <input type="submit" value="Update">
    </form>
  </div>
</body>
</html>
