<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name'] ?? "");
    $age = htmlspecialchars($_POST['age'] ?? "");
    $gender = htmlspecialchars($_POST['gender'] ?? "");
    $email = htmlspecialchars($_POST['email'] ?? "");
    $phone = htmlspecialchars($_POST['phone'] ?? "");
    $info = htmlspecialchars($_POST['info'] ?? "");

} else {
    die("Form not submitted!");
}
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
