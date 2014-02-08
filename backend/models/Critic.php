<?php

/**
 * This is the model class for table "{{critic}}".
 *
 * The followings are the available columns in table '{{critic}}':
 * @property integer $id
 * @property string $author
 * @property integer $product_id
 * @property string $url
 * @property string $content
 * @property string $pros
 * @property string $cons
 * @property string $creation_date
 *
 * The followings are the available model relations:
 * @property Product $product
 */
class Critic extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{critic}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('author, product_id, content', 'required'),
			array('product_id', 'numerical', 'integerOnly'=>true),
			array('author', 'length', 'max'=>50),
			array('url', 'length', 'max'=>800),
			array('pros, cons, creation_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, author, product_id, url, content, pros, cons, creation_date', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
            'id' => Yii::t('{{critic}}', 'ID'),
            'author' => Yii::t('{{critic}}', 'Author'),
            'product_id' => Yii::t('{{critic}}', 'Product'),
            'url' => Yii::t('{{critic}}', 'Url'),
            'content' => Yii::t('{{critic}}', 'Content'),
            'pros' => Yii::t('{{critic}}', 'Pros'),
            'cons' => Yii::t('{{critic}}', 'Cons'),
            'creation_date' => Yii::t('{{critic}}', 'Creation Date'),
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
		$criteria->compare('author',$this->author,true);
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('pros',$this->pros,true);
		$criteria->compare('cons',$this->cons,true);
		$criteria->compare('creation_date',$this->creation_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Critic the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
