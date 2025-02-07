<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // קבלת הנתונים מהטופס
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // הגדרת המייל
    $to = "avi@noga-tech.com";  // כתובת המייל שלך
    $subject = "צור קשר - פרטים חדשים";
    $body = "שם: $name\nטלפון: $phone\nמייל: $email\n\nהודעה:\n$message";

    // שליחת המייל
    if (mail($to, $subject, $body)) {
        echo "ההודעה נשלחה בהצלחה!";
    } else {
        echo "הייתה בעיה בשליחת ההודעה.";
    }
}
?>
