import React, { ReactElement } from 'react';
import renderer from 'react-test-renderer';
import './mocks/matchMedia.mock';
import App from '../src/App';

jest.mock('react-markdown', () => ({ children }: { children: ReactElement[] }) => {
  return <>{children}</>;
});

jest.mock('remark-gfm', () => () => {});
jest.mock('react-syntax-highlighter/dist/esm/styles/hljs', () => () => {});

describe('React App', () => {
  it('renders the html we want', () => {
    const component = renderer.create(<App />);
    expect(component.toJSON()).toMatchSnapshot();
  });
});
