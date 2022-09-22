/** @jsx jsx */
import { css, jsx } from '@emotion/react';
import AspectView from '../elements/AspectView';

import havviImage from '../../assets/images/projects/havvi.png';
import freeLogoMakerImage from '../../assets/images/projects/freeLogoMaker.png';

export default function Projects() {
  return (
    <div css={styles} className="container" id="projects">
      <h3>My Projects</h3>
      <div>
        <div className="project-wrapper">
          <a className="project-item" href="https://freelogomaker.net/" target="_blank">
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

          <a className="project-item" href="https://apps.apple.com/tt/app/havvi-fitness-home-workouts/id1577812599" target="_blank">
            <AspectView ratio={2}>
              <img src={havviImage} alt="Havvi" />
            </AspectView>
            <div className="p-1">
              <h3>Havvi</h3>
              <div className="description">project description</div>
              <div className={'flex-wrap'} style={{ marginTop: 'auto' }}>
                <span className="badge badge-green">React</span>
                <span className="badge badge-green">Expo</span>
                <span className="badge badge-green">Firebase</span>
                <span className="badge badge-green">GCP</span>
                <span className="badge badge-green">Stripe</span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  );
}

const styles = css`
  width: 96%;
  margin: 30px auto 0 auto;

  .project-wrapper {
    display: grid;
    grid-gap: 12px;
    grid-template-columns: repeat(auto-fill, minmax(360px, 1fr));
  }

  .project-item {
    width: 100%;
    background-color: #333333;
    height: inherit;
    display: flex;
    flex-direction: column;
    border-radius: 4px;
    cursor: pointer;
    color: white;

    img {
      width: 100%;
      object-fit: contain;
      border-radius: 4px;
    }

    .title,
    .links {
      display: flex;
      flex-direction: row;
      align-items: center;
    }

    .links {
      a {
        font-size: 12px;
        border-radius: 4px;
        margin-right: 10px;
        text-decoration: underline;
      }
    }

    .description {
      margin: 10px 0;
    }
  }
`;
