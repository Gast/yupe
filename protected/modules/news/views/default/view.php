<?php
$this->breadcrumbs=array(
	$this->getModule('news')->getCategory() => array(''),
	Yii::t('news','Новости')=>array('admin'),
	$model->title,
);

$this->menu=array(
	array('label'=>Yii::t('news','Добавить новость'), 'url'=>array('create')),
	array('label'=>Yii::t('news','Список новостей'), 'url'=>array('index')),	
	array('label'=>Yii::t('news','Редактировать новость'), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>Yii::t('news','Удалить новость'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('news','Управление новостями'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('news','Просмотр новости');?> "<?php echo $model->title; ?>"</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'creationDate',
		'changeDate',
		'date',
		'title',
		'alias',
		'shortText',
		'fullText',
		 array(
			'name'  => 'userId',
			'value' => $model->user->getFullName()
		 ),		 
		array(
			'name'  => 'status',
			'value' => $model->getStatus() 
		 ),
		array(
			'name'  => 'isProtected',
			'value' => $model->getProtectedStatus() 
		 ),
		
	),
)); ?>