<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foodie Forgot Password</title>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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

      {{-- Form Forgot Password --}}
      <form method="POST" action="{{ url('/forgot-password') }}">
        @csrf

        <div class="form-group">
          <label for="email">Email</label>
          <div class="input-with-icon">
            <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png" alt="Email icon" class="input-icon" />
            <input type="email" name="email" id="email" placeholder="your@email.com" required>
          </div>
          @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        @if (session('status'))
          <p class="text-success">{{ session('status') }}</p>
        @endif

        <button type="submit" class="login-btn">Send Reset Link</button>

        <p class="signup-link"><a href="{{ url('/') }}">Back to Login</a></p>
      </form>
    </div>
  </div>

  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
