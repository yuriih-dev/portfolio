

#### Cancel axios request

```typescript jsx
const cancelTokenSource = axios.CancelToken.source();

axios.get('/user/12345', {
  cancelToken: cancelTokenSource.token
});

// Cancel request
cancelTokenSource.cancel();
```