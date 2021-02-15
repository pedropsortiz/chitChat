<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Chit Chat</title>
    <script>
        function goChat(){
            sessionStorage.setItem('nick', );
            window.location.href = "chitchat.php";
        }
    </script>
</head>

<body>
    <center>
        <h1 class="title" style="margin-top: 5%;">Chit Chat</h1>
        <div class="input-group mb-3" style="margin-top: 3%; width: 30%;">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input required type="text" id="nickname" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <button type="button" onclick="goChat()" id="buttonSubmit" style="margin-top: 2%;" class="btn btn-success">Let's chat</button>
    </center>
</body>

</html>