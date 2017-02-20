<?php

/**
 * This is the model class for table "materia".
 *
 * The followings are the available columns in table 'materia':
 * @property integer $id
 * @property string $nombre
 * @property integer $fkcurso
 *
 * The followings are the available model relations:
 * @property Detalleboletin[] $detalleboletins
 * @property Horario[] $horarios
 * @property Curso $fkcurso0
 */
class Materia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'materia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fkcurso', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, fkcurso', 'safe', 'on'=>'search'),
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
			'detalleboletins' => array(self::HAS_MANY, 'Detalleboletin', 'fkMateria'),
			'horarios' => array(self::HAS_MANY, 'Horario', 'fkMateria'),
			'fkcurso0' => array(self::BELONGS_TO, 'Curso', 'fkcurso'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'fkcurso' => 'Fkcurso',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('fkcurso',$this->fkcurso);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Materia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
