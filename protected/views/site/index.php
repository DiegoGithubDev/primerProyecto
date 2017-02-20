<div  class="bodyEdit"></div>
<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;

?>

<h1 class="mibody">BIENBENIDO A LA EMPRESA: TRANSPORTE LA VELOZ DEL NORTE <i><?php; ?></i></h1>
<?php
/*$this->widget('xupload.XUpload', array(
                    'url' => Yii::app()->createUrl("site/upload"),
                    
                    'attribute' => 'file',
                    'multiple' => true,
));*/
?>

  <!--style="background-color: #003bb3"-->>
<p> colegio impartiendo educacion y principios.</p>

<p>para mas informacion cantectono seccion cantacto o ayuda</p>
<ul>
    <li>ver logo empresa: <code></code></li>
    <li>ver ubicacion maps: <code></code></li>
    <li>nombre de empresa: <code></code></li>

</ul>

<h4 class="header4"  >Configuracion Personalizada</h4>

 Selecciona un color: <input name="color" type="color" value="#f3f3f3"/>
<script>
    $(document).ready(function () {
        
         var colors = Array('red', 'blue', 'orange', 'yellow', 'green', 'black');
        
        $('.header4').click(function () {
            $(this).css('color', color());
            $('.mibody').css( "backgroundColor" ,colorInput() );
           
           
        });
        
         function color() {
            // color[ parteEnteraDe(valorRandomEntre{0..1} * dimensionDelArray)]
            return colors[Math.floor(Math.random() * colors.length)];
        }
        
        
        $("input[name=color]").change(function(){
                $('.bodyEdit').css( "backgroundColor" ,colorInput() );
	});
        
        
        function colorInput(){	
		return ($('input[name=color]').val());	
	}
        
       
        
       
            
        
    });
</script>    


<p>For more details on how to further develop this application, please read
    the <a href="http://www.yiiframework.com/doc/">documentation</a>.
    Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
    should you have any questions.</p>
</div>