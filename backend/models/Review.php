<?php

/**
 * This is the model class for table "{{review}}".
 *
 * The followings are the available columns in table '{{review}}':
 * @property integer $id
 * @property integer $product_id
 * @property integer $status
 * @property integer $rating
 * @property string $name
 * @property string $review
 * @property integer $user_id
 * @property integer $useful_count
 * @property string $creation_date
 *
 * The followings are the available model relations:
 * @property Product $product
 * @property User $user
 */
class Review extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{review}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id, status, rating, user_id, useful_count', 'required'),
			array('product_id, status, rating, user_id, useful_count', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			array('review', 'length', 'max'=>300),
			array('creation_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, product_id, status, rating, name, review, user_id, useful_count, creation_date', 'safe', 'on'=>'search'),
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
			'product' => array(self::BELONGS_TO, 'Product', 'product_id'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
            'id' => Yii::t('{{review}}', 'ID'),
            'product_id' => Yii::t('{{review}}', 'Product'),
            'status' => Yii::t('{{review}}', 'Status'),
            'rating' => Yii::t('{{review}}', 'Rating'),
            'name' => Yii::t('{{review}}', 'Name'),
            'review' => Yii::t('{{review}}', 'Review'),
            'user_id' => Yii::t('{{review}}', 'User'),
            'useful_count' => Yii::t('{{review}}', 'Useful Count'),
            'creation_date' => Yii::t('{{review}}', 'Creation Date'),
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
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('status',$this->status);
		$criteria->compare('rating',$this->rating);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('review',$this->review,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('useful_count',$this->useful_count);
		$criteria->compare('creation_date',$this->creation_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Review the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
