import React from 'react';

import './App.css';
import { gsap } from 'gsap';
import Landing from './landing';

const App: React.FC = () => {
  return (
    <div className="App">
      <header className="App-header">
        <Landing />
      </header>
    </div>
  );
}

export default App;
