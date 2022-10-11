<?php 
namespace App\Class\path;


class PathClass
{
	static public function components(){
		return dirname(__FILE__, 3). '/public/components/';
	}
}


?>