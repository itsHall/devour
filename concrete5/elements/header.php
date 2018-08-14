<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<!DOCTYPE html>

<html lang="<?php echo Localization::activeLanguage()?>">

<head>
   <!--Beginning of Head-->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
   <meta name="description" content="">
   <?php Loader::element('header_required'); ?>
   <link href="https://fonts.googleapis.com/css?family=Heebo:400,500|Roboto:700|Ubuntu:500" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="<?php echo $this->getThemePath(); ?>/css/devour.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/js/devour.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $this->getThemePath(); ?>/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $this->getThemePath(); ?>/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $this->getThemePath(); ?>/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $this->getThemePath(); ?>/favicons/manifest.json">
    <link rel="mask-icon" href="<?php echo $this->getThemePath(); ?>/favicons/safari-pinned-tab.svg" color="#97d339">
    <meta name="theme-color" content="#2b2b2b">
