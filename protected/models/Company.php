<?php

/**
 * This is the model class for table "company".
 *
 * The followings are the available columns in table 'company':
 * @property integer $id_company
 * @property string $created_date
 * @property string $update_date
 * @property string $company_code
 * @property string $name
 * @property string $address
 * @property string $phone
 * @property integer $district_id
 * @property integer $klui
 * @property integer $type
 * @property string $classification
 * @property integer $category_id
 * @property integer $status
 * @property string $startdate
 * @property string $enddate
 * @property string $letterno
 * @property string $spsb
 * @property string $lksbipartit
 * @property string $kopkar
 * @property string $description
 * @property string $email
 * @property string $owner
 * @property string $faximile
 * @property integer $place
 * @property integer $business_license_from
 * @property string $business_license_no
 * @property string $business_license_date
 * @property string $technical_code
 * @property integer $employee_local
 * @property integer $employee_strange
 * @property integer $use_plan_tka
 * @property string $use_plan_tka_no
 * @property string $use_plan_tka_date
 */
class Company extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'company';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, address, district_id, klui, category_id, classification, type', 'required'),
			array('district_id, klui, category_id, type, status, employee_local, employee_strange, place, business_license_from, use_plan_tka', 'numerical', 'integerOnly'=>true),

			array('company_code, classification, technical_code, business_license_date, use_plan_tka_date', 'length', 'max'=>15),
			array('name, description', 'length', 'max'=>100),
			array('letterno, spsb, lksbipartit, kopkar, faximile', 'length', 'max'=>25),
			array('email, owner, business_license_no, use_plan_tka_no', 'length', 'max'=>50),

			array('email, phone', 'length', 'max'=>50),
			array('name', 'length', 'max'=>100),
			array('company_code','unique'),
			array('email','email'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_company, created_date, update_date, company_code, name, address, phone, district_id, klui, type, classification, category_id, status, startdate, enddate, letterno, spsb, lksbipartit, kopkar, description, email, owner, faximile, place, business_license_from, business_license_no, business_license_date, technical_code, employee_local, employee_strange, use_plan_tka, use_plan_tka_no, use_plan_tka_date', 'safe', 'on'=>'search'),
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
			'District'=>array(self::BELONGS_TO,'subdistrict','district_id'),
			'Employee'=>array(self::BELONGS_TO,'companyemployee','id_company'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_company' => 'Id Company',
			'company_code' => 'Kode Perusahaan',
			'name' => 'Nama',
			'address' => 'Alamat',
			'phone' => 'Telepon',
			'district_id' => 'Kecamatan',
			'klui' => 'KLUI',
			'category_id' => 'Sektor Usaha',
			'classification' => 'Klasifikasi',
			'type' => 'Badan Usaha',
			'status' => 'Status',
			'startdate'=>'Tanggal Mulai',
			'enddate'=>'Tanggal Berakhir',
			'spsb'=>'SPSB',
			'lksbipartit'=>'LKS Bipartit',
			'kopkar'=>'Kopkar',
			'letterno'=>'Nomor Surat Keputusan',
			'description'=>'Keterangan',
			'email' => 'Email',
			'owner' => 'Nama Pimpinan',
			'faximile' => 'Faximile',
			'place' => 'Tempat Kedudukan Cabang',
			'business_license_from' => 'Ijin Usaha Dari',
			'business_license_no' => 'Ijin Usaha Nomor',
			'business_license_date' => 'Ijin Usaha Tanggal',
			'technical_code' => 'Kode Teknis',
			'employee_local' => 'Jumlah TK Indonesia',
			'employee_strange' => 'Jumlah TK Asing',
			'use_plan_tka' => 'Rencana Penggunaan TKA',
			'use_plan_tka_no' => 'Rencana Penggunaan No',
			'use_plan_tka_date' => 'Rencana Penggunaan Tanggal',			
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

		$criteria->compare('id_company',$this->id_company);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('company_code',$this->company_code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('district_id',$this->district_id);
		$criteria->compare('klui',$this->klui);
		$criteria->compare('type',$this->type);
		$criteria->compare('classification',$this->classification,true);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('status',$this->status);
		$criteria->compare('startdate',$this->startdate,true);
		$criteria->compare('enddate',$this->enddate,true);
		$criteria->compare('letterno',$this->letterno,true);
		$criteria->compare('spsb',$this->spsb,true);
		$criteria->compare('lksbipartit',$this->lksbipartit,true);
		$criteria->compare('kopkar',$this->kopkar,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('owner',$this->owner,true);
		$criteria->compare('faximile',$this->faximile,true);
		$criteria->compare('place',$this->place);
		$criteria->compare('business_license_from',$this->business_license_from);
		$criteria->compare('business_license_no',$this->business_license_no,true);
		$criteria->compare('business_license_date',$this->business_license_date,true);
		$criteria->compare('technical_code',$this->technical_code,true);
		$criteria->compare('employee_local',$this->employee_local);
		$criteria->compare('employee_strange',$this->employee_strange);
		$criteria->compare('use_plan_tka',$this->use_plan_tka);
		$criteria->compare('use_plan_tka_no',$this->use_plan_tka_no,true);
		$criteria->compare('use_plan_tka_date',$this->use_plan_tka_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Company the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function generateCompanyCode(){
		$_i = "P";
		$_left = $_i;
		$_first = "00001";
		$_len = strlen($_left);
		$no = $_left . $_first; 
		
		$last_po = $this->find( 
			array(
				"select"=>"company_code",
				"condition" => "left(company_code, " . $_len . ") = :_left",
				"params" => array(":_left" => $_left),
				"order" => "id_company DESC"
				));
		
		if($last_po != null){
			$_no = substr($last_po->company_code, $_len);
			$_no++;
			$_no = substr("000000", strlen($_no)) . $_no;
			$no = $_left . $_no;
		}
		
		return $no;
	}	

	public function status($data){
		if($data==1){
			return "Aktif";
		}else{
			return "Tidak Aktif";
		}
	}		

	public function classification($data){
		if($data==1){
			return "Besar";
		}elseif($data==2){
			return "Kecil";
		}elseif($data==3){
			return "Sedang";
		}elseif($data==4){
			return "Menengah";
		}elseif($data==4){
			return "< Kecil";
		}else{
			return "Tidak Diketahui";
		}
	}

	public function category($data){
		if($data==1){
			return "PMDN";
		}elseif($data==2){
			return "Swasta Nasional";
		}elseif($data==3){
			return "Perseorangan";
		}elseif($data==4){
			return "PMA";
		}elseif($data==5){
			return "BUMN";
		}elseif($data==6){
			return "Koperasi";	
		}elseif($data==7){
			return "Joint Vuture";
		}elseif($data==8){
			return "Joint Venture";																
		}elseif($data==9){
			return "Perorangan";
		}else{
			return "Tidak Diketahui";
		}
	}		

	public function countEmployee($male,$female,$wnamale,$wnafemale,$year){
		$now = date('Y');
		if($year==$now){
			$data = $male + $female + $wnafemale + $wnafemale;
			return $data;
		}else{
			return "Data Pegawai Belum di Perbaharui, Update Terakhir Tahun ".$year;
		}
	}

	protected function beforeSave()
	{
		$this->startdate = date('Y-m-d', strtotime($this->startdate));
		$this->enddate = date('Y-m-d', strtotime($this->enddate));
		$this->business_license_date = date('Y-m-d', strtotime($this->business_license_date));
		$this->use_plan_tka_date = date('Y-m-d', strtotime($this->use_plan_tka_date));
		return TRUE;
	}
	
	protected function afterFind()
	{
		$this->startdate = date('d-m-Y', strtotime($this->startdate));
		$this->enddate = date('d-m-Y', strtotime($this->enddate));
		$this->business_license_date = date('d-m-Y', strtotime($this->business_license_date));
		$this->use_plan_tka_date = date('d-m-Y', strtotime($this->use_plan_tka_date));
		return TRUE;
	}	

	public function place($data){
		if($data==1){
			return "Pusat";
		}else{
			return "Cabang";
		}
	}

	public function license($data){
		if($data==1){
			return "Badan Koordinasi Penanaman Modal";
		}elseif($data==2){
			return "BPMP";				
		}elseif($data==3){
			return "BPPT";				
		}elseif($data==4){
			return "Kementerian Pendidikan & Kebudayaan";				
		}else{
			return "-";
		}
	}	

	public function useplantka($data){
		if($data==1){
			return "Sudah Disahkan";
		}else{
			return "Belum Disahkan";
		}
	}							
	
}
