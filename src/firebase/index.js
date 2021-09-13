/**
 * Firebase Login
 * Reactify comes with built in firebase login feature
 * You Need To Add Your Firsebase App Account Details Here
 */

import * as firebase from 'firebase';
import 'firebase/firestore';

const firebaseConfig = {
    apiKey: "AIzaSyCG5QOHKgmNDvKMsChcVTEagcwg5LTHvho",
    authDomain: "havvi-ba101.firebaseapp.com",
    databaseURL: "https://havvi-ba101-default-rtdb.firebaseio.com",
    projectId: "havvi-ba101",
    storageBucket: "havvi-ba101.appspot.com",
    messagingSenderId: "464898404348",
    appId: "1:464898404348:web:2edb1b9141f4a3dad14c79",
    measurementId: "G-QS8BPJTDDH"
};


firebase.initializeApp(firebaseConfig);
firebase.firestore();

export default firebase;
