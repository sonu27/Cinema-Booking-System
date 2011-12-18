<?php
$this->breadcrumbs=array(
	'Films'=>array('index'),
	$model->title=>array('view','id'=>$model->film_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Film', 'url'=>array('index')),
	array('label'=>'Create Film', 'url'=>array('create')),
	array('label'=>'View Film', 'url'=>array('view', 'id'=>$model->film_id)),
	array('label'=>'Manage Film', 'url'=>array('admin')),
);
?>

<h1>Update Film <?php echo $model->film_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>