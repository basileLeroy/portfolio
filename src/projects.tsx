import React from 'react';
import { gsap } from 'gsap';
import hustleprime from './assets/hustleprime.gif';
import hustle from './assets/hustleprime.png';
import todolist from './assets/todolist.gif';
import todo from './assets/todo.png';
import './App.css';

const Projects: React.FC = () => {

    return (
        <>
            <div className="projects">
                <h1>My projects</h1>
                    <p>
                        
                    </p>
                    <br/>
                    <div className="allProjects">
                        <div className="project">
                            <div className="pContainer">
                                <img src={hustle} alt="" className="static"/>
                                <img src={hustleprime} alt="" className="active"/>
                                
                            </div>
                            <div className="pText">
                                <h2>Hustle Prime</h2>
                                <p>
                                    A fan-based vanilla JS platform (and actually my first JS project i made) made for a mobile game. <br/>
                                    It contains multiple html pages and some interactivity (see lower half of the Ancient sets: nav: META&gt;Ancient sets).
                                </p>
                            </div>
                        </div>
                        <div className="project">
                            <div className="pContainer">
                                <img src={todo} alt="" className="static"/>
                                <img src={todolist} alt="" className="active"/>
                                
                            </div>
                            <div className="pText">
                                <h2>To-do App + Calendar</h2>
                                <p>
                                    This was my introduction to React.js A classic To-do app like any other "first profect". but as an extra I tried <br/>
                                    implementing a calendar package into my project. This is where I learned about routing, React-Router-Dom, dependencies, ...
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr/>
            </div>
        </>
    );
}
export default Projects;