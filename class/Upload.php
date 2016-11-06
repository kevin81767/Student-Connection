<?php
class Upload extends database
{
	public $path_avatar='avatars/';
	public $extension_allowed=array('.jpeg','.jpg','.gif','.png');
	public $max_size=1000000;
	public $crypt_name=md5(uniqid(rand(),true));

	public function upload_avatar($picture)
	{
		
	}
}