<?php

class RevisionQuizUidUpdateBehavior extends CActiveRecordBehavior{

    const QUIZ_UPDATED = 1;

    public function attach($owner) {
        parent::attach($owner); // TODO: Change the autogenerated stub
    }

    private function isUpdated(){
        return $this->owner->updated == self::QUIZ_UPDATED;
    }

    private function setUpdated() {
        $this->owner->updated = self::QUIZ_UPDATED;
        $this->owner->uid = RevisionQuizFactory::cloneQuizUID($this->owner->uid);
    }

    public function beforeSave() {
        if (!$this->owner->isNewRecord && !$this->isUpdated()) {
            $this->setUpdated();
        }
        return true;
    }
}