import React, { HTMLAttributes } from 'react';

interface Props extends HTMLAttributes<HTMLElement> {
  width?: string;
  height?: string;
  color?: string;
}

const Divider = ({ width = '100%', height = '1px', color = '#00000012', ...rest }: Props) => {
  return (
    <div
      style={{
        width,
        height,
        backgroundColor: color
      }}
      {...rest}
    />
  );
};

export default Divider;
