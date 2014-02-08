<?php

/**
 * This is the model class for table "product_merchant".
 *
 * The followings are the available columns in table 'product_merchant':
 * @property integer $id
 * @property integer $product_id
 * @property integer $merchant_id
 * @property string $availability
 * @property string $shipping_cost
 * @property string $price
 * @property string $url
 * @property string $pay_on_delivery_cost
 * @property string $creation_date
 *
 * The followings are the available model relations:
 * @property Product $product
 * @property Merchant $merchant
 */
class ProductMerchant extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{product_merchant}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id, merchant_id, price, url', 'required'),
			array('product_id, merchant_id', 'numerical', 'integerOnly'=>true),
			array('availability', 'length', 'max'=>20),
			array('shipping_cost', 'length', 'max'=>80),
			array('price, pay_on_delivery_cost', 'length', 'max'=>10),
			array('url', 'length', 'max'=>800),
			array('creation_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, product_id, merchant_id, availability, shipping_cost, price, url, pay_on_delivery_cost, creation_date', 'safe', 'on'=>'search'),
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
			'merchant' => array(self::BELONGS_TO, 'Merchant', 'merchant_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
            'id' => Yii::t('product_merchant', 'ID'),
            'product_id' => Yii::t('product_merchant', 'Product'),
            'merchant_id' => Yii::t('product_merchant', 'Merchant'),
            'availability' => Yii::t('product_merchant', 'Availability'),
            'shipping_cost' => Yii::t('product_merchant', 'Shipping Cost'),
            'price' => Yii::t('product_merchant', 'Price'),
            'url' => Yii::t('product_merchant', 'Url'),
            'pay_on_delivery_cost' => Yii::t('product_merchant', 'Pay On Delivery Cost'),
            'creation_date' => Yii::t('product_merchant', 'Creation Date'),
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
		$criteria->compare('merchant_id',$this->merchant_id);
		$criteria->compare('availability',$this->availability,true);
		$criteria->compare('shipping_cost',$this->shipping_cost,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('pay_on_delivery_cost',$this->pay_on_delivery_cost,true);
		$criteria->compare('creation_date',$this->creation_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductMerchant the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
