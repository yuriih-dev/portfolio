import React from 'react';
import AspectView from '../elements/AspectView';

import apollofactorImage from '../../assets/images/projects/apollofactor.png';

const Apollofactor = () => {
  return (
    <a className="project-item" href="https://hitpiece.com" target="_blank" rel="noopener noreferrer">
      <AspectView ratio={2}>
        <img src={apollofactorImage} alt="Havvi" />
      </AspectView>
      <div className="p-1">
        <h3>CompEdge™</h3>
        <p className="text-blue">SaaS</p>
        <div className="description">
          CompEdge™ is a retention management platform built on employee experience, compensation and team feedback, providing real-tiem compensation, salay data.
        </div>
        <div className={'flex-wrap'} style={{ marginTop: 'auto' }}>
          <span className="badge badge-green">Ionic/Angular</span>
          <span className="badge badge-green">Next.js</span>
          <span className="badge badge-green">Deno</span>
          <span className="badge badge-green">Express</span>
          <span className="badge badge-green">MongoDB</span>
          <span className="badge badge-green">Docker</span>
          <span className="badge badge-green">Degital Ocean</span>
        </div>
      </div>
    </a>
  );
};

export default Apollofactor;
