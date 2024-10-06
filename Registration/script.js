
 const postponeButton = document.getElementById('postpone-button');
 const cancelButton = document.getElementById('cancel-button');

 postponeButton.addEventListener('click', () => {
    
     console.log('Postpone button clicked');
 });

 cancelButton.addEventListener('click', () => {

     console.log('Cancel button clicked');
 });






 document.getElementById('signInBtn').addEventListener('click', function() {
    // Validate user credentials here (this is a placeholder, replace with actual logic)
    const email = document.querySelector('input[type="email"]').value;
    const password = document.querySelector('input[type="password"]').value;

    // If login is successful, redirect to the dashboard
    if (email && password) {
        // You can add actual validation logic here or call an API to verify
        window.location.href = 'dashboard.html'; // Replace with your actual dashboard file name
    } else {
        alert('Please enter valid credentials');
    }
});
