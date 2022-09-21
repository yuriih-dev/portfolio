/** @jsx jsx */
import { css, jsx } from '@emotion/react';
import AspectView from '../elements/AspectView';

import havviImage from '../../assets/images/projects/havvi.png';

export default function Projects() {
  return (
    <div css={styles} className="container" id="projects">
      <h3>A few of my projects</h3>
      <div>
        <h3>Havvi</h3>
        <div className="project-wrapper">
          <div className="project-item">
            <AspectView ratio={2}>
              <img src={havviImage} alt="Havvi" />
            </AspectView>
            <div className="p-1">
              <div className="description">project description</div>
              <div className={'flex-wrap'} style={{ marginTop: 'auto' }}>
                <span className="badge badge-green">React</span>
              </div>
            </div>
          </div>
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
    background-color: #555555;
    height: inherit;
    display: flex;
    flex-direction: column;
    border-radius: 4px;
    cursor: pointer;

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
