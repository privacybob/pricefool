<?php

/**
 * This is the model class for table "book_author".
 *
 * The followings are the available columns in table 'book_author':
 * @property integer $id
 * @property string $name
 * @property integer $image_id
 * @property string $born_date
 * @property string $death_date
 * @property string $biography
 * @property string $creation_date
 *
 * The followings are the available model relations:
 * @property Book[] $books
 * @property Media $image
 */
class BookAuthor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{book_author}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('image_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			array('born_date, death_date, biography, creation_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, image_id, born_date, death_date, biography, creation_date', 'safe', 'on'=>'search'),
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
			'books' => array(self::HAS_MANY, 'Book', 'author_id'),
			'image' => array(self::BELONGS_TO, 'Media', 'image_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
            'id' => Yii::t('book_author', 'ID'),
            'name' => Yii::t('book_author', 'Name'),
            'image_id' => Yii::t('book_author', 'Image'),
            'born_date' => Yii::t('book_author', 'Born Date'),
            'death_date' => Yii::t('book_author', 'Death Date'),
            'biography' => Yii::t('book_author', 'Biography'),
            'creation_date' => Yii::t('book_author', 'Creation Date'),
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
		$criteria->compare('born_date',$this->born_date,true);
		$criteria->compare('death_date',$this->death_date,true);
		$criteria->compare('biography',$this->biography,true);
		$criteria->compare('creation_date',$this->creation_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BookAuthor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
