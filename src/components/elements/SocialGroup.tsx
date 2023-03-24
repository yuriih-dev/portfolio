/** @jsx jsx */
import { jsx, css } from "@emotion/react";
import LinkedInIcon from "../Icons/LinkedInIcon";
import GithubIcon from "../Icons/GithubIcon";
import TwitterIcon from "../Icons/TwitterIcon";

const linkedin = "https://www.linkedin.com/in/yurii-herula/";
const github = "https://github.com/yuriih-dev";
const twitter = "https://twitter.com/yuriiherula";

export default function SocialGroup() {
  return (
    <div css={styles}>
      <a href={linkedin} target="_blank" rel="noopener noreferrer" >
        <LinkedInIcon />
      </a>
      <a href={github} target="_blank" rel="noopener noreferrer" >
        <GithubIcon />
      </a>
      <a href={twitter} target="_blank" rel="noopener noreferrer" >
        <TwitterIcon />
      </a>
    </div>
  );
}

const styles = css`
  display: flex;
  align-items: center;
  flex-direction: row;

  a {
    display: flex;
    width: 24px;
    height: 24px;
    background-color: white;
    justify-content: center;
    align-items: center;
    border-radius: 4px;
    margin-right: 10px;
  }
`;
