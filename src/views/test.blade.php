<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('6a383056fe1110656445', {
      cluster: 'ap2'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {

      // alert(JSON.stringify(data));
      var message = JSON.stringify(data);
      // document.getElementById("abc").appendChild('<span>'+message.username+'</span>');
      $('#abc').append('<h3>'+message+'</h3>');
    });
  </script>
</head>
<body>
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
    <div id="abc">
        
    </div>
  </p>
</body>