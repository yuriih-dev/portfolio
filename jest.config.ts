export default {
  rootDir: '.',
  moduleFileExtensions: ['js', 'jsx', 'ts', 'tsx', 'json', 'node', 'd.ts'],
  verbose: true,
  moduleNameMapper: {
    '.+\\.(css|styl|less|sass|scss|png|jpg|ttf|woff|woff2)$': 'identity-obj-proxy'
  },
  testMatch: ['**/tests/*.test.(tsx|ts)']
};
