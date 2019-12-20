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

/* public/index.html.twig */
class __TwigTemplate_1395e921460b391eb33a5ba521e3cd7280e0807e8b6657390854c6e8350f79be extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "public/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <main class=\"mainindex\">
        ";
        // line 5
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 6
            echo "            <div class=\"titreadmin\">
                <h1 id=\"presentation\">Présentation</h1>
                <button class=\"buttonadmin\">Créer un article</button>
            </div>
            ";
        } else {
            // line 11
            echo "                <h1 id=\"presentation\">Présentation</h1>
        ";
        }
        // line 13
        echo "        <article class=\"article2 row\">
            <img class=\"col img1\"
                 src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/jouets_africain.png"), "html", null, true);
        echo "\"
                 alt=\"\">
            <div class=\"divtxt col\">
                <h3>Qui <strong>suis-je</strong> ?</h3>
                <p>
                    Depuis le début de mes études en Psychologie à l'Université Paris-Ouest La Défense, j'ai toujours su
                    que l'enfance était le milieu dans lequel je souhaitais évoluer. Après de nombreuses expériences
                    professionnelles, j'ai appris à leur venir en aide directement à l'école.</p>
                <p>J'ai également eut plusieurs expériences dans le domaine du handicap. J'aime
                    travailler avec l'enfant et le voir progresser, grandir, devenir autonome, ainsi qu'apporter mon
                    aide à sa famille.</p>
                <p>Lors d'une mission humanitaire en Afrique, j'ai travaillé dans une pouponière pendant plusieurs mois
                    et j'en retire une leçon indispensable : je ne peux rien faire sans vous. C'est vous qui le
                    connaissez le mieux.</p>
                <p>Depuis 3 ans, je me spécialise dans la prise en charge des troubles du spectre autistique. Je suis
                    formée et supervisée par Caroline Peters (BCBA), sur les techniques d'apprentissage du langage, de
                    la communication et du jeu, mais également sur les troubles du comportement. J'utilise la
                    pédagogie Montessori et la méthode Denver pour la prise en charge précoce de l'enfant à partir de 18
                    mois.</p>
                ";
        // line 34
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 35
            echo "                    <button class=\"buttonadmin\">Update</button>
                    <button class=\"buttonadmin\">Supprimer</button>
                ";
        }
        // line 38
        echo "            </div>
        </article>
        <article class=\"article2 row\">
            <div class=\"divtxt col\">
                <h3>Mes <strong>diplômes</strong> et <strong>formations</strong></h3>
                <ul>
                    <li>Master II : psychologie du developpement de l'enfant et de l'adolescent</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                </ul>
                ";
        // line 63
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 64
            echo "                    <button class=\"buttonadmin\">Update</button>
                    <button class=\"buttonadmin\">Supprimer</button>
                ";
        }
        // line 67
        echo "            </div>
            <img class=\"col img-fluid img1\"
                 src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/palette_de_couleur.png"), "html", null, true);
        echo "\"
                 alt=\"\">
        </article>
        ";
        // line 72
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 73
            echo "            <div class=\"titreadmin\">
                <h1 id=\"pourquoivenir\">Pourquoi <strong>venir</strong> ?</h1>
                <button class=\"buttonadmin\">Créer un article</button>
            </div>
        ";
        } else {
            // line 78
            echo "            <h1 id=\"pourquoivenir\">Pourquoi <strong>venir</strong> ?</h1>
        ";
        }
        // line 80
        echo "        <article class=\"article2 row\">
            <img class=\"col img-fluid img1\"
                 src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/lucas_velo.png"), "html", null, true);
        echo "\"
                 alt=\"\">
            <div class=\"divtxt col\">
                <h3>Les <strong>enfants</strong> :</h3>
                <ul>
                    <li>Difficultés scolaires : anxiété, phobie scolaire, troubles des apprentissages,</li>
                    <li>Troubles du comportement : agitation, trouble de l'attention, hyperactivité, agressivité,</li>
                    <li>Troubles de l’humeur : dépression infantile, tristesse, deuil, gestion des émotions</li>
                    <li>Difficultés familiales</li>
                    <li>Difficultés relationnelles</li>
                    <li>Difficultés liées au stress ou à l’anxiété : somatisations (maux de tête, maux de ventre), toc
                        (obsessions, compulsions), troubles du sommeil (problèmes d’endormissement, angoisses nocturnes)
                    </li>
                    <li>Autre: problèmes autour de la propreté (énurésie, encoprésie), de l'alimentation, etc.</li>
                </ul>
                ";
        // line 97
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 98
            echo "                    <button class=\"buttonadmin\">Update</button>
                    <button class=\"buttonadmin\">Supprimer</button>
                ";
        }
        // line 101
        echo "            </div>
        </article>
        <article class=\"article2 row\">
            <div class=\"divtxt col\">
                <h3>Les <strong>adolescents</strong> :</h3>
                <ul>
                    <li>Troubles du comportement alimentaire : anorexie, boulimie, obésité,</li>
                    <li>Crise d’adolescence : problèmes relationnels avec les parents ou la fratrie, difficultés autour
                        de l’autorité, etc.
                    </li>
                    <li>Troubles anxieux</li>
                    <li>Utilisation excessive des écrans</li>
                    <li>Difficultés relationnelles : repli, difficulté à communiquer, harcèlement scolaire.</li>
                </ul>
                ";
        // line 115
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 116
            echo "                    <button class=\"buttonadmin\">Update</button>
                    <button class=\"buttonadmin\">Supprimer</button>
                ";
        }
        // line 119
        echo "            </div>
            <img class=\"col img-fluid img1\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/maison_kapla.png"), "html", null, true);
        echo "\">
        </article>
        <article class=\"article2 row\">
            <img class=\"col img-fluid img1\"
                 src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/peinture.png"), "html", null, true);
        echo "\"
                 alt=\"\">
            <div class=\"divtxt col\">
                <h3>Les <strong>parents</strong> :</h3>
                <p>
                    La vie d'un parent est faite de bonheur mais aussi de doutes et d'inquiétudes. Vous avez un projet
                    de bébé, vous êtes jeunes parents et ne vous sentez pas à l'aise dans cette nouvelle vie, au
                    contraire vous avez des enfants ou ados plus âgés et avez des questions sur votre parentalité ?
                    N'hésitez pas à me contacter, nous essaierons de trouver ensemble des solutions pour que votre
                    famille retrouve sa joie de vivre et sa sérénité.
                </p>
                ";
        // line 135
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 136
            echo "                    <button class=\"buttonadmin\">Update</button>
                    <button class=\"buttonadmin\">Supprimer</button>
                ";
        }
        // line 139
        echo "            </div>
        </article>
        ";
        // line 141
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 142
            echo "            <div class=\"titreadmin\">
                <h1 id=\"methodes\">Mes <strong>Méthodes</strong></h1>
                <button class=\"buttonadmin\">Créer un article</button>
            </div>
        ";
        } else {
            // line 147
            echo "            <h1 id=\"methodes\">Mes <strong>Méthodes</strong></h1>
        ";
        }
        // line 149
        echo "        <article class=\"article2 row\">
            <img class=\"col img-fluid img1\"
                 src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/lucas_lavage_main.png"), "html", null, true);
        echo "\"
                 alt=\"\">
            <div class=\"divtxt col\">
                <h4>Consultation de <strong>psychologie</strong></h4>
                <p>Certains troubles deviennent de réelles préoccupations pour l'enfant et ses parents. De passage ou
                    durable, ils nécessitent parfois une prise en charge spécifique, d'une ou plusieurs séances.</p>
                <p>Le dessin et le jeu sont d'excellents moyens d'expression utilisés pour les enfants, tandis que la
                    parole et l'écriture conviendront mieux aux ados ! Il est indispensable de préciser ici que
                    l'engagement et l'accord de l'adolescent dans la thérapie est indispensable.</p>
                <p> L'objectif est toujours d'apporter un mieux-être au petit patient, mais également à l'ensemble de sa
                    famille. </p>
                ";
        // line 162
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 163
            echo "                    <button class=\"buttonadmin\">Update</button>
                    <button class=\"buttonadmin\">Supprimer</button>
                ";
        }
        // line 166
        echo "            </div>
        </article>
        <article class=\"article2 row\">
            <div class=\"divtxt col\">
                <h4><strong>Suivi</strong> ABA et TEACCH- <strong>Supervision</strong> de la prise en charge d'enfant ou
                    adolescent <strong>TSA</strong></h4>
                <p>Formée aux méthodes recommandées par la Haute Autorité de Santé dans le cadre du Plan Autisme 2018,
                    je propose le dépistage et le suivi d'enfants/adolescents à partir de 18 mois. ​
                <ul>La prise en charge <strong>consiste</strong> à :
                    <li>évaluer les comportements adaptatifs de l'enfant/adolescent (Vineland 2) ;</li>
                    <li>évaluer le niveau de langage (test VB-MAPP) ;</li>
                    <li>favoriser l'apprentissage dans l'environnement naturel</li>
                    <li>développer compréhension et langage</li>
                    <li>soutenir et guider la famille à affronter les difficultés (apprentissage, jeu, alimentation,
                        hygiène, sommeil, communication, etc)</li>
                    <li>travailler l'autonomie grâce à la méthode Montessori.</li>
                    <li>Superviser l'accompagnant de votre enfant si vous en avez un.</li>
                </ul>
                <p>J'effectue des séances à domicile pour être là au moment où vous en avez besoin (repas, bain,
                    école...).</p>
                <p>J'effectue des bilans complets de dépistage et évalue le niveau d'adaptation de
                    l'enfant (ADI-R et ADOS2).</p>
                ";
        // line 188
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 189
            echo "                    <button class=\"buttonadmin\">Update</button>
                    <button class=\"buttonadmin\">Supprimer</button>
                ";
        }
        // line 192
        echo "            </div>
            <img class=\"col img-fluid img1\"
                 src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/atelier_farine.png"), "html", null, true);
        echo "\"
                 alt=\"\">
        </article>
        <article class=\"article2 row\">
            <img class=\"col img-fluid img1\" src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/peinture_doigt.png"), "html", null, true);
        echo "\" alt=\"\">
            <div class=\"divtxt col\">
                <h4>Bilan <strong>psychologique</strong></h4>
                <p>Vous vous interrogez sur la scolarité de votre enfant/adolescent (difficultés scolaires, sociales,
                    troubles des apprentissages (les fameuses Dys...)), et souhaitez réfléchir aux solutions pour
                    l'aider et l'orienter convenablement ?</p>
                <p>Le bilan psychologique est un éclairage sur le fonctionnement cognitif et affectif de
                    l'enfant/adolescent. Ce bilan permettra de faire le point sur ses facultés et de chercher des
                    solutions pour lui venir en aide si nécessaire.</p>
                <p>Le bilan permet également le dépistage de la précocité intellectuelle, des troubles de l'attention
                    avec ou sans hyperactivité (TDA/H), des troubles du spectre autistiques (TSA), ou d'un trouble des
                    apprentissages (Dyslexie, dyspraxie, dysorthographie, dyscalculie, etc).</p>
                <ul>
                    Il s'effectue en <strong>3 temps</strong> :
                    <li>Le premier entretien avec l'enfant et ses parents, afin de déterminer ensemble l'objectif du
                        bilan.
                    </li>
                    <li>Le bilan avec l'enfant seul (entre 2 et 4 séances)</li>
                    <li>La restitution du bilan en présence de l'enfant et ses parents.</li>
                </ul>
                ";
        // line 218
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 219
            echo "                    <button class=\"buttonadmin\">Update</button>
                    <button class=\"buttonadmin\">Supprimer</button>
                ";
        }
        // line 222
        echo "            </div>
        </article>
        ";
        // line 224
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 225
            echo "            <div class=\"titreadmin\">
                <h1 id=\"infos\">Infos <strong>utiles</strong></h1>
                <button class=\"buttonadmin\">Créer un article</button>
            </div>
        ";
        } else {
            // line 230
            echo "            <h1 id=\"infos\">Infos <strong>utiles</strong></h1>
        ";
        }
        // line 232
        echo "        <article class=\"row article2\">
            <div class=\"col-6\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2789.807814261591!2d-1.032644584436852!3d45.634596979103286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480177e624ecb04f%3A0x287681f9d3434b9a!2sSophie%20Lamalle!5e0!3m2!1sfr!2sfr!4v1576242339914!5m2!1sfr!2sfr\"
                        width=\"800\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
            </div>
            <div class=\"offset-2 col-4\">
                <div>
                    <h3 class=\"col-12\"><strong>Accès</strong> & <strong>Horaires</strong></h3>
                    <ul class=\"col-12\">
                        <li>Place de <strong>parking</strong></li>
                        <li>Accessibilité <strong>PMR</strong></li>
                        <li>Ouvert le <strong>lundi, mercredi, vendredi</strong> et <strong>samedi</strong> </li>
                        <li>de: <strong>8h</strong> - <strong>18h</strong></li>
                    </ul>
                    ";
        // line 246
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 247
            echo "                        <button class=\"buttonadmin\">Update</button>
                        <button class=\"buttonadmin\">Supprimer</button>
                    ";
        }
        // line 250
        echo "                </div>
            </div>
        </article>
        <div class=\"titreadmin\">
            <h1 id=\"reservation\">Réservations</h1>
        </div>
        <article class=\"article2\">
            <form action=\"\" class=\"form_contact\">
                ";
        // line 258
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()), 'form_start');
        echo "
                <div class=\"nomprenom\">
                    <div>
                        <div>";
        // line 261
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 261, $this->source); })()), "firstname", [], "any", false, false, false, 261), 'label');
        echo "</div>
                        <div>";
        // line 262
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 262, $this->source); })()), "firstname", [], "any", false, false, false, 262), 'widget');
        echo "</div>
                    </div>
                    <div>
                        <div>";
        // line 265
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), "lastname", [], "any", false, false, false, 265), 'label');
        echo "</div>
                        <div>";
        // line 266
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 266, $this->source); })()), "lastname", [], "any", false, false, false, 266), 'widget');
        echo "</div>
                    </div>
                </div>
                <div class=\"phonemail\">
                    <div>
                        <div>";
        // line 271
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "phone", [], "any", false, false, false, 271), 'label');
        echo "</div>
                        <div>";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 272, $this->source); })()), "phone", [], "any", false, false, false, 272), 'widget');
        echo "</div>
                    </div>
                    <div>
                        <div>";
        // line 275
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 275, $this->source); })()), "email", [], "any", false, false, false, 275), 'label');
        echo "</div>
                        <div>";
        // line 276
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 276, $this->source); })()), "email", [], "any", false, false, false, 276), 'widget');
        echo "</div>
                    </div>
                </div>
                <div>";
        // line 279
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 279, $this->source); })()), "topic", [], "any", false, false, false, 279), 'label');
        echo "</div>
                <div>";
        // line 280
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), "topic", [], "any", false, false, false, 280), 'widget');
        echo "</div>

                <div>";
        // line 282
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 282, $this->source); })()), "message", [], "any", false, false, false, 282), 'label');
        echo "</div>
                <div>";
        // line 283
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 283, $this->source); })()), "message", [], "any", false, false, false, 283), 'widget');
        echo "</div>

                <button class=\"buttonadmin float-right\">Envoyer</button>
                ";
        // line 286
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 286, $this->source); })()), 'form_end');
        echo "
            </form>
        </article>
        <article class=\"article2\">
            <div class=\"rdv\">
                <h3>Demande de <strong>rendez-vous</strong></h3>
                <p>Vous pouvez voir mes disponibilités à la semaine.</p>
                <p>Vous pouvez également réserver une séance directement via Doodle.</p>
                <p>Vous recevrez une confirmation de prise de rendez-vous.</p>
                <a href=\"https://doodle.com/eldin.laurent\" target=\"_blank\" class=\"buttonadmin float-right\">Réservation</a>
            </div>
        </article>
    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "public/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  508 => 286,  502 => 283,  498 => 282,  493 => 280,  489 => 279,  483 => 276,  479 => 275,  473 => 272,  469 => 271,  461 => 266,  457 => 265,  451 => 262,  447 => 261,  441 => 258,  431 => 250,  426 => 247,  424 => 246,  408 => 232,  404 => 230,  397 => 225,  395 => 224,  391 => 222,  386 => 219,  384 => 218,  361 => 198,  354 => 194,  350 => 192,  345 => 189,  343 => 188,  319 => 166,  314 => 163,  312 => 162,  298 => 151,  294 => 149,  290 => 147,  283 => 142,  281 => 141,  277 => 139,  272 => 136,  270 => 135,  256 => 124,  249 => 120,  246 => 119,  241 => 116,  239 => 115,  223 => 101,  218 => 98,  216 => 97,  198 => 82,  194 => 80,  190 => 78,  183 => 73,  181 => 72,  175 => 69,  171 => 67,  166 => 64,  164 => 63,  137 => 38,  132 => 35,  130 => 34,  108 => 15,  104 => 13,  100 => 11,  93 => 6,  91 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Accueil{% endblock %}
{% block body %}
    <main class=\"mainindex\">
        {% if is_granted('ROLE_ADMIN') %}
            <div class=\"titreadmin\">
                <h1 id=\"presentation\">Présentation</h1>
                <button class=\"buttonadmin\">Créer un article</button>
            </div>
            {% else %}
                <h1 id=\"presentation\">Présentation</h1>
        {% endif %}
        <article class=\"article2 row\">
            <img class=\"col img1\"
                 src=\"{{ asset('assets/img/jouets_africain.png') }}\"
                 alt=\"\">
            <div class=\"divtxt col\">
                <h3>Qui <strong>suis-je</strong> ?</h3>
                <p>
                    Depuis le début de mes études en Psychologie à l'Université Paris-Ouest La Défense, j'ai toujours su
                    que l'enfance était le milieu dans lequel je souhaitais évoluer. Après de nombreuses expériences
                    professionnelles, j'ai appris à leur venir en aide directement à l'école.</p>
                <p>J'ai également eut plusieurs expériences dans le domaine du handicap. J'aime
                    travailler avec l'enfant et le voir progresser, grandir, devenir autonome, ainsi qu'apporter mon
                    aide à sa famille.</p>
                <p>Lors d'une mission humanitaire en Afrique, j'ai travaillé dans une pouponière pendant plusieurs mois
                    et j'en retire une leçon indispensable : je ne peux rien faire sans vous. C'est vous qui le
                    connaissez le mieux.</p>
                <p>Depuis 3 ans, je me spécialise dans la prise en charge des troubles du spectre autistique. Je suis
                    formée et supervisée par Caroline Peters (BCBA), sur les techniques d'apprentissage du langage, de
                    la communication et du jeu, mais également sur les troubles du comportement. J'utilise la
                    pédagogie Montessori et la méthode Denver pour la prise en charge précoce de l'enfant à partir de 18
                    mois.</p>
                {% if is_granted('ROLE_ADMIN') %}
                    <button class=\"buttonadmin\">Update</button>
                    <button class=\"buttonadmin\">Supprimer</button>
                {% endif %}
            </div>
        </article>
        <article class=\"article2 row\">
            <div class=\"divtxt col\">
                <h3>Mes <strong>diplômes</strong> et <strong>formations</strong></h3>
                <ul>
                    <li>Master II : psychologie du developpement de l'enfant et de l'adolescent</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                    <li>Formation n°</li>
                </ul>
                {% if is_granted('ROLE_ADMIN') %}
                    <button class=\"buttonadmin\">Update</button>
                    <button class=\"buttonadmin\">Supprimer</button>
                {% endif %}
            </div>
            <img class=\"col img-fluid img1\"
                 src=\"{{ asset('assets/img/palette_de_couleur.png') }}\"
                 alt=\"\">
        </article>
        {% if is_granted('ROLE_ADMIN') %}
            <div class=\"titreadmin\">
                <h1 id=\"pourquoivenir\">Pourquoi <strong>venir</strong> ?</h1>
                <button class=\"buttonadmin\">Créer un article</button>
            </div>
        {% else %}
            <h1 id=\"pourquoivenir\">Pourquoi <strong>venir</strong> ?</h1>
        {% endif %}
        <article class=\"article2 row\">
            <img class=\"col img-fluid img1\"
                 src=\"{{ asset('assets/img/lucas_velo.png') }}\"
                 alt=\"\">
            <div class=\"divtxt col\">
                <h3>Les <strong>enfants</strong> :</h3>
                <ul>
                    <li>Difficultés scolaires : anxiété, phobie scolaire, troubles des apprentissages,</li>
                    <li>Troubles du comportement : agitation, trouble de l'attention, hyperactivité, agressivité,</li>
                    <li>Troubles de l’humeur : dépression infantile, tristesse, deuil, gestion des émotions</li>
                    <li>Difficultés familiales</li>
                    <li>Difficultés relationnelles</li>
                    <li>Difficultés liées au stress ou à l’anxiété : somatisations (maux de tête, maux de ventre), toc
                        (obsessions, compulsions), troubles du sommeil (problèmes d’endormissement, angoisses nocturnes)
                    </li>
                    <li>Autre: problèmes autour de la propreté (énurésie, encoprésie), de l'alimentation, etc.</li>
                </ul>
                {% if is_granted('ROLE_ADMIN') %}
                    <button class=\"buttonadmin\">Update</button>
                    <button class=\"buttonadmin\">Supprimer</button>
                {% endif %}
            </div>
        </article>
        <article class=\"article2 row\">
            <div class=\"divtxt col\">
                <h3>Les <strong>adolescents</strong> :</h3>
                <ul>
                    <li>Troubles du comportement alimentaire : anorexie, boulimie, obésité,</li>
                    <li>Crise d’adolescence : problèmes relationnels avec les parents ou la fratrie, difficultés autour
                        de l’autorité, etc.
                    </li>
                    <li>Troubles anxieux</li>
                    <li>Utilisation excessive des écrans</li>
                    <li>Difficultés relationnelles : repli, difficulté à communiquer, harcèlement scolaire.</li>
                </ul>
                {% if is_granted('ROLE_ADMIN') %}
                    <button class=\"buttonadmin\">Update</button>
                    <button class=\"buttonadmin\">Supprimer</button>
                {% endif %}
            </div>
            <img class=\"col img-fluid img1\" src=\"{{ asset('assets/img/maison_kapla.png') }}\">
        </article>
        <article class=\"article2 row\">
            <img class=\"col img-fluid img1\"
                 src=\"{{ asset('assets/img/peinture.png') }}\"
                 alt=\"\">
            <div class=\"divtxt col\">
                <h3>Les <strong>parents</strong> :</h3>
                <p>
                    La vie d'un parent est faite de bonheur mais aussi de doutes et d'inquiétudes. Vous avez un projet
                    de bébé, vous êtes jeunes parents et ne vous sentez pas à l'aise dans cette nouvelle vie, au
                    contraire vous avez des enfants ou ados plus âgés et avez des questions sur votre parentalité ?
                    N'hésitez pas à me contacter, nous essaierons de trouver ensemble des solutions pour que votre
                    famille retrouve sa joie de vivre et sa sérénité.
                </p>
                {% if is_granted('ROLE_ADMIN') %}
                    <button class=\"buttonadmin\">Update</button>
                    <button class=\"buttonadmin\">Supprimer</button>
                {% endif %}
            </div>
        </article>
        {% if is_granted('ROLE_ADMIN') %}
            <div class=\"titreadmin\">
                <h1 id=\"methodes\">Mes <strong>Méthodes</strong></h1>
                <button class=\"buttonadmin\">Créer un article</button>
            </div>
        {% else %}
            <h1 id=\"methodes\">Mes <strong>Méthodes</strong></h1>
        {% endif %}
        <article class=\"article2 row\">
            <img class=\"col img-fluid img1\"
                 src=\"{{ asset('assets/img/lucas_lavage_main.png') }}\"
                 alt=\"\">
            <div class=\"divtxt col\">
                <h4>Consultation de <strong>psychologie</strong></h4>
                <p>Certains troubles deviennent de réelles préoccupations pour l'enfant et ses parents. De passage ou
                    durable, ils nécessitent parfois une prise en charge spécifique, d'une ou plusieurs séances.</p>
                <p>Le dessin et le jeu sont d'excellents moyens d'expression utilisés pour les enfants, tandis que la
                    parole et l'écriture conviendront mieux aux ados ! Il est indispensable de préciser ici que
                    l'engagement et l'accord de l'adolescent dans la thérapie est indispensable.</p>
                <p> L'objectif est toujours d'apporter un mieux-être au petit patient, mais également à l'ensemble de sa
                    famille. </p>
                {% if is_granted('ROLE_ADMIN') %}
                    <button class=\"buttonadmin\">Update</button>
                    <button class=\"buttonadmin\">Supprimer</button>
                {% endif %}
            </div>
        </article>
        <article class=\"article2 row\">
            <div class=\"divtxt col\">
                <h4><strong>Suivi</strong> ABA et TEACCH- <strong>Supervision</strong> de la prise en charge d'enfant ou
                    adolescent <strong>TSA</strong></h4>
                <p>Formée aux méthodes recommandées par la Haute Autorité de Santé dans le cadre du Plan Autisme 2018,
                    je propose le dépistage et le suivi d'enfants/adolescents à partir de 18 mois. ​
                <ul>La prise en charge <strong>consiste</strong> à :
                    <li>évaluer les comportements adaptatifs de l'enfant/adolescent (Vineland 2) ;</li>
                    <li>évaluer le niveau de langage (test VB-MAPP) ;</li>
                    <li>favoriser l'apprentissage dans l'environnement naturel</li>
                    <li>développer compréhension et langage</li>
                    <li>soutenir et guider la famille à affronter les difficultés (apprentissage, jeu, alimentation,
                        hygiène, sommeil, communication, etc)</li>
                    <li>travailler l'autonomie grâce à la méthode Montessori.</li>
                    <li>Superviser l'accompagnant de votre enfant si vous en avez un.</li>
                </ul>
                <p>J'effectue des séances à domicile pour être là au moment où vous en avez besoin (repas, bain,
                    école...).</p>
                <p>J'effectue des bilans complets de dépistage et évalue le niveau d'adaptation de
                    l'enfant (ADI-R et ADOS2).</p>
                {% if is_granted('ROLE_ADMIN') %}
                    <button class=\"buttonadmin\">Update</button>
                    <button class=\"buttonadmin\">Supprimer</button>
                {% endif %}
            </div>
            <img class=\"col img-fluid img1\"
                 src=\"{{ asset('assets/img/atelier_farine.png') }}\"
                 alt=\"\">
        </article>
        <article class=\"article2 row\">
            <img class=\"col img-fluid img1\" src=\"{{ asset('assets/img/peinture_doigt.png') }}\" alt=\"\">
            <div class=\"divtxt col\">
                <h4>Bilan <strong>psychologique</strong></h4>
                <p>Vous vous interrogez sur la scolarité de votre enfant/adolescent (difficultés scolaires, sociales,
                    troubles des apprentissages (les fameuses Dys...)), et souhaitez réfléchir aux solutions pour
                    l'aider et l'orienter convenablement ?</p>
                <p>Le bilan psychologique est un éclairage sur le fonctionnement cognitif et affectif de
                    l'enfant/adolescent. Ce bilan permettra de faire le point sur ses facultés et de chercher des
                    solutions pour lui venir en aide si nécessaire.</p>
                <p>Le bilan permet également le dépistage de la précocité intellectuelle, des troubles de l'attention
                    avec ou sans hyperactivité (TDA/H), des troubles du spectre autistiques (TSA), ou d'un trouble des
                    apprentissages (Dyslexie, dyspraxie, dysorthographie, dyscalculie, etc).</p>
                <ul>
                    Il s'effectue en <strong>3 temps</strong> :
                    <li>Le premier entretien avec l'enfant et ses parents, afin de déterminer ensemble l'objectif du
                        bilan.
                    </li>
                    <li>Le bilan avec l'enfant seul (entre 2 et 4 séances)</li>
                    <li>La restitution du bilan en présence de l'enfant et ses parents.</li>
                </ul>
                {% if is_granted('ROLE_ADMIN') %}
                    <button class=\"buttonadmin\">Update</button>
                    <button class=\"buttonadmin\">Supprimer</button>
                {% endif %}
            </div>
        </article>
        {% if is_granted('ROLE_ADMIN') %}
            <div class=\"titreadmin\">
                <h1 id=\"infos\">Infos <strong>utiles</strong></h1>
                <button class=\"buttonadmin\">Créer un article</button>
            </div>
        {% else %}
            <h1 id=\"infos\">Infos <strong>utiles</strong></h1>
        {% endif %}
        <article class=\"row article2\">
            <div class=\"col-6\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2789.807814261591!2d-1.032644584436852!3d45.634596979103286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480177e624ecb04f%3A0x287681f9d3434b9a!2sSophie%20Lamalle!5e0!3m2!1sfr!2sfr!4v1576242339914!5m2!1sfr!2sfr\"
                        width=\"800\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
            </div>
            <div class=\"offset-2 col-4\">
                <div>
                    <h3 class=\"col-12\"><strong>Accès</strong> & <strong>Horaires</strong></h3>
                    <ul class=\"col-12\">
                        <li>Place de <strong>parking</strong></li>
                        <li>Accessibilité <strong>PMR</strong></li>
                        <li>Ouvert le <strong>lundi, mercredi, vendredi</strong> et <strong>samedi</strong> </li>
                        <li>de: <strong>8h</strong> - <strong>18h</strong></li>
                    </ul>
                    {% if is_granted('ROLE_ADMIN') %}
                        <button class=\"buttonadmin\">Update</button>
                        <button class=\"buttonadmin\">Supprimer</button>
                    {% endif %}
                </div>
            </div>
        </article>
        <div class=\"titreadmin\">
            <h1 id=\"reservation\">Réservations</h1>
        </div>
        <article class=\"article2\">
            <form action=\"\" class=\"form_contact\">
                {{ form_start(form) }}
                <div class=\"nomprenom\">
                    <div>
                        <div>{{ form_label(form.firstname) }}</div>
                        <div>{{ form_widget(form.firstname) }}</div>
                    </div>
                    <div>
                        <div>{{ form_label(form.lastname) }}</div>
                        <div>{{ form_widget(form.lastname) }}</div>
                    </div>
                </div>
                <div class=\"phonemail\">
                    <div>
                        <div>{{ form_label(form.phone) }}</div>
                        <div>{{ form_widget(form.phone) }}</div>
                    </div>
                    <div>
                        <div>{{ form_label(form.email) }}</div>
                        <div>{{ form_widget(form.email) }}</div>
                    </div>
                </div>
                <div>{{ form_label(form.topic) }}</div>
                <div>{{ form_widget(form.topic) }}</div>

                <div>{{ form_label(form.message) }}</div>
                <div>{{ form_widget(form.message) }}</div>

                <button class=\"buttonadmin float-right\">Envoyer</button>
                {{ form_end(form) }}
            </form>
        </article>
        <article class=\"article2\">
            <div class=\"rdv\">
                <h3>Demande de <strong>rendez-vous</strong></h3>
                <p>Vous pouvez voir mes disponibilités à la semaine.</p>
                <p>Vous pouvez également réserver une séance directement via Doodle.</p>
                <p>Vous recevrez une confirmation de prise de rendez-vous.</p>
                <a href=\"https://doodle.com/eldin.laurent\" target=\"_blank\" class=\"buttonadmin float-right\">Réservation</a>
            </div>
        </article>
    </main>
{% endblock %}", "public/index.html.twig", "/Applications/MAMP/htdocs/sophie_lamalle/sophie_lamalle_psychologue/templates/public/index.html.twig");
    }
}
