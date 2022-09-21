1. Creates a file called package.json.
   `npm init -y`

2. package.json example

```json
{
  "name": "worblerai.com",
  "version": "0.0.1",
  "author": "Author",
  "license": "Apache-2.0",
  "scripts": {
    "build": "next build",
    "clean": "rm -rf .next/",
    "dev": "nodemon",
    "docker": "rm -rf .yarn/unplugged && docker build -t worblerai . && docker run --rm -p 3000:3000 -it worblerai",
    "env": "yarn node tasks/env.mjs",
    "format": "eslint . --fix && prettier --write \"**/*.tsx\" \"**/*.ts\" \"**/*.js\" \"**/*.mjs\" \"**/*.cjs\" \"**/*.json\" \"**/*.md\" && yarn format:tasks",
    "format:tasks": "yarn node tasks/formatTasksJSON.mjs",
    "lint": "concurrently --raw \"eslint .\" \"yarn prettier\" \"yarn typescript\"",
    "options": "yarn node tasks/createOptions.mjs",
    "postinstall": "yarn options",
    "prepare": "husky install",
    "prettier": "prettier --check \"**/*.json\" \"**/*.md\"",
    "release": "release-it",
    "schema": "node apollo/schema.js && graphql-codegen && prettier --write apollo/control.ts",
    "start": "next start",
    "test": "yarn lint && yarn tests:unit",
    "test:unit": "yarn options && jest --runInBand",
    "test:watch": "yarn options && jest --coverage --watchAll",
    "typescript": "tsc -p tsconfig.json --noEmit",
    "voices": "yarn node tasks/addNewVoices.mjs"
  },
  "dependenciesMeta": {
    "spokestack": {
      "unplugged": true
    }
  },
  "engines": {
    "node": ">=16.13.0 <17"
  },
  "bugs": {
    "url": "https://github.com/spokestack/worblerai.com/issues"
  },
  "homepage": "https://github.com/spokestack/worblerai.com#readme",
  "keywords": ["spokestack", "worbler"],
  "repository": {
    "type": "git",
    "url": "git+ssh://git@github.com/spokestack/worblerai.com.git"
  },
  "dependencies": {
    "@apollo/client": "^3.5.5",
    "@aws-sdk/client-s3": "^3.43.0",
    "@emotion/react": "^11.6.0",
    "@emotion/styled": "^11.6.0",
    "@next/swc-linux-x64-gnu": "12.0.4",
    "@next/swc-linux-x64-musl": "12.0.4",
    "@types/ws": "^8.2.1",
    "clipboard-polyfill": "^3.0.3",
    "color": "^4.0.1",
    "cookie": "^0.4.1",
    "cross-env": "^7.0.3",
    "fluent-ffmpeg": "^2.1.2",
    "graphql": "^16.0.1",
    "graphql-playground-middleware-express": "^1.7.23",
    "imagemin-svgo": "10.0.0",
    "lodash": "^4.17.21",
    "moment": "^2.29.1",
    "multiparty": "^4.2.2",
    "next": "^12.0.4",
    "next-compose-plugins": "^2.2.1",
    "next-optimized-images": "^3.0.0-canary.10",
    "raw-body": "^2.4.2",
    "react": "^17.0.2",
    "react-dom": "^17.0.2",
    "regenerator-runtime": "^0.13.9",
    "spokestack": "^4.0.1",
    "string_decoder": "^1.3.0",
    "title-case": "^3.0.3",
    "uuid": "^8.3.2",
    "wav-encoder": "^1.3.0",
    "ws": "^8.3.0"
  },
  "devDependencies": {
    "@babel/core": "^7.16.0",
    "@babel/runtime": "^7.16.3",
    "@commitlint/cli": "^15.0.0",
    "@commitlint/config-conventional": "^15.0.0",
    "@emotion/babel-plugin": "^11.3.0",
    "@graphql-codegen/cli": "^2.3.0",
    "@graphql-codegen/typescript": "^2.4.1",
    "@graphql-tools/load": "^7.4.1",
    "@graphql-tools/url-loader": "^7.5.2",
    "@next/eslint-plugin-next": "^12.0.4",
    "@release-it/conventional-changelog": "^3.3.0",
    "@types/babel__core": "^7.1.16",
    "@types/color": "^3.0.2",
    "@types/cookie": "^0.4.1",
    "@types/express": "^4",
    "@types/fluent-ffmpeg": "^2",
    "@types/jest": "^27.0.2",
    "@types/lodash": "^4.14.177",
    "@types/multiparty": "^0.0.33",
    "@types/node": "^16.11.7",
    "@types/react": "^17.0.35",
    "@types/react-dom": "^17.0.11",
    "@types/react-test-renderer": "^17.0.1",
    "@types/semver": "^7.3.9",
    "@types/uuid": "^8.3.3",
    "@types/wav-encoder": "^1.3.0",
    "@typescript-eslint/eslint-plugin": "^5.4.0",
    "@typescript-eslint/parser": "^5.4.0",
    "babel-jest": "^27.3.1",
    "clipboardy": "^3.0.0",
    "concurrently": "^6.4.0",
    "conventional-changelog-conventionalcommits": "^4.6.1",
    "dotenv": "^10.0.0",
    "eslint": "^8.2.0",
    "eslint-config-next": "^12.0.4",
    "eslint-config-prettier": "^8.3.0",
    "eslint-plugin-prettier": "^4.0.0",
    "eslint-plugin-react": "^7.27.0",
    "express": "^4.17.1",
    "husky": "^7.0.4",
    "jest": "^27.3.1",
    "nodemon": "^2.0.15",
    "prettier": "^2.4.1",
    "react-test-renderer": "^17.0.2",
    "release-it": "^14.11.7",
    "semver": "^7.3.5",
    "ts-node": "^10.4.0",
    "typescript": "4.4.4",
    "webpack": "^5.64.1",
    "yaml-loader": "^0.6.0"
  },
  "commitlint": {
    "extends": ["@commitlint/config-conventional"]
  },
  "prettier": {
    "semi": false,
    "singleQuote": true,
    "arrowParens": "always",
    "trailingComma": "none",
    "endOfLine": "auto"
  },
  "eslintConfig": {
    "parser": "@typescript-eslint/parser",
    "plugins": ["@typescript-eslint", "react", "prettier", "@next/next"],
    "parserOptions": {
      "ecmaVersion": 2018,
      "sourceType": "module",
      "project": "./tsconfig.json",
      "extraFileExtensions": [".mjs", ".cjs"],
      "ecmaFeatures": {
        "jsx": true
      }
    },
    "globals": {
      "gtag": "readonly",
      "dataLayer": "readonly"
    },
    "settings": {
      "react": {
        "version": "detect"
      }
    },
    "extends": ["plugin:@typescript-eslint/recommended", "plugin:react/recommended", "plugin:prettier/recommended", "plugin:@next/next/recommended"],
    "rules": {
      "eqeqeq": [
        "error",
        "always",
        {
          "null": "ignore"
        }
      ],
      "prettier/prettier": "error",
      "no-unused-vars": "off",
      "@typescript-eslint/ban-ts-comment": [
        "error",
        {
          "ts-ignore": "allow-with-description"
        }
      ],
      "@typescript-eslint/explicit-function-return-type": "off",
      "@typescript-eslint/explicit-module-boundary-types": "off",
      "@typescript-eslint/no-explicit-any": "off",
      "@typescript-eslint/no-use-before-define": "off",
      "@typescript-eslint/no-var-requires": "off",
      "@typescript-eslint/no-non-null-assertion": "off",
      "@typescript-eslint/no-unused-vars": [
        "error",
        {
          "args": "after-used",
          "argsIgnorePattern": "^_"
        }
      ],
      "react/prop-types": "off",
      "@next/next/no-img-element": "off",
      "@typescript-eslint/no-this-alias": [
        "error",
        {
          "allowDestructuring": false,
          "allowedNames": ["self"]
        }
      ]
    }
  },
  "eslintIgnore": [".next", "dist", "__generated__", "coverage", "types/", ".yarn", ".pnp.cjs", "next-env.d.ts", "public/spokestack-web-worker.js", "public/*.json"],
  "release-it": {
    "verbose": 2,
    "hooks": {
      "before:init": "yarn tests"
    },
    "git": {
      "commitMessage": "chore: release ${version}",
      "requireBranch": "main",
      "tagName": "${version}"
    },
    "npm": {
      "publish": false
    },
    "github": {
      "release": true,
      "tokenRef": "SPOKESTACK_GITHUB_TOKEN"
    },
    "plugins": {
      "@release-it/conventional-changelog": {
        "preset": {
          "name": "conventionalcommits",
          "types": [
            {
              "type": "feat",
              "section": "Features"
            },
            {
              "type": "fix",
              "section": "Bug Fixes"
            },
            {
              "type": "perf",
              "section": "Performance Improvements"
            }
          ]
        }
      }
    }
  },
  "packageManager": "yarn@3.2.0-rc.7"
}
```
