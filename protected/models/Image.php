<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Image
 *
 * @author diego
 */
class Image  extends CFormModel{
    //put your code here
    public $item_id;
    public function tableName()
    {
        return '{{image}}';
    }
 
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            //array('name, file, mime_type, size, filename', 'required'),
            array('name', 'length', 'max'=>300),
            array('item_id', 'length', 'max'=>300),
            array('file', 'file'),
            //array('size, filename', 'length', 'max'=>100),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, name, file, mime_type, size, filename, item_id, type', 'safe', 'on'=>'search'),
        );
    }
 
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'name' => 'Name',
            'file' => 'File',
            'mime_type' => 'Mime Type',
            'size' => 'Size',
            'filename' => 'Filename',
            'item_id'=>'item_id',
        );
    }
 
 
 
    public function addImages()
    {
        //If we have pending images
        if( Yii::app()->user->hasState( 'images' ) ) {
            $userImages = Yii::app()->user->getState( 'images' );
            //Resolve the final path for our images
            $path = Yii::app()->getBasePath()."/../images/uploads/{$this->id}/";
            //Create the folder and give permissions if it doesnt exists
            if( !is_dir( $path ) ) {
                die(111);
                chmod( $path, 0777 );
            }
 
            //Now lets create the corresponding models and move the files
            foreach( $userImages as $image ) {
                if( is_file( $image["path"] ) ) {
                        chmod( $path.$image["filename"], 0777 );
                        $img = new Image();
 
                    $img->size = $image["size"];
                        $img->mime = $image["mime"];
                        $img->name = $image["name"];
                        $img->source = "/images/uploads/{$this->id}/".$image["filename"];
                        $img->image_id = $this->id;
                        if( !$img->save() ) {
                            var_dump($img);
                            //Its always good to log something
                            Yii::log( "Could not save Image:\n".CVarDumper::dumpAsString(
                                $img->getErrors() ), CLogger::LEVEL_ERROR );
                            //this exception will rollback the transaction
                            throw new Exception( 'Could not save Image');
                        }
                } else {
                    //You can also throw an execption here to rollback the transaction
                    Yii::log( $image["path"]." is not a file", CLogger::LEVEL_WARNING );
                }
            }
            //Clear the user's session
            Yii::app()->user->setState( 'images', null );
        }
    }
    public function afterSave()
    {
        $this->addImages();
        parent::afterSave();
    }
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
 
}
    
    

