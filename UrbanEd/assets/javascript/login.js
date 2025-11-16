document.getElementById("loginForm").addEventListener("submit", function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    fetch("database/login_process.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if (data === "success") {
            window.location.href = "index.php";
        } else {
            alert(data);
        }
    });
});