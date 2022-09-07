/** @jsx jsx */
import { jsx, css } from '@emotion/react';
import { useEffect, useState } from 'react';
import theme from '../../styles/theme';

let timer: number;
export default function Counter() {
  const [count, setCount] = useState<number>(0);

  const startTimer = () => {
    timer = window.setInterval(increase, 1000);
  };

  useEffect(() => {
    return () => {
      stopTimer();
    };
  }, []);

  const increase = () => {
    setCount((prevState) => prevState + 1);
  };

  const stopTimer = () => {
    window.clearInterval(timer);
  };
  return (
    <div css={styles}>
      <div className="timer">
        <h1>{count}</h1>
        <div>
          <button onClick={startTimer}>Start</button>
          <button onClick={stopTimer}>Stop</button>
        </div>
      </div>
    </div>
  );
}

const styles = css`
  .timer {
    margin: 2em auto;
    width: 300px;
    height: 300px;
    background-color: #dd4814;
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
  }

  h1 {
    font-size: 4em;
  }

  button {
    background-color: white;
    color: black;
    border: none;
    border-radius: 0.4em;
    margin: 0 1em;
    padding: 0.5em;
    display: inline-block;
    cursor: pointer;

    &:hover {
      background-color: ${theme.colors.primary};
      color: white;
    }
  }
`;
