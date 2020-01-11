<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Basic Slider</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="slider-container">
            <div class="slider-images">
            <img src="img/t3.jpg" id="lastClone">
            <img src="img/tree.jpg" alt="">
            <img src="img/t3.jpg" alt="">
                <img src="img/tree.jpg" id="firstClone">
               
            </div><!-- slider images -->
        </div><!-- slider container -->

        <button id="prev">Prev</button>
        <button id="next">Next</button>
        
        <script src="js/app.js" async defer></script>
    </body>
</html>