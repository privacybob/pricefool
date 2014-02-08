<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property integer $image_id
 * @property string $lowest_price
 * @property string $highest_price
 * @property integer $total_shops
 * @property integer $manufacturer_id
 * @property integer $views
 * @property integer $category_id
 * @property string $EAN
 * @property integer $total_want
 * @property integer $total_have
 * @property integer $is_adult
 * @property string $creation_date
 *
 * The followings are the available model relations:
 * @property Book[] $books
 * @property Critics[] $critics
 * @property PriceHistory[] $priceHistories
 * @property Media $image
 * @property Manufacturer $manufacturer
 * @property Category $category
 * @property ProductAttribute[] $productAttributes
 * @property ProductMerchant[] $productMerchants
 * @property Reviews[] $reviews
 * @property UserHaveit[] $userHaveits
 * @property UserWantit[] $userWantits
 */
class Product extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{product}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, slug', 'required'),
			array('image_id, total_shops, manufacturer_id, views, category_id, total_want, total_have, is_adult', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>200),
			array('slug', 'length', 'max'=>80),
			array('lowest_price, highest_price', 'length', 'max'=>6),
			array('EAN', 'length', 'max'=>20),
			array('description, creation_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, slug, description, image_id, lowest_price, highest_price, total_shops, manufacturer_id, views, category_id, EAN, total_want, total_have, is_adult, creation_date', 'safe', 'on'=>'search'),
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
			'books' => array(self::HAS_MANY, 'Book', 'product_id'),
			'critics' => array(self::HAS_MANY, 'Critics', 'product_id'),
			'priceHistories' => array(self::HAS_MANY, 'PriceHistory', 'product_id'),
			'image' => array(self::BELONGS_TO, 'Media', 'image_id'),
			'manufacturer' => array(self::BELONGS_TO, 'Manufacturer', 'manufacturer_id'),
			'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
			'productAttributes' => array(self::HAS_MANY, 'ProductAttribute', 'product_id'),
			'productMerchants' => array(self::HAS_MANY, 'ProductMerchant', 'product_id'),
			'reviews' => array(self::HAS_MANY, 'Reviews', 'product_id'),
			'userHaveits' => array(self::HAS_MANY, 'UserHaveit', 'product_id'),
			'userWantits' => array(self::HAS_MANY, 'UserWantit', 'product_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
            'id' => Yii::t('product', 'ID'),
            'name' => Yii::t('product', 'Name'),
            'slug' => Yii::t('product', 'Slug'),
            'description' => Yii::t('product', 'Description'),
            'image_id' => Yii::t('product', 'Image'),
            'lowest_price' => Yii::t('product', 'Lowest Price'),
            'highest_price' => Yii::t('product', 'Highest Price'),
            'total_shops' => Yii::t('product', 'Total Shops'),
            'manufacturer_id' => Yii::t('product', 'Manufacturer'),
            'views' => Yii::t('product', 'Views'),
            'category_id' => Yii::t('product', 'Category'),
            'EAN' => Yii::t('product', 'Ean'),
            'total_want' => Yii::t('product', 'Total Want'),
            'total_have' => Yii::t('product', 'Total Have'),
            'is_adult' => Yii::t('product', 'Is Adult'),
            'creation_date' => Yii::t('product', 'Creation Date'),
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
		$criteria->compare('slug',$this->slug,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('image_id',$this->image_id);
		$criteria->compare('lowest_price',$this->lowest_price,true);
		$criteria->compare('highest_price',$this->highest_price,true);
		$criteria->compare('total_shops',$this->total_shops);
		$criteria->compare('manufacturer_id',$this->manufacturer_id);
		$criteria->compare('views',$this->views);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('EAN',$this->EAN,true);
		$criteria->compare('total_want',$this->total_want);
		$criteria->compare('total_have',$this->total_have);
		$criteria->compare('is_adult',$this->is_adult);
		$criteria->compare('creation_date',$this->creation_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
