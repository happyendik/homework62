<?php

/* list_view.html */
class __TwigTemplate_909082d49968165ec682e7091203bd376f48e96db96593db393e13a33b03609b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "list_view.html", 1);
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
            <a class=\"navbar-brand\" href=\"/profile/index\">Hi, <?php echo \$_SESSION['login']?></a>
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
            <th>Пользователь(логин)</th>
            <th>Имя</th>
            <th>возраст</th>
            <th>описание</th>
            <th>Фотография</th>
            <th>Действия</th>
        </tr>
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 40
            echo "        <tr>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "member_login", array(), "array"), "html", null, true);
            echo "</td>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "age", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "description", array()), "html", null, true);
            echo "</td>
            ";
            // line 45
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "photo", array()) != null)) {
                // line 46
                echo "            <td><img src='/photos/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "photo", array()), "html", null, true);
                echo "' alt='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "photo", array()), "html", null, true);
                echo "'></td>
            ";
            } else {
                // line 48
                echo "            <td>NO IMAGE</td>
            ";
            }
            // line 50
            echo "            <!--
        if (\$photo !== null) {
            echo \"<td><img src='/photos/\$photo' alt=''></td>\";
        } else {
            echo \"<td>NO IMAGE</td>\";
        } -->


            <td>
                <a href=\"/list/delete/";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["row"], "member_login", array(), "array"), "html", null, true);
            echo "\">Удалить пользователя</a>
            </td>
        </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    </table>
</div><!-- /.container -->
";
    }

    public function getTemplateName()
    {
        return "list_view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 63,  135 => 59,  124 => 50,  120 => 48,  112 => 46,  110 => 45,  106 => 44,  102 => 43,  98 => 42,  94 => 41,  91 => 40,  87 => 39,  76 => 30,  67 => 28,  63 => 27,  60 => 26,  57 => 25,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "list_view.html", "C:\\OpenServer\\domains\\homework666\\app\\views\\list_view.html");
    }
}
