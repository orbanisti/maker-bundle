<?= $helper->getHeadPrintCode('Edit '.$entity_class_name) ?>

{% block mainBody %}
<div class="col-md-12">
    <div class="card-header">
        <a class="btn btn-primary" href="{{ path('<?= $route_name ?>_index') }}">back to list</a>
        {{ include('<?= $templates_path ?>/_delete_form.html.twig') }}
    </div>
    <div class="card">
        <div class="card-body">

            {{ include('<?= $templates_path ?>/_form.html.twig', {'button_label': 'Update'}) }}

        </div>
    </div>
</div>

{% endblock %}
