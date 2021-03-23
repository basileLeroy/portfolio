import React from 'react';
import { gsap } from 'gsap';
import './App.css';
import { delay } from 'q';

const Landing: React.FC = () => {

    window.onload = () => {

        var tl = gsap.timeline();
        tl  .from(".welcome", {opacity:0})
            .fromTo(".welcome", {opacity:0}, {opacity:1 , duration: 1.5}, "-=0.75")
            .to(".welcome", {opacity:0 , duration: 1});

        gsap.fromTo(".landing", {opacity:1 , x:0 , y:0}, {opacity:.5 , x:0 , y:-800 , duration:1.5 , delay:3});
    }

    return (

        <div className="landingMessage" id="landing">
            <section>
                <div className="landing" id="landing-message">
                    <h1 className="welcome">Welcome!</h1>
                </div>
                
            </section>

            <section>
                <div className="container" id="container">

                </div>
            </section>
            
        </div>
    );
}
export default Landing;