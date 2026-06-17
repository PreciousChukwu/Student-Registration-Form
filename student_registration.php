<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);
    $matric = trim($_POST['matric']);
    $dept = trim($_POST['department']);
    $email = trim($_POST['email']);

    if (empty($name) || empty($matric)) {
        echo "<p style='color:red;'>Error: Name and Matric Number are required!</p>";
    } else {
        echo "<div style='border:1px solid #000; padding:10px; width:300px;'>";
        echo "<h3>Registration Successful</h3>";
        echo "<p><strong>Full Name:</strong> $name</p>";
        echo "<p><strong>Matric No:</strong> $matric</p>";
        echo "<p><strong>Department:</strong> $dept</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "</div>";
    }
}
?>
<h1> Student Registration </h1>
<form method="POST">
    Full Name: <input type="text" name="name"><br><br>
    Matric No: <input type="text" name="matric"><br><br>
    Department:
    <select name="department">
        <option value="">--Select Department--</option>
        <option>Computer Science</option>
        <option>Business Admin</option>
        <option>Theology</option>
        <option>Nursing</option>
    </select><br><br>
    Email: <input type="text" name="email"><br><br>

    <input type="submit" value="Register">
</form>