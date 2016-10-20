<?php
//上传目录的根路径
$targetFolder = '/uploads'; // Relative to the root

if (!empty($_FILES) ) {
	$tempFile   = $_FILES['Filedata']['tmp_name'];
	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
	//上传的原始文件名称$_FILES['Filedata']['name']
    //重新定义文件名称md5(time())
    //获取上传文件的信息
    $fileParts = pathinfo($_FILES['Filedata']['name']);
    //获取用户名称id
    $userId = Yaf_Session::getInstance()->get('login_user');
    //如果当前用户没有创建文件夹的话
    if(!is_dir($targetPath.'/'.$userId)){
        $res = mkdir(iconv("UTF-8", "GBK", $targetPath.'/'.$userId),0777,true);
        if(!$res){
            echo '目录创建失败!';
        }
    }
    //重新设定上传的目录
    $targetPath = $targetPath.'/'.$userId;
    //文件名称
    $filename = md5(time()).'.'.$fileParts['extension'];
	$targetFile = rtrim($targetPath,'/') . '/'.$filename;

	$fileTypes = array('jpg','jpeg','gif','png','mp4'); // 上传文件的后缀
	if (in_array($fileParts['extension'],$fileTypes)) {
		move_uploaded_file($tempFile,$targetFile);
		echo $filename;
	} else {
		echo '上传文件的后缀不对!';
	}
}
?>