import React from 'react';

import DefaultLayout from '../../layouts/DefaultLayout';
import Banner from '../../components/Sections/Banner';
import Counter from '../../components/elements/Counter';

export default function CounterPage() {
  return (
    <DefaultLayout>
      <Banner title="Resizer" />
      <div className="container">
        <Counter />
      </div>
    </DefaultLayout>
  );
}
