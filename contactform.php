<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "contact@aboutblakerhodes.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Loxation: index.html?mailsent");
}

?>
<body>
    <div class="container">
        <h4>Thank you for sending me your message! I will respond as soon as possible</h4>
        <a href="http://aboutblakerhodes.com/">Click here to return to the portfolio!</a>
    </div>
</body>

<style>

    body {
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-family: sans-serif;
        background: white;
    }

    h4 {
        font-size: 30px;
        color: #000839;
    }

    .container {
        width: 40%;
        margin: auto;
        text-align: center;
    }

    a {
        text-decoration: none;
        font-size: 20px;
        color: white;
        background: #7510F7;
        padding: 8px;
        border-radius: 5px;
    }

</style>