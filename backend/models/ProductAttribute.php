<?php

/**
 * This is the model class for table "product_attribute".
 *
 * The followings are the available columns in table 'product_attribute':
 * @property integer $id
 * @property integer $product_id
 * @property integer $group_id
 * @property string $explanation
 * @property integer $has_feature
 * @property string $name
 * @property string $value
 *
 * The followings are the available model relations:
 * @property Product $product
 * @property AttributeGroup $group
 */
class ProductAttribute extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{product_attribute}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id, group_id, name, value', 'required'),
			array('product_id, group_id, has_feature', 'numerical', 'integerOnly'=>true),
			array('explanation, value', 'length', 'max'=>300),
			array('name', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, product_id, group_id, explanation, has_feature, name, value', 'safe', 'on'=>'search'),
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
			'group' => array(self::BELONGS_TO, 'AttributeGroup', 'group_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
            'id' => Yii::t('product_attribute', 'ID'),
            'product_id' => Yii::t('product_attribute', 'Product'),
            'group_id' => Yii::t('product_attribute', 'Group'),
            'explanation' => Yii::t('product_attribute', 'Explanation'),
            'has_feature' => Yii::t('product_attribute', 'Has Feature'),
            'name' => Yii::t('product_attribute', 'Name'),
            'value' => Yii::t('product_attribute', 'Value'),
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
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('explanation',$this->explanation,true);
		$criteria->compare('has_feature',$this->has_feature);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('value',$this->value,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductAttribute the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
