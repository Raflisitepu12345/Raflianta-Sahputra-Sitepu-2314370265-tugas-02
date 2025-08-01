document.addEventListener('DOMContentLoaded', function() {
  const loginForm = document.getElementById('loginForm');
  
  if (loginForm) {
    loginForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
      const remember = document.getElementById('remember').checked;
      
      // Simple validation
      if (!email || !password) {
        alert('Please fill in all fields');
        return;
      }
      
      // Simulate login process
      console.log('Login attempt with:', { email, password, remember });
      
      // Here you would typically make an API call
      // For demo, we'll simulate success after 1.5s
      setTimeout(() => {
        alert('Login successful! Redirecting...');
        // window.location.href = '/dashboard'; // Uncomment in real implementation
      }, 1500);
    });
  }
  
  // Social login buttons functionality
  const googleBtn = document.querySelector('.social-btn.google');
  const facebookBtn = document.querySelector('.social-btn.facebook');
  
  if (googleBtn) {
    googleBtn.addEventListener('click', function() {
      console.log('Google login clicked');
      // Implement Google auth here
    });
  }
  
  if (facebookBtn) {
    facebookBtn.addEventListener('click', function() {
      console.log('Facebook login clicked');
      // Implement Facebook auth here
    });
  }
});
