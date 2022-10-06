/** @jsx jsx */
import { css, jsx } from '@emotion/react';
import Havvi from './Havvi';
import FreeLogoMaker from './FreeLogoMaker';
import AntiBlackActivityDatabase from './AntiBlackActivityDatabase';
import Framexperts from './Framexperts';
import VectorGirl from './VectorGirl';
import Hitpiece from './Hitpiece';
import Apollofactor from './Apollofactor';

export default function Projects() {
  return (
    <div css={styles} className="container" id="projects">
      <h3>My Projects</h3>
      <div>
        <div className="project-wrapper">
          <FreeLogoMaker />
          <Hitpiece />
          <Havvi />
          <AntiBlackActivityDatabase />
          <Framexperts />
          <VectorGirl />
          <Apollofactor />
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
      object-fit: cover;
      height: 100%;
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
