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

/* @images/vendor/installed.php */
class __TwigTemplate_74327b96ec31e6a15529f4c5dbaa3f31 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@images/vendor/installed.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@images/vendor/installed.php"));

        // line 1
        echo "<?php return array (
  '@hotwired/stimulus' => 
  array (
    'version' => '3.2.2',
    'dependencies' => 
    array (
    ),
    'extraFiles' => 
    array (
    ),
  ),
  '@hotwired/turbo' => 
  array (
    'version' => '7.3.0',
    'dependencies' => 
    array (
    ),
    'extraFiles' => 
    array (
    ),
  ),
);";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@images/vendor/installed.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php return array (
  '@hotwired/stimulus' => 
  array (
    'version' => '3.2.2',
    'dependencies' => 
    array (
    ),
    'extraFiles' => 
    array (
    ),
  ),
  '@hotwired/turbo' => 
  array (
    'version' => '7.3.0',
    'dependencies' => 
    array (
    ),
    'extraFiles' => 
    array (
    ),
  ),
);", "@images/vendor/installed.php", "/home/sara/Bureau/monProjet3/assets/vendor/installed.php");
    }
}
