<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Realtime Laravel Chat</title>

    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>

<div class="top">
    <img src="https://assets.edlin.app/images/rossedlin/03/rossedlin-03-100.jpg" alt="Avatar">
    <div>
        <p>John Snow</p>
        <small>Online</small>
    </div>
</div>

<div class="messages">
    @include('receive', ['message' => 'Hey! Whats up! #NBSP'])
</div>

<div class="bottom">
    <form>
        <input type="text" name="message" id="message" placeholder="Enter message..." autocomplete="off">
        <button type="submit"></button>
    </form>
</div>

</body>
</html>