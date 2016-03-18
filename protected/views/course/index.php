<? $css_version = 1; ?>
<?php
/* @var $model Course*/
?>
    <link type="text/css" rel="stylesheet" href="<?php echo StaticFilesHelper::fullPathTo('css', 'course.css'); ?>"/>
    <script src="<?php echo StaticFilesHelper::fullPathTo('angular', 'js/main_app/controllers/moduleListCtrl.js'); ?>"></script>
    <script type="text/javascript">
        idCourse = <?php echo $model->course_ID;?>;
        lang = '<?php if(CommonHelper::getLanguage()=='ua') echo 'uk'; else echo CommonHelper::getLanguage();?>';
    </script>
<?php
$this->breadcrumbs = array(
    Yii::t('breadcrumbs', '0050') => Config::getBaseUrl() . "/courses", CHtml::decode($model->getTitle()),
);
?>

<div class="courseBlock">
    <div class="courseTitle">
        <h1>
            <?php echo $model->getTitle(); ?>
        </h1>
    </div>
    <div class="courseShortInfo">
        <?php $this->renderPartial('_courseShortInfo', array('model' => $model)); ?>
        <br>

        <div class="courseTeachers">
            <?php $this->renderPartial('_courseInfo', array('model' => $model)); ?>
        </div>
        <?php echo $this->renderPartial('_modulesList', array(
            'dataProvider' => $dataProvider,
            'canEdit' => $canEdit,
            'model' => $model)); ?>
    </div>
</div>
<?php if ($canEdit) { ?>
    <script src="<?php echo StaticFilesHelper::fullPathTo('js', 'titleValidation.js'); ?>"></script>
    <script src="<?php echo StaticFilesHelper::fullPathTo('angular', 'js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo StaticFilesHelper::fullPathTo('angular', 'js/bootbox.min.js'); ?>"></script>
    <link type='text/css' rel='stylesheet' href="<?php echo StaticFilesHelper::fullPathTo('angular', 'bower_components/angular-bootstrap/bootstrap.min.css'); ?>">
<?php } ?>
<script src="<?php echo StaticFilesHelper::fullPathTo('js', 'spoilerPay.js'); ?>"></script>
<?php
$this->renderPartial('/site/_shareMetaTag', array(
    'url' => Yii::app()->createAbsoluteUrl(Yii::app()->request->url),
    'title' => $model->getTitle(). '. ' . Yii::t('sharing', '0643'),
    'description' => Yii::t('sharing', '0644'),
));
?>