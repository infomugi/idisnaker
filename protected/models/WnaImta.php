<?php

/**
 * This is the model class for table "wna_imta".
 *
 * The followings are the available columns in table 'wna_imta':
 * @property integer $id_wna_imta
 * @property string $created_date
 * @property integer $user_id
 * @property string $no_registration
 * @property string $no_report
 * @property string $date_report
 * @property string $date_examination
 * @property string $person_in_charge
 * @property string $name
 * @property string $place
 * @property string $birth
 * @property integer $gender
 * @property integer $marital_status
 * @property string $address
 * @property string $address_foreign
 * @property integer $citizenship_id
 * @property string $education
 * @property string $experience_one
 * @property string $experience_two
 * @property string $experience_three
 * @property string $experience_four
 * @property string $employment_agreement
 * @property string $department
 * @property integer $department_level
 * @property string $department_description
 * @property integer $department_education
 * @property integer $department_year
 * @property string $department_place
 * @property integer $company_id
 * @property string $no_passport
 * @property string $passport_startdate
 * @property string $passport_enddate
 * @property string $no_rptka
 * @property string $rptka_enddate
 * @property string $no_imta
 * @property integer $imta_extension_to
 * @property string $imta_date
 * @property string $no_kitaskitap
 * @property string $kitas_startdate
 * @property string $kitas_enddate
 * @property string $no_lk
 * @property string $lk_startdate
 * @property string $lk_enddate
 * @property string $companion_name
 * @property integer $companion_education
 * @property string $companion_department
 * @property integer $companion_work_experience
 * @property string $companion_address
 * @property string $expired_date
 * @property integer $status
 * @property string $publickey
 * @property string $privatekey
 * @property string $encrypt
 * @property string $modulo
 * @property integer $views
 * @property string $last_view
 * @property string $publish
 * @property string $bpmp_no
 * @property string $bpmp_date
 * @property string $bpmp_expire_date
 * @property string $disnaker_no
 * @property string $disnaker_date
 */
class WnaImta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'wna_imta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_date, date_examination, user_id, no_registration, no_report, date_report, name, place, birth, gender, citizenship_id, department, company_id, no_passport, no_rptka, rptka_enddate, person_in_charge, address_foreign, employment_agreement, department, department_level, no_imta, no_kitaskitap, status, address, ', 'required'),
			array('privatekey', 'required','on'=>'verify'),
			array('user_id, gender, citizenship_id, company_id, status, marital_status, education, department_level, imta_extension_to, companion_work_experience, publish', 'numerical', 'integerOnly'=>true),
			array('no_registration, no_kitaskitap, no_report, no_passport, no_rptka, no_imta, date_examination, department_year, department_education', 'length', 'max'=>100),
			array('name, department, companion_name, companion_education, companion_department, companion_work_experience, companion_address, experience_one, experience_two, experience_three, experience_four', 'length', 'max'=>150),
			array('address, address_foreign', 'length', 'max'=>255),
			array('department_description', 'length', 'max'=>1000),
			array('place', 'length', 'max'=>100),
			array('person_in_charge, no_lk, bpmp_no, disnaker_no', 'length', 'max'=>100),
			array('employment_agreement, passport_startdate, passport_enddate, rptka_enddate, lk_startdate, lk_enddate, kitas_startdate, kitas_enddate, imta_date, bpmp_date, bpmp_expire_date, disnaker_date', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_wna_imta, created_date, user_id, no_registration, no_report, date_report, date_examination, person_in_charge, name, place, birth, gender, marital_status, address, address_foreign, citizenship_id, education, experience_one, experience_two, experience_three, experience_four, employment_agreement, department, department_level, department_description, department_education, department_year, department_place, company_id, no_passport, passport_startdate, passport_enddate, no_rptka, rptka_enddate, no_imta, imta_extension_to, imta_date, no_kitaskitap, kitas_startdate, kitas_enddate, no_lk, lk_startdate, lk_enddate, companion_name, companion_education, companion_department, companion_work_experience, companion_address, expired_date, status, publickey, privatekey, encrypt, modulo, views, last_view, publish', 'safe', 'on'=>'search'),
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
			'Citizenship'=>array(self::BELONGS_TO,'Citizenship','citizenship_id'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			// 'id_wna_imta' => 'Id Keberadaan WNA',
			// 'date_examination' => 'Tanggal BAP',
			// 'created_date' => 'Tanggal',
			// 'user_id' => 'Diinput Oleh',
			// 'no_registration' => 'Nomor Pendaftaran',
			// 'no_report' => 'No Laporan',
			// 'date_report' => 'Tanggal Laporan',
			// 'name' => 'Nama TKA',
			// 'place' => 'Tempat Lahir',
			// 'birth' => 'Tanggal Lahir',
			// 'gender' => 'Jenis Kelamin',
			// 'marital_status' => 'Status Perkawinan',
			// 'citizenship_id' => 'Kewarganegaraan',
			// 'department' => 'Jabatan',
			// 'company_id' => 'Nama Perusahaan',
			// 'no_passport' => 'No Passport',
			// 'no_rptka' => 'No RPTKA',
			// 'no_imta' => 'No IMTA',
			// 'no_kitaskitap' => 'No KITAS/KITAP',
			// 'expired_date' => 'Tanggal Berlaku',
			// 'status' => 'Status',
			// 'address' => 'Alamat di Indonesia',
			// 'address_foreign' => 'Alamat di Luar Negeri',

			'id_wna_imta' => 'Id IMTA',
			'created_date' => 'Created Date',
			'user_id' => 'Diinput Oleh',
			'no_registration' => 'Nomor Pendaftaran',
			'no_report' => 'No Laporan',
			'date_report' => 'Tanggal Laporan',
			'date_examination' => 'Tanggal BAP',
			'person_in_charge' => 'Penanggung Jawab',
			'name' => 'Nama TKA',
			'place' => 'Tempat Lahir',
			'birth' => 'Tanggal Lahir',
			'gender' => 'Jenis Kelamin',
			'marital_status' => 'Status Pernikahan',
			'address' => 'Alamat di Indonesia',
			'address_foreign' => 'Alamat di Luar Negeri',
			'citizenship_id' => 'Kewarganegaraan',
			'education' => 'Pendidikan',
			'experience_one' => 'Pengalaman Kerja a.',
			'experience_two' => 'Pengalaman Kerja b.',
			'experience_three' => 'Pengalaman Kerja c.',
			'experience_four' => 'Pengalaman Kerja d.',
			'employment_agreement' => 'Perjanjian Kerja',
			'department' => 'Nama Jabatan',
			'department_level' => 'Level Jabatan',
			'department_description' => 'Uraian Jabatan',
			'department_education' => 'Jabatan Pendidikan',
			'department_year' => 'Pengalaman Kerja',
			'department_place' => 'Lokasi Penempatan',
			'company_id' => 'Nama Perusahaan',
			'no_passport' => 'No Passport',
			'passport_startdate' => 'Tanggal Dikeluarkan Passport',
			'passport_enddate' => 'Tanggal Berlaku Passport',
			'no_rptka' => 'No RPTKA',
			'rptka_enddate' => 'Tanggal Berlaku RPTKA',
			'no_imta' => 'No IMTA',
			'imta_extension_to' => 'Perpanjangan IMTA Ke-',
			'imta_date' => 'Tanggal Dikeluarkan',
			'no_kitaskitap' => 'No KITAS',
			'kitas_startdate' => 'Tanggal Dikeluarkan KITAS',
			'kitas_enddate' => 'Tanggal Masa Berlaku KITAS',
			'no_lk' => 'No Lapor Keberadaan TKA',
			'lk_startdate' => 'Tanggal Dikeluarkan LK',
			'lk_enddate' => 'Tanggal Masa Berlaku LK',
			'companion_name' => 'Nama Pendamping',
			'companion_education' => 'Pendidikan Pendamping',
			'companion_department' => 'Jabatan Pendamping',
			'companion_work_experience' => 'Pengalaman Pendamping',
			'companion_address' => 'Alamat Pendamping',
			'expired_date' => 'Expired Date',
			'status' => 'Status',
			'publickey' => 'Publickey',
			'privatekey' => 'Privatekey',
			'encrypt' => 'Encrypt',
			'modulo' => 'Modulo',
			'views' => 'Views',
			'last_view' => 'Last View',
			'publish' => 'BPMP',

			'bpmp_no' => 'Nomor BPMP',
			'bpmp_date' => 'Tanggal Penerbitan IMTA',
			'bpmp_expire_date' => 'Masa Berlaku IMTA',

			'disnaker_no' => 'Nomor Disnaker',
			'disnaker_date' => 'Tanggal Disnaker',
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

		$criteria->compare('id_wna_imta',$this->id_wna_imta);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('no_registration',$this->no_registration,true);
		$criteria->compare('no_report',$this->no_report,true);
		$criteria->compare('date_report',$this->date_report,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('place',$this->place,true);
		$criteria->compare('birth',$this->birth,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('citizenship_id',$this->citizenship_id);
		$criteria->compare('department',$this->department);
		$criteria->compare('company_id',$this->company_id);
		$criteria->compare('no_passport',$this->no_passport,true);
		$criteria->compare('no_rptka',$this->no_rptka,true);
		$criteria->compare('no_imta',$this->no_imta,true);
		$criteria->compare('no_kitaskitap',$this->no_kitaskitap);
		$criteria->compare('expired_date',$this->expired_date,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('publish',$this->publish);
		$criteria->order = 'id_wna_imta DESC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return WnaImta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


	protected function beforeSave()
	{
		$this->date_examination = date('Y-m-d', strtotime($this->date_examination));
		$this->created_date = date('Y-m-d', strtotime($this->created_date));
		$this->date_report = date('Y-m-d', strtotime($this->date_report));
		$this->birth = date('Y-m-d', strtotime($this->birth));
		$this->expired_date = date('Y-m-d', strtotime($this->expired_date));
		$this->employment_agreement = date('Y-m-d', strtotime($this->employment_agreement));
		$this->date_examination = date('Y-m-d', strtotime($this->date_examination));
		$this->passport_startdate = date('Y-m-d', strtotime($this->passport_startdate));
		$this->passport_enddate = date('Y-m-d', strtotime($this->passport_enddate));
		$this->rptka_enddate = date('Y-m-d', strtotime($this->rptka_enddate));
		$this->imta_date = date('Y-m-d', strtotime($this->imta_date));
		$this->kitas_startdate = date('Y-m-d', strtotime($this->kitas_startdate));
		$this->kitas_enddate = date('Y-m-d', strtotime($this->kitas_enddate));
		$this->lk_startdate = date('Y-m-d', strtotime($this->lk_startdate));
		$this->lk_enddate = date('Y-m-d', strtotime($this->lk_enddate));
		$this->expired_date = date('Y-m-d', strtotime($this->expired_date));
		$this->bpmp_date = date('Y-m-d', strtotime($this->bpmp_date));
		$this->bpmp_expire_date = date('Y-m-d', strtotime($this->bpmp_expire_date));
		$this->disnaker_date = date('Y-m-d', strtotime($this->disnaker_date));
		return TRUE;
	}

	protected function afterFind()
	{
		$this->date_examination = date('d-m-Y', strtotime($this->date_examination));
		$this->created_date = date('d-m-Y', strtotime($this->created_date));
		$this->date_report = date('d-m-Y', strtotime($this->date_report));
		$this->birth = date('d-m-Y', strtotime($this->birth));
		$this->expired_date = date('Y-m-d', strtotime($this->expired_date));
		$this->employment_agreement = date('Y-m-d', strtotime($this->employment_agreement));
		$this->date_examination = date('Y-m-d', strtotime($this->date_examination));
		$this->passport_startdate = date('d-m-Y', strtotime($this->passport_startdate));
		$this->passport_enddate = date('d-m-Y', strtotime($this->passport_enddate));
		$this->rptka_enddate = date('d-m-Y', strtotime($this->rptka_enddate));
		$this->imta_date = date('d-m-Y', strtotime($this->imta_date));
		$this->kitas_startdate = date('d-m-Y', strtotime($this->kitas_startdate));
		$this->kitas_enddate = date('d-m-Y', strtotime($this->kitas_enddate));
		$this->lk_startdate = date('d-m-Y', strtotime($this->lk_startdate));
		$this->lk_enddate = date('d-m-Y', strtotime($this->lk_enddate));
		$this->expired_date = date('d-m-Y', strtotime($this->expired_date));        
		$this->bpmp_date = date('d-m-Y', strtotime($this->bpmp_date));        
		$this->bpmp_expire_date = date('d-m-Y', strtotime($this->bpmp_expire_date));        
		$this->disnaker_date = date('d-m-Y', strtotime($this->disnaker_date));        
		return TRUE;
	}

	public function education($data){
		if($data==1){
			return "SMA";
		}elseif($data==2){
			return "D1";
		}elseif($data==3){
			return "D3";
		}elseif($data==4){
			return "S1";
		}elseif($data==5){
			return "S2";                        
		}else{
			return "-";
		}
	}

	public function department($data){
		if($data==1){
			return "Pimpinan Manager";
		}elseif($data==2){
			return "Advisor";
		}elseif($data==3){
			return "Professional";   
		}elseif($data==4){
			return "Supervisor";                
		}else{
			return "-";
		}
	}    

	public function imta($data){
		if($data==0){
			return "-";
		}elseif($data==1){
			return "I (Satu)";
		}elseif($data==2){
			return "II (Dua)";
		}elseif($data==3){
			return "III (Tiga)";
		}elseif($data==4){
			return "IV (Empat)";
		}elseif($data==5){
			return "V (Lima)";
		}else{
			return "-";
		}
	}  

	public function experience($data){
		if($data==0){
			return "-";
		}elseif($data==1){
			return "1 Tahun";
		}elseif($data==2){
			return "3 Tahun";
		}elseif($data==3){
			return "5 Tahun";
		}elseif($data==4){
			return "10 Tahun";
		}elseif($data==5){
			return "15 Tahun";
		}else{
			return "-";
		}
	}  

	public function agreement($data){
		$start = date('d M Y', strtotime($data));
		$end = date('d M Y', strtotime('+364 days', strtotime($start)));
		return $start . " s/d " . $end;
	}            

	public function romawi($data){
		$hasil = "";
		$iromawi = array("","I","II","III","IV","V","VI","VII","VIII","IX","X",20=>"XX",30=>"XXX",40=>"XL",50=>"L",
			60=>"LX",70=>"LXX",80=>"LXXX",90=>"XC",100=>"C",200=>"CC",300=>"CCC",400=>"CD",500=>"D",600=>"DC",700=>"DCC",
			800=>"DCCC",900=>"CM",1000=>"M",2000=>"MM",3000=>"MMM");
		if(array_key_exists($data,$iromawi)){
			$hasil = $iromawi[$data];
		}elseif($data >= 11 && $data <= 99){
			$i = $data % 10;
			$hasil = $iromawi[$data-$i] . Romawi($data % 10);
		}elseif($data >= 101 && $data <= 999){
			$i = $data % 100;
			$hasil = $iromawi[$data-$i] . Romawi($data % 100);
		}else{
			$i = $data % 1000;
			$hasil = $iromawi[$data-$i] . Romawi($data % 1000);
		}
		return $hasil;
	}        

	public function publish($data){
		if($data==1){
			return "Ya";
		}else{
			return "Belum";
		}
	}  	


}
