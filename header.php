<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory');?>./images/favicon-32x32.png">
  
  <title>Frontend Mentor | Loopstudios landing page</title>
<?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="header__mobile__menu has-fade-in">
      <div class="header__mobile__menu__header">
        <a href="#" class="header__mobile__menu__logo">
          <img src="<?php bloginfo('template_directory');?>./images/logo.svg" alt="Logo" class="header__mobile__menu__logo__image">
        </a>
        <a href="#" class="header__mobile__menu__close" id="closeIcon">
          <img src="<?php bloginfo('template_directory');?>./images/icon-close.svg" alt="Close Icon" class="header__mobile__menu__logo__close">
        </a>
      </div>
      <ul class="header__mobile__menu__links">
        <li class="header__mobile__menu__item">
          <a href="#" class="header__mobile__menu__link has-fade-in">About</a>
        </li>
        <li class="header__mobile__menu__item">
          <a href="#" class="header__mobile__menu__link has-fade-in">Careers</a>
        </li>
        <li class="header__mobile__menu__item">
          <a href="#" class="header__mobile__menu__link has-fade-in">Events</a>
        </li>
        <li class="header__mobile__menu__item">
          <a href="#" class="header__mobile__menu__link has-fade-in">Products</a>
        </li>
        <li class="header__mobile__menu__item">
          <a href="#" class="header__mobile__menu__link has-fade-in">Support</a>
        </li>
      </ul>
    </div>
    <nav class="nav container">
      <a href="#" class="nav__logo">
        <img src="<?php bloginfo('template_directory');?>./images/logo.svg" alt="Logo" class="nav__logo__image">
      </a>
      <ul class="nav__links">
        <li class="nav__item">
          <a href="#" class="nav__link">About</a>
        </li>
        <li class="nav__item">
          <a href="#" class="nav__link">Careers</a>
        </li>
        <li class="nav__item">
          <a href="#" class="nav__link">Events</a>
        </li>
        <li class="nav__item">
          <a href="#" class="nav__link">Products</a>
        </li>
        <li class="nav__item">
          <a href="#" class="nav__link">Support</a>
        </li>
      </ul>
      <a href="#" class="nav__hamburger" id="hamburgerMenu">
        <img src="<?php bloginfo('template_directory');?>./images/icon-hamburger.svg" alt="Hamburger Menu" class="nav__hamburger">
      </a>
    </nav>
    <div class="header__content container">
      <div class="header__content__text">
        <h1 class="header__content__text__title">Immersive</h1>
        <h1 class="header__content__text__title">experiences</h1>
        <h1 class="header__content__text__title">that deliver</h1>
      </div>
    </div>
  </header>