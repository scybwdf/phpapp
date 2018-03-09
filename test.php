<?php
//require_once('./response.php');
require_once('./file.php');

$arr=array(
    'id'=>1,
    'name'=>'wf'
);
//$arr=array('dd','ss','ss');
//echo Response::json('200','返回数据成功',$arr);

//echo Response::show('200','返回数据成功',$arr,'xml');
$filecache=new File();
if($re=$filecache->fileCache('file')){
    var_dump($re);die;
}
else{
    echo 'error';
}
;
