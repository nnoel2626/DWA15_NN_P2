<?php
error_reporting(E_ALL);         # Report Errors, Warnings, and Notices
ini_set('display_errors', 1);




If (isset($_POST['generate']))
{
  $post_alpha_upper = $_POST['alpha_upper'];
  $post_alpha = $_POST['alpha'];
  $post_numeric = $_POST['numeric'];
  $post_special = $_POST['special'];

  $alpha= "abcdefghijklmnopqrstuvwxyz"; //lowercase alpha string
  $alpha_upper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; // strtoupper — Make a uppercase alpha string
  $numeric = "0123456789";        // number (0-9) string
  $special = ".-+=_,!"; // special charactres stringhts


  $generated_alpha_upper = substr(str_shuffle($alpha_upper) ,0,$post_alpha_upper);
  $generated_alpha = substr(str_shuffle($alpha) ,0,$post_alpha);
  $generated_numeric = substr(str_shuffle ($numeric) ,0,$post_numeric);
  $generated_special = substr(str_shuffle($special) ,0,$post_special);

  $mixed = "$generated_alpha_upper$generated_alpha$generated_numeric$generated_special";

  $sum = $post_alpha_upper+$post_alpha+$post_numeric+$post_special;

  $generated_mixed = substr(str_shuffle($mixed), 0,$sum);
}


