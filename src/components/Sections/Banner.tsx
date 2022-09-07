/** @jsx jsx */
import { css, jsx } from '@emotion/react';
import theme from '../../styles/theme';

export default function Banner({ title }: { title?: string }) {
  return (
    <div css={styles}>
      <div className="container">
        <h2>{title || ''}</h2>
      </div>
    </div>
  );
}

const styles = css`
  width: 100%;
  margin: auto;

  background-image: url(/images/docs.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: right;
  min-height: 200px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  color: white;

  ${theme.MOBILE_MEDIA_QUERY} {
    min-height: 100px;
  }
`;
