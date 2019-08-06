<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <title>Form Validation</title>
  </head>
  <body>
    <div id="form">
      <h3 class="header">Contact Us:</h3>
      <form  method="POST">
        <label for="fname"  class="label"> Full Name:</label>
       
        <input class="input"
          type="text"
          name="fullname"
          automatic
          placeholder=" full name"
        /><br />
        <label for="email" class="label"> Email address</label>
       
        <input class="input" type="email" name="email" placeholder="emailadress" /><br />
        <label for="message" class="label">Message:</label>
        
        <textarea
          name="message"
          cols="30"
          rows="10"
          placeholder="enter your message"
        ></textarea
        ><br />
        <input class="input" type="submit" value="submit" name="submit" id="submit" />
      </form>
    </div>
    <div class="input"><?php include('form.php') ?></div>
    

    <!-- <script src="app.js"></script> -->
  </body>
</html>
