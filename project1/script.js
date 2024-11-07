const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

// Switch to Sign-Up form
registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

// Switch to Log-In form
loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

// Handle successful registration (after form submission)
const signupForm = document.getElementById('signup-form');
signupForm.addEventListener('submit', function(event) {
    event.preventDefault();  // Prevent the default form submission
    // Simulate a successful registration (you will replace this with your backend logic)
    // Redirect to the login page after registration
    setTimeout(() => {
        window.location.href = 'index.html';  // Redirect to login page after successful registration
    }, 500);  // Optional: Add a short delay for better UX
});

// Handle successful login (after form submission)
const signinForm = document.getElementById('signin-form');
signinForm.addEventListener('submit', function(event) {
    event.preventDefault();  // Prevent the default form submission
    // Simulate a successful login (you will replace this with your backend logic)
    // Redirect to the homepage dashboard after login
    setTimeout(() => {
        window.location.href = 'HomePage/index.html';  // Redirect to dashboard page after successful login
    }, 500);  // Optional: Add a short delay for better UX
});
