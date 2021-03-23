import React from 'react';
import { gsap } from 'gsap';
import './App.css';

const Landing: React.FC = () => {

    window.onload = () => {

        var tl = gsap.timeline();
        tl  .from(".welcome", {opacity:0})
            .fromTo(".welcome", {opacity:0}, {opacity:1 , duration: 1.5}, "-=0.75")
            .to(".welcome", {opacity:0 , duration: 1});
    }

    return (

        <div className="landingMessage" id="landing">

            <h1 className="welcome">Welcome!</h1>
            
        </div>
    );
}
export default Landing;