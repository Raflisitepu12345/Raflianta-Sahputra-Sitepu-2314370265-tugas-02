<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foodie Sign Up</title>

  {{-- Inline CSS --}}
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
      text-align: center;
    }

    .subtitle {
      color: #888;
      margin-bottom: 30px;
      font-size: 14px;
      text-align: center;
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
      margin-top: 10px;
    }

    .login-btn:hover {
      background: linear-gradient(135deg, #ff6b00, #ff8a00);
      box-shadow: 0 5px 15px rgba(255, 107, 0, 0.3);
    }

    .signup-link {
      text-align: center;
      font-size: 14px;
      color: #777;
      margin-top: 15px;
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
        <div class="alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      {{-- Form Register --}}
      <form method="POST" action="{{ url('/register') }}" id="signupForm">
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

  {{-- Inline JS --}}
  <script>
    document.getElementById('signupForm').addEventListener('submit', function(e) {
      const pwd = document.getElementById('password').value;
      const confirmPwd = document.getElementById('password_confirmation').value;

      if (pwd !== confirmPwd) {
        e.preventDefault();
        alert('Passwords do not match!');
      }
    });
  </script>
</body>
</html>
