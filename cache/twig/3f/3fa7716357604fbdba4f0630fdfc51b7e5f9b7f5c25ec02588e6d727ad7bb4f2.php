<?php

/* partials/logo.html.twig */
class __TwigTemplate_add5a87bc8172ef854a421b34c9cb02a1aeb2c43bce6e50dd3bd4077e025d32d extends Twig_Template
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
        $context["logo"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc(((($context["mobile"] ?? null)) ? ("custom_logo_mobile") : ("custom_logo")));
        // line 2
        $context["logo_dark_bg"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_logo_dark_bg");
        // line 3
        $context["logo_light_bg"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("custom_logo_light_bg");
        // line 4
        echo "<!-- <logo> -->
<a href=\"";
        // line 5
        echo ($context["home_url"] ?? null);
        echo "\" class=\"navbar-brand mr-10\">
    ";
        // line 6
        if ((($context["logo_light_bg"] ?? null) && ($context["logo_dark_bg"] ?? null))) {
            // line 7
            echo "        ";
            $context["logo_db_file"] = $this->getAttribute(twig_first($this->env, ($context["logo_dark_bg"] ?? null)), "name", array());
            // line 8
            echo "        ";
            $context["logo_lb_file"] = $this->getAttribute(twig_first($this->env, ($context["logo_light_bg"] ?? null)), "name", array());
            // line 9
            echo "        <img class=\"logo_lb\" src=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://images/logo/" . ($context["logo_lb_file"] ?? null)));
            echo "\" alt=\"";
            echo $this->getAttribute(($context["site"] ?? null), "name", array());
            echo "\"/>
        <img class=\"logo_db\" src=\"";
            // line 10
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://images/logo/" . ($context["logo_db_file"] ?? null)));
            echo "\" alt=\"";
            echo $this->getAttribute(($context["site"] ?? null), "name", array());
            echo "\"/>
        ";
        } elseif (        // line 11
($context["logo"] ?? null)) {
            // line 12
            echo "        ";
            $context["logo_file"] = $this->getAttribute(twig_first($this->env, ($context["logo"] ?? null)), "name", array());
            // line 13
            echo "        <img src=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://images/logo/" . ($context["logo_file"] ?? null)));
            echo "\" alt=\"";
            echo $this->getAttribute(($context["site"] ?? null), "name", array());
            echo "\"/>
        ";
        } else {
            // line 15
            echo "        ";
            $this->loadTemplate("@images/grav-logo.svg", "partials/logo.html.twig", 15)->display($context);
            // line 16
            echo "    ";
        }
        // line 17
        echo "</a>
<!-- </logo> -->
";
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  69 => 16,  66 => 15,  58 => 13,  55 => 12,  53 => 11,  47 => 10,  40 => 9,  37 => 8,  34 => 7,  32 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set logo = theme_var(mobile ? 'custom_logo_mobile' : 'custom_logo') %}
{% set logo_dark_bg = theme_var ('custom_logo_dark_bg') %}
{% set logo_light_bg = theme_var ('custom_logo_light_bg') %}
<!-- <logo> -->
<a href=\"{{ home_url }}\" class=\"navbar-brand mr-10\">
    {% if logo_light_bg and logo_dark_bg %}
        {% set logo_db_file = (logo_dark_bg|first).name %}
        {% set logo_lb_file = (logo_light_bg|first).name %}
        <img class=\"logo_lb\" src=\"{{ url('theme://images/logo/' ~ logo_lb_file) }}\" alt=\"{{ site.name }}\"/>
        <img class=\"logo_db\" src=\"{{ url('theme://images/logo/' ~ logo_db_file) }}\" alt=\"{{ site.name }}\"/>
        {% elseif logo %}
        {% set logo_file = (logo|first).name %}
        <img src=\"{{ url('theme://images/logo/' ~ logo_file) }}\" alt=\"{{ site.name }}\"/>
        {% else %}
        {% include('@images/grav-logo.svg') %}
    {% endif %}
</a>
<!-- </logo> -->
", "partials/logo.html.twig", "C:\\xampp\\htdocs\\_www_czyscimy\\user\\themes\\quark\\templates\\partials\\logo.html.twig");
    }
}
