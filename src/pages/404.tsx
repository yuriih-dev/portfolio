import React from 'react';
import DefaultLayout from '../layouts/DefaultLayout';
import Banner from '../components/Sections/Banner';

const ErrorPage = () => {
  return (
    <DefaultLayout>
      <Banner title="We can't find this page" />
      <div className={'flex-center'}>
        <h1>404</h1>
      </div>
    </DefaultLayout>
  );
};

export default ErrorPage;
