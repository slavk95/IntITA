<?php
/* @var $this CoursemanageController */
/* @var $model Course */

$this->breadcrumbs=array(
    Yii::t("coursemanage", "0508")=>array('index'),
	$model->course_ID,
);

$this->menu=array(
	array('label'=>Yii::t("coursemanage", "0510"), 'url'=>array('index')),
	array('label'=>Yii::t("coursemanage", "0511"), 'url'=>array('create')),
	array('label'=>Yii::t("coursemanage", "0524"), 'url'=>array('update', 'id'=>$model->course_ID)),
	array('label'=>Yii::t("coursemanage", "0525"), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->course_ID),'confirm'=>Yii::t("coursemanage", "0518"))),
	array('label'=>Yii::t("coursemanage", "0512"), 'url'=>array('admin')),
);
?>

<h1>Курс <?php echo CourseHelper::getCourseName($model->course_ID); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'course_ID',
		'language',
		'title_ua',
        'title_ru',
        'title_en',
		'level',
		'start',
		'status',
		'course_price',
		'for_whom_ua',
		'what_you_learn_ua',
		'what_you_get_ua',
        'for_whom_ru',
        'what_you_learn_ru',
        'what_you_get_ru',
        'for_whom_en',
        'what_you_learn_en',
        'what_you_get_en',
		'course_img',
	),
)); ?>
