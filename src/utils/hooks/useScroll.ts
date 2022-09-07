import { useEffect, useState } from 'react';

interface ScrollTye {
  top: number;
}

export function useScroll(callback?: ({ top }: { top: number }) => void): ScrollTye {
  const [top, setTop] = useState<number>(0);

  useEffect(() => {
    function handleScroll() {
      setTop(window.scrollY);

      if (typeof callback === 'function') {
        callback({ top: window.scrollY });
      }
    }

    window.addEventListener('scroll', handleScroll);

    return () => {
      window.removeEventListener('scroll', handleScroll);
    };
  }, [callback]);

  return {
    top
  };
}
