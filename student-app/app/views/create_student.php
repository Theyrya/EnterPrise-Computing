<link rel="stylesheet" href="style.css">

<div class="container">
<h2>Add Student</h2>

<form method="POST" action="index.php?action=create">
    <input type="text" name="name" placeholder="Student Name" required>
    <input type="text" name="student_id" placeholder="Student ID" required>
    <input type="email" name="email" placeholder="Student Email" required>
    <button type="submit">Add Student</button>
</form>

<a href="index.php?action=dashboard">Back</a>
</div>