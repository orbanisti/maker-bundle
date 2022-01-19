<?= $helper->getHeadPrintCode('New '.$entity_class_name) ?>

{% block mainBody %}
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary mr-2" href="{{ path('<?= $route_name ?>_index') }}">back to list</a>
        </div>
        <div class="card-body">
            {{ include('<?= $templates_path ?>/_form.html.twig') }}
        </div>
    </div>
</div>


{% endblock %}
