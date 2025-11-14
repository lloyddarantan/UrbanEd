document.addEventListener("DOMContentLoaded", () => {
    // Edit
    const editBtn = document.getElementById("editBtn");
    const saveBtn = document.getElementById("saveBtn");
    const deleteBtn = document.getElementById("deleteBtn");
    const inputs = document.querySelectorAll("#profileForm .input-field");

    editBtn.addEventListener("click", function () {
        inputs.forEach(input => {
            input.removeAttribute("readonly");
            input.style.border = "1px solid #ccc";
        });

        saveBtn.style.display = "inline-block";
        deleteBtn.style.display = "inline-block";
        this.style.display = "none";
    });

    // Update
    const profileForm = document.getElementById('profileForm');
    const modalOverlayUpdate = document.querySelector('.modal-overlayUpdate');
    const confirmBtnUpdate = document.querySelector('.confirmUpdate');
    const declineBtnUpdate = document.querySelector('.declineUpdate');

    saveBtn.addEventListener('click', () => {
        modalOverlayUpdate.style.display = 'flex';
    });

    confirmBtnUpdate.addEventListener('click', () => profileForm.submit());
    declineBtnUpdate.addEventListener('click', () => modalOverlayUpdate.style.display = 'none');

    // Sign out
    const signOutBtn = document.getElementById('signOutBtn');
    const modalOverlayLogout = document.querySelector('.modal-overlayLogout');
    const confirmBtnLogout = document.querySelector('.confirmLogout');
    const declineBtnLogout = document.querySelector('.declineLogout');
    const closeLogout = document.querySelector('.closeLogout');

    signOutBtn.addEventListener('click', () => modalOverlayLogout.style.display = 'flex');
    confirmBtnLogout.addEventListener('click', () => window.location.href = "logout.php");
    declineBtnLogout.addEventListener('click', () => modalOverlayLogout.style.display = 'none');
    closeLogout.addEventListener('click', () => modalOverlayLogout.style.display = 'none');

    // Delete
    const deleteModal = document.getElementById("deleteOverlay"); // make sure this matches your modal ID
    const declineDelete = deleteModal.querySelector(".declineDelete");
    const confirmDelete = deleteModal.querySelector(".confirmDelete");
    const closeDelete = deleteModal.querySelector(".closeDelete");

    deleteBtn.addEventListener("click", () => deleteModal.style.display = "flex");
    declineDelete.addEventListener("click", () => deleteModal.style.display = "none");
    closeDelete.addEventListener("click", () => deleteModal.style.display = "none");
    confirmDelete.addEventListener("click", () => window.location.href = "database/delete_process.php");
});
