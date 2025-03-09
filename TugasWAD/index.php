<?php include 'config.php'; ?>
<h3><a href="add.php">Add New User</a></h3>

<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Update</th>
    </tr>

    <?php
    $result = mysqli_query($conn, "SELECT * FROM users");
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
        <td><?= $row['name']; ?></td>
        <td><?= $row['mobile']; ?></td>
        <td><?= $row['email']; ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
            <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Hapus data?')">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>
