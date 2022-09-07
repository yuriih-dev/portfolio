/** @jsx jsx */
import { jsx, css } from '@emotion/react';
import { CheckmarkIcon, InfoIcon, SpinIcon, ThumbsUpIcon, CloseIcon } from '../../components/Icons';

import DefaultLayout from '../../layouts/DefaultLayout';
import ToastManager from '../../components/Toast/ToastManager';

export default function Toaster() {
  const defaultToast = () => {
    ToastManager.show({
      content: 'This is default toast',
      icon: <SpinIcon />
    });
  };

  const successToast = () => {
    ToastManager.success({
      content: 'This is success toast',
      icon: <CheckmarkIcon />
    });
  };

  const errorToast = () => {
    ToastManager.error({
      content: 'This is error toast',
      icon: <CloseIcon />
    });
  };

  const infoToast = () => {
    ToastManager.info({
      content: 'This is information toast',
      icon: <InfoIcon />
    });
  };

  const warningToast = () => {
    ToastManager.warning({
      content: 'This is warning toast',
      icon: <ThumbsUpIcon />
    });
  };

  const clearToast = () => {
    ToastManager.clear();
  };

  return (
    <DefaultLayout header={false}>
      <div className="container flex-center" css={style}>
        <button className="default" onClick={defaultToast}>
          Default Toast
        </button>
        <button className="success" onClick={successToast}>
          Success Toast
        </button>
        <button className="error" onClick={errorToast}>
          Error Toast
        </button>
        <button className="warning" onClick={warningToast}>
          Warning Toast
        </button>
        <button className="info" onClick={infoToast}>
          Info Toast
        </button>
        <button className="clear" onClick={clearToast}>
          Clear Toast
        </button>
      </div>
    </DefaultLayout>
  );
}

const style = css`
  flex-direction: column;
  gap: 16px;
  padding-top: 5%;

  button {
    background: #232e21;
    padding: 8px 16px;
    color: white;
    font-weight: 400;
    border-radius: 4px;
    outline: none;
    border: none;

    &.success {
      background: #a36df6;
    }

    &.error {
      background: #f74800;
    }

    &.warning {
      background: #f7b500;
    }

    &.info {
      background: #00cef7;
    }

    &.clear {
      background: #f74800;
      margin-top: 100px;
    }
  }
`;
