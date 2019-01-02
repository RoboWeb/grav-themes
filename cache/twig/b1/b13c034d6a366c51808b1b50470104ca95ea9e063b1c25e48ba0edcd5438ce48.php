<?php

/* modular.html.twig */
class __TwigTemplate_bbe16cd8f337819318a47ec47ad22df2be3c994627b9316e87a06f0e4e54df30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'bottom' => array($this, 'block_bottom'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'hero' => array($this, 'block_hero'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["macro"] = $this;
        // line 7
        $context["show_onpage_menu"] = (($this->getAttribute(($context["header"] ?? null), "onpage_menu", array()) == true) || (null === $this->getAttribute(($context["header"] ?? null), "onpage_menu", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        if (($context["show_onpage_menu"] ?? null)) {
            // line 11
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/singlepagenav.min.js"), "method");
            // line 12
            echo "    ";
        }
        // line 13
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 16
    public function block_bottom($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("bottom", $context, $blocks);
        echo "
    ";
        // line 18
        if (($context["show_onpage_menu"] ?? null)) {
            // line 19
            echo "        <script>
        // singlePageNav initialization & configuration
        \$('ul.navigation').singlePageNav({
            offset: \$('#header').outerHeight(),
            filter: ':not(.external)',
            updateHash: true,
            currentClass: 'active'
        });
        </script>
    ";
        }
    }

    // line 31
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        if (($context["show_onpage_menu"] ?? null)) {
            // line 33
            echo "        <ul class=\"navigation\">
        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                if ( !($this->getAttribute($this->getAttribute($context["module"], "header", array()), "visible", array()) === false)) {
                    // line 35
                    echo "            ";
                    $context["current_module"] = ((($this->getAttribute($context["module"], "active", array()) || $this->getAttribute($context["module"], "activeChild", array()))) ? ("active") : (""));
                    // line 36
                    echo "            <li><a class=\"";
                    echo ($context["current_module"] ?? null);
                    echo "\" href=\"#";
                    echo $context["macro"]->getpageLinkName($this->getAttribute($context["module"], "menu", array()));
                    echo "\">";
                    echo $this->getAttribute($context["module"], "menu", array());
                    echo "</a></li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
                // line 39
                echo "            <li>
                <a ";
                // line 40
                if ($this->getAttribute($context["mitem"], "class", array())) {
                    echo "class=\"";
                    echo $this->getAttribute($context["mitem"], "class", array());
                    echo "\"";
                }
                echo " href=\"";
                echo $this->getAttribute($context["mitem"], "url", array());
                echo "\">
                    ";
                // line 41
                if ($this->getAttribute($context["mitem"], "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($context["mitem"], "icon", array());
                    echo "\"></i>";
                }
                // line 42
                echo "                    ";
                echo $this->getAttribute($context["mitem"], "text", array());
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "        </ul>
    ";
        } else {
            // line 48
            echo "        ";
            $this->displayParentBlock("header_navigation", $context, $blocks);
            echo "
    ";
        }
    }

    // line 52
    public function block_hero($context, array $blocks = array())
    {
        // line 53
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            if (($this->getAttribute($context["module"], "template", array()) == "modular/hero")) {
                // line 54
                echo "        <div id=\"";
                echo $context["macro"]->getpageLinkName($this->getAttribute($context["module"], "menu", array()));
                echo "\"></div>
        ";
                // line 55
                echo $this->getAttribute($context["module"], "content", array());
                echo "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        // line 60
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            if (($this->getAttribute($context["module"], "template", array()) != "modular/hero")) {
                // line 61
                echo "        <div id=\"";
                echo $context["macro"]->getpageLinkName($this->getAttribute($context["module"], "menu", array()));
                echo "\"></div>
        ";
                // line 62
                echo $this->getAttribute($context["module"], "content", array());
                echo "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 3
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, ($context["text"] ?? null)), array(" " => "_"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 3,  197 => 62,  192 => 61,  186 => 60,  183 => 59,  172 => 55,  167 => 54,  161 => 53,  158 => 52,  150 => 48,  146 => 46,  135 => 42,  129 => 41,  119 => 40,  116 => 39,  111 => 38,  97 => 36,  94 => 35,  89 => 34,  86 => 33,  83 => 32,  80 => 31,  66 => 19,  64 => 18,  59 => 17,  56 => 16,  49 => 13,  46 => 12,  43 => 11,  40 => 10,  37 => 9,  33 => 1,  31 => 7,  29 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}

{% import _self as macro %}

{% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}

{% block javascripts %}
    {% if show_onpage_menu %}
        {% do assets.add('theme://js/singlepagenav.min.js') %}
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block bottom %}
    {{ parent() }}
    {% if show_onpage_menu %}
        <script>
        // singlePageNav initialization & configuration
        \$('ul.navigation').singlePageNav({
            offset: \$('#header').outerHeight(),
            filter: ':not(.external)',
            updateHash: true,
            currentClass: 'active'
        });
        </script>
    {% endif %}
{% endblock %}

{% block header_navigation %}
    {% if show_onpage_menu %}
        <ul class=\"navigation\">
        {% for module in page.collection() if module.header.visible is not same as(false) %}
            {% set current_module = (module.active or module.activeChild) ? 'active' : '' %}
            <li><a class=\"{{ current_module }}\" href=\"#{{ macro.pageLinkName(module.menu) }}\">{{ module.menu }}</a></li>
        {% endfor %}
        {% for mitem in site.menu %}
            <li>
                <a {% if mitem.class %}class=\"{{ mitem.class }}\"{% endif %} href=\"{{ mitem.url }}\">
                    {% if mitem.icon %}<i class=\"fa fa-{{ mitem.icon }}\"></i>{% endif %}
                    {{ mitem.text }}
                </a>
            </li>
        {% endfor %}
        </ul>
    {% else %}
        {{  parent() }}
    {% endif %}
{% endblock %}

{% block hero %}
    {% for module in page.collection() if module.template == 'modular/hero' %}
        <div id=\"{{ macro.pageLinkName(module.menu) }}\"></div>
        {{ module.content|raw }}
    {% endfor %}
{% endblock %}

{% block body %}
    {% for module in page.collection() if module.template != 'modular/hero' %}
        <div id=\"{{ macro.pageLinkName(module.menu) }}\"></div>
        {{ module.content|raw }}
    {% endfor %}
{% endblock %}
", "modular.html.twig", "C:\\xampp\\htdocs\\_www_czyscimy\\user\\themes\\quark\\templates\\modular.html.twig");
    }
}
