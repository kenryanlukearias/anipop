<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <img class="sag-image" src="SAGSHIPPING.jpg" alt="SAGSHIPPING">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="#">ABOUT US</a></li>
            <li><a href="quote(change to php).php">CONTACTS</a></li>
        </ul>
        <a class="quote-button" href="quote(change to php).php">QUOTE</a>
    </nav>

    <div>


      <br><br><br><div class="contact">
        <p class="contact-h1">CONTACT FORM</p><br><br>
        <p class="contact-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisis est et gravida tempus. Aliquam faucibus, orci id posuere sodales, orci nibh condimentum mauris, id ornare urna lacus at dolor.</p>
      </div><br><br><br>


      <div>
        <form class="form" action="mail.php" method="post">


        <div class="survey">


          <div class="left-boxes">
              <input placeholder="Name" name="name" type="text" tabindex="1" autofocus>
          
              <input placeholder="Email Address" name="email" type="email" tabindex="2">
          
              <input placeholder="Phone number" type="text" name="number" tabindex="3">
            
            
          </div>

          <div class="right-boxes">
                                    
              <input placeholder="Subject" type="text" name="subject" tabindex="4">
                    
              <textarea name="message" placeholder="Enter query" tabindex="5"></textarea>          
          </div>
        </div>
        <button type="submit" name="send" class="submit-button">Submit</button>
          
            
        </form>
      </div>
      
    </div>









</body>
</html>