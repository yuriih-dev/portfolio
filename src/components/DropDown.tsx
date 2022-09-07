/** @jsx jsx */
import { jsx } from '@emotion/react';
import theme from '../styles/theme';

import { HTMLAttributes, forwardRef, useImperativeHandle, useRef, useState } from 'react';
import { useOutSideClick, useScreen } from '../utils/hooks';

import { css } from '@emotion/react';

interface DropDownProps extends HTMLAttributes<HTMLElement> {
  header: ((open?: boolean) => JSX.Element) | JSX.Element | HTMLElement;
  list: ((open?: boolean) => JSX.Element) | JSX.Element | HTMLElement;
  responsiveFull?: boolean;
  enableHoverOpen?: boolean;
  listWidth?: number | string;
  onOpen?: () => void;
  onClose?: () => void;
  closeOutsideClick?: boolean;
  listOffsetTop?: number;
  align?: string;
  animation?: boolean;
}

const DropDown = forwardRef(
  (
    {
      list,
      header,
      responsiveFull = true,
      enableHoverOpen = false,
      listWidth = 250,
      onClose,
      onOpen,
      closeOutsideClick = true,
      listOffsetTop = 5,
      align,
      animation = true,
      ...rest
    }: DropDownProps,
    ref
  ) => {
    const menuItemRef = useRef<HTMLDivElement>(null);
    const [isOpen, setIsOpen] = useState<boolean>(false);
    const { isMobile } = useScreen();
    const toggle = () => {
      if (isOpen) {
        close();
      } else {
        open();
      }
    };
    useImperativeHandle(ref, () => ({
      open() {
        setIsOpen(true);
      },
      close() {
        setIsOpen(false);
      }
    }));
    const open = () => {
      setIsOpen(true);
      if (typeof onOpen === 'function') {
        onOpen();
      }
    };
    const close = () => {
      setIsOpen(false);
      if (typeof onClose === 'function') {
        onClose();
      }
    };

    useOutSideClick(
      menuItemRef,
      () => {
        if (closeOutsideClick) {
          close();
        }
      },
      enableHoverOpen
    );

    const listStyle = () => {
      let alignment = 'left: 0;';
      if (align === 'right') {
        alignment = 'right: 0;';
      }
      if (isOpen) {
        let marginTop = listOffsetTop;
        if (isMobile && responsiveFull) {
          marginTop = 0;
        }
        return css`
          width: ${listWidth}px;
          margin-top: ${marginTop}px !important;
          ${alignment}
        `;
      }
      return css`
        width: ${listWidth}px;
        ${alignment}
      `;
    };
    return (
      <div css={styles} ref={menuItemRef} onClick={toggle} data-open={isOpen} data-responsive-full={responsiveFull} {...rest}>
        {typeof header === 'function' ? header(isOpen) : header}
        <ul onMouseLeave={close} data-open={isOpen} css={listStyle()} data-responsive-full={responsiveFull} data-animation={animation}>
          {typeof list === 'function' ? list(isOpen) : list}
        </ul>
      </div>
    );
  }
);

DropDown.displayName = 'DropDown';

export default DropDown;

const styles = css`
  display: block;
  cursor: pointer;
  position: relative;
  z-index: 2;

  &[data-responsive-full='true'] {
    ${theme.MOBILE_MEDIA_QUERY} {
      width: 100%;
    }
  }

  ul {
    padding: 0;
    z-index: 4;
    pointer-events: none;
    overflow: hidden;

    ${theme.MIN_MOBILE_MEDIA_QUERY} {
      position: absolute;
      opacity: 0;
      background-color: white;
      box-shadow: ${theme.styles.boxShadow};
      margin-top: 30px;
      border-radius: 7px;

      &[data-animation='true'] {
        transition: transform 0.2s ${theme.styles.transitionEasing};
      }
    }

    &[data-responsive-full='true'] {
      ${theme.MOBILE_MEDIA_QUERY} {
        width: 100vw;
        height: 100vh;
        background-color: ${theme.colors.primary};
        position: fixed;
        left: 0;
        top: 0;
        transform: translateX(-100%);
        padding-top: 24%;

        &[data-animation='true'] {
          transition: transform 0.2s ${theme.styles.transitionEasing};
        }
      }
    }

    &[data-open='true'] {
      opacity: 1;
      pointer-events: auto;

      &[data-animation='true'] {
        transition: transform 0.2s ${theme.styles.transitionEasing};
      }
    }
  }
`;
