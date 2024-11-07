import "splitting/dist/splitting.css";
import "splitting/dist/splitting-cells.css";
import Splitting from "splitting";
import { gsap } from "gsap";

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
const options = {
    threshold: 0.5
};

const observer = new IntersectionObserver(sectionVisibleCallback, options);

const sections = document.querySelectorAll('section');

// give time for logo to load first
setTimeout(() => {
    sections.forEach(section => {
        observer.observe(section); // Start observing each section
    });
}, 1000);
