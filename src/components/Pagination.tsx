/** @jsx jsx */
import { jsx } from '@emotion/react';
import React, { useEffect, useState } from 'react';

import useResizeObserver from '@react-hook/resize-observer';
import { css } from '@emotion/react';

const useSize = (target: any) => {
  const [size, setSize] = React.useState();

  React.useLayoutEffect(() => {
    setSize(target.current.getBoundingClientRect());
  }, [target]);

  // Where the magic happens
  useResizeObserver(target, (entry: any) => setSize(entry.contentRect));
  return size;
};

export const Pagination: React.FC<{ onPaginate: Function | undefined; totalPage: number }> = (props): JSX.Element => {
  const { onPaginate, totalPage = 1 } = props;

  const [currentPage, setCurrentPage] = useState<number>(1);

  const [paginateBarLength] = useState<number>(7);

  const target = React.useRef(null);
  const size = useSize(target);

  useEffect(() => {
    console.log(size);
  }, [size]);

  useEffect(() => {
    if (typeof onPaginate === 'function') {
      onPaginate(currentPage);
    }
  }, [currentPage, onPaginate]);

  const goToNextPage = (): void => {
    if (currentPage < totalPage) {
      setCurrentPage((page) => page + 1);
    }
  };

  const goToPreviousPage = (): void => {
    if (currentPage > 1) {
      setCurrentPage((page) => page - 1);
    }
  };

  const changePage = (event: any): void => {
    const pageNumber = Number(event.target.textContent);
    setCurrentPage(pageNumber);
  };

  return (
    <div css={styles} className="w-100 flex-end" ref={target}>
      <nav className="flex-row" aria-label="Pagination">
        <div onClick={goToPreviousPage} className="prev">
          <span>Prev</span>
        </div>

        {Array.from({ length: totalPage }).map((_, index) => {
          const page = index + 1;

          const className = page === currentPage ? 'active item' : 'item';

          if (page < currentPage - (currentPage % Math.floor(paginateBarLength / 2)) && page < totalPage - paginateBarLength) {
            return null;
          }

          return (
            <div onClick={changePage} key={page.toString()} className={className}>
              {page}
            </div>
          );
        })}

        <div onClick={goToNextPage} className={'next'}>
          <span>Next</span>
        </div>
      </nav>
    </div>
  );
};

const styles = css`
  margin-bottom: 60px;
  margin-top: 30px;

  .prev,
  .next,
  .item {
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    background-color: white;
    margin: 1px;
    height: 30px;
  }

  .prev,
  .next {
    padding: 0 5px;
  }

  .item {
    width: 30px;

    &.active {
      background-color: green;
      color: white;
      border-radius: 4px;
    }
  }
`;
