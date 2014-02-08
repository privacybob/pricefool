<?php

/**
 * This is the model class for table "user_follower".
 *
 * The followings are the available columns in table 'user_follower':
 * @property integer $follower_id
 * @property integer $following_id
 * @property string $creation_date
 *
 * The followings are the available model relations:
 * @property User $following
 * @property User $follower
 */
class UserFollower extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user_follower}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('follower_id, following_id', 'required'),
			array('follower_id, following_id', 'numerical', 'integerOnly'=>true),
			array('creation_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('follower_id, following_id, creation_date', 'safe', 'on'=>'search'),
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
			'following' => array(self::BELONGS_TO, 'User', 'following_id'),
			'follower' => array(self::BELONGS_TO, 'User', 'follower_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
            'follower_id' => Yii::t('user_follower', 'Follower'),
            'following_id' => Yii::t('user_follower', 'Following'),
            'creation_date' => Yii::t('user_follower', 'Creation Date'),
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

		$criteria->compare('follower_id',$this->follower_id);
		$criteria->compare('following_id',$this->following_id);
		$criteria->compare('creation_date',$this->creation_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserFollower the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
