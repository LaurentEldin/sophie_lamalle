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

/* article/index.html.twig */
class __TwigTemplate_ce5df2eed71fe49fc9f4dde5a44c9f217c40dee917da2a66e93396e0ac1915d2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Article index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 7
            echo "        <div class=\"titreadmin\">
            <h1 id=\"presentation\">Présentation</h1>
            <a href=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_new");
            echo "\" class=\"buttonadmin\">Créer un article</a>
        </div>
    ";
        } else {
            // line 12
            echo "        <h1 id=\"presentation\">Présentation</h1>
    ";
        }
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 14, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 15
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 15) % 2 == 1)) {
                // line 16
                echo "            <article class=\"article2 row\">
                ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "img", [], "any", false, false, false, 17));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 18
                    echo "                <img class=\"col img1\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/uploaded_images/" . $context["img"])), "html", null, true);
                    echo "\" alt=\"\">
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "                <div class=\"divtxt col\">
                    <h3>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 21), "html", null, true);
                echo "</h3>
                    <p>";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["article"], "text", [], "any", false, false, false, 22);
                echo "</p>
                    ";
                // line 23
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 24
                    echo "                        <a class=\"buttonadmin\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 24)]), "html", null, true);
                    echo "\">Update</a>
                        <a class=\"buttonadmin\" href=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                    echo "\">Supprimer</a>
                    ";
                }
                // line 27
                echo "                </div>
            </article>
        ";
            } else {
                // line 30
                echo "            <article class=\"article2 row\">
                <div class=\"divtxt col\">
                    <h3>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 32), "html", null, true);
                echo "</h3>
                    <p>";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["article"], "text", [], "any", false, false, false, 33);
                echo "</p>
                    ";
                // line 34
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 35
                    echo "                        <a class=\"buttonadmin\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                    echo "\">Update</a>
                        <a class=\"buttonadmin\" href=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                    echo "\">Supprimer</a>
                    ";
                }
                // line 38
                echo "                </div>
                ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "img", [], "any", false, false, false, 39));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 40
                    echo "                    <img class=\"col img1\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/uploaded_images/" . $context["img"])), "html", null, true);
                    echo "\" alt=\"\">
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "            </article>
        ";
            }
            // line 44
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 44,  210 => 42,  201 => 40,  197 => 39,  194 => 38,  189 => 36,  184 => 35,  182 => 34,  178 => 33,  174 => 32,  170 => 30,  165 => 27,  160 => 25,  155 => 24,  153 => 23,  149 => 22,  145 => 21,  142 => 20,  133 => 18,  129 => 17,  126 => 16,  123 => 15,  105 => 14,  101 => 12,  95 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Article index{% endblock %}

{% block body %}
    {% if is_granted('ROLE_ADMIN') %}
        <div class=\"titreadmin\">
            <h1 id=\"presentation\">Présentation</h1>
            <a href=\"{{ path('article_new') }}\" class=\"buttonadmin\">Créer un article</a>
        </div>
    {% else %}
        <h1 id=\"presentation\">Présentation</h1>
    {% endif %}
    {% for article in articles %}
        {% if loop.index is odd %}
            <article class=\"article2 row\">
                {% for img in article.img %}
                <img class=\"col img1\" src=\"{{ asset('assets/uploaded_images/' ~ img) }}\" alt=\"\">
                {% endfor %}
                <div class=\"divtxt col\">
                    <h3>{{ article.title }}</h3>
                    <p>{{ article.text|raw }}</p>
                    {% if is_granted('ROLE_ADMIN') %}
                        <a class=\"buttonadmin\" href=\"{{ path('article_edit', {'id': article.id}) }}\">Update</a>
                        <a class=\"buttonadmin\" href=\"{{ path('article_delete', {'id': article.id}) }}\">Supprimer</a>
                    {% endif %}
                </div>
            </article>
        {% else %}
            <article class=\"article2 row\">
                <div class=\"divtxt col\">
                    <h3>{{ article.title }}</h3>
                    <p>{{ article.text|raw }}</p>
                    {% if is_granted('ROLE_ADMIN') %}
                        <a class=\"buttonadmin\" href=\"{{ path('article_edit', {'id': article.id}) }}\">Update</a>
                        <a class=\"buttonadmin\" href=\"{{ path('article_delete', {'id': article.id}) }}\">Supprimer</a>
                    {% endif %}
                </div>
                {% for img in article.img %}
                    <img class=\"col img1\" src=\"{{ asset('assets/uploaded_images/' ~ img) }}\" alt=\"\">
                {% endfor %}
            </article>
        {% endif %}
    {% endfor %}
{% endblock %}
", "article/index.html.twig", "/Applications/MAMP/htdocs/sophie_lamalle/sophie_lamalle_psychologue/templates/article/index.html.twig");
    }
}
