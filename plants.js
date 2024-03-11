function displayImage() {
    var input = document.getElementById('uploadImage');
    var image = document.getElementById('image');

    // Check if a file is selected
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        // Read the selected file as a data URL
        reader.onload = function (e) {
            image.src = e.target.result;
        };

        reader.readAsDataURL(input.files[0]);
    }
}
