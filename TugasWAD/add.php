<?php include 'config.php'; ?>

<h2>Tambah User Baru</h2>
<form method="POST">
    Name: <input type="text" name="name"><br>
    Mobile: <input type="text" name="mobile"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" name="submit" value="Save">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    mysqli_query($conn, "INSERT INTO users (name, mobile, email) VALUES ('$name', '$mobile', '$email')");
    header("Location: index.php");
}
?>
