/** @jsx jsx */
import { jsx } from '@emotion/react';
import { SVGAttributes } from 'react';
import { SerializedStyles, css } from '@emotion/react';

interface Props extends SVGAttributes<SVGElement> {
  icon: string;
  extraCss?: SerializedStyles | SerializedStyles[];
}

/**
 * These icons are pulled from svg-sprite.svg.
 * To add a new icon, add a new group with an ID to that file.
 */
export default function SVGIcon({ icon, extraCss, ...props }: Props) {
  return (
    <svg css={[styles.icon].concat(extraCss!)} aria-hidden="true" role="presentation" {...props}>
      <use xlinkHref={icon} />
    </svg>
  );
}

const styles = {
  icon: css`
    display: inline-block;
    line-height: 0;
    flex-shrink: 0;
  `
};
