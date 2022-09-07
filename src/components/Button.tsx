/** @jsx jsx */
import { jsx } from '@emotion/react';
import { ButtonHTMLAttributes, Fragment } from 'react';
import theme from '../styles/theme';
import { SerializedStyles, css } from '@emotion/react';

import LoadingIcon from './Icons/LoadingIcon';

export interface ButtonProps extends ButtonHTMLAttributes<HTMLButtonElement> {
  extraCss?: SerializedStyles | SerializedStyles[];
  loadingCss?: SerializedStyles | SerializedStyles[];
  large?: boolean;
  link?: boolean;
  loadingColor?: string;
  full?: boolean;
  wide?: boolean;
  secondary?: boolean;
  submitting?: boolean;
  transparent?: boolean;
}

export default function Button({
  children,
  className,
  extraCss,
  loadingCss,
  large,
  link,
  loadingColor = theme.colors.text,
  full,
  wide,
  secondary,
  submitting,
  transparent,
  ...props
}: ButtonProps) {
  const classNames = [className, 'btn'].filter(Boolean);
  if (large) {
    classNames.push('btn-large');
  }
  if (full) {
    classNames.push('btn-full');
  }
  if (wide) {
    classNames.push('btn-wide');
  }
  if (secondary) {
    classNames.push('btn-secondary');
  }
  if (submitting) {
    classNames.push('btn-submitting');
  }
  if (transparent) {
    classNames.push('btn-transparent');
  }
  if (link) {
    classNames.push('btn-link');
  }
  return (
    <button css={extraCss} className={classNames.join(' ')} {...props}>
      {submitting ? (
        <Fragment>
          <div style={{ visibility: 'hidden' }}>{children}</div>
          <LoadingIcon extraCss={[styles.loading].concat(loadingCss!)} color={loadingColor} />
        </Fragment>
      ) : (
        children
      )}
    </button>
  );
}

const styles = {
  loading: css`
    position: absolute;
    margin: 0 !important;
  `
};
