<? $css_version = 1; ?>
<link type="text/css" rel="stylesheet" href="<?php echo StaticFilesHelper::fullPathTo('css', 'profile.css'); ?>"/>
<?php
/* @var $this StudentregController */
/* @var $post StudentReg */
/* @var $form CActiveForm */
$this->breadcrumbs = array(Yii::t('breadcrumbs', '0054'));
?>
<script>
    basePath = '<?=Config::getBaseUrl();?>';
</script>
<div class="formStudProf">
    <div class="studProfInf">
        <table class="titleProfile">
            <tr>
                <td>
                    <h2><?php $post::getProfileRole($post->id); ?></h2>
                </td>
                <td>
                    <img src="<?php echo StaticFilesHelper::createPath('image', 'common', 'profileedit.png'); ?>"/>
                </td>
                <td>
                    <a href="<?php echo Yii::app()->createUrl('studentreg/edit'); ?>"><?php echo Yii::t('profile', '0096'); ?></a>
                </td>
            </tr>
        </table>
        <img class='avatarimg' src="<?php echo StaticFilesHelper::createPath('image', 'avatars', $post->avatar); ?>"/>

        <table class='profileInfo'>
            <tr>
                <td>
                    <a href="<?php echo Yii::app()->createUrl('/_teacher/cabinet/index'); ?>">Мій кабінет</a>
                    <h1><?php echo $post->nickname; ?></h1>
                    <h1><?php echo $post->firstName; ?></h1>
                    <h1><?php echo $post->secondName; ?></h1>

                    <div class="aboutInfo">
                        <p>
                            <?php echo $post::getAdressYears($post->birthday, $post->address); ?>
                        </p>
                    </div>
                    <div class="aboutInfo">
                        <p><?php echo StudentReg::getUserData($post->aboutMy, '0100'); ?></p>
                    </div>
                    <div class="aboutInfo">
                        <p><?php echo StudentReg::getUserData($post->email, '0101'); ?></p>
                    </div>
                    <div class="aboutInfo">
                        <p><?php echo StudentReg::getUserData($post->phone, '0102'); ?></p>
                    </div>
                    <div class="aboutInfo">
                        <p><?php echo StudentReg::getUserData($post->education, '0103'); ?></p>
                    </div>
                    <div class="aboutInfo">
                        <p><?php $post::getInterests($post->interests); ?></p>
                    </div>
                    <div class="aboutInfo">
                        <p><?php echo StudentReg::getUserData($post->aboutUs, '0105'); ?></p>
                    </div>
                    <div class="aboutInfo">
                        <p><?php echo $post::getEducform($post->educform); ?></p>
                    </div>
                    <div class="aboutInfo">
                        <?php echo StudentReg::getNetwork($post); ?>
                    </div>
                    <div class="aboutInfo">
                        <?php echo $post->getLink('Facebook'); ?>
                    </div>
                    <div class="aboutInfo">
                        <?php echo $post->getLink('Googleplus'); ?>
                    </div>
                    <div class="aboutInfo">
                        <?php echo $post->getLink('Linkedin'); ?>
                    </div>
                    <div class="aboutInfo">
                        <?php echo $post->getLink('Vkontakte'); ?>
                    </div>
                    <div class="aboutInfo">
                        <?php echo $post->getLink('Twitter'); ?>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="profileActivity">
        <div class="tabs">
            <ul>
                <li>
                    <?php echo Yii::t('profile', '0108'); ?>
                </li>
                <li>
                    <?php echo Yii::t('profile', '0109'); ?>
                </li>
                <li>
                    <?php echo Yii::t('profile', '0113'); ?>
                </li>
            </ul>
            <hr class="lineUnderTab">
            <ul>
                <li>
                    <?php echo Yii::t('profile', '0115'); ?>
                </li>
                <li>
                    <?php echo Yii::t('profile', '0116'); ?>
                </li>
                <li>
                    <?php echo Yii::t('profile', '0117'); ?>
                </li>
            </ul>
            <hr class="lineUnderTab">
            <div class="tabsContent">
                <div id="myCourse">
                    <?php $this->renderPartial('_mycourse'); ?>
                </div>
                <div id="timetable">
                    <?php $this->renderPartial('_timetable', array('dataProvider' => $dataProvider, 'user' => $post)); ?>
                </div>
                <div id="myRatting">
                    <?php $this->renderPartial('_myRatting'); ?>
                </div>
                <div id="mylettersSend">
                    <?php $this->renderPartial('_mylettersSend', array('letter' => $letter, 'sentLettersProvider' => $sentLettersProvider, 'receivedLettersProvider' => $receivedLettersProvider)); ?>
                </div>
                <div id="myMark">
                    <p class="tabHeader"><?php echo Yii::t('profile', '0116'); ?></p>
                    <?php
                    $this->widget('zii.widgets.CListView', array(
                        'dataProvider' => $markProvider,
                        'itemView' => '_myMark',
                        'template' => '{items}{pager}',
                        'emptyText' => Yii::t('profile', '0548'),
                        'pager' => array(
                            'firstPageLabel' => '<<',
                            'lastPageLabel' => '>>',
                            'prevPageLabel' => '<',
                            'nextPageLabel' => '>',
                            'header' => '',
                        ),
                    ));
                    ?>
                </div>
                <div id="finances">
                    <?php $this->renderPartial('_finances', array('paymentsCourses' => $paymentsCourses,
                        'paymentsModules' => $paymentsModules,
                        'course' => $course,
                        'module' => $module,
                        'schema' => $schema,
                    )); ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- form -->
<!-- Scripts for open tabs-->
<script type="text/javascript" src="<?php echo Config::getBaseUrl(); ?>/scripts/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo Config::getBaseUrl(); ?>/scripts/openProfileTab.js"></script>
<script type="text/javascript" src="<?php echo Config::getBaseUrl(); ?>/scripts/openTab.js"></script>
<script type="text/javascript">
    lang = '<?php if (CommonHelper::getLanguage() == 'ua') echo 'uk'; else echo CommonHelper::getLanguage();?>';
</script>
<script src="<?php echo StaticFilesHelper::fullPathTo('angular', 'js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo StaticFilesHelper::fullPathTo('angular', 'js/bootbox.min.js'); ?>"></script>
<script src="<?php echo StaticFilesHelper::fullPathTo('js', 'profileDialogs.js'); ?>"></script>
<link type='text/css' rel='stylesheet'
      href="<?php echo StaticFilesHelper::fullPathTo('angular', 'bower_components/angular-bootstrap/bootstrap.min.css'); ?>">
<!-- Scripts for open tabs -->