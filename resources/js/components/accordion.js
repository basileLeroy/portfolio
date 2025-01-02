const accordionButtons = document.querySelectorAll("button.accordion");

accordionButtons.forEach(button => {
    button.addEventListener("click", () => {
        console.log("clicked");
        button.classList.toggle("active");
        let content = button.nextElementSibling;
        console.log(content)
        if (content.style.display === "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }
    })
})