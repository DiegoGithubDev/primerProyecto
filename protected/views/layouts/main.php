  <?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="en">

        <?php /* ?>
          <!-- blueprint CSS framework -->
          <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
          <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
          <!--[if lt IE 8]>
          <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
          <![endif]-->

          <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
          <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
          <?php */ ?>

       <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
        <!--<link href="../../../css/main.css" rel="stylesheet" type="text/css"/>-->
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <?php Yii::app()->bootstrap->register(); ?>
        
        
        
     
         <?php
            $this->widget('bootstrap.widgets.TbNavbar', array(
                'color' => TbHtml::NAVBAR_COLOR_INVERSE,
                'collapse' => true,
                'brandLabel' => Yii::app()->name,
                'display' => 	TbHtml::NAVBAR_DISPLAY_STATICTOP,
                'items' => array(
                    array(
                        'class' => 'bootstrap.widgets.TbNav',
                        'items' => array(
                            array('label' => 'Informacion test', 'url' => array('/site/index')),
                            array('label' => 'Nosotros test', 'url' => array('/site/page', 'view' => 'about')),
                            array('label' => 'Ayuda test', 'url' => array('/site/contact')),
                            array(
                                'label' => 'crear Perfil',
                                'url' => array('/SacarFoto/index'),
                                'visible' => !Yii::app()->user->isGuest,
                            ),
                            array(
                                'label' => 'Usuarios',
                                'url' => array('/usuario/admin'),
                                'visible' => !Yii::app()->user->isGuest,
                            ),
                           /* array(
                                'label' => 'Posts inf',
                                'url' => array('/post/index'),
                                'visible' => !Yii::app()->user->isGuest,
                            ),*/

                            array(
                                'label' => 'Backup',
                                'url' => array('/default'),
                                'visible' => !Yii::app()->user->isGuest,
                            ),
                            
                             array(
                                'label' => 'Eventos ',
                                'url' => array('/site/imagen'),
                                'visible' => !Yii::app()->user->isGuest,
                            ),
                            
                             array(
                                'label' => 'Estudiante',
                                'url' => array('/estudiante'),
                                'visible' => Yii::app()->user->isGuest,
                            ),
                            
                            array('label' => 'Admi. Usuarios', 'visible' => !Yii::app()->user->isGuest,'items' => array(
                                array('label' => 'Profesor', 'url' => array('/profesor'),),
                                array('label' => 'Insripcion', 'url' => array('/inscripcion'),),
                                array('label' => 'Otros', 'url' => '#'),
                                TbHtml::menuDivider(),
                                array('label' => 'Separate link', 'url' => '#'),
                            )),
                
                            //+++++++esto es del tutorial++++++++++++++++++++++++
                            array('label'=>'Cursos','visible'=>Yii::app()->user->isGuest,'url' => array('/curso/'),),
                            array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                            array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                           
                        ),
                    ),
                ),
            ));
            ?>
       
    
    </head>

    <body  >
        
        <div class="container"> 
        
        </div>
        
           
       <div class="container"   >

            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('bootstrap.widgets.TbBreadcrumb', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <!--<div class="row">-->
             
                <?php echo $content; ?>
        </div>
            
        <div class="clear"> </div>
            <!--</div>-->
        <!-- page -->
        
        <!-- footer -->
        <div class="footer">
            Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
            All Rights Reserved por diego mansilla.<br/>
            <?php echo Yii::powered(); ?>
        </div>
       
                 
    </body>
   
    
</html>
