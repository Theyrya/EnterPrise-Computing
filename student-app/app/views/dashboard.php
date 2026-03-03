<style>
body {
    background-color: #FFA500; /* Bright orange */
}
</style>
<link rel="stylesheet" href="style.css">

<div class="table-container">
<h2>Student Dashboard</h2>

<div class="top-links">
    <a href="index.php?action=create">➕ Add Student</a>
    <a href="index.php?action=logout">Logout</a>
</div>

<table>
<tr>
    <th>Name</th>
    <th>Student ID</th>
    <th>Email</th>
    <th>Action</th>
</tr>

<?php foreach ($students as $student): ?>
<tr>
    <td><?= $student['student_name'] ?></td>
    <td><?= $student['student_id'] ?></td>
    <td><?= $student['email'] ?></td>
    <td>
        <a class="delete-btn" href="index.php?action=delete&id=<?= $student['id'] ?>">Delete</a>
    </td>
</tr>
<?php endforeach; ?>

</table>
</div>