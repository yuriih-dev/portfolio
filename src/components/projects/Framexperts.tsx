/** @jsx jsx */
import { jsx } from '@emotion/react';
import AspectView from '../elements/AspectView';

import image from '../../assets/images/projects/4.png';

export default function Framexperts() {
  return (
    <a className="project-item" href="https://framexperts.com/" target="_blank" rel="noopener noreferrer">
      <AspectView ratio={2}>
        <img src={image} alt="Havvi" />
      </AspectView>
      <div className="p-1">
        <h3>Ecommerce</h3>
        <p className="text-blue">Ecommerce</p>
        <div className="description">
          This is frame order website. A customer can order the frames as he wants and see how they look using builder component. Frame builder component was built with Vue.JS and
          admin &amp; front area are built with Laravel.
        </div>
        <div className={'flex-wrap'} style={{ marginTop: 'auto' }}>
          <span className="badge badge-green">Ecommerce</span>
          <span className="badge badge-green">Laravel</span>
          <span className="badge badge-green">Stripe</span>
          <span className="badge badge-green">MySQL</span>
          <span className="badge badge-green">Vue.JS</span>
        </div>
      </div>
    </a>
  );
}
