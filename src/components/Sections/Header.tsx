/** @jsx jsx */
import { jsx } from '@emotion/react';
import theme from '../../styles/theme';

import { css } from '@emotion/react';
import { useScreen } from '../../utils/hooks';

import { useScroll } from '../../utils/hooks';
import Button from '../Button';

export default function Header() {
  const { isMobile } = useScreen();
  const { top } = useScroll();

  return (
    <header css={styles} data-background={top > 50}>
      <div className="container header">
        <div className="logoWrap"></div>
        <div className=" menuWrap">
          <a href="" target="_blank">
            <Button transparent={isMobile} secondary={isMobile} className={'btn-create-new'}>
              <span className="createButtonTitle">View CV</span>
            </Button>
          </a>
        </div>
      </div>
    </header>
  );
}

const styles = css`
  background-color: #00000000;
  transition: background-color 0.5s ${theme.styles.transitionEasing};
  color: white;
  fill: white;
  height: 60px;

  &[data-background='true'] {
    background-color: #303030;
    transition: background-color 0.5s ${theme.styles.transitionEasing};
    box-shadow: ${theme.styles.boxShadow};
    color: black;
    fill: black;
  }

  .header {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    text-align: center;
    width: 100%;
    margin: auto;
    align-items: center;

    ${theme.MOBILE_MEDIA_QUERY} {
      justify-content: center;
    }

    .mobile-menu-toggle {
      display: none;
      position: absolute;
      left: 15px;
      padding: 4px;
      top: 20px;

      ${theme.MOBILE_MEDIA_QUERY} {
        display: block;
      }
    }
  }

  .logoWrap {
    width: max-content;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;

    ${theme.DEFAULT_MEDIA_QUERY} {
      overflow: hidden;
    }
  }

  .title {
    font-size: 1.6rem;
    color: white;

    ${theme.DEFAULT_MEDIA_QUERY} {
      font-size: 1rem;
    }
  }

  &[data-background='true'] {
    .title {
      color: black;
    }
  }

  .logo {
    width: 45px;
    height: 26px;
    margin-right: 10px;

    ${theme.MIN_DEFAULT_MEDIA_QUERY} {
      object-fit: contain;
      height: 35px;
    }
  }

  .menuWrap {
    display: flex;
    flex-direction: row;
    align-items: center;

    & > * {
      margin-left: 30px;

      ${theme.DEFAULT_MEDIA_QUERY} {
        margin-left: 15px;
      }
    }

    ${theme.MOBILE_MEDIA_QUERY} {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background-color: ${theme.colors.primary};
      z-index: 100;
      flex-direction: column;
      padding: 8% 0;
      transform: translateY(-100vh);
      transition: transform 0.2s ease-in;

      &.open {
        transform: translateY(0);
        transition: all 0.3s ease-out;
      }

      & > * {
        margin-left: 0;
      }

      .btn-create-new {
        margin-top: auto;
        width: 84%;
      }
    }

    .close-menu-wrap {
      width: 100%;
      justify-content: flex-end;
      display: flex;
      z-index: 3;

      .close-menu {
        line-height: 50px;
        color: ${theme.colors.yellow};
        margin-right: 8%;
      }
    }
  }

  .createButtonTitle {
    margin-left: 5px;
  }
`;
