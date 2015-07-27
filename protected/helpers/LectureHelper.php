<?php
/**
 * Created by PhpStorm.
 * User: Ivanna
 * Date: 16.07.2015
 * Time: 18:42
 */

class LectureHelper {

    public static function getTaskId($idBlock){
        //if (Task::model()->exists('condition=:idBlock', array(':idBlock' => $idBlock))){
        $assignment = Task::model()->findByAttributes(array('condition' => $idBlock))->assignment;
            return ($assignment)?$assignment:false;
//        } else {
//            return false;
//        }
    }

    public static function getTaskLang($idBlock){
        $assignment = Task::model()->findByAttributes(array('condition' => $idBlock))->language;
        return ($assignment)?$assignment:false;
    }

    public static function getTaskIcon($user, $idBlock, $editMode){
        if ($editMode || $user == 0){
            return StaticFilesHelper::createPath('image', 'lecture', 'task.png');
        } else {
            $idTask = Task::model()->findByAttributes(array('condition' => $idBlock))->id;
            if (TaskMarks::isTaskDone($user, $idTask)){
                return StaticFilesHelper::createPath('image', 'lecture', 'taskDone.png');
            } else {
                return StaticFilesHelper::createPath('image', 'lecture', 'task.png');
            }
        }
    }

    public static function getTestIcon($user, $idBlock, $editMode){
        if ($editMode || Yii::app()->user->isGuest){
            return StaticFilesHelper::createPath('image', 'lecture', 'task.png');
        } else {
            $idTest = Tests::model()->findByAttributes(array('block_element' => $idBlock))->id;
            if (TestsMarks::isTestDone($user, $idTest)){
                return StaticFilesHelper::createPath('image', 'lecture', 'taskDone.png');
            } else {
                return StaticFilesHelper::createPath('image', 'lecture', 'task.png');
            }
        }
    }

    public static function isNextLectureAvailable($idUser, $idLecture){
        $finalTask = LectureHelper::getFinalLectureTask($idLecture);
        if ($finalTask != 0) {
            $typeFinalTask = LectureElement::model()->findByPk($finalTask)->id_type;

            $idTask = Task::model()->findByAttributes(array('condition' => $finalTask))->id;

            $result = false;
            switch ($typeFinalTask) {
                case '6':
                    $result = TaskMarks::isTaskDone($idUser, $idTask);
                    break;
                case '13':
                    $result = TestsMarks::isTestDone($idUser, $idTask);
                    break;
            }
            return $result;
        } else{
            return false;
        }
    }

    public static function getFinalLectureTask($idLecture){
        $finalTask = 0;
        if (LectureElement::model()->exists('(id_type = 6 or id_type = 13) and id_lecture=:id_lecture', array(':id_lecture' => $idLecture))){
            $criteria = new CDbCriteria();
            $criteria->addCondition('(id_type=6 or id_type=13) and id_lecture='.$idLecture);
            $criteria->limit = 1;
            $criteria->order = 'block_order';

            $finalTask = LectureElement::model()->find($criteria);

            return $finalTask->id_block;
        }else{
            return 0;
        }

    }
}