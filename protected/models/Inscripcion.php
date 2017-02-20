<?php

/**
 * This is the model class for table "inscripcion".
 *
 * The followings are the available columns in table 'inscripcion':
 * @property integer $id
 * @property string $fecha
 * @property integer $fkApoderado
 * @property integer $fkCurso
 * @property integer $fkGestion
 * @property integer $fkEstudiante
 *
 * The followings are the available model relations:
 * @property Estudiante $fkEstudiante0
 * @property Apoderado $fkApoderado0
 * @property Curso $fkCurso0
 * @property Gestion $fkGestion0
 * @property Recibo[] $recibos
 */
class Inscripcion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inscripcion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fkApoderado, fkCurso, fkGestion, fkEstudiante', 'numerical', 'integerOnly'=>true),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fecha, fkApoderado, fkCurso, fkGestion, fkEstudiante', 'safe', 'on'=>'search'),
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
			'fkEstudiante0' => array(self::BELONGS_TO, 'Estudiante', 'fkEstudiante'),
			'fkApoderado0' => array(self::BELONGS_TO, 'Apoderado', 'fkApoderado'),
			'fkCurso0' => array(self::BELONGS_TO, 'Curso', 'fkCurso'),
			'fkGestion0' => array(self::BELONGS_TO, 'Gestion', 'fkGestion'),
			'recibos' => array(self::HAS_MANY, 'Recibo', 'fkInscricion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fecha' => 'Fecha',
			'fkApoderado' => 'Fk Apoderado',
			'fkCurso' => 'Fk Curso',
			'fkGestion' => 'Fk Gestion',
			'fkEstudiante' => 'Fk Estudiante',
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
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('fkApoderado',$this->fkApoderado);
		$criteria->compare('fkCurso',$this->fkCurso);
		$criteria->compare('fkGestion',$this->fkGestion);
		$criteria->compare('fkEstudiante',$this->fkEstudiante);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Inscripcion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
