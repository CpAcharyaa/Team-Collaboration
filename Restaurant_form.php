<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner with Foodly</title>
    <link rel="stylesheet" href="Restaurant_Form.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins';
          }
    </style>

</head>
<body>
    <div class="container">
        <div class="form-section">
            <h2>Partner with us:</h2>
            <p>Please fill up your details.</p>

            <!-- Form starts here -->
            <form method="POST">
    <div class="name">
    <div>
        <h5>Your Name</h5>
        <input type="text" name="owner_name" placeholder="Name" required>
    </div>
    <div>
        <h5>Restaurant Name</h5>
        <input type="text" name="restaurant_name" placeholder="Restaurant Name" required>
    </div>
</div>
<div class="address">
    <div>
        <h5>Email Address</h5>
        <input type="email" name="email_address" placeholder="Your Email Address" required>
    </div>
    <div>
        <h5>Address</h5>
        <input type="text" name="address" placeholder="Your Restaurant Address" required>
    </div>
</div>
<div>
    <h5>Contact Number</h5>
    <input type="tel" name="contact_number" placeholder="Your Contact Number" required>
</div>
<div>
    <h5>Restaurant Details</h5>
    <textarea name="restaurant_details" required></textarea>
</div>
<div class="request-btn">
    <button type="submit">Send Request</button>
</div>
                <p>Chandra</p>
            </form>
            <!-- Form ends here -->
        </div>
    </div>
</body>
</html>
