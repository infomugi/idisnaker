<?php

/**
 * This is the model class for table "event".
 *
 * The followings are the available columns in table 'event':
 * @property integer $id_event
 * @property string $created_date
 * @property integer $user_id
 * @property integer $subdistrict_id
 * @property integer $village_id
 * @property string $place
 * @property string $name
 * @property string $description
 * @property integer $category_id
 * @property integer $chief_instance
 * @property integer $chief_event
 * @property integer $chief_division
 * @property string $start_date
 * @property string $end_date
 * @property string $agrement_date
 * @property integer $instructor_id
 * @property string $degree_date
 * @property string $committee_code
 * @property string $committee_date
 * @property string $certificate_code
 * @property string $certificate_date
 * @property integer $treasurer_id
 * @property string $invitation_date
 * @property string $socialization_date
 * @property string $recrutment_date
 * @property string $opening_date
 * @property string $closhing_date
 * @property string $start_implementation_date
 * @property string $end_implementation_date
 * @property integer $status
 */
class Event extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'event';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_date, user_id, subdistrict_id, village_id, place, chief_instance, chief_event, chief_division, start_date, end_date, agrement_date, instructor_id, degree_date, committee_code, committee_date, certificate_code, certificate_date, treasurer_id, invitation_date, socialization_date, recrutment_date, opening_date, closhing_date, start_implementation_date, end_implementation_date, status, name, category_id', 'required'),
			array('user_id, subdistrict_id, village_id, chief_instance, chief_event, chief_division, instructor_id, treasurer_id, status', 'numerical', 'integerOnly'=>true),
			array('description', 'length', 'max'=>255),
			array('place', 'length', 'max'=>150),
			array('name', 'length', 'max'=>50),
			array('committee_code, certificate_code', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_event, created_date, user_id, subdistrict_id, village_id, place, chief_instance, chief_event, chief_division, start_date, end_date, agrement_date, instructor_id, degree_date, committee_code, committee_date, certificate_code, certificate_date, treasurer_id, invitation_date, socialization_date, recrutment_date, opening_date, closhing_date, start_implementation_date, end_implementation_date, status', 'safe', 'on'=>'search'),
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
			'Admin'=>array(self::BELONGS_TO,'Users','user_id'),
			'Treasurer'=>array(self::BELONGS_TO,'Users','treasurer_id'),
			'Instructor'=>array(self::BELONGS_TO,'Users','instructor_id'),
			'ChiefInstance'=>array(self::BELONGS_TO,'Users','chief_instance'),
			'ChiefEvent'=>array(self::BELONGS_TO,'Users','chief_event'),
			'ChiefDivision'=>array(self::BELONGS_TO,'Users','chief_division'),
			'Subdistrict'=>array(self::BELONGS_TO,'Subdistrict','subdistrict_id'),
			'Village'=>array(self::BELONGS_TO,'Village','village_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_event' => 'Id Event',
			'created_date' => 'Created Date',
			'user_id' => 'Administrator',
			'name' => 'Nama Kegiatan',
			'description' => 'Deskripsi',
			'category_id' => 'Kategori',
			'subdistrict_id' => 'Kecamatan',
			'village_id' => 'Desa',
			'place' => 'Tempat Pelatihan',
			'chief_instance' => 'Kepala Instansi',
			'chief_event' => 'Ketua Pelaksana',
			'chief_division' => 'Kepala Bagian',
			'start_date' => 'Tanggal Mulai',
			'end_date' => 'Tanggal Berakhir',
			'agrement_date' => 'Tanggal Perjanjian',
			'instructor_id' => 'Nama Instruktur',
			'degree_date' => 'DPA',
			'committee_code' => 'No. SK Panitia',
			'committee_date' => 'Tanggal SK',
			'certificate_code' => 'Nomor Sertifikat',
			'certificate_date' => 'Tanggal Sertifikat',
			'treasurer_id' => 'Bendahara',
			'invitation_date' => 'Tanggal Undangan',
			'socialization_date' => 'Tanggal Sosialiasi',
			'recrutment_date' => 'Tanggal Rekrut',
			'opening_date' => 'Tanggal Pembukaan',
			'closhing_date' => 'Tanggal Penutupan',
			'start_implementation_date' => 'Mulai Pelaksanaan',
			'end_implementation_date' => 'Akhir Pelaksanaan',
			'status' => 'Status',
			// 'id_event' => 'Id Event',
			// 'created_date' => 'Created Date',
			// 'user_id' => 'User',
			// 'subdistrict_id' => 'Subdistrict',
			// 'village_id' => 'Village',
			// 'name' => 'Name',
			// 'description' => 'Description',
			// 'category_id' => 'Category',
			// 'place' => 'Place',
			// 'chief_instance' => 'Chief Instance',
			// 'chief_event' => 'Chief Event',
			// 'chief_division' => 'Chief Division',
			// 'start_date' => 'Start Date',
			// 'end_date' => 'End Date',
			// 'agrement_date' => 'Agrement Date',
			// 'instructor_id' => 'Instructor',
			// 'degree_date' => 'Degree Date',
			// 'committee_code' => 'Committee Code',
			// 'committee_date' => 'Committee Date',
			// 'certificate_code' => 'Certificate Code',
			// 'certificate_date' => 'Certificate Date',
			// 'treasurer_id' => 'Treasurer',
			// 'invitation_date' => 'Invitation Date',
			// 'socialization_date' => 'Socialization Date',
			// 'recrutment_date' => 'Recrutment Date',
			// 'opening_date' => 'Opening Date',
			// 'closhing_date' => 'Closhing Date',
			// 'start_implementation_date' => 'Start Implementation Date',
			// 'end_implementation_date' => 'End Implementation Date',
			// 'status' => 'Status',			
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

		$criteria->compare('id_event',$this->id_event);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('subdistrict_id',$this->subdistrict_id);
		$criteria->compare('village_id',$this->village_id);
		$criteria->compare('place',$this->place,true);
		$criteria->compare('chief_instance',$this->chief_instance);
		$criteria->compare('chief_event',$this->chief_event);
		$criteria->compare('chief_division',$this->chief_division);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('agrement_date',$this->agrement_date,true);
		$criteria->compare('instructor_id',$this->instructor_id);
		$criteria->compare('degree_date',$this->degree_date,true);
		$criteria->compare('committee_code',$this->committee_code,true);
		$criteria->compare('committee_date',$this->committee_date,true);
		$criteria->compare('certificate_code',$this->certificate_code,true);
		$criteria->compare('certificate_date',$this->certificate_date,true);
		$criteria->compare('treasurer_id',$this->treasurer_id);
		$criteria->compare('invitation_date',$this->invitation_date,true);
		$criteria->compare('socialization_date',$this->socialization_date,true);
		$criteria->compare('recrutment_date',$this->recrutment_date,true);
		$criteria->compare('opening_date',$this->opening_date,true);
		$criteria->compare('closhing_date',$this->closhing_date,true);
		$criteria->compare('start_implementation_date',$this->start_implementation_date,true);
		$criteria->compare('end_implementation_date',$this->end_implementation_date,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Event the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function beforeSave()
	{
		$this->created_date = date('Y-m-d', strtotime($this->created_date));
		$this->start_date = date('Y-m-d', strtotime($this->start_date));
		$this->end_date = date('Y-m-d', strtotime($this->end_date));
		$this->agrement_date = date('Y-m-d', strtotime($this->agrement_date));
		$this->degree_date = date('Y-m-d', strtotime($this->degree_date));
		$this->committee_date = date('Y-m-d', strtotime($this->committee_date));
		$this->certificate_date = date('Y-m-d', strtotime($this->certificate_date));
		$this->invitation_date = date('Y-m-d', strtotime($this->invitation_date));
		$this->socialization_date = date('Y-m-d', strtotime($this->socialization_date));
		$this->recrutment_date = date('Y-m-d', strtotime($this->recrutment_date));
		$this->opening_date = date('Y-m-d', strtotime($this->opening_date));
		$this->closhing_date = date('Y-m-d', strtotime($this->closhing_date));
		$this->start_implementation_date = date('Y-m-d', strtotime($this->start_implementation_date));
		$this->end_implementation_date = date('Y-m-d', strtotime($this->end_implementation_date));
		return TRUE;
	}
	
	protected function afterFind()
	{
		$this->created_date = date('d-m-Y', strtotime($this->created_date));
		$this->start_date = date('d-m-Y', strtotime($this->start_date));
		$this->end_date = date('d-m-Y', strtotime($this->end_date));
		$this->agrement_date = date('d-m-Y', strtotime($this->agrement_date));
		$this->degree_date = date('d-m-Y', strtotime($this->degree_date));
		$this->committee_date = date('d-m-Y', strtotime($this->committee_date));
		$this->certificate_date = date('d-m-Y', strtotime($this->certificate_date));
		$this->invitation_date = date('d-m-Y', strtotime($this->invitation_date));
		$this->socialization_date = date('d-m-Y', strtotime($this->socialization_date));
		$this->recrutment_date = date('d-m-Y', strtotime($this->recrutment_date));
		$this->opening_date = date('d-m-Y', strtotime($this->opening_date));
		$this->closhing_date = date('d-m-Y', strtotime($this->closhing_date));
		$this->start_implementation_date = date('d-m-Y', strtotime($this->start_implementation_date));
		$this->end_implementation_date = date('d-m-Y', strtotime($this->end_implementation_date));		
		return TRUE;
	}   	
}
