window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");
    loader.classList.add("loader_hidden");

    loader.addEventListener("transitionend", () => {
        document.body.removeChild("loader");
    })
})