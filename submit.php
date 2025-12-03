<?php
$servername = "your_host";
$username = "your_user";
$password = "your_pass";
$dbname = "your_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

$data = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($data);

$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
  <title>Form Submitted</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <div class="card shadow p-4">

    <h1 class="text-center text-success mb-4">Form Submitted Successfully!</h1>

    <p ><strong>Name:</strong> <?= $name ?></p>
    <p><strong>Age:</strong> <?= $age ?></p>
    <p><strong>Gender:</strong> <?= $gender ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Phone:</strong> <?= $phone ?></p>
    <p><strong>Other Info:</strong> <?= $info ?></p>

    <div class="text-center mt-4">
      <a href="index.php" class="btn btn-primary">Back to Form</a>
    </div>

  </div>
</div>

</body>
</html>

