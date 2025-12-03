<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .dim-img {
      filter: brightness(40%);
      object-fit: cover;
    }
  </style>
</head>
<body>

<div class="card text-white">
  <img src="si.webp" class="card-img dim-img" alt="Background Image">
  <div class="card-img-overlay">

    <div class="container py-5">

      <!-- Heading -->
      <div class="text-center mb-4">
        <h1 class="fw-bold">Welcome to Khulna polytechnic institute</h1>
        <p class="text-light">Enter your details and submit this form to confirm your student ID</p>
        <p class="text-primary fw-semibold">
          Thanks for submitting your form. We are happy to see you joining us to college
        </p>


      </div>

<div class="container mt-5">
  <div class="card shadow p-4">

    <h2 class="text-center mb-4">Student Form</h2>

    <form action="submit.php" method="POST">

      <input type="text" name="name" class="form-control mb-3" placeholder="Enter your name" required>

      <input type="number" name="age" class="form-control mb-3" placeholder="Enter your age">

      <input type="text" name="gender" class="form-control mb-3" placeholder="Enter your gender">

      <input type="email" name="email" class="form-control mb-3" placeholder="Enter your email">

      <input type="text" name="phone" class="form-control mb-3" placeholder="Enter your phone">

      <textarea name="info" class="form-control mb-3" placeholder="Other information"></textarea>

      <button class="btn btn-primary w-100">Submit</button>

    </form>

  </div>
</div>
</div>
</div>
</div>
</body>
</html>
