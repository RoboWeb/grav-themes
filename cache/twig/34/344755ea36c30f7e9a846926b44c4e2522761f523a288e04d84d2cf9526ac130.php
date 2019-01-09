<?php

/* partials/base.html.twig */
class __TwigTemplate_91d8641f4b19a29c6888a4b810f6714969b6368339f621c16af73aa3c71f1585 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_classes' => array($this, 'block_body_classes'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'hero' => array($this, 'block_hero'),
            'body' => array($this, 'block_body'),
            'messages' => array($this, 'block_messages'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->bodyClassFunc(array(0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"));
        // line 2
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("grid-size");
        // line 3
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("production-mode")) ? (".min.css") : (".css"));
        // line 4
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "site", array()), "default_lang", array())));
        echo "\">
<head>
";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 46
        echo "</head>
<body id=\"top\" class=\"";
        // line 47
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
    <div id=\"page-wrapper\">
    ";
        // line 49
        $this->displayBlock('header', $context, $blocks);
        // line 80
        echo "
    ";
        // line 81
        $this->displayBlock('hero', $context, $blocks);
        // line 82
        echo "
        <section id=\"start\">
        ";
        // line 84
        $this->displayBlock('body', $context, $blocks);
        // line 94
        echo "        </section>

    </div>

    ";
        // line 98
        $this->displayBlock('footer', $context, $blocks);
        // line 101
        echo "    
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 105
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 105)->display(array_merge($context, array("mobile" => true)));
        // line 106
        echo "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 108
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 108)->display(array_merge($context, array("tree" => true)));
        // line 109
        echo "            </nav>
        </div>
    </div>

";
        // line 113
        $this->displayBlock('bottom', $context, $blocks);
        // line 116
        echo "
</body>
</html>
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 13
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 13)->display($context);
        // line 14
        echo "
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicons/apple-touch-icon.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicons/favicon-32x32.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 17
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicons/favicon-16x16.png");
        echo "\">
    <link rel=\"manifest\" href=\"";
        // line 18
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicons/site.webmanifest");
        echo "\">
    <link rel=\"mask-icon\" href=\"";
        // line 19
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicons/safari-pinned-tab.svg");
        echo "\" color=\"#4c4c4c\">
    <link rel=\"shortcut icon\" href=\"";
        // line 20
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicons/favicon.ico");
        echo "\">
    <meta name=\"msapplication-TileColor\" content=\"#ffc40d\">
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 22
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicons/mstile-144x144.png");
        echo "\">
    <meta name=\"msapplication-config\" content=\"";
        // line 23
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicons/browserconfig.xml");
        echo "\">
    <meta name=\"theme-color\" content=\"#ffffff\">

    <link rel=\"canonical\" href=\"";
        // line 26
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 29
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))), "method");
        // line 30
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))), "method");
        }
        // line 31
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))), "method");
        }
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))), "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/line-awesome.min.css"), "method");
        // line 35
        echo "    ";
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 40
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.treemenu.js", 1 => array("group" => "bottom")), "method");
        // line 41
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/site.js", 1 => array("group" => "bottom")), "method");
        // line 42
        echo "    ";
    }

    // line 47
    public function block_body_classes($context, array $blocks = array())
    {
        echo ($context["body_classes"] ?? null);
    }

    // line 49
    public function block_header($context, array $blocks = array())
    {
        // line 50
        echo "        <section id=\"header\" class=\"section\">
            <section class=\"container ";
        // line 51
        echo ($context["grid_size"] ?? null);
        echo "\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        ";
        // line 54
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 54)->display($context);
        // line 55
        echo "                    </section>
                    <section class=\"navbar-section desktop-menu\">

                        <nav class=\"dropmenu animated\">
                        ";
        // line 59
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 62
        echo "                        </nav>

                        ";
        // line 64
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()))) {
            // line 65
            echo "                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 65)->display($context);
            echo "</span>
                        ";
        }
        // line 67
        echo "
                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    ";
    }

    // line 59
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 60
        echo "                            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 60)->display($context);
        // line 61
        echo "                        ";
    }

    // line 81
    public function block_hero($context, array $blocks = array())
    {
    }

    // line 84
    public function block_body($context, array $blocks = array())
    {
        // line 85
        echo "            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container ";
        // line 86
        echo ($context["grid_size"] ?? null);
        echo "\">
                    ";
        // line 87
        $this->displayBlock('messages', $context, $blocks);
        // line 90
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 91
        echo "                </section>
            </section>
        ";
    }

    // line 87
    public function block_messages($context, array $blocks = array())
    {
        // line 88
        echo "                        ";
        try {
            $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 88)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 89
        echo "                    ";
    }

    // line 90
    public function block_content($context, array $blocks = array())
    {
    }

    // line 98
    public function block_footer($context, array $blocks = array())
    {
        // line 99
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 99)->display($context);
        // line 100
        echo "    ";
    }

    // line 113
    public function block_bottom($context, array $blocks = array())
    {
        // line 114
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 114,  352 => 113,  348 => 100,  345 => 99,  342 => 98,  337 => 90,  333 => 89,  325 => 88,  322 => 87,  316 => 91,  313 => 90,  311 => 87,  307 => 86,  304 => 85,  301 => 84,  296 => 81,  292 => 61,  289 => 60,  286 => 59,  270 => 67,  264 => 65,  262 => 64,  258 => 62,  256 => 59,  250 => 55,  248 => 54,  242 => 51,  239 => 50,  236 => 49,  230 => 47,  226 => 42,  223 => 41,  220 => 40,  217 => 39,  214 => 38,  210 => 35,  207 => 34,  204 => 33,  201 => 32,  196 => 31,  191 => 30,  188 => 29,  185 => 28,  177 => 43,  175 => 38,  169 => 36,  167 => 28,  162 => 26,  156 => 23,  152 => 22,  147 => 20,  143 => 19,  139 => 18,  135 => 17,  131 => 16,  127 => 15,  124 => 14,  122 => 13,  111 => 9,  108 => 8,  105 => 7,  98 => 116,  96 => 113,  90 => 109,  88 => 108,  84 => 106,  82 => 105,  76 => 101,  74 => 98,  68 => 94,  66 => 84,  62 => 82,  60 => 81,  57 => 80,  55 => 49,  50 => 47,  47 => 46,  45 => 7,  40 => 5,  37 => 4,  35 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production-mode') ? '.min.css' : '.css' %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ url('theme://images/favicons/apple-touch-icon.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ url('theme://images/favicons/favicon-32x32.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ url('theme://images/favicons/favicon-16x16.png') }}\">
    <link rel=\"manifest\" href=\"{{ url('theme://images/favicons/site.webmanifest') }}\">
    <link rel=\"mask-icon\" href=\"{{ url('theme://images/favicons/safari-pinned-tab.svg') }}\" color=\"#4c4c4c\">
    <link rel=\"shortcut icon\" href=\"{{ url('theme://images/favicons/favicon.ico') }}\">
    <meta name=\"msapplication-TileColor\" content=\"#ffc40d\">
    <meta name=\"msapplication-TileImage\" content=\"{{ url('theme://images/favicons/mstile-144x144.png') }}\">
    <meta name=\"msapplication-config\" content=\"{{ url('theme://images/favicons/browserconfig.xml') }}\">
    <meta name=\"theme-color\" content=\"#ffffff\">

    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
        {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress)  %}{% endif %}
        {% if theme_var('spectre.icons') %}{%  do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
        {% do assets.addCss('theme://css-compiled/theme'~compress) %}
        {% do assets.addCss('theme://css/custom.css') %}
        {% do assets.addCss('theme://css/line-awesome.min.css') %}
    {% endblock %}
    {{ assets.css()|raw }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 101) %}
        {% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
    {% endblock %}
    {{ assets.js()|raw }}

{% endblock head %}
</head>
<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\">
    <div id=\"page-wrapper\">
    {% block header %}
        <section id=\"header\" class=\"section\">
            <section class=\"container {{ grid_size }}\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        {% include 'partials/logo.html.twig' %}
                    </section>
                    <section class=\"navbar-section desktop-menu\">

                        <nav class=\"dropmenu animated\">
                        {% block header_navigation %}
                            {% include 'partials/navigation.html.twig' %}
                        {% endblock %}
                        </nav>

                        {% if config.plugins.login.enabled and grav.user.username %}
                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> {% include 'partials/login-status.html.twig' %}</span>
                        {% endif %}

                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    {% endblock %}

    {% block hero %}{% endblock %}

        <section id=\"start\">
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container {{ grid_size }}\">
                    {% block messages %}
                        {% include 'partials/messages.html.twig' ignore missing %}
                    {% endblock %}
                    {% block content %}{% endblock %}
                </section>
            </section>
        {% endblock %}
        </section>

    </div>

    {% block footer %}
        {% include 'partials/footer.html.twig' %}
    {% endblock %}
    
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                {% include 'partials/logo.html.twig' with {mobile: true} %}
            </div>
            <nav class=\"overlay-menu\">
                {% include 'partials/navigation.html.twig' with {tree: true} %}
            </nav>
        </div>
    </div>

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\_www_czyscimy\\user\\themes\\quark\\templates\\partials\\base.html.twig");
    }
}
