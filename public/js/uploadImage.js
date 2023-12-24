const file = document.getElementById("dropzone-file");
const inputSec = document.getElementById("inputSec");
const form = document.getElementById("uploadForm");
const tilte = document.getElementById("title");
const tags = document.getElementById("tags");
const button = document.getElementById("button");
const imageSet = document.getElementById("imageSet");

let singleFile;

file.addEventListener("change", (e) => {
    const file = e.target.files[0];

    if (file) {
        const imageUrl = URL.createObjectURL(file);
        imageSet.src = imageUrl;
        inputSec.classList.remove("hidden");
        inputSec.classList.add("flex");
        singleFile = file;
    }
});
