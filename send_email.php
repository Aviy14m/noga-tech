<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // קבלת הנתונים מהטופס
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "avi@noga-tech.com"; 
    $subject = "צור קשר - פרטים חדשים";
    $body = "שם: $name\nטלפון: $phone\nמייל: $email\n\nהודעה:\n$message";

    $headers = "From: " . $email;

    if (mail($to, $subject, $body, $headers)) {
        echo "ההודעה נשלחה בהצלחה!";
    } else {
        echo "הייתה בעיה בשליחת ההודעה.";
    }
}
?>
