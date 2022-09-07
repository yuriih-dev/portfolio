/** @jsx jsx */
import { jsx } from '@emotion/react';
import theme from '../styles/theme';
import { ChangeEvent, FunctionComponent, InputHTMLAttributes } from 'react';

import { InputOnChangeProps } from '../types';
import { TimesIcon } from './Icons';
import { css } from '@emotion/react';

interface Props extends Omit<InputHTMLAttributes<HTMLInputElement | HTMLTextAreaElement>, 'onChange'> {
  error?: string;
  value: string | number;
  name?: string;
  label?: string;
  multiline?: boolean;
  rows?: number;
  onChange: ({ name, value }: InputOnChangeProps) => void;
}

const Input: FunctionComponent<Props> = ({ error, name, onChange, value, className, label, multiline = false, rows = 5, ...rest }) => {
  const handleChange = (event: ChangeEvent<HTMLInputElement | HTMLTextAreaElement>) => {
    onChange({
      name: name,
      value: event.target.value
    });
  };

  const handleClear = () => {
    onChange({
      name: name,
      value: ''
    });
  };

  return (
    <div css={styles}>
      {label && <label>{label}</label>}
      <div className={'input-wrapper ' + className}>
        {multiline ? (
          <textarea className={`input ${error ? 'error' : ''}`} onChange={handleChange} value={value} rows={rows} {...rest}>
            {value}
          </textarea>
        ) : (
          <input className={`input ${error ? 'error' : ''}`} onChange={handleChange} value={value} {...rest} />
        )}
        {value && (
          <div className="clear-btn" onClick={handleClear}>
            <TimesIcon />
          </div>
        )}
      </div>
      {error && <small className="error">{error}</small>}
    </div>
  );
};

export default Input;

const styles = css`
  display: flex;
  flex-direction: column;
  width: 100%;

  label {
    margin-bottom: 10px;
  }

  .input-wrapper {
    position: relative;

    .clear-btn {
      position: absolute;
      right: 8px;
      padding: 8px;
      display: flex;
      top: 21px;
      transform: translateY(-50%);
      cursor: pointer;

      .icon {
        width: 10px;
        height: 10px;
      }
    }

    .input {
      border: ${theme.styles.border};
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.15) inset;
      padding-right: 42px;

      &:focus {
        outline: none;
        box-shadow: ${theme.styles.boxShadow};
      }

      &::placeholder {
        color: ${theme.colors.textLight};
      }

      /* Remove arrow indicator for number input */

      /* Chrome, Safari, Edge, Opera */

      &::-webkit-outer-spin-button,
      &::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }

      /* Firefox */

      &[type='number'] {
        -moz-appearance: textfield;
      }
    }
  }

  small {
    margin-left: 20px;
  }
`;
