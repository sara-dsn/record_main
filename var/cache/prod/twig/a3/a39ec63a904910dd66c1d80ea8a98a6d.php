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

/* @images/controllers.json */
class __TwigTemplate_03680e20ccc979b9df62e031b3f35bb3 extends Template
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
        echo "{
    \"controllers\": {
        \"@symfony/ux-turbo\": {
            \"turbo-core\": {
                \"enabled\": true,
                \"fetch\": \"eager\"
            },
            \"mercure-turbo-stream\": {
                \"enabled\": false,
                \"fetch\": \"eager\"
            }
        }
    },
    \"entrypoints\": []
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@images/controllers.json";
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
        return new Source("", "@images/controllers.json", "/home/sara/Bureau/monProjet3/assets/controllers.json");
    }
}
