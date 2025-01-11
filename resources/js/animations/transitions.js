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
        localStorage.setItem('about.autoslider', false)
    })
    topic.addEventListener('keyup', (event) => {
        if (event.key === "Enter" || event.key === " ") {
            handleSliderTransition(topic)
            localStorage.setItem('about.autoslider', false)
        }
    })
});

window.addEventListener('DOMContentLoaded', () => {
    if (!localStorage.getItem('about.autoslider')) {
        localStorage.setItem('about.autoslider', true)
    }
    if (localStorage.getItem('about.autoslider') === "false") localStorage.setItem('about.autoslider', true)
})

/**
 * Slider for review carousel in about me page
 */



/**
 * Toggle view mode on reviews in about me page
 */

const   field = document.querySelector('section.feedbacks fieldset'),
        toggleButton = document.querySelector('#toggle_checkbox')

toggleButton.addEventListener('change', () => {
    field.classList.toggle('grid')
})