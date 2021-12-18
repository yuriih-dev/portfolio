# Testing React Apps with Jest

## Setup

### Setup with Create React App

If you are new to React, we recommend using Create React App. It is ready to use and ships with Jest! You will only need to add react-test-renderer for rendering snapshots.

Run

```yarn
yarn jest @types/jest -D
yarn add --dev react-test-renderer @types/react-test-renderer
yarn add --dev babel-jest @babel/core
```

- use React

```yarn
yarn add @babel/preset-react -D
```

- use typescript

```yarn
yarn add -D @babel/preset-typescript
```

- import image using require
  install yarn

```yarn

```

config jest

```json lines
{
  // ...
  "transform": {
    ".+\\.(css|styl|less|sass|scss|png|jpg|ttf|woff|woff2)$": "jest-transform-stub"
  }
  // ...
}
```

- importing css

```json lines
{
  "moduleNameMapper": {
    "\\.(css|less|scss|sass)$": "identity-obj-proxy"
  }
}
```

- Support ts file for test

```json
{
  "compilerOptions": {
    "types": ["jest", "node"]
  }
}
```

### Snapshot Testing

use React's rest renderer and Jest's snapshot feature to interact with the component and capture the rendered output and create a snapshot file.

```typescript jsx
import React from 'react';
import renderer from 'react-test-renderer';
import App from '../src/App';

describe('React Typescript App', () => {
  it('renders the html we want', () => {
    const component = renderer.create(<App />);
    expect(component.toJSON()).toMatchSnapshot();
  });
});
```

### We can add some mock data for testing only.

Some data will need to be loaded with rendering, can't be implemented with test, which will throw error. we can fill them with mock data
[EX] match media mock (tests/mocks/matchMedia.mock.ts)

```typescript jsx
export default Object.defineProperty(window, 'matchMedia', {
  writable: true,
  value: jest.fn().mockImplementation((query) => ({
    matches: false,
    media: query,
    onchange: null,
    addListener: jest.fn(), // deprecated
    removeListener: jest.fn(), // deprecated
    addEventListener: jest.fn(),
    removeEventListener: jest.fn(),
    dispatchEvent: jest.fn()
  }))
});
```

### Add some jest mock modules that can't be transformed by default transformer provided

```typescript jsx
jest.mock('react-markdown', () => ({ children }: { children: ReactElement[] }) => {
  return <>{children}</>;
});

jest.mock('remark-gfm', () => () => {});
jest.mock('react-syntax-highlighter/dist/esm/styles/hljs', () => () => {});
```

## Commands

- Clear Cache `jest —clearCache`
