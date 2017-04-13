<?php

/* profile_view.html */
class __TwigTemplate_1542af8e8b8ede62a37f077cc98e7df72dc2472d3ff14f4150e5f50c0179ca76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "profile_view.html", 1);
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
            <a class=\"navbar-brand\" href=\"/profile/index\">Cabinet</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li \$insert1><a href=\"/profile/index\">Профиль</a></li>
                <li \$insert2><a href=\"/list/index\">Список пользователей</a></li>
                <li \$insert3><a href=\"/filelist/index\">Список файлов</a></li>
                <li \$insert0><a href=\"/reg/exit\">Выход</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
        echo "<div class=\"container\">
    <div class=\"form-container\">
        <form class=\"form-horizontal\" action=\"/profile/post\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"form-group\">
                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Имя</label>
                <div class=\"col-sm-10\">
                    <input name=\"name\" type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Имя\">
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Возраст</label>
                <div class=\"col-sm-10\">
                    <input name=\"age\" type=\"text\" class=\"form-control\" id=\"inputEmail4\" placeholder=\"Возраст\">
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">О себе</label>
                <div class=\"col-sm-10\">
                    <input name=\"desc\" type=\"text\" class=\"form-control\" id=\"inputEmail5\" placeholder=\"О себе\">
                </div>
            </div>
            <!--
                      <div class=\"form-group\">
                        <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Фото</label>
                        <div class=\"col-sm-10\">
                          <input name=\"photo\" type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Фото\">
                        </div>
                      </div>
            -->
            <div class=\"form-group\">
                <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Фото</label>
                <div class=\"col-sm-10\">
                    <input name=\"photo\" type=\"file\" class=\"form-control\" id=\"inputEmail6\" placeholder=\"Фото\">
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"col-sm-offset-2 col-sm-10\">
                    <button type=\"submit\" class=\"btn btn-default\">Сохранить</button>
                    <br><br>
                </div>
            </div>
        </form>
    </div>
</div><!-- /.container -->
";
    }

    public function getTemplateName()
    {
        return "profile_view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 26,  57 => 25,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profile_view.html", "C:\\OpenServer\\domains\\homework666\\app\\views\\profile_view.html");
    }
}
