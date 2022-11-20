<?php
if (!isset($header_description)) {
  $header_description = "";
}
if (!isset($header_title)) {
  $header_title = "";
}
else {
  $header_title = $header_title." - ";
}
?>
<html>
    <head>
      <link rel="icon" href="logo\emblem_cor.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, user-scalable=no">
        <?php echo '<meta name="description" content="Anime RYU je sajt na kom se mogu anime serije sa prevodom!
        Sajt Anime RYU prevodi anime serije na srpskom,hrvatskom,crnogorskom i ostalim jezicima zemalja Balkana!
        Mozemo se pohvaliti sa najmanjim brojem reklama! 
        '.$header_description.'">'; ?>
        <title><?php echo $header_title; ?>Anime RYU</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- fa fa icons -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/main_menu_style.css">
    </head>
    <body>
      <script src="js/functions.js"></script>
      <div class="container">