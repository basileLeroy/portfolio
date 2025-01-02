const accordionButtons = document.querySelectorAll("button.accordion");

accordionButtons.forEach(button => {
    console.log(button)
    button.addEventListener('click', () => {
        console.log("click");
        
    })
    // button.addEventListener("click", () => {
    //     console.log("clicked");
        
    //     this.classList.toggle("active");
    //     let content = this.nextElementSibling;
    //     console.log(content)
    //     if (content.style.display === "block") {
    //         content.style.display = "none";
    //     } else {
    //         content.style.display = "block";
    //     }
    // })
})