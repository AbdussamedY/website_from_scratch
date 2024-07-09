// const loginBtn = document.querySelector("#login");
// const registerBtn = document.querySelector("#register");
// const loginForm = document.querySelector("#loginForm");

// loginBtn.addEventListener("click", () => {
//     loginBtn.style.backgroundColor = "#21264D";
//     registerBtn.style.backgroundColor = "rgba(255,255,255,0.2)";

//     loginForm.style.transform = "translateX(0)";
//     registerForm.style.transform = "translateX(150%)";

//     loginForm.style.opacity = "1";
//     registerForm.style.opacity = "0.1";
// });
// registerBtn.addEventListener("click", () => {
//     loginBtn.style.backgroundColor = "rgba(255,255,255,0.2)";
//     registerBtn.style.backgroundColor = "#21264D";

//     loginForm.style.transform = "translateX(-150%)";
//     registerForm.style.transform = "translateX(0%)";

//     loginForm.style.opacity = "0.1";
//     registerForm.style.opacity = "1";
// });






document.addEventListener('DOMContentLoaded', function() {
    const loginBtn = document.querySelector("#login");
    const registerBtn = document.querySelector("#register");
    const loginForm = document.querySelector("#loginForm");
    const registerForm = document.querySelector("#registerForm");

    loginBtn.addEventListener("click", () => {
        loginBtn.style.backgroundColor = "#21264D";
        registerBtn.style.backgroundColor = "rgba(255,255,255,0.2)";

        loginForm.style.transform = "translateX(0)";
        registerForm.style.transform = "translateX(150%)";

        loginForm.style.opacity = "1";
        registerForm.style.opacity = "0.1";
    });

    registerBtn.addEventListener("click", () => {
        loginBtn.style.backgroundColor = "rgba(255,255,255,0.2)";
        registerBtn.style.backgroundColor = "#21264D";

        loginForm.style.transform = "translateX(-150%)";
        registerForm.style.transform = "translateX(0%)";

        loginForm.style.opacity = "0.1";
        registerForm.style.opacity = "1";
    });


    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('password_confirm');
    const submitButton = document.getElementById('submit-btn');

    function validatePasswords() {
        if (password.value !== confirmPassword.value) {
            password.classList.add('error');
            confirmPassword.classList.add('error');
            submitButton.classList.add('disable');
            submitButton.disabled = true;
        } else {
            password.classList.remove('error');
            confirmPassword.classList.remove('error');
            submitButton.classList.remove('disable');
            submitButton.disabled = false;
        }
    }

    password.addEventListener('input', validatePasswords);
    confirmPassword.addEventListener('input', validatePasswords);
});


