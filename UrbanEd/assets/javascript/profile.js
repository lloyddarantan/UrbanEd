document.getElementById("editBtn").addEventListener("click", function() {
  const inputs = document.querySelectorAll("#profileForm .input-field");
  const saveBtn = document.getElementById("saveBtn");

  inputs.forEach(input => {
    input.removeAttribute("readonly");
    input.style.border = "1px solid #ccc";
  });

  saveBtn.style.display = "inline-block";
  this.style.display = "none";
});