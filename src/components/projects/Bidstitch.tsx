import React from 'react';
import AspectView from '../elements/AspectView';

import apollofactorImage from '../../assets/images/projects/apollofactor.png';

const Bidstitch = () => {
  return (
    <a className="project-item" href="https://hitpiece.com" target="_blank" rel="noopener noreferrer">
      <AspectView ratio={2}>
        <img src={apollofactorImage} alt="Havvi" />
      </AspectView>
      <div className="p-1">
        <h3>Bidstitch</h3>
        <p className="text-blue">Online Marketplace</p>
        <div className="description">Online Marketplace Website for sellers and buyers. Built custom wordpress theme using roots/sage WP starter theme and dokan plugin</div>
        <div className={'flex-wrap'} style={{ marginTop: 'auto' }}>
          <span className="badge badge-green">Ecommerce</span>
          <span className="badge badge-green">MySQL</span>
          <span className="badge badge-green">SaaS</span>
          <span className="badge badge-green">Web Design</span>
          <span className="badge badge-green">Wordpress</span>
        </div>
      </div>
    </a>
  );
};

export default Bidstitch;
