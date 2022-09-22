/** @jsx jsx */
import { jsx } from '@emotion/react';
import AspectView from '../elements/AspectView';

import image from '../../assets/images/projects/5.png';

export default function VectorGirl() {
  return (
    <a className="project-item" href="https://vectorgirl.com/" target="_blank" rel="noopener noreferrer">
      <AspectView ratio={2}>
        <img src={image} alt="Havvi" />
      </AspectView>
      <div className="p-1">
        <h3>Vector Girl</h3>
        <p className="text-blue">Business Website</p>
        <div className="description">
          This website provides a lot of free &amp; premium vectors. Membership management, role based authentication systems. It's built with Laravel.
        </div>
        <div className={'flex-wrap'} style={{ marginTop: 'auto' }}>
          <span className="badge badge-green">Alpine.JS</span>
          <span className="badge badge-green">MySQL</span>
          <span className="badge badge-green">Vue.JS</span>
          <span className="badge badge-green">Laravel</span>
          <span className="badge badge-green">Stripe</span>
          <span className="badge badge-green">Paypal</span>
        </div>
      </div>
    </a>
  );
}
