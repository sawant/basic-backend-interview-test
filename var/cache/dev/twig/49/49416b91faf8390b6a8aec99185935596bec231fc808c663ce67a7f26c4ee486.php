<?php

/* base.html.twig */
class __TwigTemplate_eedb71836f7b01d69e5f1a1edec8cc94887733e682e65a5242466392152ede29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e75444a74f4c0c0f7258e7ca790d552164d49a1fe8beba728b965f54df09ff50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75444a74f4c0c0f7258e7ca790d552164d49a1fe8beba728b965f54df09ff50->enter($__internal_e75444a74f4c0c0f7258e7ca790d552164d49a1fe8beba728b965f54df09ff50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_53c79cdf073faf4682e59306f9b606b48756346158fcf5322cdccda98d1543f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c79cdf073faf4682e59306f9b606b48756346158fcf5322cdccda98d1543f7->enter($__internal_53c79cdf073faf4682e59306f9b606b48756346158fcf5322cdccda98d1543f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e75444a74f4c0c0f7258e7ca790d552164d49a1fe8beba728b965f54df09ff50->leave($__internal_e75444a74f4c0c0f7258e7ca790d552164d49a1fe8beba728b965f54df09ff50_prof);

        
        $__internal_53c79cdf073faf4682e59306f9b606b48756346158fcf5322cdccda98d1543f7->leave($__internal_53c79cdf073faf4682e59306f9b606b48756346158fcf5322cdccda98d1543f7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca59c1039b634d963c573f82c42eada2ef6543606ee4de9b5fc11574ac393877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca59c1039b634d963c573f82c42eada2ef6543606ee4de9b5fc11574ac393877->enter($__internal_ca59c1039b634d963c573f82c42eada2ef6543606ee4de9b5fc11574ac393877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b5f83b5d90eabb52fdea6279dfb286a23fafec91905b5206445f91001ea6b893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f83b5d90eabb52fdea6279dfb286a23fafec91905b5206445f91001ea6b893->enter($__internal_b5f83b5d90eabb52fdea6279dfb286a23fafec91905b5206445f91001ea6b893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b5f83b5d90eabb52fdea6279dfb286a23fafec91905b5206445f91001ea6b893->leave($__internal_b5f83b5d90eabb52fdea6279dfb286a23fafec91905b5206445f91001ea6b893_prof);

        
        $__internal_ca59c1039b634d963c573f82c42eada2ef6543606ee4de9b5fc11574ac393877->leave($__internal_ca59c1039b634d963c573f82c42eada2ef6543606ee4de9b5fc11574ac393877_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0d7d9e753109859c05a66d1504bb0810323413a19f70e023878d9479c85cad46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d7d9e753109859c05a66d1504bb0810323413a19f70e023878d9479c85cad46->enter($__internal_0d7d9e753109859c05a66d1504bb0810323413a19f70e023878d9479c85cad46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ff4bdb0284397c0f86b1512dc3dd3f4a77cc993e52d214d8d24d168067f9c134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4bdb0284397c0f86b1512dc3dd3f4a77cc993e52d214d8d24d168067f9c134->enter($__internal_ff4bdb0284397c0f86b1512dc3dd3f4a77cc993e52d214d8d24d168067f9c134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ff4bdb0284397c0f86b1512dc3dd3f4a77cc993e52d214d8d24d168067f9c134->leave($__internal_ff4bdb0284397c0f86b1512dc3dd3f4a77cc993e52d214d8d24d168067f9c134_prof);

        
        $__internal_0d7d9e753109859c05a66d1504bb0810323413a19f70e023878d9479c85cad46->leave($__internal_0d7d9e753109859c05a66d1504bb0810323413a19f70e023878d9479c85cad46_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_02f1746883636bacfea4f446511f664c4043b7991563d6f4b24d44863189209a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f1746883636bacfea4f446511f664c4043b7991563d6f4b24d44863189209a->enter($__internal_02f1746883636bacfea4f446511f664c4043b7991563d6f4b24d44863189209a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_92c29a4fe5ac139530b50ab6e9036eaffe4435f818238db54e7edf0f2de740ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c29a4fe5ac139530b50ab6e9036eaffe4435f818238db54e7edf0f2de740ee->enter($__internal_92c29a4fe5ac139530b50ab6e9036eaffe4435f818238db54e7edf0f2de740ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_92c29a4fe5ac139530b50ab6e9036eaffe4435f818238db54e7edf0f2de740ee->leave($__internal_92c29a4fe5ac139530b50ab6e9036eaffe4435f818238db54e7edf0f2de740ee_prof);

        
        $__internal_02f1746883636bacfea4f446511f664c4043b7991563d6f4b24d44863189209a->leave($__internal_02f1746883636bacfea4f446511f664c4043b7991563d6f4b24d44863189209a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e130566381f92d9ea301e9dfd1a5060991bc46457f85172378f75290b5b12ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e130566381f92d9ea301e9dfd1a5060991bc46457f85172378f75290b5b12ed->enter($__internal_3e130566381f92d9ea301e9dfd1a5060991bc46457f85172378f75290b5b12ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1061632def46032d6a36c319a529429d327cbdd343328c449a1026ab64f79c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1061632def46032d6a36c319a529429d327cbdd343328c449a1026ab64f79c77->enter($__internal_1061632def46032d6a36c319a529429d327cbdd343328c449a1026ab64f79c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1061632def46032d6a36c319a529429d327cbdd343328c449a1026ab64f79c77->leave($__internal_1061632def46032d6a36c319a529429d327cbdd343328c449a1026ab64f79c77_prof);

        
        $__internal_3e130566381f92d9ea301e9dfd1a5060991bc46457f85172378f75290b5b12ed->leave($__internal_3e130566381f92d9ea301e9dfd1a5060991bc46457f85172378f75290b5b12ed_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/mcmakler/app/Resources/views/base.html.twig");
    }
}
