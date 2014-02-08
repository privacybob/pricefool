<?php
/* @var $this MerchantController */
/* @var $model Merchant */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'merchant-form',
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
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_id'); ?>
		<?php echo $form->textField($model,'image_id'); ?>
		<?php echo $form->error($model,'image_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'homepage'); ?>
		<?php echo $form->textField($model,'homepage',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'homepage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_products'); ?>
		<?php echo $form->textField($model,'total_products'); ?>
		<?php echo $form->error($model,'total_products'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_categories'); ?>
		<?php echo $form->textField($model,'total_categories'); ?>
		<?php echo $form->error($model,'total_categories'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_reviews'); ?>
		<?php echo $form->textField($model,'total_reviews'); ?>
		<?php echo $form->error($model,'total_reviews'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rating'); ?>
		<?php echo $form->textField($model,'rating'); ?>
		<?php echo $form->error($model,'rating'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sales_phone'); ?>
		<?php echo $form->textField($model,'sales_phone',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sales_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sales_fax'); ?>
		<?php echo $form->textField($model,'sales_fax',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sales_fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'support_phone'); ?>
		<?php echo $form->textField($model,'support_phone',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'support_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
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