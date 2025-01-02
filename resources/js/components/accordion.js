const accordionButtons = document.querySelectorAll("button.accordion");

accordionButtons.forEach(button => {
    button.addEventListener("click", () => {
        button.classList.toggle("active");
        let content = button.nextElementSibling;
        if (content.style.display === "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }
    })
})