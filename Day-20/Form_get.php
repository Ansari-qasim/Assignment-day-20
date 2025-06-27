<?php
$name = $_GET['name'] ?? '';
$email = $_GET['email'] ?? '';
$phone = $_GET['phone'] ?? '';
$submitted = isset($_GET['submit']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>GET Form</title>
</head>
<body>
    <h2>GET Form</h2>
    <form method="get">
        Name: <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"><br><br>
        Email: <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>"><br><br>
        Phone: <input type="text" name="phone" value="<?php echo htmlspecialchars($phone); ?>"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($submitted) {
        if (empty($name) || empty($email) || empty($phone)) {
            echo "<p>All fields are required.</p>";
            if (empty($name)) echo "Name is missing.<br>";
            if (empty($email)) echo "Email is missing.<br>";
            if (empty($phone)) echo "Phone is missing.<br>";
        } else {
            echo "<h3>Submitted Data:</h3>";
            echo "Name: $name<br>";
            echo "Email: $email<br>";
            echo "Phone: $phone<br>";
        }
    }
    ?>
</body>
</html>
