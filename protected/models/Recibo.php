<?php

/**
 * This is the model class for table "recibo".
 *
 * The followings are the available columns in table 'recibo':
 * @property integer $id
 * @property integer $monto
 * @property string $fecha
 * @property integer $fkInscricion
 *
 * The followings are the available model relations:
 * @property Factura[] $facturas
 * @property Inscripcion $fkInscricion0
 */
class Recibo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'recibo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('monto, fkInscricion', 'numerical', 'integerOnly'=>true),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, monto, fecha, fkInscricion', 'safe', 'on'=>'search'),
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
			'facturas' => array(self::HAS_MANY, 'Factura', 'fkRecibo'),
			'fkInscricion0' => array(self::BELONGS_TO, 'Inscripcion', 'fkInscricion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'monto' => 'Monto',
			'fecha' => 'Fecha',
			'fkInscricion' => 'Fk Inscricion',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('monto',$this->monto);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('fkInscricion',$this->fkInscricion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Recibo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
