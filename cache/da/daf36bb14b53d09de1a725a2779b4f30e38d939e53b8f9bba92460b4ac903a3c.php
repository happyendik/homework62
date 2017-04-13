<?php

/* reg_view.html */
class __TwigTemplate_9a40f50dbffd38f02a4c8cbcd96be73b78fb9ca70cb1d90cfdcc5926013d2126 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "reg_view.html", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        // line 3
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Homework-6</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"/auth\">Авторизация</a></li>
                <li class=\"active\"><a href=\"/reg\">Регистрация</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "<div class=\"container\">
    <div class=\"form-container\">
        <form class=\"form-horizontal\" action=\"/reg/post\" method=\"post\">
            <div class=\"form-group\">
                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Логин</label>
                <div class=\"col-sm-10\">
                    <input name=\"login\" type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Логин\">
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Пароль</label>
                <div class=\"col-sm-10\">
                    <input name=\"password1\" type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Пароль\">
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"inputPassword4\" class=\"col-sm-2 control-label\">Пароль (Повтор)</label>
                <div class=\"col-sm-10\">
                    <input name=\"password2\" type=\"password\" class=\"form-control\" id=\"inputPassword4\" placeholder=\"Пароль\">
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Email</label>
                <div class=\"col-sm-10\">
                    <input name=\"email\" type=\"email\" class=\"form-control\" id=\"inputEmail4\" placeholder=\"Email\">
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"g-recaptcha\" data-sitekey=\"6LcQLhwUAAAAACNTsgbRxE43tBJTjby5HsTfyL3u\"></div>
            </div>
            <div class=\"form-group\">
                <div class=\"col-sm-offset-2 col-sm-10\">
                    <button type=\"submit\" class=\"btn btn-default\">Зарегистрироваться</button>
                    <br><br>
                    Зарегистрированы? <a href=\"/auth\">Авторизируйтесь</a>
                </div>
            </div>
        </form>
    </div>
    <script type=\"text/javascript\"
            src=\"https://www.google.com/recaptcha/api.js?hl=ru\">
    </script>
</div>
";
    }

    public function getTemplateName()
    {
        return "reg_view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 24,  55 => 23,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "reg_view.html", "C:\\OpenServer\\domains\\homework666\\app\\views\\reg_view.html");
    }
}
