<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Form extends Controller {

    public function actionForm() {
        $model = new Image;
        $photos = new XUploadForm;
        //Check if the form has been submitted
        if (isset($_POST['Image'])) {
            //Assign our safe attributes
            $model->attributes = $_POST['Image'];

            //Start a transaction in case something goes wrong
            $transaction = Yii::app()->db->beginTransaction();
            try {
                //Save the model to the database
                if ($model->save()) {
                    $transaction->commit();
                }
            } catch (Exception $e) {
                $transaction->rollback();
                Yii::app()->handleException($e);
            }
        }
        $this->render('form', array(
            'model' => $model,
            'photos' => $photos,
        ));
    }

    public function actionIndex() {
// code stantart from example
//images saveing in directory
        $this->render('form');
    }

    public function actionUpload() {
// code stantart from example
//images saveing in directory
    }

}
