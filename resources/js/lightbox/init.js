// Instead of lightbox, I opted to install photoswipe which is build on top of lightbox

import PhotoSwipeLightbox from "photoswipe/lightbox";
import "photoswipe/style.css";

const lightbox = new PhotoSwipeLightbox({
    gallery: "#my-gallery",
    children: "a",
    pswpModule: () => import("photoswipe")
});

lightbox.init();