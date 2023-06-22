
function init() {
    const icon = document.getElementsByClassName("bar-icon")[0];

    console.log(icon);

    icon.addEventListener("click", () => {
        window.location.href = "/";
    });
}

window.onload = init;
