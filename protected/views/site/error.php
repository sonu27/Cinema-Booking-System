<?php
$this->pageTitle=Yii::app()->name . ' - Error';
if (Yii::app()->user->name=='admin') {
    $this->breadcrumbs=array(
        'Error',
    );
}
?>

<h2>Error <?php echo $code; ?></h2>

<div class="error">
<?php echo CHtml::encode($message); ?>
</div>