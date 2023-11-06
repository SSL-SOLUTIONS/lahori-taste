<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        body {
            background-color:rgba(22, 6, 7, 1);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: rgba(232, 231, 231, 1);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 28px;
            margin-bottom: 10px;
        }

        p {
            color: #555;
            font-size: 18px;
            margin: 10px 0;
        }

        .confirmation-icon {
            color: #00a74a;
            font-size: 40px;
            margin: 20px 0;
        }

        a {
            background-color: rgba(255, 193, 7, 1);
            border: none;
            border-radius: 5px;
            color: #fff;
            display: block;
            font-size: 18px;
            margin: 20px 0;
            padding: 10px 20px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        #timer {
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      margin: 50px;
    }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thank You for Your Order</h1>
        <p>Your payment was successful, and your order has been placed Successfully.</p>
        <p>Order Number: #123456</p>
        <div class="confirmation-icon">
            <i class="fas fa-check-circle"></i>
        </div>
        <!-- <p>We will send you a confirmation email shortly.</p> -->
        <a href="{{route('menus')}}">Continue Shopping</a>
      "Your order will reach you within 20 minutes"
        <div id="timer">20:00:000</div>
    </div>
    <script>
    $(document).ready(function () {
        var initialCountdown = localStorage.getItem('countdown');
        if (initialCountdown === null) {
            // Set the initial countdown time (20 minutes) if it's not already stored
            initialCountdown = 20 * 60 * 1000; // 20 minutes in milliseconds
            localStorage.setItem('countdown', initialCountdown);
        } else {
            initialCountdown = parseInt(initialCountdown);
        }

        var minutes = Math.floor(initialCountdown / 60000);
        var seconds = Math.floor((initialCountdown % 60000) / 1000);
        var milliseconds = initialCountdown % 1000;

        function updateTimer() {
            var formattedTime =
                (minutes < 10 ? '0' : '') + minutes + ':' +
                (seconds < 10 ? '0' : '') + seconds + ':' +
                (milliseconds < 10 ? '00' : (milliseconds < 100 ? '0' : '')) + milliseconds;
            $('#timer').text(formattedTime);
        }

        function countdown() {
            if (initialCountdown === 0) {
                clearInterval(timerInterval);
                alert('Countdown complete!');
            } else {
                initialCountdown -= 10; // Subtract 10 milliseconds
                minutes = Math.floor(initialCountdown / 60000);
                seconds = Math.floor((initialCountdown % 60000) / 1000);
                milliseconds = initialCountdown % 1000;
                localStorage.setItem('countdown', initialCountdown);
                updateTimer();
            }
        }

        updateTimer();
        var timerInterval = setInterval(countdown, 10);
    });
</script>

</body>
</html>








