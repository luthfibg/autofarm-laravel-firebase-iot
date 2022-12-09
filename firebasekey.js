// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyDcjhZrPDRyNGppUf_0mLrxumzBNQKYA30",
    authDomain: "autofarm-120a0.firebaseapp.com",
    databaseURL: "https://autofarm-120a0-default-rtdb.firebaseio.com",
    projectId: "autofarm-120a0",
    storageBucket: "autofarm-120a0.appspot.com",
    messagingSenderId: "290004752333",
    appId: "1:290004752333:web:228c7bd198f690dd1a5684",
    measurementId: "G-SQHYWTJDLY",
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
