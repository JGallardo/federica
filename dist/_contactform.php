<?php
    /* Set e-mail recipient */
    $orderemail  = "j@jgallardo.me";

    $name = check_input($_POST['name']);
    $email    = check_input($_POST['email']);
    $address = check_input($_POST['address']);

    $message = "
        Hello!

        Your contact form has been submitted by:

        Name: $name
        E-mail: $email

        Address:
        $address

        End of message
    ";

    /* Send the message using mail() function */
    mail($orderemail, $subject, $message);

    
    /* Redirect visitor to the thank you page */
    header('Location: http://jgallardo.me/contact/confirmation');
    exit();


    /* Functions we used */
    function check_input($data, $problem='') {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        if ($problem && strlen($data) == 0) {
            show_error($problem);
        }
        return $data;
    }

    function show_error($myError) {
    ?>
    
    <html>
        <body>

        <b>Please correct the following error:</b><br />
        <?php echo $myError; ?>

        </body>
    </html>
    
    <?php
        exit();
    }
?>