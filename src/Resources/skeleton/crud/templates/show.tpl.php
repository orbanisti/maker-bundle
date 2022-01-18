<?= $helper->getHeadPrintCode($entity_class_name) ?>

{% block mainBody %}
   <div class="col-md-12">
        	<div class="card-header">
                <a class="btn btn-primary" href="{{ path('<?= $route_name ?>_index') }}">back to list</a>

                <a class="btn btn-primary" href="{{ path('<?= $route_name ?>_edit', {'<?= $entity_identifier ?>': <?= $entity_twig_var_singular ?>.<?= $entity_identifier ?>}) }}">edit</a>
                {{ include('<?= $templates_path ?>/_delete_form.html.twig') }}

            </div>
           <div class="card">
               <div class="card-body">
                   <table class="table">
                       <tbody>
                       <?php foreach ($entity_fields as $field): ?>
                           <tr>
                               <th><?= ucfirst($field['fieldName']) ?></th>
                               <td>{{ <?= $helper->getEntityFieldPrintCode($entity_twig_var_singular, $field) ?> }}</td>
                           </tr>
                       <?php endforeach; ?>
                       </tbody>
                   </table>
               </div>
   		</div>
   	</div>

{% endblock %}
