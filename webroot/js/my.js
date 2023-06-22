
function init() {
    const icon = document.getElementsByClassName("bar-icon")[0];
    const playButton = document.getElementsByClassName("playground-button")[0];
    const aboutButton = document.getElementsByClassName("about-button")[0];

    icon.addEventListener("click", () => {
        window.location.href = "/";
    });

    playButton.addEventListener("click", () => {
        window.location.href = "/playground";
    });

    aboutButton.addEventListener("click", () => {
        window.location.href = "/about";
    });
}

window.onload = init;
