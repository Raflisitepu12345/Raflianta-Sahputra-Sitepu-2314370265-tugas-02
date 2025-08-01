<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foodie Sign Up</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
</head>
<body>
  <div class="login-container">
    <div class="login-illustration">
      <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?auto=format&fit=crop&w=500&h=600" 
           alt="Pizza illustration" class="food-image" />
    </div>

    <div class="login-form">
      <div class="logo">
        <img src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png" alt="FoodieHub logo" />
      </div>
      <h2>Create Account</h2>
      <p class="subtitle">Sign up to join our foodie community</p>

      
      <?php if($errors->any()): ?>
        <div class="alert alert-danger" style="color: red;">
          <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      <?php endif; ?>

      
      <form method="POST" action="<?php echo e(url('/register')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
          <label for="name">Full Name</label>
          <div class="input-with-icon">
            <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" class="input-icon" />
            <input type="text" name="name" id="name" placeholder="John Doe" required>
          </div>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <div class="input-with-icon">
            <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png" class="input-icon" />
            <input type="email" name="email" id="email" placeholder="your@email.com" required>
          </div>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <div class="input-with-icon">
            <img src="https://cdn-icons-png.flaticon.com/512/3064/3064155.png" class="input-icon" />
            <input type="password" name="password" id="password" placeholder="••••••••" required>
          </div>
        </div>

        <div class="form-group">
          <label for="password_confirmation">Confirm Password</label>
          <div class="input-with-icon">
            <img src="https://cdn-icons-png.flaticon.com/512/3064/3064155.png" class="input-icon" />
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" required>
          </div>
        </div>

        <button type="submit" class="login-btn">Sign Up</button>

        <p class="signup-link">Already have an account? <a href="<?php echo e(url('/')); ?>">Login</a></p>
      </form>
    </div>
  </div>
</body>
</html>
<?php /**PATH D:\projek1234\rafli_1234\resources\views/auth/sign-up.blade.php ENDPATH**/ ?>