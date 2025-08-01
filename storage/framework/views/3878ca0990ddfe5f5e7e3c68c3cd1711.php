<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foodie Dashboard</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
  <style>
    body {
        background-color: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .dashboard-container {
        max-width: 700px;
        margin: 50px auto;
        background: white;
        border-radius: 12px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        padding: 40px;
        text-align: center;
    }
    .dashboard-container img {
        width: 120px;
        margin-bottom: 20px;
    }
    h1 {
        color: #ff6b35;
        margin-bottom: 10px;
    }
    p {
        color: #555;
        margin-bottom: 30px;
    }
    .btn {
        background-color: #ff6b35;
        color: white;
        padding: 12px 25px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: bold;
        transition: 0.3s;
    }
    .btn:hover {
        background-color: #e45a2a;
    }
  </style>
</head>
<body>

  <div class="dashboard-container">
    <img src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png" alt="FoodieHub Logo">
    <h1>Welcome, <?php echo e(Auth::user()->name); ?>! 🍕</h1>
    <p>You are successfully logged in to your Foodie account.</p>

    <a href="<?php echo e(url('/logout')); ?>" class="btn">Logout</a>
  </div>

</body>
</html>
<?php /**PATH D:\projek1234\rafli_1234\resources\views/auth/dashboard.blade.php ENDPATH**/ ?>