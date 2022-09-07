/** @jsx jsx */
import { css, jsx } from '@emotion/react';
import { useScreen } from '../../utils/hooks';
import theme from '../../styles/theme';

export default function TopBar() {
  const { isMobile } = useScreen();

  return (
    <div css={styles}>
      <span hidden={isMobile}>Contact Me</span>
      <a href="tel:+16612280244">(661) 228-0244</a>
      <a href="mailto:wyanou213@163.com">bhupaudel0@gmail.com</a>
    </div>
  );
}

const styles = css`
  position: fixed;
  top: 0;
  background-color: #389838;
  width: 100vw;
  height: 18px;
  padding: 2px 30px;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  z-index: 10002;
  font-weight: 200;

  ${theme.MOBILE_MEDIA_QUERY} {
    padding: 2px 10px;
  }

  span {
    margin-right: 20px;
    font-size: 14px;
    color: white;
  }
  a,
  small {
    color: white;
    padding: 0 10px;
    line-height: 14px;
    border-left: solid 1px white;
  }
`;
