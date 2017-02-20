<?php
/**
 * Yii php free chat
 *
 * @author Marc Oliveras Galvez <oligalma@gmail.com> 
 * @link http://www.oligalma.com
 * @copyright 2016 Oligalma
 * @license New BSD License
 */
 
class PHPFreeChat extends CWidget
{
	private $_assetsUrl;
	
	public function run()
	{
		if ($this->_assetsUrl === null)
	    	$this->_assetsUrl = Yii::app()->assetManager->publish(Yii::getPathOfAlias('ext.phpfreechat.assets'));
		
		Yii::app()->clientScript->registerScript('iframe',"
			resizeIframe();
			
			$(window).resize(function(){
				resizeIframe();
			});
			
			function resizeIframe()
			{
				$('iframe').attr('width',$('#iframe-div').width());
				$('iframe').attr('height','770');			
			}
		");
		
		Yii::app()->clientScript->registerCss('iframe',"
			#content
			{
				padding:0px;
			}
		");
		
		echo '<div id="iframe-div">';
		echo	'<iframe src="' . $this->_assetsUrl . '/phpfreechat"></iframe>';
		echo '</div>';
	}
}