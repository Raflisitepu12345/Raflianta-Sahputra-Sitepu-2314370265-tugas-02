<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logged Out</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
  <style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: #f8f9fa;
        font-family: Arial, sans-serif;
    }
    .logout-container {
        text-align: center;
        padding: 40px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }
    .logout-container h1 {
        color: #333;
    }
    .logout-container a {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        transition: 0.3s;
    }
    .logout-container a:hover {
        background: #0056b3;
    }
  </style>
</head>
<body>
    <div class="logout-container">
        <h1>Anda telah logout</h1>
        <p>Terima kasih telah menggunakan aplikasi ini.</p>
        <a href="<?php echo e(url('/')); ?>">Login Kembali</a>
    </div>
</body>
</html>
<?php /**PATH D:\projek1234\rafli_1234\resources\views/auth/logout.blade.php ENDPATH**/ ?>