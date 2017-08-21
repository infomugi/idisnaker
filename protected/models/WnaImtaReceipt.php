<?php

/**
 * This is the model class for table "wna_imta_receipt".
 *
 * The followings are the available columns in table 'wna_imta_receipt':
 * @property integer $id_wna_imta_receipt
 * @property string $created_date
 * @property integer $user_id
 * @property string $name
 * @property integer $company_id
 * @property string $no_bap
 * @property string $no_recomended
 * @property string $date_recomended
 * @property string $date_expired
 * @property integer $letter_request
 * @property integer $letter_stuffing_imta
 * @property integer $letter_imta
 * @property integer $letter_rpkta
 * @property integer $letter_passport
 * @property integer $letter_kitas
 * @property integer $letter_tka_existence
 * @property integer $letter_permission
 * @property integer $letter_akta
 * @property integer $letter_npwp
 * @property integer $letter_employment
 * @property integer $letter_appointment_tki
 * @property integer $letter_realization_of_training
 * @property integer $letter_organizational_structure
 * @property integer $letter_permit_domicile
 * @property integer $letter_insurance_tka
 * @property integer $letter_foto
 * @property integer $letter_bpjs
 * @property string $description
 * @property integer $status
 * @property integer $email
 * @property string $email_date
 * @property integer $supervision_id
 * @property string $supervision_date
 * @property integer $general_id
 * @property string $general_date
 * @property integer $bpmp_id
 * @property string $bpmp_date
 */
class WnaImtaReceipt extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'wna_imta_receipt';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			// array('created_date, user_id, name, company_id, no_bap, no_recomended, date_recomended, date_expired, letter_request, letter_stuffing_imta, letter_imta, letter_rpkta, letter_passport, letter_kitas, letter_tka_existence, letter_permission, letter_akta, letter_npwp, letter_employment, letter_appointment_tki, letter_realization_of_training, letter_organizational_structure, letter_permit_domicile, letter_insurance_tka, letter_foto, letter_bpjs, description, status, email, email_date, supervision_id, supervision_date, general_id, general_date, bpmp_id, bpmp_date', 'required'),
			array('created_date, user_id, name, company_id, no_bap, date_expired, letter_request, letter_stuffing_imta, letter_imta, letter_rpkta, letter_passport, letter_kitas, letter_tka_existence, letter_permission, letter_akta, letter_npwp, letter_employment, letter_appointment_tki, letter_realization_of_training, letter_organizational_structure, letter_permit_domicile, letter_insurance_tka, letter_foto, letter_bpjs', 'required','on'=>'create'),
			array('user_id, company_id, letter_request, letter_stuffing_imta, letter_imta, letter_rpkta, letter_passport, letter_kitas, letter_tka_existence, letter_permission, letter_akta, letter_npwp, letter_employment, letter_appointment_tki, letter_realization_of_training, letter_organizational_structure, letter_permit_domicile, letter_insurance_tka, letter_foto, letter_bpjs, status, email, supervision_id, general_id, bpmp_id', 'numerical', 'integerOnly'=>true),
			array('name, description', 'length', 'max'=>255),
			array('no_bap, no_recomended, date_recomended, date_expired', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_wna_imta_receipt, created_date, user_id, name, company_id, no_bap, no_recomended, date_recomended, date_expired, letter_request, letter_stuffing_imta, letter_imta, letter_rpkta, letter_passport, letter_kitas, letter_tka_existence, letter_permission, letter_akta, letter_npwp, letter_employment, letter_appointment_tki, letter_realization_of_training, letter_organizational_structure, letter_permit_domicile, letter_insurance_tka, letter_foto, letter_bpjs, description, status, email, email_date, supervision_id, supervision_date, general_id, general_date, bpmp_id, bpmp_date', 'safe', 'on'=>'search'),
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
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_wna_imta_receipt' => 'Id Wna Imta Receipt',
			'created_date' => 'Tanggal Buat',
			'user_id' => 'Diinput Oleh',
			'name' => 'Nama TKA',
			'company_id' => 'Perusahaan',
			'no_bap' => 'No BAP',
			'no_recomended' => 'No Pengantar BPMP',
			'date_recomended' => 'Tanggal Pengantar BPMP',
			'date_expired' => 'Tanggal Berakhir',
			'letter_request' => 'Surat Permohonan & KTP',
			'letter_stuffing_imta' => 'Isian izin IMTA',
			'letter_imta' => 'Fotocopy IMTA',
			'letter_rpkta' => 'Fotocopy RPTKA',
			'letter_passport' => 'Fotocopy Passport',
			'letter_kitas' => 'Fotocopy KITAS',
			'letter_tka_existence' => 'Fotocopy Lapor Keberadaan TKA',
			'letter_permission' => 'Fotocopy Ijin Usaha',
			'letter_akta' => 'Fotocopy Akta Pendirian',
			'letter_npwp' => 'Fotocopy NPMP',
			'letter_employment' => 'Fotocopy UU No. 7',
			'letter_appointment_tki' => 'Surat Penunjukan TKI',
			'letter_realization_of_training' => 'Surat Laporan Realisasi Diklat',
			'letter_organizational_structure' => 'Struktur Organisasi',
			'letter_permit_domicile' => 'Ijin Domisili',
			'letter_insurance_tka' => 'Polis Asuransi TKA',
			'letter_foto' => 'Fotocopy Foto',
			'letter_bpjs' => 'Fotocopy BPJS Kesehatan & Ketenagakerjaan',
			'description' => 'Keterangan',
			'status' => 'Status',
			'email' => 'Email',
			'email_date' => 'Email Date',
			'supervision_id' => 'Supervision',
			'supervision_date' => 'Supervision Date',
			'general_id' => 'General',
			'general_date' => 'General Date',
			'bpmp_id' => 'Bpmp',
			'bpmp_date' => 'Bpmp Date',
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

		$criteria->compare('id_wna_imta_receipt',$this->id_wna_imta_receipt);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('company_id',$this->company_id);
		$criteria->compare('no_bap',$this->no_bap,true);
		$criteria->compare('no_recomended',$this->no_recomended,true);
		$criteria->compare('date_recomended',$this->date_recomended,true);
		$criteria->compare('date_expired',$this->date_expired,true);
		$criteria->compare('letter_request',$this->letter_request);
		$criteria->compare('letter_stuffing_imta',$this->letter_stuffing_imta);
		$criteria->compare('letter_imta',$this->letter_imta);
		$criteria->compare('letter_rpkta',$this->letter_rpkta);
		$criteria->compare('letter_passport',$this->letter_passport);
		$criteria->compare('letter_kitas',$this->letter_kitas);
		$criteria->compare('letter_tka_existence',$this->letter_tka_existence);
		$criteria->compare('letter_permission',$this->letter_permission);
		$criteria->compare('letter_akta',$this->letter_akta);
		$criteria->compare('letter_npwp',$this->letter_npwp);
		$criteria->compare('letter_employment',$this->letter_employment);
		$criteria->compare('letter_appointment_tki',$this->letter_appointment_tki);
		$criteria->compare('letter_realization_of_training',$this->letter_realization_of_training);
		$criteria->compare('letter_organizational_structure',$this->letter_organizational_structure);
		$criteria->compare('letter_permit_domicile',$this->letter_permit_domicile);
		$criteria->compare('letter_insurance_tka',$this->letter_insurance_tka);
		$criteria->compare('letter_foto',$this->letter_foto);
		$criteria->compare('letter_bpjs',$this->letter_bpjs);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('email',$this->email);
		$criteria->compare('email_date',$this->email_date,true);
		$criteria->compare('supervision_id',$this->supervision_id);
		$criteria->compare('supervision_date',$this->supervision_date,true);
		$criteria->compare('general_id',$this->general_id);
		$criteria->compare('general_date',$this->general_date,true);
		$criteria->compare('bpmp_id',$this->bpmp_id);
		$criteria->compare('bpmp_date',$this->bpmp_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return WnaImtaReceipt the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function status($data){
		if($data==1){
			return "".Yii::app()->baseUrl."/image/icon/check.png";
		}else{
			return "".Yii::app()->baseUrl."/image/icon/close.png";
		}
	}	

	protected function beforeSave()
	{
		$this->date_expired = date('Y-m-d', strtotime($this->date_expired));
		$this->date_recomended = date('Y-m-d', strtotime($this->date_recomended));
		return TRUE;
	}
	
	protected function afterFind()
	{
		$this->date_expired = date('d-m-Y', strtotime($this->date_expired));
		$this->date_recomended = date('d-m-Y', strtotime($this->date_recomended));
		return TRUE;
	}
}
