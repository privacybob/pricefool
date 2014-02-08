<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property integer $image_id
 * @property integer $gender
 * @property string $date_of_bith
 * @property integer $receive_newsletter
 * @property string $twitter
 * @property string $facebook
 * @property string $google
 * @property string $address
 * @property string $activation_code
 * @property string $reset_password_code
 * @property integer $status
 * @property string $creation_date
 *
 * The followings are the available model relations:
 * @property MerchantReview[] $merchantReviews
 * @property Reviews[] $reviews
 * @property Media $image
 * @property UserFollower[] $userFollowers
 * @property UserFollower[] $userFollowers1
 * @property UserHaveit[] $userHaveits
 * @property UserInfo[] $userInfos
 * @property UserWantit[] $userWantits
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email, status', 'required'),
			array('image_id, gender, receive_newsletter, status', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>30),
			array('password, email', 'length', 'max'=>80),
			array('first_name, last_name', 'length', 'max'=>50),
			array('twitter, facebook, google', 'length', 'max'=>200),
			array('address', 'length', 'max'=>500),
			array('activation_code, reset_password_code', 'length', 'max'=>10),
			array('date_of_bith, creation_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, email, first_name, last_name, image_id, gender, date_of_bith, receive_newsletter, twitter, facebook, google, address, activation_code, reset_password_code, status, creation_date', 'safe', 'on'=>'search'),
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
			'merchantReviews' => array(self::HAS_MANY, 'MerchantReview', 'user_id'),
			'reviews' => array(self::HAS_MANY, 'Reviews', 'user_id'),
			'image' => array(self::BELONGS_TO, 'Media', 'image_id'),
			'userFollowers' => array(self::HAS_MANY, 'UserFollower', 'following_id'),
			'userFollowers1' => array(self::HAS_MANY, 'UserFollower', 'follower_id'),
			'userHaveits' => array(self::HAS_MANY, 'UserHaveit', 'user_id'),
			'userInfos' => array(self::HAS_MANY, 'UserInfo', 'user_id'),
			'userWantits' => array(self::HAS_MANY, 'UserWantit', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
            'id' => Yii::t('user', 'ID'),
            'username' => Yii::t('user', 'Username'),
            'password' => Yii::t('user', 'Password'),
            'email' => Yii::t('user', 'Email'),
            'first_name' => Yii::t('user', 'First Name'),
            'last_name' => Yii::t('user', 'Last Name'),
            'image_id' => Yii::t('user', 'Image'),
            'gender' => Yii::t('user', 'Gender'),
            'date_of_bith' => Yii::t('user', 'Date Of Bith'),
            'receive_newsletter' => Yii::t('user', 'Receive Newsletter'),
            'twitter' => Yii::t('user', 'Twitter'),
            'facebook' => Yii::t('user', 'Facebook'),
            'google' => Yii::t('user', 'Google'),
            'address' => Yii::t('user', 'Address'),
            'activation_code' => Yii::t('user', 'Activation Code'),
            'reset_password_code' => Yii::t('user', 'Reset Password Code'),
            'status' => Yii::t('user', 'Status'),
            'creation_date' => Yii::t('user', 'Creation Date'),
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
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('image_id',$this->image_id);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('date_of_bith',$this->date_of_bith,true);
		$criteria->compare('receive_newsletter',$this->receive_newsletter);
		$criteria->compare('twitter',$this->twitter,true);
		$criteria->compare('facebook',$this->facebook,true);
		$criteria->compare('google',$this->google,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('activation_code',$this->activation_code,true);
		$criteria->compare('reset_password_code',$this->reset_password_code,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('creation_date',$this->creation_date,true);

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
