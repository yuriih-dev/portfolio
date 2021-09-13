import React from 'react';
import { BrowserRouter as Router, Switch, Route } from 'react-router-dom';
import './assets/scss/app.scss';

import {HomePage, AboutUsPage, VideDetailPage} from "components/pageList";

function App() {
  return (
    <div className="App">
        <Router>
            <Switch>
                <Route exact path='/' component={HomePage} />
                <Route exact path='/about-us' component={AboutUsPage} />
                <Route exact path='/video/:videoId' component={VideDetailPage} />
            </Switch>
        </Router>
    </div>
  );
}

export default App;
