<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $userID
 * @property string $userEmail
 * @property string $userPassword
 * @property string $userHash
 * @property integer $userStatus
 * @property string $username
 * @property integer $role
 */
class User extends CActiveRecord
{
	const ROLE_AUTHOR=1;
	const ROLE_MODERATOR=3;
	const ROLE_ADMIN=5;
	const PASSWORD_EXPIRY=90;
	public $passwordSave;
	public $repeatPassword;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userEmail, userPassword, username, role', 'required'),
			array('userStatus, role', 'numerical', 'integerOnly'=>true),
			array('userEmail', 'length', 'max'=>35),
			array('userPassword', 'length', 'max'=>40),
			array('userHash', 'length', 'max'=>20),
			array('username', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('userID, userEmail, userPassword, userHash, userStatus, username, role', 'safe', 'on'=>'search'),
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
			'userID' => 'User',
			'userEmail' => 'User Email',
			'userPassword' => 'User Password',
			'userHash' => 'User Hash',
			'userStatus' => 'User Status',
			'username' => 'Username',
			'role' => 'Role',
		);
	}

	/** score password strength
	 * where score is increased based on
	 * - password length
	 * - number of unqiue chars
	 * - number of special chars
	 * - number of numbers
	 *
	 * A medium score is around 20
	 *
	 * @param type $attribute
	 * @param type $params
	 * @return boolean
	 */

	function CheckStrength($attribute,$params)
	{
		if (!empty($this->$attribute)) { // Edit 2013-06-01
			$password=$this->$attribute;
			if ( strlen( $password ) == 0 )
				$strength=-10;
			else
				$strength = 0;
			/*** get the length of the password ***/
			$length = strlen($password);
			/*** check if password is not all lower case ***/
			if(strtolower($password) != $password)
			{
				$strength += 1;
			}
			/*** check if password is not all upper case ***/
			if(strtoupper($password) == $password)
			{
				$strength += 1;
			}
			/*** check string length is 8 -15 chars ***/
			if($length >= 8 && $length <= 15)
			{
				$strength += 2;
			}
			/*** check if lenth is 16 - 35 chars ***/
			if($length >= 16 && $length <=35)
			{
				$strength += 2;
			}
			/*** check if length greater than 35 chars ***/
			if($length > 35)
			{
				$strength += 3;
			}
			/*** get the numbers in the password ***/
			preg_match_all('/[0-9]/', $password, $numbers);
			$strength += count($numbers[0]);
			/*** check for special chars ***/
			preg_match_all('/[|!@#$%&*\/=?,;.:\-_+~^\\\]/', $password, $specialchars);
			$strength += sizeof($specialchars[0]);
			/*** get the number of unique chars ***/
			$chars = str_split($password);
			$num_unique_chars = sizeof( array_unique($chars) );
			$strength += $num_unique_chars * 2;
			/*** strength is a number 1-100; ***/
			$strength = $strength > 99 ? 99 : $strength;
            //$strength = floor($strength / 10 + 1);
			if ($strength<$params['score'])
				$this->addError($attribute,"Password is too weak - try using CAPITALS, Num8er5, AND sp€c!al characters. Your score was ".$strength."/".$params['score']);
			else
				return true;
		}
	}

	public function beforeSave() {
		parent::beforeSave();
//add the password hash if it's a new record
		if ($this->isNewRecord) {
			$this->password = md5($this->passwordSave);
			$this->create_date=new CDbExpression("NOW()");
			$this->password_expiry_date=new CDbExpression("DATE_ADD(NOW(), INTERVAL ".self::PASSWORD_EXPIRY." DAY) ");
		}
		else if (!empty($this->passwordSave)&&!empty($this->repeatPassword)&&($this->passwordSave===$this->repeatPassword))
//if it's not a new password, save the password only if it not empty and the two passwords match
		{
			$this->password = md5($this->passwordSave);
			$this->password_expiry_date=new CDbExpression("DATE_ADD(NOW(), INTERVAL ".self::PASSWORD_EXPIRY." DAY) ");
		}
		return true;
	}
	/**
	 * Compare Expiry date and today's date
	 * @return type - positive number equals valid user
	 */
	public function checkExpiryDate() {
		$expDate=DateTime::createFromFormat('Y-m-d H:i:s',$this->password_expiry_date);
		$today=new DateTime("now");
		fb($today->diff($expDate)->format('%a'),"PASSWORD EXPIRY");
		return ($today->diff($expDate)->format('%a'));
	}
	/**
	 * @return array relational rules.
	 */

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
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('userID',$this->userID);
		$criteria->compare('userEmail',$this->userEmail,true);
		$criteria->compare('userPassword',$this->userPassword,true);
		$criteria->compare('userHash',$this->userHash,true);
		$criteria->compare('userStatus',$this->userStatus);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('role',$this->role);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


}
