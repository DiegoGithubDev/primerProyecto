<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span8">
        <?php echo $content; ?>    
</div>

<div class="span2">
    <div class="well">
        <?php
        $new_menu =array(array('label'=> 'operaciones',));
        
        foreach ($this->menu as $item) {
            $new_menu[] =$item;
        }
        
        $this->widget('bootstrap.widgets.TbNav', array(
            'type' => TbHtml::NAV_TYPE_LIST ,
            'items' => $new_menu
        ));
        ?>
    </div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>