<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <title>Form Validation</title>
  </head>
  <body>
    <div id="form">
      <h3 class="header">Contact Us:</h3>
      <form method="POST">
        <label for="fname" class="label"> Full Name:</label>

        <input
          class="input"
          type="text"
          name="fullname"
          autofocus
          placeholder=" Full name"
        /><br />
        <label for="email" class="label"> Email address:</label>

        <input
          class="input"
          type="email"
          name="email"
          placeholder=" Your email adress"
        /><br />
        <label for="message" class="label">Message:</label>

        <textarea
          class="message"
          name="message"
          cols="30"
          rows="10"
          placeholder=" Enter your message"
        ></textarea
        ><br />
        <input
          class="button"
          type="submit"
          value="Submit"
          name="submit"
          id="submit"
        />
      </form>
    </div>
   
    <div id="phpBox"><span id="php" class="input php"><?php include('form.php') ?></span><a href="http://localhost/phpfiles/"><i class="fas fa-arrow-circle-left fa-2x"></i></a></div>
   <script src=" https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
   <script src="app.js"></script>
  </body>
</html>
