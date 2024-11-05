import "splitting/dist/splitting.css";
import "splitting/dist/splitting-cells.css";
import Splitting from "splitting";
import { gsap } from "gsap";

window.addEventListener('DOMContentLoaded', () => {
    const targets = document.querySelectorAll('#quote');
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
});
