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

/* emails/contact.html.twig */
class __TwigTemplate_003e7ac3971d775f186015eae68cf81a50f437cd16e6ecc2fa94b0807aeaad2a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/contact.html.twig"));

        // line 1
        echo "<mjml>
    <mj-head>
        <mj-title>Message Subskill</mj-title>
        <mj-font name=\"Roboto\" href=\"https://fonts.googleapis.com/css?family=Montserrat:300,400,500\"></mj-font>
        <mj-attributes>
            <mj-all font-family=\"Montserrat, Helvetica, Arial, sans-serif\"></mj-all>
            <mj-text font-weight=\"400\" font-size=\"16px\" color=\"#000000\" line-height=\"24px\"></mj-text>
            <mj-section padding=\"0px\"></mj-section>
        </mj-attributes>
    </mj-head>
    <mj-body background-color=\"#F2F2F2\">
        <mj-section padding=\"10px 0 20px 0\">
            <mj-column>
                <mj-text align=\"center\" color=\"#9B9B9B\" font-size=\"11px\">Ne pas répondre a ce mail</mj-text>
            </mj-column>
        </mj-section>
        <mj-section padding=\"20px 20px 0 20px\" background-color=\"#FFFFFF\">
            <mj-column width=\"35%\">
                <mj-text align=\"left\" font-size=\"20px\" font-weight=\"500\">// Subskill&amp;Raul</mj-text>
            </mj-column>
            <mj-column width=\"65%\"></mj-column>
        </mj-section>
        <mj-section padding=\"20px 20px 0 20px\" background-color=\"#FFFFFF\">
            <mj-column>
                <mj-text align=\"center\" font-weight=\"300\" padding=\"30px 40px 10px 40px\" font-size=\"32px\" line-height=\"40px\" color=\"#5FA91D\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 25, $this->source); })()), "objet", [], "any", false, false, false, 25), "html", null, true);
        echo "</mj-text>
            </mj-column>
        </mj-section>
        <mj-section padding=\"10px 20px\" background-color=\"#FFFFFF\">
            <mj-column>
                <mj-divider width=\"30px\" border-width=\"3px\" border-color=\"#9B9B9B\"></mj-divider>
            </mj-column>
        </mj-section>
        <mj-section padding=\"0 20px 20px 20px\" background-color=\"#FFFFFF\">
            <mj-column width=\"80%\">
                <mj-text align=\"center\" padding-top=\"10px\" font-weight=\"500\" padding=\"0px\">De ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 35, $this->source); })()), "civiliter", [], "any", false, false, false, 35), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 35, $this->source); })()), "nom", [], "any", false, false, false, 35), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 35, $this->source); })()), "prenom", [], "any", false, false, false, 35), "html", null, true);
        echo "</mj-text>
                <mj-text align=\"center\" padding-top=\"10px\" font-weight=\"350\" padding=\"0px\">( ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), "html", null, true);
        echo " )</mj-text>
            </mj-column>
        </mj-section>
        <mj-section background-url=\"http://nimus.de/share/tpl-card/bg.jpg\" vertical-align=\"middle\" background-size=\"cover\" background-repeat=\"no-repeat\">
            <mj-column width=\"100%\">
                <mj-image src=\"http://nimus.de/share/tpl-card/lineshadow.png\" alt=\"\" align=\"center\" border=\"none\" padding=\"0px\"></mj-image>
                <mj-text align=\"center\" padding=\"50px 40px 0 40px\" font-weight=\"300\">";
        // line 42
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 42, $this->source); })()), "message", [], "any", false, false, false, 42), "html", null, true));
        echo "</mj-text>
                <mj-button align=\"center\" background-color=\"#5FA91D\" color=\"#FFFFFF\" border-radius=\"2px\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\" inner-padding=\"15px 30px\" padding-bottom=\"100px\" padding-top=\"20px\">Subskill</mj-button>
            </mj-column>
        </mj-section>
        <mj-section padding=\"50px 0 0 0\" background-color=\"#FFFFFF\">
            <mj-column>
                <mj-image src=\"http://nimus.de/share/tpl-card/bottom.png\" alt=\"bottom border\" align=\"center\" border=\"none\" padding=\"0px\"></mj-image>
            </mj-column>
        </mj-section>
        <mj-section padding=\"10px 0 20px 0\">
            <mj-column>
                <mj-text align=\"center\" color=\"#9B9B9B\" font-size=\"11px\"><a href=\"#\" style=\"color: #9B9B9B;\">Unsubscribe</a> from this newsletter<br/>52 Edison Court Suite 259 / East Aidabury / Cambodi<br/> <a href=\"http://drdeveloppeur.github.io\" style=\"color: #9B9B9B; text-decoration:none;\">Made by drdeveloppeur.github.io</a></mj-text>
            </mj-column>
        </mj-section>
    </mj-body>
</mjml>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 43,  99 => 42,  90 => 36,  82 => 35,  69 => 25,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<mjml>
    <mj-head>
        <mj-title>Message Subskill</mj-title>
        <mj-font name=\"Roboto\" href=\"https://fonts.googleapis.com/css?family=Montserrat:300,400,500\"></mj-font>
        <mj-attributes>
            <mj-all font-family=\"Montserrat, Helvetica, Arial, sans-serif\"></mj-all>
            <mj-text font-weight=\"400\" font-size=\"16px\" color=\"#000000\" line-height=\"24px\"></mj-text>
            <mj-section padding=\"0px\"></mj-section>
        </mj-attributes>
    </mj-head>
    <mj-body background-color=\"#F2F2F2\">
        <mj-section padding=\"10px 0 20px 0\">
            <mj-column>
                <mj-text align=\"center\" color=\"#9B9B9B\" font-size=\"11px\">Ne pas répondre a ce mail</mj-text>
            </mj-column>
        </mj-section>
        <mj-section padding=\"20px 20px 0 20px\" background-color=\"#FFFFFF\">
            <mj-column width=\"35%\">
                <mj-text align=\"left\" font-size=\"20px\" font-weight=\"500\">// Subskill&amp;Raul</mj-text>
            </mj-column>
            <mj-column width=\"65%\"></mj-column>
        </mj-section>
        <mj-section padding=\"20px 20px 0 20px\" background-color=\"#FFFFFF\">
            <mj-column>
                <mj-text align=\"center\" font-weight=\"300\" padding=\"30px 40px 10px 40px\" font-size=\"32px\" line-height=\"40px\" color=\"#5FA91D\">{{ contact.objet }}</mj-text>
            </mj-column>
        </mj-section>
        <mj-section padding=\"10px 20px\" background-color=\"#FFFFFF\">
            <mj-column>
                <mj-divider width=\"30px\" border-width=\"3px\" border-color=\"#9B9B9B\"></mj-divider>
            </mj-column>
        </mj-section>
        <mj-section padding=\"0 20px 20px 20px\" background-color=\"#FFFFFF\">
            <mj-column width=\"80%\">
                <mj-text align=\"center\" padding-top=\"10px\" font-weight=\"500\" padding=\"0px\">De {{ contact.civiliter }} {{ contact.nom }} {{ contact.prenom }}</mj-text>
                <mj-text align=\"center\" padding-top=\"10px\" font-weight=\"350\" padding=\"0px\">( {{ contact.email }} )</mj-text>
            </mj-column>
        </mj-section>
        <mj-section background-url=\"http://nimus.de/share/tpl-card/bg.jpg\" vertical-align=\"middle\" background-size=\"cover\" background-repeat=\"no-repeat\">
            <mj-column width=\"100%\">
                <mj-image src=\"http://nimus.de/share/tpl-card/lineshadow.png\" alt=\"\" align=\"center\" border=\"none\" padding=\"0px\"></mj-image>
                <mj-text align=\"center\" padding=\"50px 40px 0 40px\" font-weight=\"300\">{{ contact.message | nl2br }}</mj-text>
                <mj-button align=\"center\" background-color=\"#5FA91D\" color=\"#FFFFFF\" border-radius=\"2px\" href=\"{{ url('home') }}\" inner-padding=\"15px 30px\" padding-bottom=\"100px\" padding-top=\"20px\">Subskill</mj-button>
            </mj-column>
        </mj-section>
        <mj-section padding=\"50px 0 0 0\" background-color=\"#FFFFFF\">
            <mj-column>
                <mj-image src=\"http://nimus.de/share/tpl-card/bottom.png\" alt=\"bottom border\" align=\"center\" border=\"none\" padding=\"0px\"></mj-image>
            </mj-column>
        </mj-section>
        <mj-section padding=\"10px 0 20px 0\">
            <mj-column>
                <mj-text align=\"center\" color=\"#9B9B9B\" font-size=\"11px\"><a href=\"#\" style=\"color: #9B9B9B;\">Unsubscribe</a> from this newsletter<br/>52 Edison Court Suite 259 / East Aidabury / Cambodi<br/> <a href=\"http://drdeveloppeur.github.io\" style=\"color: #9B9B9B; text-decoration:none;\">Made by drdeveloppeur.github.io</a></mj-text>
            </mj-column>
        </mj-section>
    </mj-body>
</mjml>
", "emails/contact.html.twig", "/var/www/html/SubskillProject/templates/emails/contact.html.twig");
    }
}
