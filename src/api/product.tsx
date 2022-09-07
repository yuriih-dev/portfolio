import axios from 'axios';

const api = axios.create({
  baseURL: process.env.REACT_APP_API_URL
});

export const getProducts = (): Promise<any> => {
  return new Promise((resolve) => {
    api
      .get('/')
      .then((res) => {
        if (res.status === 200) {
          resolve({
            success: true,
            products: res.data
          });
        } else {
          resolve({
            success: false
          });
        }
      })
      .catch((err) => {
        resolve({
          success: false
        });
      });
  });
};
