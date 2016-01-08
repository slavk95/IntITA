<link type="text/css" rel="stylesheet" href="<?php echo StaticFilesHelper::fullPathTo('css', 'access.css'); ?>" />
    <br>
<div class="row">
    <?php
    $this->widget('zii.widgets.grid.CGridView', array(
        'id' => 'freeLecturesGrid',
        'dataProvider' => $model->search(),
        'filter' => $model,
        'summaryText' => '',
        'pager' => array(
            'firstPageLabel' => '&#171;&#171;',
            'lastPageLabel' => '&#187;&#187;',
            'prevPageLabel' => '&#171;',
            'nextPageLabel' => '&#187;',
            'header' => '',
            'cssFile' => StaticFilesHelper::fullPathTo('css', 'pager.css'),
        ),
        'columns' => array(
            array(
                'name' => 'ModuleTitle',
                'header' => 'Модуль',
                'type' => 'raw',
                'value' => '($data->idModule)? $data->ModuleTitle->title_ua : ""',
                'sortable' => true,
                'htmlOptions' => array('class' => 'titleModule'),
            ),
            array(
                'name' => 'order',
                'filter' => false,
                'type' => 'raw',
                'value' => '$data->order',
            ),
            array(
                'name' => 'title_ua',
                'type' => 'raw',
                'value' => '$data->title_ua',
                'htmlOptions' => array('class' => 'titleLecture'),
            ),
            array(
                'name' => 'idType',
                'type' => 'raw',
                'value' => 'Lecture::getLectureTypeTitle($data->idType)',
            ),
            array(
                'name' => 'isFree',
                'type' => 'raw',
                'value' => '$data->isFree',
            ),
            array(
                'class' => 'CButtonColumn',
                'header' => 'Флажок',
                'template' => '{free} {paid}',
                'buttons' => array
                (
                    'free' => array
                    (
                        'label' => 'Безкоштовно',
                        'url' => 'Yii::app()->createUrl("/_teacher/_admin/permissions/setFreeLessons", array("id"=>$data->id))',
                        'imageUrl' => StaticFilesHelper::createPath('image', 'editor', 'free.png'),
                        'click' => "function(){
                        $.fn.yiiGridView.update('freeLecturesGrid', {
                            type:'POST',
                            url:$(this).attr('href'),
                            success:function(data) {
                        $.fn.yiiGridView.update('freeLecturesGrid');
                        }
                        })
                        return false;
                    }
                    ",
                    ),
                    'paid' => array
                    (
                        'label' => 'Платний',
                        'url' => 'Yii::app()->createUrl("/_teacher/_admin/permissions/setPaidLessons", array("id"=>$data->id))',
                        'imageUrl' => StaticFilesHelper::createPath('image', 'editor', 'paid.png'),
                        'click' => "function(){
                        $.fn.yiiGridView.update('freeLecturesGrid', {
                            type:'POST',
                            url:$(this).attr('href'),
                            success:function(data) {
                        $.fn.yiiGridView.update('freeLecturesGrid');
                        }
                        })
                        return false;
                    }
                    ",
                    ),
                ),
            ),
        ),
    ));
    ?>
</div>