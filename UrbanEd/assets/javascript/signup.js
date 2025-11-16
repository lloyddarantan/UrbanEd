document.getElementById("signupForm").addEventListener("submit", function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    fetch("database/signup_process.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
        if (data === "Account created successfully") {
            window.location.href = "login_page.php";
        }
    })
    .catch(error => console.error('Error:', error));
});