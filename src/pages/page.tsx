/** @jsx jsx */
import { css, jsx } from '@emotion/react';
import DefaultLayout from '../layouts/DefaultLayout';

export const Page = () => {
  return (
    <DefaultLayout>
      <div css={styles}></div>
    </DefaultLayout>
  );
};

export default Page;

const styles = css`
  .hero {
    width: 100%;
    position: relative;
  }
`;
