/** @jsx jsx */
import { css, jsx } from '@emotion/react';
import { CheckCircleOutline } from '../Icons';

const skills = [
  'PHP',
  'HTML, HTML5',
  'CSS',
  'Bootstrap, Jquery, TailwindCSS',
  'Alpin.JS',
  'Laravel',
  'React.JS',
  'Vue.JS',
  'Android(java)/Swift',
  'Flutter',
  'React Native',
  'Node.JS',
  'Javascript',
  'Python',
  'SASS/SCSS',
  'TALL, LAMP/LEMP Stack',
  'MEAM, MERM Stack',
  'API Development / Integration',
  'Laravel Forge, Envoyer, Spark, Vapor',
  'Stripe, Paypal Payment gateway Integration',
  'AWS EC2, S3, Lambda, DynamoDB, Elasticache, CloudFront, RDS',
  'MySQL, PostgreSQL, MongoDB',
  'Firebase Realtime/Firestore',
  'Server Security, Performance Management, LoadBalancing System',
  'GraphQL/Apollo'
];

export default function Skills() {
  return (
    <div css={styles} className="container" id="skills">
      <h3>Technical Skills</h3>
      <div className="row">
        {skills.map((skill) => (
          <div className="col-lg-3" key={skill}>
            <div className="skill-item">
              <CheckCircleOutline />
              <span className="skill-name">{skill}</span>
            </div>
          </div>
        ))}
      </div>
    </div>
  );
}

const styles = css`
  width: 96%;
  margin: auto;
  .skill-item {
    display: flex;
    .icon {
      margin-right: 20px;
      fill: #389838d8;
    }
  }
`;
