<?php

/**
 * This is the model class for table "book".
 *
 * The followings are the available columns in table 'book':
 * @property integer $product_id
 * @property integer $author_id
 * @property string $dimensions
 * @property string $ISBN
 * @property integer $total_pages
 * @property string $series
 * @property string $format
 *
 * The followings are the available model relations:
 * @property Product $product
 * @property BookAuthor $author
 */
class Book extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{book}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id, author_id, ISBN', 'required'),
			array('product_id, author_id, total_pages', 'numerical', 'integerOnly'=>true),
			array('dimensions', 'length', 'max'=>8),
			array('ISBN', 'length', 'max'=>30),
			array('series', 'length', 'max'=>80),
			array('format', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('product_id, author_id, dimensions, ISBN, total_pages, series, format', 'safe', 'on'=>'search'),
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
			'author' => array(self::BELONGS_TO, 'BookAuthor', 'author_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
            'product_id' => Yii::t('book', 'Product'),
            'author_id' => Yii::t('book', 'Author'),
            'dimensions' => Yii::t('book', 'Dimensions'),
            'ISBN' => Yii::t('book', 'Isbn'),
            'total_pages' => Yii::t('book', 'Total Pages'),
            'series' => Yii::t('book', 'Series'),
            'format' => Yii::t('book', 'Format'),
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

		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('author_id',$this->author_id);
		$criteria->compare('dimensions',$this->dimensions,true);
		$criteria->compare('ISBN',$this->ISBN,true);
		$criteria->compare('total_pages',$this->total_pages);
		$criteria->compare('series',$this->series,true);
		$criteria->compare('format',$this->format,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Book the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
