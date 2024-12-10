function validateSignupForm(event) {
    event.preventDefault();
    
    const username = document.getElementById('username');
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirmPassword');
    
    // Reset previous error states
    [username, email, password, confirmPassword].forEach(input => {
        input.classList.remove('is-invalid');
    });
    
    let isValid = true;
    
    // Username validation
    if (username.value.length < 3) {
        username.classList.add('is-invalid');
        isValid = false;
    }
    
    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email.value)) {
        email.classList.add('is-invalid');
        isValid = false;
    }
    
    // Password validation
    if (password.value.length < 8) {
        password.classList.add('is-invalid');
        isValid = false;
    }
    
    // Confirm password validation
    if (password.value !== confirmPassword.value) {
        confirmPassword.classList.add('is-invalid');
        isValid = false;
    }
    
    if (isValid) {
        // If form is valid, you can submit it
        document.getElementById('signupForm').submit();
    }
    
    return false;
}