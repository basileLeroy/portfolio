const accordionButtons = document.querySelectorAll("button.accordion");

accordionButtons.forEach(button => {
    button.addEventListener("click", () => {
        button.classList.toggle("active");
        let content = button.nextElementSibling;
        // if (content.style.display === "block") {
        //     content.style.display = "none";
        //     if (content.classList.contains("show-content")) {
        //         content.classList.remove("show-content");
        //     }        
        // } else {
        //     content.style.display = "block";
        //     content.classList.remove("show-content");
        // }
        content.classList.toggle('show-content')
    })
})