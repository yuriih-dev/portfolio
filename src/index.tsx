/* eslint-disable-next-line no-use-before-define */
import React from 'react';
import ReactDOM from 'react-dom';

import App from './App';
import sprite from './styles/svg-sprite';
import './styles/app.scss';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';

const rootElement = document.getElementById('root');
ReactDOM.render(
  <React.StrictMode>
    <div dangerouslySetInnerHTML={{ __html: sprite }} />
    <App />
  </React.StrictMode>,
  rootElement
);
