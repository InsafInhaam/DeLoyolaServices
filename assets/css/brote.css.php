<?php
$primary_color = get_field('primary_color', 'option');
$secondary_color = get_field('secondary_color', 'option');
?>

<style>
  /*--------------------------------------------------------------
>>> TABLE OF CONTENTS:
----------------------------------------------------------------
# Utility
# Cards
# Common
# Form
# Navigations
# Animations
# Mobile Nav
# Search Popup
# Page Header
# Google Map
# Client Carousel
--------------------------------------------------------------*/
  /*--------------------------------------------------------------
#  
--------------------------------------------------------------*/
  :root {
    --brote-font: 'DM Sans', sans-serif;
    --brote-reey-font: "reeyregular";
    --brote-gray: #7b7d83;
    --brote-gray-rgb: 123, 125, 131;
    --brote-white: #ffffff;
    --brote-white-rgb: 255, 255, 255;
    --brote-base:
      <?php echo $primary_color; ?>
    ;
    --brote-base-rgb: 18, 57, 172;
    --brote-primary:
      <?php echo $primary_color; ?>
    ;
    --brote-primary-rgb: 255, 180, 0;
  }

  .row {
    --bs-gutter-x: 30px;
  }

  .gutter-y-30 {
    --bs-gutter-y: 30px;
  }

  body {
    font-family: var(--brote-font);
    color: var(--brote-gray);
    font-size: 16px;
    line-height: 30px;
    font-weight: 500;
  }

  body.locked {
    overflow: hidden;
  }

  a {
    color: var(--brote-gray);
  }

  a,
  a:hover,
  a:focus,
  a:visited {
    text-decoration: none;
  }

  ::-webkit-input-placeholder {
    color: inherit;
    opacity: 1;
  }

  :-ms-input-placeholder {
    color: inherit;
    opacity: 1;
  }

  ::-ms-input-placeholder {
    color: inherit;
    opacity: 1;
  }

  ::placeholder {
    color: inherit;
    opacity: 1;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    color: var(--brote-base);
    margin: 0;
  }

  p {
    margin: 0;
  }

  dl,
  ol,
  ul {
    margin-top: 0;
    margin-bottom: 0;
  }

  ::-webkit-input-placeholder {
    color: inherit;
    opacity: 1;
  }

  :-ms-input-placeholder {
    color: inherit;
    opacity: 1;
  }

  ::-ms-input-placeholder {
    color: inherit;
    opacity: 1;
  }

  ::placeholder {
    color: inherit;
    opacity: 1;
  }

  .page-wrapper {
    position: relative;
    margin: 0 auto;
    width: 100%;
    min-width: 300px;
    overflow: hidden;
  }

  .container {
    padding-left: 15px;
    padding-right: 15px;
  }

  @media (min-width: 1200px) {
    .container {
      max-width: 1200px;
    }
  }

  ::-webkit-input-placeholder {
    color: inherit;
    opacity: 1;
  }

  :-ms-input-placeholder {
    color: inherit;
    opacity: 1;
  }

  ::-ms-input-placeholder {
    color: inherit;
    opacity: 1;
  }

  ::placeholder {
    color: inherit;
    opacity: 1;
  }

  .section-separator {
    border-color: var(--brote-border);
    border-width: 1px;
    margin-top: 0;
    margin-bottom: 0;
  }

  #particles-js {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    background-position: 50% 50%;
    opacity: 0.4;
    z-index: -1;
  }

  /*--------------------------------------------------------------
# Custom Cursor
--------------------------------------------------------------*/
  .custom-cursor__cursor {
    width: 25px;
    height: 25px;
    border-radius: 100%;
    border: 1px solid var(--brote-base, #a47c68);
    -webkit-transition: all 200ms ease-out;
    transition: all 200ms ease-out;
    position: fixed;
    pointer-events: none;
    left: 0;
    top: 0;
    -webkit-transform: translate(calc(-50% + 5px), -50%);
    transform: translate(calc(-50% + 5px), -50%);
    z-index: 999991;
  }

  .custom-cursor__cursor-two {
    width: 10px;
    height: 10px;
    border-radius: 100%;
    background-color: var(--brote-base, #a47c68);
    opacity: .3;
    position: fixed;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    pointer-events: none;
    -webkit-transition: width .3s, height .3s, opacity .3s;
    transition: width .3s, height .3s, opacity .3s;
    z-index: 999991;
  }

  .custom-cursor__hover {
    background-color: var(--brote-base, #a47c68);
    opacity: 0.4;
  }

  .custom-cursor__innerhover {
    width: 25px;
    height: 25px;
    opacity: .4;
  }

  .thm-btn {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    -webkit-appearance: none;
    outline: none !important;
    background-color: var(--brote-base);
    color: var(--brote-white);
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    padding-left: 50px;
    padding-right: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
    border-radius: 30px;
    -webkit-transition: all 0.5s linear;
    transition: all 0.5s linear;
    overflow: hidden;
    z-index: 1;
  }

  .thm-btn:hover {
    background-color: var(--brote-primary);
    color: var(--brote-white);
  }

  .thm-btn i {
    height: 40px;
    width: 40px;
    background-color: var(--brote-white);
    border-radius: 50%;
    text-align: center;
    line-height: 40px;
    margin-left: 15px;
    -webkit-transition: all 0.5s linear;
    transition: all 0.5s linear;
    color: var(--brote-base);
  }

  /* 
  .thm-btn:hover i {
    background-color: var(--brote-base);
  } */

  .section-title {
    position: relative;
    display: block;
    margin-top: -9px;
    margin-bottom: 47px;
  }

  .section-title__tagline {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    color: var(--brote-gray);
    font-size: 16px;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    line-height: 30px;
    margin-bottom: 3px;
  }

  .section-title__tagline::after {
    content: '';
    background-color: var(--brote-primary);
    width: 20px;
    height: 3px;
    margin-left: 10px;
  }

  .section-title__title {
    margin: 0;
    color: var(--brote-base);
    font-size: 50px;
    line-height: 61px;
    font-weight: 700;
  }

  .bootstrap-select .btn-light:not(:disabled):not(.disabled).active,
  .bootstrap-select .btn-light:not(:disabled):not(.disabled):active,
  .bootstrap-select .show>.btn-light.dropdown-toggle {
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline: none !important;
  }

  .bootstrap-select>.dropdown-toggle {
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
  }

  .bootstrap-select .dropdown-toggle:focus,
  .bootstrap-select>select.mobile-device:focus+.dropdown-toggle {
    outline: none !important;
  }

  .bootstrap-select .dropdown-menu {
    border: 0;
    padding-top: 0;
    padding-bottom: 0;
    margin-top: 0;
    z-index: 991;
    border-radius: 0;
  }

  .bootstrap-select .dropdown-menu>li+li>a {
    border-top: 1px solid rgba(255, 255, 255, 0.2);
  }

  .bootstrap-select .dropdown-menu>li.selected>a {
    background: var(--brote-primary);
    color: #fff;
  }

  .bootstrap-select .dropdown-menu>li>a {
    font-size: 16px;
    font-weight: 500;
    padding: 4px 20px;
    color: #ffffff;
    background: var(--brote-base);
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
  }

  .bootstrap-select .dropdown-menu>li>a:hover {
    background: var(--brote-white);
    color: var(--brote-base);
    cursor: pointer;
  }

  .preloader {
    position: fixed;
    background-color: #fff;
    background-position: center center;
    background-repeat: no-repeat;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 99999;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    text-align: center;
  }

  .preloader__image {
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
    -webkit-animation-name: flipInY;
    animation-name: flipInY;
    -webkit-animation-duration: 2s;
    animation-duration: 2s;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    background-image: url(../images/loader.png);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 60px auto;
    width: 100%;
    height: 100%;
  }

  /* scroll to top */
  .scroll-to-top {
    display: inline-block;
    width: 45px;
    height: 45px;
    background: var(--brote-white);
    position: fixed;
    bottom: 40px;
    right: 40px;
    z-index: 99;
    text-align: center;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
    display: none;
    border-radius: 50%;
    transition: all 0.4s ease;
  }

  .scroll-to-top i {
    color: var(--brote-base);
    font-size: 18px;
    line-height: 45px;
  }

  .scroll-to-top:hover {
    background-color: var(--brote-base);
  }

  .scroll-to-top:hover i {
    color: #fff;
  }

  /*--------------------------------------------------------------
# Navigations One
--------------------------------------------------------------*/
  .main-header {
    width: 100%;
    background: transparent;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    z-index: 99;
    position: relative;
  }

  .main-header__top {
    position: relative;
    display: block;
    background-color: transparent;
  }

  .main-header__top-social-box {
    position: relative;
    display: block;
    background-color: #ffffff;
    border-bottom: 1px solid #e4e5ea;
    padding: 4.5px 0;
    z-index: 1;
  }

  .main-header__top-social-box-inner {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding-left: 165px;
  }

  .main-header__top-social-text {
    font-size: 14px;
  }

  .main-header__top-social {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .main-header__top-social a {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 15px;
    color: var(--brote-gray);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .main-header__top-social a:hover {
    color: var(--brote-base);
  }

  .main-header__top-social a+a {
    margin-left: 25px;
  }

  .main-header__top-details {
    position: relative;
    display: block;
    padding: 40px 0 66px;
    background-color: white;
    -webkit-box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.07);
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.07);
  }

  .main-header__top-details-inner {
    position: relative;
    display: block;
  }

  .main-header__logo {
    position: absolute;
    top: -80px;
    left: 0;
    z-index: 99;
  }

  .main-header__logo>a {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    height: 140px;
    width: 115px;
    background-color: white;
    -webkit-box-shadow: 0px 20px 50px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 20px 50px 0px rgba(0, 0, 0, 0.1);
    border-bottom-left-radius: 70px;
    border-bottom-right-radius: 70px;
  }

  .main-header__logo a>img {
    width: 100%;
  }

  .main-header__top-details-list {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
  }

  .main-header__top-details-list li {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .main-header__top-details-list li:before {
    position: absolute;
    top: 0;
    bottom: 7px;
    left: -30px;
    content: "";
    width: 1px;
    background-color: #e4e5ea;
  }

  .main-header__top-details-list li:first-child:before {
    display: none;
  }

  .main-header__top-details-list li+li {
    margin-left: 60px;
  }

  .main-header__top-details-list li .icon {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .main-header__top-details-list li .icon span {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 30px;
    color: var(--brote-primary);
  }

  .main-header__top-details-list li .icon span.icon-location {
    font-size: 34px;
  }

  .main-header__top-details-list li .text {
    margin-left: 20px;
  }

  .main-header__top-details-list li .text h5 {
    font-size: 14px;
    font-weight: 500;
    color: var(--brote-gray);
  }

  .main-header__top-details-list li .text h5 a {
    color: var(--brote-gray);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .main-header__top-details-list li .text h5 a:hover {
    color: var(--brote-base);
  }

  .main-header__top-details-list li .text p {
    font-size: 16px;
    color: var(--brote-base);
    font-weight: 700;
  }

  .main-header__top-details-list li .text p a {
    color: var(--brote-base);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .main-header__top-details-list li .text p a:hover {
    color: var(--brote-primary);
  }

  .main-menu {
    position: relative;
    display: block;
    margin-top: -33px;
  }

  .main-menu__wrapper {
    position: relative;
    display: block;
  }

  .main-menu__wrapper-inner {
    display: block;
    background-color: var(--brote-base);
    padding-left: 40px;
    padding-right: 40px;
    border-radius: 10px;
  }

  .main-menu__left {
    display: block;
    float: left;
    padding: 5px;
  }

  .main-menu__main-menu-box {
    display: block;
  }

  .main-menu__right {
    position: relative;
    display: block;
    float: right;
  }

  .main-menu__search-box {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 23px 0;
  }

  .main-menu__search-box:before {
    position: absolute;
    top: 14px;
    bottom: 14px;
    left: -30px;
    content: "";
    width: 1px;
    background-color: var(--brote-white);
    opacity: .10;
  }

  .main-menu__search {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 24px;
    color: var(--brote-white);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .main-menu__search:hover {
    color: var(--brote-primary);
  }

  .stricky-header.main-menu {
    padding: 0px 0px;
    background-color: var(--brote-white);
    margin-top: 0;
  }

  .stricky-header .main-menu__main-menu-box {
    display: block;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .stricky-header .main-menu__wrapper {
    background-color: var(--brote-base);
  }

  .stricky-header .main-menu__wrapper-inner {
    -webkit-box-shadow: none;
    box-shadow: none;
    padding-left: 0px;
    padding-right: 0px;
    border-radius: 0;
  }

  .main-menu .main-menu__list,
  .main-menu .main-menu__list>li>ul,
  .main-menu .main-menu__list>li>ul>li>ul,
  .stricky-header .main-menu__list,
  .stricky-header .main-menu__list>li>ul,
  .stricky-header .main-menu__list>li>ul>li>ul {
    margin: 0;
    padding: 0;
    list-style-type: none;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    display: none;
  }

  @media (min-width: 1200px) {

    .main-menu .main-menu__list,
    .main-menu .main-menu__list>li>ul,
    .main-menu .main-menu__list>li>ul>li>ul,
    .stricky-header .main-menu__list,
    .stricky-header .main-menu__list>li>ul,
    .stricky-header .main-menu__list>li>ul>li>ul {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
    }
  }

  .main-menu .main-menu__list>li,
  .stricky-header .main-menu__list>li {
    padding-top: 20px;
    padding-bottom: 20px;
    position: relative;
  }

  .main-menu .main-menu__list>li+li,
  .stricky-header .main-menu__list>li+li {
    margin-left: 50px;
  }

  .main-menu .main-menu__list>li>a,
  .stricky-header .main-menu__list>li>a {
    font-size: 16px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    color: #b1c2f5;
    position: relative;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    font-weight: 400;
  }

  .main-menu .main-menu__list>li.current>a,
  .main-menu .main-menu__list>li:hover>a,
  .stricky-header .main-menu__list>li.current>a,
  .stricky-header .main-menu__list>li:hover>a {
    color: var(--brote-white, #ffffff);
  }

  .main-menu .main-menu__list>li>ul,
  .main-menu .main-menu__list>li>ul>li>ul,
  .stricky-header .main-menu__list>li>ul,
  .stricky-header .main-menu__list>li>ul>li>ul {
    position: absolute;
    top: 100%;
    left: 0;
    min-width: 220px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
    opacity: 0;
    visibility: hidden;
    -webkit-transform-origin: top center;
    transform-origin: top center;
    -webkit-transform: scaleY(0) translateZ(100px);
    transform: scaleY(0) translateZ(100px);
    -webkit-transition: opacity 500ms ease, visibility 500ms ease, -webkit-transform 700ms ease;
    transition: opacity 500ms ease, visibility 500ms ease, -webkit-transform 700ms ease;
    transition: opacity 500ms ease, visibility 500ms ease, transform 700ms ease;
    transition: opacity 500ms ease, visibility 500ms ease, transform 700ms ease, -webkit-transform 700ms ease;
    z-index: 99;
    -webkit-box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    overflow: hidden;
  }

  .main-menu .main-menu__list>li>ul>li>ul>li>ul,
  .stricky-header .main-menu__list>li>ul>li>ul>li>ul {
    display: none;
  }

  .main-menu .main-menu__list>li:hover>ul,
  .main-menu .main-menu__list>li>ul>li:hover>ul,
  .stricky-header .main-menu__list>li:hover>ul,
  .stricky-header .main-menu__list>li>ul>li:hover>ul {
    opacity: 1;
    visibility: visible;
    -webkit-transform: scaleY(1) translateZ(0px);
    transform: scaleY(1) translateZ(0px);
  }

  .main-menu .main-menu__list>li>ul>li,
  .main-menu .main-menu__list>li>ul>li>ul>li,
  .stricky-header .main-menu__list>li>ul>li,
  .stricky-header .main-menu__list>li>ul>li>ul>li {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 100%;
    flex: 1 1 100%;
    width: 100%;
    position: relative;
  }

  .main-menu .main-menu__list>li>ul>li+li,
  .main-menu .main-menu__list>li>ul>li>ul>li+li,
  .stricky-header .main-menu__list>li>ul>li+li,
  .stricky-header .main-menu__list>li>ul>li>ul>li+li {
    border-top: 1px solid rgba(var(--brote-base-rgb, 60, 53, 49), 0.1);
  }

  .main-menu .main-menu__list>li>ul>li>a,
  .main-menu .main-menu__list>li>ul>li>ul>li>a,
  .stricky-header .main-menu__list>li>ul>li>a,
  .stricky-header .main-menu__list>li>ul>li>ul>li>a {
    font-size: 16px;
    line-height: 30px;
    color: var(--brote-gray);
    letter-spacing: 0;
    font-weight: 400;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    padding: 10px 25px;
    -webkit-transition: 500ms;
    transition: 500ms;
  }

  .main-menu .main-menu__list>li>ul>li:hover>a,
  .main-menu .main-menu__list>li>ul>li>ul>li:hover>a,
  .stricky-header .main-menu__list>li>ul>li:hover>a,
  .stricky-header .main-menu__list>li>ul>li>ul>li:hover>a {
    background-color: var(--brote-base);
    color: var(--brote-white, #ffffff);
  }

  .main-menu .main-menu__list>li>ul>li>ul,
  .stricky-header .main-menu__list>li>ul>li>ul {
    top: 0;
    left: 100%;
  }

  .main-menu .main-menu__list li ul li>ul.right-align,
  .stricky-header .main-menu__list li ul li>ul.right-align {
    top: 0;
    left: auto;
    right: 100%;
  }

  .main-menu-three__main-menu-three-box .main-menu__list>.megamenu,
  .main-menu-two__main-menu-box .main-menu__list>.megamenu,
  .main-menu__wrapper .main-menu__list>.megamenu {
    position: static;
  }

  .main-menu-three__main-menu-three-box .main-menu__list>.megamenu>ul,
  .main-menu-two__main-menu-box .main-menu__list>.megamenu>ul,
  .main-menu__wrapper .main-menu__list>.megamenu>ul {
    top: 100% !important;
    left: 0 !important;
    right: 0 !important;
    background-color: transparent;
    -webkit-box-shadow: none;
    box-shadow: none;
  }

  .main-menu-three__main-menu-three-box .main-menu__list>.megamenu>ul>li,
  .main-menu-two__main-menu-box .main-menu__list>.megamenu>ul>li,
  .main-menu__wrapper .main-menu__list>.megamenu>ul>li {
    padding: 0 !important;
  }

  .stricky-header {
    position: fixed;
    z-index: 991;
    top: 0;
    left: 0;
    background-color: #fff;
    width: 100%;
    visibility: hidden;
    -webkit-transform: translateY(-120%);
    transform: translateY(-120%);
    -webkit-transition: visibility 500ms ease, -webkit-transform 500ms ease;
    transition: visibility 500ms ease, -webkit-transform 500ms ease;
    transition: transform 500ms ease, visibility 500ms ease;
    transition: transform 500ms ease, visibility 500ms ease, -webkit-transform 500ms ease;
    -webkit-box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.05);
  }

  @media (max-width: 1199px) {
    .stricky-header {
      display: none !important;
    }
  }

  .stricky-header.stricky-fixed {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    visibility: visible;
  }

  .stricky-header .main-menu__inner {
    -webkit-box-shadow: none;
    box-shadow: none;
    padding-right: 0;
    max-width: 1170px;
    width: 100%;
    margin: 0 auto;
  }

  .mobile-nav__buttons {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-left: auto;
    margin-right: 10px;
  }

  @media (min-width: 1200px) {
    .mobile-nav__buttons {
      display: none;
    }
  }

  .mobile-nav__buttons a {
    font-size: 20px;
    color: var(--brote-base);
    cursor: pointer;
  }

  .mobile-nav__buttons a+a {
    margin-left: 10px;
  }

  .mobile-nav__buttons a:hover {
    color: var(--brote-base);
  }

  .main-menu .mobile-nav__toggler {
    font-size: 20px;
    color: var(--brote-white);
    cursor: pointer;
    -webkit-transition: 500ms;
    transition: 500ms;
  }

  .main-menu .mobile-nav__toggler:hover {
    color: var(--brote-primary);
  }

  @media (min-width: 1200px) {
    .main-menu .mobile-nav__toggler {
      display: none;
    }
  }

  /*--------------------------------------------------------------
# Mobile Nav
--------------------------------------------------------------*/
  .mobile-nav__wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    z-index: 999;
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%);
    -webkit-transform-origin: left center;
    transform-origin: left center;
    -webkit-transition: visibility 500ms ease 500ms, -webkit-transform 500ms ease 500ms;
    transition: visibility 500ms ease 500ms, -webkit-transform 500ms ease 500ms;
    transition: transform 500ms ease 500ms, visibility 500ms ease 500ms;
    transition: transform 500ms ease 500ms, visibility 500ms ease 500ms, -webkit-transform 500ms ease 500ms;
    visibility: hidden;
  }

  .mobile-nav__wrapper .container {
    padding-left: 0;
    padding-right: 0;
  }

  .mobile-nav__wrapper.expanded {
    opacity: 1;
    -webkit-transform: translateX(0%);
    transform: translateX(0%);
    visibility: visible;
    -webkit-transition: visibility 500ms ease 0ms, -webkit-transform 500ms ease 0ms;
    transition: visibility 500ms ease 0ms, -webkit-transform 500ms ease 0ms;
    transition: transform 500ms ease 0ms, visibility 500ms ease 0ms;
    transition: transform 500ms ease 0ms, visibility 500ms ease 0ms, -webkit-transform 500ms ease 0ms;
  }

  .mobile-nav__overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #000000;
    opacity: 0.5;
    cursor: pointer;
  }

  .mobile-nav__content {
    width: 300px;
    background-color: var(--brote-base);
    z-index: 10;
    position: relative;
    height: 100%;
    overflow-y: auto;
    padding-top: 30px;
    padding-bottom: 30px;
    padding-left: 15px;
    padding-right: 15px;
    opacity: 0;
    visibility: hidden;
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%);
    -webkit-transition: opacity 500ms ease 0ms, visibility 500ms ease 0ms, -webkit-transform 500ms ease 0ms;
    transition: opacity 500ms ease 0ms, visibility 500ms ease 0ms, -webkit-transform 500ms ease 0ms;
    transition: opacity 500ms ease 0ms, visibility 500ms ease 0ms, transform 500ms ease 0ms;
    transition: opacity 500ms ease 0ms, visibility 500ms ease 0ms, transform 500ms ease 0ms, -webkit-transform 500ms ease 0ms;
  }

  .mobile-nav__wrapper.expanded .mobile-nav__content {
    opacity: 1;
    visibility: visible;
    -webkit-transform: translateX(0);
    transform: translateX(0);
    -webkit-transition: opacity 500ms ease 500ms, visibility 500ms ease 500ms, -webkit-transform 500ms ease 500ms;
    transition: opacity 500ms ease 500ms, visibility 500ms ease 500ms, -webkit-transform 500ms ease 500ms;
    transition: opacity 500ms ease 500ms, visibility 500ms ease 500ms, transform 500ms ease 500ms;
    transition: opacity 500ms ease 500ms, visibility 500ms ease 500ms, transform 500ms ease 500ms, -webkit-transform 500ms ease 500ms;
  }

  .mobile-nav__content .logo-box {
    margin-bottom: 40px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }

  .mobile-nav__close {
    position: absolute;
    top: 20px;
    right: 15px;
    font-size: 18px;
    color: var(--brote-white);
    cursor: pointer;
  }

  .mobile-nav__content .main-menu__list,
  .mobile-nav__content .main-menu__list>li>ul,
  .mobile-nav__content .main-menu__list>li>ul>li>ul {
    margin: 0;
    padding: 0;
    list-style-type: none;
  }

  .mobile-nav__content .main-menu__list>li>ul,
  .mobile-nav__content .main-menu__list>li>ul>li>ul {
    display: none;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    margin-left: 0.5em;
  }

  .mobile-nav__content .main-menu__list>li:not(:last-child),
  .mobile-nav__content .main-menu__list>li>ul>li:not(:last-child),
  .mobile-nav__content .main-menu__list>li>ul>li>ul>li:not(:last-child) {
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  }

  .mobile-nav__content .main-menu__list>li>a>.main-menu-border {
    display: none !important;
  }

  .mobile-nav__content .main-menu__list>li>a,
  .mobile-nav__content .main-menu__list>li>ul>li>a,
  .mobile-nav__content .main-menu__list>li>ul>li>ul>li>a {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    line-height: 30px;
    color: #ffffff;
    font-size: 14px;
    font-family: var(--brote-font, "Rubik", sans-serif);
    font-weight: 500;
    height: 46px;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transition: 500ms;
    transition: 500ms;
  }

  .mobile-nav__content .main-menu__list>li>a.expanded .mobile-nav__content .main-menu__list>li>ul>li>a.expanded .mobile-nav__content .main-menu__list>li>ul>li>ul>li>a.expanded {
    color: var(--brote-base);
  }

  .mobile-nav__content .main-menu__list>li>a>button,
  .mobile-nav__content .main-menu__list>li>ul>li>a>button,
  .mobile-nav__content .main-menu__list>li>ul>li>ul>li>a>button {
    width: 30px;
    height: 30px;
    background-color: var(--brote-primary);
    border: none;
    outline: none;
    color: #fff;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    -webkit-transition: -webkit-transform 500ms ease;
    transition: -webkit-transform 500ms ease;
    transition: transform 500ms ease;
    transition: transform 500ms ease, -webkit-transform 500ms ease;
    padding: 0;
  }

  .mobile-nav__content .main-menu__list>li>a>button.expanded,
  .mobile-nav__content .main-menu__list>li>ul>li>a>button.expanded,
  .mobile-nav__content .main-menu__list>li>ul>li>ul>li>a>button.expanded {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
    background-color: #fff;
    color: var(--brote-base);
  }

  /* no menu after 2rd level dropdown */
  .mobile-nav__content .main-menu__list>li>ul>li>ul>li>a>button,
  .mobile-nav__content .main-menu__list>li>ul>li>ul>li>ul {
    display: none !important;
  }

  .mobile-nav__content .main-menu__list li.cart-btn span {
    position: relative;
    top: auto;
    right: auto;
    -webkit-transform: translate(0, 0);
    transform: translate(0, 0);
  }

  .mobile-nav__content .main-menu__list li.cart-btn i {
    font-size: 16px;
  }

  .mobile-nav__top {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin-bottom: 30px;
  }

  .mobile-nav__top .main-menu__login a {
    color: var(--brote-text-dark);
  }

  .mobile-nav__container {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  }

  .mobile-nav__social {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .mobile-nav__social a {
    font-size: 16px;
    color: var(--brote-white);
    -webkit-transition: 500ms;
    transition: 500ms;
  }

  .mobile-nav__social a+a {
    margin-left: 30px;
  }

  .mobile-nav__social a:hover {
    color: var(--brote-primary);
  }

  .mobile-nav__contact {
    margin-bottom: 0;
    margin-top: 20px;
    margin-bottom: 20px;
  }

  .mobile-nav__contact li {
    color: var(--brote-text-dark);
    font-size: 14px;
    font-weight: 500;
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .mobile-nav__contact li+li {
    margin-top: 15px;
  }

  .mobile-nav__contact li a {
    color: #ffffff;
    -webkit-transition: 500ms;
    transition: 500ms;
  }

  .mobile-nav__contact li a:hover {
    color: var(--brote-primary);
  }

  .mobile-nav__contact li>i {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: var(--brote-primary);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    text-align: center;
    font-size: 11px;
    margin-right: 10px;
    color: #fff;
  }

  .mobile-nav__container .main-logo,
  .mobile-nav__container .topbar__buttons,
  .mobile-nav__container .main-menu__language,
  .mobile-nav__container .main-menu__login {
    display: none;
  }

  /*--------------------------------------------------------------
# Home Showcase
--------------------------------------------------------------*/
  .home-showcase__inner {
    background-color: #fff;
    padding: 40px;
    -webkit-box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.1);
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
  }

  .home-showcase .row {
    --bs-gutter-x: 42px;
    --bs-gutter-y: 20px;
  }

  .home-showcase__image {
    position: relative;
    background-color: var(--brote-base);
    overflow: hidden;
    border-radius: 10px;
  }

  .home-showcase__image>img {
    width: 100%;
    border-radius: 10px;
    -webkit-transition: 500ms ease;
    transition: 500ms ease;
    -webkit-transform: scale(1);
    transform: scale(1);
  }

  .home-showcase__image:hover>img {
    opacity: 0.75;
  }

  .home-showcase__image:hover .home-showcase__buttons {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
    opacity: 1;
    visibility: visible;
  }

  .home-showcase__buttons {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-transform: scale(1, 0);
    transform: scale(1, 0);
    opacity: 0;
    visibility: hidden;
    -webkit-transform-origin: bottom center;
    transform-origin: bottom center;
    -webkit-transition: 500ms ease;
    transition: 500ms ease;
  }

  .home-showcase__buttons__item {
    padding: 10px 20px;
    width: 150px;
    text-align: center;
  }

  .home-showcase__buttons__item+.home-showcase__buttons__item {
    margin-top: 10px;
  }

  .home-showcase__title {
    margin: 0;
    text-align: center;
    font-size: 16px;
    font-weight: 400;
    color: var(--brote-base);
    margin-top: 15px;
  }

  .mobile-nav__wrapper .home-showcase .row [class*=col-] {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
  }

  .mobile-nav__wrapper .home-showcase__inner {
    padding: 15px 0px;
    background-color: rgba(0, 0, 0, 0);
  }

  .mobile-nav__wrapper .home-showcase__title {
    color: var(--brote-white, #ffffff);
  }

  /*--------------------------------------------------------------
# Navigations Two
--------------------------------------------------------------*/
  .main-header-two {
    position: relative;
    display: block;
  }

  .main-header-two__top {
    position: relative;
    display: block;
    background-color: var(--brote-base);
  }

  .main-header-two__top-inner {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
  }

  .main-header-two__top-address {
    position: relative;
    display: block;
    padding: 5px 0;
  }

  .main-header-two__top-address-list {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .main-header-two__top-address-list li {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .main-header-two__top-address-list li+li {
    margin-left: 30px;
  }

  .main-header-two__top-address-list li .icon {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .main-header-two__top-address-list li .icon span {
    font-size: 15px;
    color: var(--brote-primary);
  }

  .main-header-two__top-address-list li .text {
    margin-left: 10px;
  }

  .main-header-two__top-address-list li .text p {
    font-size: 14px;
    color: var(--brote-white);
  }

  .main-header-two__top-address-list li .text p a {
    color: var(--brote-white);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .main-header-two__top-address-list li .text p a:hover {
    color: var(--brote-primary);
  }

  .main-header-two__top-social {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    background-color:
      <?php echo $secondary_color; ?>
    ;
    padding: 12.5px 30px;
  }

  .main-header-two__top-social a {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 15px;
    color: var(--brote-white);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .main-header-two__top-social a+a {
    margin-left: 30px;
  }

  .main-header-two__top-social a:hover {
    color: var(--brote-primary);
  }

  .main-menu-two {
    margin-top: 0;
  }

  .main-menu-two__wrapper {
    position: relative;
    display: block;
  }

  .main-menu-two__wrapper-inner {
    display: block;
  }

  .main-menu-two__left {
    display: block;
    float: left;
  }

  .main-menu-two__logo {
    position: relative;
    display: block;
    float: left;
    padding: 14px 0;
    margin-right: 70px;
  }

  .main-menu-two__main-menu-box {
    display: block;
    float: left;
  }

  .main-menu-two__right {
    position: relative;
    display: block;
    float: right;
  }

  .main-menu-two__search-call {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .main-menu-two__search-box {
    position: relative;
    display: block;
    padding: 46px 0;
  }

  .main-menu-two__search-box:before {
    content: "";
    position: absolute;
    top: 38px;
    bottom: 38px;
    left: -30px;
    width: 1px;
    background-color: #e4e5ea;
  }

  .main-menu-two__search {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 24px;
    color: var(--brote-base);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .main-menu-two__search:hover {
    color: var(--brote-primary);
  }

  .main-menu-two__call {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 28px 0;
    margin-left: 30px;
  }

  .main-menu-two__call-icon {
    position: relative;
    height: 60px;
    width: 60px;
    background-color: #eef0f6;
    border-radius: 50%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    font-size: 26px;
    color: var(--brote-base);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .main-menu-two__call-icon:hover {
    background-color: var(--brote-base);
    color: var(--brote-white);
  }

  .main-menu-two__call-content {
    position: relative;
    margin-left: 15px;
    top: -4px;
  }

  .main-menu-two__call-sub-title {
    font-size: 14px;
  }

  .main-menu-two__call-number {
    font-size: 18px;
    font-weight: 700;
    line-height: 18px;
  }

  .main-menu-two__call-number a {
    color: var(--brote-base);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .main-menu-two__call-number a:hover {
    color: var(--brote-primary);
  }

  .main-menu-two .main-menu__list>li>a,
  .stricky-header.main-menu-two .main-menu__list>li>a {
    color: var(--brote-gray);
    font-weight: 500;
  }

  .main-menu-two .main-menu__list>li.current>a,
  .main-menu-two .main-menu__list>li:hover>a,
  .stricky-header.main-menu-two .main-menu__list>li.current>a,
  .stricky-header.main-menu-two .main-menu__list>li:hover>a {
    color: var(--brote-base);
  }

  .main-menu-two .main-menu__list>li,
  .stricky-header.main-menu-two .main-menu__list>li {
    padding-top: 43px;
    padding-bottom: 43px;
  }

  /*--------------------------------------------------------------
# Navigations Three
--------------------------------------------------------------*/
  .main-header-three {
    position: relative;
    display: block;
  }

  .main-menu-three {
    margin-top: 0;
    padding: 0 60px;
  }

  .main-menu-three__wrapper {
    position: relative;
    display: block;
  }

  .main-menu-three__left {
    float: left;
    display: block;
  }

  .main-menu-three__logo {
    display: block;
    float: left;
    margin-right: 240px;
    padding: 12px 0;
  }

  .main-menu-three__main-menu-three-box {
    display: block;
    float: left;
  }

  .main-menu-three__right {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    float: right;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .main-header-three__top-social {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-right: 60px;
    padding: 48.5px 0;
  }

  .main-header-three__top-social a {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 15px;
    color: var(--brote-gray);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .main-header-three__top-social a:hover {
    color: var(--brote-base);
  }

  .main-header-three__top-social a+a {
    margin-left: 30px;
  }

  .main-menu-three__search-call {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .main-menu-three__search-box {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-right: 30px;
    padding: 44px 0;
  }

  .main-menu-three__search-box:before {
    content: "";
    position: absolute;
    top: 36px;
    bottom: 36px;
    left: -30px;
    width: 1px;
    background-color: #e4e5ea;
  }

  .main-menu-three__search {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 24px;
    color: var(--brote-base);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .main-menu-three__search:hover {
    color: var(--brote-primary);
  }

  .main-menu-three__call {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 26px 0;
  }

  .main-menu-three__call-icon {
    position: relative;
    height: 60px;
    width: 60px;
    background-color: #eef0f6;
    border-radius: 50%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    font-size: 26px;
    color: var(--brote-base);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .main-menu-three__call-icon:hover {
    color: var(--brote-white);
    background-color: var(--brote-base);
  }

  .main-menu-three__call-content {
    position: relative;
    margin-left: 15px;
    top: -4px;
  }

  .main-menu-three__call-sub-title {
    font-size: 14px;
  }

  .main-menu-three__call-number {
    font-size: 18px;
    font-weight: 700;
    line-height: 18px;
  }

  .main-menu-three__call-number a {
    color: var(--brote-base);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .main-menu-three__call-number a:hover {
    color: var(--brote-primary);
  }

  .main-menu-three .main-menu__list>li>a,
  .stricky-header.main-menu-three .main-menu__list>li>a {
    color: var(--brote-gray);
    font-weight: 500;
  }

  .main-menu-three .main-menu__list>li.current>a,
  .main-menu-three .main-menu__list>li:hover>a,
  .stricky-header.main-menu-three .main-menu__list>li.current>a,
  .stricky-header.main-menu-three .main-menu__list>li:hover>a {
    color: var(--brote-base);
  }

  .main-menu-three .main-menu__list>li,
  .stricky-header.main-menu-three .main-menu__list>li {
    padding-top: 41px;
    padding-bottom: 41px;
  }

  .stricky-header.main-menu-three {
    margin-top: 0;
    padding: 0 60px;
  }

  /*--------------------------------------------------------------
# Search Popup
--------------------------------------------------------------*/
  .search-popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    z-index: 9999;
    padding-left: 20px;
    padding-right: 20px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translateY(-110%);
    transform: translateY(-110%);
    -webkit-transition: opacity 500ms ease, -webkit-transform 500ms ease;
    transition: opacity 500ms ease, -webkit-transform 500ms ease;
    transition: transform 500ms ease, opacity 500ms ease;
    transition: transform 500ms ease, opacity 500ms ease, -webkit-transform 500ms ease;
  }

  .search-popup.active {
    -webkit-transform: translateY(0%);
    transform: translateY(0%);
  }

  .search-popup__overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: var(--brote-base);
    opacity: 0.75;
    cursor: pointer;
  }

  .search-popup__content {
    width: 100%;
    max-width: 560px;
  }

  .search-popup__content form {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    position: relative;
    background-color: #fff;
    border-radius: 10px;
    overflow: hidden;
  }

  .search-popup__content form input[type="search"],
  .search-popup__content form input[type="text"] {
    width: 100%;
    background-color: #fff;
    font-size: 16px;
    border: none;
    outline: none;
    height: 66px;
    padding-left: 30px;
  }

  .search-popup__content .thm-btn {
    padding: 0;
    width: 68px;
    height: 68px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    text-align: center;
    position: absolute;
    top: 0;
    right: -1px;
    border-radius: 0;
    background-color: var(--brote-base);
    border: 0;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
  }

  .search-popup__content .thm-btn i {
    background-color: transparent;
    margin-left: 0;
    color: #fff;
    font-weight: bold;
  }

  .search-popup__content .thm-btn:hover {
    background-color: var(--brote-primary);
  }

  /*--------------------------------------------------------------
# Main Slider
--------------------------------------------------------------*/
  .main-slider {
    position: relative;
    display: block;
    margin-bottom: -70px;
    top: -70px;
    z-index: 91;
    height: 700px;
  }

  .main-slider .swiper-container{
    height: 700px;
  }

  .main-slider .swiper-slide {
    position: relative;
    background-color: #eef0f6;
  }

  .main-slider .container {
    position: relative;
    padding-top: 157px;
    padding-bottom: 255px;
    z-index: 30;
  }

  .main-slider .image-layer {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-repeat: no-repeat;
    background-position: right center;
    background-size: cover;
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: opacity 1500ms ease-in, -webkit-transform 7000ms ease;
    transition: opacity 1500ms ease-in, -webkit-transform 7000ms ease;
    transition: transform 7000ms ease, opacity 1500ms ease-in;
    transition: transform 7000ms ease, opacity 1500ms ease-in, -webkit-transform 7000ms ease;
    z-index: 1;
    height: 700px;
  }

  .main-slider .swiper-slide-active .image-layer {
    -webkit-transform: scale(1.15);
    transform: scale(1.15);
  }

  /* .main-slider .image-layer:before {
    position: absolute;
    left: 600px;
    top: 0px;
    bottom: 0;
    width: 587px;
    content: "";
    background-image: -webkit-gradient(linear, left top, right top, from(#eef0f6), to(rgba(238, 240, 246, 0)));
    background-image: linear-gradient(90deg, #eef0f6 0%, rgba(238, 240, 246, 0) 100%);
    z-index: -1;
  } */

  .main-slider .image-layer::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    /* Adjust the opacity as needed */
    z-index: 1;
  }

  .main-slider__content {
    position: relative;
    z-index: 2;
    /* To make sure text stays above the overlay */
  }


  .main-slider-bubble {
    position: absolute;
    left: 0;
    bottom: 0px;
    right: 0;
    height: 231px;
    z-index: 1;
  }

  .main-slider-bubble-bg {
    position: relative;
    display: block;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: top center;
  }

  .main-slider-star-1 {
    position: absolute;
    top: 8px;
    left: 100px;
    z-index: 1;
  }

  .main-slider-star-1 img {
    width: auto;
  }

  .main-slider-star-2 {
    position: absolute;
    bottom: 265px;
    left: 215px;
    z-index: 1;
  }

  .main-slider-star-2 img {
    width: auto;
  }

  .main-slider-star-3 {
    position: absolute;
    bottom: 125px;
    left: 660px;
    z-index: 1;
  }

  .main-slider-star-3 img {
    width: auto;
  }

  .main-slider__content {
    position: relative;
    display: block;
    text-align: left;
  }

  .main-slider__sub-title {
    font-size: 20px;
    color: var(--brote-white);
    font-weight: 500;
    opacity: 0;
    visibility: hidden;
    -webkit-transform: translateY(-120px);
    transform: translateY(-120px);
    -webkit-transition-delay: 1000ms;
    transition-delay: 1000ms;
    -webkit-transition: opacity 2000ms ease, -webkit-transform 2000ms ease;
    transition: opacity 2000ms ease, -webkit-transform 2000ms ease;
    transition: transform 2000ms ease, opacity 2000ms ease;
    transition: transform 2000ms ease, opacity 2000ms ease, -webkit-transform 2000ms ease;
  }

  .main-slider__title {
    font-size: 80px;
    color: var(--brote-white);
    font-weight: 700;
    line-height: 95px;
    letter-spacing: -0.04em;
    margin-top: 12px;
    margin-bottom: 36px;
    opacity: 0;
    visibility: hidden;
    -webkit-transform: translateY(120px);
    transform: translateY(120px);
    -webkit-transition-delay: 1000ms;
    transition-delay: 1000ms;
    -webkit-transition: opacity 2000ms ease, -webkit-transform 2000ms ease;
    transition: opacity 2000ms ease, -webkit-transform 2000ms ease;
    transition: transform 2000ms ease, opacity 2000ms ease;
    transition: transform 2000ms ease, opacity 2000ms ease, -webkit-transform 2000ms ease;
  }

  .main-slider__btn-box {
    position: relative;
    display: block;
    opacity: 0;
    visibility: hidden;
    -webkit-transform: translateY(-120px);
    transform: translateY(-120px);
    -webkit-transition-delay: 1000ms;
    transition-delay: 1000ms;
    -webkit-transition: opacity 2000ms ease, -webkit-transform 2000ms ease;
    transition: opacity 2000ms ease, -webkit-transform 2000ms ease;
    transition: transform 2000ms ease, opacity 2000ms ease;
    transition: transform 2000ms ease, opacity 2000ms ease, -webkit-transform 2000ms ease;
  }

  .main-slider .swiper-slide-active .main-slider__title,
  .main-slider .swiper-slide-active .main-slider__sub-title,
  .main-slider .swiper-slide-active .main-slider__btn-box {
    visibility: visible;
    opacity: 1;
    -webkit-transform: translateY(0) translateX(0);
    transform: translateY(0) translateX(0);
  }

  .main-slider__nav {
    position: absolute;
    top: 41%;
    left: 60px;
    z-index: 100;
    -webkit-transform: translateY(-50%) translateX(0);
    transform: translateY(-50%) translateX(0);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: end;
    -ms-flex-align: end;
    align-items: flex-end;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
  }

  .main-slider__nav .swiper-button-next,
  .main-slider__nav .swiper-button-prev {
    position: relative;
    top: auto;
    left: auto;
    right: auto;
    bottom: auto;
    z-index: 100;
    width: 50px;
    height: 50px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 15px;
    color: #84868b;
    background-color: var(--brote-white);
    border-radius: 50%;
    margin: 0;
    text-align: center;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .main-slider__nav .swiper-button-next:hover,
  .main-slider__nav .swiper-button-prev:hover {
    color: var(--brote-white);
    background-color: var(--brote-base);
  }

  .main-slider__nav .swiper-button-next::after,
  .main-slider__nav .swiper-button-prev::after {
    display: none;
  }

  .main-slider__nav .swiper-button-prev {
    margin-bottom: 10px;
  }

  .main-slider__nav .swiper-button-prev .angle-left {
    position: relative;
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
  }

  /*--------------------------------------------------------------
# Main Slider Two
--------------------------------------------------------------*/
  .main-slider-two {
    margin-top: 0;
    z-index: 1;
  }

  .main-slider-two .swiper-slide {
    position: relative;
  }

  .main-slider-two .container {
    position: relative;
    padding-top: 160px;
    padding-bottom: 170px;
    z-index: 30;
  }

  .main-slider-two-bg-box {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1;
  }

  .main-slider-two-image-layer {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 60%;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: opacity 1500ms ease-in, -webkit-transform 7000ms ease;
    transition: opacity 1500ms ease-in, -webkit-transform 7000ms ease;
    transition: transform 7000ms ease, opacity 1500ms ease-in;
    transition: transform 7000ms ease, opacity 1500ms ease-in, -webkit-transform 7000ms ease;
    z-index: 1;
  }

  .main-slider-two .swiper-slide-active .main-slider-two-image-layer {
    -webkit-transform: scale(1.15);
    transform: scale(1.15);
  }

  .main-slider-two-shape-box {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 55%;
    z-index: 2;
  }

  .main-slider-two-shape-1 {
    position: absolute;
    top: 0;
    right: 0;
    left: 0px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: left top;
    z-index: 2;
    bottom: 0;
  }

  .main-slider-two-shape-2 {
    position: absolute;
    top: 55px;
    left: 90px;
    bottom: 0;
    right: 0px;
    opacity: .30;
    z-index: 2;
  }

  .main-slider-two-bubble-1 {
    position: absolute;
    top: 120px;
    left: 130px;
    opacity: .70;
    z-index: 3;
  }

  .main-slider-two-bubble-1 img {
    width: auto;
  }

  .main-slider-two-bubble-2 {
    position: absolute;
    top: 66px;
    left: 138px;
    opacity: .70;
    z-index: 2;
  }

  .main-slider-two-bubble-2 img {
    width: auto;
  }

  .main-slider-two-bubble-3 {
    position: absolute;
    bottom: 104px;
    left: 235px;
    z-index: 2;
  }

  .main-slider-two-bubble-3 img {
    width: auto;
  }

  .main-slider-two-bubble-4 {
    position: absolute;
    top: 96px;
    right: 104px;
    opacity: .70;
    z-index: 2;
  }

  .main-slider-two-bubble-4 img {
    width: auto;
  }

  .main-slider-two-bubble-5 {
    position: absolute;
    right: 50px;
    bottom: 260px;
    opacity: .70;
    z-index: 2;
  }

  .main-slider-two-bubble-5 img {
    width: auto;
  }

  .main-slider-two-bubble-6 {
    position: absolute;
    bottom: 104px;
    right: 192px;
    opacity: .70;
    z-index: 2;
  }

  .main-slider-two-bubble-6 img {
    width: auto;
  }

  .main-slider-two-bubble-7 {
    position: absolute;
    right: 150px;
    bottom: 60px;
    opacity: .70;
    z-index: 3;
  }

  .main-slider-two-bubble-7 img {
    width: auto;
  }

  .main-slider-two__content {
    position: relative;
    display: block;
    text-align: right;
  }

  .main-slider-two__sub-title {
    position: relative;
    display: inline-block;
    font-size: 18px;
    color: var(--brote-white);
    font-weight: 500;
    opacity: 0;
    visibility: hidden;
    -webkit-transform: translateY(-120px);
    transform: translateY(-120px);
    -webkit-transition-delay: 1000ms;
    transition-delay: 1000ms;
    -webkit-transition: opacity 2000ms ease, -webkit-transform 2000ms ease;
    transition: opacity 2000ms ease, -webkit-transform 2000ms ease;
    transition: transform 2000ms ease, opacity 2000ms ease;
    transition: transform 2000ms ease, opacity 2000ms ease, -webkit-transform 2000ms ease;
  }

  .main-slider-two__sub-title:before {
    position: absolute;
    top: 14px;
    left: -40px;
    height: 5px;
    width: 30px;
    content: "";
    background-color: var(--brote-primary);
    border-radius: 2px;
  }

  .main-slider-two__title {
    font-size: 60px;
    color: var(--brote-white);
    font-weight: 700;
    line-height: 71px;
    margin-top: 9px;
    margin-bottom: 27px;
    letter-spacing: -0.04em;
    opacity: 0;
    visibility: hidden;
    -webkit-transform: translateY(-120px);
    transform: translateY(-120px);
    -webkit-transition-delay: 1000ms;
    transition-delay: 1000ms;
    -webkit-transition: opacity 2000ms ease, -webkit-transform 2000ms ease;
    transition: opacity 2000ms ease, -webkit-transform 2000ms ease;
    transition: transform 2000ms ease, opacity 2000ms ease;
    transition: transform 2000ms ease, opacity 2000ms ease, -webkit-transform 2000ms ease;
  }

  .main-slider-two__text {
    font-size: 16px;
    color: #b1c2f5;
    letter-spacing: -0.04em;
    opacity: 0;
    visibility: hidden;
    -webkit-transform: translateY(120px);
    transform: translateY(120px);
    -webkit-transition-delay: 1000ms;
    transition-delay: 1000ms;
    -webkit-transition: opacity 2000ms ease, -webkit-transform 2000ms ease;
    transition: opacity 2000ms ease, -webkit-transform 2000ms ease;
    transition: transform 2000ms ease, opacity 2000ms ease;
    transition: transform 2000ms ease, opacity 2000ms ease, -webkit-transform 2000ms ease;
  }

  .main-slider-two__btn-box {
    margin-top: 40px;
    opacity: 0;
    visibility: hidden;
    -webkit-transform: translateY(120px);
    transform: translateY(120px);
    -webkit-transition-delay: 1000ms;
    transition-delay: 1000ms;
    -webkit-transition: opacity 2000ms ease, -webkit-transform 2000ms ease;
    transition: opacity 2000ms ease, -webkit-transform 2000ms ease;
    transition: transform 2000ms ease, opacity 2000ms ease;
    transition: transform 2000ms ease, opacity 2000ms ease, -webkit-transform 2000ms ease;
  }

  .main-slider-two__btn {
    background-color: var(--brote-white);
    color: var(--brote-base);
  }

  .main-slider-two__btn i {
    color: var(--brote-white);
  }

  .main-slider-two .swiper-slide-active .main-slider-two__sub-title,
  .main-slider-two .swiper-slide-active .main-slider-two__title,
  .main-slider-two .swiper-slide-active .main-slider-two__btn-box,
  .main-slider-two .swiper-slide-active .main-slider-two__text {
    visibility: visible;
    opacity: 1;
    -webkit-transform: translateY(0) translateX(0);
    transform: translateY(0) translateX(0);
  }

  /*--------------------------------------------------------------
# Main Slider Three
--------------------------------------------------------------*/
  .main-slider-three {
    position: relative;
    display: block;
    z-index: 1;
  }

  .main-slider-three .swiper-slide {
    position: relative;
    background-color: var(--brote-base);
  }

  .main-slider-three .container {
    position: relative;
    padding-top: 155px;
    padding-bottom: 165px;
    z-index: 30;
  }

  .main-slider-three .image-layer-three {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: opacity 1500ms ease-in, -webkit-transform 7000ms ease;
    transition: opacity 1500ms ease-in, -webkit-transform 7000ms ease;
    transition: transform 7000ms ease, opacity 1500ms ease-in;
    transition: transform 7000ms ease, opacity 1500ms ease-in, -webkit-transform 7000ms ease;
    z-index: 1;
  }

  .main-slider-three .image-layer-three::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: rgba(0, 22, 89, 0.7);
    z-index: 2;
  }

  .main-slider-three .swiper-slide-active .image-layer-three {
    -webkit-transform: scale(1.15);
    transform: scale(1.15);
  }

  .main-slider-three__content {
    position: relative;
    display: block;
  }

  .main-slider-three__title {
    font-size: 90px;
    line-height: 90px;
    color: var(--brote-white);
    font-weight: 700;
    margin-bottom: 23px;
    letter-spacing: -0.04em;
    opacity: 0;
    visibility: hidden;
    -webkit-transform: translateY(-120px);
    transform: translateY(-120px);
    -webkit-transition-delay: 1000ms;
    transition-delay: 1000ms;
    -webkit-transition: opacity 2000ms ease, -webkit-transform 2000ms ease;
    transition: opacity 2000ms ease, -webkit-transform 2000ms ease;
    transition: transform 2000ms ease, opacity 2000ms ease;
    transition: transform 2000ms ease, opacity 2000ms ease, -webkit-transform 2000ms ease;
  }

  .main-slider-three__title span {
    position: relative;
    display: inline-block;
  }

  .main-slider-three__title span:before {
    position: absolute;
    bottom: 1px;
    left: 6px;
    right: 0;
    background-image: url(../images/shapes/main-slider-three-shape-1.png);
    background-repeat: no-repeat;
    width: 223px;
    height: 11px;
    content: "";
    z-index: -1;
  }

  .main-slider-three__text {
    font-size: 18px;
    color: var(--brote-white);
    line-height: 36px;
    opacity: .80;
    padding-bottom: 38px;
    visibility: hidden;
    -webkit-transform: translateY(120px);
    transform: translateY(120px);
    -webkit-transition-delay: 1000ms;
    transition-delay: 1000ms;
    -webkit-transition: opacity 2000ms ease, -webkit-transform 2000ms ease;
    transition: opacity 2000ms ease, -webkit-transform 2000ms ease;
    transition: transform 2000ms ease, opacity 2000ms ease;
    transition: transform 2000ms ease, opacity 2000ms ease, -webkit-transform 2000ms ease;
  }

  .main-slider-three__btn-box {
    opacity: 0;
    visibility: hidden;
    -webkit-transform: translateY(120px);
    transform: translateY(120px);
    -webkit-transition-delay: 1000ms;
    transition-delay: 1000ms;
    -webkit-transition: opacity 2000ms ease, -webkit-transform 2000ms ease;
    transition: opacity 2000ms ease, -webkit-transform 2000ms ease;
    transition: transform 2000ms ease, opacity 2000ms ease;
    transition: transform 2000ms ease, opacity 2000ms ease, -webkit-transform 2000ms ease;
  }

  .main-slider-three__get-quote {
    position: relative;
    display: block;
    margin-top: -467px;
  }

  .main-slider-three__get-quote-container {
    position: relative;
    display: block;
    max-width: 1200px;
    width: 100%;
    padding: 0 15px;
    margin: 0 auto;
  }

  .main-slider-three__get-quote-inner {
    position: relative;
    display: block;
    max-width: 400px;
    width: 100%;
    float: right;
    text-align: center;
    background-color: var(--brote-primary);
    border-radius: 30px;
    padding: 43px 48px 50px;
    z-index: 1;
  }

  .main-slider-three__get-quote-shape {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 238px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    opacity: .30;
    z-index: -1;
  }

  .main-slider-three__get-quote-title {
    font-size: 30px;
    color: var(--brote-white);
    font-weight: 700;
    line-height: 36px;
    margin-bottom: 22px;
  }

  .main-slider-three__get-quote-form {
    position: relative;
    display: block;
  }

  .main-slider-three__get-quote-input-box {
    position: relative;
    display: block;
    margin-bottom: 10px;
  }

  .main-slider-three__get-quote-input-box input[type="text"],
  .main-slider-three__get-quote-input-box input[type="email"] {
    height: 60px;
    width: 100%;
    border: none;
    outline: none;
    color: var(--brote-gray);
    font-size: 14px;
    font-weight: 500;
    border-radius: 30px;
    padding-left: 30px;
    padding-right: 30px;
  }

  .main-slider-three__get-quote-btn {
    border: none;
  }

  .main-slider-three__get-quote-btn:hover {
    background-color: var(--brote-white);
    color: var(--brote-base);
  }

  .main-slider-three__get-quote-btn:hover i {
    background-color: var(--brote-base);
    color: var(--brote-white);
  }

  .main-slider-three__get-quote-input-box .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
    position: relative;
    display: block;
    width: 100% !important;
  }

  .main-slider-three__get-quote-input-box .bootstrap-select>.dropdown-toggle::after {
    display: none;
  }

  .main-slider-three__get-quote-input-box .bootstrap-select>.dropdown-toggle {
    position: relative;
    height: 60px;
    outline: none !important;
    border-radius: 30px;
    border: 0;
    background-color: rgba(var(--brote-white-rgb), 1) !important;
    margin: 0;
    padding: 0;
    padding-left: 30px;
    padding-right: 30px;
    color: var(--brote-gray) !important;
    font-size: 14px;
    line-height: 60px;
    font-weight: 500;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    background-repeat: no-repeat;
    background-size: 14px 12px;
    background-position: right 25.75px center;
  }

  .main-slider-three__get-quote-input-box .bootstrap-select>.dropdown-toggle:before {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 30px;
    font-family: "Font Awesome 5 Free";
    content: "\f107";
    font-weight: 900;
    font-size: 14px;
    color: var(--brote-gray);
  }

  .main-slider-three__get-quote-input-box .bootstrap-select .dropdown-menu>li>a {
    padding: 14px 30px;
    color: var(--brote-gray);
    background: transparent;
  }

  .main-slider-three__get-quote-input-box .bootstrap-select .dropdown-menu>li.selected>a {
    background: transparent;
    color: var(--brote-gray);
  }

  .main-slider-three__get-quote-input-box .bootstrap-select .dropdown-menu>li>a:hover {
    background: var(--brote-base);
    color: var(--brote-white);
    cursor: pointer;
  }

  .main-slider-three__get-quote-input-box .dropdown-menu {
    background-color: var(--brote-white);
    -webkit-box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.05);
    border-radius: 10px;
  }

  .main-slider-three__get-quote-input-box .bootstrap-select .dropdown-menu>li+li>a {
    border-top: 1px solid rgba(var(--brote-base-rgb), 0.1);
  }

  .main-slider-three .main-slider__nav {
    top: 47%;
    -webkit-transform: translateY(-50%) translateX(0);
    transform: translateY(-50%) translateX(0);
  }

  .main-slider-three .swiper-slide-active .main-slider-three__title,
  .main-slider-three .swiper-slide-active .main-slider-three__btn-box {
    visibility: visible;
    opacity: 1;
    -webkit-transform: translateY(0) translateX(0);
    transform: translateY(0) translateX(0);
  }

  .main-slider-three .swiper-slide-active .main-slider-three__text {
    visibility: visible;
    opacity: .80;
    -webkit-transform: translateY(0) translateX(0);
    transform: translateY(0) translateX(0);
  }

  .main-slider-three .main-slider__nav .swiper-button-next,
  .main-slider-three .main-slider__nav .swiper-button-prev {
    background-color: rgba(var(--brote-white-rgb), 0.3);
    color: rgba(34, 70, 178, 0.7);
  }

  .main-slider-three .main-slider__nav .swiper-button-next:hover,
  .main-slider-three .main-slider__nav .swiper-button-prev:hover {
    background-color: rgba(var(--brote-white-rgb), 1);
    color: var(--brote-base);
  }

  /*--------------------------------------------------------------
# Feature One
--------------------------------------------------------------*/
  .feature-one {
    position: relative;
    display: block;
    padding: 100px 0 145px;
  }

  .feature-one__single {
    position: relative;
    display: block;
    text-align: center;
    border-radius: 30px;
    padding: 40px 50px 50px;
    overflow: hidden;
    z-index: 1;
  }

  .feature-one-single-bg {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    border-radius: 30px;
    opacity: 0;
    -webkit-transition: all 700ms ease;
    transition: all 700ms ease;
    -webkit-transform: translateY(-100%);
    transform: translateY(-100%);
    z-index: -1;
  }

  .feature-one__single:hover .feature-one-single-bg {
    opacity: 1;
    -webkit-transform: translateY(0%);
    transform: translateY(0%);
  }

  .feature-one-single-bg:before {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    content: "";
    background-color: rgba(var(--brote-base-rgb), 0.95);
    border-radius: 30px;
  }

  .feature-one__icon {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    height: 120px;
    width: 120px;
    border-radius: 50%;
    background-color: #e4e5ea;
    -webkit-box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.1);
    margin: 0 auto 31px;
    -webkit-transition: all 700ms ease;
    transition: all 700ms ease;
  }

  .feature-one__single:hover .feature-one__icon {
    background-color: #0c309b;
  }

  .feature-one__icon:before {
    position: absolute;
    top: 10px;
    left: 10px;
    right: 10px;
    bottom: 10px;
    content: "";
    background-color: var(--brote-white);
    border-radius: 50%;
    z-index: 1;
  }

  .feature-one__icon img {
    width: auto;
    z-index: 1;
  }

  .feature-one__icon-shape {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translateX(-50%) translateY(-50%) scale(0);
    transform: translateX(-50%) translateY(-50%) scale(0);
    -webkit-transition: all 700ms ease;
    transition: all 700ms ease;
    z-index: -1;
  }

  .feature-one__single:hover .feature-one__icon-shape {
    -webkit-transform: translateX(-50%) translateY(-50%) scale(1);
    transform: translateX(-50%) translateY(-50%) scale(1);
  }

  .feature-one__icon-shape img {
    width: auto;
  }

  .feature-one__title-box {
    position: relative;
    display: inline-block;
  }

  .feature-one__title-border {
    position: absolute;
    bottom: -13px;
    left: 59%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    right: 0;
  }

  .feature-one__title-border:before {
    position: absolute;
    bottom: 0;
    left: 0;
    height: 3px;
    width: 20px;
    content: "";
    background-color: var(--brote-primary);
  }

  .feature-one__title-border:after {
    position: absolute;
    bottom: 0;
    left: 30px;
    height: 3px;
    width: 20px;
    content: "";
    background-color: var(--brote-primary);
  }

  .feature-one__title {
    font-size: 28px;
    font-weight: 700;
    line-height: 38px;
  }

  .feature-one__title a {
    color: var(--brote-base);
    -webkit-transition: all 700ms ease;
    transition: all 700ms ease;
  }

  .feature-one__single:hover .feature-one__title a {
    color: var(--brote-white);
  }

  .feature-one__text {
    padding-top: 23px;
    padding-bottom: 25px;
    -webkit-transition: all 700ms ease;
    transition: all 700ms ease;
  }

  .feature-one__single:hover .feature-one__text {
    color: #b1c2f5;
  }

  .feature-one__btn {
    position: relative;
    display: inline-block;
    text-align: center;
    background-color: #e4e5ea;
    color: var(--brote-gray);
    text-transform: uppercase;
    letter-spacing: 0.1em;
    font-weight: 700;
    font-size: 12px;
    padding: 10px 40px 10px;
    border-radius: 25px;
    -webkit-transition: all 700ms ease;
    transition: all 700ms ease;
  }

  .feature-one__single:hover .feature-one__btn {
    color: var(--brote-white);
    background-color: var(--brote-primary);
  }

  /*--------------------------------------------------------------
# Welcome One
--------------------------------------------------------------*/
  .welcome-one {
    position: relative;
    display: block;
  }

  .welcome-one__left {
    position: relative;
    display: block;
    min-height: 644px;
    margin-left: -375px;
  }

  .welcome-one__bg {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
  }

  .welcome-one__main-box {
    position: relative;
    display: block;
  }

  .welcome-one__circle-one {
    height: 510px;
    width: 510px;
    background-color: var(--brote-primary);
    border-radius: 50%;
    position: absolute;
    top: 80px;
    right: 50px;
    z-index: 1;
  }

  .welcome-one__circle-one:before {
    position: absolute;
    top: 10px;
    bottom: 0;
    left: 9px;
    right: 0;
    content: "";
    border-radius: 50%;
    background-image: -ms-radial-gradient(50% 50%, circle closest-side, #0035d5 0%, #070066 100%);
  }

  .welcome-one__img-1 {
    position: absolute;
    top: -77px;
    right: 75px;
    z-index: 2;
  }

  .welcome-one__img-1 img {
    width: auto;
  }

  .welcome-one__small-img-1 {
    position: absolute;
    -webkit-animation-duration: 4s;
    animation-duration: 4s;
    bottom: 31px;
    left: -108px;
  }

  .welcome-one__small-img-1 img {
    border-radius: 50%;
    width: auto;
    border: 6px solid var(--brote-white);
    -webkit-box-shadow: 6.157px 7.88px 50px 0px rgba(12, 12, 12, 0.15);
    box-shadow: 6.157px 7.88px 50px 0px rgba(12, 12, 12, 0.15);
  }

  .welcome-one__small-img-2 {
    position: absolute;
    -webkit-animation-duration: 6s;
    animation-duration: 6s;
    top: 210px;
    right: -78px;
  }

  .welcome-one__small-img-2 img {
    border-radius: 50%;
    width: auto;
    -webkit-box-shadow: 6.157px 7.88px 50px 0px rgba(12, 12, 12, 0.15);
    box-shadow: 6.157px 7.88px 50px 0px rgba(12, 12, 12, 0.15);
    border: 6px solid var(--brote-white);
  }

  .welcome-one__right {
    position: relative;
    display: block;
    margin-left: 70px;
  }

  .welcome-one__right .section-title {
    margin-bottom: 28px;
  }

  .welcome-one__text-1 {
    font-size: 18px;
    color: var(--brote-primary);
    font-weight: 500;
    line-height: 32px;
  }

  .welcome-one__text-2 {
    line-height: 32px;
    padding-top: 31px;
    padding-bottom: 30px;
  }

  .welcome-one__points-box {
    position: relative;
    display: block;
    overflow: hidden;
  }

  .welcome-one__points {
    position: relative;
    display: block;
    float: left;
  }

  .welcome-one__points li {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .welcome-one__points li+li {
    margin-top: 10px;
  }

  .welcome-one__points li .icon {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .welcome-one__points li .icon span {
    font-size: 15px;
    color: var(--brote-primary);
  }

  .welcome-one__points li .text {
    margin-left: 13px;
  }

  .welcome-one__points li .text p {
    font-size: 18px;
    color: var(--brote-base);
    font-weight: 700;
  }

  .welcome-one__points-two {
    margin-left: 50px;
  }

  .welcome-one__btn-call-box {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-top: 46px;
  }

  .welcome-one__call-box {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-left: 20px;
  }

  .welcome-one__call-icon {
    height: 60px;
    width: 60px;
    background-color: #eef0f6;
    border-radius: 50%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .welcome-one__call-icon:hover {
    background-color: var(--brote-base);
  }

  .welcome-one__call-icon span {
    position: relative;
    display: inline-block;
    font-size: 26px;
    color: var(--brote-base);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .welcome-one__call-icon:hover span {
    color: var(--brote-white);
  }

  .welcome-one__call-content {
    margin-left: 15px;
  }

  .welcome-one__call-sub-title {
    font-size: 14px;
  }

  .welcome-one__call-number a {
    color: var(--brote-base);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .welcome-one__call-number a:hover {
    color: var(--brote-primary);
  }

  /*--------------------------------------------------------------
# Services One
--------------------------------------------------------------*/
  .services-one {
    position: relative;
    display: block;
    padding: 120px 0 53px;
  }

  .services-one .section-title {
    margin-bottom: 84px;
  }

  .services-one__single {
    position: relative;
    display: block;
    max-width: 370px;
    width: 100%;
    margin-bottom: 67px;
    padding-top: 50px;
    z-index: 1;
  }

  .services-one__single-top-bubble {
    position: absolute;
    top: -37px;
    left: 0;
    right: 0;
    background-repeat: no-repeat;
    background-position: left top;
    height: 94px;
    z-index: 1;
  }

  .services-one__single-inner {
    position: relative;
    display: block;
    background-color: white;
    -webkit-box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.05);
    border-radius: 30px;
    padding-bottom: 29px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    z-index: 2;
  }

  .services-one__single:hover .services-one__single-inner {
    background-color: transparent;
  }

  .services-one__icon {
    height: 110px;
    width: 110px;
    background-color: var(--brote-base);
    border-radius: 50%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    position: absolute;
    top: -22px;
    left: 0;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    z-index: 3;
  }

  .services-one__single:hover .services-one__icon {
    background-color: var(--brote-primary);
  }

  .services-one__icon span {
    position: relative;
    display: inline-block;
    font-size: 65px;
    color: var(--brote-white);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .services-one__title-box {
    position: relative;
    display: block;
    margin-bottom: 17px;
    padding-left: 122px;
  }

  .services-one__title {
    font-size: 20px;
    font-weight: 700;
    line-height: 30px;
  }

  .services-one__title a {
    color: var(--brote-base);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .services-one__single:hover .services-one__title a {
    color: var(--brote-white);
  }

  .services-one__text-box {
    position: relative;
    display: block;
    padding: 0 40px 0;
  }

  .services-one__text {
    line-height: 32px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .services-one__single:hover .services-one__text {
    color: #b1c2f5;
  }

  .services-one__overly-box {
    position: absolute;
    top: -40px;
    bottom: -6px;
    left: -8px;
    right: 2px;
    background-repeat: no-repeat;
    background-position: center center;
    visibility: hidden;
    opacity: 0;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    z-index: 1;
  }

  .services-one__single:hover .services-one__overly-box {
    visibility: visible;
    opacity: 1;
  }

  /*--------------------------------------------------------------
# Counter One
--------------------------------------------------------------*/
  .counter-one {
    position: relative;
    display: block;
    z-index: 2;
  }

  .counter-one__inner {
    position: relative;
    display: block;
    background-color: var(--brote-base);
    border-radius: 30px;
    padding: 57px 60px 57px;
    z-index: 1;
  }

  .counter-one-bg-1 {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 495px;
    background-repeat: no-repeat;
    background-position: left center;
    background-size: cover;
    opacity: .20;
    z-index: -1;
  }

  .counter-one-bg-2 {
    position: absolute;
    top: 0;
    right: 10px;
    bottom: 0;
    width: 498px;
    background-repeat: no-repeat;
    background-position: right center;
    background-size: cover;
    opacity: .20;
    z-index: -1;
  }

  .counter-one__list {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
  }

  .counter-one__list li {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .counter-one__icon {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    top: 4px;
  }

  .counter-one__icon span {
    position: relative;
    display: inline-block;
    font-size: 64px;
    color: #61ddff;
    -webkit-transition: all 500ms linear;
    transition: all 500ms linear;
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
    -webkit-transform: scale(1) rotateY(0deg);
    transform: scale(1) rotateY(0deg);
  }

  .counter-one__list li:hover .counter-one__icon span {
    -webkit-transform: scale(0.9) rotateY(360deg);
    transform: scale(0.9) rotateY(360deg);
  }

  .counter-one__count-box {
    margin-left: 20px;
  }

  .counter-one__count-box-inner {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }

  .counter-one__count-box-inner h3 {
    font-size: 36px;
    color: var(--brote-white);
    font-weight: 700;
    line-height: 46px !important;
    font-family: var(--brote-font) !important;
  }

  .counter-one__plus {
    position: relative;
    font-size: 20px;
    color: var(--brote-primary);
    top: 3px;
  }

  .counter-one__text {
    color: #b1c2f5;
    font-weight: 400;
    line-height: 20px;
  }

  .counter-one .odometer-formatting-mark {
    display: none;
  }

  /*--------------------------------------------------------------
# Team One
--------------------------------------------------------------*/
  .team-one {
    position: relative;
    display: block;
    padding: 210px 0 90px;
    background-color: #eef0f6;
    margin-top: -90px;
    z-index: 1;
  }

  .team-one__bubbles {
    position: absolute;
    top: 85px;
    right: 210px;
    width: 1500px;
    height: 750px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: top center;
    z-index: -1;
  }

  .team-one__shape-bg {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    opacity: .20;
    z-index: -1;
  }

  .team-one-start-1 {
    position: absolute;
    top: 60px;
    left: 230px;
    z-index: -1;
  }

  .team-one-start-2 {
    position: absolute;
    top: 225px;
    left: 55px;
    z-index: -1;
  }

  .team-one-start-3 {
    position: absolute;
    bottom: 60px;
    left: 230px;
    z-index: -1;
  }

  .team-one-start-4 {
    position: absolute;
    top: 250px;
    right: 440px;
    z-index: -1;
  }

  .team-one-start-5 {
    position: absolute;
    bottom: 195px;
    right: 120px;
    z-index: -1;
  }

  .team-one__single {
    position: relative;
    display: block;
    margin-bottom: 41px;
  }

  .team-one__img {
    position: relative;
    display: block;
    border-top-right-radius: 30px;
    border-top-left-radius: 30px;
    border-bottom-right-radius: 17px;
    overflow: hidden;
  }

  .team-one__img:before {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: "";
    background-color: rgba(var(--brote-base-rgb), 0.3);
    width: 0%;
    -webkit-transform: translateY(100%);
    transform: translateY(100%);
    border-top-right-radius: 30px;
    border-top-left-radius: 30px;
    border-bottom-right-radius: 17px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    z-index: 1;
  }

  .team-one__single:hover .team-one__img:before {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    width: 100%;
  }

  .team-one__img img {
    width: 100%;
    border-top-right-radius: 30px;
    border-top-left-radius: 30px;
    border-bottom-right-radius: 17px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .team-one__single:hover .team-one__img img {
    -webkit-transform: scale(1.05);
    transform: scale(1.05);
  }

  .team-one__social {
    position: absolute;
    right: 20px;
    bottom: 80px;
    background-color: var(--brote-primary);
    text-align: center;
    padding: 17px 14px;
    border-top-left-radius: 14px;
    border-top-right-radius: 14px;
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-transition: all 0.4s linear;
    transition: all 0.4s linear;
    -webkit-transform-origin: bottom center;
    transform-origin: bottom center;
    z-index: 2;
  }

  .team-one__single:hover .team-one__social {
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
    -webkit-transition-delay: 500ms;
    transition-delay: 500ms;
  }

  .team-one__social li+li {
    margin-top: 25px;
  }

  .team-one__social li a {
    font-size: 15px;
    color: var(--brote-white);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .team-one__social li a:hover {
    color: var(--brote-base);
  }

  .team-one__content {
    position: relative;
    display: block;
    z-index: 2;
  }

  .team-one__title-box {
    position: relative;
    display: block;
    background-color: white;
    -webkit-box-shadow: 0px 5px 30px 0px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 5px 30px 0px rgba(0, 0, 0, 0.05);
    padding-left: 30px;
    padding-right: 20px;
    padding-top: 12px;
    padding-bottom: 38px;
    border-top-left-radius: 15px;
    border-bottom-right-radius: 15px;
    margin-left: 10px;
    margin-top: -80px;
    z-index: 2;
  }

  .team-one__name {
    font-size: 20px;
    font-weight: 700;
    line-height: 30px;
  }

  .team-one__name a {
    color: var(--brote-base);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .team-one__name a:hover {
    color: var(--brote-primary);
  }

  .team-one__social-two {
    position: absolute;
    right: 20px;
    top: 0;
    background-color: var(--brote-primary);
    padding: 15px 14px;
    border-bottom-left-radius: 14px;
    border-bottom-right-radius: 14px;
  }

  .team-one__social-two li a {
    font-size: 17px;
    color: var(--brote-white);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .team-one__social-two li a:hover {
    color: var(--brote-base);
  }

  .team-one__sub-title-box {
    position: absolute;
    display: inline-block;
    background-color: var(--brote-base);
    padding: 12px 20px;
    bottom: -11px;
    left: 0;
    border-top-right-radius: 15px;
    z-index: 2;
  }

  .team-one__sub-title-box:before {
    position: absolute;
    top: -10px;
    left: 0;
    content: "";
    border-top: 10px solid transparent;
    border-right: 10px solid
      <?php echo $secondary_color; ?>
    ;
    border-bottom: 0px solid transparent;
  }

  .team-one__sub-title-box:after {
    position: absolute;
    bottom: 0px;
    right: -10px;
    content: "";
    border-top: 0px solid transparent;
    border-left: 10px solid
      <?php echo $secondary_color; ?>
    ;
    border-bottom: 11px solid transparent;
  }

  .team-one__sub-title {
    font-size: 12px;
    color: var(--brote-white);
    line-height: 12px;
  }

  /*--------------------------------------------------------------
# Testimonial One
--------------------------------------------------------------*/
  .testimonial-one {
    position: relative;
    display: block;
    padding: 120px 0 155px;
    z-index: 1;
  }

  .testimonial-shape {
    position: absolute;
    top: 120px;
    right: 100px;
    height: 524px;
    width: 946px;
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;
    opacity: .60;
    z-index: -1;
  }

  .testimonial-one .container {
    max-width: 1060px;
  }

  .testimonial-one__inner {
    position: relative;
    display: block;
  }

  .testimonial-one__carousel {
    position: relative;
    display: block;
  }

  .testimonial-one__carousel.owl-carousel .owl-stage-outer {
    overflow: visible;
  }

  .testimonial-one__carousel.owl-carousel .owl-stage-outer {
    overflow: visible;
  }

  .testimonial-one__carousel.owl-carousel .owl-item {
    opacity: 0;
    visibility: hidden;
    -webkit-transition: opacity 500ms ease, visibility 500ms ease;
    transition: opacity 500ms ease, visibility 500ms ease;
  }

  .testimonial-one__carousel.owl-carousel .owl-item.active {
    opacity: 1;
    visibility: visible;
  }

  .testimonial-one__carousel.owl-theme .owl-nav {
    position: absolute;
    top: -150px;
    right: 0px;
    margin-top: 0 !important;
  }

  .testimonial-one__carousel.owl-theme .owl-nav .owl-prev {
    height: 50px;
    width: 50px;
    background: var(--brote-base);
    border-radius: 50%;
    color: var(--brote-white);
    font-size: 15px;
    text-align: center;
    line-height: 55px;
    margin: 0;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .testimonial-one__carousel.owl-theme .owl-nav .owl-next {
    height: 50px;
    width: 50px;
    background: var(--brote-base);
    border-radius: 50%;
    color: var(--brote-white);
    font-size: 15px;
    text-align: center;
    line-height: 55px;
    margin: 0;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .testimonial-one__carousel.owl-theme .owl-nav .owl-prev {
    margin-right: 5px;
  }

  .testimonial-one__carousel.owl-theme .owl-nav .owl-next {
    margin-left: 5px;
  }

  .testimonial-one__carousel.owl-theme .owl-nav .owl-next span,
  .testimonial-one__carousel.owl-theme .owl-nav .owl-prev span {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .testimonial-one__carousel.owl-theme .owl-nav .owl-next:hover,
  .testimonial-one__carousel.owl-theme .owl-nav .owl-prev:hover {
    background-color: #eef0f6;
    color: #92949a;
  }

  .testimonial-one__single {
    position: relative;
    display: block;
    border-radius: 20px;
    background-color: white;
    -webkit-box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.1);
    padding: 40px 50px 35px;
    border-top: 3px solid transparent;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .testimonial-one__single:hover {
    border-top: 3px solid var(--brote-base);
  }

  .testimonial-one__client-details {
    position: relative;
    display: block;
    margin-top: 22px;
    padding-left: 116px;
  }

  .testimonial-one__client-name {
    font-size: 20px;
    font-weight: 700;
    line-height: 30px;
  }

  .testimonial-one__client-sub-title {
    font-size: 14px;
    line-height: 22px;
  }

  .testimonial-one__client-img {
    position: absolute;
    bottom: -16px;
    left: 50px;
    width: 97px;
    height: 97px;
    border-radius: 50%;
    z-index: 1;
  }

  .testimonial-one__client-img img {
    width: 100%;
    border-radius: 50%;
  }

  .testimonial-one__client-img-boxs {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    border-radius: 50%;
    z-index: -1;
  }

  .testimonial-one__client-img-boxs:before {
    position: absolute;
    top: 0;
    left: -10px;
    bottom: -10px;
    right: 0;
    background-color: var(--brote-white);
    border-radius: 50%;
    content: "";
    z-index: 1;
  }

  .testimonial-one__client-img-boxs:after {
    content: "";
    position: absolute;
    top: 0;
    left: -20px;
    right: 0;
    bottom: -20px;
    background-color: var(--brote-white);
    border-radius: 50%;
    background-image: linear-gradient(145deg, #070066 0%, #ffb400 0%, #0038e0 100%);
    z-index: -1;
  }

  .testimonial-one__quote {
    position: absolute;
    bottom: -28px;
    right: 50px;
  }

  .testimonial-one__quote span {
    font-size: 50px;
    color: var(--brote-primary);
  }

  /*--------------------------------------------------------------
# Brand One
--------------------------------------------------------------*/
  .brand-one {
    position: relative;
    display: block;
    z-index: 1;
  }

  .brand-one__inner {
    position: relative;
    display: block;
    border-top: 2px solid #eef0f6;
    padding: 60px 0 100px;
  }

  .brand-one__main-content {
    position: relative;
    display: block;
  }

  .brand-one__main-content .swiper-slide {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .brand-one__main-content .swiper-slide img {
    -webkit-transition: 500ms;
    transition: 500ms;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }

  .brand-one__main-content .swiper-slide img:hover {
    -webkit-filter: grayscale(0);
    filter: grayscale(0);
  }

  /*--------------------------------------------------------------
# Contact One
--------------------------------------------------------------*/
  .contact-one {
    position: relative;
    display: block;
    z-index: 2;
  }

  .contact-one-shape-4 {
    position: absolute;
    top: 0;
    left: 0;
    opacity: .20;
    z-index: 3;
  }

  .contact-one-shape-4 img {
    width: auto;
  }

  .contact-one__container {
    position: relative;
    display: block;
    max-width: 1920px;
    width: 100%;
    margin: 0 auto;
  }

  .contact-one__left {
    position: relative;
    display: block;
    margin-right: 50px;
    padding-top: 120px;
    padding-bottom: 120px;
    z-index: 2;
  }

  .contact-one__left:before {
    position: absolute;
    top: 0;
    left: -10000000px;
    right: -171px;
    bottom: 0;
    content: "";
    background-color: var(--brote-base);
    z-index: -1;
    -webkit-transform: skewX(-25deg);
    transform: skewX(-25deg);
  }

  .contact-one__left .section-title__tagline {
    color: #b1c2f5;
  }

  .contact-one__left .section-title__title {
    color: var(--brote-white);
  }

  .contact-one__form {
    position: relative;
    display: block;
  }

  .contact-one__form .row {
    --bs-gutter-x: 20px;
  }

  .contact-one__form-input-box {
    position: relative;
    display: block;
    margin-bottom: 20px;
  }

  .contact-one__form-input-box input[type="text"],
  .contact-one__form-input-box input[type="email"] {
    height: 50px;
    width: 100%;
    border: none;
    outline: none;
    background-color: rgba(var(--brote-white-rgb), 0.1);
    font-size: 14px;
    color: var(--brote-white);
    font-weight: 400;
    padding: 0 30px 0;
    border-radius: 10px;
  }

  .contact-one__form-input-box textarea {
    height: 120px;
    width: 100%;
    border: none;
    outline: none;
    background-color: rgba(var(--brote-white-rgb), 0.1);
    font-size: 14px;
    color: var(--brote-white);
    font-weight: 400;
    padding: 10px 30px 30px;
    border-radius: 10px;
  }

  .contact-one__form-input-box.text-message-box {
    height: 120px;
  }

  .contact-one__btn {
    border: 0;
    background-color: #ffffff;
    color: var(--brote-base);
  }

  .contact-one__btn:hover {
    background-color: var(--brote-white);
    color: var(--brote-base);
  }

  .contact-one__btn i {
    background-color: var(--brote-base);
    color: var(--brote-white);
  }

  .contact-one__btn:hover i {
    background-color: var(--brote-primary);
    color: var(--brote-white);
  }

  .contact-one__form-input-box .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
    position: relative;
    display: block;
    width: 100% !important;
  }

  .contact-one__form-input-box .bootstrap-select>.dropdown-toggle::after {
    display: none;
  }

  .contact-one__form-input-box .bootstrap-select>.dropdown-toggle {
    position: relative;
    height: 50px;
    outline: none !important;
    border-radius: 10px;
    border: 0;
    background-color: rgba(var(--brote-white-rgb), 0.1) !important;
    margin: 0;
    padding: 0;
    padding-left: 30px;
    padding-right: 30px;
    color: var(--brote-white) !important;
    font-size: 14px;
    line-height: 50px;
    font-weight: 400;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    background-repeat: no-repeat;
    background-size: 14px 12px;
    background-position: right 25.75px center;
  }

  .contact-one__form-input-box .bootstrap-select>.dropdown-toggle:before {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 26px;
    font-family: "Font Awesome 5 Free";
    content: "\f107";
    font-weight: 900;
    font-size: 14px;
    color: var(--brote-white);
  }

  .contact-one__right {
    position: relative;
    display: block;
    margin-left: -205px;
    margin-right: -375px;
    margin-top: -40px;
  }

  .contact-one-shape-1 {
    position: absolute;
    top: 0px;
    left: 270px;
    height: 41px;
    width: 110px;
    background-color: var(--brote-primary);
    -webkit-clip-path: polygon(13% 0, 100% 0%, 80% 100%, 0 100%);
    clip-path: polygon(13% 0, 100% 0%, 80% 100%, 0 100%);
    z-index: 2;
  }

  .contact-one-shape-2 {
    position: absolute;
    top: 0;
    left: 358px;
    height: 41px;
    width: 105px;
    background-color: var(--brote-base);
    -webkit-clip-path: polygon(19% 0, 0% 100%, 100% 100%);
    clip-path: polygon(19% 0, 0% 100%, 100% 100%);
    z-index: 2;
  }

  .contact-one-shape-3 {
    position: absolute;
    bottom: 1px;
    left: -26px;
    height: 41px;
    width: 50px;
    background-color: var(--brote-base);
    -webkit-clip-path: polygon(0 0, 56% 100%, 100% 0);
    clip-path: polygon(0 0, 56% 100%, 100% 0);
    z-index: 2;
  }

  .contact-one__img {
    position: relative;
    display: block;
    -webkit-clip-path: polygon(29% 0, 100% 0%, 100% 100%, 0 100%);
    clip-path: polygon(29% 0, 100% 0%, 100% 100%, 0 100%);
  }

  .contact-one__img img {
    width: 100%;
  }

  .contact-one__call {
    position: absolute;
    bottom: 77px;
    right: 50px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    z-index: 1;
  }

  .contact-one__call:before {
    position: absolute;
    top: -18px;
    bottom: -18px;
    left: 45px;
    right: -50px;
    content: "";
    background-color: var(--brote-base);
    border-top-left-radius: 30px;
    border-bottom-left-radius: 30px;
    z-index: -1;
  }

  .contact-one__call-icon {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    height: 96px;
    width: 96px;
    background-color:
      <?php echo $secondary_color; ?>
    ;
    border-radius: 50%;
    font-size: 46px;
    color: var(--brote-white);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    z-index: 1;
  }

  .contact-one__call-icon:hover {
    color: var(--brote-base);
  }

  .contact-one__call-icon span {
    position: relative;
    display: inline-block;
    right: 8px;
    z-index: 2;
  }

  .contact-one__call-icon:before {
    position: absolute;
    top: 0;
    left: -8px;
    right: 8px;
    bottom: 0;
    content: "";
    background-color: var(--brote-primary);
    border-radius: 50%;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    z-index: -1;
  }

  .contact-one__call-icon:hover:before {
    background-color: var(--brote-white);
  }

  .contact-one__call-content {
    margin-left: 20px;
  }

  .contact-one__call-sub-title {
    color: #b1c2f5;
  }

  .contact-one__call-number {
    font-size: 24px;
    font-weight: 700;
    line-height: 24px;
  }

  .contact-one__call-number a {
    color: var(--brote-white);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .contact-one__call-number a:hover {
    color: var(--brote-primary);
  }

  /*--------------------------------------------------------------
# Blog One
--------------------------------------------------------------*/
  .blog-one {
    position: relative;
    display: block;
    background-color: #eef0f6;
    padding: 120px 0 120px;
    margin-top: -41px;
    z-index: 1;
  }

  .blog-one-shape {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    opacity: .20;
    z-index: -1;
  }

  .blog-one__carousel {
    position: relative;
    display: block;
  }

  .blog-one__single {
    position: relative;
    display: block;
  }

  .blog-one__img {
    position: relative;
    display: block;
    border-radius: 10px;
    overflow: hidden;
  }

  .blog-one__img img {
    width: 100%;
    border-radius: 10px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .blog-one__single:hover .blog-one__img img {
    -webkit-transform: scale(1.05);
    transform: scale(1.05);
  }

  .blog-one__img>a {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(var(--brote-base-rgb), 0.5);
    position: absolute;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 30px;
    color: var(--brote-base);
    border-radius: 10px;
    -webkit-transition: opacity 500ms ease, visibility 500ms ease, -webkit-transform 500ms ease;
    transition: opacity 500ms ease, visibility 500ms ease, -webkit-transform 500ms ease;
    transition: opacity 500ms ease, visibility 500ms ease, transform 500ms ease;
    transition: opacity 500ms ease, visibility 500ms ease, transform 500ms ease, -webkit-transform 500ms ease;
    visibility: hidden;
    opacity: 0;
    -webkit-transform: translateY(-30%);
    transform: translateY(-30%);
  }

  .blog-one__img>a>span {
    position: relative;
  }

  .blog-one__img>a>span::before {
    content: '';
    width: 20px;
    height: 2px;
    background-color: var(--brote-primary);
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .blog-one__img>a>span::after {
    content: '';
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    width: 2px;
    height: 20px;
    background-color: var(--brote-primary);
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
  }

  .blog-one__img>a:hover>span::before,
  .blog-one__img>a:hover>span::after {
    background-color: var(--brote-white);
  }

  .blog-one__single:hover .blog-one__img>a {
    visibility: visible;
    -webkit-transform: translateY(0%);
    transform: translateY(0%);
    opacity: 1;
  }

  .blog-one__date {
    position: absolute;
    left: 20px;
    top: 20px;
    border-radius: 5px;
    background-color: var(--brote-white);
    width: 60px;
    height: 60px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center;
  }

  .blog-one__date p {
    font-size: 20px;
    font-weight: 700;
    color: var(--brote-base);
    text-align: center;
    line-height: 20px;
  }

  .blog-one__date p span {
    font-size: 14px;
    text-transform: uppercase;
  }

  .blog-one__content {
    position: relative;
    display: block;
    background-color: white;
    -webkit-box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.07);
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.07);
    padding: 22px 27px 20px;
    margin-right: 30px;
    margin-top: -25px;
    border-top-right-radius: 15px;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
  }

  .blog-one__meta {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .blog-one__meta li+li {
    margin-left: 15px;
  }

  .blog-one__meta li a {
    font-size: 14px;
    color: var(--brote-gray);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .blog-one__meta li a:hover {
    color: var(--brote-primary);
  }

  .blog-one__meta li a i {
    color: var(--brote-primary);
  }

  .blog-one__title {
    font-size: 24px;
    font-weight: 700;
    line-height: 28px;
    margin-top: 7px;
    margin-bottom: 24px;
  }

  .blog-one__title a {
    color: var(--brote-base);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .blog-one__single:hover .blog-one__title a {
    color: var(--brote-primary);
  }

  .blog-one__btn-box {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    border-top: 1px solid #e4e5ea;
    padding-top: 12px;
  }

  .blog-one__btn-box a {
    font-size: 14px;
    color: var(--brote-gray);
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .blog-one__btn-box a i {
    position: relative;
    font-size: 15px;
    top: 2px;
    padding-left: 8px;
  }

  .blog-one__btn-box a:hover {
    color: var(--brote-base);
  }

  .blog-one__tag {
    position: absolute;
    top: -17px;
    left: 45px;
    background-color: var(--brote-base);
    padding: 8px 15px;
    border-bottom-left-radius: 14px;
    border-bottom-right-radius: 14px;
  }

  .blog-one__tag:before {
    position: absolute;
    top: 0;
    left: -14px;
    content: "";
    border-top: 17px solid transparent;
    border-right: 14px solid
      <?php echo $secondary_color; ?>
    ;
    border-bottom: 0px solid transparent;
  }

  .blog-one__tag p {
    font-size: 14px;
    color: var(--brote-white);
    line-height: 14px;
  }

  .blog-one__carousel.owl-carousel .owl-stage-outer {
    overflow: visible;
  }

  .blog-one__carousel.owl-carousel .owl-stage-outer {
    overflow: visible;
  }

  .blog-one__carousel.owl-carousel .owl-item {
    opacity: 0;
    visibility: hidden;
    -webkit-transition: opacity 500ms ease, visibility 500ms ease;
    transition: opacity 500ms ease, visibility 500ms ease;
  }

  .blog-one__carousel.owl-carousel .owl-item.active {
    opacity: 1;
    visibility: visible;
  }

  .blog-one__carousel.owl-theme .owl-nav {
    position: absolute;
    top: -150px;
    right: 0px;
    margin-top: 0 !important;
  }

  .blog-one__carousel.owl-theme .owl-nav .owl-prev {
    height: 50px;
    width: 50px;
    background: var(--brote-base);
    border-radius: 50%;
    color: var(--brote-white);
    font-size: 15px;
    text-align: center;
    line-height: 55px;
    margin: 0;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .blog-one__carousel.owl-theme .owl-nav .owl-next {
    height: 50px;
    width: 50px;
    background: var(--brote-base);
    border-radius: 50%;
    color: var(--brote-white);
    font-size: 15px;
    text-align: center;
    line-height: 55px;
    margin: 0;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .blog-one__carousel.owl-theme .owl-nav .owl-prev {
    margin-right: 5px;
  }

  .blog-one__carousel.owl-theme .owl-nav .owl-next {
    margin-left: 5px;
  }

  .blog-one__carousel.owl-theme .owl-nav .owl-next span,
  .blog-one__carousel.owl-theme .owl-nav .owl-prev span {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .blog-one__carousel.owl-theme .owl-nav .owl-next:hover,
  .blog-one__carousel.owl-theme .owl-nav .owl-prev:hover {
    background-color: var(--brote-white);
    color: var(--brote-gray);
  }

  /*--------------------------------------------------------------
# Google Map
--------------------------------------------------------------*/
  .google-map {
    position: relative;
    display: block;
    background-color: #eef0f6;
  }

  .google-map__one {
    position: relative;
    display: block;
    border: none;
    height: 530px;
    width: 100%;
    mix-blend-mode: luminosity;
  }

  /*--------------------------------------------------------------
# Information
--------------------------------------------------------------*/
  .information {
    position: relative;
    display: block;
    z-index: 2;
  }

  .information__inner {
    position: relative;
    display: block;
    border-radius: 10px;
    background-color:
      <?php echo $secondary_color; ?>
    ;
    -webkit-box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.05);
    padding: 72px 0px 73px;
    margin-top: -105px;
    margin-left: 60px;
    margin-right: 60px;
    z-index: 1;
  }

  .information__inner:before {
    position: absolute;
    top: 15px;
    left: -60px;
    right: -60px;
    bottom: 15px;
    content: "";
    border-radius: 10px;
    background-color: white;
    -webkit-box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.05);
    z-index: -1;
  }

  .information__logo-box {
    border-radius: 50%;
    background-color: white;
    -webkit-box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.1);
    width: 120px;
    height: 120px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin: 0 auto;
    position: absolute;
    top: -50px;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
  }

  .information__logo-box:before {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: "";
    background-color: var(--brote-white);
    border-radius: 50%;
  }

  .information__logo-box a {
    z-index: 2;
  }

  .information__logo-box img {
    width: 100%;
  }

  .information__border-1 {
    position: absolute;
    top: 76px;
    left: -90px;
    right: -90px;
    height: 3px;
    content: "";
    background-color: var(--brote-primary);
    z-index: -1;
  }

  .information__border-2 {
    position: absolute;
    top: 83px;
    left: -70px;
    right: -70px;
    height: 3px;
    content: "";
    background-color: var(--brote-base);
    z-index: -1;
  }

  .information__list {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
  }

  .information__list li {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .information__icon {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .information__icon span {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 50px;
    color: var(--brote-base);
  }

  .information__content {
    margin-left: 20px;
  }

  .information__sub-title {
    font-size: 18px;
  }

  .information__number {
    font-size: 22px;
    font-weight: 700;
    line-height: 22px;
    margin-top: 6px;
  }

  .information__number a {
    color: var(--brote-base);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .information__number a:hover {
    color: var(--brote-primary);
  }

  .information-two .information__inner {
    margin-top: 0;
  }

  /*--------------------------------------------------------------
# Site Footer
--------------------------------------------------------------*/
  .site-footer {
    position: relative;
    display: block;
    background-color: var(--brote-base);
    margin-top: -98px;
    z-index: 1;
  }

  .site-footer-shape-1 {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    z-index: -1;
    opacity: 0.02;
  }

  .site-footer-shape-two {
    position: absolute;
    bottom: -20px;
    left: 47%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    mix-blend-mode: lighten;
    opacity: .10;
    z-index: -1;
    animation-name: zoom-fade;
    animation-duration: 5s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
    -webkit-animation-name: zoom-fade;
    -webkit-animation-duration: 5s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: linear;
    -moz-animation-name: zoom-fade;
    -moz-animation-duration: 5s;
    -moz-animation-iteration-count: infinite;
    -moz-animation-timing-function: linear;
    -ms-animation-name: zoom-fade;
    -ms-animation-duration: 5s;
    -ms-animation-iteration-count: infinite;
    -ms-animation-timing-function: linear;
    -o-animation-name: zoom-fade;
    -o-animation-duration: 5s;
    -o-animation-iteration-count: infinite;
    -o-animation-timing-function: linear;
  }

  .site-footer-shape-two img {
    width: auto;
  }

  .site-footer__top {
    position: relative;
    display: block;
    padding: 192px 0 100px;
  }

  .footer-widget__about {
    position: relative;
    display: block;
  }

  .footer-widget__about-text-box {
    position: relative;
    display: block;
    margin-top: -1px;
  }

  .footer-widget__about-text {
    color: #fff;
    line-height: 32px;
  }

  .site-footer__social {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-top: 29px;
  }

  .site-footer__social a {
    position: relative;
    height: 40px;
    width: 40px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center;
    color: var(--brote-primary);
    font-size: 15px;
    background-color:
      <?php echo $secondary_color; ?>
    ;
    border-radius: 50%;
    overflow: hidden;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    z-index: 1;
  }

  .site-footer__social a:hover {
    color: var(--brote-base);
  }

  .site-footer__social a:after {
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    right: 0;
    height: 100%;
    background-color: var(--brote-white);
    -webkit-transition-delay: .1s;
    transition-delay: .1s;
    -webkit-transition-timing-function: ease-in-out;
    transition-timing-function: ease-in-out;
    -webkit-transition-duration: .4s;
    transition-duration: .4s;
    -webkit-transition-property: all;
    transition-property: all;
    opacity: 1;
    -webkit-transform-origin: top;
    transform-origin: top;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
    z-index: -1;
  }

  .site-footer__social a:hover:after {
    opacity: 1;
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }

  .site-footer__social a+a {
    margin-left: 10px;
  }

  .footer-widget__links {
    position: relative;
    display: block;
  }

  .footer-widget__title {
    position: relative;
    display: inline-block;
    font-size: 24px;
    color: var(--brote-white);
    font-weight: 700;
    line-height: 30px;
    margin-bottom: 24px;
  }

  .footer-widget__links-list {
    position: relative;
    display: block;
  }

  .footer-widget__links-list li+li {
    margin-top: 6px;
  }

  .footer-widget__links-list li a {
    position: relative;
    display: inline-block;
    font-size: 16px;
    color: #fff;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .footer-widget__links-list li a:hover {
    color: var(--brote-white);
  }

  .footer-widget__articles {
    position: relative;
    display: block;
    margin-right: -30px;
  }

  .footer-widget__articles-list {
    position: relative;
    display: block;
    margin-top: 9px;
  }

  .footer-widget__articles-list li {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }

  .footer-widget__articles-list li+li {
    margin-top: 20px;
  }

  .footer-widget__articles-img {
    position: relative;
    display: inline-block;
    border-radius: 10px;
    overflow: hidden;
    max-width: 80px;
    width: 100%;
  }

  .footer-widget__articles-img:before {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    content: "";
    background-color: rgba(var(--brote-base-rgb), 0.5);
    -webkit-transition: all 700ms ease;
    transition: all 700ms ease;
    -webkit-transform: translateY(-100%);
    transform: translateY(-100%);
    border-radius: 10px;
    z-index: 1;
  }

  .footer-widget__articles-list li:hover .footer-widget__articles-img:before {
    -webkit-transform: translateY(0%);
    transform: translateY(0%);
  }

  .footer-widget__articles-img img {
    width: 100%;
    border-radius: 10px;
    -webkit-transition-delay: .1s;
    transition-delay: .1s;
    -webkit-transition-timing-function: ease-in-out;
    transition-timing-function: ease-in-out;
    -webkit-transition-duration: .7s;
    transition-duration: .7s;
    -webkit-transition-property: all;
    transition-property: all;
    -webkit-transform: scale(1);
    transform: scale(1);
  }

  .footer-widget__articles-list li:hover .footer-widget__articles-img img {
    -webkit-transform: scale(1.05);
    transform: scale(1.05);
  }

  .footer-widget__articles-img a {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    font-size: 20px;
    color: var(--brote-white);
    -webkit-transform: translateY(100px);
    transform: translateY(100px);
    opacity: 0;
    -webkit-transition: all 700ms ease;
    transition: all 700ms ease;
    z-index: 2;
  }

  .footer-widget__articles-list li:hover .footer-widget__articles-img a {
    -webkit-transform: translateY(0px);
    transform: translateY(0px);
    opacity: 1;
    -webkit-transition-delay: 0.3s;
    transition-delay: 0.3s;
  }

  .footer-widget__articles-content {
    margin-left: 20px;
    margin-top: -2px;
  }

  .footer-widget__articles-date {
    font-size: 14px;
    color: var(--brote-primary);
    line-height: 14px;
    margin-bottom: 7px;
  }

  .footer-widget__articles-sub-title {
    font-size: 16px;
    color: var(--brote-white);
    font-weight: 700;
    line-height: 30px;
  }

  .footer-widget__articles-sub-title a {
    color: var(--brote-white);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .footer-widget__articles-sub-title a:hover {
    color: var(--brote-primary);
  }

  .footer-widget__newsletter {
    position: relative;
    display: block;
    margin-left: 70px;
  }

  .footer-widget__newsletter-text {
    color: #fff;
    line-height: 28px;
    padding-top: 1px;
  }

  .footer-widget__newsletter-form {
    position: relative;
    display: block;
    margin-top: 31px;
  }

  .footer-widget__newsletter-input-box {
    position: relative;
    display: block;
  }

  .footer-widget__newsletter-input-box input[type="email"] {
    height: 60px;
    width: 100%;
    border: none;
    outline: none;
    padding-left: 30px;
    padding-right: 60px;
    background-color: rgba(var(--brote-white-rgb), 0.1);
    border-radius: 10px;
    font-size: 14px;
    font-weight: 400;
    color: var(--brote-white);
  }

  .footer-widget__newsletter-btn {
    position: absolute;
    top: 50%;
    right: 12px;
    height: 36px;
    width: 36px;
    border: none;
    border-radius: 50%;
    font-size: 15px;
    background-color: var(--brote-primary);
    color: var(--brote-white);
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .footer-widget__newsletter-btn:hover {
    background-color: var(--brote-white);
    color: var(--brote-base);
  }

  .site-footer__bottom {
    position: relative;
    display: block;
    /* background-color: <?php echo $secondary_color; ?>
    ;
    */
  }

  .site-footer__bottom-inner {
    position: relative;
    display: block;
    text-align: center;
    padding: 20px 0;
  }

  .site-footer__bottom-text {
    font-size: 16px;
    color: #fff;
  }

  .site-footer__bottom-text a {
    color: #fff;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .site-footer__bottom-text a:hover {
    color: var(--brote-white);
  }

  .site-footer-two {
    margin-top: 0;
  }

  .site-footer-two .site-footer__top {
    padding: 112px 0 91px;
  }

  /*--------------------------------------------------------------
# Feature Two
--------------------------------------------------------------*/
  .feature-two {
    position: relative;
    display: block;
    padding: 75px 0 110px;
  }

  .feature-two__single {
    position: relative;
    display: block;
    padding-left: 140px;
    margin-bottom: 60px;
    min-height: 120px;
    z-index: 1;
  }

  .feature-two__single:before {
    position: absolute;
    top: -15px;
    bottom: -15px;
    right: 0;
    left: 58px;
    content: "";
    border: 1px solid #e4e5ea;
    border-radius: 10px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    z-index: -1;
  }

  .feature-two__single:hover:before {
    background-color: var(--brote-base);
    border: 1px solid var(--brote-base);
  }

  .feature-two__icon {
    position: absolute;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    height: 120px;
    width: 120px;
    border-radius: 50%;
    background-color: #e4e5ea;
    -webkit-box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.1);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    top: 0;
    left: 0;
  }

  .feature-two__single:hover .feature-two__icon {
    background-color: var(--brote-primary);
  }

  .feature-two__icon:before {
    position: absolute;
    top: 10px;
    left: 10px;
    right: 10px;
    bottom: 10px;
    content: "";
    background-color: var(--brote-white);
    border-radius: 50%;
    z-index: 1;
  }

  .feature-two__icon img {
    width: auto;
    -webkit-transition: all 500ms linear;
    transition: all 500ms linear;
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
    z-index: 1;
  }

  .feature-two__single:hover .feature-two__icon img {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
  }

  .feature-two__content {
    position: relative;
    display: block;
    top: 12px;
  }

  .feature-two__title {
    font-size: 20px;
    font-weight: 700;
    line-height: 30px;
    margin-bottom: 3px;
  }

  .feature-two__title a {
    color: var(--brote-base);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .feature-two__single:hover .feature-two__title a {
    color: var(--brote-white);
  }

  .feature-two__text {
    font-size: 15px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .feature-two__single:hover .feature-two__text {
    color: #b1c2f5;
  }

  .feature-two__star-1 {
    position: absolute;
    bottom: 4px;
    right: 45px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    -webkit-transition-delay: 300ms;
    transition-delay: 300ms;
    -webkit-transform: scale(0);
    transform: scale(0);
  }

  .feature-two__single:hover .feature-two__star-1 {
    -webkit-transform: scale(1);
    transform: scale(1);
  }

  .feature-two__star-1 img {
    width: auto;
    opacity: .20;
  }

  .feature-two__star-2 {
    position: absolute;
    bottom: 20px;
    right: 5px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    -webkit-transition-delay: 200ms;
    transition-delay: 200ms;
    -webkit-transform: scale(0);
    transform: scale(0);
  }

  .feature-two__single:hover .feature-two__star-2 {
    -webkit-transform: scale(1);
    transform: scale(1);
  }

  .feature-two__star-2 img {
    width: auto;
    opacity: .20;
  }

  .feature-two__star-3 {
    position: absolute;
    bottom: -14px;
    right: 8px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    -webkit-transform: scale(0);
    transform: scale(0);
  }

  .feature-two__single:hover .feature-two__star-3 {
    -webkit-transform: scale(1);
    transform: scale(1);
  }

  .feature-two__star-3 img {
    width: auto;
    opacity: .20;
  }

  /*--------------------------------------------------------------
# We Cleaning
--------------------------------------------------------------*/
  .we-cleaning {
    position: relative;
    display: block;
    padding: 0 0 120px;
  }

  .we-cleaning__left {
    position: relative;
    display: block;
    margin-left: -41px;
    margin-right: 45px;
    margin-top: 45px;
  }

  .we-cleaning__img-box {
    position: relative;
    display: block;
  }

  .we-cleaning__img {
    position: relative;
    display: block;
    border-radius: 50%;
  }

  .we-cleaning__img>img {
    width: 100%;
    border-radius: 50%;
    border: 22px solid var(--brote-primary);
  }

  .we-cleaning-line {
    position: absolute;
    top: -43px;
    bottom: 0;
    right: -44px;
  }

  .we-cleaning-line>img {
    width: auto;
  }

  .we-cleaning-line:before {
    content: "";
    position: absolute;
    top: -11px;
    left: -15px;
    height: 35px;
    width: 35px;
    background-color: var(--brote-primary);
    border-radius: 50%;
  }

  .we-cleaning-line:after {
    content: "";
    position: absolute;
    bottom: -54px;
    left: -15px;
    height: 35px;
    width: 35px;
    background-color: var(--brote-base);
    border-radius: 50%;
  }

  .we-cleaning__small-img {
    position: absolute;
    top: -80px;
    left: -91px;
  }

  .we-cleaning__small-img img {
    width: auto;
    -webkit-box-shadow: 0px 10px 60px 0px rgba(12, 12, 12, 0.1);
    box-shadow: 0px 10px 60px 0px rgba(12, 12, 12, 0.1);
    border: 14px solid var(--brote-white);
    border-radius: 50%;
  }

  .we-cleaning__video-link {
    position: absolute;
    left: -50px;
    bottom: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .we-cleaning__video-icon {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 190px;
    height: 190px;
    line-height: 190px;
    text-align: center;
    font-size: 35px;
    color: var(--brote-white);
    background-color: var(--brote-base);
    border-radius: 50%;
    transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -webkit-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    z-index: 1;
  }

  .we-cleaning__video-icon:hover {
    color: var(--brote-base);
  }

  .we-cleaning__video-icon:before {
    position: absolute;
    top: 28px;
    left: 28px;
    right: 28px;
    bottom: 28px;
    content: "";
    border-radius: 50%;
    background-color: rgba(var(--brote-white-rgb), 0.1);
    transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -webkit-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    z-index: -1;
  }

  .we-cleaning__video-icon:hover:before {
    background-color: var(--brote-white);
  }

  .we-cleaning__video-link .ripple,
  .we-cleaning__video-icon .ripple:before,
  .we-cleaning__video-icon .ripple:after {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 190px;
    height: 190px;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    -ms-box-shadow: 0 0 0 0 rgba(var(--brote-primary-rgb), 0.6);
    -o-box-shadow: 0 0 0 0 rgba(var(--brote-primary-rgb), 0.6);
    -webkit-box-shadow: 0 0 0 0 rgba(var(--brote-primary-rgb), 0.6);
    box-shadow: 0 0 0 0 rgba(var(--brote-primary-rgb), 0.6);
    -webkit-animation: ripple 3s infinite;
    animation: ripple 3s infinite;
    border-radius: 50%;
  }

  .we-cleaning__video-icon .ripple:before {
    -webkit-animation-delay: 0.9s;
    animation-delay: 0.9s;
    content: "";
    position: absolute;
  }

  .we-cleaning__video-icon .ripple:after {
    -webkit-animation-delay: 0.6s;
    animation-delay: 0.6s;
    content: "";
    position: absolute;
  }

  .we-cleaning__shape-1 {
    position: absolute;
    left: -78px;
    bottom: -30px;
    border-radius: 50%;
    background-color: #eef0f6;
    width: 243px;
    height: 243px;
    z-index: -1;
  }

  .we-cleaning__shape-2 {
    position: absolute;
    bottom: 39px;
    left: -163px;
    border-width: 5px;
    border-color: #ffb400;
    border-style: solid;
    border-radius: 50%;
    width: 145px;
    height: 145px;
  }

  .we-cleaning__shape-3 {
    position: absolute;
    top: -70px;
    left: 204px;
    border-radius: 50%;
    background-color: #1200ff;
    width: 26px;
    height: 26px;
  }

  .we-cleaning__shape-4 {
    position: absolute;
    bottom: -51px;
    left: 199px;
    border-radius: 50%;
    background-color: #eef0f6;
    width: 26px;
    height: 26px;
  }

  .we-cleaning__shape-5 {
    position: absolute;
    top: 250px;
    left: -46px;
    border-radius: 50%;
    background-color: #eef0f6;
    width: 26px;
    height: 26px;
  }

  .we-cleaning__right {
    position: relative;
    display: block;
    margin-left: 70px;
  }

  .we-cleaning__right .section-title {
    margin-bottom: 27px;
  }

  .we-cleaning__text-1 {
    line-height: 32px;
  }

  .we-cleaning__points-box {
    position: relative;
    display: block;
    margin-top: 38px;
    margin-bottom: 39px;
  }

  .we-cleaning__points {
    position: relative;
    display: block;
  }

  .we-cleaning__points li {
    position: relative;
    display: block;
    float: left;
  }

  .we-cleaning__points li:last-child {
    margin-left: 50px;
  }

  .we-cleaning__icon {
    position: relative;
    display: block;
    margin-left: 30px;
    z-index: 1;
  }

  .we-cleaning__icon:before {
    position: absolute;
    bottom: 5px;
    left: -30px;
    height: 65px;
    width: 65px;
    background-color: #eef0f6;
    border-radius: 50%;
    content: "";
    -webkit-transition: all 500ms linear;
    transition: all 500ms linear;
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
    -webkit-transform: scale(1);
    transform: scale(1);
    z-index: -1;
  }

  .we-cleaning__points li:hover .we-cleaning__icon:before {
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
  }

  .we-cleaning__icon span {
    position: relative;
    display: inline-block;
    font-size: 65px;
    color: var(--brote-primary);
    -webkit-transition: all 500ms linear;
    transition: all 500ms linear;
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
    -webkit-transform: scale(1);
    transform: scale(1);
  }

  .we-cleaning__points li:hover .we-cleaning__icon span {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
  }

  .we-cleaning__text-box {
    position: relative;
    display: block;
    margin-top: 17px;
  }

  .we-cleaning__title {
    font-size: 18px;
    font-weight: 700;
    line-height: 26px;
    margin-bottom: 13px;
  }

  .we-cleaning__text-2 {
    line-height: 32px;
  }

  /*--------------------------------------------------------------
# Services Two
--------------------------------------------------------------*/
  .services-two {
    position: relative;
    display: block;
    padding: 120px 0 90px;
    z-index: 1;
  }

  .services-two:before {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 580px;
    content: "";
    background-color: #eef0f6;
    z-index: -1;
  }

  .services-two-bubble {
    position: absolute;
    top: 20px;
    right: 215px;
    width: 1498px;
    height: 524px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: top center;
    z-index: -1;
  }

  .services-two-dot-1 {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
  }

  .services-two-dot-1 img {
    width: auto;
  }

  .services-two-dot-2 {
    position: absolute;
    top: 0;
    right: 0;
    z-index: -1;
  }

  .services-two-dot-2 img {
    width: auto;
  }

  .services-two__single {
    position: relative;
    display: block;
    margin-bottom: 30px;
  }

  .services-two__img-box {
    position: relative;
    display: block;
  }

  .services-two__img {
    position: relative;
    display: block;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    overflow: hidden;
    z-index: 1;
  }

  .services-two__img:before {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: "";
    background-color: rgba(var(--brote-base-rgb), 0.5);
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-transition: all 0.5s cubic-bezier(0.62, 0.21, 0.45, 1.52);
    transition: all 0.5s cubic-bezier(0.62, 0.21, 0.45, 1.52);
    z-index: 1;
  }

  .services-two__single:hover .services-two__img:before {
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }

  .services-two__img img {
    width: 100%;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    height: 240px;
    object-fit: cover;
  }

  .services-two__single:hover .services-two__img img {
    -webkit-transform: scale(1.05);
    transform: scale(1.05);
  }

  .services-two__icon {
    position: absolute;
    bottom: -30px;
    left: 50%;
    border-radius: 10px;
    background-color: #ffb400;
    width: 99px;
    height: 99px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    z-index: 2;
  }

  .services-two__single:hover .services-two__icon {
    background-color: var(--brote-base);
  }

  .services-two__icon span {
    position: relative;
    display: inline-block;
    font-size: 65px;
    color: var(--brote-white);
    -webkit-transition: all 500ms linear;
    transition: all 500ms linear;
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
    -webkit-transform: scale(1);
    transform: scale(1);
  }

  .services-two__single:hover .services-two__icon span {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
  }

  .services-two__content {
    position: relative;
    display: block;
    background-color: white;
    -webkit-box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.05);
    padding: 50px 40px 40px;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    text-align: center;
  }

  .services-two__title {
    font-size: 24px;
    font-weight: 700;
    line-height: 34px;
  }

  .services-two__title a {
    color: var(--brote-base);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .services-two__title a:hover {
    color: var(--brote-primary);
  }

  .services-two__text {
    padding-top: 14px;
    padding-bottom: 20px;
  }

  .services-two__btn {
    position: relative;
    display: block;
    background-color: #e4e5ea;
    font-size: 12px;
    color: var(--brote-gray);
    text-transform: uppercase;
    letter-spacing: 0.1em;
    font-weight: 700;
    border-radius: 25px;
    padding: 10px 0;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .services-two__btn:hover {
    background-color: var(--brote-primary);
    color: var(--brote-white);
  }

  /*--------------------------------------------------------------
# Brand TWo
--------------------------------------------------------------*/
  .brand-two {
    position: relative;
    display: block;
  }

  .brand-two .brand-one__inner {
    padding: 60px 0 61px;
  }

  /*--------------------------------------------------------------
# FAQ One
--------------------------------------------------------------*/
  .faq-one {
    position: relative;
    display: block;
    background-color: #eef0f6;
    padding: 120px 0 120px;
    overflow: hidden;
    z-index: 1;
  }

  .faq-one-bg {
    position: absolute;
    top: -113px;
    bottom: 0;
    right: 0;
    width: 1413px;
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;
    z-index: -1;
  }

  .faq-one-bg:before {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    content: "";
    width: 742px;
    background: #eef0f6;
    background: -webkit-gradient(linear, left top, right top, color-stop(46%, #eef0f6), color-stop(80%, rgba(238, 240, 246, 0)));
    background: linear-gradient(90deg, #eef0f6 46%, rgba(238, 240, 246, 0) 80%);
  }

  .faq-one-shape-1 {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 1057px;
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;
    opacity: .30;
    z-index: -1;
  }

  .faq-one__left {
    position: relative;
    display: block;
  }

  .faq-one-accrodion .accrodion {
    position: relative;
    display: block;
    border: 1px solid #e4e5ea;
    border-radius: 10px;
    background-color: var(--brote-white);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .faq-one-accrodion .accrodion.active {
    -webkit-box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.07);
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.07);
  }

  .faq-one-accrodion .accrodion:before {
    position: absolute;
    top: 0px;
    left: 0px;
    bottom: 0px;
    width: 7px;
    content: "";
    background-color: var(--brote-primary);
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    z-index: 1;
  }

  .faq-one-accrodion .accrodion.active:before {
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }

  .faq-one-accrodion .accrodion-title {
    position: relative;
    display: block;
    cursor: pointer;
    padding: 21px 40px 21px;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
    border-radius: 10px;
  }

  .faq-one-accrodion .accrodion-title h4 {
    margin: 0;
    font-size: 18px;
    font-weight: 500;
    line-height: 28px;
    color: var(--brote-base);
    position: relative;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .faq-one-accrodion .accrodion+.accrodion {
    margin-top: 20px;
  }

  .faq-one-accrodion .accrodion.active .accrodion-title {
    color: var(--brote-base);
  }

  .faq-one-accrodion .accrodion.active .accrodion-title h4 {
    color: var(--brote-base);
  }

  .faq-one-accrodion .accrodion-title h4::before {
    content: "\f067";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 8px;
    color: var(--brote-white);
    background-color: var(--brote-gray);
    position: absolute;
    top: 50%;
    right: 0;
    height: 15px;
    width: 15px;
    line-height: 15px;
    border-radius: 50%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    text-align: center;
  }

  .faq-one-accrodion .accrodion.active .accrodion-title h4::before {
    content: "\f068";
    color: var(--brote-white);
    background-color: var(--brote-base);
    height: 15px;
    width: 15px;
    border-radius: 50%;
    text-align: center;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .faq-one-accrodion .accrodion-content {
    position: relative;
    padding: 12px 40px 35px;
  }

  .faq-one-accrodion .accrodion-content p {
    margin: 0;
  }

  /*--------------------------------------------------------------
# Project One
--------------------------------------------------------------*/
  .project-one {
    position: relative;
    display: block;
    padding: 120px 0 180px;
  }

  .project-one__top {
    position: relative;
    display: block;
  }

  .project-one__left {
    position: relative;
    display: block;
  }

  .project-one__right {
    position: relative;
    display: block;
    margin-left: 70px;
    margin-top: 26px;
  }

  .project-one__bottom {
    position: relative;
    display: block;
  }

  .project-one__bottom-container {
    position: relative;
    display: block;
    max-width: 1600px;
    width: 100%;
    padding: 0 15px;
    margin: 0 auto;
  }

  .project-one__carousel {
    position: relative;
    display: block;
  }

  .project-one__single {
    position: relative;
    display: block;
  }

  .project-one__img {
    position: relative;
    display: block;
    border-radius: 10px;
    overflow: hidden;
    z-index: 1;
  }

  .project-one__img:before {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    content: "";
    background-color: rgba(var(--brote-base-rgb), 0.9);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    opacity: 1;
    -webkit-transform-origin: bottom;
    transform-origin: bottom;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
    z-index: 1;
  }

  .project-one__single:hover .project-one__img:before {
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }

  .project-one__img img {
    width: 100%;
    border-radius: 10px;
  }

  .project-one__content {
    position: absolute;
    left: 50px;
    bottom: 40px;
    z-index: 2;
    border-top: 2px solid var(--brote-primary);
    padding-top: 23px;
    -webkit-transform: translateY(-100px);
    transform: translateY(-100px);
    opacity: 0;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .project-one__single:hover .project-one__content {
    -webkit-transform: translateY(0px);
    transform: translateY(0px);
    opacity: 1;
  }

  .project-one__title {
    font-size: 24px;
    font-weight: 700;
    line-height: 34px;
  }

  .project-one__title a {
    color: var(--brote-white);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .project-one__title a:hover {
    color: var(--brote-primary);
  }

  .project-one__sub-title {
    color: #b1c2f5;
  }

  .project-one__arrow {
    position: absolute;
    top: 30px;
    right: 30px;
    -webkit-transform: scale(0);
    transform: scale(0);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    z-index: 2;
  }

  .project-one__single:hover .project-one__arrow {
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition-delay: 500ms;
    transition-delay: 500ms;
  }

  .project-one__arrow a {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    height: 50px;
    width: 50px;
    background-color: var(--brote-primary);
    border-radius: 50%;
    font-size: 15px;
    color: var(--brote-white);
  }

  .project-one__carousel.owl-carousel .owl-dots {
    position: absolute;
    bottom: -60px;
    left: 0px;
    right: 0;
    text-align: center;
    margin: 0 !important;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .project-one__carousel.owl-carousel .owl-dots .owl-dot {
    position: relative;
    display: inline-block;
    width: 13px;
    height: 13px;
    border-radius: 50%;
    background-color: rgba(var(--brote-base-rgb), 0.3);
    margin: 0px 5px;
    padding: 0px;
    -webkit-transition: all 100ms linear;
    transition: all 100ms linear;
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
  }

  .project-one__carousel.owl-carousel .owl-dot.active {
    width: 20px;
    height: 20px;
    background-color: rgba(var(--brote-primary-rgb), 1);
  }

  .project-one__carousel.owl-carousel .owl-dot:focus {
    outline: none;
  }

  .project-one__carousel.owl-carousel .owl-dots .owl-dot span {
    display: none;
  }

  /*--------------------------------------------------------------
# Process
--------------------------------------------------------------*/
  .process {
    position: relative;
    display: block;
    padding: 0 0 90px;
    z-index: 1;
  }

  .process__inner {
    position: relative;
    display: block;
    counter-reset: count;
    z-index: 1;
  }

  .process-line {
    position: absolute;
    top: -10px;
    left: 168px;
    z-index: -1;
  }

  .process-line img {
    width: auto;
  }

  .process__single {
    position: relative;
    display: block;
    text-align: center;
    padding: 0 65px 0;
    margin-bottom: 20px;
  }

  .process__icon-box {
    position: relative;
    display: block;
    height: 142px;
    width: 142px;
    margin: 0 auto;
  }

  .process__icon {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    height: 142px;
    width: 142px;
    background-color: var(--brote-primary);
    border-radius: 50%;
    margin: 0 auto;
    z-index: 1;
  }

  .process__icon span {
    position: relative;
    display: inline-block;
    font-size: 65px;
    color: var(--brote-base);
    -webkit-transition: all 500ms linear;
    transition: all 500ms linear;
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
    -webkit-transform: scale(1) rotateY(0deg);
    transform: scale(1) rotateY(0deg);
    z-index: 1;
  }

  .process__single:hover .process__icon span {
    -webkit-transform: scale(0.9) rotateY(360deg);
    transform: scale(0.9) rotateY(360deg);
    color: var(--brote-primary);
  }

  .process-icon-shape {
    position: absolute;
    top: 5px;
    bottom: 5px;
    left: 5px;
    right: 5px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    z-index: -1;
  }

  .process__count {
    position: absolute;
    top: 0;
    left: 0;
    height: 45px;
    width: 45px;
    border-radius: 50%;
    background-color: var(--brote-base);
    z-index: 2;
  }

  .process__count:before {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    font-size: 20px;
    line-height: 45px;
    font-weight: 700;
    counter-increment: count;
    content: counters(count, ".", decimal-leading-zero);
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
    font-family: var(--qutiiz-font-two);
    color: var(--brote-white);
  }

  .process__content {
    position: relative;
    display: block;
  }

  .process__title {
    font-size: 24px;
    font-weight: 700;
    line-height: 29px;
    margin-top: 34px;
    margin-bottom: 17px;
  }

  .process__title a {
    color: var(--brote-base);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .process__title a:hover {
    color: var(--brote-primary);
  }

  .process__single-two .process__count {
    bottom: 0;
    right: 0;
    top: inherit;
    left: inherit;
  }

  /*--------------------------------------------------------------
# Call One
--------------------------------------------------------------*/
  .call-one {
    position: relative;
    display: block;
    background-color: #ffa400;
    z-index: 1;
  }

  .call-one-shape-1 {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 205px;
    width: 565px;
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;
    opacity: .60;
    z-index: -1;
  }

  .call-one-shape-2 {
    position: absolute;
    top: 0;
    right: 190px;
    bottom: 0;
    width: 565px;
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;
    opacity: .60;
    z-index: -1;
  }

  .call-one__inner {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 60px 0;
  }

  .call-one__text {
    font-size: 34px;
    color: var(--brote-white);
    font-weight: 700;
    line-height: 46px;
  }

  .call-one__call-number a {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: var(--brote-base);
    font-size: 20px;
    color: var(--brote-white);
    font-weight: 700;
    padding-top: 3px;
    padding-bottom: 4px;
    padding-left: 4px;
    padding-right: 40px;
    border-radius: 30px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .call-one__call-number a:hover {
    background-color: var(--brote-white);
    color: var(--brote-base);
  }

  .call-one__call-number a i {
    height: 53px;
    width: 53px;
    background-color:
      <?php echo $secondary_color; ?>
    ;
    border-radius: 50%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    font-size: 24px;
    margin-right: 20px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .call-one__call-number a:hover i {
    background-color: var(--brote-primary);
    color: var(--brote-white);
  }

  /*--------------------------------------------------------------
# Why Choose One
--------------------------------------------------------------*/
  .why-choose-one {
    position: relative;
    display: block;
    padding: 0 0 120px;
    overflow: hidden;
    z-index: 1;
  }

  .why-choose-one-shape-1 {
    position: absolute;
    top: -22px;
    left: 0;
    width: 1050px;
    height: 760px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: top center;
    z-index: -1;
  }

  .why-choose-one__img {
    position: absolute;
    top: 0;
    left: 0;
  }

  .why-choose-one__img img {
    width: auto;
  }

  .why-choose-one-bubble-1 {
    position: absolute;
    top: 90px;
    left: 845px;
  }

  .why-choose-one-bubble-1 img {
    width: auto;
  }

  .why-choose-one-bubble-2 {
    position: absolute;
    bottom: 171px;
    left: 422px;
    z-index: 1;
  }

  .why-choose-one-bubble-2 img {
    width: auto;
  }

  .why-choose-one-bubble-3 {
    position: absolute;
    left: 40px;
    bottom: 150px;
  }

  .why-choose-one-bubble-3 img {
    width: auto;
  }

  .why-choosee-one__left {
    position: relative;
    display: block;
    margin-top: 113px;
  }

  .why-choose-one__img-2 {
    margin-left: 215px;
  }

  .why-choose-one__img-2 img {
    width: auto;
    border-radius: 50%;
    -webkit-box-shadow: 6.157px 7.88px 50px 0px rgba(12, 12, 12, 0.15);
    box-shadow: 6.157px 7.88px 50px 0px rgba(12, 12, 12, 0.15);
    border: 10px solid var(--brote-white);
  }

  .why-choose-one__img-3 {
    margin-left: 35px;
    margin-top: 17px;
  }

  .why-choose-one__img-3 img {
    width: auto;
    border-radius: 50%;
    -webkit-box-shadow: 6.157px 7.88px 50px 0px rgba(12, 12, 12, 0.15);
    box-shadow: 6.157px 7.88px 50px 0px rgba(12, 12, 12, 0.15);
    border: 15px solid var(--brote-white);
  }

  .why-choose-one__right {
    position: relative;
    display: block;
    padding-top: 120px;
  }

  .why-choose-one__points {
    position: relative;
    display: block;
  }

  .why-choose-one__points li {
    position: relative;
    display: block;
    padding-left: 80px;
    border-bottom: 1px solid #d7d7d7;
    padding-bottom: 42px;
    margin-bottom: 50px;
  }

  .why-choose-one__points li:last-child {
    border-bottom: 0;
    padding-bottom: 0;
    margin-bottom: 0;
  }

  .why-choose-one__points li .icon {
    position: absolute;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    height: 60px;
    width: 60px;
    background-color: #eef0f6;
    border-radius: 50%;
    top: 0;
    left: 0;
    z-index: 1;
  }

  .why-choose-one__points li .icon:before {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: "";
    border-radius: 50%;
    background-color: var(--brote-base);
    -webkit-transform: scale(0);
    transform: scale(0);
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-transition: all 0.4s cubic-bezier(0.62, 0.21, 0.45, 1.52);
    transition: all 0.4s cubic-bezier(0.62, 0.21, 0.45, 1.52);
    z-index: -1;
  }

  .why-choose-one__points li:hover .icon:before {
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
  }

  .why-choose-one__points li .icon span {
    position: relative;
    display: inline-block;
    font-size: 25px;
    color: var(--brote-base);
    -webkit-transition: all 500ms linear;
    transition: all 500ms linear;
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
    -webkit-transform: scale(1);
    transform: scale(1);
  }

  .why-choose-one__points li:hover .icon span {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
    color: var(--brote-white);
  }

  .why-choose-one__points li .text {
    position: relative;
    display: block;
    top: 3px;
  }

  .why-choose-one__points li .text h4 {
    font-size: 24px;
    font-weight: 700;
    line-height: 24px;
    margin-bottom: 16px;
  }

  .why-choose-one__points li .text p {
    line-height: 32px;
  }

  /*--------------------------------------------------------------
# Blog Two
--------------------------------------------------------------*/
  .blog-two {
    position: relative;
    display: block;
    padding: 0 0 245px;
    z-index: 1;
  }

  .blog-two:before {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    content: "";
    background-color: #eef0f6;
    height: 560px;
    z-index: -1;
  }

  .blog-two-shape-1 {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 560px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    opacity: .20;
    z-index: -1;
  }

  .blog-two-shape-2 {
    position: absolute;
    bottom: 0;
    left: 50%;
    height: 560px;
    width: 1470px;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    z-index: -1;
  }

  .blog-two .blog-one__single {
    margin-bottom: 30px;
  }

  /*--------------------------------------------------------------
# Why Choose Two
--------------------------------------------------------------*/
  .why-choose-two {
    position: relative;
    display: block;
    padding: 120px 0 120px;
  }

  .why-choose-two-bubble {
    position: absolute;
    top: 180px;
    right: 70px;
    z-index: -1;
  }

  .why-choose-two-bubble img {
    width: auto;
  }

  .why-choose-two__left {
    position: relative;
    display: block;
    margin-left: 140px;
  }

  .why-choose-two__img-box {
    position: relative;
    display: block;
  }

  .why-choose-two__img-1 {
    position: relative;
    display: block;
    border-radius: 10px;
    z-index: 2;
  }

  .why-choose-two__img-1 img {
    width: 100%;
    border-radius: 10px;
  }

  .why-choose-two__img-2 {
    position: absolute;
    top: 80px;
    left: -170px;
    border-radius: 10px;
  }

  .why-choose-two__img-2 img {
    width: auto;
    border-radius: 10px;
  }

  .why-choose-two__dot {
    position: absolute;
    top: -45px;
    left: -254px;
    opacity: .20;
    z-index: -1;
  }

  .why-choose-two__dot img {
    width: auto;
    -webkit-animation-name: shapeMover;
    animation-name: shapeMover;
    -webkit-animation-duration: 9s;
    animation-duration: 9s;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
  }

  .why-choose-two__right {
    position: relative;
    display: block;
    margin-left: 70px;
  }

  .why-choose-two__right .section-title {
    margin-bottom: 27px;
  }

  .why-choose-two__text {
    line-height: 32px;
  }

  .why-choose-two__progress {
    position: relative;
    display: block;
    width: 100%;
    margin-top: 32px;
  }

  .why-choose-two__progress-single {
    position: relative;
    display: block;
  }

  .why-choose-two__progress-title {
    font-size: 16px;
    line-height: 26px;
    margin-bottom: 7px;
    font-weight: 700;
  }

  .why-choose-two__progress .bar {
    position: relative;
    width: 100%;
    height: 14px;
    background-color: #eef0f6;
    border-radius: 7px;
    margin-bottom: 13px;
  }

  .why-choose-two__progress .bar-inner {
    position: relative;
    display: block;
    width: 0px;
    height: 14px;
    border-radius: 7px;
    background: var(--brote-primary);
    -webkit-transition: all 1500ms ease;
    transition: all 1500ms ease;
  }

  .why-choose-two__progress .count-text {
    position: absolute;
    right: -20px;
    bottom: 21px;
    color: var(--brote-gray);
    line-height: 26px;
    font-size: 14px;
    text-align: center;
    font-weight: 500;
    opacity: 0;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .why-choose-two__progress .bar-inner.counted .count-text {
    opacity: 1;
  }

  .why-choose-two__progress .bar.marb-0 {
    margin-bottom: 0;
  }

  .why-choose-two__number {
    position: relative;
    display: block;
    margin-top: 50px;
  }

  .why-choose-two__number a {
    position: relative;
    display: inline-block;
    background-color: var(--brote-base);
    font-size: 20px;
    font-weight: 700;
    color: var(--brote-white);
    padding-top: 3px;
    padding-bottom: 4px;
    padding-left: 4px;
    padding-right: 40px;
    border-radius: 30px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .why-choose-two__number a:hover {
    background-color: var(--brote-primary);
    color: var(--brote-white);
  }

  .why-choose-two__number a i {
    position: relative;
    display: inline-block;
    height: 53px;
    width: 53px;
    background-color: var(--brote-primary);
    border-radius: 50%;
    text-align: center;
    line-height: 53px;
    margin-right: 15px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .why-choose-two__number a:hover i {
    background-color: var(--brote-base);
    color: var(--brote-white);
  }

  /*--------------------------------------------------------------
# Services Three
--------------------------------------------------------------*/
  .services-three {
    position: relative;
    display: block;
    background-color: #eef0f6;
    overflow: hidden;
    padding: 120px 0 90px;
  }

  .services-three-bg {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 1497px;
    height: 746px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
  }

  .services-three-dot-1 {
    position: absolute;
    left: 0;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
  }

  .services-three-dot-1 img {
    width: auto;
  }

  .services-three-dot-2 {
    position: absolute;
    right: 0;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
  }

  .services-three-dot-2 img {
    width: auto;
  }

  .services-three__single {
    position: relative;
    display: block;
    margin-bottom: 30px;
  }

  .services-three__img-box {
    position: relative;
    display: block;
    overflow: hidden;
    z-index: 1;
  }

  .services-three__img {
    position: relative;
    display: block;
    border-top-left-radius: 14px;
    border-top-right-radius: 14px;
    overflow: hidden;
  }

  .services-three__img:before {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: "";
    background-color: rgba(var(--brote-base-rgb), 0.9);
    border-top-left-radius: 14px;
    border-top-right-radius: 14px;
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-transition: all 0.5s cubic-bezier(0.62, 0.21, 0.45, 1.52);
    transition: all 0.5s cubic-bezier(0.62, 0.21, 0.45, 1.52);
    z-index: 1;
  }

  .services-three__single:hover .services-three__img:before {
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }

  .services-three__img img {
    width: 100%;
    border-top-left-radius: 14px;
    border-top-right-radius: 14px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .services-three__single:hover .services-three__img img {
    -webkit-transform: scale(1.05);
    transform: scale(1.05);
  }

  .services-three__icon {
    position: absolute;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    height: 120px;
    width: 120px;
    background-color: var(--brote-primary);
    border-radius: 50%;
    bottom: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    z-index: 3;
  }

  .services-three__icon:before {
    position: absolute;
    top: 10px;
    left: 10px;
    right: 10px;
    bottom: 10px;
    content: "";
    background-color: var(--brote-white);
    border-radius: 50%;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    z-index: -1;
  }

  .services-three__single:hover .services-three__icon:before {
    background-color: var(--brote-primary);
  }

  .services-three__icon span {
    position: relative;
    display: inline-block;
    font-size: 65px;
    color: var(--brote-base);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .services-three__single:hover .services-three__icon span {
    color: var(--brote-white);
  }

  .services-three__bubble {
    position: absolute;
    bottom: -3px;
    left: -16px;
    right: -7px;
    z-index: 2;
  }

  .services-three__bubble img {
    width: 100%;
  }

  .services-three__content {
    position: relative;
    display: block;
    background-color: white;
    -webkit-box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.05);
    text-align: center;
    padding: 20px 40px 40px;
    border-bottom-left-radius: 14px;
    border-bottom-right-radius: 14px;
  }

  .services-three__title {
    font-size: 24px;
    font-weight: 700;
    line-height: 27px;
  }

  .services-three__title a {
    color: var(--brote-base);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .services-three__single:hover .services-three__title a {
    color: var(--brote-primary);
  }

  .services-three__text {
    padding-top: 16px;
    padding-bottom: 20px;
  }

  .services-three__btn-box {
    position: relative;
    display: block;
  }

  .services-three__btn {
    position: relative;
    display: block;
    background-color: #e4e5ea;
    font-size: 12px;
    color: var(--brote-gray);
    text-transform: uppercase;
    letter-spacing: 0.1em;
    font-weight: 700;
    border-radius: 25px;
    padding: 10px 0;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .services-three__btn:hover {
    background-color: var(--brote-primary);
    color: var(--brote-white);
  }

  /*--------------------------------------------------------------
# Project Two
--------------------------------------------------------------*/
  .project-two {
    position: relative;
    display: block;
    padding: 120px 0 90px;
  }

  .project-two__top {
    position: relative;
    display: block;
  }

  .project-two__top-left {
    position: relative;
    display: block;
  }

  .project-two__top-right {
    position: relative;
    display: block;
    margin-left: 70px;
    margin-top: 20px;
  }

  .project-two__bottom {
    position: relative;
    display: block;
  }

  .project-two__bottom .project-one__single {
    margin-bottom: 30px;
  }

  /*--------------------------------------------------------------
# Feature Three
--------------------------------------------------------------*/
  .feature-three {
    position: relative;
    display: block;
    padding: 0 0 120px;
  }

  .feature-three__single {
    position: relative;
    display: block;
    border-style: solid;
    border-width: 1px;
    border-color: #e4e5ea;
    border-radius: 30px;
    background-color: white;
    -webkit-box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.05);
    padding: 59px 59px 0;
    margin-bottom: 30px;
  }

  .feature-three__top {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .feature-three__icon {
    position: relative;
    height: 110px;
    width: 110px;
    background-color: var(--brote-primary);
    border-radius: 50%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .feature-three__single:hover .feature-three__icon {
    background-color: var(--brote-base);
  }

  .feature-three__icon span {
    position: relative;
    display: inline-block;
    font-size: 65px;
    color: var(--brote-white);
    -webkit-transition: all 500ms linear;
    transition: all 500ms linear;
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
    -webkit-transform: scale(1);
    transform: scale(1);
  }

  .feature-three__single:hover .feature-three__icon span {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
  }

  .feature-three__content {
    margin-left: 30px;
  }

  .feature-three__content-box {
    font-size: 24px;
    color: var(--brote-base);
    font-weight: 700;
    line-height: 29px;
  }

  .feature-three__text-1 {
    font-size: 18px;
    line-height: 34px;
    font-weight: 400;
    padding-top: 29px;
    padding-bottom: 30px;
  }

  .feature-three__points-box {
    position: relative;
    display: block;
    overflow: hidden;
  }

  .feature-three__points {
    position: relative;
    display: block;
    float: left;
  }

  .feature-three__points li {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .feature-three__points li+li {
    margin-top: 9px;
  }

  .feature-three__points li .icon {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .feature-three__points li .icon i {
    font-size: 12px;
    color: var(--brote-primary);
  }

  .feature-three__points li .text {
    margin-left: 10px;
  }

  .feature-three__points li .text p {
    font-size: 18px;
    color: var(--brote-base);
  }

  .feature-three__points-two {
    margin-left: 35px;
  }

  .feature-three__img {
    position: relative;
    display: block;
    margin-top: 10px;
    top: 1px;
  }

  .feature-three__img img {
    width: 100%;
  }

  .feature-three__bottom {
    position: relative;
    display: block;
    text-align: center;
    margin-top: 11px;
  }

  .feature-three__bottom-text {
    font-size: 18px;
    line-height: 34px;
    font-weight: 400;
  }

  .feature-three__btn-box {
    position: relative;
    display: block;
    margin-top: 34px;
  }

  /*--------------------------------------------------------------
# Counter One
--------------------------------------------------------------*/
  .counter-two {
    position: relative;
    display: block;
    z-index: 2;
  }

  .counter-two__inner {
    position: relative;
    display: block;
    padding: 93px 0px 100px;
    border-top: 2px solid #eef0f6;
    z-index: 1;
  }

  .counter-two__list {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
  }

  .counter-two__list li {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .counter-two__icon {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    top: 4px;
  }

  .counter-two__icon span {
    position: relative;
    display: inline-block;
    font-size: 64px;
    color: #61ddff;
    -webkit-transition: all 500ms linear;
    transition: all 500ms linear;
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
    -webkit-transform: scale(1) rotateY(0deg);
    transform: scale(1) rotateY(0deg);
  }

  .counter-two__list li:hover .counter-two__icon span {
    -webkit-transform: scale(0.9) rotateY(360deg);
    transform: scale(0.9) rotateY(360deg);
  }

  .counter-two__count-box {
    margin-left: 20px;
  }

  .counter-two__count-box-inner {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }

  .counter-two__count-box-inner h3 {
    font-size: 36px;
    color: var(--brote-base);
    font-weight: 700;
    line-height: 46px !important;
    font-family: var(--brote-font) !important;
  }

  .counter-two__plus {
    position: relative;
    font-size: 20px;
    color: var(--brote-primary);
    top: 3px;
  }

  .counter-two__text {
    color: var(--brote-gray);
    font-weight: 400;
    line-height: 20px;
  }

  .counter-two .odometer-formatting-mark {
    display: none;
  }

  /*--------------------------------------------------------------
# CTA One
--------------------------------------------------------------*/
  .cta-one {
    position: relative;
    display: block;
    background-color: var(--brote-base);
    padding: 109px 0 120px;
    z-index: 1;
  }

  .cta-one-bg-bg {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: var(--brote-base);
    z-index: -1;
  }

  .cta-one-bg {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-color: var(--brote-base);
    mix-blend-mode: luminosity;
    opacity: .25;
  }

  .cta-one-shape {
    position: absolute;
    top: 0;
    bottom: 0;
    width: 1230px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    mix-blend-mode: color-dodge;
    opacity: .15;
    z-index: -1;
  }

  .cta-one__inner {
    position: relative;
    display: block;
    text-align: center;
  }

  .cta-one__title {
    font-size: 60px;
    color: var(--brote-white);
    font-weight: 700;
    line-height: 70px;
    letter-spacing: -0.02em;
  }

  .cta-one__title span {
    position: relative;
    display: inline-block;
  }

  .cta-one__title span:before {
    position: absolute;
    top: -14px;
    left: 78px;
    right: -155px;
    bottom: -18px;
    content: "";
    background-image: url(../images/shapes/cta-one-shape-2.png);
    background-repeat: no-repeat;
    background-position: center;
    z-index: -1;
    animation-name: zoom-fade;
    animation-duration: 5s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
    -webkit-animation-name: zoom-fade;
    -webkit-animation-duration: 5s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: linear;
    -moz-animation-name: zoom-fade;
    -moz-animation-duration: 5s;
    -moz-animation-iteration-count: infinite;
    -moz-animation-timing-function: linear;
    -ms-animation-name: zoom-fade;
    -ms-animation-duration: 5s;
    -ms-animation-iteration-count: infinite;
    -ms-animation-timing-function: linear;
    -o-animation-name: zoom-fade;
    -o-animation-duration: 5s;
    -o-animation-iteration-count: infinite;
    -o-animation-timing-function: linear;
  }

  .cta-one__btn-box {
    margin-top: 45px;
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .cta-one__btn-1 {
    background-color: var(--brote-primary);
  }

  .cta-one__btn-1:hover {
    background-color: var(--brote-white);
    color: var(--brote-base);
  }

  .cta-one__btn-1:hover i {
    color: var(--brote-white);
    background-color: var(--brote-primary);
  }

  .cta-one__btn-1 i {
    background-color: var(--brote-base);
    color: var(--brote-white);
  }

  .cta-one__btn-2 {
    background-color: var(--brote-white);
    color: var(--brote-base);
  }

  .cta-one__btn-2 i {
    color: var(--brote-white);
  }

  .cta-one__btn-1+.cta-one__btn-2 {
    margin-left: 10px;
  }

  /*--------------------------------------------------------------
# Blog Three
--------------------------------------------------------------*/
  .blog-three {
    position: relative;
    display: block;
    padding: 120px 0 213px;
    z-index: 1;
  }

  .blog-three-bg {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 851px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    z-index: -1;
  }

  .blog-three .section-title {
    margin-bottom: 77px;
  }

  .blog-three__carousel {
    position: relative;
    display: block;
  }

  .blog-three__carousel.owl-carousel .owl-stage-outer {
    overflow: visible;
  }

  .blog-three__carousel.owl-carousel .owl-stage-outer {
    overflow: visible;
  }

  .blog-three__carousel.owl-carousel .owl-item {
    opacity: 0;
    visibility: hidden;
    -webkit-transition: opacity 500ms ease, visibility 500ms ease;
    transition: opacity 500ms ease, visibility 500ms ease;
  }

  .blog-three__carousel.owl-carousel .owl-item.active {
    opacity: 1;
    visibility: visible;
  }

  .blog-three__single-box {
    position: relative;
    display: block;
  }

  .blog-three__single {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-bottom: 90px;
    z-index: 1;
  }

  .blog-three__single:before {
    position: absolute;
    top: -30px;
    left: 130px;
    bottom: -30px;
    right: 0;
    border-radius: 10px;
    background-color: white;
    -webkit-box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.07);
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.07);
    content: "";
    z-index: -1;
  }

  .blog-three__img {
    position: relative;
    display: block;
    border-radius: 10px;
    max-width: 270px;
    width: 100%;
    overflow: hidden;
  }

  .blog-three__img img {
    width: 100%;
    border-radius: 10px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .blog-three__single:hover .blog-three__img img {
    -webkit-transform: scale(1.05);
    transform: scale(1.05);
  }

  .blog-three__img>a {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(var(--brote-base-rgb), 0.5);
    position: absolute;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 30px;
    color: var(--brote-base);
    border-radius: 10px;
    -webkit-transition: opacity 500ms ease, visibility 500ms ease, -webkit-transform 500ms ease;
    transition: opacity 500ms ease, visibility 500ms ease, -webkit-transform 500ms ease;
    transition: opacity 500ms ease, visibility 500ms ease, transform 500ms ease;
    transition: opacity 500ms ease, visibility 500ms ease, transform 500ms ease, -webkit-transform 500ms ease;
    visibility: hidden;
    opacity: 0;
    -webkit-transform: translateY(-30%);
    transform: translateY(-30%);
  }

  .blog-three__img>a>span {
    position: relative;
  }

  .blog-three__img>a>span::before {
    content: '';
    width: 20px;
    height: 2px;
    background-color: var(--brote-primary);
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .blog-three__img>a>span::after {
    content: '';
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    width: 2px;
    height: 20px;
    background-color: var(--brote-primary);
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
  }

  .blog-three__img>a:hover>span::before,
  .blog-three__img>a:hover>span::after {
    background-color: var(--brote-white);
  }

  .blog-three__single:hover .blog-three__img>a {
    visibility: visible;
    -webkit-transform: translateY(0%);
    transform: translateY(0%);
    opacity: 1;
  }

  .blog-three__date {
    position: absolute;
    left: 20px;
    top: 20px;
    border-radius: 5px;
    background-color: var(--brote-white);
    width: 60px;
    height: 60px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center;
  }

  .blog-three__date p {
    font-size: 20px;
    font-weight: 700;
    color: var(--brote-base);
    text-align: center;
    line-height: 20px;
  }

  .blog-three__date p span {
    font-size: 14px;
    text-transform: uppercase;
  }

  .blog-three__content {
    position: relative;
    display: block;
    padding-left: 40px;
    padding-right: 40px;
  }

  .blog-three__meta {
    position: relative;
    display: block;
  }

  .blog-three__meta li {
    position: relative;
    display: block;
    line-height: 24px;
  }

  .blog-three__meta li a {
    font-size: 14px;
    color: var(--brote-gray);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .blog-three__meta li a:hover {
    color: var(--brote-primary);
  }

  .blog-three__meta li a i {
    color: var(--brote-primary);
  }

  .blog-three__title {
    font-size: 24px;
    font-weight: 700;
    line-height: 29px;
    margin-top: 18px;
    margin-bottom: 20px;
  }

  .blog-three__title a {
    color: var(--brote-base);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .blog-three__title a:hover {
    color: var(--brote-primary);
  }

  .blog-three__btn-box {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    border-top: 1px solid #e4e5ea;
    padding-top: 12px;
  }

  .blog-three__btn-box a {
    font-size: 14px;
    color: var(--brote-gray);
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .blog-three__btn-box a i {
    position: relative;
    font-size: 15px;
    top: 1px;
    padding-left: 8px;
  }

  .blog-three__btn-box a:hover {
    color: var(--brote-base);
  }

  .blog-three__carousel.owl-theme .owl-nav {
    position: absolute;
    top: -170px;
    right: 0px;
    margin-top: 0 !important;
  }

  .blog-three__carousel.owl-theme .owl-nav .owl-prev {
    height: 50px;
    width: 50px;
    background: var(--brote-base);
    border-radius: 50%;
    color: var(--brote-white);
    font-size: 15px;
    text-align: center;
    line-height: 55px;
    margin: 0;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .blog-three__carousel.owl-theme .owl-nav .owl-next {
    height: 50px;
    width: 50px;
    background: var(--brote-base);
    border-radius: 50%;
    color: var(--brote-white);
    font-size: 15px;
    text-align: center;
    line-height: 55px;
    margin: 0;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .blog-three__carousel.owl-theme .owl-nav .owl-prev {
    margin-right: 5px;
  }

  .blog-three__carousel.owl-theme .owl-nav .owl-next {
    margin-left: 5px;
  }

  .blog-three__carousel.owl-theme .owl-nav .owl-next span,
  .blog-three__carousel.owl-theme .owl-nav .owl-prev span {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .blog-three__carousel.owl-theme .owl-nav .owl-next:hover,
  .blog-three__carousel.owl-theme .owl-nav .owl-prev:hover {
    background-color: #eef0f6;
    color: var(--brote-gray);
  }

  /*--------------------------------------------------------------
# Page Header
--------------------------------------------------------------*/
  .page-header {
    position: relative;
    display: block;
    padding: 111px 0 116px;
    background-color: #eef0f6;
    z-index: 1;
    margin-top: -37px;
  }

  .page-header-bg {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: top center;
    z-index: -1;
    background-size: cover;
    background-position: center;
  }

  .page-header-bg:before {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 377px;
    content: "";
    background-image: -ms-linear-gradient(0deg, #eef0f6 0%, rgba(238, 240, 246, 0) 100%);
  }

  .page-header-bubble {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    -webkit-animation-name: zoomInOut;
    animation-name: zoomInOut;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;
    -webkit-animation-name: zoomInOut2;
    -webkit-animation-duration: 3s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-name: zoomInOut2;
    -moz-animation-duration: 3s;
    -moz-animation-iteration-count: infinite;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-name: zoomInOut2;
    -ms-animation-duration: 3s;
    -ms-animation-iteration-count: infinite;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-name: zoomInOut2;
    -o-animation-duration: 3s;
    -o-animation-iteration-count: infinite;
    -o-animation-timing-function: ease-in-out;
  }

  .page-header-bubble img {
    width: auto;
  }

  .page-header__inner {
    position: relative;
    display: block;
    z-index: 15;
  }

  .page-header__inner h2 {
    font-size: 40px;
    color: var(--brote-base);
    font-weight: 700;
    line-height: 50px;
  }

  .thm-breadcrumb {
    position: relative;
    display: block;
  }

  .thm-breadcrumb li {
    position: relative;
    display: inline-block;
    color: var(--brote-gray);
    font-size: 14px;
    font-weight: 500;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .thm-breadcrumb li+li {
    margin-left: 4px;
  }

  .thm-breadcrumb li a {
    position: relative;
    display: inline-block;
    color: var(--brote-gray);
    font-size: 14px;
    font-weight: 500;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .thm-breadcrumb li:hover a {
    color: var(--brote-primary);
  }

  /*--------------------------------------------------------------
# Blog Page
--------------------------------------------------------------*/
  .blog-page {
    position: relative;
    display: block;
    padding: 120px 0 140px;
  }

  .blog-page .blog-one__single {
    margin-bottom: 30px;
  }

  /*--------------------------------------------------------------
# Blog Page Carousel
--------------------------------------------------------------*/
  .blog-page-two {
    padding: 120px 0 200px;
  }

  .blog-page__carousel.owl-carousel .owl-dots {
    position: absolute;
    bottom: -30px;
    left: 0px;
    right: 0;
    text-align: center;
    margin: 0 !important;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .blog-page__carousel.owl-carousel .owl-dots .owl-dot {
    position: relative;
    display: inline-block;
    width: 13px;
    height: 13px;
    border-radius: 50%;
    background-color: rgba(var(--brote-base-rgb), 0.3);
    margin: 0px 5px;
    padding: 0px;
    -webkit-transition: all 100ms linear;
    transition: all 100ms linear;
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
  }

  .blog-page__carousel.owl-carousel .owl-dot.active {
    background-color: rgba(var(--brote-primary-rgb), 1);
  }

  .blog-page__carousel.owl-carousel .owl-dot:focus {
    outline: none;
  }

  .blog-page__carousel.owl-carousel .owl-dots .owl-dot span {
    display: none;
  }

  /*--------------------------------------------------------------
# Blog Sidebar
--------------------------------------------------------------*/
  .blog-sibebar {
    position: relative;
    display: block;
    padding: 120px 0 170px;
  }

  .blog-sideabr__left {
    position: relative;
    display: block;
  }

  .blog-sidebar__content {
    position: relative;
    display: block;
  }

  .blog-sidebar__single {
    position: relative;
    display: block;
  }

  .blog-sidebar__single+.blog-sidebar__single {
    margin-top: 30px;
  }

  .blog-sidebar__img {
    position: relative;
    display: block;
    border-radius: 10px;
  }

  .blog-sidebar__img img {
    width: 100%;
    border-radius: 10px;
  }

  .blog-sidebar__content-box {
    position: relative;
    display: block;
    margin-top: 22px;
  }

  .blog-sibebar__meta {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .blog-sibebar__meta li+li {
    margin-left: 15px;
  }

  .blog-sibebar__meta li a {
    font-size: 14px;
    color: var(--brote-gray);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .blog-sibebar__meta li a:hover {
    color: var(--brote-primary);
  }

  .blog-sibebar__meta li a i {
    color: var(--brote-primary);
  }

  .blog-sidebar__title {
    font-size: 34px;
    font-weight: 700;
    line-height: 44px;
    margin-top: 2px;
    margin-bottom: 12px;
  }

  .blog-sidebar__title a {
    color: var(--brote-base);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .blog-sidebar__title a:hover {
    color: var(--brote-primary);
  }

  .blog-sidebar__text {
    padding-bottom: 25px;
  }

  .blog-sidebar__btn {
    font-size: 12px;
    font-weight: 700;
    color: var(--brote-gray);
    padding: 10px 40px 10px;
    background-color: #e4e5ea;
    border-radius: 25px;
  }

  .blog-sidebar__bottom-box {
    position: relative;
    display: block;
    background-color: #eef0f6;
    padding: 50px 60px 45px;
    margin-top: 30px;
    border-radius: 10px;
  }

  .blog-sidebar__bottom-box-icon {
    margin-bottom: 21px;
  }

  .blog-sidebar__bottom-box-text {
    margin: 0;
    font-size: 16px;
    line-height: 30px;
  }

  .blog-sidebar__delivering-services {
    position: relative;
    display: block;
    background-color: #eef0f6;
    padding: 50px 60px 47px;
    margin-top: 30px;
    margin-bottom: 30px;
    border-radius: 10px;
  }

  .blog-sidebar__delivering-services-icon {
    margin-bottom: 21px;
  }

  .blog-sidebar__delivering-services-title {
    font-size: 30px;
    line-height: 40px;
    font-weight: 700;
  }

  .blog-sidebar__delivering-services-title a {
    color: var(--brote-base);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .blog-sidebar__delivering-services-title a:hover {
    color: var(--brote-primary);
  }

  .blog-sidebar__video-link {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .blog-sidebar__video-icon {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 97px;
    height: 97px;
    line-height: 97px;
    text-align: center;
    font-size: 23px;
    color: var(--brote-white);
    background-color: var(--brote-primary);
    border-radius: 50%;
    transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -webkit-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
  }

  .blog-sidebar__video-icon:hover {
    background-color: var(--brote-white);
    color: var(--brote-base);
  }

  .blog-sidebar__video-icon:before {
    position: absolute;
    top: -15px;
    left: -15px;
    right: -15px;
    bottom: -15px;
    content: "";
    border-radius: 50%;
    border: 1px solid var(--brote-white);
    opacity: 0.1;
    z-index: 1;
  }

  .blog-sidebar__video-link .ripple,
  .blog-sidebar__video-icon .ripple:before,
  .blog-sidebar__video-icon .ripple:after {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 125px;
    height: 125px;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    -ms-box-shadow: 0 0 0 0 rgba(var(--brote-primary-rgb), 0.6);
    -o-box-shadow: 0 0 0 0 rgba(var(--brote-primary-rgb), 0.6);
    -webkit-box-shadow: 0 0 0 0 rgba(var(--brote-primary-rgb), 0.6);
    box-shadow: 0 0 0 0 rgba(var(--brote-primary-rgb), 0.6);
    -webkit-animation: ripple 3s infinite;
    animation: ripple 3s infinite;
    border-radius: 50%;
  }

  .blog-sidebar__video-icon .ripple:before {
    -webkit-animation-delay: 0.9s;
    animation-delay: 0.9s;
    content: "";
    position: absolute;
  }

  .blog-sidebar__video-icon .ripple:after {
    -webkit-animation-delay: 0.6s;
    animation-delay: 0.6s;
    content: "";
    position: absolute;
  }

  /*--------------------------------------------------------------
# Sidebar
--------------------------------------------------------------*/
  @media (max-width: 991px) {
    .sidebar {
      margin-top: 50px;
    }
  }

  .sidebar__single+.sidebar__single {
    margin-top: 30px;
  }

  .sidebar__title {
    margin: 0;
    font-size: 20px;
    margin-bottom: 5px;
    font-weight: 700;
  }

  .sidebar__search {
    position: relative;
    display: block;
  }

  .sidebar__search-form {
    position: relative;
  }

  .sidebar__search-form input[type="search"] {
    display: block;
    border: none;
    outline: none;
    background-color: var(--brote-primary);
    color: var(--brote-white);
    font-size: 18px;
    font-weight: 400;
    padding-left: 50px;
    height: 84px;
    width: 100%;
    padding-right: 80px;
    border-radius: 10px;
  }

  .sidebar__search-form ::-webkit-input-placeholder {
    color: var(--brote-white);
    opacity: 1;
  }

  .sidebar__search-form :-ms-input-placeholder {
    color: var(--brote-white);
    opacity: 1;
  }

  .sidebar__search-form ::-ms-input-placeholder {
    color: var(--brote-white);
    opacity: 1;
  }

  .sidebar__search-form ::placeholder {
    color: var(--brote-white);
    opacity: 1;
  }

  .sidebar__search-form :-ms-input-placeholder {
    color: var(--brote-white);
  }

  .sidebar__search-form ::-ms-input-placeholder {
    color: var(--brote-white);
  }

  .sidebar__search-form button[type="submit"] {
    background-color: transparent;
    color: var(--brote-white);
    font-size: 22px;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 72px;
    outline: none;
    border: none;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 0;
  }

  .sidebar__post {
    position: relative;
    display: block;
    padding: 45px 30px 32px;
    background-color: #eef0f6;
    border-radius: 10px;
  }

  .sidebar__post .sidebar__title {
    margin-left: 20px;
  }

  .sidebar__post-list {
    margin: 0;
  }

  .sidebar__post-list li {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 18px 20px 15px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    border-radius: 10px;
  }

  .sidebar__post-list li:hover {
    background-color: white;
  }

  .sidebar__post-list li+li {
    margin-top: 10px;
  }

  .sidebar__post-image {
    margin-right: 20px;
  }

  .sidebar__post-image>img {
    width: 70px;
    border-radius: 10px;
  }

  .sidebar__post-content {
    position: relative;
    top: -4px;
  }

  .sidebar__post-content h3 {
    font-size: 16px;
    margin: 0;
    line-height: 26px;
  }

  .sidebar__post-content-meta {
    font-size: 14px;
    font-weight: 500;
    color: var(--brote-gray) !important;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .sidebar__post-content-meta i {
    color: var(--brote-primary);
    font-size: 14px;
    padding-right: 1px;
  }

  .sidebar__post-content h3 a {
    color: var(--brote-base);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    margin-top: 1px;
    display: block;
    font-size: 16px;
    font-weight: 700;
  }

  .sidebar__category {
    position: relative;
    display: block;
    background-color: #eef0f6;
    padding: 46px 30px 33px;
    border-radius: 10px;
  }

  .sidebar__category .sidebar__title {
    padding-left: 20px;
    margin-bottom: 11px;
  }

  .sidebar__category-list {
    margin: 0;
  }

  .sidebar__category-list li+li {
    margin-top: 4px;
  }

  .sidebar__category-list li a {
    color: var(--brote-gray);
    font-size: 16px;
    position: relative;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    display: block;
    background: none;
    padding: 5px 20px 7px;
    border-radius: 10px;
  }

  .sidebar__category-list li a:hover {
    background-color: white;
    -webkit-box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.05);
    color: var(--brote-base);
  }

  .sidebar__category-list li.active a {
    background-color: white;
    -webkit-box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.05);
    color: var(--brote-base);
  }

  .sidebar__category-list li a span {
    position: absolute;
    top: 50%;
    right: 30px;
    -webkit-transform: translateY(-50%) scale(0);
    transform: translateY(-50%) scale(0);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    color: var(--brote-base);
    text-align: center;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    font-size: 15px;
  }

  .sidebar__category-list li a:hover span {
    color: var(--brote-base);
    -webkit-transform: translateY(-50%) scale(1);
    transform: translateY(-50%) scale(1);
  }

  .sidebar__category-list li.active a span {
    -webkit-transform: translateY(-50%) scale(1);
    transform: translateY(-50%) scale(1);
    color: var(--brote-base);
  }

  .sidebar__tags {
    position: relative;
    display: block;
    background: #eef0f6;
    padding: 45px 45px 50px;
    border-radius: 10px;
  }

  .sidebar__tags .sidebar__title {
    margin-left: 5px;
    margin-bottom: 25px;
  }

  .sidebar__tags-list {
    margin-top: -10px;
  }

  .sidebar__tags-list a {
    font-size: 12px;
    color: var(--brote-gray);
    text-transform: uppercase;
    letter-spacing: 0.1em;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
    background: var(--brote-white);
    display: inline-block;
    padding: 6px 28px 4px;
    margin-left: 5px;
    font-weight: 700;
    border-radius: 20px;
  }

  .sidebar__tags-list a+a {
    margin-left: 5px;
    margin-top: 10px;
  }

  .sidebar__tags-list a:hover {
    color: var(--brote-white);
    background: var(--brote-base);
  }

  .sidebar__comments {
    position: relative;
    display: block;
    background: #eef0f6;
    padding: 45px 50px 43px;
    border-radius: 10px;
  }

  .sidebar__comments .sidebar__title {
    margin-bottom: 25px;
  }

  .sidebar__comments-list {
    position: relative;
    display: block;
  }

  .sidebar__comments-list li {
    position: relative;
    display: block;
    padding-left: 65px;
  }

  .sidebar__comments-list li+li {
    margin-top: 23px;
  }

  .sidebar__comments-icon {
    height: 45px;
    width: 45px;
    background-color: var(--brote-white);
    border-radius: 50%;
    font-size: 15px;
    color: var(--brote-base);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    position: absolute;
    top: 0;
    left: 0;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
  }

  .sidebar__comments-list li:hover .sidebar__comments-icon {
    background-color: var(--brote-primary);
    color: var(--brote-white);
  }

  .sidebar__comments-text-box p {
    font-size: 15px;
    margin: 0;
    line-height: 26px;
    font-weight: 500;
  }

  .sidebar__comments-text-box p span {
    color: var(--brote-base);
  }

  .sidebar__comments-text-box h5 {
    font-size: 15px;
    margin: 0;
    line-height: 26px;
    color: var(--brote-gray);
  }

  /*--------------------------------------------------------------
# Blog Details
--------------------------------------------------------------*/
  .blog-details {
    position: relative;
    display: block;
    padding: 120px 0 170px;
  }

  .blog-details__left {
    position: relative;
    display: block;
  }

  .blog-details__img {
    position: relative;
    display: block;
  }

  .blog-details__img img {
    width: 100%;
    border-radius: 10px;
  }

  .blog-details__content {
    position: relative;
    display: block;
    margin-top: 22px;
  }

  .blog-details__meta {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .blog-details__meta li+li {
    margin-left: 18px;
  }

  .blog-details__meta li a {
    font-size: 14px;
    color: var(--brote-gray);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .blog-details__meta li a:hover {
    color: var(--brote-primary);
  }

  .blog-details__meta li a i {
    color: var(--brote-primary);
  }

  .blog-details__title {
    font-size: 34px;
    line-height: 44px;
    margin-bottom: 12px;
    margin-top: 2px;
    font-weight: 700;
  }

  .blog-details__text-1 {
    font-size: 16px;
    line-height: 30px;
    margin: 0;
  }

  .blog-details__text-2 {
    font-size: 16px;
    line-height: 30px;
    margin: 0;
    padding-top: 31px;
  }

  .blog-details__bottom {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: 30px 0 30px;
    margin-top: 54px;
    border-top: 1px solid #e4e5ea;
  }

  .blog-details__bottom p {
    margin: 0;
  }

  .blog-details__tags span {
    color: var(--brote-base);
    font-size: 20px;
    margin-right: 15px;
    font-weight: 700;
  }

  .blog-details__tags a {
    position: relative;
    color: var(--brote-white);
    font-size: 12px;
    background-color: var(--brote-base);
    display: inline-block;
    padding: 6px 29px 4px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    border-radius: 20px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .blog-details__tags a:hover {
    background-color: var(--brote-primary);
    color: var(--brote-white);
  }

  .blog-details__tags a+a {
    margin-left: 6px;
  }

  .blog-details__social-list {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .blog-details__social-list a {
    position: relative;
    height: 40px;
    width: 40px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center;
    color: var(--brote-gray);
    font-size: 15px;
    background-color: #eef0f6;
    border-radius: 50%;
    overflow: hidden;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    z-index: 1;
  }

  .blog-details__social-list a:hover {
    color: var(--brote-white);
  }

  .blog-details__social-list a:after {
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    right: 0;
    height: 100%;
    background-color: var(--brote-base);
    -webkit-transition-delay: .1s;
    transition-delay: .1s;
    -webkit-transition-timing-function: ease-in-out;
    transition-timing-function: ease-in-out;
    -webkit-transition-duration: .4s;
    transition-duration: .4s;
    -webkit-transition-property: all;
    transition-property: all;
    opacity: 1;
    -webkit-transform-origin: top;
    transform-origin: top;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-transform: scaleY(0);
    transform: scaleY(0);
    z-index: -1;
  }

  .blog-details__social-list a:hover:after {
    opacity: 1;
    -webkit-transform: scaleY(1);
    transform: scaleY(1);
  }

  .blog-details__social-list a+a {
    margin-left: 10px;
  }

  .blgo-details__pagenation-box {
    position: relative;
    display: block;
    overflow: hidden;
    margin-bottom: 53px;
  }

  .blog-details__pagenation {
    position: relative;
    display: block;
  }

  .blog-details__pagenation li {
    position: relative;
    float: left;
    font-size: 20px;
    color: var(--brote-gray);
    font-weight: 700;
    background-color: #eef0f6;
    line-height: 34px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    max-width: 100%;
    width: 100%;
    padding-left: 60px;
    padding-right: 60px;
    padding-top: 50px;
    padding-bottom: 56px;
    border-radius: 10px;
  }

  @media (min-width: 1200px) {
    .blog-details__pagenation li {
      max-width: 370px;
    }
  }

  .blog-details__pagenation li+li {
    margin-left: 30px;
  }

  .blog-details__pagenation li:hover {
    background-color: var(--brote-base);
    color: var(--brote-white);
  }

  /*--------------------------------------------------------------
## Comments
--------------------------------------------------------------*/
  .comment-one__title,
  .comment-form__title {
    margin: 0;
    color: var(--brote-base);
    font-size: 30px;
    margin-bottom: 52px;
    font-weight: 700;
  }

  .comment-one__single {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    border-bottom: 1px solid #e4e5ea;
    padding-bottom: 60px;
    margin-bottom: 60px;
  }

  .comment-one__content {
    position: relative;
    margin-left: 45px;
  }

  .comment-one__content h3 {
    margin: 0;
    font-size: 20px;
    color: var(--brote-base);
    margin-bottom: 26px;
    font-weight: 700;
  }

  .comment-one__content p {
    font-size: 16px;
    line-height: 30px;
    margin: 0;
  }

  .comment-one__btn {
    padding: 5px 30px;
    margin-top: 20px;
    background-color: var(--brote-primary);
    font-size: 12px;
  }

  @media (min-width: 768px) {
    .comment-one__btn {
      position: absolute;
      top: 0;
      right: 0;
      margin-top: 0;
    }
  }

  .comment-one__btn:hover {
    background-color: var(--brote-base);
  }

  .comment-one__image {
    position: relative;
    display: block;
    border-radius: 50%;
  }

  .comment-one__image img {
    border-radius: 50%;
  }

  .comment-form .comment-form__title {
    margin-top: -7px;
  }

  .comment-one__form .row {
    --bs-gutter-x: 20px;
  }

  .comment-form__input-box {
    position: relative;
    display: block;
    margin-bottom: 20px;
  }

  .comment-form__input-box input[type="text"],
  .comment-form__input-box input[type="email"] {
    height: 60px;
    width: 100%;
    border: none;
    background-color: #eef0f6;
    padding-left: 30px;
    padding-right: 30px;
    outline: none;
    font-size: 14px;
    color: var(--brote-gray);
    display: block;
    border-radius: 10px;
  }

  .comment-form__input-box textarea {
    font-size: 14px;
    color: var(--brote-gray);
    height: 190px;
    width: 100%;
    background-color: #eef0f6;
    padding: 15px 30px 30px;
    border: none;
    border-radius: 10px;
    outline: none;
    margin-bottom: 0px;
  }

  .comment-form__btn {
    border: none;
  }

  .comment-form__input-box.text-message-box {
    height: 190px;
  }

  /*--------------------------------------------------------------
# Services Page 1
--------------------------------------------------------------*/
  .services-page-1 {
    position: relative;
    display: block;
    padding: 120px 0 140px;
  }

  .services-page-1 .services-two__single {
    margin-bottom: 30px;
  }

  /*--------------------------------------------------------------
# Services Page 2
--------------------------------------------------------------*/
  .services-page-2 {
    position: relative;
    display: block;
    padding: 120px 0 90px;
  }

  /*--------------------------------------------------------------
# Testimonial Two
--------------------------------------------------------------*/
  .testimonial-two {
    position: relative;
    display: block;
    background-color: #eef0f6;
    padding: 120px 0 312px;
    overflow: hidden;
    z-index: 1;
  }

  .testimonial-two-shape-1 {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-size: cover;
    background-repeat: repeat;
    background-position: center;
    opacity: .20;
    z-index: -1;
  }

  .testimonial-two-bubble {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 1497px;
    height: 746px;
    background-size: cover;
    background-position: center center;
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    background-repeat: no-repeat;
    z-index: -1;
  }

  .testimonial-two-star-1 {
    position: absolute;
    top: -103px;
    left: 288px;
    z-index: -1;
  }

  .testimonial-two-star-1 img {
    width: auto;
  }

  .testimonial-two-star-2 {
    position: absolute;
    top: 145px;
    left: 55px;
    z-index: -1;
  }

  .testimonial-two-star-2 img {
    width: auto;
  }

  .testimonial-two-star-3 {
    position: absolute;
    bottom: 220px;
    left: 225px;
    z-index: -1;
  }

  .testimonial-two-star-3 img {
    width: auto;
  }

  .testimonial-two-star-4 {
    position: absolute;
    top: 60px;
    right: 435px;
    z-index: -1;
  }

  .testimonial-two-star-4 img {
    width: auto;
  }

  .testimonial-two-star-5 {
    position: absolute;
    bottom: 345px;
    right: 120px;
    z-index: -1;
  }

  .testimonial-two-star-5 img {
    width: auto;
  }

  .testimonial-two__container {
    position: relative;
    display: block;
    max-width: 1590px;
    width: 100%;
    margin: 0 auto;
    padding: 0 15px;
  }

  /*--------------------------------------------------------------
# FAQ Two
--------------------------------------------------------------*/
  .faq-two {
    padding-bottom: 277px;
  }

  .faq-two .faq-one-bg {
    background-position: right center;
  }

  /*--------------------------------------------------------------
# Services Details
--------------------------------------------------------------*/
  .service-details {
    position: relative;
    display: block;
    padding: 120px 0 170px;
  }

  .service-details__left {
    position: relative;
    display: block;
  }

  .service-details__category {
    position: relative;
    display: block;
    background-color: var(--brote-white);
    border: 1px solid #e4e5ea;
    border-radius: 10px;
  }

  .service-details__category-title {
    font-size: 20px;
    color: var(--brote-base);
    line-height: 20px;
    display: block;
    background-color: #e4e5ea;
    padding: 20px 50px 20px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }

  .service-details__category-list {
    position: relative;
    display: block;
    padding-left: 39px;
    padding-right: 39px;
    padding-top: 22px;
    padding-bottom: 22px;
  }

  .service-details__category-list li {
    position: relative;
    display: block;
  }

  .service-details__category-list li a {
    color: var(--brote-gray);
    font-size: 18px;
    position: relative;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    display: block;
    background: none;
    padding: 10px 20px 10px;
    font-weight: 500;
    border-radius: 10px;
    z-index: 1;
  }

  .service-details__category-list li:hover a {
    color: var(--brote-white);
  }

  .service-details__category-list li.active a {
    color: var(--brote-white);
  }

  .service-details__category-list li a:after {
    position: absolute;
    bottom: -1px;
    top: -1px;
    left: 0;
    right: -22px;
    content: "";
    background-color: var(--brote-base);
    border-radius: 10px;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    z-index: -1;
  }

  .service-details__category-list li:hover a:after {
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
  }

  .service-details__category-list li.active a:after {
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
  }

  .service-details__category-list li a:before {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    content: "";
    height: 1px;
    background-color: #e4e5ea;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    z-index: -1;
  }

  .service-details__category-list li:hover a:before {
    opacity: 0;
    visibility: hidden;
  }

  .service-details__category-list li.active a:before {
    opacity: 0;
    visibility: hidden;
  }

  .service-details__category-list li:last-child a:before {
    display: none;
  }

  .service-details__category-list li a span {
    position: absolute;
    top: 50%;
    right: 7px;
    -webkit-transform: translateY(-50%) scale(0);
    transform: translateY(-50%) scale(0);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    color: var(--brote-gray);
    text-align: center;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    font-size: 15px;
  }

  .service-details__category-list li a:hover span {
    color: var(--brote-white);
    -webkit-transform: translateY(-50%) scale(1);
    transform: translateY(-50%) scale(1);
  }

  .service-details__category-list li.active a span {
    -webkit-transform: translateY(-50%) scale(1);
    transform: translateY(-50%) scale(1);
    color: var(--brote-white);
  }

  .service-details__need-help {
    position: relative;
    display: block;
    padding: 50px 50px 50px;
    margin-top: 30px;
    margin-bottom: 30px;
    text-align: center;
    z-index: 1;
    background-color: var(--brote-base);
    border-radius: 30px;
  }

  .service-details__need-help-bg {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-color: var(--brote-base);
    opacity: 0.05;
    border-radius: 30px;
    z-index: -1;
  }

  .service-details__need-help-icon {
    height: 85px;
    width: 85px;
    background-color: var(--brote-primary);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border-radius: 50%;
    margin: 0 auto 29px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .service-details__need-help-icon:hover {
    background-color: var(--brote-white);
  }

  .service-details__need-help-icon span {
    font-size: 30px;
    color: var(--brote-white);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .service-details__need-help-icon:hover span {
    color: var(--brote-base);
  }

  .service-details__need-help-title {
    font-size: 26px;
    color: var(--brote-white);
    line-height: 32px;
    font-weight: 700;
  }

  .service-details__need-help-contact {
    position: relative;
    display: block;
    margin-top: 29px;
  }

  .service-details__need-help-contact p {
    font-size: 16px;
    color: #b1c2f5;
    margin: 0;
    line-height: 24px;
  }

  .service-details__need-help-contact a {
    font-size: 18px;
    color: var(--brote-white);
    font-weight: 700;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .service-details__need-help-contact a:hover {
    color: var(--brote-primary);
  }

  .service-details__download {
    position: relative;
    display: block;
    margin-top: 30px;
  }

  .service-details__btn {
    width: 100%;
    background-color: var(--brote-primary);
  }

  .service-details__btn:hover {
    background-color: var(--brote-base);
  }

  .service-details__btn i {
    background-color: var(--brote-base);
    margin-left: 73px;
  }

  .service-details__btn:hover i {
    background-color: var(--brote-primary);
    color: var(--brote-white);
  }

  .service-details__right {
    position: relative;
    display: block;
  }

  .service-details__img {
    position: relative;
    display: block;
    border-radius: 10px;
  }

  .service-details__img img {
    width: 100%;
    border-radius: 10px;
  }

  .service-details__content {
    position: relative;
    display: block;
    margin-top: 30px;
    margin-bottom: 44px;
  }

  .service-details__content-title {
    font-size: 40px;
    font-weight: 700;
    line-height: 50px;
    margin-bottom: 10px;
  }

  .service-details__text-2 {
    font-size: 20px;
    line-height: 30px;
    padding-top: 28px;
    padding-bottom: 33px;
    color: var(--brote-base);
  }

  .service-details__points-box {
    position: relative;
    display: block;
    border-top: 1px solid #e4e5ea;
    border-bottom: 1px solid #e4e5ea;
    padding-top: 38px;
    padding-bottom: 31px;
  }

  .service-details__points {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .service-details__points li {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }

  .service-details__points li+li {
    margin-left: 55px;
  }

  .service-details__points-icon span {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    font-size: 63px;
    color: var(--brote-primary);
    -webkit-transition: all 500ms linear;
    transition: all 500ms linear;
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
    -webkit-transform: scale(1);
    transform: scale(1);
  }

  .service-details__points li:hover .service-details__points-icon span {
    -webkit-transform: scale(0.9);
    transform: scale(0.9);
  }

  .service-details__points-content {
    margin-left: 30px;
    margin-top: -7px;
  }

  .service-details__points-content p {
    font-size: 20px;
    color: var(--brote-base);
    font-weight: 700;
    line-height: 32px;
  }

  .service-details__benefits {
    position: relative;
    display: block;
    margin-bottom: 50px;
    margin-top: 50px;
  }

  .service-details__benefits-img {
    position: relative;
    display: block;
    border-radius: 10px;
  }

  .service-details__benefits-img img {
    width: 100%;
    border-radius: 10px;
  }

  .service-details__benefits-right {
    position: relative;
    display: block;
    margin-top: -6px;
  }

  .service-details__benefits-title {
    font-size: 24px;
    font-weight: 700;
    line-height: 30px;
  }

  .service-betails__benefits-text-1 {
    font-size: 18px;
    color: var(--brote-gray);
    font-weight: 500;
    line-height: 30px;
    margin: 0;
    padding-top: 25px;
    padding-bottom: 31px;
  }

  .service-details__benefits-points {
    position: relative;
    display: block;
  }

  .service-details__benefits-points li {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .service-details__benefits-points li+li {
    margin-top: 3px;
  }

  .service-details__benefits-points li .icon {
    color: var(--brote-primary);
    font-size: 9px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    position: relative;
    height: 16px;
    width: 16px;
    border: 1px solid var(--brote-primary);
    border-radius: 50%;
  }

  .service-details__benefits-points li .icon i {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    left: 1px;
  }

  .service-details__benefits-points li .text {
    margin-left: 15px;
  }

  .service-details__benefits-points li .text p {
    font-size: 16px;
    color: var(--brote-base);
    font-weight: 500;
    line-height: 30px;
  }

  /*--------------------------------------------------------------
# Team Page
--------------------------------------------------------------*/
  .team-page {
    position: relative;
    display: block;
    padding: 120px 0 139px;
  }

  .team-page .team-one__single {
    margin-bottom: 51px;
  }

  .team-page .team-one__title-box {
    padding-right: 30px;
    padding-top: 22px;
    padding-bottom: 48px;
    margin-left: 20px;
    margin-top: -100px;
  }

  .team-page .team-one__sub-title-box {
    padding: 17px 30px;
    bottom: -21px;
  }

  .team-page .team-one__sub-title-box:before {
    top: -20px;
    left: 0;
    border-top: 20px solid transparent;
    border-right: 20px solid
      <?php echo $secondary_color; ?>
    ;
    border-bottom: 0px solid transparent;
  }

  .team-page .team-one__sub-title-box:after {
    right: -20px;
    border-left: 20px solid
      <?php echo $secondary_color; ?>
    ;
    border-bottom: 21px solid transparent;
  }

  .team-page .team-one__social {
    position: absolute;
    right: 30px;
    bottom: 100px;
  }

  .team-page .team-one__social-two {
    right: 30px;
  }

  /*--------------------------------------------------------------
# Team Page Carousel
--------------------------------------------------------------*/
  .team-page-carousel {
    position: relative;
    display: block;
    padding: 120px 0 130px;
  }

  .team-page-carousel-box.owl-carousel .owl-stage-outer {
    overflow: visible;
  }

  .team-page-carousel-box.owl-carousel .owl-stage-outer {
    overflow: visible;
  }

  .team-page-carousel-box.owl-carousel .owl-item {
    opacity: 0;
    visibility: hidden;
    -webkit-transition: opacity 500ms ease, visibility 500ms ease;
    transition: opacity 500ms ease, visibility 500ms ease;
  }

  .team-page-carousel-box.owl-carousel .owl-item.active {
    opacity: 1;
    visibility: visible;
  }

  .team-page-carousel-box.owl-carousel .owl-dots .owl-dot {
    position: relative;
    display: inline-block;
    width: 13px;
    height: 13px;
    border-radius: 50%;
    background-color: rgba(var(--brote-base-rgb), 0.3);
    margin: 0px 5px;
    padding: 0px;
    -webkit-transition: all 100ms linear;
    transition: all 100ms linear;
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
  }

  .team-page-carousel-box.owl-carousel .owl-dot.active {
    background-color: rgba(var(--brote-primary-rgb), 1);
  }

  .team-page-carousel-box.owl-carousel .owl-dot:focus {
    outline: none;
  }

  .team-page-carousel-box.owl-carousel .owl-dots .owl-dot span {
    display: none;
  }

  /*--------------------------------------------------------------
# Team Details
--------------------------------------------------------------*/
  .team-details {
    position: relative;
    display: block;
  }

  .team-details-shape-1 {
    position: absolute;
    bottom: -270px;
    right: 0;
    opacity: .50;
    z-index: 2;
  }

  .team-details-shape-1 img {
    width: auto;
  }

  .team-details__top {
    position: relative;
    display: block;
    padding: 120px 0 120px;
  }

  .team-details__top-left {
    position: relative;
    display: block;
    margin-right: 20px;
  }

  .team-details__top-img {
    position: relative;
    display: block;
    border-radius: 30px;
  }

  .team-details__top-img img {
    width: 100%;
    border-radius: 30px;
  }

  .team-details__big-text {
    font-size: 80px;
    line-height: 80px;
    text-transform: uppercase;
    color: #eef0f6;
    letter-spacing: 0.35em;
    font-weight: 400;
    position: absolute;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    top: 209px;
    left: -325px;
  }

  .team-details__top-right {
    position: relative;
    display: block;
    margin-left: 70px;
  }

  .team-details__top-content {
    position: relative;
    display: block;
    margin-top: -11px;
  }

  .team-details__top-name {
    font-size: 40px;
    font-weight: 700;
    line-height: 50px;
    margin-bottom: 3px;
  }

  .team-details__top-title {
    font-size: 16px;
    color: var(--brote-gray);
  }

  .team-details__social {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-top: 20px;
    margin-bottom: 28px;
  }

  .team-details__social a {
    position: relative;
    height: 40px;
    width: 40px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center;
    background-color: #eef0f6;
    color: var(--brote-gray);
    font-size: 15px;
    border-radius: 50%;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .team-details__social a:hover {
    background-color: var(--brote-base);
    color: var(--brote-white);
  }

  .team-details__social a+a {
    margin-left: 10px;
  }

  .team-details__top-text-1 {
    font-size: 30px;
    color: var(--brote-primary);
    line-height: 45px;
    font-weight: 400;
  }

  .team-details__top-text-2 {
    font-size: 18px;
    line-height: 34px;
    padding-top: 23px;
    padding-bottom: 35px;
    font-weight: 400;
  }

  .team-details__top-text-3 {
    font-size: 18px;
    line-height: 34px;
    font-weight: 400;
  }

  .team-details__bottom {
    position: relative;
    display: block;
    border-top: 1px solid #e4e5ea;
    padding-top: 110px;
    padding-bottom: 120px;
  }

  .team-details__bottom-left {
    position: relative;
    display: block;
    margin-right: 70px;
  }

  .team-details__bottom-left-title {
    font-size: 36px;
    font-weight: 700;
    line-height: 46px;
  }

  .team-details__bottom-left-text {
    font-size: 18px;
    line-height: 34px;
    padding-top: 30px;
    font-weight: 400;
  }

  .team-details__bottom-right {
    position: relative;
    display: block;
    margin-left: 70px;
    margin-top: 1px;
  }

  .team-details__progress {
    position: relative;
    display: block;
    width: 100%;
  }

  .team-details__progress-single {
    position: relative;
    display: block;
  }

  .team-details__progress-title {
    font-size: 16px;
    font-weight: 700;
    line-height: 28px;
    color: var(--brote-base);
    margin-bottom: 6px;
  }

  .team-details__progress .bar {
    position: relative;
    width: 100%;
    height: 13px;
    background-color: #eef0f6;
    border-radius: 7px;
    margin-bottom: 22px;
  }

  .team-details__progress .bar-inner {
    position: relative;
    display: block;
    width: 0px;
    height: 13px;
    border-radius: 7px;
    background-color: var(--brote-primary);
    -webkit-transition: all 1500ms ease;
    transition: all 1500ms ease;
  }

  .team-details__progress .count-text {
    position: absolute;
    right: 0px;
    bottom: 21px;
    color: var(--brote-gray);
    line-height: 24px;
    font-size: 14px;
    text-align: center;
    font-weight: 500;
    opacity: 0;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .team-details__progress .bar-inner.counted .count-text {
    opacity: 1;
  }

  .team-details__progress .bar.marb-0 {
    margin-bottom: 0;
  }

  /*--------------------------------------------------------------
# Message One
--------------------------------------------------------------*/
  .message-one {
    position: relative;
    display: block;
    background-color: #eef0f6;
    padding: 120px 0 275px;
    overflow: hidden;
    z-index: 1;
  }

  .message-one-bg {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: .20;
    z-index: -1;
  }

  .message-one-bubble {
    position: absolute;
    top: 50%;
    left: 50%;
    height: 746px;
    width: 1497px;
    background-repeat: no-repeat;
    background-size: cover;
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    z-index: -1;
  }

  .message-one .container {
    max-width: 770px;
    width: 100%;
  }

  .message-one .comment-form__btn {
    margin: 20px auto 0;
    display: block;
  }

  .message-one .comment-form__input-box input[type="text"],
  .message-one .comment-form__input-box input[type="email"] {
    background-color: var(--brote-white);
    font-weight: 500;
  }

  .message-one .comment-form__input-box.text-message-box {
    height: 190px;
  }

  .message-one .comment-form__input-box textarea {
    background-color: var(--brote-white);
    height: 190px;
    font-weight: 500;
  }

  /*--------------------------------------------------------------
# Testimonial Page
--------------------------------------------------------------*/
  .testimonial-page {
    position: relative;
    display: block;
    padding: 110px 0 141px;
  }

  .testimonial-page .container {
    max-width: 1060px;
  }

  .testimonial-page .testimonial-one__single {
    margin-bottom: 65px;
  }

  /*--------------------------------------------------------------
# Testimonial Carousel Page
--------------------------------------------------------------*/
  .testimonial-carousel-page {
    position: relative;
    display: block;
    padding: 120px 0 232px;
  }

  .testimonial-carousel-page__carousel.owl-carousel .owl-dots {
    position: absolute;
    bottom: -63px;
    left: 0px;
    right: 0;
    text-align: center;
    margin: 0 !important;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .testimonial-carousel-page__carousel.owl-carousel .owl-dots .owl-dot {
    position: relative;
    display: inline-block;
    width: 13px;
    height: 13px;
    border-radius: 50%;
    background-color: rgba(var(--brote-base-rgb), 0.3);
    margin: 0px 5px;
    padding: 0px;
    -webkit-transition: all 100ms linear;
    transition: all 100ms linear;
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
  }

  .testimonial-carousel-page__carousel.owl-carousel .owl-dot.active {
    background-color: rgba(var(--brote-primary-rgb), 1);
  }

  .testimonial-carousel-page__carousel.owl-carousel .owl-dot:focus {
    outline: none;
  }

  .testimonial-carousel-page__carousel.owl-carousel .owl-dots .owl-dot span {
    display: none;
  }

  /*--------------------------------------------------------------
# Gallery Page
--------------------------------------------------------------*/
  .gallery-page {
    position: relative;
    display: block;
    padding: 120px 0 140px;
  }

  .gallery-page__single {
    position: relative;
    display: block;
    margin-bottom: 30px;
  }

  .gallery-page__img {
    position: relative;
    display: block;
    border-radius: 10px;
    overflow: hidden;
    z-index: 1;
  }

  .gallery-page__img:before {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    content: "";
    background-color: rgba(var(--brote-primary-rgb), 0.9);
    -webkit-transition: all 700ms ease;
    transition: all 700ms ease;
    -webkit-transform: translateY(-102%);
    transform: translateY(-102%);
    border-radius: 10px;
    z-index: 1;
  }

  .gallery-page__single:hover .gallery-page__img:before {
    -webkit-transform: translateY(0%);
    transform: translateY(0%);
  }

  .gallery-page__img img {
    width: 100%;
    border-radius: 10px;
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: -webkit-transform 500ms ease;
    transition: -webkit-transform 500ms ease;
    transition: transform 500ms ease;
    transition: transform 500ms ease, -webkit-transform 500ms ease;
  }

  .gallery-page__single:hover .gallery-page__img img {
    -webkit-transform: scale(1.05);
    transform: scale(1.05);
  }

  .gallery-page__icon {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    z-index: 2;
  }

  .gallery-page__icon a {
    height: 80px;
    width: 80px;
    background-color: var(--brote-base);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border-radius: 50%;
    font-size: 22px;
    color: var(--brote-white);
    -webkit-transform: translateY(100px);
    transform: translateY(100px);
    opacity: 0;
    -webkit-transition: all 700ms ease;
    transition: all 700ms ease;
    z-index: 2;
  }

  .gallery-page__single:hover .gallery-page__icon a {
    -webkit-transform: translateY(0px);
    transform: translateY(0px);
    opacity: 1;
  }

  .gallery-page__icon a:hover {
    background-color: var(--brote-white);
    color: var(--brote-base);
  }

  /*--------------------------------------------------------------
# Gallery Carousel Page
--------------------------------------------------------------*/
  .gallery-carousel-page {
    padding-bottom: 200px;
  }

  .gallery-carousel-page__carousel.owl-carousel .owl-dots {
    position: absolute;
    bottom: -30px;
    left: 0px;
    right: 0;
    text-align: center;
    margin: 0 !important;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .gallery-carousel-page__carousel.owl-carousel .owl-dots .owl-dot {
    position: relative;
    display: inline-block;
    width: 13px;
    height: 13px;
    border-radius: 50%;
    background-color: rgba(var(--brote-base-rgb), 0.3);
    margin: 0px 5px;
    padding: 0px;
    -webkit-transition: all 100ms linear;
    transition: all 100ms linear;
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
  }

  .gallery-carousel-page__carousel.owl-carousel .owl-dot.active {
    background-color: rgba(var(--brote-primary-rgb), 1);
  }

  .gallery-carousel-page__carousel.owl-carousel .owl-dot:focus {
    outline: none;
  }

  .gallery-carousel-page__carousel.owl-carousel .owl-dots .owl-dot span {
    display: none;
  }

  /*--------------------------------------------------------------
# FAq Page
--------------------------------------------------------------*/
  .faq-page {
    position: relative;
    display: block;
    padding: 120px 0 120px;
  }

  .faq-page__left {
    position: relative;
    display: block;
  }

  .faq-page__right {
    position: relative;
    display: block;
  }

  .faq-page__right .service-details__need-help {
    margin-top: 0px;
  }

  /*--------------------------------------------------------------
## Error Page
--------------------------------------------------------------*/
  .error-page {
    position: relative;
    display: block;
    padding: 81px 0 170px;
  }

  .error-page__inner {
    position: relative;
    display: block;
    margin-right: 33px;
  }

  .error-page__title-box {
    position: relative;
    display: block;
    margin-bottom: 10px;
  }

  .error-page__title {
    position: relative;
    display: inline-block;
    font-size: 280px;
    line-height: 280px;
    font-weight: 400;
    margin-bottom: 0;
    color: var(--brote-primary);
  }

  .error-page__tagline {
    font-size: 40px;
    line-height: 49px;
    margin-bottom: 12px;
    font-weight: 400;
    color: var(--brote-base);
  }

  .error-page__text {
    font-size: 20px;
  }

  .error-page__form {
    position: relative;
    display: block;
    margin: 56px 0px 20px;
  }

  .error-page__form-input {
    position: relative;
    display: block;
    max-width: 510px;
    width: 100%;
    margin: 0 0 0;
  }

  .error-page__form input[type="search"] {
    height: 60px;
    width: 100%;
    border: none;
    outline: none;
    background-color: #eef0f6;
    font-size: 16px;
    color: var(--brote-gray);
    font-weight: 500;
    padding-left: 50px;
    padding-right: 75px;
    border-radius: 30px;
  }

  .error-page__form button[type="submit"] {
    background-color: transparent;
    color: var(--brote-gray);
    font-size: 22px;
    position: absolute;
    top: 0;
    right: 0px;
    bottom: 0;
    width: 72px;
    outline: none;
    border: none;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 0;
  }

  .error-page__img {
    position: relative;
    display: block;
    margin-left: -47px;
    margin-right: -157px;
    margin-top: -17px;
  }

  .error-page__img img {
    width: 100%;
  }

  /*--------------------------------------------------------------
# Portfolio Page
--------------------------------------------------------------*/
  .portfolio-page {
    position: relative;
    display: block;
    padding: 120px 0 130px;
  }

  .portfolio-page .project-one__single {
    margin-bottom: 30px;
  }

  /*--------------------------------------------------------------
# Portfolio Carousel Page
--------------------------------------------------------------*/
  .portfolio-carousel-page {
    position: relative;
    display: block;
    padding: 120px 0 230px;
  }

  .portfolio-carousel-page__carousel.owl-carousel .owl-dots {
    position: absolute;
    bottom: -60px;
    left: 0px;
    right: 0;
    text-align: center;
    margin: 0 !important;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .portfolio-carousel-page__carousel.owl-carousel .owl-dots .owl-dot {
    position: relative;
    display: inline-block;
    width: 13px;
    height: 13px;
    border-radius: 50%;
    background-color: rgba(var(--brote-base-rgb), 0.3);
    margin: 0px 5px;
    padding: 0px;
    -webkit-transition: all 100ms linear;
    transition: all 100ms linear;
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
  }

  .portfolio-carousel-page__carousel.owl-carousel .owl-dot.active {
    background-color: rgba(var(--brote-primary-rgb), 1);
  }

  .portfolio-carousel-page__carousel.owl-carousel .owl-dot:focus {
    outline: none;
  }

  .portfolio-carousel-page__carousel.owl-carousel .owl-dots .owl-dot span {
    display: none;
  }

  /*--------------------------------------------------------------
# Portfolio Details
--------------------------------------------------------------*/
  .portfolio-details {
    position: relative;
    display: block;
    padding: 120px 0 120px;
  }

  .portfolio-details__img-box {
    position: relative;
    display: block;
  }

  .portfolio-details__img {
    position: relative;
    display: block;
  }

  .portfolio-details__img img {
    width: 100%;
    border-radius: 10px;
  }

  .portfolio-details__content-one {
    position: relative;
    display: block;
    margin-top: 29px;
  }

  .portfolio-details__content-one h3 {
    font-size: 40px;
    font-weight: 700;
    line-height: 50px;
    margin-bottom: 20px;
  }

  .portfolio-details__content-two {
    position: relative;
    display: block;
    margin-top: 36px;
  }

  .portfolio-details__content-two h4 {
    font-size: 26px;
    font-weight: 700;
    line-height: 36px;
    margin-bottom: 22px;
  }

  .portfolio-details__points {
    position: relative;
    display: block;
    margin-top: 45px;
    margin-bottom: 31px;
  }

  .portfolio-details__points-img {
    position: relative;
    display: block;
  }

  .portfolio-details__points-img img {
    width: 100%;
    border-radius: 10px;
  }

  .portfolio-details__details-box {
    position: absolute;
    bottom: -30px;
    right: 30px;
    border-radius: 10px;
    background-color: white;
    -webkit-box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.07);
    box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.07);
    padding: 41px 50px 50px;
    max-width: 300px;
    width: 100%;
  }

  @media (max-width: 991px) {
    .portfolio-details__details-box {
      position: relative;
      bottom: auto;
      right: auto;
      max-width: 100%;
      padding: 30px;
      margin-top: 40px;
    }
  }

  .portfolio-details__details-list {
    position: relative;
    display: block;
  }

  @media (max-width: 991px) {
    .portfolio-details__details-list {
      display: flex;
      flex-wrap: wrap;
      margin-left: -15px;
      margin-bottom: -20px;
      margin-right: -15px;
    }
  }

  @media (max-width: 480px) {
    .portfolio-details__details-list {
      margin-bottom: 0;
    }
  }

  .portfolio-details__details-list li {
    position: relative;
    display: block;
    padding-bottom: 10px;
    margin-bottom: 10px;
    border-bottom: 1px solid #e4e5ea;
  }

  @media (max-width: 991px) {
    .portfolio-details__details-list li {
      padding-left: 15px;
      padding-right: 15px;
      border-bottom: 0px solid #e4e5ea;
      border-right: 1px solid #e4e5ea;
      padding-bottom: 0;
      margin-bottom: 20px;
      flex: 0 0 50%;
      max-width: 50%;
    }

    .portfolio-details__details-list li:nth-child(2n) {
      border-right: 0;
    }
  }

  @media (max-width: 480px) {
    .portfolio-details__details-list li {
      flex: 0 0 100%;
      max-width: 100%;
      border-bottom: 1px solid #e4e5ea;
      border-right: 0px solid #e4e5ea;
      margin-bottom: 20px;
      padding-bottom: 20px;
    }
  }

  .portfolio-details__details-list li:last-child {
    border-bottom: 0;
    margin-bottom: 0;
    padding-bottom: 0;
    border-right: 0;
  }

  .portfolio-details__name {
    font-size: 16px;
    font-weight: 700;
    line-height: 30px;
  }

  .portfolio-details__social {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding-top: 10px;
  }

  .portfolio-details__social a {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    height: 40px;
    width: 40px;
    background-color: #eef0f6;
    border-radius: 50%;
    color: var(--brote-gray);
    font-size: 15px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .portfolio-details__social a:hover {
    background-color: var(--brote-base);
    color: var(--brote-white);
  }

  .portfolio-details__social a+a {
    margin-left: 10px;
  }

  .portfolio-details__points-box {
    position: relative;
    display: block;
    margin-top: 12px;
    margin-left: 30px;
  }

  .portfolio-details__points-list {
    position: relative;
    display: block;
  }

  .portfolio-details__points-list li {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .portfolio-details__points-list li+li {
    margin-top: 7px;
  }

  .portfolio-details__points-list li .icon {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 16px;
    color: var(--brote-primary);
  }

  .portfolio-details__points-list li .text {
    margin-left: 15px;
  }

  .portfolio-details__points-list li .text p {
    font-size: 18px;
    color: var(--brote-base);
  }

  .portfolio-details__content-three {
    position: relative;
    display: block;
  }

  .portfolio-details__content-three h4 {
    font-size: 26px;
    font-weight: 700;
    line-height: 36px;
    margin-bottom: 22px;
  }

  .portfolio-details__pagination-box {
    position: relative;
    display: block;
    text-align: center;
    border-top: 1px solid #e4e5ea;
    border-bottom: 1px solid #e4e5ea;
    padding: 30px 0;
    margin-top: 55px;
  }

  .portfolio-details__pagination li {
    display: inline-block;
  }

  .portfolio-details__pagination li.next {
    float: left;
    position: relative;
  }

  .portfolio-details__pagination li a {
    font-size: 16px;
    color: var(--brote-base);
    font-weight: 500;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .portfolio-details__pagination li a:hover {
    color: var(--brote-gray);
  }

  .portfolio-details__pagination li.next i {
    position: relative;
    height: 50px;
    width: 50px;
    background-color: var(--brote-base);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border-radius: 50%;
    color: var(--brote-white);
    font-size: 15px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    margin-right: 20px;
    z-index: 1;
  }

  .portfolio-details__pagination li.previous {
    position: relative;
    float: right;
  }

  .portfolio-details__pagination li.previous i {
    position: relative;
    height: 50px;
    width: 50px;
    background-color: var(--brote-base);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border-radius: 50%;
    color: var(--brote-white);
    font-size: 15px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    margin-left: 20px;
    z-index: 1;
  }

  .portfolio-details__pagination li a:hover i {
    color: var(--brote-gray);
    background-color: #eef0f6;
  }

  /*--------------------------------------------------------------
# Similar Portfolio
--------------------------------------------------------------*/
  .similar-portfolio {
    position: relative;
    display: block;
    padding: 0 0 140px;
  }

  .similar-portfolio .project-one__single {
    margin-bottom: 30px;
  }

  /*--------------------------------------------------------------
# Contact Page One Details
--------------------------------------------------------------*/
  .contact-page-one-details {
    position: relative;
    display: block;
    padding: 120px 0 125px;
  }

  .contact-page-one-details__list {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
  }

  .contact-page-one-details__list li {
    position: relative;
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
    width: 100%;
    text-align: center;
    margin-bottom: 29px;
  }

  .contact-page-one-details__list li:before {
    position: absolute;
    top: 20px;
    bottom: 27px;
    left: 0;
    content: "";
    width: 1px;
    background-color: #eef0f6;
  }

  .contact-page-one-details__list li:first-child:before {
    display: none;
  }

  .contact-page-one-details__icon {
    position: relative;
    height: 110px;
    width: 110px;
    background-color: var(--brote-primary);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border-radius: 50%;
    margin: 0 auto 19px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .contact-page-one-details__icon .icon-location {
    font-size: 34px;
  }

  .contact-page-one-details__list li:hover .contact-page-one-details__icon {
    background-color: var(--brote-base);
  }

  .contact-page-one-details__icon span {
    position: relative;
    display: inline-block;
    font-size: 30px;
    color: var(--brote-white);
    -webkit-transition: all 500ms linear;
    transition: all 500ms linear;
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
    -webkit-transform: scale(1);
    transform: scale(1);
  }

  .contact-page-one-details__list li:hover .contact-page-one-details__icon span {
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
  }

  .contact-page-one-details__content-box {
    position: relative;
    display: block;
  }

  .contact-page-one-details__content {
    position: relative;
    display: block;
    line-height: 36px;
  }

  .contact-page-one-details__content a {
    font-size: 20px;
    color: var(--brote-gray);
    font-weight: 400;
    position: relative;
    display: block;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .contact-page-one-details__content a:hover {
    color: var(--brote-primary);
  }

  .contact-page-one-details__address {
    font-size: 20px;
    color: var(--brote-gray);
    font-weight: 400;
    line-height: 36px;
  }

  /*--------------------------------------------------------------
# Google Map Two
--------------------------------------------------------------*/
  .google-map--two {
    margin-top: -40px;
  }

  /*--------------------------------------------------------------
# Contact page  Two
--------------------------------------------------------------*/
  .contact-page-two {
    position: relative;
    display: block;
    padding: 120px 0 120px;
  }

  .contact-page-two__left {
    position: relative;
    display: block;
  }

  .contact-page-two__info {
    position: relative;
    display: block;
    margin-top: 40px;
  }

  .contact-page-two__info li {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .contact-page-two__info li+li {
    margin-top: 10px;
  }

  .contact-page-two__info li .icon {
    height: 70px;
    width: 70px;
    background-color: var(--brote-primary);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border-radius: 10px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .contact-page-two__info li:hover .icon {
    background-color: var(--brote-base);
  }

  .contact-page-two__info li .icon span {
    color: var(--brote-white);
    font-size: 30px;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .contact-page-two__info li:hover .icon span {
    color: var(--brote-white);
  }

  .contact-page-two__info li .text {
    margin-left: 20px;
  }

  .contact-page-two__info li .text p {
    line-height: 28px;
  }

  .contact-page-two__info li .text p a {
    font-size: 16px;
    color: var(--brote-gray);
    font-weight: 500;
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  .contact-page-two__info li:hover .text p a {
    color: var(--brote-primary);
  }

  .contact-page-two__info li .text h5 {
    font-size: 20px;
    color: var(--brote-base);
    font-weight: 700;
  }

  .contact-page-two__info li .text h5 a {
    color: var(--brote-base);
  }

  /*--------------------------------------------------------------
# Get To Know
--------------------------------------------------------------*/
  .get-to-know {
    position: relative;
    display: block;
    padding: 120px 0 120px;
  }

  .get-to-know-bubble {
    position: absolute;
    top: 90px;
    right: 165px;
  }

  .get-to-know-bubble img {
    width: auto;
  }

  .get-to-know__left {
    position: relative;
    display: block;
    margin-left: 22px;
    margin-right: 78px;
  }

  .get-to-know__img {
    position: relative;
    display: block;
    border-radius: 10px;
    z-index: 1;
  }

  .get-to-know__img:before {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 21px;
    right: 22px;
    content: "";
    background-color: var(--brote-primary);
    border-radius: 10px;
    z-index: -1;
    -webkit-transform: rotate(6deg);
    transform: rotate(6deg);
  }

  .get-to-know__img img {
    width: 100%;
    border-radius: 10px;
  }

  .get-to-know-shape-1 {
    position: absolute;
    left: 200px;
    top: -52px;
    border-radius: 50%;
    background-color: #eef0f6;
    width: 26px;
    height: 26px;
  }

  .get-to-know-shape-2 {
    position: absolute;
    left: -50px;
    bottom: 180px;
    border-radius: 50%;
    background-color: #1239ac;
    width: 26px;
    height: 26px;
  }

  .get-to-know__right {
    position: relative;
    display: block;
  }

  .get-to-know__right .section-title {
    margin-bottom: 27px;
  }

  .get-to-know__text {
    padding-bottom: 36px;
  }

  .get-to-know__points-box {
    position: relative;
    display: block;
    overflow: hidden;
    margin-bottom: 46px;
  }

  .get-to-know__points {
    position: relative;
    display: block;
    float: left;
  }

  .get-to-know__points li {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .get-to-know__points li+li {
    margin-top: 10px;
  }

  .get-to-know__points li .icon {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .get-to-know__points li .icon span {
    font-size: 15px;
    color: var(--brote-primary);
  }

  .get-to-know__points li .text {
    margin-left: 13px;
  }

  .get-to-know__points li .text p {
    font-size: 18px;
    color: var(--brote-base);
    font-weight: 700;
  }

  .get-to-know__points--two {
    margin-left: 75px;
  }

  /*--------------------------------------------------------------
# About Team Page
--------------------------------------------------------------*/
  .about-team-page {
    position: relative;
    display: block;
    padding-top: 120px;
    margin-top: 0;
  }

  .about-team-page .team-one__single {
    margin-bottom: 51px;
  }

  .about-team-page .team-one__title-box {
    padding-right: 30px;
    padding-top: 22px;
    padding-bottom: 48px;
    margin-left: 20px;
    margin-top: -100px;
  }

  .about-team-page .team-one__sub-title-box {
    padding: 17px 30px;
    bottom: -21px;
  }

  .about-team-page .team-one__sub-title-box:before {
    top: -20px;
    left: 0;
    border-top: 20px solid transparent;
    border-right: 20px solid
      <?php echo $secondary_color; ?>
    ;
    border-bottom: 0px solid transparent;
  }

  .about-team-page .team-one__sub-title-box:after {
    right: -20px;
    border-left: 20px solid
      <?php echo $secondary_color; ?>
    ;
    border-bottom: 21px solid transparent;
  }

  .about-team-page .team-one__social {
    position: absolute;
    right: 30px;
    bottom: 100px;
  }

  .about-team-page .team-one__social-two {
    right: 30px;
  }

  /*--------------------------------------------------------------
# Brand Three
--------------------------------------------------------------*/
  .brand-three {
    position: relative;
    display: block;
  }

  .brand-three .brand-one__inner {
    border-top: 0;
    padding: 60px 0 116px;
  }

  /*--------------------------------------------------------------
# Services Carousel Page
--------------------------------------------------------------*/
  .services-carousel-page {
    position: relative;
    display: block;
    padding: 120px 0 200px;
  }

  .services-carousel-page__carousel {
    position: relative;
    display: block;
  }

  .services-carousel-page__carousel.owl-carousel .owl-stage-outer {
    overflow: visible;
  }

  .blog-one__carousel.owl-carousel .owl-stage-outer {
    overflow: visible;
  }

  .services-carousel-page__carousel.owl-carousel .owl-item {
    opacity: 0;
    visibility: hidden;
    -webkit-transition: opacity 500ms ease, visibility 500ms ease;
    transition: opacity 500ms ease, visibility 500ms ease;
  }

  .services-carousel-page__carousel.owl-carousel .owl-item.active {
    opacity: 1;
    visibility: visible;
  }

  .services-carousel-page__carousel.owl-carousel .owl-dots {
    position: absolute;
    bottom: -30px;
    left: 0px;
    right: 0;
    text-align: center;
    margin: 0 !important;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .services-carousel-page__carousel.owl-carousel .owl-dots .owl-dot {
    position: relative;
    display: inline-block;
    width: 13px;
    height: 13px;
    border-radius: 50%;
    background-color: rgba(var(--brote-base-rgb), 0.3);
    margin: 0px 5px;
    padding: 0px;
    -webkit-transition: all 100ms linear;
    transition: all 100ms linear;
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
  }

  .services-carousel-page__carousel.owl-carousel .owl-dot.active {
    background-color: rgba(var(--brote-primary-rgb), 1);
  }

  .services-carousel-page__carousel.owl-carousel .owl-dot:focus {
    outline: none;
  }

  .services-carousel-page__carousel.owl-carousel .owl-dots .owl-dot span {
    display: none;
  }

  /*--------------------------------------------------------------
# Boxed Version
--------------------------------------------------------------*/
  body.boxed-wrapper {
    background-color: #eef0f6;
  }

  body.boxed-wrapper .main-slider .image-layer {
    background-size: cover;
  }

  body.boxed-wrapper .contact-one__call {
    right: 245px;
  }

  .boxed-wrapper .page-wrapper {
    max-width: 1530px;
    margin-left: auto;
    margin-right: auto;
    background-color: #fff;
    -webkit-box-shadow: 0px 0px 100px 0px rgba(0, 0, 0, 0.08);
    box-shadow: 0px 0px 100px 0px rgba(0, 0, 0, 0.08);
  }
</style>