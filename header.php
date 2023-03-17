<?php
wp_head();
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lawyer</title>
  </head>
  <body>
    <nav class="navbar">
      <div class="nav__left center">
        <img src="<?php echo (get_template_directory_uri(). '/assets/images/logo.png') ?>" alt="Brand Logo" />
        <span>Lawliet</span>
      </div>
      <div class="nav__right center">
        <ul>
          <li>CONTACT</li>
          <li>TESTIMONIALS</li>
          <li>ABOUT</li>
          <li>TERMS</li>
        </ul>
        <input type="text" />
        <img src="<?php echo (get_template_directory_uri(). '/assets/images/search__icon.png')?>" alt="Search Icon" />
      </div>
    </nav>