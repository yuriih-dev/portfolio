/** @jsx jsx */
import { css, jsx } from '@emotion/react';
import { CheckCircleOutline } from '../Icons';

export default function AboutMe() {
  return (
    <div css={styles} className="container" id="about-me">
      <h3>Summary</h3>
      <p>
        I am a full stack software engineer with 7 years of experience in building website and mobile applications using different technical stacks. My strongest language is
        Javascript/Typescript and most experienced with MERN/MEAN stack, LAMP/LEMP stack. I have also a little bit of mobile application development experience using React
        Native/Expo. My favorite languages are React.JS, Laravel, Vue.JS, Node.JS and Typescript.
      </p>
      <h3>Professionalism</h3>
      <div className="skill-item">
        <CheckCircleOutline />
        <span className="skill-name">Good understanding of project architecture and software development processes</span>
      </div>

      <div className="skill-item">
        <CheckCircleOutline />
        <span className="skill-name">Ability to understand business requirements and translate them into technical requirements</span>
      </div>

      <div className="skill-item">
        <CheckCircleOutline />
        <span className="skill-name">Responsibility for implementing features, provide bug fixes, reviewing code quality.</span>
      </div>

      <div className="skill-item">
        <CheckCircleOutline />
        <span className="skill-name">Strong communication and team collaboration</span>
      </div>

      <div className="skill-item">
        <CheckCircleOutline />
        <span className="skill-name">Excellent problem-solving and analytical skills, Full-time availability</span>
      </div>

      <div className="skill-item">
        <CheckCircleOutline />
        <span className="skill-name">A fast learner keeping up-to-date with lates technologies and a good problem-solver.</span>
      </div>
    </div>
  );
}

const styles = css`
  width: 96%;
  margin: auto;
  .skill-item {
    display: flex;
    margin-bottom: 8px;
    .icon {
      margin-right: 20px;
      fill: #389838d8;
    }
  }
`;
