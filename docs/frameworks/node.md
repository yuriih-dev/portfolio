#### Basic dependencies

`npm i body-parser cors express helmet morgan`

- body-parser: this is a library that you will use to convert the body of incoming requests into JSON objects.
- cors: This is a library that you will use to configure Express to add headers stating that your API accepts requests coming from
  other origins, This is also know as Cross-Origin Resource Sharing(CORS)
- express: This is Express itself.
- helmet: This is a library that helps to secure Express apps with various HTTP headers.
- morgan: This is a library that adds some logging capabilities to your Express app.


### Build Simple Express Server

#### Create Server

```javascript
require('dotenv/config')
const express = require('express')
const cors = require('cors')
const cookieParser = require('cookie-paser')
const {hash, compare} = require('bcryptjs')

// 1. Register a user
// 2. Login a user
// 3. Logout a user
// 4. Setup a protected route
// 5. Get a new accesstoken with a refresh token

const server = express();

server.use(cors({
  origin:'',
  credential: true
}))

// User express middleware for esier cookie handling
server.use(cookieParser())

```
#### Register a user
```javascript

server.post('/register', async(req, res)=> {
  const {email, password} = req.body;
  
  try{
    // 1. check if user exist
    const user = db.findUser({email}) // get user with email from the database
    
    if(user) throw new Error('User already exist')
    
    // 2. if not user exist, hash the password
    const hashedPassword = await hash(password, 10);
    
    // 3. Insert the user in database
    db.createUser({email, password})

    res.send({'message': 'User created'})
    
  }catch (err){
    res.send({
      error: `${err.message}`
    })
  }
})
```


#### Login User

```javascript
server.post('/login', (req, res)=>{
  
  const {email, password} = req.body;
  
  try{
    // 1. Find user in database, if not exist send error
    const user = db.findUser({email})
    if(!user) throw new Error('User does not exist')
    
    // 2. Compare crypted password and see if it checks out. send if not
    const valid = await compare(password, user.password)
    if(!valid) throw new Error('Password is not correct')
    
    // 3. Create Refresh and access token
    const accessToken = createAccessToken(user.id)
    const refreshToken = createRefreshToken(user.id)
    
    // 4. Put the refresh token in the database
    user.refreshToken = refreshToken;
    
    // 5. Sent token. Refreshtoken as a cookie and accesstoken as a return response
    sendRefreshToken(res, refreshToken)
    sendAccessToken(res, req, accessToken)
  }catch (err){
    res.send({
      error: err.message
    })
  }
  
})
```
#### Create Token
```javascript
const { sign } = require('jsonwebtoken')

const createAccessToken = userId => {
  return sign({userId}, process.env.ACCESS_TOKEN_SECRET, {
    expiresIn: '15m'
  })
}

const createRefreshToken = userId => {
  return sign({ userId }, process.env.REFRESH_TOKEN_SECRET, {
    expiredIn: '7d'
  })
}

sendAccessToken = (req, res, accessToken) => {
  res.send({
    accessToken,
    email: req.body.email
  })
}

sendRefreshToken = (res, refreshToken) => {
  res.cookie('refreshToken', refreshToken, {
    httpOnly: true,
    path: '/refresh_token'
  })
}

module.exports = {
  createAccessToken,
  createRefreshToken,
  sendAccessToken,
  sendRefreshToken
}
```

### Logout a user

```javascript
server.post('/logout', (req, res)=>{
  res.clearCookie('refreshToken')
  return res.send({
    message: 'Logged out'
  })
})
```

### Protected route

```javascript
server.post('/protected', async(req, res)=>{
  try{
    const userId = isAuth(req)
  }catch (err){
    res.send({
      error: err.message
    })
  }
})
```