import { useState, useEffect } from 'react';

const MOBILE_WIDTH = 576;
const TABLET_WIDTH = 786;

interface ScreenTypes {
  width: number;
  height: number;
  isMobile?: boolean;
  isDesktop?: boolean;
  isTablet?: boolean;
}

export function useScreen() {
  const [screen, setScreen] = useState<ScreenTypes>({
    width: 0,
    height: 0,
    isMobile: undefined,
    isDesktop: undefined,
    isTablet: undefined
  });

  useEffect(() => {
    function handleResize() {
      setScreen({
        width: window.innerWidth,
        height: window.innerHeight,
        isMobile: MOBILE_WIDTH > window.innerWidth,
        isDesktop: MOBILE_WIDTH < window.innerWidth,
        isTablet: MOBILE_WIDTH < window.innerWidth && window.innerWidth < TABLET_WIDTH
      });
    }

    window.addEventListener('resize', handleResize);

    handleResize();

    return () => window.removeEventListener('resize', handleResize);
  }, []);

  return screen;
}
