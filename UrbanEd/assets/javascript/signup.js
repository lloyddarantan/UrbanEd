document.getElementById("signupForm").addEventListener("submit", function(e) {
    e.preventDefault(); // prevent form reload

    var formData = new FormData(this);

    fetch("database/signup_process.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data); // show response as popup
        if (data === "Account created successfully") {
            window.location.href = "login_page.php"; // redirect on success
        }
    })
    .catch(error => console.error('Error:', error));
});