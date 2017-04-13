<?php

/* base.html */
class __TwigTemplate_32a1933408ea15aa8db76bb615992589c44da4ba610c731febff603cd24978be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Homework-3</title>
    <!-- Bootstrap core CSS -->
    <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Custom styles for this template -->
    <link href=\"/starter-template.css\" rel=\"stylesheet\">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
";
        // line 22
        $this->displayBlock('menu', $context, $blocks);
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "<?php if (isset(\$_SESSION['login'])) {
        include_once 'app/views/admin_menu_view.php';
    } else {
        include_once 'app/views/menu_view.php';
}
?>
<div>
<?php
echo \$data[1]; // Вывод информации о возрасте юзера
?>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<script src=\"/js/main.js\"></script>
<script src=\"/js/bootstrap.min.js\"></script>
</body>
</html>






";
    }

    // line 22
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  78 => 22,  48 => 26,  46 => 24,  44 => 22,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html", "C:\\OpenServer\\domains\\homework666\\app\\views\\base.html");
    }
}
