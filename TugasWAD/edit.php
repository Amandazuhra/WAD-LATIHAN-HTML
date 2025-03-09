<?php
include 'config.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id=$id"));
?>

<h2>Edit User</h2>
<form method="POST">
    Name: <input type="text" name="name" value="<?= $data['name']; ?>"><br>
    Mobile: <input type="text" name="mobile" value="<?= $data['mobile']; ?>"><br>
    Email: <input type="text" name="email" value="<?= $data['email']; ?>"><br>
    <input type="submit" name="update" value="Update">
</form>

<?php
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    mysqli_query($conn, "UPDATE users SET name='$name', mobile='$mobile', email='$email' WHERE id=$id");
    header("Location: index.php");
}
?>
