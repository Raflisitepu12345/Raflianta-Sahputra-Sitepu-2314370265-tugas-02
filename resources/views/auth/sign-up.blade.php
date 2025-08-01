<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foodie Sign Up</title>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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

      {{-- Alert Error --}}
      @if ($errors->any())
        <div class="alert alert-danger" style="color: red;">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      {{-- Form Register --}}
      <form method="POST" action="{{ url('/register') }}">
        @csrf
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

        <p class="signup-link">Already have an account? <a href="{{ url('/') }}">Login</a></p>
      </form>
    </div>
  </div>
</body>
</html>
