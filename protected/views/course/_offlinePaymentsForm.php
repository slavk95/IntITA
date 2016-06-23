<?php
/* @var $model Course */
$schema = PaymentScheme::getSchema(PaymentScheme::ADVANCE, EducationForm::OFFLINE);
$price = round($schema->getSumma($model));
if($model->isReady()){
if ($price == 0 && $model->getBasePrice() != 0) {
    echo Yii::t('courses', '0147') . ' '; ?>
    <span class="colorGreen"><?= Yii::t('module', '0421'); ?></span>
    <?php
} else {
    if ($model->getBasePrice() != 0) {
        ?>
        <span class="spoilerLinks"
              onclick="paymentSpoiler('<?php echo Yii::t('course', '0819'); ?>', '<?php echo Yii::t('course', '0415'); ?>', 'Offline')">
        <span id="spoilerClickOffline"><?php echo Yii::t('course', '0819'); ?></span>
        <span id="spoilerTriangleOffline"> &#9660;</span></span>
    <?php }
    if ($price != 0) {
        ?>
        <table class="mainPay">
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                                <div class="numbers" id="numbersFirstOffline">
                                    <span
                                        class="coursePriceStatus1"><?php echo Yii::t('courses', '0322') . sprintf("%01.2f", round($model->getBasePrice() * Config::getCoeffModuleOffline(), 2)); ?></span>
                                    &nbsp
                                <span class="coursePriceStatus2">
                                    <?php echo Yii::t('courses', '0322') . sprintf("%01.2f", round($price, 2)) . " "; ?>
                                </span>
                                <span id="discount">
                                    <img style="text-align:right"
                                         src="<?php echo StaticFilesHelper::createPath('image', 'course', 'pig.png') ?>"/>
                                    (<?php echo Yii::t('courses', '0144') . ' - 30%)'; ?>
                                </span>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    <?php }
}?>
<div class="paymentsForm">
    <?php
    if ($model->isReady()) {
        $form = $this->beginWidget('CActiveForm', array(
            'action' => '#',
            'id' => 'payments-form',
            'enableAjaxValidation' => false,
        )); ?>
        <input value="<?= PaymentScheme::ADVANCE ?>" type="hidden" name="schema"/>
        <div id="rowRadio">
            <?php $this->renderPartial('schemas/_offlinePaymentScheme', array('model' => $model)); ?>
        </div>
        <?php $this->endWidget(); ?>
    <?php }
    }?>
</div>
