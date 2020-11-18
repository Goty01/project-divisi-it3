<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
        <form id="contact" action="respon.php" method="post">
            <h2>Contact Form</h2>
            <fieldset>
                 <input placeholder="Nama Anda" type="text" name="name" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Email Anda" type="text" name="email" tabindex="2" required>
            </fieldset>
            <fieldset>
                <textarea placeholder="Ketikan pesan Anda" name="message" tabindex="3" required></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Mengirim pesan"><a href="respon.php">Send</a></button>
            </fieldset>
        </form>
    </body>
</html>