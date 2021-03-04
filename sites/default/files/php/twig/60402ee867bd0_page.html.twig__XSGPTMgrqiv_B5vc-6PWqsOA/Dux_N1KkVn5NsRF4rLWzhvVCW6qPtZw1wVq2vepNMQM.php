<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/vani/templates/layout/page.html.twig */
class __TwigTemplate_6afd6bdba87c38821b323d21af1249691c97e162652f1c81d760fb1bc5487863 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        $this->loadTemplate("@vani/template-parts/header.html.twig", "themes/vani/templates/layout/page.html.twig", 52)->display($context);
        // line 53
        $this->loadTemplate("@vani/template-parts/highlighted.html.twig", "themes/vani/templates/layout/page.html.twig", 53)->display($context);
        // line 54
        echo "<div id=\"main-wrapper\" class=\"main-wrapper clear\">
  <div class=\"container main-container clear\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 57
        echo "    <main id=\"main\" class=\"page-content\">
      ";
        // line 58
        $this->loadTemplate("@vani/template-parts/content_top.html.twig", "themes/vani/templates/layout/page.html.twig", 58)->display($context);
        // line 59
        echo "      <div class=\"node-content\">
        ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "
      </div>
      ";
        // line 62
        $this->loadTemplate("@vani/template-parts/content_bottom.html.twig", "themes/vani/templates/layout/page.html.twig", 62)->display($context);
        // line 63
        echo "    </main>
    ";
        // line 64
        $this->loadTemplate("@vani/template-parts/sidebar_left.html.twig", "themes/vani/templates/layout/page.html.twig", 64)->display($context);
        // line 65
        echo "    ";
        $this->loadTemplate("@vani/template-parts/sidebar_right.html.twig", "themes/vani/templates/layout/page.html.twig", 65)->display($context);
        // line 66
        echo "  </div> ";
        // line 67
        echo "</div>";
        // line 68
        $this->loadTemplate("@vani/template-parts/footer.html.twig", "themes/vani/templates/layout/page.html.twig", 68)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/vani/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 68,  72 => 67,  70 => 66,  67 => 65,  65 => 64,  62 => 63,  60 => 62,  55 => 60,  52 => 59,  50 => 58,  47 => 57,  43 => 54,  41 => 53,  39 => 52,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/vani/templates/layout/page.html.twig", "F:\\xampp\\htdocs\\ugh\\themes\\vani\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 52);
        static $filters = array("escape" => 60);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
