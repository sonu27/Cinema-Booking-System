<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'showing-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'film_id'); ?>
		<?php echo $form->textField($model,'film_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'film_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'screen_id'); ?>
		<?php echo $form->textField($model,'screen_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'screen_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_date'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'start_date',
			'options' => array(
				'dateFormat' => 'yy-mm-dd',
				'minDate' => '0',)
		)); ?>
		<?php echo $form->error($model,'start_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_time'); ?>
		<?php echo $form->textField($model,'start_time'); ?>
		<?php echo $form->error($model,'start_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_id'); ?>
		<?php echo $form->textField($model,'price_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'price_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
<script>
jQuery(function($) {
    jQuery('#Showing_film_id').autocomplete({'showAnim':'fold','select':function(event, ui) {
                $('#Showing_film_id').val(ui.item.id);
                return false;
            },'source':'/cinema/film/search'});
    jQuery('#Showing_screen_id').autocomplete({'showAnim':'fold','select':function(event, ui) {
                $('#Showing_screen_id').val(ui.item.id);
                return false;
            },'source':'/cinema/screen/search'});
    jQuery('#Showing_price_id').autocomplete({'showAnim':'fold','select':function(event, ui) {
                $('#Showing_price_id').val(ui.item.id);
                return false;
            },'source':'/cinema/price/search'});
});
</script>
</div><!-- form -->