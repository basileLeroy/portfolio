import React from 'react';
import { gsap } from 'gsap';
import './App.css';

const AboutMe: React.FC = () => {

    return (
        <>
            <div className="aboutMe">
                <h1>About myself</h1>
                <p>
                    Not too long ago, I had close to no knowledge about programming.
                    Now, I have learned the ability to create amazing things in multiple languages!
                    How far I have gotten up until now, I can only descripbe as a mix of
                    interest, wanting to learn, motivation and dedication. <br/><br/>
                    <i>Sociable, teamplayer, client-oriented, .. Those are badges I wear with honor.</i>
                </p>
                <br/>
                <hr/>
            </div>
        </>
    );
}
export default AboutMe;