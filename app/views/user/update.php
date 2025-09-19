<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User/Update</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #fff;
    }

    .form-container {
      background: rgba(0, 0, 0, 0.4);
      padding: 40px 35px;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
      width: 380px;
      text-align: center;
      backdrop-filter: blur(10px);
    }

    h1 {
      margin-bottom: 25px;
      font-size: 24px;
      font-weight: bold;
      color: #00f5d4;
      text-shadow: 0 0 10px #00f5d4, 0 0 20px #00f5d4;
    }

    label {
      display: block;
      text-align: left;
      margin-bottom: 6px;
      font-weight: 500;
      color: #a7c5eb;
      font-size: 14px;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 18px;
      border: none;
      border-radius: 8px;
      font-size: 14px;
      outline: none;
      background: rgba(255, 255, 255, 0.1);
      color: #fff;
      transition: 0.3s ease;
    }

    input[type="text"]::placeholder,
    input[type="email"]::placeholder {
      color: #ccc;
    }

    input[type="text"]:focus,
    input[type="email"]:focus {
      border: 1px solid #00f5d4;
      box-shadow: 0 0 6px #00f5d4;
    }

    input[type="submit"] {
      width: 100%;
      padding: 12px;
      background: linear-gradient(135deg, #00f5d4, #00bbf9);
      border: none;
      color: #000;
      font-size: 15px;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s ease;
      box-shadow: 0 0 10px #00f5d4, 0 0 20px #00bbf9;
    }

    input[type="submit"]:hover {
      background: linear-gradient(135deg, #00bbf9, #00f5d4);
      transform: translateY(-2px);
      box-shadow: 0 0 15px #00f5d4, 0 0 25px #00bbf9;
    }

    .back-link {
      display: block;
      margin-top: 15px;
      color: #00f5d4;
      text-decoration: none;
      font-size: 13px;
      transition: 0.3s;
    }

    .back-link:hover {
      text-decoration: underline;
      color: #00bbf9;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1>Update User</h1>
    <form method="post" action="<?= site_url('user/update/'.$user['id']) ?>">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" 
             value="<?= html_escape($user['username']) ?>" required>

      <label for="email">Email</label>
      <input type="email" name="email" id="email" 
             value="<?= html_escape($user['email']) ?>" required>

      <input type="submit" value="Update">
    </form>
    <a href="<?= site_url('user') ?>" class="back-link">← Back to User View</a>
  </div>
</body>
</html>
