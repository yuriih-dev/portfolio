import React from 'react';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';

// home
import HomePage from './pages/home';
import ErrorPage from './pages/404';

export default function App() {
  return (
    <Router>
      <Routes>
        <Route path={'/'} element={<HomePage />} />
        <Route path={'*'} element={<ErrorPage />} />
      </Routes>
    </Router>
  );
}
