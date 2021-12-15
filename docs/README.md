# React - Apollo Typescript APP

Created with CodeSandbox

## Environment

- Node 16.13.0
- npm 8.1.4
- yarn 1.22.4
- PostgreSQL 14

## Running the project

1. Download the project
2. Running FrontEnd

- run `yarn install` at the root of the project source on your terminal
- run `yarn start` to launch the frontend

3. Running Backend

- set your database provider and url on .env
- run `yarn prisma generate dev` to migrate database
- run `yarn dev` to launch the apollo server

## Project structure

```
|-- public
|-- server
|-- src 
|   |- components
|   |   |- Audio
|   |   |   |- AudioPlayer
|   |   |   |- AudioContext
|   |   |   |- index.ts
|   |   |   |- Process
|   |   |   |- RecordButton
|   |   |   |- Recorder
|   |   |   |- Spectrum
|   |   |   |- useSsAudioClient
|   |   |   |- Visualizer
|   |   |- Button
|   |   |- Divider
|   |   |- Header
|   |   |- Icons
|   |   |- LoadingIcon
|   |   |- Menu
|   |   |- Pagination
|   |   |- ProductItem
|   |   |- ProductItem
|   |   |- SVGIcon
|   |   
|   |- layouts
|   |   |- Default Layouts
|   |  
|   |- pages
|   |   |- 404
|   |   |- home
|   |   |- recipes
|   |   |- websocket
|   |  
|   |- store
|       |- actions
|       |- reducers
|       |   |- appReducer.ts
|       |   |- index.ts
|       |   
|       |- index.ts
|
|- tsconfig.json
|- package.jsong
|- yarn.lock
```

## 1. Get Started with React Typescript

#### create react app with typescript [Learn more...](https://create-react-app.dev/docs/adding-typescript/)

```
npx create-react-app [APP_NAME] --template typescript
# or
yarn create react-app [] --template typescript
```

## 2. Basic Configurations

- use @emotion/react for styling

```
yarn add @emotion/react
```

_Note:_ Please import jsx from '@emotion/react' instead of React from 'react' at the top of every file where you are
going to use css prop.
[Lean more...](https://emotion.sh/docs/css-prop#jsx-pragma)

- Use HTTP client
  <br/>please install [axios](https://www.npmjs.com/package/axios) using npm or yarn

```
yarn add axios
```

## 3. Routing

- please install [react-router-dom](https://www.npmjs.com/package/react-router-dom) using npm or yarn

```yarn
yarn add react-router-dom
yarn add -D @types/react-router-dom
```

- register routes

```typescript jsx
import {BrowserRouter as Router, Route, Routes} from 'react-router-dom'
import HomePage from "./home"
import RecipesPage from './pages/recipes'
import ErrorPage from './404'
// ...
export default function App() {
  // ...
  return (
          <Router>
            <Routes>
              <Route path={'/'} element={<HomePage/>}/>
              ...
              <Route path={'*'} element={<ErrorPage/>}/>
            </Routes>
          </Router>
  )
}
```

## 3. Setup React Redux & Redux Persist

1. install npm packages

- redux

```yarn
yarn add redux react-redux
yarn add -D @types/react-redux
```

- middleware

```yarn
yarn add redux-thunk
yarn add -D @types/redux-tunk
```

- redux persist

```yarn
yarn add redux-persist
yarn add @types/redux-persist
```

2. config store with thunk middleware and redux persist

```typescript jsx
import {createStore} from 'redux';
import storage from 'redux-persist/lib/storage'
import {persistStore, persistReducer} from 'redux-persist'
import {rootReducer} from './reducers'

const persistConfig = {
    key: 'root',
    storage
}

export const store = createStore(
    persistReducer(persistConfig, rootReducer)
)

export const persisStore = persistStore(store); 
```

3. combine reducers with redux-persist

```typescript jsx
import {combineReducers} from 'redux'
import {appReducer} from './appReducer'
import storage from 'redux-persist/lib/storage'
import {persistReducer} from 'redux-persist'


export const rootReducer = combineReducers({
    app: persistReducer({
        key: 'appState',
        storage
    }, appReducer)
})
```

4. Redux/Redux-persist providers

```typescript jsx
// ...
import {Provider} from 'react-redux'
import {PersistGate} from 'redux-persist/es/integration/react'
import {store, persisStore} from './store'
// ...
export default function App() {
    // ...
    return (
        <Provider store={store}>
            <PersistGate persistor={persisStore} loading={null}>
                ...
            </PersistGate>
        </Provider>
    )
}
```

## 4. Setup Apollo Server

- Use nodemon with typescript

```
yarn add nodemon ts-node
```

- Use SQLite & GraphQL Apollo Client

``` 
yarn add apollo-server apollo-server-core graphql 
yarn add apollo-datasource apollo-datasource-rest 
yarn add sequelize
```

- use Prisma

```
yarn add prisma @prisma/client
yarn add prisma
```

config "prisma" on package.json

```json
{
  "prisma": {
    "schema": "server/db/schema.prisma"
  }
}
```
## 5. Integration Spokestack API and Audio recording, Audio Visualization

install [spokestack](https://www.npmjs.com/package/spokestack) and [wav encoder](https://www.npmjs.com/package/wav-encoder/v/0.3.0) using yarn
```yarn
yarn add spokestack web-encoder
yarn add @types/web-encoder -D
```
## 6. Integration Firebase using react-redux-firebase
install firebase
```yarn
yarn add firebase
```
put firebase configurations into .env file.
```dotenv
REACT_APP_FIREBASE_API_KEY=
REACT_APP_FIREBASE_AUTH_DOMAIN=
REACT_APP_FIREBASE_DATABASE_URL=
REACT_APP_FIREBASE_PROJECT_ID=
REACT_APP_FIREBASE_STORAGE_BUCKET=
REACT_APP_FIREBASE_MESSAGING_SENDER_ID=
REACT_APP_FIREBASE_APP_ID=
REACT_APP_FIREBASE_MEASUREMENT_ID=
```

## 7. use Google apis
- geocode api
set google api key in env
```dotenv
REACT_APP_GOOGLE_API_KEY=
```
install react geocode to use geocode api.
```yarn
yarn add react-geocode
yarn add @types/react-geocode
```
## 8. Deploy to GCP
See app.yaml file
