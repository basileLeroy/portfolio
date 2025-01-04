/**
 * Mobile accordion on about me page
 */

const accordionButtons = document.querySelectorAll("button.accordion");

accordionButtons.forEach(button => {
    button.addEventListener("click", () => {
        button.classList.toggle("active");
        let content = button.nextElementSibling;
        content.classList.toggle('show-content')
    })
})

/**
 * Slider effect on about me page
 */

const sliderTopics = document.querySelectorAll(".slider-menu li");
const sliderContents = document.querySelectorAll(".slider-content article");


const toggleActive = (list, item) => {
    list.forEach(element => element.classList.remove("active"));

    item.classList.add("active");
}

const handleSliderTransition = (topic) => {
    toggleActive(sliderTopics, topic)

    const content = Array.from(sliderContents).find(element => element.id === topic.dataset.topic);

    if (content) {
        toggleActive(sliderContents, content);
    }
}

sliderTopics.forEach(topic => {
    topic.addEventListener('click', () => {
        handleSliderTransition(topic)
        localStorage.setItem('autoslider', false)
    })
    topic.addEventListener('keyup', (event) => {
        if (event.key === "Enter" || event.key === " ") {
            handleSliderTransition(topic)
            localStorage.setItem('autoslider', false)
        }
    })
});

window.addEventListener('DOMContentLoaded', () => {
    if (!localStorage.getItem('autoslider')) {
        localStorage.setItem('autoslider', true)
    }
    if (localStorage.getItem('autoslider') === "false") localStorage.setItem('autoslider', true)
})