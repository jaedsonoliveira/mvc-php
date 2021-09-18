<html>
    <head>
        <title>Meu site</title>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>/assets/css/style.css"/>
        <!--Colocar baseurl a url do projeto ex:http://localhost/projetosphp/mvc-php/ -->
    </head>
    <body>
        <h1>Esté é o top</h1>
        <hr>
        <?php $this->loadViewInTemplate($viewName); ?>
    </body>
</html>