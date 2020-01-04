<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact form</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <div>
            <h1>CONTACT</h1>
            <h2>Oleksandr Kulinich</h2>
            <form action="" method="post">
                <input class="area" type="email" name="quest_email" placeholder="Your email" maxlength="32" required><br>
                <textarea class="area" name="message" placeholder="message" row="8" required></textarea><br>
                <input id="send_button" name="submit" type="submit" value="Send"><br>
            </form>
        </div>

        <?php
            // if(isset($_POST['submit'])) {
                mail("sashakulinich11@gmail.com", "From contact form " . $_POST['quest_email'], $_POST['message']);
            //}
        ?>
    </body>
</html>