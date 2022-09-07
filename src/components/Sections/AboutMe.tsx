/** @jsx jsx */
import { css, jsx } from '@emotion/react';

export default function AboutMe() {
  return (
    <div css={styles} className="container" id="about-me">
      <h3>About me</h3>
      <p>
        I'm Liu XianRu(刘贤茹),  an Chinese Software Architect and Full-Stack Developer, with a strong attitude to Growth Hacking.
      </p>
      <p>
        I'm graduated in Computer Science, and I have more than 10 years of experience in web/mobile development plus acquired skills in Marketing and Product Ownership.
        I love to think about myself as a perfectionist: in my opinion, at the base of a solid product, there must be concepts like scalability, security, maintainability and a perfect UI/UX design, but all of them need to receive the right priority to make sure an MVP oriented development process could be followed.
        I approach everything Agile and with my team I refined a new SCRUM like methodology that allows us to be super-precise, delivering on time and following high standard of coding thanks to many micro iterations of 1 or 2 weeks each.
        Native Chinese, business English.
      </p>
      <p>
        Main coding skills: Javascript, React.js, React-Native, Redux + Saga, GraphQL, Node.js, Express.js, Typescript, Jest, Enzyme, docker, kubernetes.
        Growth Hacking: from brainstorming and research to MVP development, data collection, measurement and analysis, to rethink and tweaks learning from data acquired.
        Others coding skills: PHP, HTML, CSS, Wordpress, Python, jQuery
        Tools: GIT, JIRA, Roundrush, Confluence, Slack, Asana, Figma, Roadmaps etc.
        2+ Years exp. on blockchain, cryptocurrency, e-wallets, money exchange, bitcoin, cryptography, hashing, ETH, BTC
      </p>
    </div>
  );
}

const styles = css`
  width: 96%;
  margin: auto;
`;
