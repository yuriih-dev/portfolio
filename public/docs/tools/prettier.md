#### commands

`prettier --write .`
`prettier --check .`

#### Setup ESLINT and PRETTIER in React app

1. install npm packages

```yarn
npm install eslint --save-dev
 or
yarn add eslint --dev
```

2. Create .eslintrcon by running

```yarn
npx eslint --init
or
yarn run eslint --init
```

3. In React - 17.0.0, importing react to a file is optional, To fix this, we will add a rule to our .eslintrc file. So open your .eslintrc file and add this line "react/react-in-jsx-scope": "off" inside the rules.

```dotenv
"rules": {
    "react/react-in-jsx-scope": "off"
}
```

4. If you are using jest then you will find that eslint is giving us an error that test or expect is not defined . To fix this we need to add "jest": true inside env.

```dotenv
    "env": {
       "browser": true,
       "es2021": true,
       "jest": true
    }
```

5. add esling plugins to make it work with react, and make proper configuration for eslint and prettier so that they don't collide with each other

```yarn
npm install eslint-config-prettier eslint-plugin-prettier prettier --save-dev
or
yarn add eslint-config-prettier eslint-plugin-prettier prettier --dev
```

After installing above, make changes to .eslintrc file.

```dotenv
"extends": ["eslint:recommended", "plugin:react/recommended", "plugin:prettier/recommended"]
```

6.Create .prettierrc and paste the below code

```dotenv
{
  "semi": true,
  "tabWidth": 2,
  "printWidth": 100,
  "singleQuote": true,
  "trailingComma": "none"
}
```

7. Now, eslint and prettier is setup lets add the script to the package.json

```dotenv
"lint": "eslint .",
"lint:fix": "eslint --fix",
"format": "prettier --write './**/*.{js,jsx,ts,tsx,css,md,json}' --config ./.prettierrc"
```

#### [Webstorm configuration](https://www.jetbrains.com/help/webstorm/prettier.html)

1. short key for reformat `Ctrl + Alt + L`.
2. Make sure you have Node.js installed on your computer.
3. Make sure a local Node.js interpreter is configured in the project
   **Settings/Preferences | Languages and Frameworks | Node.js | Node Interpreter**
4. Make sure the Prettier plugin is enabled on the **Settings/Preferences | Plugins** page, tab Installed

- In the embedded Terminal, type one of the following commands

```yarn
npm install --save-dev --save-exact prettier

npm install --global prettier
```

5. **Settings/Preferences | Languages and frameworks | Javascript | Prettier** select the prettier To run Prettier automatically against specific files, open the Settings/Preferences dialog (Ctrl+Alt+S), go to Languages and Frameworks |
   JavaScript | Prettier, and use the On code reformatting and On save checkboxes to specify the actions that will trigger Prettier.

6. Using typescript Run the following commands in the embedded Terminal

```yarn
yarn add -D @typescript-eslint/parser @typescript-eslint/eslint-plugin
```

7. set parser in .eslintrc

```json
{
  "parser": "@typescript-eslint/parser"
}
```

#### Using ESLint with Vue.js and Laravel Mix

1.Make sure installed Prettier Plug-in and set Node interpreter.

- Install Prettier Plugin.

**File|Settings(Ctrl + Alt + S)| Plugins**

- Set Node interpreter and check box "Codding assistance for Node.js".

**File|Settings(Ctrl + Alt + S)| Languages and Frameworks | Node & NPM**

2. Install npm packages.

```yarn
yarn add -D eslint
yarn add -D eslint-loader
yarn add -D eslint-config-standard
yarn add -D eslint-plugin-import
yarn add -D eslint-plugin-node
yarn add -D eslint-plugin-promise
yarn add -D eslint-plugin-standard
yarn add -D eslint-plugin-vue
yarn add -D prettier
yarn add -D eslint-plugin-prettier
```

3. config .eslintrc

```json lines
{
  "extends": ["standard", "plugin:vue/recommended"],
  "plugins": ["prettier"]
}
```

4. config .prettierrc

```json lines
{
  "semi": true,
  "tabWidth": 2,
  "printWidth": 180,
  "singleQuote": true,
  "arrowParens": "always",
  "trailingComma": "none",
  "endOfLine": "auto"
}
```

5. config webpack

```js
mix.webpackConfig({
  // ...

  module: {
    rules: [
      {
        enforce: 'pre',
        test: /\.(js|vue)$/,
        loader: 'eslint-loader',
        exclude: /node_modules/
      }
    ]
  }

  //...
});
```

6. configure .eslintignore & .prettierignore

- Eslint Ignore

```json lines
{}
```

- Prettier Ignore

```json lines
{}
```
