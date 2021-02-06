<?php

/* layout.html */
class __TwigTemplate_96e10d52856f5fc8a972bcbf6b29fe1765017624e3c036d43d399548e521c8bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>

<header>header</header>

<content>
    ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "</content>

<footer>footer</footer>
<body>

</body>
</html>";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  44 => 11,  34 => 13,  32 => 11,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>Title</title>*/
/* </head>*/
/* */
/* <header>header</header>*/
/* */
/* <content>*/
/*     {% block content %}*/
/*     {% endblock %}*/
/* </content>*/
/* */
/* <footer>footer</footer>*/
/* <body>*/
/* */
/* </body>*/
/* </html>*/
