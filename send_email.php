<!DOCTYPE html>
<html lang="he">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>צור קשר</title>
    <style>
        body {
            background-color: white;
        }
        #contactForm {
            display: none;
            padding: 20px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
            width: 300px;
            margin-top: 20px;
        }
        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<button onclick="document.getElementById('contactForm').style.display='block'">צור קשר</button>

<div id="contactForm">
    <h3>צור קשר</h3>
    <form action="send_email.php" method="POST">
        <label for="name">שם:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="phone">טלפון:</label><br>
        <input type="text" id="phone" name="phone" required><br><br>

        <label for="email">מייל:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">טקסט חופשי:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>

        <input type="submit" value="שליחה">
    </form>
</div>

</body>
</html>
