/** @jsx jsx */
import { css, jsx } from '@emotion/react';
import theme from '../../styles/theme';

export default function Footer() {
  return (
    <footer css={styles.footer}>
      <div className="container">
        <div className="footer-container">
          <span className="text-sm">Copyright © {new Date().getUTCFullYear()} Alek Smith</span>
          <div className="footer-link-wrapper">
            <a href="/#home">
              <span className="footer-link text-bold text-white">Home</span>
            </a>
            <a href="/#projects">
              <span className="footer-link text-bold text-white">Projects</span>
            </a>
            <a href="/#skills">
              <span className="footer-link text-bold text-white">Skills</span>
            </a>
            <a href="/#contact-me">
              <span className="footer-link text-bold text-white">Contact Me</span>
            </a>
          </div>
        </div>
      </div>
    </footer>
  );
}

const styles = {
  footer: css`
    margin-top: auto;
    border-top: ${theme.styles.border};
    background-color: #303030;
    position: relative;
    z-index: 10002;

    .footer-container {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      padding: 8px 0;

      ${theme.DEFAULT_MEDIA_QUERY} {
        flex-direction: column;
        justify-content: center;

        .footer-link-wrapper {
          margin: 12px 0;
        }
      }

      .footer-link-wrapper {
        display: flex;
        align-items: center;
        gap: 16px;

        .footer-link {
          cursor: pointer;
          color: ${theme.colors.text};
        }

        ${theme.MOBILE_MEDIA_QUERY} {
          flex-direction: column;
          justify-content: center;
        }
      }
    }
  `
};
