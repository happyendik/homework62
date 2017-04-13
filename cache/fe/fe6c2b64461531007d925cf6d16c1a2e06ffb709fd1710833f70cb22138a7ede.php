<?php

/* filelist_view.html */
class __TwigTemplate_179d1b753a968a33972d290afb92e665ca0769f9f39a3388a6c40f234cf20142 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "filelist_view.html", 1);
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
                <li><a href=\"/profile/index\">Профиль</a></li>
                <li><a href=\"/list/index\">Список пользователей</a></li>
                <li class=\"active\"><a href=\"/filelist/index\">Список файлов</a></li>
                <li><a href=\"/reg/exit\">Выход</a></li>
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
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 28
            echo "    ";
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    <table class=\"table table-bordered\">
        <tr>
          <th>Название файла</th>
          <th>Фотография</th>
          <th>Действие</th>
        </tr>

        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 38
            echo "        <tr>
          <td> ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "member_login", array(), "array"), "html", null, true);
            echo "</td>
            ";
            // line 40
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "photo", array()) != null)) {
                // line 41
                echo "            <td><img src='/photos/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "photo", array()), "html", null, true);
                echo "' alt='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "photo", array()), "html", null, true);
                echo "'></td>
            <td><a href='/filelist/delete/";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "photo", array()), "html", null, true);
                echo "'>Удалить аватарку</a></td>
            ";
            } else {
                // line 44
                echo "            <td>NO IMAGE</td>
            <td>NO IMAGE</td>
            ";
            }
            // line 47
            echo "</tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </table>
</div><!-- /.container -->
";
    }

    public function getTemplateName()
    {
        return "filelist_view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 49,  115 => 47,  110 => 44,  105 => 42,  98 => 41,  96 => 40,  92 => 39,  89 => 38,  85 => 37,  76 => 30,  67 => 28,  63 => 27,  60 => 26,  57 => 25,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "filelist_view.html", "C:\\OpenServer\\domains\\homework666\\app\\views\\filelist_view.html");
    }
}
