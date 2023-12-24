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

    document.body.removeChild(downloadLink);
}

function updateTimer() {
    const button = document.getElementById("imageDownloadButton");
    button.innerText = `Download in: ${countdown} sec`;

    if (countdown === 0) {
        clearInterval(timerInterval);
        button.innerText = `Download now`;
        downloadImage();
    }

    countdown--;
}

function startCountdown() {
    document.getElementById("imageDownloadButton").disabled = true;
    timerInterval = setInterval(updateTimer, 1000);
}
