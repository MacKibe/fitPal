function showLoginForm() {
    document.getElementById("login-form").style.display = "block";
}

function hideLoginForm() {
    document.getElementById("login-form").style.display = "none";
}

function showRegForm() {
    document.getElementById("signUp-form").style.display = "block";
}

function hideRegForm() {
    document.getElementById("signUp-form").style.display = "none";
}

function displayRegForm() {
    document.getElementById("login-form").style.display = "none";
    document.getElementById("signUp-form").style.display = "block";
}

function displayLoginForm() {
    document.getElementById("signUp-form").style.display = "none";
    document.getElementById("login-form").style.display = "block";
}