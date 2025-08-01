<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foodie Login</title>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <style>
      /* Styling sederhana untuk alert */
      .alert-success {
          background-color: #d4edda;
          color: #155724;
          padding: 10px;
          border-radius: 5px;
          margin-bottom: 15px;
          text-align: center;
      }
      .alert-danger {
          background-color: #f8d7da;
          color: #721c24;
          padding: 10px;
          border-radius: 5px;
          margin-bottom: 15px;
          text-align: center;
      }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="login-illustration">
      <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?auto=format&fit=crop&w=500&h=600" 
           alt="Delicious pizza with melted cheese and toppings on wooden table" class="food-image" />
    </div>

    <div class="login-form">
      {{-- Pesan sukses dari register --}}
      @if (session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
      @endif

      {{-- Pesan error --}}
      @if ($errors->any())
        <div class="alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
      @endif

      <div class="logo">
        <img src="https://cdn-icons-png.flaticon.com/512/1046/1046784.png" alt="FoodieHub logo" />
      </div>
      <h2>Welcome Back</h2>
      <p class="subtitle">Login to your foodie account</p>
      
      {{-- Form Login Laravel --}}
      <form method="POST" action="{{ url('/login') }}">
        @csrf
        <div class="form-group">
          <label for="email">Email</label>
          <div class="input-with-icon">
            <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png" alt="Email icon" class="input-icon" />
            <input type="email" name="email" id="email" placeholder="your@email.com" required value="{{ old('email') }}">
          </div>
        </div>
        
        <div class="form-group">
          <label for="password">Password</label>
          <div class="input-with-icon">
            <img src="https://cdn-icons-png.flaticon.com/512/3064/3064155.png" alt="Padlock icon" class="input-icon" />
            <input type="password" name="password" id="password" placeholder="••••••••" required>
          </div>
        </div>
        
        <div class="remember-forgot">
          <div class="remember-me">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember me</label>
          </div>
          <a href="{{ url('/forgot-password') }}" class="forgot-password">Forgot password?</a>
        </div>
        
        <button type="submit" class="login-btn">Login</button>
        
        <div class="divider">
          <span>or continue with</span>
        </div>
        
        <div class="social-login">
          <button type="button" class="social-btn google">
            <img src="https://cdn-icons-png.flaticon.com/512/2991/2991148.png" alt="Google logo" />
            Google
          </button>
          <button type="button" class="social-btn facebook">
            <img src="https://cdn-icons-png.flaticon.com/512/4494/4494475.png" alt="Facebook logo" />
            Facebook
          </button>
        </div>
        
        <p class="signup-link">Don't have an account? <a href="{{ url('/register') }}">Sign up</a></p>
      </form>
    </div>
  </div>

  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
