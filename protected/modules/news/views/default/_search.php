<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'creationDate'); ?>
		<?php echo $form->textField($model,'creationDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'changeDate'); ?>
		<?php echo $form->textField($model,'changeDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alias'); ?>
		<?php echo $form->textField($model,'alias',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shortText'); ?>
		<?php echo $form->textField($model,'shortText',array('size'=>60,'maxlength'=>400)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fullText'); ?>
		<?php echo $form->textArea($model,'fullText',array('rows'=>6, 'cols'=>50)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',$model->getStatusList()); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isProtected'); ?>
		<?php echo $form->checkBox($model,'isProtected',$model->getProtectedStatusList()); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton(Yii::t('news','Поиск')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->