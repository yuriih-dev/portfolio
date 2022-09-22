/** @jsx jsx */
import { jsx } from '@emotion/react';
import AspectView from '../elements/AspectView';

import havviImage from '../../assets/images/projects/havvi.png';

export default function Havvi() {
  return (
    <a className="project-item" href="https://apps.apple.com/tt/app/havvi-fitness-home-workouts/id1577812599" target="_blank" rel="noopener noreferrer">
      <AspectView ratio={2}>
        <img src={havviImage} alt="Havvi" />
      </AspectView>
      <div className="p-1">
        <h3>Havvi</h3>
        <p className="text-blue">Fitness Service App</p>
        <div className="description">
          Mobile Application where users can filter, search fitness workouts by categories, creator and more factors they like. Users can schedule with a pre-defined workouts train
          list and get notification for it. Also they can bookmark the contents they like and share it with others.
        </div>
        <div className={'flex-wrap'} style={{ marginTop: 'auto' }}>
          <span className="badge badge-green">React</span>
          <span className="badge badge-green">Expo</span>
          <span className="badge badge-green">Firebase</span>
          <span className="badge badge-green">GCP</span>
          <span className="badge badge-green">Stripe</span>
        </div>
      </div>
    </a>
  );
}
