/** @jsx jsx */
import { jsx } from '@emotion/react';
import AspectView from '../elements/AspectView';

import image from '../../assets/images/projects/3.png';

export default function AntiBlackActivityDatabase() {
  return (
    <a className="project-item" href="https://antiblackactivitydatabase.org" target="_blank" rel="noopener noreferrer">
      <AspectView ratio={2}>
        <img src={image} alt="Havvi" />
      </AspectView>
      <div className="p-1">
        <h3>Anti-Black Activity Database</h3>
        <p className="text-blue">Business Website</p>
        <div className="description">
          This website is built with Laravel &amp; D3.JS. Admin and users can add anti-black activities in the panel and in front page, they are displayed on Map data with various
          filter option.
        </div>
        <div className={'flex-wrap'} style={{ marginTop: 'auto' }}>
          <span className="badge badge-green">D3.JS</span>
          <span className="badge badge-green">Laravel</span>
          <span className="badge badge-green">MySQL</span>
          <span className="badge badge-green">Web Design</span>
        </div>
      </div>
    </a>
  );
}
