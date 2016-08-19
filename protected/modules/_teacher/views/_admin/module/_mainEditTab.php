<?php
/**
 * @var $model Module
 * @var $scenario string
 */
?>
<br>
<div class="formMargin">
    <div class="form-group">
        <?php echo $form->labelEx($model, 'module_number'); ?>
        <?php echo $form->textField($model, 'module_number', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control', 'disabled'=>Yii::app()->user->model->isAdmin()?false:true)); ?>
        <?php echo $form->error($model, 'module_number'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'alias'); ?>
        <?php echo $form->textField($model, 'alias', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'alias'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'language'); ?>
        <?php echo $form->dropDownList($model, 'language', array('ua' => 'українською', 'ru' => 'російською',
            'en' => 'англійською'), array('class' => 'form-control', 'disabled'=>$model->isNewRecord?false:true)); ?>
        <?php echo $form->error($model, 'language'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'level'); ?>
        <?php echo $form->dropDownList($model, 'level', CHtml::listData(Level::model()->findAll(), 'id', 'title_ua'),
            array('options' => array('1' => array('selected' => true)), 'empty' => 'Виберіть рівень', 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'level'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'status'); ?>
        <?php echo $form->dropDownList($model, 'status', array(
            '0' => Yii::t('coursemanage', '0396'), '1' => Yii::t('coursemanage', '0397')),
            array('options' => array('0' => array('selected' => true)), 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'status'); ?>
    </div>

    <div class="form-group">
        <div data-toggle="tooltip" data-placement="top" title="Ціна використовується при розрахунку ціни курса (якщо не вказана ціна модуля в конкретному курсі - вкладка
        <У курсах>) і при розрахунку вартості самостійного модуля.">
            <?php echo $form->labelEx($model, 'module_price'); ?>
            <?php echo $form->textField($model, 'module_price', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'module_price'); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'hours_in_day'); ?>
        <?php echo $form->textField($model, 'hours_in_day', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'hours_in_day'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'days_in_week'); ?>
        <?php echo $form->textField($model, 'days_in_week', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'days_in_week'); ?>
    </div>
    <div <?php if($model->isNewRecord) echo "ng-controller=createModuleCtrl"; else echo "ng-controller=updateModuleCtrl"; ?>>
        <div ng-show="tagsLoaded">
            <?php if(!$model->isNewRecord){ ?>
                <input type="hidden" ng-init="moduleId='<?php echo $model->module_ID; ?>'" ng-model="moduleId">
            <?php } ?>
            <label>Додайте до модуля теги, котрі відповідають його категорії</label>
            <div class="tagCloud">
                <ul class="select-search-list">
                    <li ng-repeat="tag in tags track by $index">
                        <span ng-click="addTag(tag,$index)">{{tag.tag}}<span class="close select-search-list-item_selection-remove">+</span></span>
                    </li>
                </ul>
            </div>
            <label>Категорії модуля:</label>
            <div class="tagCloud">
                <ul class="select-search-list">
                    <li ng-repeat="moduleTag in moduleTags track by $index">
                <span ng-click="removeTag(moduleTag,$index)">{{moduleTag.tag}}<span class="close select-search-list-item_selection-remove">×</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'module_img'); ?>
        <?php echo $form->fileField($model, 'module_img', array('onchange' => "CheckFile(this)")); ?>
        <div class="errorMessage" style="display: none"></div>
    </div>
    <div class="form-group">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Створити' : 'Зберегти',
            array(
                'class' => 'btn btn-primary',
                'id' => 'submitButton',
            )); ?>
    </div>
</div>