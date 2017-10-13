<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_81a6501134967d13d92ed588747c89cc69ecc7ff3472ec3f21303b7a7f8d2b05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1701bff450111e5323ad1f1a8d04c4363e386d41c7792ee8398a3a577139405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1701bff450111e5323ad1f1a8d04c4363e386d41c7792ee8398a3a577139405->enter($__internal_a1701bff450111e5323ad1f1a8d04c4363e386d41c7792ee8398a3a577139405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cb8756fe85ba805c50e6dc7896a911e2e4b0b5397f0cb678a8146f52fde03426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8756fe85ba805c50e6dc7896a911e2e4b0b5397f0cb678a8146f52fde03426->enter($__internal_cb8756fe85ba805c50e6dc7896a911e2e4b0b5397f0cb678a8146f52fde03426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1701bff450111e5323ad1f1a8d04c4363e386d41c7792ee8398a3a577139405->leave($__internal_a1701bff450111e5323ad1f1a8d04c4363e386d41c7792ee8398a3a577139405_prof);

        
        $__internal_cb8756fe85ba805c50e6dc7896a911e2e4b0b5397f0cb678a8146f52fde03426->leave($__internal_cb8756fe85ba805c50e6dc7896a911e2e4b0b5397f0cb678a8146f52fde03426_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_53015e1056ee3b2c1ffa0f9f33119eb1ba7da125344d51b3375a41f470eaa5f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53015e1056ee3b2c1ffa0f9f33119eb1ba7da125344d51b3375a41f470eaa5f5->enter($__internal_53015e1056ee3b2c1ffa0f9f33119eb1ba7da125344d51b3375a41f470eaa5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_78cebbd145f880a1ed4ac6f76b3656d6e44a7f01bd265241035554d35c96a7d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78cebbd145f880a1ed4ac6f76b3656d6e44a7f01bd265241035554d35c96a7d4->enter($__internal_78cebbd145f880a1ed4ac6f76b3656d6e44a7f01bd265241035554d35c96a7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_78cebbd145f880a1ed4ac6f76b3656d6e44a7f01bd265241035554d35c96a7d4->leave($__internal_78cebbd145f880a1ed4ac6f76b3656d6e44a7f01bd265241035554d35c96a7d4_prof);

        
        $__internal_53015e1056ee3b2c1ffa0f9f33119eb1ba7da125344d51b3375a41f470eaa5f5->leave($__internal_53015e1056ee3b2c1ffa0f9f33119eb1ba7da125344d51b3375a41f470eaa5f5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2d764d87a10f3ce9553f31984aeafaa710bae146f8b81f7c2116c69e6ab280f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d764d87a10f3ce9553f31984aeafaa710bae146f8b81f7c2116c69e6ab280f6->enter($__internal_2d764d87a10f3ce9553f31984aeafaa710bae146f8b81f7c2116c69e6ab280f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8bf70ea06476505359abd85652c11d81609f82c6e2b746123105a22851216eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf70ea06476505359abd85652c11d81609f82c6e2b746123105a22851216eb9->enter($__internal_8bf70ea06476505359abd85652c11d81609f82c6e2b746123105a22851216eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8bf70ea06476505359abd85652c11d81609f82c6e2b746123105a22851216eb9->leave($__internal_8bf70ea06476505359abd85652c11d81609f82c6e2b746123105a22851216eb9_prof);

        
        $__internal_2d764d87a10f3ce9553f31984aeafaa710bae146f8b81f7c2116c69e6ab280f6->leave($__internal_2d764d87a10f3ce9553f31984aeafaa710bae146f8b81f7c2116c69e6ab280f6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_84b3e3a368df1191fb5edc825d40aa23e2335e7af5e95b5b39449340423cfee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b3e3a368df1191fb5edc825d40aa23e2335e7af5e95b5b39449340423cfee4->enter($__internal_84b3e3a368df1191fb5edc825d40aa23e2335e7af5e95b5b39449340423cfee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_545370b2b8ec1a8d23d1e40f05b99622ad5de8a74a4d51a966bb9106e0f85853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545370b2b8ec1a8d23d1e40f05b99622ad5de8a74a4d51a966bb9106e0f85853->enter($__internal_545370b2b8ec1a8d23d1e40f05b99622ad5de8a74a4d51a966bb9106e0f85853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_545370b2b8ec1a8d23d1e40f05b99622ad5de8a74a4d51a966bb9106e0f85853->leave($__internal_545370b2b8ec1a8d23d1e40f05b99622ad5de8a74a4d51a966bb9106e0f85853_prof);

        
        $__internal_84b3e3a368df1191fb5edc825d40aa23e2335e7af5e95b5b39449340423cfee4->leave($__internal_84b3e3a368df1191fb5edc825d40aa23e2335e7af5e95b5b39449340423cfee4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/mcmakler/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
