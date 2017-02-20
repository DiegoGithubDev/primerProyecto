<?php

/**
 * Created by PhpStorm.
 * User: diego
 * Date: 27/09/2016
 * Time: 13:41
 */
class SacarFotoController extends  Controller
{
    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionNewPhoto()
    {
        $this->render('newPhoto');
    }

    public function actionSaveJpg()
    {
        $this->render('saveJpg');
    }

    public function actions()
    {
        return array(
            'jpegcam.'=> array(
                'class'=>'application.extensions.jpegcam.EJpegcam',
                'saveJpg'=>array(
                    'filepath'=> Yii::app()->basePath . "/../uploads/user_photo.jpg" // This could be whatever
                )
            )
        );
    }

    public function actionNewPhoto2()
    {
        if (!empty($_POST['Profile']['user_photo']))
        {
            $foto = $_POST['Profile']['user_photo'];
            //Decode with base64
            $foto = str_replace('data:image/png;base64,', '', $foto);
            $foto = str_replace(' ', '+', $foto);
            $data_foto = base64_decode($foto);

            //Set photo filename
            $filename = Yii::app()->user->name.'.png';
            $filepath = YiiBase::getPathOfAlias("webroot").'/uploads/userphotos/'.$filename;

            $writeToDisk = file_put_contents($filepath, $data_foto);
        }
    }


}
