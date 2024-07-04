const loginBtn = document.querySelector("#login");
const registerBtn = document.querySelector("#register");
const loginForm = document.querySelector("#loginForm");

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