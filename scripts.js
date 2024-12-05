function showSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'flex'
}

function hidesidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'none'
}



// const signUpButton= document.getElementById('signUpButton')
// const signInButton= document.getElementById('signInButton')

// const signInForm= document.getElementById('signIn')
// const signUpForm= document.getElementById('signup')

// signUpButton.addEventListener('click',function(){
//     signInForm.style.display="none";
//     signUpForm.style.display="block";
// })

// signInButton.addEventListener('click',function(){
//     signInForm.style.display="block";
//     signUpForm.style.display="none";
// })

// Redirection du bouton "Sign Up" (sur la page de connexion) vers la page d'inscription
const signUpButton = document.getElementById('signUpButton');
if (signUpButton) {
    signUpButton.addEventListener('click', function() {
        window.location.href = 'signup.html'; // Remplace 'signup.html' par le nom exact de ta page d'inscription
    });
}

// Redirection du bouton "Sign In" (sur la page d'inscription) vers la page de connexion
const signInButton = document.getElementById('signInButton');
if (signInButton) {
    signInButton.addEventListener('click', function() {
        window.location.href = 'login.html'; // Remplace 'signin.html' par le nom exact de ta page de connexion
    });
}
