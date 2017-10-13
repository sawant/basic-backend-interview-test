<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_eff870c6c728f5c215a59ffc6e758e8b41582633dae0e6a99fd556c9764bfd6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22d01ffd800d522c92c333bcb37105c7143c14de76df592915fe56d94a9e4299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d01ffd800d522c92c333bcb37105c7143c14de76df592915fe56d94a9e4299->enter($__internal_22d01ffd800d522c92c333bcb37105c7143c14de76df592915fe56d94a9e4299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_dec5d5938b706ac003bfb7164f3ea479bf761d37670927f7e7b6d15175931d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec5d5938b706ac003bfb7164f3ea479bf761d37670927f7e7b6d15175931d99->enter($__internal_dec5d5938b706ac003bfb7164f3ea479bf761d37670927f7e7b6d15175931d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22d01ffd800d522c92c333bcb37105c7143c14de76df592915fe56d94a9e4299->leave($__internal_22d01ffd800d522c92c333bcb37105c7143c14de76df592915fe56d94a9e4299_prof);

        
        $__internal_dec5d5938b706ac003bfb7164f3ea479bf761d37670927f7e7b6d15175931d99->leave($__internal_dec5d5938b706ac003bfb7164f3ea479bf761d37670927f7e7b6d15175931d99_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_609d25d7c1b205fcf9ef79900a7868638dacf8aef6202be15221d47ae112691d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_609d25d7c1b205fcf9ef79900a7868638dacf8aef6202be15221d47ae112691d->enter($__internal_609d25d7c1b205fcf9ef79900a7868638dacf8aef6202be15221d47ae112691d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e7376b205e58ebf6141ddcd5f6ccd26a590b31db8f97dcf00fd80db7a265187f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7376b205e58ebf6141ddcd5f6ccd26a590b31db8f97dcf00fd80db7a265187f->enter($__internal_e7376b205e58ebf6141ddcd5f6ccd26a590b31db8f97dcf00fd80db7a265187f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_e7376b205e58ebf6141ddcd5f6ccd26a590b31db8f97dcf00fd80db7a265187f->leave($__internal_e7376b205e58ebf6141ddcd5f6ccd26a590b31db8f97dcf00fd80db7a265187f_prof);

        
        $__internal_609d25d7c1b205fcf9ef79900a7868638dacf8aef6202be15221d47ae112691d->leave($__internal_609d25d7c1b205fcf9ef79900a7868638dacf8aef6202be15221d47ae112691d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/mcmakler/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
