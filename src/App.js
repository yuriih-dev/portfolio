import React from 'react';
import { BrowserRouter as Router, Switch, Route } from 'react-router-dom';

/**
 *  Import CSS
 */
import 'bootstrap/dist/css/bootstrap.min.css';
import './assets/scss/app.scss';

import {HomePage} from "components/pageList";
import {Header} from "./components/Header";

function App() {
  return (
    <div className="App">
        <Router>
            <Header />
            <Switch>
                <Route exact path='/' component={HomePage} />
            </Switch>
        </Router>
    </div>
  );
}

export default App;
