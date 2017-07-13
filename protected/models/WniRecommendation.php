<?php

/**
 * This is the model class for table "wni_recommendation_paspor".
 *
 * The followings are the available columns in table 'wni_recommendation_paspor':
 * @property integer $id_wni_recommendation
 * @property string $created_date
 * @property integer $user_id
 * @property string $registration_code
 * @property string $registration_date
 * @property string $recommendation_code
 * @property string $recommendation_date
 * @property string $government_code
 * @property string $government_date
 * @property string $institution_code
 * @property string $institution_date
 * @property string $job_seeker_code
 * @property integer $company_code
 * @property string $name
 * @property string $place
 * @property string $birth
 * @property integer $gender
 * @property string $address
 * @property integer $country_id
 * @property integer $program_type
 * @property integer $status
 * @property string $publickey
 * @property string $privatekey
 * @property string $encrypt
 * @property string $modulo
 * @property integer $views
 * @property string $last_view
 */
class WniRecommendation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'wni_recommendation_paspor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_date, user_id', 'required'),
			array('user_id, company_code, gender, country_id, program_type, status, views', 'numerical', 'integerOnly'=>true),
			array('registration_code, recommendation_code, government_code, institution_code, job_seeker_code, place', 'length', 'max'=>100),
			array('name', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_wni_recommendation, created_date, user_id, registration_code, registration_date, recommendation_code, recommendation_date, government_code, government_date, institution_code, institution_date, job_seeker_code, company_code, name, place, birth, gender, address, country_id, program_type, status, publickey, privatekey, encrypt, modulo, views, last_view', 'safe', 'on'=>'search'),
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
			'User'=>array(self::BELONGS_TO,'Users','user_id'),
			'Company'=>array(self::BELONGS_TO,'Company','company_id'),
			'Country'=>array(self::BELONGS_TO,'Citizenship','country_id'),			
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_wni_recommendation' => 'Id Wni Recommendation',
			'created_date' => 'Created Date',
			'user_id' => 'User',
			'registration_code' => 'Nomor Registrasi',
			'registration_date' => 'Tanggal Registrasi',
			'recommendation_code' => 'Nomor Rekomendasi',
			'recommendation_date' => 'Tanggal Rekomendasi',
			'government_code' => 'Nomor Surat BPN2TKI',
			'government_date' => 'Tanggal Surat BPN2TKI',
			'institution_code' => 'Nomor Surat Lembaga',
			'institution_date' => 'Tanggal Surat Lembaga',
			'job_seeker_code' => 'Nomor Kartu Kuning',
			'company_code' => 'Nomor Surat HRD Korea',
			'name' => 'Nama Lengkap',
			'place' => 'Tempat Lahir',
			'birth' => 'Tanggal Lahir',
			'gender' => 'Jenis Kelamin',
			'address' => 'Alamat',
			'country_id' => 'Negara Tujuan',
			'program_type' => 'Jenis Program',
			'status' => 'Status',
			'publickey' => 'Publickey',
			'privatekey' => 'Privatekey',
			'encrypt' => 'Encrypt',
			'modulo' => 'Modulo',
			'views' => 'Views',
			'last_view' => 'Last View',
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

		$criteria->compare('id_wni_recommendation',$this->id_wni_recommendation);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('registration_code',$this->registration_code,true);
		$criteria->compare('registration_date',$this->registration_date,true);
		$criteria->compare('recommendation_code',$this->recommendation_code,true);
		$criteria->compare('recommendation_date',$this->recommendation_date,true);
		$criteria->compare('government_code',$this->government_code,true);
		$criteria->compare('government_date',$this->government_date,true);
		$criteria->compare('institution_code',$this->institution_code,true);
		$criteria->compare('institution_date',$this->institution_date,true);
		$criteria->compare('job_seeker_code',$this->job_seeker_code,true);
		$criteria->compare('company_code',$this->company_code);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('place',$this->place,true);
		$criteria->compare('birth',$this->birth,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('country_id',$this->country_id);
		$criteria->compare('program_type',$this->program_type);
		$criteria->compare('status',$this->status);
		$criteria->compare('publickey',$this->publickey,true);
		$criteria->compare('privatekey',$this->privatekey,true);
		$criteria->compare('encrypt',$this->encrypt,true);
		$criteria->compare('modulo',$this->modulo,true);
		$criteria->compare('views',$this->views);
		$criteria->compare('last_view',$this->last_view,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return WniRecommendationPaspor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function beforeSave()
	{
		$this->birth = date('Y-m-d', strtotime($this->birth));
		$this->created_date = date('Y-m-d', strtotime($this->created_date));
		$this->registration_date = date('Y-m-d', strtotime($this->registration_date));
		$this->recommendation_date = date('Y-m-d', strtotime($this->recommendation_date));
		$this->government_date = date('Y-m-d', strtotime($this->government_date));
		$this->institution_date = date('Y-m-d', strtotime($this->institution_date));
		return TRUE;
	}
	
	protected function afterFind()
	{
		$this->birth = date('d-m-Y', strtotime($this->birth));
		$this->created_date = date('d-m-Y', strtotime($this->created_date));
		$this->registration_date = date('d-m-Y', strtotime($this->registration_date));
		$this->recommendation_date = date('d-m-Y', strtotime($this->recommendation_date));
		$this->government_date = date('Y-m-d', strtotime($this->government_date));
		$this->institution_date = date('Y-m-d', strtotime($this->institution_date));
		return TRUE;
	}	
}
