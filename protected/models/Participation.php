<?php

/**
 * This is the model class for table "participation".
 *
 * The followings are the available columns in table 'participation':
 * @property integer $id_participation
 * @property string $created_date
 * @property integer $event_id
 * @property integer $member_id
 * @property integer $status
 */
class Participation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'participation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_date, event_id, member_id, status', 'required'),
			array('event_id, member_id, status', 'numerical', 'integerOnly'=>true),
			array('event_id', 'Validation2Attribute'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_participation, created_date, event_id, member_id, status', 'safe', 'on'=>'search'),
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
			// 'id_participation' => 'Participation ID',
			// 'created_date' => 'Register Date',
			// 'event_id' => 'Event',
			// 'member_id' => 'Member',
			// 'status' => 'Status',
			'id_participation' => 'Kode Partisipasi',
			'created_date' => 'Tanggal Pendaftaran',
			'event_id' => 'Nama Kegiatan',
			'member_id' => 'Peserta',
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

		$criteria->compare('id_participation',$this->id_participation);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('event_id',$this->event_id);
		$criteria->compare('member_id',$this->member_id);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Participation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function status($data){
		if($data==1){
			return "Hadir";
		}else{
			return "Tidak Hadir";
		}
	}	

	public function Validation2Attribute( $attribute, $params ) {
		CValidator::createValidator( 'unique', $this, $attribute, array( 'criteria'=>array(
			//Member ID : adalah Atribur ke-2 Yang ingin Di Validasi
			'condition'=>'member_id=:member_id',
			'params'=>array(
				':member_id'=>$this->member_id
				)
			) ) )->validate( $this );
	}		
}
