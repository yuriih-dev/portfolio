/** @jsx jsx */
import { css, jsx } from '@emotion/react';
import SocialGroup from '../elements/SocialGroup';

export default function Hero() {
  return (
    <div css={styles} id="home">
      <div className="container">
        <h2>Yurii Herula</h2>
        <h3>Full Stack Software Engineer</h3>
        <SocialGroup />
        <hr style={{ height: 1, backgroundColor: '#ffffff7f', border: 'none', margin: '10px 0' }} />
        <div style={{ display: 'flex', alignItems: 'center' }}>
          {[
            { label: 'Backend Development', count: '5 years' },
            { label: 'Frontend Development', count: '7 years' },
            { label: 'Mobile Development', count: '+4 years' }
          ].map((item, index) => (
            <div key={index} style={{ display: 'flex', flexDirection: 'column', marginRight: 20 }}>
              <span style={{ fontWeight: 300, color: '#ffffff' }}>{item.count}</span>
              <small style={{ fontWeight: 100, color: '#ffffff9f' }}>{item.label}</small>
            </div>
          ))}
        </div>
      </div>
      <svg width="0" height="0">
        <defs>
          <clipPath id="myCurve" clipPathUnits="objectBoundingBox">
            <path
              d="M 0,1
              L 0,0
              L 1,0
              L 1,.8
              C .5 .8, .7 1, 0 1
              Z"
            />
          </clipPath>
        </defs>
      </svg>
    </div>
  );
}

const styles = css`
  width: 100%;
  margin: auto;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: right;
  min-height: 300px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  color: white;
  background-color: #12345689;
  clip-path: ellipse(85% 100% at 50% 0%);
  clip-path: url(#myCurve);
`;
