<?PHP

#define('LOCAL_UPLOAD_PATH', dirname(DOC_ROOT).'/shine_uploads');
define('LOCAL_UPLOAD_PATH', DOC_ROOT.'/shine_uploads');					//changed by egordienko on 5 Oct 2012

class LocalUpload {
	public static function uploadFile($fs_path, $name) {
		if (!is_dir(LOCAL_UPLOAD_PATH)) mkdir(LOCAL_UPLOAD_PATH, 0777, true);
		return move_uploaded_file($fs_path, LOCAL_UPLOAD_PATH.'/'.$name);
	}
	
	public static function deleteFile($name) {
		return unlink(LOCAL_UPLOAD_PATH.'/'.$name);
	}
}