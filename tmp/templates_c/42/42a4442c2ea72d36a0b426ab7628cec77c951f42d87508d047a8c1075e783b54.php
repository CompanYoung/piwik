<?php

/* @CoreHome/_favicon.twig */
class __TwigTemplate_8e360b0ce414937b59cff48987c334e134737a9f6ea9779803f7620d1c4cf6de extends Twig_Template
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
        if ((((isset($context["isCustomLogo"]) ? $context["isCustomLogo"] : $this->getContext($context, "isCustomLogo")) && array_key_exists("customFavicon", $context)) && (isset($context["customFavicon"]) ? $context["customFavicon"] : $this->getContext($context, "customFavicon")))) {
            // line 2
            echo "    <link rel=\"shortcut icon\" href=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["customFavicon"]) ? $context["customFavicon"] : $this->getContext($context, "customFavicon")), "html", null, true);
            echo "\"/>
";
        } else {
            // line 4
            echo "    <link rel=\"shortcut icon\" href=\"plugins/CoreHome/images/favicon.png\"/>
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/_favicon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% if isCustomLogo and customFavicon is defined and customFavicon %}
    <link rel=\"shortcut icon\" href=\"{{ customFavicon }}\"/>
{% else %}
    <link rel=\"shortcut icon\" href=\"plugins/CoreHome/images/favicon.png\"/>
{% endif %}";
    }
}
