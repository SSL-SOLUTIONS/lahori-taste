<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
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
    </div>
</body>
</html>
