<!DOCTYPE html>
<html>
<head>
    <title><?= $title; ?></title>
    <!-- viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style panel -->
    <meta name="theme-color" content="#fd1313">
    <meta name="msapplication-navbutton-color" content="#fd1313">
    <meta name="apple-mobile-web-app-status-bar-style" content="#fd1313">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- jq -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!-- tokeninput -->
    <script type="text/javascript" src="js/jquery.tokeninput.js"></script>
    <link rel="stylesheet" href="css/token-input.css" type="text/css" />
</head>
<body>
<!-- begin container_main  -->
<div class="container_main">
    <?= $content; ?>

    <!-- end footer -->
</div>
<!-- end container_main -->
<!-- begin popup_rgba  -->


<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>
<!-- ui slides -->
<!-- slid -->

<!-- Form Styler -->
<script src="js/jquery.formstyler.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.formstyler.css">
<!-- form styler -->
<script type="text/javascript">
    (function($) {
        $(function() {
            $('.check_style, .select_style').styler({
                fileBrowse: 'Выбрать',
            });
        })
    })(jQuery)
</script>

</body>
</html>