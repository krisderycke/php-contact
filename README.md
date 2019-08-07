# Php-contact-form

Files can be found [here](https://github.com/krisderycke/php-contact).

## What

Had to make a contact form that sends email when submitted.

## How

first looked up how the `mail()` function works. but since we are deploying on a local server i had to tackle it somewhat differently. I then first installed composer ; then phpmailer.
followed the guidelines in the phpMailer github page.
was stuck with validating my password, but got help from Jonas. then i was able to make a app-password.
after checking if everything works, i made a new php page with a variable contaning my password. then added that page in a `gitignore` file, so my password is not visilble in my repo.

when all functionalities were working, i added CSS styling and Javascript animation.

## Preview

![screenshot](../Assets/pics/Capture.png)
