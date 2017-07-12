<?php

/**
 * This is the model class for table "certificate".
 *
 * The followings are the available columns in table 'certificate':
 * @property integer $id_certificate
 * @property string $created_date
 * @property integer $event_id
 * @property integer $member_id
 * @property string $code
 * @property string $publickey
 * @property string $privatekey
 * @property string $encrypt
 * @property string $modulo
 * @property integer $status
 * @property integer $views
 * @property integer $last_view
 */
class Certificate extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'certificate';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_date, code, publickey, privatekey, encrypt, modulo', 'required'),
			array('privatekey', 'required','on'=>'verify'),
			array('event_id, member_id, status, views', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_certificate, created_date, event_id, member_id, code, publickey, privatekey, encrypt, status, views, last_view', 'safe', 'on'=>'search'),
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
			'Event'=>array(self::BELONGS_TO,'Event','event_id'),
			'Member'=>array(self::BELONGS_TO,'Users','member_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			// 'id_certificate' => 'Id Certificate',
			// 'created_date' => 'Created Date',
			// 'event_id' => 'Event',
			// 'member_id' => 'Member',
			// 'code' => 'Code',
			// 'publickey' => 'Public Key',
			// 'privatekey' => 'Private Key',
			// 'encrypt' => 'Encrypt',
			// 'modulo' => 'Modulo',
			// 'status' => 'Status',
			// 'views' => 'Views',
			// 'last_view' => 'Last View',
			'id_certificate' => 'Sertifikat ID',
			'created_date' => 'Tanggal',
			'event_id' => 'Kegiatan',
			'member_id' => 'Nama Member',
			'code' => 'Kode Sertifikat',
			'publickey' => 'Public Key',
			'privatekey' => 'Private Key',
			'encrypt' => 'Encrypt',
			'modulo' => 'Modulo',
			'status' => 'Status',
			'views' => 'Views',
			'last_view' => 'Terakhir Dilihat',			
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

		$criteria->compare('id_certificate',$this->id_certificate);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('event_id',$this->event_id);
		$criteria->compare('member_id',$this->member_id);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('publickey',$this->publickey,true);
		$criteria->compare('privatekey',$this->privatekey,true);
		$criteria->compare('encrypt',$this->encrypt,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('views',$this->views);
		$criteria->compare('last_view',$this->last_view);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Certificate the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
