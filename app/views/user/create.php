<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User/Create</title>
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
      background: #fff;
      padding: 40px 35px;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
      width: 350px;
      text-align: center;
    }

    h1 {
      margin-bottom: 25px;
      font-size: 22px;
      font-weight: 600;
      color: #333;
    }

    label {
      display: block;
      text-align: left;
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
      border-color: #74b9ff;
      box-shadow: 0 0 6px rgba(116, 185, 255, 0.5);
    }

    input[type="submit"] {
      width: 100%;
      padding: 12px;
      background: linear-gradient(135deg, #74b9ff, #0984e3);
      border: none;
      color: #fff;
      font-size: 15px;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    input[type="submit"]:hover {
      background: linear-gradient(135deg, #0984e3, #74b9ff);
      transform: translateY(-2px);
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
    }

    .back-link {
      display: block;
      margin-top: 15px;
      color: #0984e3;
      text-decoration: none;
      font-size: 13px;
      transition: 0.3s;
    }

    .back-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1>Create User</h1>
    <form method="post" action="">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" placeholder="Enter username" required>

      <label for="email">Email</label>
      <input type="email" name="email" id="email" placeholder="Enter email" required>

      <input type="submit" value="Create New User">
    </form>
  </div>
</body>
</html>
