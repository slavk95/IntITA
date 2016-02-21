<?php
/**
 * Created by PhpStorm.
 * User: Ivanna
 * Date: 19.05.2015
 * Time: 16:58
 */
?>
<div id="blockForm">
    <form name='addCKEBlock' id="addBlockForm" action="<?php echo Yii::app()->createUrl('lesson/createNewBlockCKE'); ?>" method="post">
        <input name="idLecture" value="<?php echo $lecture->id; ?>" type="hidden">
        <input name="type" value="" id="blockType" type="hidden">
        <input name="page" value="<?php echo $pageOrder; ?>" id="page" type="hidden">
        <textarea id="CKE" ng-cloak ckeditor="editorOptions" name="editorAdd" ng-model="CkeAdd" required></textarea>
        <input type="submit" value="<?php echo Yii::t('lecture', '0712'); ?>" id="addBlockSubmit"
               onclick="saveNewBlock();" ng-disabled=addCKEBlock.editorAdd.$error.required >
    </form>
    <button id="cancelButton" onclick="hideFormCKE('addBlock')" >
        <?php echo Yii::t('course', '0368') ?>
    </button>
</div>
<div id="blockFormCode">
    <form name='addCKEBlockCode' id="addBlockForm" action="<?php echo Yii::app()->createUrl('lesson/createNewBlockCKE'); ?>" method="post">
        <input name="idLecture" value="<?php echo $lecture->id; ?>" type="hidden">
        <input name="type" value="" id="blockTypeCode" type="hidden">
        <input name="page" value="<?php echo $pageOrder; ?>" id="page" type="hidden">
        <textarea id="CKECode" ng-cloak ckeditor="editorOptionsCode" name="editorAdd" ng-model="CkeAddCode" required></textarea>
        <input type="submit" value="<?php echo Yii::t('lecture', '0712'); ?>" id="addBlockSubmit"
               onclick="saveNewBlock();" ng-disabled=addCKEBlockCode.editorAdd.$error.required >
    </form>
    <button id="cancelButton" onclick="hideFormCKE('addBlock')" >
        <?php echo Yii::t('course', '0368') ?>
    </button>
</div>