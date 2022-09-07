/** @jsx jsx */
import { css, jsx } from '@emotion/react';
import LoadingIcon from '../Icons/LoadingIcon';

export function Loading() {
  return (
    <div css={styles}>
      <LoadingIcon />
    </div>
  );
}

const styles = css`
  width: 20px;
  height: 24px;
  text-align: center;
  vertical-align: middle;
  margin: auto;
`;
