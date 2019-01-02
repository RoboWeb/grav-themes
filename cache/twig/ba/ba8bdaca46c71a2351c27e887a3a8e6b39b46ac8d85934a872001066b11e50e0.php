<?php

/* modular/hero.html.twig */
class __TwigTemplate_944f42817ae852a9e0b41fad30b47fc11a47ce33e86524a396496e166926bc2f extends Twig_Template
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
        $context["hero_image"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image", array())) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image", array()), array(), "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()))));
        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("partials/hero.html.twig", "modular/hero.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "modular/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
{% set hero_image = page.header.hero_image ? page.media[page.header.hero_image] : page.media.images|first %}

{% include 'partials/hero.html.twig' %}
", "modular/hero.html.twig", "C:\\xampp\\htdocs\\_www_czyscimy\\user\\themes\\quark\\templates\\modular\\hero.html.twig");
    }
}
