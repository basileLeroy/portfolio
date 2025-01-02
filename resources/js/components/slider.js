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
    })
});

export default handleSliderTransition;