const file = document.getElementById("dropzone-file");
const inputSec = document.getElementById("inputSec");
const form = document.getElementById("uploadForm");
const tilte = document.getElementById("title");
const tags = document.getElementById("tags");
const button = document.getElementById("button");
const imageSet = document.getElementById("imageSet");
const image_show = document.getElementById("image_show");
const image_field = document.getElementById("image_field");

let singleFile;

file.addEventListener("change", (e) => {
    const file = e.target.files[0];

    if (file) {
        const imageUrl = URL.createObjectURL(file);
        imageSet.src = imageUrl;

        image_field.classList.add("hidden");
        image_show.classList.remove("hidden");

        inputSec.classList.remove("hidden");
        inputSec.classList.add("flex");
        singleFile = file;
    }
});
