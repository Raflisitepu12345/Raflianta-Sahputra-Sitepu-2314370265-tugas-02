<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foodie Login</title>

  {{-- Inline CSS agar tidak tergantung public/css --}}
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: #f9f5f0;
      color: #333;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-container {
      width: 900px;
      display: flex;
      background-color: white;
      border-radius: 20px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .login-illustration {
      flex: 1;
      background-color: #fff8f0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .food-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .login-form {
      flex: 1;
      padding: 60px 50px;
      position: relative;
    }

    .logo {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .logo img {
      width: 100px;
      height: auto;
    }

    h2 {
      font-size: 28px;
      font-weight: 700;
      color: #ff8a00;
      margin-bottom: 5px;
    }

    .subtitle {
      color: #888;
      margin-bottom: 30px;
      font-size: 14px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 8px;
      color: #555;
      font-weight: 500;
      font-size: 14px;
    }

    .input-with-icon {
      position: relative;
      display: flex;
      align-items: center;
    }

    .input-icon {
      position: absolute;
      left: 15px;
      width: 20px;
      height: 20px;
    }

    .input-with-icon input {
      width: 100%;
      padding: 12px 15px 12px 45px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 14px;
      transition: all 0.3s;
    }

    .input-with-icon input:focus {
      outline: none;
      border-color: #ff8a00;
      box-shadow: 0 0 0 2px rgba(255, 138, 0, 0.2);
    }

    .remember-forgot {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 15px 0 25px;
      font-size: 14px;
    }

    .remember-me {
      display: flex;
      align-items: center;
    }

    .remember-me input {
      margin-right: 8px;
    }

    .forgot-password {
      color: #ff8a00;
      text-decoration: none;
      transition: color 0.2s;
    }

    .forgot-password:hover {
      color: #e67300;
    }

    .login-btn {
      width: 100%;
      padding: 14px;
      border: none;
      border-radius: 8px;
      background: linear-gradient(135deg, #ff8a00, #ff6b00);
      color: white;
      font-weight: 600;
      font-size: 16px;
      cursor: pointer;
      transition: all 0.3s;
    }

    .login-btn:hover {
      background: linear-gradient(135deg, #ff6b00, #ff8a00);
      box-shadow: 0 5px 15px rgba(255, 107, 0, 0.3);
    }

    .divider {
      margin: 25px 0;
      position: relative;
      text-align: center;
      color: #999;
      font-size: 13px;
    }

    .divider::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 0;
      right: 0;
      height: 1px;
      background-color: #eee;
      z-index: 1;
    }

    .divider span {
      position: relative;
      z-index: 2;
      padding: 0 15px;
      background-color: white;
    }

    .social-login {
      display: flex;
      gap: 15px;
      margin-bottom: 30px;
    }

    .social-btn {
      flex: 1;
      padding: 10px;
      border-radius: 8px;
      border: 1px solid #ddd;
      background-color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      font-size: 14px;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.2s;
    }

    .social-btn.google:hover {
      background-color: #f0f0f0;
      border-color: #bbb;
    }

    .social-btn.facebook {
      background-color: #1877f2;
      color: white;
      border-color: #1877f2;
    }

    .social-btn.facebook:hover {
      background-color: #166fe5;
    }

    .social-btn img {
      width: 20px;
      height: 20px;
    }

    .signup-link {
      text-align: center;
      font-size: 14px;
      color: #777;
    }

    .signup-link a {
      color: #ff8a00;
      font-weight: 500;
      text-decoration: none;
      transition: color 0.2s;
    }

    .signup-link a:hover {
      color: #e67300;
    }

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

    @media (max-width: 768px) {
      .login-container {
        flex-direction: column;
        width: 90%;
        max-width: 500px;
      }

      .login-illustration {
        display: none;
      }

      .login-form {
        padding: 40px 30px;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="login-illustration">
      <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?auto=format&fit=crop&w=500&h=600" 
           alt="Delicious pizza" class="food-image" />
    </div>

    <div class="login-form">
      {{-- Pesan sukses --}}
      @if (session('success'))
        <div class="alert-success">{{ session('success') }}</div>
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
      <form method="POST" action="{{ url('/login') }}" id="loginForm">
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

  {{-- Inline JS --}}
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const loginForm = document.getElementById('loginForm');
      
      if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
          const email = document.getElementById('email').value;
          const password = document.getElementById('password').value;
          
          if (!email || !password) {
            alert('Please fill in all fields');
            e.preventDefault();
          }
        });
      }
    });
  </script>
</body>
</html>
