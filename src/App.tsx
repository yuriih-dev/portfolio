import React from 'react';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';

// home
import HomePage from './pages/home';
// auth
import LoginPage from './pages/auth/login';
import RegisterPage from './pages/auth/register';
import ForgotPasswordPage from './pages/auth/forgotPassword';
import VerifyPage from './pages/auth/verify';
import SmsPage from './pages/auth/sms';
// document
import DocsPage from './pages/docs';
// samples
import RecipesPage from './pages/samples/recipes';
import ResizablePage from './pages/samples/resizable';
import ToasterPage from './pages/samples/toaster';
import CounterPage from './pages/samples/counter';
// 404
import ErrorPage from './pages/404';

export default function App() {
  return (
    <Router>
      <Routes>
        <Route path={'/'} element={<HomePage />} />

        <Route path={'/auth/login'} element={<LoginPage />} />
        <Route path={'/auth/register'} element={<RegisterPage />} />
        <Route path={'/auth/verify'} element={<VerifyPage />} />
        <Route path={'/auth/forgot-password'} element={<ForgotPasswordPage />} />
        <Route path={'/auth/sms'} element={<SmsPage />} />

        <Route path={'/samples/simple-api'} element={<RecipesPage />} />
        <Route path={'/samples/resizable'} element={<ResizablePage />} />
        <Route path={'/samples/toaster'} element={<ToasterPage />} />
        <Route path={'/samples/counter'} element={<CounterPage />} />

        <Route path={'/docs'} element={<DocsPage />} />
        <Route path={'/docs/:url'} element={<DocsPage />} />

        <Route path={'*'} element={<ErrorPage />} />
      </Routes>
    </Router>
  );
}
