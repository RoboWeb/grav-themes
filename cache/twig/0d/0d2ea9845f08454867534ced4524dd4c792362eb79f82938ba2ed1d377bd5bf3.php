<?php

/* modular/text.html.twig */
class __TwigTemplate_890633cc381938787e732bbc82b28520ed110f41c4ad774a30b6d99d4240a6ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("grid-size");
        // line 2
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 3
        echo "
<section class=\"section modular-text ";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo " bg-gray\">
    <section class=\"container ";
        // line 5
        echo ($context["grid_size"] ?? null);
        echo "\">
        <div class=\"columns ";
        // line 6
        echo (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "image_align", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "image_align", array()), "align-right")) : ("align-right"));
        echo "\">
            ";
        // line 7
        if (($context["image"] ?? null)) {
            // line 8
            echo "            <div class=\"column col-6 col-md-12\">
                ";
            // line 9
            echo ($context["content"] ?? null);
            echo "
            </div>
            <div class=\"column col-6 col-md-12\">
                ";
            // line 12
            if (($context["image"] ?? null)) {
                // line 13
                echo "                    ";
                echo $this->getAttribute(($context["image"] ?? null), "html", array());
                echo "
                ";
            }
            // line 15
            echo "            </div>
            ";
        } else {
            // line 17
            echo "            <div class=\"column col-12\">
                ";
            // line 18
            echo ($context["content"] ?? null);
            echo "
            </div>
            ";
        }
        // line 21
        echo "        </div>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 21,  64 => 18,  61 => 17,  57 => 15,  51 => 13,  49 => 12,  43 => 9,  40 => 8,  38 => 7,  34 => 6,  30 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set grid_size = theme_var('grid-size') %}
{% set image = page.media.images|first %}

<section class=\"section modular-text {{ page.header.class}} bg-gray\">
    <section class=\"container {{ grid_size }}\">
        <div class=\"columns {{ page.header.image_align|default('align-right') }}\">
            {% if image %}
            <div class=\"column col-6 col-md-12\">
                {{ content|raw }}
            </div>
            <div class=\"column col-6 col-md-12\">
                {% if image %}
                    {{ image.html|raw }}
                {% endif %}
            </div>
            {% else %}
            <div class=\"column col-12\">
                {{ content|raw }}
            </div>
            {% endif %}
        </div>
    </section>
</section>
", "modular/text.html.twig", "C:\\xampp\\htdocs\\_www_czyscimy\\user\\themes\\quark\\templates\\modular\\text.html.twig");
    }
}
