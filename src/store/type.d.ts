export interface AppReducerType {
  network: string | null;
  address: string | null;
  wallet: string | null;
}

export interface rootReducerType {
  app: AppReducerType;
}
