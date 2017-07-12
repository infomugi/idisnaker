<?php

/**
 * This is the model class for table "company_jobfair".
 *
 * The followings are the available columns in table 'company_jobfair':
 * @property integer $id_company_jobfair
 * @property string $created_date
 * @property integer $user_id
 * @property integer $company_id
 * @property integer $job_id
 * @property integer $education_id
 * @property string $department
 * @property string $skill
 * @property integer $experience
 * @property integer $age
 * @property string $gender
 * @property integer $quantity
 * @property integer $status
 */
class Companyjobfair extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'company_jobfair';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_date, user_id, company_id, job_id, education_id, department, skill, experience, age, gender, quantity, status', 'required'),
			array('user_id, company_id, job_id, education_id, experience, age, quantity, status', 'numerical', 'integerOnly'=>true),
			array('gender', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_company_jobfair, created_date, user_id, company_id, job_id, education_id, department, skill, experience, age, gender, quantity, status', 'safe', 'on'=>'search'),
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
			'Company'=>array(self::BELONGS_TO,'Company','company_id'),
			'Job'=>array(self::BELONGS_TO,'Job','job_id'),
			'Education'=>array(self::BELONGS_TO,'Education','education_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_company_jobfair' => 'Id Company Jobfair',
			'created_date' => 'Tanggal Buat',
			'user_id' => 'Diinput Oleh',
			'company_id' => 'Perusahaan',
			'job_id' => 'Pekerjaan',
			'education_id' => 'Pendidikan',
			'department' => 'Jurusan',
			'skill' => 'Pengalaman',
			'experience' => 'Minimal Pengalaman',
			'age' => 'Maksimal Umur',
			'gender' => 'Jenis Kelamin',
			'quantity' => 'Jumlah Orang',
			'status' => 'Status',
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

		$criteria->compare('id_company_jobfair',$this->id_company_jobfair);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('company_id',$this->company_id);
		$criteria->compare('job_id',$this->job_id);
		$criteria->compare('education_id',$this->education_id);
		$criteria->compare('department',$this->department,true);
		$criteria->compare('skill',$this->skill,true);
		$criteria->compare('experience',$this->experience);
		$criteria->compare('age',$this->age);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Companyjobfair the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
