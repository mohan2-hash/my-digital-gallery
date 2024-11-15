// Handle Profile Image Upload
function uploadProfileImage() {
    const file = document.getElementById("upload-img").files[0];
    const reader = new FileReader();
    reader.onload = function(event) {
        document.getElementById("profile-img").src = event.target.result;
    };
    reader.readAsDataURL(file);
}

// Example function to edit data
function editData() {
    alert("Editing Personal Data...");
}

// Example function to delete data
function deleteData() {
    alert("Deleting Personal Data...");
}
