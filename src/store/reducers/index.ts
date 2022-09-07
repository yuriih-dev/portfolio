import { combineReducers } from 'redux';
import { appReducer } from './appReducer';
import storage from 'redux-persist/lib/storage';
import { persistReducer } from 'redux-persist';

export const rootReducer = combineReducers({
  app: persistReducer(
    {
      key: 'appState',
      storage
    },
    appReducer
  )
});
