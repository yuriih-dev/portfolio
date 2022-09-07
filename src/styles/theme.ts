const LARGER_DISPLAY_WIDTH = 1600;
const LARGE_DISPLAY_WIDTH = 1280;
const DEFAULT_WIDTH = 980;
const TABLET_WIDTH = 768;
const MOBILE_WIDTH = 480;

export default {
  LARGER_DISPLAY_WIDTH,
  LARGE_DISPLAY_WIDTH,
  DEFAULT_WIDTH,
  TABLET_WIDTH,
  MOBILE_WIDTH,
  colors: {
    primary: '#0103f3',
    primaryLight: 'rgba(1,3,243,0.42)',
    primaryLighter: '#dddded',
    primaryDark: '#03059f',
    secondary: '#f7f6f3',

    text: '#323e48',
    error: '#f74800',
    textLight: '#373941',
    header: '#2c363f',

    mainBackground: '#f7f7f7',
    codeBackground: '#dddded',

    buttonBackground: '#0103f3',
    buttonBackgroundHover: '#0103f3',

    lightGray: `rgba(0, 0, 0, 0.1)`,
    yellow: '#facc5f',
    green: '#daffcc',
    greenDark: '#228000',

    linkColor: '#0103f3',
    linkVisited: '#0103f3',
    linkHover: '#0103f3',
    linkActive: '#0103f3',

    linkSecondary: '#f7f6f3',
    linkSecondaryVisited: '#f7f6f3',
    linkSecondaryHover: '#f7f6f3',
    linkSecondaryActive: '#f7f6f3'
  },
  styles: {
    boxShadow: '0 0 10px 5px rgba(0,0,0,.12)',
    transitionEasing: 'cubic-bezier(0.77, 0.41, 0.2, 0.84)',
    bubbleEasing: 'cubic-bezier(0.3, 0.55, 0.54, 0.86)',
    border: 'solid 1px #00000012',
    borderRadius: '4px'
  },

  spacing: [4, 8, 16, 32, 40, 48],

  MIN_LARGER_DISPLAY_MEDIA_QUERY: `@media (min-width:${LARGER_DISPLAY_WIDTH}px)`, // class prefix - lx
  MIN_LARGE_DISPLAY_MEDIA_QUERY: `@media (min-width:${LARGE_DISPLAY_WIDTH}px)`, // class prefix - lg
  MIN_DEFAULT_MEDIA_QUERY: `@media (min-width:${DEFAULT_WIDTH}px)`, // class prefix - df
  MIN_TABLET_MEDIA_QUERY: `@media (min-width:${TABLET_WIDTH}px)`, // class prefix - tb
  MIN_MOBILE_MEDIA_QUERY: `@media (min-width:${MOBILE_WIDTH}px)`, // class prefix - mb

  LARGER_DISPLAY_MEDIA_QUERY: `@media (max-width:${LARGER_DISPLAY_WIDTH - 1}px)`, // class prefix - lx
  LARGE_DISPLAY_MEDIA_QUERY: `@media (max-width:${LARGE_DISPLAY_WIDTH - 1}px)`, // class prefix - lg
  DEFAULT_MEDIA_QUERY: `@media (max-width:${DEFAULT_WIDTH - 1}px)`, // class prefix - df
  TABLET_MEDIA_QUERY: `@media (max-width:${TABLET_WIDTH - 1}px)`, // class prefix - tb
  MOBILE_MEDIA_QUERY: `@media (max-width:${MOBILE_WIDTH - 1}px)` // class prefix - mb
};
