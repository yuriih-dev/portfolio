import { AppReducerType } from '../type';

const defaultState: AppReducerType = {
  network: null,
  wallet: null,
  address: null
};

export function appReducer(state: AppReducerType = defaultState, action: any): AppReducerType {
  switch (action.type) {
    default:
      return state;
  }
}
