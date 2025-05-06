function toggleForms() {
    const signIn = document.getElementById('signin-section');
    const signUp = document.getElementById('signup-section');

    if (signIn.classList.contains('active')) {
        signIn.classList.remove('active');
        signUp.classList.add('active');
    } else {
        signUp.classList.remove('active');
        signIn.classList.add('active');
    }
}