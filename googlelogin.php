<html>
    <head>
<title style=text-align:center> Whatsapp</title> 
</head>
<body>
<h1>welcome <span id="clientName"></span></h1></body>
<script src="https://www.gstatic.com/firebasejs/6.1.1/firebase-app.js"></script>

 
<script src="https://www.gstatic.com/firebasejs/6.1.1/firebase-auth.js"></script>

<script src="https://www.gstatic.com/firebasejs/6.1.1/firebase-database.js"></script>



<script>
  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyBLCvO-sJm-mAJmIAGE4fLzX0seFkAZPnw",
        authDomain: "login-page-5bd13.firebaseapp.com",
        databaseURL: "https://login-page-5bd13.firebaseapp.com",
        projectId: "login-page-5bd13",
        storageBucket: "login-page-5bd13.appspot.com",
        messagingSenderId: "1005889324846",
        appId: "1:61849441941:web:87c055b5c7c04cbccb6d9c",
        measurementId: "G-DKQ1XPMS0H"
};
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

  function login() {
     function newLoginHappened(user)
     {
       if(user) {
         app(user);
       }
       else {
           var provider=new firebase.auth.GoogleAuthProvider();
               firebase.auth().signInWithPopup(provider);
       }
     }
     firebase.auth().onAuthStateChanged(newLoginHappened);
   }
   function app(user)
   {
     document.getElementById("clientName").innerHTML = user.displayName;
   }
   window.onload = login;
    </script>



</html>
