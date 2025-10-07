<?php
session_start();
$conn = new mysqli("localhost", "root", "", "your_db_name");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    $stmt = $conn->prepare("SELECT id, password, role FROM users WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $hashed, $role);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if (password_verify($password, $hashed)) {
            // Save session
            $_SESSION["user_id"] = $id;
            $_SESSION["username"] = $username;
            $_SESSION["role"] = $role;

            header("Location: students.php"); // Redirect after login
            exit();
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "User not found.";
    }
    $stmt->close();
}
?>

<h2>Login</h2>
<form method="post">
    <label>Username:</label>
    <input type="text" name="username" required><br><br>
    <label>Password:</label>
    <input type="password" name="password" required><br><br>
    <button type="submit">Login</button>
</form>

<p style="color:red;"><?php echo $error; ?></p>
<a href="register.php">Register</a> | <a href="forgot_password.php">Forgot Password?</a>
