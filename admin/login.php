<?php
include('../database/dbConnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      min-height: 100vh;
      background: #009579;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .login-box {
      background: #fff;
      max-width: 430px;
      width: 100%;
      border-radius: 10px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      padding: 2rem;
    }

    .login-box header {
      font-size: 2rem;
      font-weight: 600;
      color: #009579;
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .login-box input {
      width: 100%;
      height: 50px;
      padding: 0 15px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
      outline: none;
      transition: border-color 0.3s;
    }

    .login-box input:focus {
      border-color: #38b549;
    }

    .login-box a {
      display: inline-block;
      margin-bottom: 15px;
      font-size: 15px;
      color: #009579;
      text-decoration: none;
    }

    .login-box a:hover {
      text-decoration: underline;
    }

    .login-box input.button {
      background: #009579;
      color: white;
      border: none;
      font-size: 17px;
      font-weight: 500;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .login-box input.button:hover {
      background: #009579;
    }

    .msg-box {
      text-align: center;
      background: #fdecea;
      color: #d32f2f;
      padding: 10px;
      border-left: 5px solid #d32f2f;
      margin-bottom: 15px;
      display: none;
      border-radius: 5px;
    }
    .credentials {
            background: #f1f1f1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
  </style>
</head>
<body>

  <div class="login-box">
    <header>Admin Login</header>

    <div class="credentials">
        <p>username: 01944667441</p>
        <p>password: 87654321</p>
    </div><br>

    <h3 class="msg-box" id="msgBox">Wrong credentials</h3>

    <form method="post" action="">
        <input type="text" name="phone" placeholder="Enter your phone" required>
        
        <input type="password" name="password" id="passwordField" placeholder="Enter your password" required>

        <label style="
        display: flex;
        align-items: center;
        font-size: 12px;
        color: #555;
        margin-bottom: 15px;
        user-select: none;
        gap: 6px;
        ">
            <input type="checkbox" id="togglePassword" style="width: 14px; height: 14px; cursor: pointer;">
        Show Password
        </label>


        <input type="submit" class="button" value="Login">
    </form>

  </div>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admins WHERE phone = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $phone, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $_SESSION['admin'] = $phone;
        echo '<meta http-equiv="refresh" content="0;url=index.php">';
        exit();
    } else {
        echo "<script>
          const msgBox = document.getElementById('msgBox');
          msgBox.style.display = 'block';
          setTimeout(() => {
            msgBox.style.display = 'none';
          }, 3000);
        </script>";
    }
}
?>

<script>
  const togglePassword = document.getElementById('togglePassword');
  const passwordField = document.getElementById('passwordField');

  togglePassword.addEventListener('change', function () {
    passwordField.type = this.checked ? 'text' : 'password';
  });
</script>

</body>
</html>
