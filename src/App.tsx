import React from 'react';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';

// home
import HomePage from './pages/home';
import ErrorPage from './pages/404';
import SettingPage from './pages/setting';
import ModalProvider from './components/modals';

export default function App() {
  return (
    <Router>
      <ModalProvider>
        <Routes>
          <Route path={'/'} element={<HomePage />} />
          <Route path={'/settings'} element={<SettingPage />} />
          <Route path={'*'} element={<ErrorPage />} />
        </Routes>
      </ModalProvider>
    </Router>
  );
}
