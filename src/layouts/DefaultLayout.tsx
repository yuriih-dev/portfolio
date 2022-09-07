import React, { ReactChild, ReactChildren } from 'react';
import Header from '../components/Sections/Header';
import Footer from '../components/Sections/Footer';
import TopBar from '../components/Sections/TopBar';

interface AuxProps {
  children?: ReactChild | ReactChildren | ReactChild[] | ReactChildren[];
  header?: boolean;
}

const DefaultLayout = ({ children, header = true }: AuxProps) => {
  return (
    <div className="h-100 flex-column">
      <TopBar />
      {header && <Header />}
      <div
        style={{
          paddingTop: 18
        }}
      >
        {children}
      </div>
      <Footer />
    </div>
  );
};

export default DefaultLayout;
