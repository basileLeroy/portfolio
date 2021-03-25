import React from 'react';
import { BrowserRouter as Router, Route, Switch} from 'react-router-dom';

import './App.css';
import Landing from './landing';

const App: React.FC = () => {
  return (
    <Router>
    <div className="App">
      <header className="App-header">
        <Landing />
      </header>
    </div>
    </Router>
  );
}

export default App;
