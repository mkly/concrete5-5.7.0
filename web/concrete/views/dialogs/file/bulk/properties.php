<?
defined('C5_EXECUTE') or die("Access Denied.");
?>

<div class="ccm-ui">
<div class="container" data-container="editable-fields">

<section>
	<h4><?=t('Other Attributes')?></h4>
	<? 

	Loader::element('attribute/editable_list', array(
		'attributes' => $attributes, 
		'objects' => $files,
		'saveAction' => $controller->action('update_attribute'),
		'clearAction' => $controller->action('clear_attribute'),
		'permissionsCallback' => function($ak, $permissionsArguments) {
			return true;
		}
	));?>
</section>

<script type="text/javascript">
	$('div[data-container=editable-fields]').concreteEditableFieldContainer({
		data: [
			<? foreach($files as $f) { ?>
				{'name': 'fID[]', 'value': '<?=$f->getFileID()?>'},
			<? } ?>	
		]
	});
</script>

</div>
</div>