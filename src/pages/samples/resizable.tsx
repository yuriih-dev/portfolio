import React from 'react';

import DefaultLayout from '../../layouts/DefaultLayout';
import Resizer from '../../components/Resizer';
import Banner from '../../components/Sections/Banner';

export default function ResizablePage() {
  return (
    <DefaultLayout>
      <Banner title="Resizer" />
      <div className="container">
        <Resizer />
      </div>
    </DefaultLayout>
  );
}
