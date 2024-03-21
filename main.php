<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="index.php">Contacts</a></li>
        </ul>
    </nav>

    <body>
        <div class="container">
          <form id="contact" action="mail.php" method="post">
            <h1>Contact Form</h1>
       
            <fieldset>
              <input placeholder="Your name" name="name" type="text" tabindex="1" autofocus>
            </fieldset>
            <fieldset>
              <input placeholder="Your Email Address" name="email" type="email" tabindex="2">
            </fieldset>
            <fieldset>
              <input placeholder="Type your subject line" type="text" name="subject" tabindex="4">
            </fieldset>
            <fieldset>
              <textarea name="message" placeholder="Type your Message Details Here..." tabindex="5"></textarea>
            </fieldset>
       
            <fieldset>
              <button type="submit" name="send" id="contact-submit">Submit Now</button>
            </fieldset>
          </form>
        </div>
      </body>
</body>
</html>