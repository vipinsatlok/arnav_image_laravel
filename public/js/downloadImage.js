let countdown = 10;
function downloadImage() {
    const button = document.getElementById("imageDownloadButton");
    const imageId = button.getAttribute("data-image-id");

    let downloadUrl = `/uploads/` + imageId + `.png`;
    let downloadLink = document.createElement("a");
    downloadLink.href = downloadUrl;
    downloadLink.download = `digitalapnao-${imageId}s.png`;
    document.body.appendChild(downloadLink);
    downloadLink.click();

    const d = document.getElementById("imageDownload");
    d.href = downloadUrl;
    d.download = `digitalapnao-${imageId}s.png`;
    
    document.body.removeChild(downloadLink);
}

function updateTimer() {
    const button = document.getElementById("countDown");
    button.innerText = `${countdown} SEC`;

    if (countdown === 0) {
        clearInterval(timerInterval);
        button.innerHTML = "Downloaded!";
        downloadImage();
    }

    countdown--;
}

function startCountdown() {
    document.getElementById("downloadModal").style.display = "flex";

    timerInterval = setInterval(updateTimer, 1000);
}

function closeModal() {
    document.getElementById("downloadModal").style.display = "none";
    window.location.href = window.location.href;
}
