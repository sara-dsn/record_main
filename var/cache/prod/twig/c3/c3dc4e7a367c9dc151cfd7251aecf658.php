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
class __TwigTemplate_8d4e0e14359c673cf5c483eef4a8ca30 extends Template
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
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@images/vendor/installed.php", "/home/sara/Bureau/monProjet3/assets/vendor/installed.php");
    }
}
