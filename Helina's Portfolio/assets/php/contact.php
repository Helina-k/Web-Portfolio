<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validation (Simple)
    if (!empty($name) && !empty($email) && !empty($message)) {
        // In a real scenario, you would use mail() or PHPMailer here.
        // mail($to, $subject, $body, $headers);
        
        // Simulating success
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Message Sent</title>
            <style>
                body {
                    background-color: #1a1a2e;
                    color: #fff;
                    font-family: 'Inter', sans-serif;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    margin: 0;
                }
                .container {
                    text-align: center;
                    padding: 2rem;
                    background-color: #16213e;
                    border-radius: 10px;
                    box-shadow: 0 4px 6px rgba(0,0,0,0.3);
                }
                h1 { color: #6C63FF; }
                a { color: #FF6584; text-decoration: none; margin-top: 1rem; display: inline-block; }
            </style>
        </head>
        <body>
            <div class='container'>
                <h1>Thank You!</h1>
                <p>Your message has been received.</p>
                <a href='../../index.php'>Go Back</a>
            </div>
        </body>
        </html>";
    } else {
        echo "Please fill in all fields.";
    }
} else {
    // Redirect if accessed directly
    header("Location: ../../index.php");
    exit();
}
?>
