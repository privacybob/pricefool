<?php

/**
 * This is the model class for table "merchant".
 *
 * The followings are the available columns in table 'merchant':
 * @property integer $id
 * @property string $name
 * @property integer $image_id
 * @property string $homepage
 * @property string $description
 * @property integer $total_products
 * @property integer $total_categories
 * @property integer $total_reviews
 * @property integer $rating
 * @property string $address
 * @property string $sales_phone
 * @property string $sales_fax
 * @property string $support_phone
 * @property integer $status
 * @property string $creation_date
 *
 * The followings are the available model relations:
 * @property Media $image
 * @property MerchantReview[] $merchantReviews
 * @property ProductMerchant[] $productMerchants
 */
class Merchant extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{merchant}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, homepage', 'required'),
			array('image_id, total_products, total_categories, total_reviews, rating, status', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>80),
			array('homepage, address', 'length', 'max'=>100),
			array('description', 'length', 'max'=>300),
			array('sales_phone, sales_fax, support_phone', 'length', 'max'=>10),
			array('creation_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, image_id, homepage, description, total_products, total_categories, total_reviews, rating, address, sales_phone, sales_fax, support_phone, status, creation_date', 'safe', 'on'=>'search'),
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
			'image' => array(self::BELONGS_TO, 'Media', 'image_id'),
			'merchantReviews' => array(self::HAS_MANY, 'MerchantReview', 'merchant_id'),
			'productMerchants' => array(self::HAS_MANY, 'ProductMerchant', 'merchant_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
            'id' => Yii::t('merchant', 'ID'),
            'name' => Yii::t('merchant', 'Name'),
            'image_id' => Yii::t('merchant', 'Image'),
            'homepage' => Yii::t('merchant', 'Homepage'),
            'description' => Yii::t('merchant', 'Description'),
            'total_products' => Yii::t('merchant', 'Total Products'),
            'total_categories' => Yii::t('merchant', 'Total Categories'),
            'total_reviews' => Yii::t('merchant', 'Total Reviews'),
            'rating' => Yii::t('merchant', 'Rating'),
            'address' => Yii::t('merchant', 'Address'),
            'sales_phone' => Yii::t('merchant', 'Sales Phone'),
            'sales_fax' => Yii::t('merchant', 'Sales Fax'),
            'support_phone' => Yii::t('merchant', 'Support Phone'),
            'status' => Yii::t('merchant', 'Status'),
            'creation_date' => Yii::t('merchant', 'Creation Date'),
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('image_id',$this->image_id);
		$criteria->compare('homepage',$this->homepage,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('total_products',$this->total_products);
		$criteria->compare('total_categories',$this->total_categories);
		$criteria->compare('total_reviews',$this->total_reviews);
		$criteria->compare('rating',$this->rating);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('sales_phone',$this->sales_phone,true);
		$criteria->compare('sales_fax',$this->sales_fax,true);
		$criteria->compare('support_phone',$this->support_phone,true);
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
	 * @return Merchant the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
