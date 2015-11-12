<?php
/* @var $this OperationController */
/* @var $model Operation */
/* @var $form CActiveForm */
$listValues = OperationType::getTypesList();
?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/formattedForm.css"/>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'operation-form',
    'htmlOptions' => array(
        'class' => 'formatted-form',
        'enctype' => 'multipart/form-data',
        'method' => 'POST',
    ),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля з <span class="required">*</span> обов'язкові.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'type_id'); ?>
        <?php echo $form->dropDownList($model, 'type_id', $listValues);?>
        <?php echo $form->error($model,'type_id'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'invoice_id'); ?>
		<?php echo $form->textField($model,'invoice_id'); ?>
		<?php echo $form->error($model,'invoice_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'summa'); ?>
		<?php echo $form->textField($model,'summa',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'summa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Додати' : 'Зберегти'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->