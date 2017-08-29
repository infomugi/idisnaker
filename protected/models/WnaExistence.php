<?php

/**
 * This is the model class for table "wna_existence".
 *
 * The followings are the available columns in table 'wna_existence':
 * @property integer $id_wna_existence
 * @property string $created_date
 * @property integer $user_id
 * @property string $datao_registration
 * @property string $datao_report
 * @property string $date_report
 * @property string $dataame
 * @property string $place
 * @property string $birth
 * @property integer $gender
 * @property string $address
 * @property integer $citizenship_id
 * @property string $department
 * @property integer $company_id
 * @property string $datao_passport
 * @property string $datao_rptka
 * @property string $datao_imta
 * @property integer $datao_kitaskitap
 * @property string $expired_date
 * @property integer $status
 * @property string $publickey
 * @property string $privatekey
 * @property string $encrypt
 * @property string $modulo
 * @property integer $status
 * @property integer $views
 * @property integer $last_view 
 */
class WnaExistence extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'wna_existence';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_date, user_id, no_registration, no_report, date_report, name, place, birth, gender, citizenship_id, department, company_id, no_passport, no_rptka, no_imta, no_kitaskitap, expired_date, status, address', 'required'),
			array('privatekey', 'required','on'=>'verify'),
			array('user_id, gender, citizenship_id, company_id, status', 'numerical', 'integerOnly'=>true),
			array('no_registration, no_kitaskitap, no_report, no_passport, no_rptka, no_imta', 'length', 'max'=>100),
			array('name, department', 'length', 'max'=>150),
			array('address', 'length', 'max'=>255),
			array('place', 'length', 'max'=>100),
			array('no_registration','unique'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_wna_existence, created_date, user_id, no_registration, no_report, date_report, name, place, birth, gender, citizenship_id, department, company_id, no_passport, no_rptka, no_imta, no_kitaskitap, expired_date, status', 'safe', 'on'=>'search'),
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
			'id_wna_existence' => 'Id Keberadaan WNA',
			'created_date' => 'Tanggal',
			'user_id' => 'Diinput Oleh',
			'no_registration' => 'Nomor Pendaftaran',
			'no_report' => 'No Laporan',
			'date_report' => 'Tanggal Laporan',
			'name' => 'Nama TKA',
			'place' => 'Tempat Lahir',
			'birth' => 'Tanggal Lahir',
			'gender' => 'Jenis Kelamin',
			'citizenship_id' => 'Kewarganegaraan',
			'department' => 'Jabatan',
			'company_id' => 'Nama Perusahaan',
			'no_passport' => 'No Passport',
			'no_rptka' => 'No RPTKA',
			'no_imta' => 'No IMTA',
			'no_kitaskitap' => 'No KITAS/KITAP',
			'expired_date' => 'Tanggal Berlaku',
			'status' => 'Status',
			// 'id_wna_existence' => 'Id Wna Existence',
			// 'created_date' => 'Date',
			// 'user_id' => 'Created By',
			// 'no_registration' => 'No Registration',
			// 'no_report' => 'No Report',
			// 'date_report' => 'Date Report',
			// 'name' => 'Name',
			// 'place' => 'Place',
			// 'birth' => 'Birth',
			// 'gender' => 'Gender',
			// 'citizenship_id' => 'Citizenship',
			// 'department' => 'Department',
			// 'company_id' => 'Company',
			// 'no_passport' => 'No Passport',
			// 'no_rptka' => 'No RPTKA',
			// 'no_imta' => 'No IMTA',
			// 'no_kitaskitap' => 'No KITAS/KITAP',
			// 'expired_date' => 'Expired Date',
			// 'status' => 'Status',			
			'address' => 'Alamat TKA',			
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

		$criteria->compare('id_wna_existence',$this->id_wna_existence);
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
		$criteria->order = 'id_wna_existence DESC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return WnaExistence the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


	protected function beforeSave()
	{
		$this->created_date = date('Y-m-d', strtotime($this->created_date));
		$this->date_report = date('Y-m-d', strtotime($this->date_report));
		$this->birth = date('Y-m-d', strtotime($this->birth));
		$this->expired_date = date('Y-m-d', strtotime($this->expired_date));
		return TRUE;
	}
	
	protected function afterFind()
	{
		$this->created_date = date('d-m-Y', strtotime($this->created_date));
		$this->date_report = date('d-m-Y', strtotime($this->date_report));
		$this->birth = date('d-m-Y', strtotime($this->birth));
		$this->expired_date = date('Y-m-d', strtotime($this->expired_date));
		return TRUE;
	}

	public function frmDate($date,$code){
		$explode = explode("-",$date);
		$year  = $explode[0];
		(substr($explode[1],0,1)=="0")?$month=str_replace("0","",$explode[1]):$month=is_string($explode[1]);
		$dated = $explode[2];
		$explode_time = explode(" ",$dated);
		$dates = $explode_time[0];        

		switch($code){
                // Per Object
                case 4: $format = $dates; break;                                                            // 01
                case 5: $format = $month; break;                                                            // 01
                case 6: $format = $year; break;                                                                // 2011
            }        
            return $format;
        }    

        public function now($code=2){
        	switch($code){
        		case 1: $date = date("Y-m-d H:i:s"); break;
        		case 2: $date = date("Y-m-d"); break;
        		case 3: $date = date("H:i:s"); break;
        	}
        	return $date;
        }

        public function nmonth($month){
        	$thn_kabisat = date("Y") % 4;
        	($thn_kabisat==0)?$feb=29:$feb=28;
            $init_month = array(1=>31,    // Januari [current]
                                2=>$feb,    // Feb
                                3=>31,    // Mar
                                4=>30,    // Apr
                                5=>31,    // Mei
                                6=>30,    // Juni
                                7=>31,    // Juli
                                8=>31,    // Aug
                                9=>30,    // Sep
                                10=>31,    // Oct    
                                11=>30,    // Nov
                                12=>31);// Des
            $datamonth = $init_month[$month];
            return $datamonth;
        }

        public function dateRange($start,$end){
        	$xdate    =$this->frmDate($start,4);
        	$ydate    =$this->frmDate($end,4);
        	$xmonth   =$this->frmDate($start,5);
        	$ymonth   =$this->frmDate($end,5);
        	$xyear    =$this->frmDate($start,6);
        	$yyear    =$this->frmDate($end,6);
        	if($xyear==$yyear){
        		if($xmonth==$ymonth){
        			$dataday=$ydate+1-$xdate;
        		} else {
        			$r2=NULL;
        			$datamonth = $ymonth-$xmonth;            
        			$r1 = $this->nmonth($xmonth)-$xdate+1;
        			for($i=$xmonth+1;$i<$ymonth;$i++){
        				$r2 = $r2+$this->nmonth($i);
        			}
        			$r3 = $ydate;
        			$dataday = $r1+$r2+$r3;
        		}
        	} else {
                // Last Year
                //get_nDay
        		$r2=NULL; $r3=NULL;
        		$r1=$this->nmonth($xmonth)-$xdate+1;
                //get_nMonth
        		for($i=$xmonth+1;$i<13;$i++){
        			$r2 = $r2+$this->nmonth($i);
        		}
                // Current Year
        		for($i=1;$i<$ymonth;$i++){
        			$r3 = $r3+$this->nmonth($i);
        		}
        		$r4 = $ydate;
        		$dataday = $r1+$r2+$r3+$r4;
        	}            
        	return $dataday." Days";
        }

        public function deadline($date){
        	$dataow = $this->now();
        	$yDate = $this->frmDate($date,6);
        	$mDate = $this->frmDate($date,5);
        	$dDate = $this->frmDate($date,4);
        	$yNow = $this->frmDate($dataow,6);
        	$mNow = $this->frmDate($dataow,5);
        	$dNow = $this->frmDate($dataow,4);
        	$deadmsg = "Expired";
            // cek tahun
        	if($yDate>$yNow){
        		return $this->dateRange($dataow,$date);
        	} elseif($yDate==$yNow){
                // cek bulan
        		if($mDate>$mNow){
        			return $this->dateRange($dataow,$date);
        		} elseif($mDate==$mNow){
                    // cek hari
        			if($dDate>=$dNow){
        				return $this->dateRange($dataow,$date);
        			} else {
        				return $deadmsg;
        			}
        		} else {
        			return $deadmsg;
        		}
        	} else {
        		return $deadmsg;
        	}
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


    }
