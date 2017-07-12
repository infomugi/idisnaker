<?php

/**
 * This is the model class for table "village".
 *
 * The followings are the available columns in table 'village':
 * @property integer $id_village
 * @property integer $village_code
 * @property integer $subdistrict_code
 * @property string $mnemonic
 * @property string $name
 */
class Village extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'village';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('village_code, subdistrict_code, mnemonic, name', 'required'),
			array('village_code, subdistrict_code', 'numerical', 'integerOnly'=>true),
			array('mnemonic', 'length', 'max'=>3),
			array('name', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_village, village_code, subdistrict_code, mnemonic, name', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_village' => 'Id Village',
			'village_code' => 'Village Code',
			'subdistrict_code' => 'Subdistrict Code',
			'mnemonic' => 'Mnemonic',
			'name' => 'Name',
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

		$criteria->compare('id_village',$this->id_village);
		$criteria->compare('village_code',$this->village_code);
		$criteria->compare('subdistrict_code',$this->subdistrict_code);
		$criteria->compare('mnemonic',$this->mnemonic,true);
		$criteria->compare('name',$this->name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Village the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
