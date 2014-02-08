<?php

/**
 * This is the model class for table "merchant_review".
 *
 * The followings are the available columns in table 'merchant_review':
 * @property integer $id
 * @property integer $merchant_id
 * @property integer $general_rating
 * @property integer $order_rating
 * @property integer $support
 * @property integer $shipping
 * @property string $order_number
 * @property string $review
 * @property integer $user_id
 * @property string $creation_date
 *
 * The followings are the available model relations:
 * @property Merchant $merchant
 * @property User $user
 */
class MerchantReview extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{merchant_review}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('merchant_id, general_rating, order_rating, support, shipping, order_number, review, user_id', 'required'),
			array('merchant_id, general_rating, order_rating, support, shipping, user_id', 'numerical', 'integerOnly'=>true),
			array('order_number', 'length', 'max'=>20),
			array('review', 'length', 'max'=>6000),
			array('creation_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, merchant_id, general_rating, order_rating, support, shipping, order_number, review, user_id, creation_date', 'safe', 'on'=>'search'),
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
			'merchant' => array(self::BELONGS_TO, 'Merchant', 'merchant_id'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
            'id' => Yii::t('merchant_review', 'ID'),
            'merchant_id' => Yii::t('merchant_review', 'Merchant'),
            'general_rating' => Yii::t('merchant_review', 'General Rating'),
            'order_rating' => Yii::t('merchant_review', 'Order Rating'),
            'support' => Yii::t('merchant_review', 'Support'),
            'shipping' => Yii::t('merchant_review', 'Shipping'),
            'order_number' => Yii::t('merchant_review', 'Order Number'),
            'review' => Yii::t('merchant_review', 'Review'),
            'user_id' => Yii::t('merchant_review', 'User'),
            'creation_date' => Yii::t('merchant_review', 'Creation Date'),
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
		$criteria->compare('merchant_id',$this->merchant_id);
		$criteria->compare('general_rating',$this->general_rating);
		$criteria->compare('order_rating',$this->order_rating);
		$criteria->compare('support',$this->support);
		$criteria->compare('shipping',$this->shipping);
		$criteria->compare('order_number',$this->order_number,true);
		$criteria->compare('review',$this->review,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('creation_date',$this->creation_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MerchantReview the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
