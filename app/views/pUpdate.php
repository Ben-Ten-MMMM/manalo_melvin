<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PUpdate</title>
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

    .container {
      max-width: 450px;
      width: 100%;
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(15px);
      padding: 35px 45px;
      border-radius: 16px;
      box-shadow: 0 0 25px rgba(0, 255, 255, 0.2);
      transition: 0.3s ease;
    }

    .container:hover {
      box-shadow: 0 0 35px rgba(0, 255, 255, 0.5);
    }

    h1 {
      text-align: center;
      margin-bottom: 25px;
      font-size: 26px;
      font-weight: 600;
      color: #00e6e6;
      text-shadow: 0 0 8px rgba(0,255,255,0.7);
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 500;
      color: #cce7ff;
    }

    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 18px;
      border: none;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.1);
      color: #fff;
      font-size: 15px;
      outline: none;
      transition: all 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="number"]:focus {
      background: rgba(255, 255, 255, 0.15);
      box-shadow: 0 0 10px #00e6e6, 0 0 20px #00e6e6;
    }

    input[type="submit"] {
      width: 100%;
      padding: 14px;
      background: linear-gradient(135deg, #00e6e6, #00b3b3);
      border: none;
      color: #fff;
      font-size: 16px;
      font-weight: bold;
      border-radius: 10px;
      cursor: pointer;
      transition: 0.3s ease;
      box-shadow: 0 0 10px rgba(0,255,255,0.4);
    }

    input[type="submit"]:hover {
      box-shadow: 0 0 20px #00ffff, 0 0 40px #00e6e6;
      transform: scale(1.03);
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>✏ Update Profile</h1>
    <form action="" method="post">
      <label for="user_name">User Name:</label>
      <input type="text" id="user_name" name="user_name" value="<?=($data['user_name']); ?>" required>

      <label for="age">Age:</label>
      <input type="number" id="age" name="age" value="<?=($data['age']); ?>" required>

      <label for="address">Address:</label>
      <input type="text" id="address" name="address" value="<?=($data['address']); ?>" required>

      <input type="submit" value="Update Profile">
    </form>
  </div>
</body>
</html>
