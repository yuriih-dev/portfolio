/** @jsx jsx */
import { jsx } from '@emotion/react';
import AspectView from '../elements/AspectView';

import freeLogoMakerImage from '../../assets/images/projects/freeLogoMaker.png';

export default function FreeLogoMaker() {
  return (
    <a className="project-item" href="https://freelogomaker.net/" target="_blank" rel="noopener noreferrer">
      <AspectView ratio={2}>
        <img src={freeLogoMakerImage} alt="Havvi" />
      </AspectView>
      <div className="p-1">
        <h3>Free Logo Maker</h3>
        <p className="text-blue">Business Website</p>
        <div className="description">
          This is a logo maker website. Admin can add logo types (SVG) and the customers can build their logos based on different logo types. This is built with Laravel &amp;
          Vue.JS.
        </div>
        <div className={'flex-wrap'} style={{ marginTop: 'auto' }}>
          <span className="badge badge-green">Vue.JS</span>
          <span className="badge badge-green">Laravel</span>
          <span className="badge badge-green">Stripe</span>
          <span className="badge badge-green">Paypal</span>
        </div>
      </div>
    </a>
  );
}
