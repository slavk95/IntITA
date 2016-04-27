<label>Властивоті лекції: </label>
<table class="table">
    <tr>
        <td>Cтатус:</td>
        <td>
            <div>{{lectureData.lecture.status}}</div>
            <div class="editButtons">
                <img ng-if=lectureData ng-click=previewRevision('<?=Yii::app()->createUrl("revision/previewLectureRevision", array("idRevision" => $lectureRevision->id_revision)); ?>')
                     src="<?php echo StaticFilesHelper::createPath('image', 'editor', 'preview.png'); ?>"
                     title="Попередній перегляд"/>
                <img ng-if=lectureData.lecture.canApprove ng-click=approveRevision('<?php echo $lectureRevision->id_revision; ?>')
                     src="<?php echo StaticFilesHelper::createPath('image', 'editor', 'approve.png'); ?>"
                     title="Затвердити"/>
                <img ng-if=lectureData.lecture.canSendForApproval ng-click=sendRevision('<?php echo $lectureRevision->id_revision; ?>')
                     src="<?php echo StaticFilesHelper::createPath('image', 'editor', 'send_approve.png'); ?>"
                     title="Відправити на затвердження"/>
                <img ng-if=lectureData.lecture.canCancelSendForApproval ng-click=cancelSendRevision('<?php echo $lectureRevision->id_revision; ?>')
                     src="<?php echo StaticFilesHelper::createPath('image', 'editor', 'cancel_send.png'); ?>"
                     title="Скасувати відправку на затвердження"/>
                <img ng-if=lectureData.lecture.canCancelRevision ng-click=cancelRevision('<?php echo $lectureRevision->id_revision; ?>')
                     src="<?php echo StaticFilesHelper::createPath('image', 'editor', 'cancel_revision.png'); ?>"
                     title="Скасувати ревізію"/>
                <img ng-if=lectureData.lecture.canRejectRevision ng-click=rejectRevision('<?php echo $lectureRevision->id_revision; ?>')
                     src="<?php echo StaticFilesHelper::createPath('image', 'editor', 'reject_revision.png'); ?>"
                     title="Відхилити ревізію"/>
            </div>
        </td>
    </tr>
    <tr>
        <td>Модуль:</td>
        <td><?= Module::getModuleName($lectureRevision->id_module).' (id='.$lectureRevision->id_module.')'?></td>
    </tr>
    <tr>
        <td>Номер ревізії:</td>
        <td><?=$lectureRevision->id_revision?></td>
    </tr>
    <tr>
        <td>Назва (укр):</td>
        <td>
            <?php
            $this->widget('editable.EditableField', array(
                'type' => 'text',
                'model' => $lectureRevision->properties,
                'attribute' => 'title_ua',
                'url' => $this->createUrl('revision/XEditableEditProperties'),
                'title' => Yii::t('lecture', '0567'),
                'placement' => 'right',
            ));
            ?>
        </td>
    </tr>
    <tr>
        <td>Назва (рос):</td>
        <td>
            <?php
            $this->widget('editable.EditableField', array(
                'type' => 'text',
                'model' => $lectureRevision->properties,
                'attribute' => 'title_ru',
                'url' => $this->createUrl('revision/XEditableEditProperties'),
                'title' => Yii::t('lecture', '0567'),
                'placement' => 'right',
            ));
            ?>
        </td>
    </tr>
    <tr>
        <td>Назва (англ):</td>
        <td>
            <?php
            $this->widget('editable.EditableField', array(
                'type' => 'text',
                'model' => $lectureRevision->properties,
                'attribute' => 'title_en',
                'url' => $this->createUrl('revision/XEditableEditProperties'),
                'title' => Yii::t('lecture', '0567'),
                'placement' => 'right',
            ));
            ?>
        </td>
    </tr>
    <tr>
        <td>Автор:</td>
        <td><?=StudentReg::getUserNamePayment($lectureRevision->properties->id_user_created).' (id='.$lectureRevision->properties->id_user_created.')'?></td>
    </tr>
</table>