<?php

/* name.phtml */
class __TwigTemplate_d811aa53901402ad226feaeef2280f5385234eb7174a66309abe36f7425faef1 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\"/>
        <title>Slim 3</title>
        <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
        <style>
            body {
                margin: 50px 0 0 0;
                padding: 0;
                width: 100%;
                font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
                text-align: center;
                color: #aaa;
                font-size: 18px;
            }

            h1 {
                color: #719e40;
                letter-spacing: -3px;
                font-family: 'Lato', sans-serif;
                font-size: 100px;
                font-weight: 200;
                margin-bottom: 0;
            }
        </style>
    </head>
    <body>
        <h1>Slim</h1>
        <div>a microframework for PHP</div>
        ";
        // line 31
        if (($context["name"] ?? null)) {
            // line 32
            echo "            <h2>Hello ";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "!</h2>
        ";
        }
        // line 33
        echo "    
        
            <p>Try <a href=\"http://www.slimframework.com\">SlimFramework</a></p>
        
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "name.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 33,  53 => 32,  51 => 31,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "name.phtml", "C:\\Users\\Krishnanand\\Documents\\git\\slim-starter\\templates\\name.phtml");
    }
}
