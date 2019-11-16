<?php 
namespace Madeny\lhttps;

use Madeny\lhttps\Openssl;
use Madeny\lhttps\Path;

class Config{

	function __construct()
	{

		$folders = ['cnf', 'config', 'csr', 'keys', 'live', 'logs'];
		$i = 0;

		foreach ($folders as $key => $value) {
			
			if (file_exists(Path::all()."/".$value)) {
				echo "\n ... checking output folders \n";
				return;
			}else {
				while ($i < 6) {

					mkdir(Path::all()."/".$folders[$i]);
					$i++;
				}
			}
		}
	}

	public static function file($path, $domain)
	{
		return new Openssl($path, $domain);
	}
}
