<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foodie Forgot Password</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
</head>
<body>
  <div class="login-container">
    <div class="login-illustration">
      <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?auto=format&fit=crop&w=500&h=600" 
           alt="Delicious pizza" class="food-image" />
    </div>
    <div class="login-form">
      <div class="logo">
        <img src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png" alt="FoodieHub logo" />
      </div>
      <h2>Forgot Password</h2>
      <p class="subtitle">Enter your email to reset your password</p>

      
      <form method="POST" action="<?php echo e(url('/forgot-password')); ?>">
        <?php echo csrf_field(); ?>

        <div class="form-group">
          <label for="email">Email</label>
          <div class="input-with-icon">
            <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png" alt="Email icon" class="input-icon" />
            <input type="email" name="email" id="email" placeholder="your@email.com" required>
          </div>
          <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <?php if(session('status')): ?>
          <p class="text-success"><?php echo e(session('status')); ?></p>
        <?php endif; ?>

        <button type="submit" class="login-btn">Send Reset Link</button>

        <p class="signup-link"><a href="<?php echo e(url('/')); ?>">Back to Login</a></p>
      </form>
    </div>
  </div>

  <script src="<?php echo e(asset('js/script.js')); ?>"></script>
</body>
</html>
<?php /**PATH D:\projek1234\rafli_1234\resources\views/auth/forget-password.blade.php ENDPATH**/ ?>