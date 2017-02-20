
<h1>User profile chato</h1>
<!--<h1>User profile </h1>-->

<div style="display:inline; float:right">
    <img src="uploads/user_photo.jpg"><br />
    <div style="display:block; float:right; margin-right:10px; margin-top:6px"><a href="index.php?r=sacarfoto/newPhoto">New photo</a></div>
    <div style="display:block; float:right; margin-right:10px; margin-top:6px"><a href="index.php?r=sacarfoto/newPhoto2">New photo2</a></div>
</div>

<p><b>Name:</b> You</p>
<p><b>Notes:</b> A very passionate Yii developer.</p>

<?php
$this->widget('CMultiFileUpload', array(
    'model'=>$model,
    'attribute'=>'files',
    'accept'=>'jpg|gif',
    'options'=>array(
        'onFileSelect'=>'function(e, v, m){ alert("onFileSelect - "+v) }',
        'afterFileSelect'=>'function(e, v, m){ alert("afterFileSelect - "+v) }',
        'onFileAppend'=>'function(e, v, m){ alert("onFileAppend - "+v) }',
        'afterFileAppend'=>'function(e, v, m){ alert("afterFileAppend - "+v) }',
        'onFileRemove'=>'function(e, v, m){ alert("onFileRemove - "+v) }',
        'afterFileRemove'=>'function(e, v, m){ alert("afterFileRemove - "+v) }',
    ),
));
?>

<body>
<input accept="image/*"  type="file" capture/>
</body>
