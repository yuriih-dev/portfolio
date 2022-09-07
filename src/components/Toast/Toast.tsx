/** @jsx jsx */
import { jsx, css } from '@emotion/react';
import { useEffect, memo } from 'react';
import theme from '../../styles/theme';

export interface ToastProps {
  id: string;
  destroy: () => void;
  content: string;
  type?: 'default' | 'success' | 'warning' | 'error' | 'info';
  duration?: number;
  icon?: JSX.Element;
}

function Toast({ destroy, content, icon, type, duration = 3000 }: ToastProps) {
  useEffect(() => {
    if (!duration) return;

    const timer = setTimeout(() => {
      destroy();
    }, duration);

    return () => clearTimeout(timer);
  }, [destroy, duration]);

  return (
    <div css={styles}>
      <div className={`toast-wrapper ${type}`}>
        <div className="toast-body">
          {icon}
          <span className="toast-msg text-sm">{content}</span>
        </div>
      </div>
    </div>
  );
}

const shouldRerender = (prevProps: ToastProps, nextProps: ToastProps) => {
  return prevProps.id === nextProps.id;
};

export default memo(Toast, shouldRerender);

const styles = css`
  display: flex;
  justify-content: center;
  align-items: center;

  .toast-wrapper {
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 8px 16px;
    animation: slide-in 0.2s;
    transition: transform 0.3s ${theme.styles.transitionEasing};
    border-radius: 7px;

    &.default {
      background-color: #232e21;
      color: white;

      .icon {
        color: white;
        stroke: white;
        fill: white;
        width: 16px;
        height: 16px;
      }
    }

    &.success {
      background: linear-gradient(90deg, #27288a 0%, #a36df6 100%);
      color: white;

      .icon {
        color: white;
        stroke: white;
        fill: white;
        width: 16px;
        height: 16px;
      }
    }

    &.error {
      background-color: ${theme.colors.error};
      color: white;

      .icon {
        color: white;
        stroke: white;
        fill: white;
        width: 16px;
        height: 16px;
      }
    }

    &.info {
      background-color: #00cef7;
      color: white;

      .icon {
        color: white;
        stroke: white;
        fill: white;
        width: 16px;
        height: 16px;
      }
    }

    &.warning {
      background-color: #f7b500;
      color: white;

      .icon {
        color: white;
        stroke: white;
        fill: white;
        width: 16px;
        height: 16px;
      }
    }

    .toast-body {
      display: flex;
      align-items: center;
      gap: 8px;
    }
  }

  @keyframes slide-in {
    from {
      transform: translateX(30px);
      opacity: 0;
    }
    to {
      transform: translateX(0px);
      opacity: 1;
    }
  }
`;
