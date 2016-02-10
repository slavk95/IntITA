<?php

/**
 * This is the model class for table "plain_task_marks".
 *
 * The followings are the available columns in table 'plain_task_marks':
 * @property integer $id
 * @property integer $id_user
 * @property integer $id_answer
 * @property integer $mark
 * @property string $comment
 * @property string $time
 */
class PlainTaskMarks extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'plain_task_marks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user, id_answer, mark', 'required'),
			array('id_user, id_answer, mark', 'numerical', 'integerOnly'=>true),
			array('comment', 'length', 'max'=>100),
			// The following rule is used by search().
			array('id, id_user, id_answer, mark, comment, time', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_user' => 'Id User',
			'id_answer' => 'Id Plain Task Answer',
			'mark' => 'Mark',
			'comment' => 'Comment',
			'time' => 'Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('id_answer',$this->id_answer);
		$criteria->compare('mark',$this->mark);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('time',$this->time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PlainTaskMarks the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public static function isTaskDone($user, $idTask){
		return PlainTaskAnswer::model()->exists('id_student =:user and id_plain_task =:task',
			array(':user' => $user, ':task' => $idTask));
    }

    public static function taskTime($user, $answer){
        if( PlainTaskMarks::model()->exists('id_user =:user and id_answer =:answer and mark = 1',
            array(':user' => $user, ':answer' => $answer))){
            return PlainTaskMarks::model()->findByAttributes(array('id_user' => $user,'id_answer' => $answer,'mark' => 1))->time;
        }else return false;
    }

    public static function saveMark($answerId, $mark, $comment, $userId)
    {
        $plainMark = new PlainTaskMarks();

        $plainMark->comment = $comment;
        $plainMark->id_answer = (int)$answerId;
        $plainMark->id_user = (int)$userId;
        $plainMark->mark = (int)$mark;

        if($plainMark->save())
            return true;
        else return false;

    }
}
