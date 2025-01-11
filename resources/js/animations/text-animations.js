import "splitting/dist/splitting.css";
import "splitting/dist/splitting-cells.css";
import Splitting from "splitting";
import { gsap } from "gsap";

const sliderContents = document.querySelectorAll(".slider-content article");

const toggleActive = (list, item) => {
    list.forEach(element => element.classList.remove("active"));

    item.classList.add("active");
}

const handleSliderTransition = (topic, list) => {
    toggleActive(list, topic)

    const content = Array.from(sliderContents).find(element => element.id === topic.dataset.topic);

    if (content) {
        toggleActive(sliderContents, content);
    }
}


const sectionVisibleCallback = (entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.toggle("show", entry.isIntersecting);

            const targets = entry.target.querySelectorAll('.quote');
            
            const allLines = [];

            targets.forEach((target) => {
                if (target) {
                    const results = Splitting({ target: target, by: 'lines' });
        
                    results[0].lines.forEach((line) => {
                        allLines.push(...line);
                    });
                } else {
                    console.error("Element with ID 'quote' not found");
                }
            });
        
            allLines.forEach((word, index) => {
                if (word instanceof HTMLElement) {
                    gsap.from(word, { opacity: 0, delay: index / 100, duration: 0.2 });
                }
            });
            observer.unobserve(entry.target);
        }
    })
}

const sliderVisibleCallback = (entries, observer) => {
    // const topics = document.querySelectorAll(".slider-menu li")
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const intervalId = setInterval(() => {
                const listOfTopics = Array.from(entry.target.children)
                const currentTopicId = listOfTopics.findIndex(topic => 
                    topic.classList.contains('active')
                );
                const nextTopic = listOfTopics[(currentTopicId + 1) % listOfTopics.length]

                if (localStorage.getItem('about.autoslider') === "true") handleSliderTransition(nextTopic, listOfTopics)
                
            }, 7000);

            entry.target.dataset.intervalId = intervalId;
        } else {
            const intervalId = entry.target.dataset.intervalId;
            if (intervalId) {
                clearInterval(intervalId);
                delete entry.target.dataset.intervalId;
                localStorage.setItem('about.autoslider', true)
            }
        }
        
    })
}

const options = {
    threshold: 0.5
};

const observer = new IntersectionObserver(sectionVisibleCallback, options);
const sliderObserver = new IntersectionObserver(sliderVisibleCallback, options)

const sections = document.querySelectorAll('section');
const sliderTopics = document.querySelector('.slider-menu');

// give time for logo to load first
setTimeout(() => {
    sections.forEach(section => {
        observer.observe(section); // Start observing each section
    });
    if(sliderTopics) sliderObserver.observe(sliderTopics);
}, 1000);