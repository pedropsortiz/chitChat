
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.2.7/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/8.2.7/firebase-database.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyC8ViCfYwgh1I9JIvAyafFmsZejXv1lLLg",
    authDomain: "chit-chat-cf8b5.firebaseapp.com",
    projectId: "chit-chat-cf8b5",
    storageBucket: "chit-chat-cf8b5.appspot.com",
    messagingSenderId: "298087203015",
    appId: "1:298087203015:web:7e5e1503e3215a5c387ee2"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  //var myName = prompt("enter your name");

  function sendMessage() {
        // get message
        var message = document.getElementById("message").value;
 
        // save in database
        firebase.database().ref("messages").push().set({
            "sender": myName,
            "message": message
        });
 
        // prevent form from submitting
        return false;
    }

    firebase.database().ref("messages").on("child_added", function (snapshot){
        var html = "";
        html += "<li>";
        html += snapshot.val().sender + ": " + snapshot.val().message;
        html += "</li>";

        document.getElementById("messages").innerHTML += html;
    });

</script>

<form onsubmit="return sendMessage()">
        <input id="message" placeholder="enter a message" autocomplete="off">
        <input type="submit">
    </form>


    <ul id="messages">

    </ul>