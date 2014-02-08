<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'slug'); ?>
		<?php echo $form->textField($model,'slug',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'slug'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_id'); ?>
		<?php echo $form->textField($model,'image_id'); ?>
		<?php echo $form->error($model,'image_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lowest_price'); ?>
		<?php echo $form->textField($model,'lowest_price',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'lowest_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'highest_price'); ?>
		<?php echo $form->textField($model,'highest_price',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'highest_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_shops'); ?>
		<?php echo $form->textField($model,'total_shops'); ?>
		<?php echo $form->error($model,'total_shops'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'manufacturer_id'); ?>
		<?php echo $form->textField($model,'manufacturer_id'); ?>
		<?php echo $form->error($model,'manufacturer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'views'); ?>
		<?php echo $form->textField($model,'views'); ?>
		<?php echo $form->error($model,'views'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php echo $form->textField($model,'category_id'); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EAN'); ?>
		<?php echo $form->textField($model,'EAN',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'EAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_want'); ?>
		<?php echo $form->textField($model,'total_want'); ?>
		<?php echo $form->error($model,'total_want'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_have'); ?>
		<?php echo $form->textField($model,'total_have'); ?>
		<?php echo $form->error($model,'total_have'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_adult'); ?>
		<?php echo $form->textField($model,'is_adult'); ?>
		<?php echo $form->error($model,'is_adult'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creation_date'); ?>
		<?php echo $form->textField($model,'creation_date'); ?>
		<?php echo $form->error($model,'creation_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->