## Havvi

##### **_North Field Minnesota_**

[Linkedin](https://www.linkedin.com/company/havvi/about/)
| [jacob@cumulative.health]()
| [+1 (507)649-1866]()

**Website**: [https://www.havvi.app/](https://www.havvi.app) \
**App Store**: [https://apps.apple.com/tt/app/havvi-fitness-home-workouts/id1577812599](https://apps.apple.com/tt/app/havvi-fitness-home-workouts/id1577812599)

Havvi is designed for customers and fitnees creators to share and distribute the fitness experiences for free. There are almost over 100 creators over the world and over 160000 excellent workouts. The used technologies are Expo for the
mobile application, and React.js for the Websites. Firebase, especially Cloud Firestore is used for the database and Firebase function for some serverless APIs and Firestore event handlers. Besides them, some other services Firebase
provides such as Storage, Crashylitics, FCM are also used. And the website was deployed to the Firebase app engine with the universal link configuration.

### Basic Project Structure (Expo 42, Firebase, Firebase function)

```
|--functions
|--src
|   |--api
|   |--assets
|   |--commons
|   |--components
|   |--navigation
|   |--redux
|   |   |--store
|   |   |--actions
|   |   |--reducers
|   |--screens
|   |--theme
```

### Authentication (Email, SMS, Google Apple)

```javascript
import * as Google from 'expo-google-app-auth';
import * as AppleAuthentication from 'expo-apple-authentication';
import * as Crypto from 'expo-crypto';

/**
 * Sign in Firebase with Email
 */
export const signInWithFirebase =
  (user, navigation) =>
  (dispatch, getState, { getFirebase }) => {
    return new Promise(async (resolve) => {
      const firebase = getFirebase();
      const oldUser = firebase.auth().currentUser;
      firebase
        .auth()
        .signInWithEmailAndPassword(user.email, user.password)
        .then(async ({ user }) => {
          // TODO: Sign in Success handler
        })
        .catch((error) => {
          // TODO: Sign in Faild handler
        });
    });
  };

/**
 * Returns google Credencial
 * it can be used for sign up/in and delete account
 */
const getGoogleCredential = async (firebase) => {
  return new Promise(async (resolve) => {
    const config = {
      androidClientId: 'XXX-XXX.apps.googleusercontent.com',
      iosClientId: 'XXX-XXX.apps.googleusercontent.com',
      iosStandaloneAppClientId: 'XXX-XXX.apps.googleusercontent.com',
      scopes: ['profile', 'email']
    };
    const { type, accessToken, idToken } = await Google.logInAsync(config);
    if (type === 'success') {
      firebase.auth().onAuthStateChanged(() => {
        let credential = firebase.auth.GoogleAuthProvider.credential(idToken, accessToken);
        resolve(credential);
      });
    } else {
      resolve(false);
    }
  });
};
/**
 * Sign in Firebase with google
 * After then, linked it with the anonymous account
 */
export const signInWithGoogle = (navigation) => {
  return async (dispatch, getState, { getFirebase }) => {
    return new Promise(async (resolve) => {
      const firebase = getFirebase();
      const credential = await getGoogleCredential(firebase);
      if (credential) {
        firebase
          .auth()
          .currentUser.linkWithCredential(credential)
          .then(({ user }) => {
            // TODO: Sign in success
          })
          .catch((error) => {
            // TODO: Sign in failure
          });
      }
    });
  };
};

/**
 * Sign in Firebase with Apple
 */
export const signInWithApple = (navigation) => {
  return async (dispatch, getState, { getFirebase }) => {
    return new Promise(async (resolve) => {
      const firebase = getFirebase();
      getAppleCredential(firebase).then((credential) => {
        if (credential) {
          firebase
            .auth()
            .currentUser.linkWithCredential(credential)
            .then(({ user }) => {
              // TODO: sign in success
            })
            .catch((error) => {
              // TODO: sigin in failure
            });
        }
      });
    });
  };
};
/**
 * get Apple credentials
 */
const getAppleCredential = async (firebase) => {
  return new Promise(async (resolve) => {
    const nonce = Math.random().toString(36).substring(2, 10);
    Crypto.digestStringAsync(Crypto.CryptoDigestAlgorithm.SHA256, nonce)
      .then((hashedNonce) =>
        AppleAuthentication.signInAsync({
          requestedScopes: [AppleAuthentication.AppleAuthenticationScope.FULL_NAME, AppleAuthentication.AppleAuthenticationScope.EMAIL],
          nonce: hashedNonce
        })
      )
      .then((appleCredential) => {
        const { identityToken } = appleCredential;
        const provider = new firebase.auth.OAuthProvider('apple.com');
        const credential = provider.credential({
          rawNonce: nonce,
          idToken: identityToken
        });
        resolve(credential);
      })
      .catch((err) => {
        resolve(false);
      });
  });
};
/**
 * Log out user
 */
export const userLogout =
  () =>
  async (dispatch, getState, { getFirebase }) => {
    const firebase = getFirebase();
    // TODO: unsubscribe all user subscribers
    await firebase.auth().signOut();
  };

/**
 * Send Email for verify Code and Password
 */

export const sendEmailForRecovery =
  (email) =>
  (dispatch, getState, { getFirebase }) => {
    const firebase = getFirebase();
    firebase
      .auth()
      .sendPasswordResetEmail(email)
      .then(function () {
        // TODO: success
      })
      .catch(function (error) {
        // TODO: failure
      });
  };
/**
 * Get Email credential
 */
const getEmailCredential = async (email, password, firebase) => {
  return new Promise((resolve) => {
    firebase
      .auth()
      .signInWithEmailAndPassword(email, password)
      .then(async () => {
        resolve(firebase.auth.EmailAuthProvider.credential(email, password));
      })
      .catch((error) => {
        resolve(false);
      });
  });
};

export const deleteFirebaseAccount =
  (password, navigation) =>
  async (dispatch, getState, { getFirebase }) => {
    const firebase = getFirebase();
    const user = firebase.auth().currentUser;
    const authUser = getState().firebase.profile;
    let credential;

    try {
      switch (authUser.provider) {
        case 'email': {
          credential = await getEmailCredential(authUser.email, password, firebase);
          break;
        }
        case 'google': {
          credential = await getGoogleCredential(firebase);
          break;
        }
        case 'apple': {
          credential = await getAppleCredential(firebase);
          break;
        }
      }
      // TODO: success
    } catch (error) {
      // TODO: failure
    }
  };
```

### Firebase function (Main functionalities)

```javascript
const functions = require('firebase-functions');
const admin = require('firebase-admin');
admin.initializeApp(functions.config().firebase);

const runtimeOpts = {
  timeoutSeconds: 20,
  memory: '1GB'
};
/**
 *  Example: user-videos  relation
 *  HTTP Request for getting user specification data
 *  returns all workout videos watched by the user
 */
exports.getWatchedVideos = functions.runWith(runtimeOpts).https.onCall(async (data, context) => {
  try {
    const { userUid } = data;
    const watchedVideoIds = (await admin.firestore().collection('users').doc(userUid).get()).watchedVideos || [];
    const videoCollection = await admin.firestore().collection('videos').get();
    const videoDocs = videoCollection.docs;
    const watchedVideos = [];
    for (let i in videoDocs) {
      if (watchedVideoIds.includes(videoDocs[i].id)) {
        watchedVideos.push(videoDocs[i].data());
      }
    }
    return { status: 1, videos: watchedVideos };
  } catch (err) {
    return { status: 0, error: err.message };
  }
});
/**
 *  Example: search
 *  HTTP Request for filtering videos by title, creator name, category, and so more
 *  returns max 100 videos filtered
 */
exports.searchVideos = functions.runWith(runtimeOpts).https.onCall(async (data, context) => {
  try {
    const searchText = data.toLowerCase();

    const [creators, videos] = await Promise.all([getCreators(), getVideos()]);

    const result = videos.filter((video) => {
      const creator = creators.find((c) => c.channelId === video.channelId);
      return (
        (creator.c_title || '').toLowerCase().includes(searchText) ||
        (video.title || '').toLowerCase().includes(searchText) ||
        (video.broad_categories || []).some((category) => category.toLowerCase().includes(searchText))
      );
    });

    return { status: 1, videos: (result || []).slice(0, 100) };
  } catch (err) {
    return { status: 0, error: err.message };
  }
});

/**
 *  Example: Event Handler
 */
exports.videoCreated = functions.firestore.document('videos/{videoId}').onCreate((doc) => {
  // TODO: We can add some actions we wan to do after creating videos
});

/**
 * Example: Synce user data between Firebase auth and users collection for their profile, Batch commit
 */
exports.userRemoved = functions.auth.user().onDelete(async (user) => {
  const batch = admin.firestore().batch();
  await admin.firestore().collection('users').doc(user.uid).delete();

  const watchedVideos = await admin.firestore().collection('watched_videos').where('userId', '==', user.uid).get();

  if (watchedVideos.size) {
    watchedVideos.forEach((doc) => {
      batch.delete(doc.ref);
    });
  }

  // TODO: some more actions

  await batch.commit();
});
```
